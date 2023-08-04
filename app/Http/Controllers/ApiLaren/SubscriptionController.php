<?php

namespace App\Http\Controllers\ApiLaren;

use Stripe\Stripe;
use App\Models\Plan;
use Stripe\PaymentMethod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function paymentMethodId(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.key'));
            $user = Auth::guard('user-api')->user();
            $paymentMethod = PaymentMethod::create([
                'type' => 'card',
                'card' => [
                    'number' => $request->input('card_number'),
                    'exp_month' => $request->input('card_exp_month'),
                    'exp_year' => $request->input('card_exp_year'),
                    'cvc' => $request->input('card_cvc'),
                ],
                'billing_details' => [
                    'name' => $request->input('card_name'),
                    'email' => $request->input('email'),
                    'address' => [
                        'country' => $request->input('country'),
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
       return responseJson(true,'subscription details',$subscription);

    }




}
