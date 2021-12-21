@extends('layouts.admin')

@section('title', 'Admin Panel Home Page')
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
                            <strong class="card-title">Typography</strong>
                        </div>

                        <div class="card-body">
                            <div class="typo-headers">
                                <h1 class="pb-2 display-4">Very Important Information H1</h1>
                                <h2 class="pb-2 display-5">Sections & Modal Names H2</h2>
                                <h3 class="pb-2 display-5">Articles & Block Headings H3</h3>
                                <h4 class="pb-2 display-5">Random Tiny Heading H4</h4>
                                <h5 class="pb-2 display-5">Random Tiny Heading H5</h5>
                                <h6 class="pb-4 display-5">Random Tiny Heading H6</h6>
                            </div>
                            <div class="typo-articles">

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

