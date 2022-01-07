@php
    $setting = \App\Http\Controllers\HomeController::getsetting()

@endphp

@extends('layouts.home')

@section('title','Contact -'. $setting->title )
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)

@section('content')
    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="{{asset('assets')}}/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Contact</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">About Us</li>
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
                            <div class="col-md-12">
                                <div class="col-md-6">
                                {!! $setting->contact !!}
                            </div>
                            <div class="col-md-6">
                                <h2>İletişim Formu</h2>
                            @include('home.message')
                        <div class="aa-contact-address-left">
                            <form class="comments-form contact-form" action="{{route('sendmessage')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Your Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Phone Number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="subject" placeholder="Subject" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Your Message"></textarea>
                                </div>


                                <button type="submit" class="aa-secondary-btn">Send Message</button>
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
    <!-- / Cart view section -->

@endsection
