@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        @include('admin.messages')
                        <div class="container-fluid">
                            <div class="alert alert-heading  text-capitalize  text-center"><h1>Admin Pannel</h1></div>
                            <hr color="mehroon">
                            <div class="row">
                                <div >
                                    <ul style="list-style: none;margin-top: 30px;"  >
                                        <li><a  href="/create" style="display: block" class="card-link"><h4>Add Products</h4></a></li>
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
            </div>
        </div>
    </div>
</div>
@endsection
