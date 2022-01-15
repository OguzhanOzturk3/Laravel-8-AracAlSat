<!-- HEADER DESKTOP-->
<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">

                </form>
                @include('home.message')
                <div class="header-button">

                    </div>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                @if (Auth::user()->profile_photo_path)
                                    <img src="{{\Illuminate\Support\Facades\Storage::url(Auth::user()->profile_photo_path)}}" width="50" height="50" alt="">
                                @endif
                            </div>
                            <div class="content">
                                @auth
                                <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>

                                @endauth
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a >
                                            @if (Auth::user()->profile_photo_path)
                                                <img src="{{\Illuminate\Support\Facades\Storage::url(Auth::user()->profile_photo_path)}}" width="50" height="50" alt="">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a>{{Auth::user()->name}}</a>
                                        </h5>
                                        <span class="email">{{Auth::user()->email}}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">

                                    <div class="account-dropdown__item">
                                        <a href="{{route('admin_setting')}}">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>

                                </div>
                                <div class="account-dropdown__footer">
                                    @auth
                                    <a href="{{route('logout')}}">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER DESKTOP-->
