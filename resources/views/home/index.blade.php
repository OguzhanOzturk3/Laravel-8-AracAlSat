@php
    $setting = \App\Http\Controllers\HomeController::getsetting();

@endphp

@extends('layouts.home')

@section('title',$setting->title )
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)

@section('content')
    @include('home._slider')
    <!-- Start Promo section -->
    <section id="aa-promo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-promo-area">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Promo section -->
    <!-- Products section -->
    <section id="aa-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                <!-- start prduct navigation -->
                                <ul class="nav nav-tabs aa-products-tab">
                                    <li class="active"><a href="#men" data-toggle="tab">Daily</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Start Daily product category -->
                                    <div class="tab-pane fade in active" id="men">
                                        <ul class="aa-product-catg">
                                            @foreach($daily as $rs)
                                            <!-- start single product item -->

                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="polo shirt img" width="250" height="250"></a>
                                                    <a class="aa-add-card-btn"href="{{route('addtocart',['id' => $rs->id])}}"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">{{$rs->title}}</a></h4>
                                                        <span class="aa-product-price">{{$rs->price}}$</span><span class="aa-product-price"><del>{{$rs->price * 1.2}}$</del></span>
                                                        @php
                                                            $avgrev = \App\Http\Controllers\HomeController::avrgreview($rs->id);
                                                            $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
                                                        @endphp
                                                        <div class="aa-product-rating">
                                                            @if($avgrev>=1) <span class="fa fa-star" ></span>@endif
                                                            @if($avgrev>=2) <span class="fa fa-star" ></span>@endif
                                                            @if($avgrev>=3) <span class="fa fa-star" ></span>@endif
                                                            @if($avgrev>=4) <span class="fa fa-star" ></span>@endif
                                                            @if($avgrev>=5) <span class="fa fa-star" ></span>@endif
                                                            <span>({{$countreview}})</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="{{route('car',['id' => $rs->id])}}" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" "><span class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>

                                            <!-- start single product item -->
                                                @endforeach
                                        </ul>
                                        <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <!-- / Daily product category -->
                                </div>
                                <!-- quick view modal -->
                                <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <div class="row">
                                                    <!-- Modal view slider -->
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="aa-product-view-slider">
                                                            <div class="simpleLens-gallery-container" id="demo-1">
                                                                <div class="simpleLens-container">
                                                                    <div class="simpleLens-big-image-container">
                                                                        <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                                                            <img src="{{asset('assets')}}/img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="simpleLens-thumbnails-container">
                                                                    <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                       data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                                                       data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                                                        <img src="{{asset('assets')}}/img/view-slider/thumbnail/polo-shirt-1.png">
                                                                    </a>
                                                                    <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                       data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                                                       data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                                                        <img src="{{asset('assets')}}/img/view-slider/thumbnail/polo-shirt-3.png">
                                                                    </a>

                                                                    <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                       data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                                                       data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                                                        <img src="{{asset('assets')}}/img/view-slider/thumbnail/polo-shirt-4.png">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal view content -->
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="aa-product-view-content">
                                                            <h3>T-Shirt</h3>
                                                            <div class="aa-price-block">
                                                                <span class="aa-product-view-price">$34.99</span>
                                                                <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                                                            <h4>Size</h4>
                                                            <div class="aa-prod-view-size">
                                                                <a href="#">S</a>
                                                                <a href="#">M</a>
                                                                <a href="#">L</a>
                                                                <a href="#">XL</a>
                                                            </div>
                                                            <div class="aa-prod-quantity">
                                                                <form action="">
                                                                    <select name="" id="">
                                                                        <option value="0" selected="1">1</option>
                                                                        <option value="1">2</option>
                                                                        <option value="2">3</option>
                                                                        <option value="3">4</option>
                                                                        <option value="4">5</option>
                                                                        <option value="5">6</option>
                                                                    </select>
                                                                </form>
                                                                <p class="aa-prod-category">
                                                                    Category: <a href="#">Polo T-Shirt</a>
                                                                </p>
                                                            </div>
                                                            <div class="aa-prod-view-bottom">
                                                                <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- / quick view modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Products section -->

    <!-- popular section -->
    <section id="aa-popular-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-popular-category-area">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#popular" data-toggle="tab">Picked For You</a></li>
                                <li><a href="#latest" data-toggle="tab">Latest</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start Picked For You category -->
                                <div class="tab-pane fade in active" id="popular">
                                    <ul class="aa-product-catg aa-popular-slider">
                                       @foreach($picked as $rs)
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="polo shirt img" width="250" height="250"></a>
                                                <a class="aa-add-card-btn"href="{{route('addtocart',['id' => $rs->id])}}"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">{{$rs->title}}</a></h4>
                                                    <span class="aa-product-price">{{$rs->price}}$</span><span class="aa-product-price"><del>{{$rs->price * 1.2}}$</del></span>
                                                    @php
                                                        $avgrev = \App\Http\Controllers\HomeController::avrgreview($rs->id);
                                                        $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
                                                    @endphp
                                                    <div class="aa-product-rating">
                                                        @if($avgrev>=1) <span class="fa fa-star" ></span>@endif
                                                        @if($avgrev>=2) <span class="fa fa-star" ></span>@endif
                                                        @if($avgrev>=3) <span class="fa fa-star" ></span>@endif
                                                        @if($avgrev>=4) <span class="fa fa-star" ></span>@endif
                                                        @if($avgrev>=5) <span class="fa fa-star" ></span>@endif
                                                        <span>({{$countreview}})</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="{{route('car',['id' => $rs->id])}}" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" ><span class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        @endforeach

                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / Picked For You product category -->


                                <!-- start latest product category -->
                                <div class="tab-pane fade" id="latest">
                                    <ul class="aa-product-catg aa-latest-slider">
                                    @foreach($last as $rs)
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="polo shirt img width="250" height="250""></a>
                                                <a class="aa-add-card-btn"href="{{route('addtocart',['id' => $rs->id])}}"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">{{$rs->title}}</a></h4>
                                                    <span class="aa-product-price">{{$rs->price}}$</span>
                                                    @php
                                                        $avgrev = \App\Http\Controllers\HomeController::avrgreview($rs->id);
                                                        $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
                                                    @endphp
                                                    <div class="aa-product-rating">

                                                        @if($avgrev>=1) <span class="fa fa-star" ></span>@endif
                                                        @if($avgrev>=2) <span class="fa fa-star" ></span>@endif
                                                        @if($avgrev>=3) <span class="fa fa-star" ></span>@endif
                                                        @if($avgrev>=4) <span class="fa fa-star" ></span>@endif
                                                        @if($avgrev>=5) <span class="fa fa-star" ></span>@endif
                                                        <span>({{$countreview}})</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="{{route('car',['id' => $rs->id])}}" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" ><span class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        @endforeach

                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / latest product category -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / popular section -->

@endsection
