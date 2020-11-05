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

                    @if (session('failure'))
                        <div class="alert alert-danger" role="alert">
                            <strong>Error!</strong> {{ session('failure') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
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
                        <h4>Update Resume</h4>
                    </div> <!--top-emp-center-->
                    <form name="register" id="register" class="form-horizontal m10" method="post" action="{{ route('user.update.resume') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <br/>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>Upload Resume:</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose Resume
     </a>
   </span>
                                            <input id="thumbnail" required class="form-control" type="hidden" name="resume">
                                        </div>
                                        <img id="holder" style="margin-top:15px;max-height:100px;">
                                    </div>
                                </div><!--form-group-->

                                <div class="col-sm-12">

                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-3"><input type="submit" name="save1"class="btn-blue btn" value="Save"></div>
                                        <div class="col-sm-3"><div class="btn-blue btn"><a href="{{ route('jobseeker.profile') }}" style="color:#FFF"> Cancel </a></div></div>

                                </div><!--col-md-12-->


                            </div><!--col-md-6-->
                            @if (auth()->user()->cv)
                                <div class="col-md-5">

                                    <iframe src="{{ auth()->user()->cv }}" width="100%" height="300"></iframe>

                                </div>
                            @endif

                        </div>
                    </form>
                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
    <!--ADVANCED SEARCH POPUP-->

@endsection

@section('js')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

    <script>
        $('#lfm').filemanager('file');
        // $('#lfm').filemanager('image');
    </script>

@endsection
