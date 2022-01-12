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
                    <h2>Vehicle List</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('home')}}">ProductList</a></li>
                        <li class="active"> {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- Cart view section -->
    <section id="aa-myaccount">
        <div class="container">
            <div class="row">
                <div class="col-md-12">




  <!-- product category -->
  <section id="aa-product-category">
      <div class="container">
          <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
            <div class="aa-product-catg-content">
                <div class="aa-product-catg-head">
                    <div class="aa-product-catg-head-left">
                        <form action="" class="aa-sort-form">
                            <label for="">Sort by</label>
                            <select name="">
                                <option value="1" selected="Default">Default</option>
                                <option value="2">Name</option>
                                <option value="3">Price</option>
                                <option value="4">Date</option>
                            </select>
                        </form>
                        <form action="" class="aa-show-form">
                            <label for="">Show</label>
                            <select name="">
                                <option value="1" selected="12">12</option>
                                <option value="2">24</option>
                                <option value="3">36</option>
                            </select>
                        </form>
                    </div>
                    <div class="aa-product-catg-head-right">
                        <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                        <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
                    </div>
                </div>


                <div class="aa-product-catg-body">
                    <ul class="aa-product-catg col">

                        @foreach($datalist as $rs)
                        <!-- start single product item -->
                        <li>
                            <figure>
                                <a class="aa-product-img" href="#"><img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="polo shirt img" width="250" height="255"></a>
                                <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                <figcaption>
                                    <a href="#">{{$rs->title}}</a><br>
                                    <a class="aa-product-price">{{$rs->price}}</a>

                                </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                <a href="{{route('car',['id' => $rs->id])}}" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" ><span class="fa fa-search"></span></a>
                            </div>
                        </li>
                            <!-- end single product item -->
                            @endforeach


                    </ul>
                </div>
            </div>




        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
            <aside class="aa-sidebar">
                <!-- single sidebar -->
                <div class="aa-sidebar-widget">
                    <h3>Category</h3>
                    <ul class="aa-catg-nav">
                        <li><a href="#">Men</a></li>
                        <li><a href="">Women</a></li>
                        <li><a href="">Kids</a></li>
                        <li><a href="">Electornics</a></li>
                        <li><a href="">Sports</a></li>
                    </ul>
                </div>
                <!-- single sidebar -->
                <div class="aa-sidebar-widget">
                    <h3>Tags</h3>
                    <div class="tag-cloud">
                        <a href="#">Fashion</a>
                        <a href="#">Ecommerce</a>
                        <a href="#">Shop</a>
                        <a href="#">Hand Bag</a>
                        <a href="#">Laptop</a>
                        <a href="#">Head Phone</a>
                        <a href="#">Pen Drive</a>
                    </div>
                </div>
                <!-- single sidebar -->
                <div class="aa-sidebar-widget">
                    <h3>Shop By Price</h3>
                    <!-- price range -->
                    <div class="aa-sidebar-price-range">
                        <form action="">
                            <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                            </div>
                            <span id="skip-value-lower" class="example-val">30.00</span>
                            <span id="skip-value-upper" class="example-val">100.00</span>
                            <button class="aa-filter-btn" type="submit">Filter</button>
                        </form>
                    </div>

                </div>
                <!-- single sidebar -->
                <div class="aa-sidebar-widget">
                    <h3>Shop By Color</h3>
                    <div class="aa-color-tag">
                        <a class="aa-color-green" href="#"></a>
                        <a class="aa-color-yellow" href="#"></a>
                        <a class="aa-color-pink" href="#"></a>
                        <a class="aa-color-purple" href="#"></a>
                        <a class="aa-color-blue" href="#"></a>
                        <a class="aa-color-orange" href="#"></a>
                        <a class="aa-color-gray" href="#"></a>
                        <a class="aa-color-black" href="#"></a>
                        <a class="aa-color-white" href="#"></a>
                        <a class="aa-color-cyan" href="#"></a>
                        <a class="aa-color-olive" href="#"></a>
                        <a class="aa-color-orchid" href="#"></a>
                    </div>
                </div>

            </aside>
        </div>
    </div>
                                    </div>
                                </section>
                                <!-- / product category -->




                </div>
            </div>
        </div>
    </section>
    <!-- / Cart view section -->

@endsection
