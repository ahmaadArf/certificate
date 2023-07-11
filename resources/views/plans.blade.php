@extends('layouts.app')
<style>
* {
    box-sizing: border-box;
  }
  
  .columns {
    float: left;
    width: 33.3%;
    padding: 8px;
  }
  
  .price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
  }
  
  .price:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
  }
  
  .price .header {
    background-color: #111;
    color: white;
    font-size: 25px;
  }
  
  .price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
  }
  
  .price .grey {
    background-color: #eee;
    font-size: 20px;
  }
  
  .button {
    background-color: #04AA6D;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
  }
  
  @media only screen and (max-width: 600px) {
    .columns {
      width: 100%;
    }
  }
</style>
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- @if(is_null($currentPlan))
            <p>You are in free plane.Please choose plan to upgrade</p>
            <br><br>
            @endif --}}
            <div class="card">
                <div class="card-header">Select Plane:</div>
 
                <div class="card-body">
                    <div class="row">
                        @foreach($plans as $plan)
                        <div class="columns">
                            <ul class="price">
                              <li class="header">{{ $plan->name }}</li>
                              <li class="grey">${{ $plan->price }} /{{ $plan->interval }}</li>
                              @foreach($plan->features as $feature)
                              <li>{{ $feature->name }}</li>
                              @endforeach
                              <li class="grey"><a href="{{ route('user.checkout',$plan->id) }}" class="btn btn-primary pull-right">Choose</a></li>
                            </ul>
                         </div>
                         @endforeach
                     </div>
                </div>
  
            </div>
            </div>
        </div>
    </div>
</div>
@endsection