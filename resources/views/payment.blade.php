@extends('layouts.main')
@section('content')
   <!-- Page Content -->
    <!-- Payment Page Starts Here -->
    <div class="about-page">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading text-center">
                <div class="line-dec"></div>
                <h1>Payment</h1>
                @if(Session::has('total')&& Session::get('total') != null)
                @if(Session::has('order_id')&& Session::get('order_id') != null)
                <p class="text-info">Total: ${{Session::get('total')}}</p>
                @endif
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Payment Page Ends Here -->
  
     
@endsection
