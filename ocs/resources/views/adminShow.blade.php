{{--@extends('layouts.app')--}}
{{--<div style="background-color: white">--}}
{{--<link rel="stylesheet" href="public/css/app.css">--}}
{{--<link rel="stylesheet" href="css/custom.css">--}}
@include('admin.messages')
<div class="container-fluid">
    <div class="btn btn-primary mt-3" title="Back to Home" ><a style="color:white" href="/home">Home</a></div>
    <div class="alert alert-heading  text-capitalize  text-center"><h1>Admin Pannel</h1></div>
    <hr color="mehroon">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-2 card">
            <ul style="list-style: none;margin-top: 30px;" >
               <li ><a title="Add new products to your store" href="/create" style="display: block" class="card-link"><h4>Add Products</h4></a></li>
                <hr>
                <li class="mt-3"><a href="/adminshow" class="card-link"><h4>View Products</h4></a></li>
                <hr>
                <li class="mt-3"><a href="/addcate" class="card-link"><h4>Add Category</h4></a></li>
                <hr>
                <li class="mt-3"><a href="#" class="card-link"><h4>View Orders</h4></a></li>
                <hr>
                <li class="mt-3"><a href="#" class="card-link"><h4>Manage users</h4></a></li>

            </ul>
        </div>

        {{--right content which will dynamic--}}

        <div class="col-sm-12 col-md-8 col-lg-10">
         @yield('content')
        </div>
    </div>

    {{--</div>--}}
</div>