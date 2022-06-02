@extends('admin.layout.admin')
@section('content')
<div class="col-lg-3">
    <div class="widget style1 lazur-bg">
        <div class="row">
            <div class="col-xs-4">
                <i class="fa fa-heart-o fa-5x"></i>
            </div>
            <div class="col-xs-8 text-right">
                <span> patients </span>
                <h2 class="font-bold">{{ $patients }}</h2>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3">
    <div class="widget style1 blue-bg">
        <div class="row">
            <div class="col-xs-4">
                <i class="fa fa-eye fa-5x"></i>
            </div>
            <div class="col-xs-8 text-right">
                <span>Doctors</span>
                <h2 class="font-bold">{{ $doctors }}</h2>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3">
    <div class="widget style1 yellow-bg">
        <div class="row">
            <div class="col-xs-4">
                <i class="fa fa-at fa-5x"></i>
            </div>
            <div class="col-xs-8 text-right">
                <span>Departments</span>
                <h2 class="font-bold">{{ $departments }}</h2>
            </div>
        </div>
    </div>
</div>
<a href="admin/doctor/add">
<div class="col-lg-3">
    <div class="widget style1 red-bg">
        <div class="row">
           <div class="col-xs-4">
                <i class="fa fa-shopping-cart fa-5x"></i>
            </div>
            <div class="col-xs-8 text-left">
                <span> add docotor</span>
                <h2 class="font-bold">DOCTOR</h2>
            </div>
        </div>
    </div>
</div>
</a>
@endsection
