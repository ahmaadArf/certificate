@extends('layouts.app')
@section('content')
<script async src="https://js.stripe.com/v3/pricing-table.js"></script>
<stripe-pricing-table pricing-table-id="prctbl_1NLm1wIenO4vNmXt6VZuBmWY"
publishable-key="pk_test_51NJ039IenO4vNmXtb7O7Ur5uQeSg7DaslzpZlcQw9RFURButUFWzHqg7oNDeWYxg2awwvSjQsrUD6NBgE57WK99900pxVNLRmm">
</stripe-pricing-table>
<script src="https://js.stripe.com/v3/"></script>
<script>
    const subscribeButton = document.getElementById('subscribe-button');
    subscribeButton.addEventListener('click', createSubscription);
    function createSubscription() {
        const planId = 'prctbl_1NLm1wIenO4vNmXt6VZuBmWY';
        const stripe = Stripe('{{ config('services.stripe.Publishable_key') }}');
        stripe.createToken().then(result => {
            if (result.error) {
                console.error(result.error);
                return;
            }

            const stripeToken = result.token.id;

        
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '/api/subscriptions');
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}'); 
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                       
                        const responseData = JSON.parse(xhr.responseText);
                        console.log(responseData);
                    } else {
                        
                        console.error('Subscription creation failed');
                    }
                }
            };
            xhr.send(JSON.stringify({
                plan: planId,
                stripe_id: stripeToken,
            }));
        });
    }
</script>
@endsection
