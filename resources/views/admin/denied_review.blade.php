@extends('layouts.admin')

@section('title', 'Denied and Waiting Review List')
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
                                    <strong class="card-title"></strong>
                                </div>

                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <a class="col-12">@include('home.message')</a>
                                        <div>
                                            <br>
                                        </div>
                                        <div class="table-responsive table--no-card m-b-30">
                                            <table class="table table-bordered table-striped ">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Car</th>
                                                    <th>Subject</th>
                                                    <th>Review</th>
                                                    <th >Rate</th>
                                                    <th>Status</th>
                                                    <th>Date</th>
                                                    <th>Action</th>

                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($datalist as $rs)
                                                    @if($rs->status!='Accepted')
                                                    <p></p>

                                                    <tr>
                                                        <td>{{$rs->id}}</td>

                                                        <td>
                                                            <a href="{{route('admin_user_show',['id' => $rs->user->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')">
                                                            {{$rs->user->name}}
                                                            </a>
                                                        </td>


                                                        <td><a href="{{route('car',['id'=>$rs->car->id])}}" target="_blank">
                                                                {{$rs->car->title}}
                                                            </a></td>
                                                        <td>{{$rs->subject}}</td>
                                                        <td>{{$rs->review}}</td>
                                                        <td>{{$rs->rate}}</td>
                                                        <td>{{$rs->status}}</td>
                                                        <td>{{$rs->created_at}}</td>
                                                        <td >
                                                            <a href="{{route('admin_review_show',['id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')">
                                                                <img src="{{asset('assets\admin\images')}}/edit.png" width="25" height="25">
                                                            </a>
                                                            <a href = "{{route('admin_review_delete',['id' => $rs->id])}}" onclick = "return confirm('Delete ! are you sure?')"><img src="{{asset('assets\admin\images')}}/delete.png" width="25" height="25"></a>

                                                        </td>


                                                        </td>

                                                    </tr>
                                                    @endif
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

