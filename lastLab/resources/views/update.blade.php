@extends('layouts.app')
@section('content')
{{--<html>--}}
{{--<body>--}}
{{--<link rel="stylesheet" href="css/app.css">--}}

<center>
    <div class="col-sm-6 center">
        <h1 class="text-center text-capitalize"> Update record here.</h1>

        <form action="{{route('std.update',$std->id)}}">
            <div class="form-group">
                <label for="txtname">Name:</label>
                <input type="text" name="txtname" value="{{$std->sname}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="txtReg">Registration NO.</label>
                <input type="text" name="txtReg" value="{{$std->reg}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="txtClass">Marks:</label>
                <input type="text" name="txtmarks" value="{{$std->marks}}" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" name="btn_update" CLASS="btn btn-primary">Update</button>
            </div>

        </form>

    </div>
</center>
{{--</body>--}}
{{--</html>--}}
@endsection