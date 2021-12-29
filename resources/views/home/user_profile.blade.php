@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')

@section('title','User Profile' )
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
                            @include('profile.show')
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
