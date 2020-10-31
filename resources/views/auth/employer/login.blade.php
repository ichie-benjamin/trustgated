@extends('layouts.auth')

@section('content')
<div id="content">
        <div class="container">
            <ol  class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Employer's Login</li>
            </ol>



            <div class="row">
                <div class="col-sm-9">
                    <div class="top-emp-center p5">
                        <h4>Employer's Login</h4>
                    </div>
                    <div class="col-sm-12">
                        <div class="click-here">
                            Job Seeker? <span class="click-here"><a  href="{{ route('jobseeker.login') }}">Click here</a></span>
                        </div>
                    </div>

                    <div class="eform">
                        <div class="row">
                            <div class="col-sm-8 m10">Keeping your Jobs account safe</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-8 m10">
                                <span id="id1"></span>
                            </div>
                        </div>

                        <form name="register" method="POST" class="form-horizontal" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label  class="col-sm-3 control-label efs"><span class="red-star">*</span> User name/Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert" style="color: red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3  control-label efs"><span class="red-star">*</span> Password</label>
                                <div class="col-sm-9">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9  click-here">



                                    <span class="pull-left" style="font-size:14px;"> New Clients  <a href="{{ route('employer.register') }}">Register Now</a></span>
                                    <span class="pull-right" style="font-size:14px;"><a href="{{ route('password.request') }}">Forgot Password?</a></span>


                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit"  name="submit" id="submit" class="btn-blue btn bcL">Login</button>
                                </div>
                            </div>

                        </form>

                    </div><!--eform-->

                    <div class="top-emp-center p5">
                        <h4>Help Disk</h4>
                    </div>
                    <div class="help-disk">
                        <div class="row m10">
                            <div class="col-sm-1"> <div class="for-call" ><i class="fa fa-phone"></i></div></div>
                            <div class="col-sm-11">
                                <div class="enq"> For Enquiries Call</div>
                                <div class="enqbot"> Employers contact on <span class="regi"><a href="#">1000 100 2000</a></span> (Toll Free Nuber)  and  Job Seekers contact on <span class="regi"><a href="#">1800 102 5557</a></span> (Toll Free Nuber)</div>
                            </div>
                        </div><!--row-->
                        <div class="row m10">
                            <div class="col-sm-1"> <div class=" pdf" ><i class="fa fa-file-pdf-o"></i></div></div>
                            <div class="col-sm-11">
                                <div class="enq"> Process Demo</div>
                                <div class="enqbot">
                                    <ul>
                                        <li><a href="#">Guidelines for Registration Process</a> </li>
                                        <li><a href="#">Guidelines for Job Post Process</a> </li>
                                        <li><a href="#">Guidelines for Resume Access Process</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--row-->
                    </div><!--help-disk-->

                    </div>


                <div class="col-sm-3" >

                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Post a Job </h3>
                        </div>
                        <div class="create-job-content">
                            <p>
                                Post a job in easy steps and start receiving applications the same day.
                                Save time and receive most relevant responses using our intelligent filter technology.</p>
                            <!--<div class="ali-right"> <input class="btn-blue btn bc" value="Post a Job " type="button"></div>-->
                        </div>
                    </div><!--create-job-->
                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Search Our database</h3>
                        </div>
                        <div class="create-job-content">
                            <p>
                                Largest online database with more than 44.1 million searchable resumes.
                                Find the right candidates easily and quickly through our Powerful Search Engine.</p>
                            <!--<div class="ali-right"> <input class="btn-blue btn bc" value="Search " type="button"></div>-->
                        </div>
                    </div><!--create-job-->
                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Manage Responses</h3>
                        </div>
                        <div class="create-job-content">
                            <p>
                                Create your very own centralized database of responses, accessible from anywhere.
                                Shortlisting made easier. See the most relevant resumes first.</p>

                        </div>
                    </div><!--create-job-->
                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Mobile Solutions</h3>
                        </div>
                        <div class="create-job-content">
                            <p>
                                Innovative recruitment solutions now on the mobile. Hire the right, relevant candidates almost instantly through SMS.</p>

                        </div>
                    </div><!--create-job-->
                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Advertise Your Job </h3>
                        </div>
                        <div class="create-job-content">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                            <div  class="advertise"><img class="img-responsive" src="images/employer-login-ads.jpg" alt="Fidelity"></div>
                            <!--<div class="ali-right"> <input class="btn-blue btn bc" value="Know More" type="button"></div>-->
                        </div>
                    </div><!--create-job-->

                </div><!--col-sm-3-->

            </div><!--row-->
        </div><!-- container -->

</div><!-- CONTENT -->
<!--ADVANCED SEARCH POPUP-->




@endsection
