@extends('layouts.app')
    
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    You will be charged ${{ number_format($plan->price, 2) }} for {{ $plan->name }} Plan
                </div>
  
                <div class="card-body">
  
                    <form id="payment-form" action="{{ route('subscription.create') }}" method="POST">
                        @csrf
                        <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">
  
                        <div class="row">
                            <div class="col-xl-4 col-lg-4">
                                <div class="form-group">
                                    <label for="card-holder-name">Name</label>
                                    <input type="text" name="card-holder-name" id="card-holder-name" class="form-control" placeholder="Name on the card">
                                </div>
                            </div>
                        </div>
                        <br><br>
  
                        <div class="row">
                            <div class="col-xl-4 col-lg-4">
                                <div class="form-group">
                                    <label for="">Card details</label>
                                    <br>
                                    <div id="card-element">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <hr>
                                <button type="submit" class="btn btn-primary" id="card-button" data-secret="{{ $intent->client_secret }}">Purchase</button>
                            </div>
                        </div>
  
                    </form>
  
                </div>
            </div>
        </div>
    </div>
</div>
  
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ config('services.stripe.Publishable_key') }}');
  
    const elements = stripe.elements()
    const cardElement = elements.create('card')
  
    cardElement.mount('#card-element')
  
    const form = document.getElementById('payment-form')
    const cardBtn = document.getElementById('card-button')
    const cardHolderName = document.getElementById('card-holder-name')

  
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
  
        cardBtn.disabled = true;
        const { setupIntent, error } = await stripe.confirmCardSetup(
            cardBtn.dataset.secret, {
                payment_method: {
                    card: cardElement,
                    billing_details: {
                        name: cardHolderName.value
                    }   
                }
            }
        );
  
        if (error) {
            cardBtn.disabled = false;
        } else {
            let token = document.createElement('input');
            token.setAttribute('type', 'hidden');
            token.setAttribute('name', 'token');
            token.setAttribute('value', setupIntent.payment_method);
            form.appendChild(token);
          // console.log(setupIntent);
         form.submit();
        }
    });
</script>

@endsection
