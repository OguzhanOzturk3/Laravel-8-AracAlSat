@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')

@section('title','My Vehicle' )
@section('headerjs')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection

@section('content')

    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="{{asset('assets')}}/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>User Vehicle Page</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">User Vehicle</li>
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
                    <div class="aa-myaccount-area">
                        <div class="row">

                            <!-- product category -->
                            <div class="col-md-2">
                            <section id="aa-product-category">
                                @include('home.usermenu')
                            </section>
                            </div>
                            <!-- / product category -->

                            <!-- Main -->
                            <div class="card-body col-md-10">
                                <div class="col-lg-12">
                                    <a href ="{{route('user_car_add')}}" type="button" class="btn btn-success">Add Car</a>
                                   @include('home.message')
                                    <div>
                                        <br>
                                    </div>
                                    <div class="table-responsive table--no-card m-b-30">
                                        <table class="col-md-4   table table-borderless table-striped ">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th class="col-3">Category</th>
                                                <th>Title(s)</th>
                                                <th>Status</th>
                                                <th>Image</th>
                                                <th class="col-1">Image Gallery</th>
                                                <th>Price</th>
                                                <th>Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($datalist as $rs)
                                                <p></p>

                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>
                                                        {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title) }}
                                                    </td>
                                                    <td >{{$rs->title}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td>
                                                        @if ($rs->image)
                                                            <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" width="50" height="50" alt="">
                                                        @endif
                                                    </td>
                                                    <td >
                                                        <a href="{{route('user_image_add',['car_id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')">
                                                            <img src="{{asset('assets\admin\images')}}/gallery.png" width="50" height="50">
                                                        </a>
                                                    </td>
                                                    <td>{{$rs->price}}$</td>
                                                    <td><a href = "{{route('user_car_edit',['id' => $rs->id])}}"><img src="{{asset('assets\admin\images')}}/edit.png" width="35" height="35"></a>
                                                        <a href = "{{route('user_car_delete',['id' => $rs->id])}}" onclick = "return confirm('Delete ! are you sure?')"><img src="{{asset('assets\admin\images')}}/delete.png" width="35" height="35"></a>
                                                    </td>

                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Cart view section -->


@endsection
