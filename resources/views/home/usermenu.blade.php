@auth()
<aside class="aa-sidebar">
<!-- single sidebar -->
<div class="aa-sidebar-widget">
    <h3>User Panel</h3>
    <ul class="aa-catg-nav">
        <li><a href="{{route('myprofile')}}">My Profile</a></li>
        <li><a href="{{route('myreviews')}}">My Reviews</a></li>
        <li><a href="{{route('user_car')}}">My Vehicle</a></li>
        <li><a href="{{route('logout')}}">Logout</a></li>
        @php
            $userRoles = Auth::user()->roles->pluck('name');
        @endphp
        @if($userRoles->contains('admin'))
        <li><a href="{{route('admin_home')}}" target="_blank">Admin Panel</a></li>
        @endif
    </ul>
</div>
<!-- single sidebar -->
</aside>
@endauth
