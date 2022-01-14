@extends('layouts.admin')

@section('title', 'Add Car')
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
                            <strong class="card-title">Add Car</strong>
                        </div>

                        <div class="card-body">

                            <div class="typo-articles">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body card-block">
                                                <form role="form" action="{{route('admin_car_store')}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label>Category</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <select name="category_id" id="select" class="form-control">

                                                                @foreach($datalist as $rs)
                                                                <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
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
                                                            <label>Keywords</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="keywords" placeholder="Text" class="form-control">

                                                        </div>

                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label>Description</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="description" placeholder="Text" class="form-control">

                                                        </div>

                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label>Detail</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea name="detail"></textarea>
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
                                                            <input type="number" id="text-input" value="0" name="price" placeholder="Text" class="form-control">

                                                        </div>

                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label>Adress</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="adress" placeholder="Text" class="form-control">

                                                        </div>

                                                    </div>
{{--                                                   <div class="row form-group">--}}
{{--                                                        <div class="col col-md-3">--}}
{{--                                                            <label>Make</label>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-12 col-md-9">--}}
{{--                                                            <input type="text" id="text-input" name="make" placeholder="Text" class="form-control">--}}

{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                    <div class="row form-group">--}}
{{--                                                        <div class="col col-md-3">--}}
{{--                                                            <label>Series</label>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-12 col-md-9">--}}
{{--                                                            <input type="text" id="text-input" name="series" placeholder="Text" class="form-control">--}}

{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                    <div class="row form-group">--}}
{{--                                                        <div class="col col-md-3">--}}
{{--                                                            <label>Model</label>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-12 col-md-9">--}}
{{--                                                            <input type="text" id="text-input" name="model" placeholder="Text" class="form-control">--}}

{{--                                                        </div>--}}

{{--                                                    </div>--}}
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label>Year</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="number" id="text-input" name="year" value="2020" placeholder="Text" class="form-control">

                                                        </div>

                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label>Fuel</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <select name="fuel" id="select" class="form-control">
                                                                <option selected = "selected">Gasoline</option>
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
                                                                <option selected = "selected">Manuel</option>
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
                                                            <input type="number" id="text-input" name="km" value="0" placeholder="Text" class="form-control">

                                                        </div>

                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label>Body Type</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <select name="body_type" id="select" class="form-control">
                                                                <option selected = "selected">Sedan</option>
                                                                <option >Cabrio</option>
                                                                <option >Coupe</option>
                                                                <option >Hatchback 3 kapı</option>
                                                                <option >Hatchback 5 kapı</option>
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
                                                                <option selected = "selected">0 - 50 HP</option>
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
                                                               <option selected = "selected">0 - 1300 cm3 </option>
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
                                                                <option selected = "selected">Rear drive</option>
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

                                                                <option selected = "selected">Beige</option>
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
                                                                <option selected = "selected">Yes</option>
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
                                                                <option selected = "selected">Turkey Plate</option>
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
                                                                <option selected = "selected">Owner</option>
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
                                                                <option selected = "selected">Yes</option>
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
                                                                <option selected = "selected">Yes</option>
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
                                                                <option selected = "selected">New</option>
                                                                <option>Second Hand</option>
                                                            </select>
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
                                                            <i class="fa fa-dot-circle-o"></i> Add Car
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

