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
                                            <h2>{{$data->title}}</h2>
                                            <div class="col-md-5 col-sm-5 col-xs-12">

                                                <div class="aa-product-view-slider">

                                                    <div id="demo-1" class="simpleLens-gallery-container">

                                                        <div class="simpleLens-container">

                                                                <div class="simpleLens-big-image-container"><a data-lens-image="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" class="simpleLens-lens-image"><img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" width="300" height="255" class="simpleLens-big-image"></a></div>

                                                        </div>

                                                        <div class="simpleLens-thumbnails-container">
                                                            @foreach($datalist as $rs)
                                                            <a data-big-image="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" width="300" height="255" data-lens-image="{{\Illuminate\Support\Facades\Storage::url($rs->image)}} " class="simpleLens-thumbnail-wrapper" >
                                                                <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" width="75" height="75">
                                                            </a>
                                                            @endforeach

                                                            <a data-big-image="{{\Illuminate\Support\Facades\Storage::url($data->image)}}"width="300" height="255"  data-lens-image="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" class="simpleLens-thumbnail-wrapper" >
                                                                <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" width="75" height="75">
                                                            </a>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal view content -->
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <div class="aa-product-view-content">
                                                    <span class="aa-product-price">Price: {{$data->price}}$     </span><span class="aa-product-price"><del>{{$data->price * 1.2}}$</del></span>
                                                    <h1>Sellers Information:</h1>
                                                    <h4>Name: {{$data->username}}</h4>
                                                    <h4>E-Mail: {{$data->email}}</h4>
                                                    <h4>Phone: {{$data->phone}}</h4>
                                                    <h4>Address: {{$data->adress}}</h4>
                                                    <hr>
                                                    <h4>Year: {{$data->year}}</h4>
                                                    <h4>Fuel: {{$data->fuel}}</h4>
                                                    <h4>Gear: {{$data->gear}}</h4>
                                                    <h4>Km: {{$data->km}}</h4>
                                                    <h4>Body Type: {{$data->body_type}}</h4>
                                                    <h4>Engine Power: {{$data->engine_power}}</h4>
                                                    <h4>Engine Capacity: {{$data->engine_capacity}}</h4>
                                                    <h4>Wheel Drive: {{$data->wheel_drive}}</h4>
                                                    <h4>Color: {{$data->color}}</h4>
                                                    <h4>Warranty: {{$data->warranty}}</h4>
                                                    <h4>Plate: {{$data->plate}}</h4>
                                                    <h4>From: {{$data->from}}</h4>
                                                    <h4>Facetime Show: {{$data->facetime_show}}</h4>
                                                    <h4>Exchangeable: {{$data->exchange}}</h4>
                                                    <h4>Condition: {{$data->condition}}</h4>
                                                    <hr>
                                                    <div class="aa-price-block">

                                                    </div>
                                                    <p>{{$data->description}}</p>
                                                    @php
                                                    $avgrev = \App\Http\Controllers\HomeController::avrgreview($data->id);
                                                    $countreview = \App\Http\Controllers\HomeController::countreview($data->id);
                                                    @endphp
                                                    <div class="aa-product-rating">




                                                        @if($avgrev>=1) <span class="fa fa-star" ></span>@endif
                                                        @if($avgrev>=2) <span class="fa fa-star" ></span>@endif
                                                        @if($avgrev>=3) <span class="fa fa-star" ></span>@endif
                                                        @if($avgrev>=4) <span class="fa fa-star" ></span>@endif
                                                        @if($avgrev>=5) <span class="fa fa-star" ></span>@endif
                                                    </div>
                                                    <a >{{$countreview}} Review(s) {{$avgrev}}</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aa-product-details-bottom">
                                        <ul class="nav nav-tabs" id="myTab2">
                                            <li><a href="#description" data-toggle="tab">Ad Detail</a></li>
                                            <li><a href="#review" data-toggle="tab">Reviews</a></li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="description">
                                                <p> {!! $data->detail !!} </p>

                                                    </div>
                                            <div class="tab-pane fade " id="review">
                                                <div class="aa-product-review-area">
                                                    <h4>{{$countreview}} Reviews </h4>
                                                    <ul class="aa-review-nav">
                                                        @foreach($reviews as $rs)
                                                            @if($rs->status=='Accepted')
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <h4 class="media-heading"><strong>{{$rs->user->name}}</strong> - <span>{{$rs->created_at}}</span></h4>
                                                                    <div class="aa-product-rating">
                                                                        @if($rs->rate>=1) <span class="fa fa-star" ></span>@endif
                                                                        @if($rs->rate>=2) <span class="fa fa-star" ></span>@endif
                                                                        @if($rs->rate>=3) <span class="fa fa-star" ></span>@endif
                                                                        @if($rs->rate>=4) <span class="fa fa-star" ></span>@endif
                                                                        @if($rs->rate>=5) <span class="fa fa-star" ></span>@endif
                                                                    </div>
                                                                    <strong>{{$rs->subject}}</strong>
                                                                    <p>{{$rs->review}}</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                            @endif
                                                       @endforeach
                                                    </ul>
                                                    <h4>Add a review</h4>
                                                    @livewire('review',['id'=>$data->id])

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
