<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{route('admin_home')}}">
            <img src="{{asset('assets')}}/admin/images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>

    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">


                <li>
                    <a href="{{route('admin_category')}}">
                        <i class="fas fa-table"></i>Category</a>
                </li>
                <li>
                    <a href="{{route('admin_car')}}">
                        <i class="fas fa-table"></i>Car</a>
                </li>
                <li>
                    <a href="{{route('admin_message')}}">
                        <i class="fas fa-table"></i>Contact Message</a>
                </li>

                <li>
                    <a href="{{route('admin_review')}}">
                        <i class="fas fa-table"></i>Reviews</a>
                </li>
                <li>
                    <a href="{{route('admin_faq')}}">
                        <i class="fas fa-table"></i>FAQ</a>
                </li>


                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Açılır Kutu Örnek</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="js-arrow open" href="{{route('admin_setting')}}">
                        <i class="fas fa-desktop"></i>Setting</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
