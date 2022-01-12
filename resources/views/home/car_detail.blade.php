@php
    $setting = \App\Http\Controllers\HomeController::getsetting()

@endphp

@extends('layouts.home')

@section('title',$data->title )
@section('description'){{$data->description}}@endsection
@section('keywords',$data->keywords)

@section('content')
    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="{{asset('assets')}}/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Vehicle Detail</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('home')}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}}</a></li>
                        <li class="active">{{$data->title}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- Cart view section -->
    <!-- product category -->
    <section id="aa-product-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                                <div class="aa-product-details-area">
                                    <div class="aa-product-details-content">
                                        <div class="row">
                                            <!-- Modal view slider -->
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="aa-product-view-slider">
                                                    <div id="demo-1" class="simpleLens-gallery-container">

                                                        <div class="simpleLens-container">

                                                                <div class="simpleLens-big-image-container"><a data-lens-image="img/view-slider/large/polo-shirt-1.png" class="simpleLens-lens-image"><img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" width="300" height="255" class="simpleLens-big-image"></a></div>

                                                        </div>

                                                        <div class="simpleLens-thumbnails-container">
                                                            @foreach($datalist as $rs)
                                                            <a data-big-image="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" width="300" height="255" data-lens-image="{{\Illuminate\Support\Facades\Storage::url($rs->image)}} " class="simpleLens-thumbnail-wrapper" href="#">
                                                                <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" width="50" height="50">
                                                            </a>
                                                            @endforeach

                                                            <a data-big-image="{{\Illuminate\Support\Facades\Storage::url($data->image)}}"width="300" height="255"  data-lens-image="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" class="simpleLens-thumbnail-wrapper" href="#">
                                                                <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" width="50" height="50">
                                                            </a>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal view content -->
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <div class="aa-product-view-content">
                                                    <h3>{{$data->title}}</h3>
                                                    <div class="aa-price-block">
                                                        <span class="aa-product-price">{{$data->price}}$     </span><span class="aa-product-price"><del>{{$data->price * 1.2}}$</del></span>
                                                        <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                                    </div>
                                                    <p>{{$data->description}}</p>

                                                    <h4>Color</h4>
                                                    <div class="aa-color-tag">
                                                        <a href="#" class="aa-color-green"></a>
                                                        <a href="#" class="aa-color-yellow"></a>
                                                        <a href="#" class="aa-color-pink"></a>
                                                        <a href="#" class="aa-color-black"></a>
                                                        <a href="#" class="aa-color-white"></a>
                                                    </div>

                                                    <div class="aa-prod-view-bottom">
                                                        <a class="aa-add-to-cart-btn" href="{{route('addtocart',['id' => $data->id])}}">Add To Cart</a>
                                                        <a class="aa-add-to-cart-btn" href="#">Wishlist</a>
                                                        <a class="aa-add-to-cart-btn" href="#">Compare</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aa-product-details-bottom">
                                        <ul class="nav nav-tabs" id="myTab2">
                                            <li><a href="#description" data-toggle="tab">Description</a></li>
                                            <li><a href="#review" data-toggle="tab">Reviews</a></li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="description">
                                                <p> {!! $data->detail !!} </p>

                                                    </div>
                                            <div class="tab-pane fade " id="review">
                                                <div class="aa-product-review-area">
                                                    <h4>2 Reviews for T-Shirt</h4>
                                                    <ul class="aa-review-nav">
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="img/testimonial-img-3.jpg" alt="girl image">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span></h4>
                                                                    <div class="aa-product-rating">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star-o"></span>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object" src="img/testimonial-img-3.jpg" alt="girl image">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span></h4>
                                                                    <div class="aa-product-rating">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star-o"></span>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <h4>Add a review</h4>
                                                    <div class="aa-your-rating">
                                                        <p>Your Rating</p>
                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                    </div>
                                                    <!-- review form -->
                                                    <form action="" class="aa-review-form">
                                                        <div class="form-group">
                                                            <label for="message">Your Review</label>
                                                            <textarea class="form-control" rows="3" id="message"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" class="form-control" id="name" placeholder="Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                                                        </div>

                                                        <button type="submit" class="btn btn-default aa-review-submit">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
    </section>
    <!-- / product category -->

@endsection
