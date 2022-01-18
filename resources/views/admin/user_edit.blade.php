@extends('layouts.admin')

@section('title', 'User Edit')
@include('admin._header')
@include('admin._sidebar')
@include('admin._headerDesktop')
@section('javascript')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection
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
                                    <strong class="card-title">Edit Account</strong>
                                </div>

                                <div class="card-body">

                                    <div class="typo-articles">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body card-block">
                                                        <form role="form" action="{{route('admin_user_update',['id'=>$data->id])}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row form-group">
                                                                <div class="col col-md-3">
                                                                    <label>Name</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                                    <input type="text" id="text-input" value="{{$data->name}} " name="name" placeholder="Text" class="form-control">

                                                                </div>

                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3">
                                                                    <label>Email</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                                    <input type="email" id="text-input" value="{{$data->email}}"  name="email" placeholder="Text" class="form-control">

                                                                </div>

                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3">
                                                                    <label>Phone</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                                    <input type="text" id="text-input" name="phone"  value="{{$data->phone}}"  class="form-control">

                                                                </div>

                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3">
                                                                    <label>Adress</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                                    <input type="text" id="text-input" name="address"  value="{{$data->address}}"  placeholder="Text" class="form-control">

                                                                </div>

                                                            </div>
                                                            <td>
                                                                <div class="row form-group" >
                                                                    <div class="col col-md-3">
                                                                        <label>Image</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <input type="file" name="image" class="form-control">
                                                                @if ($data->profile_photo_path)
                                                                    <img src="{{\Illuminate\Support\Facades\Storage::url($data->profile_photo_path)}}" width="150" height="150" alt="">
                                                                @endif
                                                                    </div>

                                                                </div>
                                                            </td>
                                                            <div class="card-footer">
                                                                <button type="submit" class="btn btn-primary btn-sm">
                                                                    <i class="fa fa-dot-circle-o"></i> Update
                                                                </button>

                                                            </div>
                                                        </form>

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
        </div>
    </div>
    </div>
@endsection
@include('admin._footer')

