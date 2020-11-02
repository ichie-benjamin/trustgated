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
                            <li><a href="{{ route('jobseeker.profile') }}">My Account</a></li>
                            <li class="active">Edit Details</li>
                        </ol>
                    </div>
                    <div class="col-md-3">






                    @include('layouts.partials.job-sidebar')
                        <!--create-job-->


                    </div><!--col-sm-2-->

                    <div class="col-md-9" >
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                <strong>Successful!</strong> {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="top-emp-center">
                            <h4>Edit Summary Details</h4>
                        </div> <!--top-emp-center-->
                        <form name="register" id="register" method="post" action="{{ route('user.account.summary') }}" class="form-horizontal m10">
                            @csrf
                            <div class="row" >
                                <div class="col-md-12">Your Profile Summary should mention the highlights of your career and education, what your professional interests are, and what kind of a career you are looking for.<br><br>
                                </div>



                                <div class="col-sm-7">

                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit"><span class="red-star">*</span>Profile Summary :</label>

                                        <div class="col-sm-8">

                                            <textarea style="width:450px; height:50px;" required name="bio" id="objective" class="form-control">{{ auth()->user()->bio }}</textarea>

                                        </div>

                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-7">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-3"><input type="submit" name="save1"class="btn-blue btn" value="Save"></div>
                                        <div class="col-sm-3"><div class="btn-blue btn"><a href="{{ route('jobseeker.profile') }}" style="color:#FFF"> Cancel </a></div></div>
                                    </div> <!--col-md-6-->
                                </div><!--col-md-12-->







                            </div>
                        </form>
                    </div><!--col-sm-9-->
                </div><!--row-->
            </div><!-- container -->

        </div><!-- CONTENT -->
        <!--ADVANCED SEARCH POPUP-->

@endsection
