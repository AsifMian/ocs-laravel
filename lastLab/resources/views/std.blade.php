
<?php

//if(isset('btn_submit'))
//    {
//        echo "gjhgjhgjh";
//    }
?>
@extends('layouts.app')
@section('content')

    <hr width="5%"  color="green">
    <hr width="15%" color="green">
    <hr width="25%" color="green">
    <hr width="35%" color="green">
    <hr width="65%" color="green">
    <hr width="85%" color="green">
<html>
<body>
<link rel="stylesheet" href="css/app.css">
<center>
<div class="col-sm-6 center">
<div class="card">
    <div class="card-body">
        <form action="{{route('std.add')}}">

            <div class="form-group">
                <label for="txtname"><b>Name:</b></label>
                <input type="text" name="txtname" class="form-control">
            </div>

            <div class="form-group">
                <label for="txtReg"><b>Registration NO.</b></label>
                <input type="text" name="txtReg" class="form-control">
            </div>
            <div class="form-group">
                <label for="txtClass"><b>Marks:</b></label>
                <input type="text" name="txtmarks" class="form-control">
            </div>



            <div class="form-group">
                <button type="submit" name="btn_submit" CLASS="btn btn-primary">Submit</button>
            </div>

        </form>
</div>
</div>
    </div>
</center>

{{--@section('stdview')--}}
<hr width="85%" color="green">
<hr width="65%" color="green">
<hr width="35%" color="green">
<hr width="25%" color="green">
<hr width="15%" color="green">
<hr width="5%" color="green">

<div class="container">
<table class="table table-striped">

        <th class=" table-dark" scope="col">Name</th>
        <th class=" table-dark" scope="col">Reg</th>
        <th class=" table-dark" scope="col">Marks</th>
        <th class=" table-dark" scope="col">Remove</th>
        <th class=" table-dark" scope="col">Edit</th>

        @foreach($links as $std)
            <tr>
            <td>{{$std->sname}}</td>
            <td>{{$std->reg}}</td>
            <td>{{$std->marks}}</td>
             <td><a href="{{ route("std.del",$std->id)}}">Delete</a></td>
            <td><a href="{{ route("updateform",$std->id)}}">update</a></td>

            </tr>
            @endforeach

    {{--@endsection--}}
</table>
</div>
</body>
</html>
    @endsection


@section('a')
    <h1 class="text-center ">This is a section yield before content section.</h1>
    @endsection