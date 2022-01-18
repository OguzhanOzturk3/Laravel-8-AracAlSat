@extends('layouts.admin')

@section('title', 'FAQ Add')
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
                            <strong class="card-title">Add FAQ</strong>
                        </div>

                        <div class="card-body">

                            <div class="typo-articles">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body card-block">
                                                <form role="form" action="{{route('admin_faq_store')}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label>Position</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="number" id="position" name="position" value="0" placeholder="Number" class="form-control">

                                                        </div>

                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label>Question</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="question" placeholder="Text" class="form-control">

                                                        </div>

                                                    </div>


                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label>Answer</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea name="answer"></textarea>
                                                            <script>
                                                                CKEDITOR.replace( 'answer' );
                                                            </script>
                                                            </div>

                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label>Status</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <select name="status" id="select" class="form-control">
                                                                <option selected = "selected">False</option>
                                                                <option>True</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Add Record
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

