@extends('layouts.master')

@section('content')
    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">My Account</a></li>
                        <li class="active">Sub user Management</li>
                    </ol>
                </div>

                @include('employer.partials.sidebar')


                <div class="col-md-9" >
                    <a href="{{ route('employer.sub_users') }}" style="float:right; padding:5px;" class="btn-blue">View All</a>
                    <div class="top-emp-center">
                        <h4>Add Sub user</h4>
                    </div> <!--top-emp-center-->


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                        <form  class="form-horizontal m10" method="post" action="{{ route('user.sub.store') }}">
                            @csrf
                            <div class="row" >
                                <div class="col-sm-10" >
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>User Name:</label>
                                        <div class="col-sm-8">
                                            <input type="text" required name="username" value="{{ old('username') }}"  class="form-control " placeholder="username"/>
                                        </div>
                                    </div><!--form-group-->
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Email Address</label>
                                        <div class="col-sm-8">
                                            <input type="email" value="{{ old('email') }}"  required name="email" class="form-control " placeholder="Email Address"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>First Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" required name="first_name" value="{{ old('first_name') }}" class="form-control " placeholder="First Name"/>
                                        </div>
                                    </div>
                                          <div class="form-group">
                                        <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Last Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" value="{{ old('last_name') }}"  required name="last_name" class="form-control " placeholder="Last Name"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Password</label>
                                        <div class="col-sm-8">
                                            <input type="text" required name="password" class="form-control " placeholder="Password"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-4">
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="submit" class="btn-blue btn" value="Save"></div>
                                    </div>

                                </div>
                            </div>
                        </form>
                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
@endsection
