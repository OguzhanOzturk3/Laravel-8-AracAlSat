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

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Vehicles</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('admin_car')}}">All Vehicles</a>
                        </li>
                        <li>
                            <a href="{{route('admin_accepted_car')}}">Accepted Vehicles</a>
                        </li>
                        <li>
                            <a href="{{route('admin_denied_car')}}">Denied and Waiting Vehicles</a>
                        </li>
                    </ul>
                </li>


                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-envelope"></i>Messages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('admin_message')}}">New Contact Messages</a>
                        </li>
                        <li>
                            <a href="{{route('admin_read_message')}}">Readed Contact Messages</a>
                        </li>
                    </ul>
                </li>


                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-star"></i>Reviews</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('admin_review')}}">All Reviews</a>
                        </li>
                        <li>
                            <a href="{{route('admin_accepted_review')}}">Accepted Reviews</a>
                        </li>
                        <li>
                            <a href="{{route('admin_denied_review')}}">Denied and Waiting Reviews</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('admin_faq')}}">
                        <i class="fas fa-comments"></i>FAQ</a>
                </li>
                <li>
                    <a href="{{route('admin_users')}}">
                        <i class="fas fa-users"></i>Admin User</a>
                </li>
                <li>
                    <a class="js-arrow open" href="{{route('admin_setting')}}">
                        <i class="fas fa-cog"></i>Setting</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
