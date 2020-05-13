@extends('layouts.app')

@section('content')

<link href="{{ asset('css/rates.css') }}" rel="stylesheet">

<section class="pricing py-5">
    <div class="container">
      <div class="row">
        <!-- Free Tier -->
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Basic</h5>
              <h6 class="card-price text-center">R0<span class="period">/month</span></h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Item</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Item</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Item</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Item</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Item</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Item</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Item</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Item</li>
              </ul>
              <a href="#" class="btn btn-block btn-primary text-uppercase">Checkout</a>
            </div>
          </div>
        </div>
        <!-- Plus Tier -->
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Standard</h5>
              <h6 class="card-price text-center">R0<span class="period">/month</span></h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Item</strong></li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Item</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Item</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Item</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Item</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Item</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Item</li>
                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
              </ul>
              <a href="#" class="btn btn-block btn-primary text-uppercase">Checkout</a>
            </div>
          </div>
        </div>
        <!-- Pro Tier -->
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Ultimate</h5>
              <h6 class="card-price text-center">R0<span class="period">/month</span></h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Item</strong></li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Item</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Item</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Item</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Item</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Item</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Item</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Item</li>
              </ul>
              <a href="#" class="btn btn-block btn-primary text-uppercase">Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection