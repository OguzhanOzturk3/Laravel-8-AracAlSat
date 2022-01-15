@extends('layouts.admin')

@section('title', 'Car List')
@include('admin._header')
@include('admin._sidebar')
@include('admin._headerDesktop')
@section('content')
    <div class="page-container">
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">


                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Car</strong>
                                </div>

                                <div class="card-body">
                                    <div class="col-lg-12">

                                        <div class="table-responsive table--no-card m-b-30">
                                            <table class="col-md-4   table table-borderless table-striped ">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th></th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>Roles</th>
                                                    <th>Action</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($datalist as $rs)
                                                    <p></p>

                                                    <tr>
                                                        <td>{{$rs->id}}</td>
                                                        <td>
                                                            @if ($rs->profile_photo_path)
                                                                <img src="{{\Illuminate\Support\Facades\Storage::url($rs->profile_photo_path)}}" width="50" height="50" alt="">
                                                            @endif
                                                        </td>
                                                        <td >{{$rs->name}}</td>
                                                        <td>{{$rs->email}}</td>
                                                        <td>{{$rs->phone}}</td>
                                                        <td>{{$rs->address}}</td>
                                                        <td>@foreach($rs->roles as $row)
                                                        {{$row->name}},
                                                            @endforeach
                                                            <a href ="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800, heigth=600')">
                                                                <i class=" fas fa-plus-circle"></i>
                                                            </a>
                                                        </td>
                                                        <td><a href ="{{route('admin_user_edit',['id' => $rs->id])}}"><img src="{{asset('assets\admin\images')}}/edit.png" width="35" height="35"></a>

                                                        </td>

                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
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
    </div>
@endsection
@section('footer')
    <script src="{{asset('assets')}}/admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <!-- Jquery JS-->
    <script src="{{asset('assets')}}/admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('assets')}}/admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('assets')}}/admin/vendor/slick/slick.min.js">
    </script>
    <script src="{{asset('assets')}}/admin/vendor/wow/wow.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/animsition/animsition.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="{{asset('assets')}}/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="{{asset('assets')}}/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
@endsection
@include('admin._footer')
