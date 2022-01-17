@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
<!-- Support section -->
<section id="aa-support">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-support-area">
                    <!-- single support -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="aa-support-single">
                            <span class="fa fa-truck"></span>
                            <h4>SEL ALL VEHICLE</h4>
                            <P>You can sell all vehicles you have.</P>
                        </div>
                    </div>
                    <!-- single support -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="aa-support-single">
                            <span class="fa fa-clock-o"></span>
                            <h4>ANY TIME, ANY WHERE</h4>
                            <P>It doesn't matter where you are.</P>
                        </div>
                    </div>
                    <!-- single support -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="aa-support-single">
                            <span class="fa fa-phone"></span>
                            <h4>SUPPORT 24/7</h4>
                            <P>You can reach our support 24/7 every day.</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Support section -->


<!-- footer -->
<footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-top-area">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <h3>Main Menu</h3>
                                    <ul class="aa-footer-nav">
                                        <li><a href="{{route('home')}}">Home</a></li>
                                        <li><a href="{{route('aboutus')}}">About Us</a></li>
                                        <li><a href="{{route('references')}}">References </a></li>
                                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                                        <li><a href="{{route('faq')}}">FAQ </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <form class="form-header" action="" method="POST">

                                        </form>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <form class="form-header" action="" method="POST">

                                        </form>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Contact</h3>
                                        <address>
                                            <p> {{$setting->address}}</p>
                                            <p><span class="fa fa-phone"></span>{{$setting->phone}}</p>
                                            <p><span class="fa fa-envelope"></span>{{$setting->email}}</p>
                                        </address>
                                        <div class="aa-footer-social">

                                        @if ($setting->facebook != null) <a href="{{$setting->facebook}}" target="_blank" ><span class="fa fa-facebook"></span></a> @endif
                                        @if ($setting->twitter != null)<a href="{{$setting->twitter}}" target="_blank" ><span class="fa fa-twitter"></span></a>@endif
                                        @if ($setting->instagram != null)<a href="{{$setting->instagram}}" target="_blank" ><span class="fa fa-instagram"></span></a>@endif
                                        @if ($setting->youtube != null)<a href="{{$setting->youtube}}" target="_blank" ><span class="fa fa-youtube"></span></a>@endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-bottom-area">
                        <p>Designed by {{$setting->company}}</p>
                        <div class="aa-footer-payment">
                            <span class="fa fa-cc-mastercard"></span>
                            <span class="fa fa-cc-visa"></span>
                            <span class="fa fa-paypal"></span>
                            <span class="fa fa-cc-discover"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / footer -->

<!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Login or Register</h4>
                <form class="aa-login-form" action="">
                    <label for="">Username or Email address<span>*</span></label>
                    <input type="text" placeholder="Username or email">
                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password">
                    <button class="aa-browse-btn" type="submit">Login</button>
                    <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                    <div class="aa-register-now">
                        Don't have an account?<a href="account.html">Register now!</a>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('assets')}}/js/bootstrap.js"></script>
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.smartmenus.js"></script>
<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.smartmenus.bootstrap.js"></script>
<!-- To Slider JS -->
<script src="{{asset('assets')}}/js/sequence.js"></script>
<script src="{{asset('assets')}}/js/sequence-theme.modern-slide-in.js"></script>
<!-- Product view slider -->
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.simpleGallery.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.simpleLens.js"></script>
<!-- slick slider -->
<script type="text/javascript" src="{{asset('assets')}}/js/slick.js"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="{{asset('assets')}}/js/nouislider.js"></script>
<!-- Custom js -->
<script src="{{asset('assets')}}/js/custom.js"></script>
