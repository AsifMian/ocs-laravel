@extends('adminShow')
{{--@extends('layouts.app')--}}
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@section('content')
    <div class="card">
        <div class="card-header">
            <div><h2 class="text-center bg-transparent bg-info">Add New Category here</h2></div>
        </div>
    <form action="{{route('pro.cate')}}">

        <div class="form-group col-sm-4">
            <label for="txtcname"><h4>Category Name:</h4></label>
            <input type="text" name="txtcname" class="form-control">
        </div>

        <div class="form-group col-sm-4 ">
            <button type="submit" name="btn_submit" CLASS="btn btn-primary">Add</button>
        </div>

    </form>
    </div>
    @endsection