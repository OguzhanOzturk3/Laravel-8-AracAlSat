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
                                        <a href ="{{route('admin_car_add')}}" type="button" class="btn btn-success">Add Car</a>
                                        <div>
                                            <br>
                                        </div>
                                        <div class="table-responsive table--no-card m-b-30">
                                            <table class="table table-borderless table-striped table-earning">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Category</th>
                                                    <th>Title(s)</th>
                                                    <th>Status</th>
                                                    <th>Image</th>
                                                    <th>Price</th>
                                                    <th>Make</th>
                                                    <th>Model</th>
                                                    <th>Series</th>
                                                    <th>Year</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($datalist as $rs)
                                                    <p></p>

                                                    <tr>
                                                        <td>{{$rs->id}}</td>
                                                        <td>{{$rs->category_id}}</td>
                                                        <td>{{$rs->title}}</td>
                                                        <td>{{$rs->status}}</td>
                                                        <td>
                                                            @if ($rs->image)
                                                            <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" height="30" alt="">
                                                            @endif
                                                        </td>
                                                        <td>{{$rs->price}}</td>
                                                        <td>{{$rs->make}}</td>
                                                        <td>{{$rs->model}}</td>
                                                        <td>{{$rs->series}}</td>
                                                        <td>{{$rs->year}}</td>
                                                        <td><a href = "{{route('admin_car_edit',['id' => $rs->id])}}">Edit</a></td>
                                                        <td><a href = "{{route('admin_car_delete',['id' => $rs->id])}}" onclick = "return confirm('Delete ! are you sure?')">Delete</a></td>
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

