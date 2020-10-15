@extends('layouts.master')

@section('content')
    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="employer-profile-view.php">My Account</a></li>
                        <li class="active">Change Password</li>
                    </ol>
                </div>

                @include('employer.partials.sidebar')

                <div class="col-md-9" >
                    <div class="top-emp-center">
                        <h4>Change Password</h4>
                    </div> <!--top-emp-center-->
                    <div style="color:#FF0000; padding:5px;">
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    @if(session()->has('success_message'))
                        <div class="alert alert-success">
                            {{ session()->get('success_message') }}
                        </div>
                    @endif

                    <form class="form-horizontal m10" method="POST" action="{{ route('update.password') }}">
                        @csrf

                        <div class="row" >
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>Current Password:</label>
                                    <div class="col-sm-8">
                                        <input type="password" name="current_password" class="form-control" required />
                                        {!! $errors->first('current_password', '<p class="help-block">:message</p>') !!}

                                    </div>
                                </div><!--col-md-6-->
                            </div>
                            <div class="col-md-8" >
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>New Password:</label>
                                    <div class="col-sm-8">
                                        <input type="password" id="password" name="password" class="form-control" required onKeyUp="checkPasswordStrength();" />
                                        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                                        &nbsp;
                                        <span id="password-strength-status" style="color:#FF0000;  font-size:10px; font-style:italic"></span>

                                    </div>
                                </div>
                            </div><!--col-md-6-->
                            <div class="col-md-8" >
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>New Password again:</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                                    </div>
                                </div>
                            </div>
                            <!--col-md-12-->

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="col-sm-4 pedit"></label>
                                    <div class="col-sm-8">
                                        <input class="btn-blue btn form-control submit" name="changepass" value="SAVE" type="submit">
                                    </div>

                                </div> <!--col-md-6-->
                            </div> <!--col-md-12-->
                        </div>
                    </form>
                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div>
    <!-- CONTENT -->
@endsection
