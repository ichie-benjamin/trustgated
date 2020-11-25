@extends('layouts.auth')

@section('contents')
    <div id="content">
        <div class="container">
            <ol  class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Jobseeker Login</li>
            </ol>
            <div class="row">
                <div class="col-sm-9 ma25" >
                    <div class="top-emp-center p5">
                        <h4>Jobseeker Login</h4>
                    </div>
                    <div class="col-sm-12">
                        <div class="click-here">
                            Recruiter? <span class="click-here"><a  href="{{ route('employer.login') }}">Click here</a></span>
                        </div>
                    </div>
                    <div class="eform">
                        <div class="row">
                            <div class="col-md-12">Enter your login details</div>
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 m10">
                                <span id="id1"></span></div>
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

                        <form method="POST" class="form-horizontal" action="{{ route('login') }}">
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



                                <span class="pull-left" style="font-size:14px;">Not a member as yet? <a  href="{{ route('jobseeker.register') }}">Register Now</a></span>
                                    <span class="pull-right" style="font-size:14px;"><a href="{{ route('password.request') }}">Forgot Password?</a></span>

                                    <!--<span class="pull-left">Not a member as yet? <a  href="jobseeker-registration.html">Register Now</a></span>


                                    <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/forgot-password.html">Forgot Password?</a>-->

                                </div>
                            </div>

                            <input type="hidden" checked type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>




                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-8">
                                    <button style="width: 400px" type="submit" name="submit" id="submit" class="btn-blue bcl btn-bloc btn">Login</button>
                                </div>

                                <div class="row">
                                <div class="col-sm-offset-3 col-sm-8">

                                    <a href="{{ route('social.login','facebook') }}?role=jobseeker" class="btn-blue btn bcL" ><i class="fa fa-facebook"></i>  Login with Facebook</a>

                                    <a href="{{ route('social.login','google') }}?role=jobseeker" class="btn-blue btn bcL" ><i class="fa fa-google"></i> Login with Google</a>

                                </div>

                                </div>
                            </div>
                            <!--<div class="form-group">
                              <div class="col-sm-offset-3 col-sm-9 regi ">
                                <span>Not a member as yet? <a  href="jobseeker-registration.html">Register Now</a></span>
                               </div>
                            </div> -->


                        </form>

                    </div><!--eform-->
                    <small>Note : In case you are using a public/shared computer we recommend that you logout to prevent any un-authorized access to your account.</small>
                </div><!--col-sm-9-->

                <div class="col-sm-3" >

                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Member Benefits </h3>
                        </div>
                        <div class="create-job-content">
                            <div class="mem-ben">Create Customized 'Job Alert'</div>
                            <p class="mem-ben-p">Get Jobs regularly in your inbox by creating up to 5 personalized Job Alert</p>

                            <div class="mem-ben">Create Multiple Profiles</div>
                            <p class="mem-ben-p">Create upto 5 customized profiles to apply to jobs in different categories</p>

                            <div class="mem-ben">Let Recruiters find you the right job</div>
                            <p class="mem-ben-p">Thousands of recruiters search our database daily to find candidates. Get found by them</p>

                            <div class="mem-ben">Confidentiality & Privacy Settings</div>
                            <p class="mem-ben-p-last">Define your privacy level. Block your current employer from accessing your profile.</p>

                            <div class="ali-right"><a href="{{ route('jobseeker.register') }}"><input class="btn-blue btn bc" value="Register Now " type="button"></a></div>
                        </div>
                    </div><!--create-job-->

                </div><!--col-sm-3-->

            </div><!--row-->
        </div><!-- container -->

    </div>
@endsection

@section('content')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('/images/company.jpg');">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <form action="{{ route('login') }}" method="post" class="login100-form validate-form flex-sb flex-w">
                    @csrf
                    <span class="login100-form-title p-b-53">
						Jobseeker Login<br>
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

                        <a href="{{ route('jobseeker.register') }}" class="txt2 bo1">
                            Sign up now
                        </a> or
                        <a href="{{ route('employer.login') }}" class="txt2 bo1">
                            Login as an Employer
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
