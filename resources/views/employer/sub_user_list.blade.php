@extends('layouts.master')

@section('content')
    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#">My Account</a></li>
                        <li class="active">Sub user Management</li>
                    </ol>
                </div>

                @include('employer.partials.sidebar')


                <div class="col-md-9" ><a href="{{ route('employer.add_sub_user') }}" style="float:right; padding:5px;" class="btn btn-success">ADD</a>
                    <div class="top-emp-center">
                        <h4>Sub user Management</h4>
                    </div> <!--top-emp-center-->

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <strong>Successful!</strong> {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif


                    @if (count($users) > 0)
                        <table class="table table-responsive table-bordered">
                            <thead>
                            <tr style="background-color: #E0EEF7;">
                                <td><b>S.No</b></td>
                                <td><b>User Name</b></td>
                                <td><b>Email</b></td>
                                <td><b>First Name</b></td>
                                <td><b>Last Name</b></td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td> {{$loop->iteration}}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="alert alert-warning">
                            <h3>No Sub User, create a sub user account</h3>
                        </div>
                    @endif
                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
@endsection
