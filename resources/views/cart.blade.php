@extends('layouts.main')
@section('content')

    <section>
        <div class="container">

            <!--Section: Block Content-->
            <section class="mt-5 mb-4">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-8">




                        <!-- Card -->
                        <div class="card wish-list mb-4">
                            <div class="card-body">

                                <h5 class="mb-4">Cart items</h5>
                                @if (Session::has('cart'))
                                    @foreach (Session::get('cart') as $id => $product)
                                        <div class="row mb-4">
                                            <div class="col-md-5 col-lg-3 col-xl-3">
                                                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                                    <img class="img-fluid w-50"
                                                        src="{{ asset('images/' . $product['image']) }}" alt="Sample">

                                                </div>
                                            </div>
                                            <div class="col-md-7 col-lg-9 col-xl-9">
                                                <div>
                                                    <div class="d-flex justify-content-between ">
                                                        <div>
                                                            <h5>{{ $product['name'] }}</h5>
                                                            <p class="mb-3 text-muted text-uppercase small">Price :
                                                                ${{ $product['price'] }}</p>
                                                        </div>
                                                        <div>
                                                        
                                                                <form method="POST" action="{{route('edit_product_quantity')}}">
                                                                    @csrf
                                                                <input class="quantity" min="0" name="quantity"
                                                                    value="{{$product['quantity']}}" type="number">
                                                                    <input type="hidden" name="id" value="{{$product['id']}}">
                                                                    <input type="submit" value="edit" name="edit_product_quantity" id="" class="edit-btn">
                                                                    </form>
            
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <form action="{{ route('remove_from_cart') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{ $product['id'] }}">
                                                                <i class="fa fa-trash text-info"></i><input type="submit" name="remove_btn"
                                                                    class="overlay view zoom text-info bg-transparent border-0 "
                                                                    value="Remove item">
                                                            </form>

                                                        </div>
                                                        <p class="mb-0">
                                                            <span><strong>${{ $product['quantity'] * $product['price'] }}</strong></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif


                            </div>
                        </div>
                        <!-- Card -->




                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4">

                        <!-- Card -->
                        <div class="card mb-4">
                            <div class="card-body">

                                <h5 class="mb-3">The total amount of</h5>
                                @if (Session::has('total'))
                                    <ul class="list-group list-group-flush">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                            Temporary amount
                                            <span>${{ Session::get('total') }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            Shipping
                                            <span>Gratis</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                            <div>
                                                <strong>The total amount of</strong>
                                                <strong>
                                                    <p class="mb-0">(including VAT)</p>
                                                </strong>
                                            </div>
                                            <span><strong>${{ Session::get('total') }}</strong></span>
                                        </li>
                                    </ul>
                                @endif
                                @if (Session::has('total'))
                                @if (Session::get('total') !=null)
                                    
                                <form action="{{ route('checkout') }}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">go to
                                        checkout</button>
                                    </form>
                                    
                                @endif
                                    
                               
                                    
                                @endif
                               
                            </div>
                        </div>
                        <!-- Card -->



                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Block Content-->

        </div>
    </section>
    <!--Main layout-->

    <!-- Footer -->

@endsection
