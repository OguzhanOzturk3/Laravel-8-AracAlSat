@php
$parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp

<!-- Navbar -->
<div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse">
        <!-- Left nav -->
        <ul class="nav navbar-nav">

            @foreach($parentCategories as $rs)
            <li><a href="#">{{$rs->title}} <span class="caret"></span></a>
                @if(count($rs->children))

                    <ul class="dropdown-menu">
                    @include('home.categorytree',['children'=>$rs->children])
                    </ul>

                @endif
            </li>
            @endforeach
                <li class="col-lg-4"> <a href=" "> </a></li>
            <li><a href="{{route('home')}}">Home </a></li>
            <li><a href="{{route('aboutus')}}">About Us </a></li>
            <li><a href="{{route('contact')}}">Contact </a></li>
            <li><a href="{{route('faq')}}">FAQ </a></li>

        </ul>
    </div><!--/.nav-collapse -->
</div>
