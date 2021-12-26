<html>
<head>
    <title>Image Gallery</title>
    <link href="{{asset('assets')}}/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('assets')}}/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('assets')}}/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('assets')}}/admin/css/theme.css" rel="stylesheet" media="all">
</head>
<body>





                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Car : {{$data->title}}</strong>
                        </div>

                        <div class="card-body">

                            <div class="typo-articles">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body card-block">
                                                <form role="form" action="{{route('admin_image_store',['car_id'=>$data->id])}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
                                                    @csrf


                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label>Title</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="title" placeholder="Text" class="form-control">

                                                        </div>

                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label>Image</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="file" name="image" class="form-control">

                                                        </div>

                                                    </div>

                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Add Image
                                                        </button>

                                                    </div>
                                                </form>


                                                <table class="table table-borderless table-striped table-earning">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Title(s)</th>
                                                        <th>Image</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($images as $rs)
                                                        <p></p>

                                                        <tr>
                                                            <td>{{$rs->id}}</td>
                                                            <td>{{$rs->title}}</td>
                                                            <td>
                                                                @if ($rs->image)
                                                                    <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" width="60" height="60" alt="">
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a href = "{{route('admin_image_delete',['id' => $rs->id,'car_id'=>$data->id])}}" onclick = "return confirm('Record will be Delete ! are you sure?')"><img src="{{asset('assets\admin\images')}}/delete.png" width="35" height="35"></a>
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




</body>
</html>

