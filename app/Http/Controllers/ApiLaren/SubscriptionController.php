<?php

namespace App\Http\Controllers\ApiLaren;

use Stripe\Stripe;
use App\Models\Plan;
use Stripe\PaymentMethod;
use Illuminate\Http\Request;
use Stripe\Subscription;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Subscription as SubModel;
use App\Http\Controllers\ApiLaren\Traits\GeneralTrait;

class SubscriptionController extends Controller
{
    use GeneralTrait;
    public function paymentMethodId(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.key'));
            $user = Auth::guard('user-api')->user();
            $paymentMethod = PaymentMethod::create([
                'type' => 'card',
                'card' => [
                    'number' => $request->card_number,
                    'exp_month' => $request->card_exp_month,
                    'exp_year' => $request->card_exp_year,
                    'cvc' => $request->card_cvc,
                ],
                'billing_details' => [
                    'name' => $request->card_name,
                    'email' => $request->email,
                    'address' => [
                        'country' => $request->country,
                    ],
                ],

            ]);


        return  $paymentMethod->id;

    }
    public function Subscription(Request $request)
    {
       $user = Auth::guard('user-api')->user();
       $paymentMethod = $this->paymentMethodId($request);
        $user->createOrGetStripeCustomer();
        $user->addPaymentMethod($paymentMethod);
        $plan = Plan::find($request->plan);
         $subscription= $user->newSubscription($plan->name,$plan->stripe_plan)
            ->create($paymentMethod, [
           'email' => $user->email,
           'collection_method' => 'charge_automatically',
           'items' => [
               [
                 'price' => $plan->stripe_plan,
                   'quantity' => 1,
               ],
           ],

       ]);
       return $this->returnData('subscription',$subscription,'subscription details');

    }
    public function cancel(Request $request ) {
        $user = Auth::guard('user-api')->user();
        Stripe::setApiKey(config('services.stripe.secret'));

         $Subscription = SubModel::where('stripe_id',$request->id)->first();

        if ($Subscription) {
            $stripeSubscription = Subscription::retrieve($Subscription->stripe_id);

            $stripeSubscription->cancel();
            return $this->returnSuccessMessage('Subscription canceled successfully');

        }

        return $this->returnError(404,'You are not subscribed to this plan');



    }




}
