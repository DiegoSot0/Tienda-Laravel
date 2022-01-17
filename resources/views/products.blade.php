@extends('layouts.main')
@section('content')


    <!-- Page Content -->
    <!-- Items Starts Here -->
    <div class="featured-page">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Featured Items</h1>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div id="filters" class="button-group">
                        <a href="{{ route('products') }}" class="btn btn-primary" data-filter="*">All Products</a>
                        <a href="{{ route('newest') }}" class="btn btn-primary" data-filter=".new">Newest</a>
                        <a href="{{ route('lowest_price') }}" class="btn btn-primary" data-filter=".low">Low Price</a>
                        <a href="{{ route('hight_price') }}" class="btn btn-primary" data-filter=".high">Hight Price</a>
                        <a href="{{ route('men') }}" class="btn btn-primary" data-filter=".high">Men</a>
                        <a href="{{ route('women') }}" class="btn btn-primary" data-filter=".high">Women</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="featured container no-gutter">

        <div class="row posts">
            @foreach ($products as $product)
                <div id="{{ $product->id }}" class="item new col-md-3">
                    <div class="featured-item text-center">
                        <img src="{{ asset('images/' . $product->image) }}" alt="Item 1">
                        <h4>{{ $product->name }}</h4>
                        @if ($product->sale_price)
                            <h5>${{ $product->sale_price }}</h5>
                            <h6><del>${{ $product->price }}</del></h6>
                        @else
                            <h6>${{ $product->price }}</h6>
                        @endif
                        <form action="{{ route('add_to_cart') }}" method="POST">
                          @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="image" value="{{ $product->image }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="sale_price" value="{{ $product->sale_price }}">
                            <input class="btn btn-block btn-primary mt-3" type="submit" name="add_to_cart" id=""
                                value="Add to Cart">
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <div class="d-flex justify-content-center">
        {!! $products->links() !!}
    </div>
    <!--    Featred Page Ends Here -->





@endsection
