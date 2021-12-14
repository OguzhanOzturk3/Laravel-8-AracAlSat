@extends('layouts.admin')

@section('title', 'Admin Panel Home Page')
@include('admin._header')
@include('admin._sidebar')
@include('admin._headerDesktop')
@section('content')
    @include('admin._content')
@endsection
@include('admin._footer')
