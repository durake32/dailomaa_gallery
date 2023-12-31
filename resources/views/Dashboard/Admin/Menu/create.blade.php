
@extends('Dashboard.layouts.master')

@section('content')
<?php
$segment = Request::segment(1);
?>


<div class="container-fluid">
    <form role="form" action="{{route($segment . '.' .'menu.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger col-md-12">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <div class="col-md-3">
                @include('Dashboard.Admin.Menu.menu-category')
            </div>
            <div class="col-md-3">
                @include('Dashboard.Commons.menu-type')
            </div>
            <div class="col-md-3">
                @include('Dashboard.Commons.status')
            </div>
            <div class="col-md-3">
                @include('Dashboard.Commons.mega-menu')
            </div>
            <div class="col-md-8">
                @include('Dashboard.Admin.Menu.fields')
            </div>
            <div class="col-md-4">
                @include('Dashboard.Admin.Menu.category')
                @include('Dashboard.Admin.Menu.sub-category')
                @include('Dashboard.Commons.page')
                @include('Dashboard.Includes.Buttons.submit-button-section')
            </div>
        </div>
    </form>
</div>


@endsection



