@extends('layouts.main')
@section('content')

<div class="checkout">
    <div class="container">
        <section class="mt-5 mb-4">
            <!--Grid row-->
            <form class="row" method="POST" action="{{route('place_order')}}" >
                @csrf
                <!--Grid column-->
                <div class="col-lg-8 mb-4">
                    <!-- Card -->
                    <div class="card wish-list pb-1">
                        <div class="card-body">
                           
                            <div class="col-md-4 col-sm-12">
                                <div class="line-dec"></div>
                                <h1>Checkout</h1>
                            </div>
                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-lg-6">

                                    <!-- First name -->
                                    <div class="md-form md-outline mb-0 mb-lg-4">
                                        <input type="text" name="name" id="checkout-name" class="form-control mb-0 mb-lg-2">
                                        <label for="firstName">Name</label>
                                    </div>

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-lg-6">


                                    <div class="md-form md-outline">
                                        <input type="email" id="checkout-email" name="email" class="form-control">
                                        <label for="form19">Email address</label>
                                    </div>

                                </div>
                                <!-- Grid column -->
                                <!-- Grid column -->

                                <!-- Grid column -->

                            </div>
                            <div class="row">
                                <!-- Grid column -->
                                <div class="col-lg-6">
                                    <!-- Phone -->
                                    <div class="md-form md-outline">
                                        <input type="number" id="checkout-phone" name="phone" class="form-control">
                                        <label for="form18">Phone</label>
                                    </div>

                                </div>
                                <div class="col-lg-6">

                                    <!-- Town / City -->
                                    <div class="md-form md-outline">
                                        <input type="text" id="checkout-city" name="city" class="form-control">
                                        <label for="form17">City</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Grid row -->
                            <!-- Address Part 1 -->
                            <div class="md-form md-outline mt-0">
                                <input type="text" id="checkout-address" name="address" placeholder="House number and street name" class="form-control">
                                <label for="form14" class="active">Address</label>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <div class="col-lg-4">

                    <!-- Card -->
                    <div class="card mb-4">
                        @if(Session::has('total'))
                        <div class="card-body">

                            <h5 class="mb-3">The total amount of</h5>

                            <ul class="list-group list-group-flush">

                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>The total amount of</strong>
                                        <strong>
                                            <p class="mb-0">(including VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong>${{Session::get('total')}}</strong></span>
                                </li>
                            </ul>
                            @if (Session::has('total'))
                            @if (Session::get('total') !=null)
                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Make purchase</button>
                            @endif
                            @endif
                        </div>
                        @endif
                    </div>
                    <!-- Card -->



                </div>
            </form>
        </section>
    </div>
</div>


@endsection