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

                    <div class="top-emp-center">
                        <h4>Create Designation/Employer Details</h4>
                    </div> <!--top-emp-center-->
                    <br>
                    <p>Add an Employer/Designation to your profile. To edit an existing Employer/Designation please <a href="{{ route('jobseeker.manage.employers') }}">click here.</a></p>
                    </br>
                    <form class="form-horizontal m10" method="post" action="{{ route('user.create.employer') }}">
                        @csrf

                        <div class="row" >
                            <div class="col-sm-10" >


                                <div class="form-group">
                                    <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Company Name:</label>
                                    <div class="col-sm-8">
                                        <input type="text" value="{{ old('company_name', optional($employer)->company_name) }}" required name="company_name" id="company" class="form-control " placeholder=""/>
                                    </div>
                                    <div>
                                        <span id="companyInfo"></span>
                                    </div>
                                </div><!--form-group-->


                                <div class="form-group">
                                    <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Duration From:</label>

                                    <div class="col-sm-8">
                                        <input type="number" value="{{ old('from', optional($employer)->from) }}" required name="from" id="company" class="form-control " placeholder=""/>
                                    </div>

                                </div><!--form-group-->

                                <div class="form-group">
                                    <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Duration To:</label>

                                    <div class="col-sm-8">
                                        <input type="number" value="{{ old('to', optional($employer)->to) }}" required name="to" class="form-control " placeholder=""/>
                                    </div>

                                </div><!--form-group-->

                                <div class="form-group">
                                    <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Designation :</label>
                                    <div class="col-sm-8">
                                        <input type="text" required value="{{ old('designation', optional($employer)->designation) }}" name="designation" id="designation1" class="form-control " placeholder="">
                                    </div>
                                    <div>
                                        <span id="desigInfo"></span>
                                    </div>
                                </div><!--form-group-->
                                <div class="form-group">
                                    <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Job Profile :</label>
                                    <div class="col-sm-8">
                                        <textarea name="profile" id="profile" class="form-control"></textarea>
                                    </div>
                                    <div>
                                        <span id="jobInfo"></span>
                                    </div>
                                </div><!--form-group-->
                            </div><!--col-md-6-->
                            <div class="col-sm-12">
                                <div class="col-sm-7">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-3"><input type="submit" class="btn-blue btn" value="Save"></div>
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
