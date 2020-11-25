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
                        <li><a href="/">My Account</a></li>
                        <li class="active">Testimonial</li>
                    </ol>
                </div>

                @if (auth()->user()->hasRole('jobseeker'))
                    <div class="col-md-2 padno">
                        @include('layouts.partials.job-sidebar')
                    </div>

                @else
                    @include('employer.partials.sidebar')
                @endif

                <div class="col-md-9" >
                    <div class="top-emp-center">
                        <h4>Submit Testimonial</h4>
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


                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    <form class="form-horizontal m10" method="POST" action="{{ route('testimonial.store') }}">
                        @csrf

                        <div class="row" >
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>Name :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control" required />


                                    </div>
                                </div><!--col-md-6-->
                            </div>
                            <div class="col-md-8" >
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>Designation:</label>
                                    <div class="col-sm-8">
                                        <input type="text" value="{{ auth()->user()->industry }}" name="designation" class="form-control" required />
                                        &nbsp;
                                        <span id="password-strength-status" style="color:#FF0000;  font-size:10px; font-style:italic"></span>

                                    </div>
                                </div>
                            </div><!--col-md-6-->
                            <div class="col-md-8" >
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>Testimony</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" name="description" required></textarea>

                                    </div>
                                </div>
                            </div>
                            <!--col-md-12-->

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="col-sm-4 pedit"></label>
                                    <div class="col-sm-8">
                                        <input class="btn-blue btn form-control submit" value="Submit" type="submit">
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
