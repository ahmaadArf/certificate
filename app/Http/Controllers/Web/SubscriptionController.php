<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Cashier;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TrialRemainingDaysNotification;
use App\Notifications\TrialEndNotification;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Subscription;
use App\Models\SubscriptionItem;
use Stripe\PaymentMethod;
use App\Models\Plan;
use App\Models\User;
use Carbon\Carbon;


class SubscriptionController extends Controller
{

    public function checkout($planId)
    {
       
        $plan=Plan::findOrFail($planId);
        $user=Auth::user();
         $currentPlan=$user->subscription($plan->stripe_plan)->stripe_plan ?? null;
        if(!is_null($currentPlan) && $currentPlan!=$plan->stripe_plan){
            $user->subscription($plan->stripe_plan)->swap($plan->stripe_plan);
            return redirect()->route('plans');
        }
         $intent = $user->createSetupIntent();
        return view('checkout', compact('plan', 'intent'));
    }

    public function processSubscription(Request $request)
    {
       $user = Auth::user();
      $paymentMethod = $request->input('token');
        $user->createOrGetStripeCustomer();
        $user->addPaymentMethod($paymentMethod);
        $plan = Plan::find($request->plan);
            $user->newSubscription($plan->name,$plan->stripe_plan)
            ->create($paymentMethod, [
           'email' => $user->email,
           'collection_method' => 'create_certificate',
           'days_until_due' => 10,
           'items' => [
               [
                   'quantity' => 1,
               ],
           ],
           'meta_data'=>[
            [
            'max_certificate'=>'20',
            ],
        ],
       ]);
       return redirect()->route('plans')->with('success','Success creating subscription !');
    
    
    
        }
    
    // public function retrievePlans()
    // {
    //     $key = config('services.stripe.Secret_key');
    //     $stripe = new StripeClient($key);
    //     $plansraw = $stripe->plans->all([
    //         "active" => true,

    //     ]);
    //     $plans = $plansraw->data;

    //     foreach ($plans as $plan) {
    //         $prod = $stripe->products->retrieve(
    //             $plan->product,
    //             []
    //         );
    //         $plan->product = $prod;
    //     }
    //     return $plans;
    // }
        public function showPlans(Request $request)
    {

       //$user= Auth::user();
      // $plans = Plan::all();
       //$currentPlan=$user->subscription($request->plan)->stripe_plan;
        return view('plan', [
        //'plans' => $plans,
           //'currentPlan'=>$currentPlan,
        ]);
        }
        public function resume(Request $request){
            $user=Auth::user();
            $user->subscription('default')->resume();
            return redirect()->route('plans');
        }
        public function updateSubscripe(Request $request){
                 $user=Auth::user();
           
                $paymentMethod = $request->input('token');
                $user->createOrGetStripeCustomer();
                $user->addPaymentMethod($paymentMethod);
                $plan = Plan::find($request->plan);
                $user->newSubscription($plan,$plan->stripe_plan)
                ->create($paymentMethod, [
               'email' => $user->email,
               'collection_method' => 'create_certificate',
               'days_until_due' => 10,
               'items' => [
                   [
                       'quantity' => 1,
                   ],
               ],
               'meta_data'=>[
                   [
                   'max_certificate'=>'infinite',
                   ],
               ],
           ]);
              
           return redirect()->route('plans')->with('success','Success creating subscription !');

           
        }
        
        

}
