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
                            <strong class="card-title"> {{$data->title}}</strong>
                        </div>

                        <div class="card-body">

                            <div class="typo-articles">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body card-block">


                                                <table class="table table-borderless table-striped table-earning">

                                                    <tr>
                                                        <th>ID</th> <td>{{$data->id}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Name</th><td>{{$data->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email</th><td>{{$data->email}}</td>
                                                    </tr>

                                                    <tr>
                                                        <th>Roles</th>
                                                        <td>
                                                            <table>
                                                                @foreach($data->roles as $row)
                                                                    <tr>
                                                                        <td>{{$row->name}}</td>
                                                                        <td>
                                                                            <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}"onclick = "return confirm('Delete ! are you sure?')"><img src="{{asset('assets\admin\images')}}/delete.png" width="20" height="20"></a>
                                                                        </td>

                                                                    </tr>
                                                                @endforeach

                                                            </table>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Add Role</th>
                                                        <td>
                                                            <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <select name="roleid">
                                                                @foreach($datalist as $rs)
                                                                    <option value="{{$rs->id}}">{{$rs->name}}</option>>
                                                                @endforeach
                                                            </select>
                                                            <div class="card-footer">
                                                                <button type="submit" class="btn btn-primary btn-sm">
                                                                    <i class="fa fa-dot-circle-o"></i> Add Role
                                                                </button>

                                                            </div>
                                                            </form>
                                                        </td>

                                                    </tr>

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

