@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')

@section('title','User Accepted Reviews' )
@section('content')

    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="{{asset('assets')}}/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>User Profile Page</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">User Profile</li>
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
                            <div class="col-md-10">
                            <table id="example1" class="table table-bordered table-striped">

                                <thead>

                                <tr>
                                    <th>Id</th>
                                    <th>Product</th>
                                    <th>Subject</th>
                                    <th>Review</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th colspan="3">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @include('home.message')
                                @foreach($datalist as $rs)
                                    @if($rs->status=='Accepted')
                                    <tr>
                                        <td> {{$rs->id}}</td>
                                        <td> <a href="{{route('car',['id'=>$rs->car->id])}}" target="_blank">
                                                {{$rs->car->title}}
                                            </a>

                                        </td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->review}}</td>
                                        <td>{{$rs->rate}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td>{{$rs->created_at}}</td>
                                        <td>
                                            <a href ="{{route('user_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete! Are You Sure?')"><img src="{{asset('assets\admin\images')}}/delete.png" width="35" height="35"></a>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach

                                </tbody>
                            </table>
                            </div>
                            <!-- / Main -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Cart view section -->


@endsection
