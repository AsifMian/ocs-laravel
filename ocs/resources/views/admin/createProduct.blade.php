@extends('adminShow')
{{--@extends('layouts.app')--}}
@section('content')
    <div class="card" style="background-color:#FFFFFF">
        <div class=" text-center  "><h2 class="card-header bg-info">Add New Product </h2> </div>

        <div class="card-body">
    <form action="{{route('pro.addproduct')}}">
                    <div class="form-group">
                <label for="txttitle"><h4>Title:</h4></label>
                <input type="text" name="txttitle" class="form-control">
            </div>

            <div class="form-group">
                <label for="txtdescri"><h4>Description:</h4></label>
                <textarea  name="txtdescri" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="txtcolor"><h4>color:</h4></label>
                <select name="txtcolor">
                    <option>Red</option>
                    <option>Gray</option>
                    <option>White</option>
                </select>
            </div>

            <div class="form-group">
                <label for="txtprice"><h4>Price:</h4></label>
                <input type="number" name="txtprice" class="form-control">
            </div>

            <div class="form-group">
                <label for="txtcate"><h4>Category:</h4></label>
                <select name="txtcate">

                    @foreach($cate as $ct)
                        <option>{{$ct->cname}}</option>
                        @endforeach
                </select>
            </div>

            <div class="form-group">
                <button type="submit" name="btn_submit" CLASS="btn btn-primary">Submit</button>
            </div>

        </form>

            </div>
    </div>
    @endsection