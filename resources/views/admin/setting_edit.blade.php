@extends('layouts.admin')

@section('title', 'Edit Setting')
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
                                    <strong class="card-title">Edit Setting</strong>
                                </div>
                                <div class="typo-articles">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body card-block">
                                                    <form role="form" action="{{route('admin_setting_update')}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
                                                        @csrf
                                <div class="card-body">
                                    <div class="card">

                                        <div class="card-body">
                                            <div class="default-tab">
                                                <nav>
                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                        <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false">General</a>
                                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Smtp Email</a>
                                                        <a class="nav-item nav-link active show" id="nav-contact-tab2" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="true">Social Media</a>
                                                        <a class="nav-item nav-link" id="nav-contact-tab3" data-toggle="tab" href="#nav-contact1" role="tab" aria-controls="nav-contact" aria-selected="false">About Us</a>
                                                        <a class="nav-item nav-link" id="nav-contact-tab4" data-toggle="tab" href="#nav-contact2" role="tab" aria-controls="nav-contact" aria-selected="false">Contact Page</a>
                                                        <a class="nav-item nav-link" id="nav-contact-tab5" data-toggle="tab" href="#nav-contact3" role="tab" aria-controls="nav-contact" aria-selected="false">References</a>
                                                    </div>
                                                </nav>
                                                <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                                    <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label></label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="hidden" id="id" value="{{$data->id}} " name="id"  class="form-control">
                                                            </div>

                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>Title</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="text-input" value="{{$data->title}} " name="title" placeholder="Text" class="form-control">

                                                            </div>

                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>Keywords</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="text-input" value="{{$data->keywords}}"  name="keywords" placeholder="Text" class="form-control">

                                                            </div>

                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>Description</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="text-input" name="description"  value="{{$data->description}}" placeholder="Text" class="form-control">

                                                            </div>

                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>Company</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="text-input"  name="company"  value="{{$data->company}}"  placeholder="Text" class="form-control">

                                                            </div>

                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>Address</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="text-input" name="address"  value="{{$data->address}}"  placeholder="Text" class="form-control">

                                                            </div>

                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>Phone</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="text-input" name="phone"  value="{{$data->phone}}"  placeholder="Text" class="form-control">

                                                            </div>

                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>Fax</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="text-input" name="fax"  value="{{$data->fax}}"  placeholder="Text" class="form-control">

                                                            </div>

                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>Email</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="text-input" name="email"  value="{{$data->email}}"  placeholder="Text" class="form-control">

                                                            </div>

                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>Status</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <select name="status" id="select" class="form-control">

                                                                    <option >False</option>
                                                                    <option>True</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>Smtp Server</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="text-input" name="smtpserver"  value="{{$data->smtpserver}}"  placeholder="Text" class="form-control">

                                                            </div>

                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>Smtp Email</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="text-input" name="smtpemail"  value="{{$data->smtpemail}}"  placeholder="Text" class="form-control">

                                                            </div>

                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>Smtp Pasword</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="password" id="text-input" name="smtppasword"  value="{{$data->smtppasword}}"  placeholder="Text" class="form-control">

                                                            </div>

                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>Smtp port</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="number" id="text-input" name="smtpport"  value="{{$data->smtpport}}"  placeholder="Text" class="form-control">

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade active show" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>Facebook</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="text-input" name="facebook"  value="{{$data->facebook}}"  placeholder="Text" class="form-control">

                                                            </div>

                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>Instagram</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="text-input" name="instagram"  value="{{$data->instagram}}"  placeholder="Text" class="form-control">

                                                            </div>

                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>Twitter</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="text-input" name="twitter"  value="{{$data->twitter}}"  placeholder="Text" class="form-control">

                                                            </div>

                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>Youtube</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="text-input" name="youtube"  value="{{$data->youtube}}"  placeholder="Text" class="form-control">

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-contact1" role="tabpanel" aria-labelledby="nav-contact-tab1">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>About Us</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <textarea name="aboutus" >{{$data->aboutus}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab2">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>Contact</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <textarea name="contact" >{{$data->contact}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-contact3" role="tabpanel" aria-labelledby="nav-contact-tab3">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label>References</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <textarea name="references" >{{$data->references}}</textarea>
                                                            </div>
                                                        </div>
                                                        <script>
                                                            CKEDITOR.replace( 'aboutus' );
                                                            CKEDITOR.replace( 'contact' );
                                                            CKEDITOR.replace( 'references' );
                                                        </script>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                                            <div class="card-footer">
                                                                <button type="submit" class="btn btn-primary btn-sm">
                                                                    <i class="fa fa-dot-circle-o"></i> Edit Setting
                                                                </button>

                                                            </div>
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
@endsection
@include('admin._footer')

