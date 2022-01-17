@extends('layouts.main')
@section('content')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="caption">
                        <h2>Ecommerce HTML Template</h2>
                        <div class="line-dec"></div>
                        <p>Pixie HTML Template can be converted into your desired CMS theme. Total <strong>5 pages</strong>
                            included. You can use this Bootstrap v4.1.3 layout for any CMS.
                            <br><br>Please tell your friends about <a rel="nofollow"
                                href="https://www.facebook.com/tooplate/">Tooplate</a> free template site. Thank you. Photo
                            credit goes to <a rel="nofollow" href="https://www.pexels.com">Pexels website</a>.
                        </p>
                        <div class="main-button">
                            <a href="#">Order Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Featured Starts Here -->
    <div class="featured-items">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Featured Items</h1>
                    </div>
                </div>
                <div class="row col-md-12">
                    @foreach ($products as $product)
                        <div class="col-md-3">
                            <a href="single-product.html">
                                <div class="featured-item text-center">
                                    <img src="{{ asset('images/' . $product->image) }}" alt="Item 1">
                                    <h4>{{ $product->name }}</h4>
                                    @if ($product->sale_price)
                                        <h5>${{ $product->sale_price }}</h5>
                                        <h6><del>${{ $product->price }}</del></h6>
                                    @else
                                        <h6>${{ $product->price }}</h6>
                                    @endif
                                    <form action="{{route('add_to_cart')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <input type="hidden" name="name" value="{{$product->name}}">
                                        <input type="hidden" name="image" value="{{$product->image}}">
                                        <input type="hidden" name="price" value="{{$product->price}}">
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="sale_price" value="{{$product->sale_price}}">
                                        <input class="btn btn-block btn-primary mt-3" type="submit" name="add_to_cart" id="" value="Add to Cart">
                                    </form>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="" class="btn btn-primary">More</a>
            </div>
        </div>
    </div>
    <!-- Featred Ends Here -->
    <!-- Featred Ends Here -->
    <div class="featur ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-head">
                        <div class="line-dec"></div>
                        <h1>Outstanding Brands</h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="main-cont">
                        <div class="container">
                            <img src="{{ asset('images/brand1.png') }}" alt="" style="width:200px;height:100px"
                                class="mx-3 my-1">
                            <img src="{{ asset('images/brand2.png') }}" alt="" style="width:200px;height:100px"
                                class="mx-3 my-1">
                            <img src="{{ asset('images/brand3.png') }}" alt="" style="width:200px;height:100px"
                                class="mx-3 my-1">
                            <img src="{{ asset('images/brand4.png') }}" alt="" style="width:200px;height:100px"
                                class="mx-3 my-1">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Men Starts Here -->
    <div class="featured-items">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Men Items</h1>
                    </div>
                </div>
                <div class="row col-md-12">
                    @foreach ($men_products as $product)
                        <div class="col-md-3">
                            <a href="single-product.html">
                                <div class="featured-item text-center">
                                    <img src="{{ asset('images/' . $product->image) }}" alt="Item 1">
                                    <h4>{{ $product->name }}</h4>
                                    @if ($product->sale_price)
                                        <h5>${{ $product->sale_price }}</h5>
                                        <h6><del>${{ $product->price }}</del></h6>
                                    @else
                                        <h6>${{ $product->price }}</h6>
                                    @endif
                                    <form action="{{route('add_to_cart')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <input type="hidden" name="name" value="{{$product->name}}">
                                        <input type="hidden" name="image" value="{{$product->image}}">
                                        <input type="hidden" name="price" value="{{$product->price}}">
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="sale_price" value="{{$product->sale_price}}">
                                        <input class="btn btn-block btn-primary mt-3" type="submit" name="add_to_cart" id=""
                                            value="Add to Cart">
                                    </form>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="" class="btn btn-primary">More</a>
            </div>
        </div>
    </div>
    <!-- Banner Oferta Starts Here -->
     <div class="feat middle-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-content">
                        <div class="container">
                            <div class="container midd-banner-text">
                                <h4>MID SEASON'S SALE</h4>
                                <h1>Autumn Collection <br> UP to 30% OFF</h1>
                                <button class="text-uppercase btn btn-primary">shop now</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- women Starts Here -->
    <div class="featured-items">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Women Items</h1>
                    </div>
                </div>
                <div class="row col-md-12">
                    @foreach ($women_products as $product)
                        <div class="col-md-3">
                            <a href="single-product.html">
                                <div class="featured-item text-center">
                                    <img src="{{ asset('images/' . $product->image) }}" alt="Item 1">
                                    <h4>{{ $product->name }}</h4>
                                    @if ($product->sale_price)
                                        <h5>${{ $product->sale_price }}</h5>
                                        <h6><del>${{ $product->price }}</del></h6>
                                    @else
                                        <h6>${{ $product->price }}</h6>
                                    @endif
                                    <form action="{{route('add_to_cart')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <input type="hidden" name="name" value="{{$product->name}}">
                                        <input type="hidden" name="image" value="{{$product->image}}">
                                        <input type="hidden" name="price" value="{{$product->price}}">
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="sale_price" value="{{$product->sale_price}}">
                                        <input class="btn btn-block btn-primary mt-3" type="submit" name="add_to_cart" id=""
                                            value="Add to Cart">
                                    </form>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="" class="btn btn-primary">More</a>
            </div>
        </div>
    </div>
    <!-- Subscribe Form Starts Here -->
    <div class="subscribe-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Subscribe on PIXIE now!</h1>
                    </div>
                </div>
                <div class="col-md-8 offset-md-2">
                    <div class="main-content">
                        <p>Integer vel turpis ultricies, lacinia ligula id, lobortis augue. Vivamus porttitor dui id dictum
                            efficitur. Phasellus vel interdum elit.</p>
                        <div class="container">
                            <form id="subscribe" action="" method="get">
                                <div class="row">
                                    <div class="col-md-7">
                                        <fieldset>
                                            <input name="email" type="text" class="form-control" id="email"
                                                onfocus="if(this.value == 'Your Email...') { this.value = ''; }"
                                                onBlur="if(this.value == '') { this.value = 'Your Email...';}"
                                                value="Your Email..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-5">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">Subscribe
                                                Now!</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe Form Ends Here -->


@endsection
