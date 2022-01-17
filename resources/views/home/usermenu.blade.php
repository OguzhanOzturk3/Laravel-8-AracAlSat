@auth()
<aside class="aa-sidebar">
<!-- single sidebar -->
<div class="aa-sidebar-widget">
    <h3>User Panel</h3>
    <ul class="aa-catg-nav">
        <li><a href="{{route('myprofile')}}">My Profile</a></li>


        <a data-toggle="collapse" data-parent="#accordian" href="#review">
            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
            <a>My Reviews</a>
        </a>
        <div id="review" class="panel-collapse collapse">
            <div class="panel-body">
                <ul>
                    <li><a href="{{route('myreviews')}}">All Reviews </a></li>
                    <li><a href="{{route('acceptedmyreviews')}}">Accepted Reviews </a></li>
                    <li><a href="{{route('deniedmyreviews')}}">Waiting and Denied Reviews </a></li>
                </ul>
            </div>
        </div>
        <br>




        <a data-toggle="collapse" data-parent="#accordian" href="#vehicle">
            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
            <a >My Vehicles</a>
        </a>
        <div id="vehicle" class="panel-collapse collapse">
            <div class="panel-body">
                <ul>
                    <li><a href="{{route('user_car')}}">All Vehicles </a></li>
                    <li><a href="{{route('user_accepted_car')}}">Accepted Vehicles </a></li>
                    <li><a href="{{route('user_denied_car')}}">Waiting and Denied Vehicles </a></li>
                </ul>
            </div>
        </div>


        @php
            $userRoles = Auth::user()->roles->pluck('name');
        @endphp
        @if($userRoles->contains('admin'))
        <li><a href="{{route('admin_home')}}" target="_blank">Admin Panel</a></li>
        @endif
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
</div>
<!-- single sidebar -->
</aside>
@endauth
