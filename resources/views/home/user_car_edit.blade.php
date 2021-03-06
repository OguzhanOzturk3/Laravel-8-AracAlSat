@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')

@section('title','Edit Vehicle')
@section('headerjs')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection

@section('content')

    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="{{asset('assets')}}/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Add Vehicle Page</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Add Vehicle</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- Cart view section -->
    <section id="aa-myaccount">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-myaccount-area">
                        <div class="row">

                            <!-- product category -->
                            <div class="col-md-2">
                            <section id="aa-product-category">
                                @include('home.usermenu')
                            </section>
                            </div>
                            <!-- / product category -->

                            <!-- Main -->
                            <div class="col-md-10">
                                <form role="form" action="{{route('user_car_update',['id'=>$data->id])}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label>Category</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="category_id" id="select" class="form-control">

                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}" @if ($rs->id==$data->category_id) selected="selected" @endif>
                                                        {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}
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
                                            <label>Detail</label>
                                        </div>
                                        <div class="col-12 col-md-9">

                                            <textarea name="detail" >{{$data->detail}}</textarea>
                                            <script>
                                                CKEDITOR.replace( 'detail' );
                                            </script>
                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label>Price</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="text-input" name="price"  value="{{$data->price}}"  placeholder="Text" class="form-control">

                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label>Adress</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="adress"  value="{{$data->adress}}"  placeholder="Text" class="form-control">

                                        </div>

                                    </div>
                                       <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label>Year</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="text-input" name="year" value="{{$data->year}}" placeholder="Text" class="form-control">

                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label>Fuel</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="fuel" id="select" class="form-control">
                                                <option selected = "selected">{{$data->fuel}}</option>
                                                <option >Gasoline</option>
                                                <option>Diesel</option>
                                                <option>Gasoline & LPG</option>
                                                <option>Electric</option>
                                                <option>Hybrid</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label>Gear</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="gear" id="select" class="form-control">
                                                <option selected = "selected">{{$data->gear}}</option>
                                                <option >Manuel</option>
                                                <option>Automatic</option>
                                                <option>Half Automatic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label>KM</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="text-input" name="km" value="{{$data->km}}" placeholder="Text" class="form-control">

                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label>Body Type</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="body_type" id="select" class="form-control">
                                                <option selected = "selected">{{$data->body_type}}</option>
                                                <option >Sedan</option>
                                                <option >Cabrio</option>
                                                <option >Coupe</option>
                                                <option >Hatchback 3 kap??</option>
                                                <option >Hatchback 5 kap??</option>
                                                <option >Station Wagon</option>
                                                <option >MPV</option>
                                                <option >Roadster</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label>Engine Power</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="engine_power" id="select" class="form-control">
                                                <option selected = "selected">{{$data->engine_power}}</option>
                                                <option>0 - 50 HP</option>
                                                <option>51 - 75 HP</option>
                                                <option>76 - 100 HP</option>
                                                <option>101 - 125 HP</option>
                                                <option>126 - 150 HP</option>
                                                <option>151 - 175 HP</option>
                                                <option>176 - 200 HP</option>
                                                <option>201 - 225 HP</option>
                                                <option>226 - 250 HP</option>
                                                <option>251 - 275 HP</option>
                                                <option>276 - 300 HP</option>
                                                <option>301 - 325 HP</option>
                                                <option>326 - 350 HP</option>
                                                <option>351 - 375 HP</option>
                                                <option>376 - 400 HP</option>
                                                <option>401 - 425 HP</option>
                                                <option>426 - 450 HP</option>
                                                <option>451 - 475 HP</option>
                                                <option>476 - 500 HP</option>
                                                <option>501 - 525 HP</option>
                                                <option>526 - 550 HP</option>
                                                <option>551 - 575 HP</option>
                                                <option>576 - 600 HP</option>
                                                <option>601 HP and More</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label>Engine Capacity</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="engine_capacity" id="select" class="form-control">
                                                <option selected = "selected">{{$data->engine_capacity}}</option>
                                                <option>0 - 1300 cm3 </option>
                                                <option>1301 - 1600 cm3</option>
                                                <option>1601 - 1800 cm3</option>
                                                <option>1801 - 2000 cm3</option>
                                                <option>2001 - 2500 cm3</option>
                                                <option>2501 - 3000 cm3</option>
                                                <option>3001 - 3500 cm3</option>
                                                <option>3501 - 4000 cm3</option>
                                                <option>4001 - 4500 cm3</option>
                                                <option>4501 - 5000 cm3</option>
                                                <option>5001 - 5500 cm3</option>
                                                <option>5501 - 6000 cm3</option>
                                                <option>6001 cm3 and More</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label>Wheel Drive</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="wheel_drive" id="select" class="form-control">
                                                <option selected = "selected">{{$data->wheel_drive}}</option>
                                                <option>Rear drive</option>
                                                <option>Front drive</option>
                                                <option>All-Wheel Drive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label>Color</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="color" id="select" class="form-control">
                                                <option selected = "selected">{{$data->color}}</option>
                                                <option >Beige</option>
                                                <option>White</option>
                                                <option>Claret Red</option>
                                                <option>Smoked</option>
                                                <option>Grey</option>
                                                <option>Silver Grey</option>
                                                <option>Brown</option>
                                                <option>Red</option>
                                                <option>Navy blue</option>
                                                <option>Blue</option>
                                                <option>Purple</option>
                                                <option>Pink</option>
                                                <option>Yellow</option>
                                                <option>Black</option>
                                                <option>Champagne</option>
                                                <option>Turquoise</option>
                                                <option>Orange</option>
                                                <option>Green</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label>Warranty</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="warranty" id="select" class="form-control">
                                                <option selected = "selected">{{$data->warranty}}</option>
                                                <option >Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label>Plate</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="plate" id="select" class="form-control">
                                                <option selected = "selected">{{$data->plate}}</option>
                                                <option>Turkey Plate</option>
                                                <option>Foreign Plate</option>
                                                <option>Blue Plate</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label>From</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="from" id="select" class="form-control">
                                                <option selected = "selected">{{$data->from}}</option>
                                                <option >Owner</option>
                                                <option>Gallery</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label>Facetime Show</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="facetime_show" id="select" class="form-control">
                                                <option selected = "selected">{{$data->facetime_show}}</option>
                                                <option >Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label>Exchange</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="exchange" id="select" class="form-control">
                                                <option selected = "selected">{{$data->exchange}}</option>
                                                <option >Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label>Condition</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="condition" id="select" class="form-control">
                                                <option selected = "selected">{{$data->condition}}</option>
                                                <option >New</option>
                                                <option>Second Hand</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group" >
                                        <div class="col col-md-3">
                                            <label>Image</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" name="image" class="form-control">

                                            @if ($data->image)
                                                <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}"  width="100" height="100" alt="" >
                                            @endif
                                        </div>

                                    </div>

                                    @php
                                        $userRoles = Auth::user()->roles->pluck('name');
                                    @endphp
                                    @if($userRoles->contains('admin'))

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label>Status</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="status" id="select" class="form-control">
                                                    <option selected = "selected">Waiting</option>
                                                    <option>Denied</option>
                                                    <option>Accepted</option>
                                                </select>
                                            </div>
                                        </div>
                                    @else
                                        <input type="hidden" id="status" name="status"  class="form-control" value="Waiting">
                                    @endif
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Edit Car
                                        </button>

                                    </div>
                                </form>

                            </div>
                            <!-- / Main -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Cart view section -->


@endsection
