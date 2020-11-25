@extends('layouts.auth')

@section('contents')
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

                        @if ($errors->any())

                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

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
                                <label  class="col-sm-3  control-label efs"></label>
                                <div class="col-sm-9">
                                    {!! app('captcha')->display() !!}
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
                                    <button type="submit" style="width: 400px" name="submit" id="submit" class="btn-blue btn-bloc btn bcL">Login</button>
                                </div>

                                <div class="row">
                                <div class="col-sm-offset-3 col-sm-9">

                                    <a href="{{ route('social.login','facebook') }}?role=employer" class="btn-blue btn bcL" ><i class="fa fa-facebook"></i>  Login with Facebook</a>

                                    <a href="{{ route('social.login','google') }}?role=employer" class="btn-blue btn bcL" ><i class="fa fa-google"></i> Login with Google</a>

                                </div>
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

                </div><!--col-sm-3-->

            </div><!--row-->
        </div><!-- container -->

</div><!-- CONTENT -->
<!--ADVANCED SEARCH POPUP-->




@endsection


@section('content')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('/images/company.jpg');">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <form action="{{ route('login') }}" method="post" class="login100-form validate-form flex-sb flex-w">
                    @csrf
                    <span class="login100-form-title p-b-53">
						Employer Login<br>
                        <a href="{{ url('/') }}"> << Back Home</a>
					</span>

                    <a href="{{ route('social.login','facebook') }}?role=jobseeker" class="btn-face m-b-20">
                        <i class="fa fa-facebook-official"></i>
                        Facebook
                    </a>

                    <a href="{{ route('social.login','google') }}?role=jobseeker" class="btn-google m-b-20">
                        <img src="/images/icons/icon-google.png" alt="GOOGLE">
                        Google
                    </a>


                    @if ($errors->any())

                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="p-t-20 p-b-9">
						<span class="txt1">
							Email Address
						</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Email is required">
                        <input required class="input100" value="{{ old('email') }}" type="email" name="email" >
                        <span class="focus-input100"></span>
                    </div>

                    <div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>

                        <a href="{{ route('password.request') }}" class="txt2 bo1 m-l-5">
                            Forgot?
                        </a>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input required class="input100" type="password" name="password" >
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        {!! app('captcha')->display() !!}

                    </div>
                    <div class="container-login100-form-btn m-t-17">
                        <button type="submit" class="login100-form-btn">
                            Sign In
                        </button>
                    </div>
{{--                    <input type="hidden" value="1" name="remember" id="remember">--}}

                    <div class="w-full text-center p-t-55">
						<span class="txt2">
							Dont have an acount
						</span>

                        <a href="{{ route('employer.register') }}" class="txt2 bo1">
                            Sign up now
                        </a> or
                        <a href="{{ route('jobseeker.login') }}" class="txt2 bo1">
                            Login as an Jobseeker
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
