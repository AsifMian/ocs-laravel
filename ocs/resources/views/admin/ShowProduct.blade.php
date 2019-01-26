@extends('adminShow')
{{--@extends('layouts.app')--}}
  @section('content')
        {{--right content--}}
        <div class="col-sm-12">
            <table class="table table-striped">
                <th class="table-dark" scope="col">Title</th>
                <th class="table-dark" scope="col" width="30%">Description</th>
                <th class="table-dark" scope="col">Color</th>
                <th class="table-dark" scope="col">Price</th>
                <th class="table-dark" scope="col">Category</th>
                <th class="table-dark" scope="col">Edit</th>
                <th class="table-dark" scope="col">Delete</th>



                @foreach($products as $product)
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->color}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->category}}</td>
                        <td><a href="{{route('pro.edit',$product->id)}}">Edit</a></td>
                        <td><a href="{{route('pro.delete',$product->id)}}">Delete</a></td>

                    </tr>

                @endforeach

            </table>
            {{$products->links()}}
        </div>
  @endsection