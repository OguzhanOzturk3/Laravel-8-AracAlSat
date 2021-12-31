<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>"@yield('title')"</title>
<meta name="description" content="@yield('description')">
<meta name="keyword" content="@yield('keywords')">
<meta name="author" content='Oguzhan')>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Font awesome -->
<link href="{{asset('assets')}}/css/font-awesome.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet">
<!-- SmartMenus jQuery Bootstrap Addon CSS -->
<link href="{{asset('assets')}}/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
<!-- Product view slider -->
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/jquery.simpleLens.css">
<!-- slick slider -->
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/slick.css">
<!-- price picker slider -->
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/nouislider.css">
<!-- Theme color -->
<link id="switcher" href="{{asset('assets')}}/css/theme-color/default-theme.css" rel="stylesheet">
<!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
<!-- Top Slider CSS -->
<link href="{{asset('assets')}}/css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

<!-- Main style sheet -->
<link href="{{asset('assets')}}/css/style.css" rel="stylesheet">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="au theme template">
<meta name="author" content="Hau Nguyen">
<meta name="keywords" content="au theme template">


<!-- Fontfaces CSS-->
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


<!-- MAIN CONTENT-->


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">


                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Message Detail</strong>
                            @include('home.message')
                        </div>

                        <div class="card-body">

                            <div class="typo-articles">
                                <div class="row">
                                    <div class="col-lg-12">

                                            <div class="card-body card-block">
                                                <form role="form" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="table-responsive table--no-card m-b-30">
                                                        <table class="table table-borderless table-striped ">
                                                            <thead>
                                                            <tr>
                                                                <th>ID</th>  <td>{{$data->id}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Name</th><td >{{$data->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Email</th><td>{{$data->email}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Phone</th><td>{{$data->phone}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th >Subject</th> <td>{{$data->subject}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th >Ip Address</th> <td>{{$data->ipaddress}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th >Message</th><td>{{$data->message}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Admin Note</th>
                                                                <td>
                                                                    <textarea name="note" >{{$data->note}}</textarea>
                                                                </td>
                                                            <tr>
                                                                <td >

                                                                        <button type="submit" class="btn btn-primary  col-6">
                                                                            <a class="fa fa-dot-circle-o" ></a> Edit Car
                                                                        </button>


                                                                </td>
                                                            </tr>
                                                            </tr>
                                                            </thead>

                                                        </table>
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
@include('admin._footer')

