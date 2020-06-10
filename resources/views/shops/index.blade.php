@extends('layouts.master')

@section('content')

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/18.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="famie-breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Categories</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Shop Area Start ##### -->
    <section class="shop-area">
        <div class="container">
            <div class="row">
                <!-- Shop Filters -->
                <div class="col-12">
                    <nav class="nav nav-pills flex-column flex-sm-row">
                        <a class="flex-sm-fill text-sm-center nav-link active" href="{{route('shop')}}">All Products</a>
                        @foreach($categories as $category)
                            <a class="flex-sm-fill text-sm-center nav-link" href="#">{{$category->name}}</a>
                        @endforeach
                    </nav>
                </div>

            </div>

            <div class="row my-lg-5">
                <!-- Shop Sidebar Area -->
                <div class="col-12 col-md-4 col-lg-3">

                    <!-- Shopping Cart -->
                    <div class="shopping-cart mb-50">
                        <h5 class="mb-30">Shopping Cart</h5>
                        <!-- Cart Table -->
                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <!-- tbody -->
                                <tbody>
                                <!-- Single Table Row -->
                                <tr>
                                    <td class="cart_product_img">
                                        <a href="#"><img src="{{asset('img/products/p1.jpg')}}" alt="Product"></a>
                                    </td>
                                    <td class="cart_product_desc">
                                        <p>Bayonne Ham</p>
                                        <h6>1 x $39.99</h6>
                                    </td>
                                    <td class="pro-close">
                                        <a href="#"><i class="icon_close"></i></a>
                                    </td>
                                </tr>
                                <!-- Single Table Row -->
                                <tr>
                                    <td class="cart_product_img">
                                        <a href="#"><img src="img/bg-img/35.jpg" alt="Product"></a>
                                    </td>
                                    <td class="cart_product_desc">
                                        <p>Bayonne Ham</p>
                                        <h6>1 x $39.99</h6>
                                    </td>
                                    <td class="pro-close">
                                        <a href="#"><i class="icon_close"></i></a>
                                    </td>
                                </tr>
                                <!-- Single Table Row -->
                                <tr>
                                    <td class="cart_product_img">
                                        <a href="#"><img src="img/bg-img/36.jpg" alt="Product"></a>
                                    </td>
                                    <td class="cart_product_desc">
                                        <p>Bayonne Ham</p>
                                        <h6>1 x $39.99</h6>
                                    </td>
                                    <td class="pro-close">
                                        <a href="#"><i class="icon_close"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- SubTotal -->
                        <div class="cart-summary d-flex align-items-center justify-content-between">
                            <div class="sub-total">
                                <h6>SUBTOTAL</h6>
                            </div>
                            <div class="total-price">
                                <h6>$52.99</h6>
                            </div>
                        </div>
                        <!-- Checkout -->
                        <a href="#" class="btn famie-btn checkout-btn mt-30 w-100">Checkout</a>
                    </div>

                    <!-- Single Widget Area -->
                    <div class="single-widget-area">
                        <!-- Title -->
                        <h5 class="widget-title">Categories</h5>
                        <!-- Cata List -->
                        <ul class="cata-list shop-page">
                            <li><a href="{{route('shop')}}">All Products</a></li>
                            @foreach($categories as $category)
                                <li><a href="">{{$category->name}}<span>({{$category->products->count()}})</span></a></li>
                            @endforeach
                        </ul>
                    </div>

                </div>

                <!-- Shop Products Area -->
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="row">

                     @foreach($products as $product)
                        <!-- Single Product Area -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-area mb-50">
                                <!-- Product Thumbnail -->
                                <div class="product-thumbnail">
                                    <img src="{{asset('img/products/'.$product->image)}}" alt="">
                                    <!-- Product Tags -->
                                @if($product->old_price != 0)
                                    <span class="product-tags bg-success">Ulje</span>
                                @endif
                                    <!-- Product Meta Data -->
                                    <div class="product-meta-data">
                                        <!--<a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i class="icon_heart_alt"></i></a>-->
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon_cart_alt"></i></a>
                                        <!--<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>-->
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-desc text-center pt-4">
                                    <a href="#" class="product-title">{{$product->name}}</a>
                                    <h6 class="price">
                                        @if($product->old_price != 0)
                                            <span>{{$product->old_price}}</span>
                                        @endif
                                        {{$product->price}} LEKE
                                    </h6>

                                </div>
                            </div>
                        </div>

                         @endforeach

                    </div>

                    <!-- Pagination -->
                    <nav>
                        <ul class="pagination mb-0 mt-50">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Shop Area End ##### -->

@endsection


