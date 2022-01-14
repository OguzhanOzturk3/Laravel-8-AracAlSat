@php
$setting = \App\Http\Controllers\HomeController::getsetting()

@endphp

<!-- / wpf loader Two -->
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TOP BUTTON -->


<!-- Start header section -->
<header id="aa-header">

    <!-- start header top  -->
    <div class="aa-header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-top-area">
                        <!-- start header top left -->
                        <div class="aa-header-top-left">
                            <!-- start language -->
                            <div class="aa-language">
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <img src="{{asset('assets')}}/img/flag/english.jpg" alt="english flag">ENGLISH

                                    </a>

                                </div>
                            </div>
                            <!-- / language -->

                            <!-- start currency -->
                            <div class="aa-currency">
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="fa fa-usd"></i>USD

                                    </a>

                                </div>
                            </div>
                            <!-- / currency -->
                            <!-- start cellphone -->
                            <div class="cellphone hidden-xs">
                                <p><span class="fa fa-phone"></span>{{$setting->phone}}</p>
                            </div>
                            <!-- / cellphone -->
                        </div>


                        <!-- / header top left -->
                        <div class="aa-header-top-right">

                            <ul class="aa-head-top-nav-right">
                                @auth()

                                <li> <a href="{{route('myprofile')}}">{{\Illuminate\Support\Facades\Auth::user()->name}}</a></li>
                                <li class="hidden-xs"><a href="{{route('myprofile')}}">My Account</a></li>
                                <li class="hidden-xs"><a href="{{route('logout')}}">Logout</a></li>
                                @endauth
                                 @guest()
                                        <li class="hidden-xs"><a href="/login">Login</a></li>
                                        <li class="hidden-xs"><a href="/register">Join</a></li>
                                     <!-- /  <li><a href="/login" data-toggle="modal" data-target="#login-modal">Login</a></li>
                                      <li><a href="'/register" data-toggle="modal" data-target="#login-modal">Join</a></li> -->
                                @endguest



                            </ul>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-bottom-area">
                        <!-- logo  -->
                        <div class="aa-logo">
                            <!-- Text based logo -->
                            <a href="{{route('home')}}">
                                <span class="fa fa-shopping-cart"></span>
                                <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                            </a>
                            <!-- img based logo -->
                            <!-- <a href="index.html"><img src="{{asset('assets')}}/img/logo.jpg" alt="logo img"></a> -->
                        </div>
                        <!-- / logo  -->

                        <!-- search box -->
                        <div class="aa-search-box">
                            <form action="{{route('getcar')}}" method="post">

                                @csrf
                                @livewire('search')
                                <button type="submit"><span class="fa fa-search"></span></button>
                            </form>
                            @section('footerjs')
                            @livewireScripts
                            @endsection
                        </div>
                        <!-- / search box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header bottom  -->
</header>
<!-- / header section -->
