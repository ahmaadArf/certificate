<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Cashier\Cashier;
use Stripe\StripeClient;

use App\Models\Plan;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Subscription;
use App\Models\SubscriptionItem;
use Stripe\PaymentMethod;
use App\Models\Subscription as LocalSubscription;

class SubscriptionController extends Controller
{
    public function retrievePlans()
    {
        $key = \config('services.stripe.Secret_key');
        $stripe = new StripeClient($key);
        $plansraw = $stripe->plans->all([
            "active" => true,

        ]);
        $plans = $plansraw->data;

        foreach ($plans as $plan) {
            $prod = $stripe->products->retrieve(
                $plan->product,
                []
            );
            $plan->product = $prod;
        }
        return $plans;
    }

    public function showSubscription()
    {
        $user =Auth::guard('sanctum')->user();
        $plans = $this->retrievePlans();
        return response()->json([
            'plans'=>$plans,
        ]);
          
    }
    
   

    public function createToken(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.Secret key'));

        try {
            $paymentMethod = PaymentMethod::create([
                'type' => 'card',
                'card' => [
                    'number' => $request->input('card_number'),
                    'exp_month' => $request->input('card_exp_month'),
                    'exp_year' => $request->input('card_exp_year'),
                    'cvc' => $request->input('card_cvc'),
                ],
            ]);

            return response()->json([
                'token' => $paymentMethod->id,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 400);
        }
    }
   
    public function createCustomer(Request $request)
    {
       
    Stripe::setApiKey(config('services.stripe.Secret_key'));
    $user= Auth::guard('sanctum')->user();
    $stripeCustomer=$user->createAsStripeCustomer([]);
    $stripeCustomerId = $stripeCustomer->stripe_id;
    $user->stripe_id = $stripeCustomerId;
    $user->save();
    return response()->json(['message' => 'Customer created successfully',
                             'customerId'=>$stripeCustomerId,
                          ]);
        
    }
    public function cancel(Request $request,$plan)
{
    $user = Auth::user();
    $plan = Plan::findOrFail($plan);
    
    if ($user->subscribed($plan->stripe_plan)) {
        $subscription = $user->subscription($plan->stripe_plan);
        $subscription->cancel();
        return response()->json([
            'status'=>'success',
            'message' => 'Subscription canceled successfully.',
        'next_toute'=>route('plans'),
     ]);
    } else {
        return response()->json([
            'status'=>'fail',
            'message' => 'You are not subscribed to this plan.',
        'next_toute'=>route('plans'),
     ]);
       
    }
}
public function changeSubscription(Request $request)
{
    $user = Auth::user();
    $newPlan = Plan::findOrFail($request->plan);
    if ($user->subscribed($newPlan->stripe_plan)) {
        return response()->json([
            'status'=>'fail',
            'message' => 'You are already subscribed to this plan.',
        'next_toute'=>route('plans'),
     ]);
    }
    $user->subscription($user->subscription()->name)
        ->swap($newPlan->stripe_plan);
        return response()->json([
            'status'=>'success',
            'message' => 'Subscription changed successfully.',
        'next_toute'=>route('plans'),
     ]);
}
public function resume(Request $request,$plan)
{
    $user = Auth::user();
    $plan = Plan::findOrFail($plan);
    
    if ($user->subscribed($plan->stripe_plan)) {
        $subscription = $user->subscription($plan->stripe_plan);
        $subscription->resume();
        return response()->json([
            'status'=>'success',
            'message' => 'Subscription canceled successfully.',
        'next_toute'=>route('plans'),
     ]);
    } else {
        return response()->json([
            'status'=>'fail',
            'message' => 'You are not subscribed to this plan.',
        'next_toute'=>route('plans'),
     ]);
    }
}
public function createSubscription(Request $request)
{
    

   
}
public function cancelSub(Request $request, $subscriptionId)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        $subscription = Subscription::retrieve($subscriptionId);

        if ($subscription->cancel_at_period_end) {
            return response()->json([
                'message' => 'Subscription is already scheduled for cancellation.',
            ], 400);
        }

        $subscription->cancel(['cancel_at_period_end' => true]);

        return response()->json([
            'message' => 'Subscription has been canceled and will end at the next billing cycle.',
        ]);
    }
    public function resumeSub(Request $request, $subscriptionId)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $subscription = Subscription::retrieve($subscriptionId);

        if (!$subscription->cancel_at_period_end) {
            return response()->json([
                'message' => 'Subscription is not canceled or already resumed.',
            ], 400);
        }

        $subscription->cancel_at_period_end = false;
        $subscription->save();

        return response()->json([
            'message' => 'Subscription has been resumed.',
        ]);
    }



    
    
    
    }


    
