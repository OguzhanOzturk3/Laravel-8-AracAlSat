@extends('layouts.admin')

@section('title', 'Edit Category')
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
                            <strong class="card-title">Edit Category</strong>
                        </div>

                        <div class="card-body">

                            <div class="typo-articles">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body card-block">
                                                <form role="form" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post"  class="form-horizontal">
                                                    @csrf

                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label>Parent</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <select name="parent_id" id="select" class="form-control">


                                                                <option value="0" selected="selected">Main Category</option>
                                                                @foreach($datalist as $rs)
                                                                <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif >
                                                                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                                                </option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label>Title</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="title" value="{{$data->title}}" class="form-control" >

                                                        </div>

                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label>Keywords</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="keywords" value="{{$data->keywords}}" class="form-control" >

                                                        </div>

                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label>Description</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="description" value="{{$data->description}}"  class="form-control" >

                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label>Status</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <select name="status" id="select" class="form-control">
                                                                <option selected = "status">{{$data->status}}</option>
                                                                <option>False</option>
                                                                <option>True</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Edit Category
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

