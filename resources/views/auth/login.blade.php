@extends('layouts.auth')

@section('content')
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
                                <div class="col-sm-offset-3 col-sm-9  click-here">



                                    <span class="pull-left" style="font-size:14px;">Not a member as yet? <a  href="{{ route('jobseeker.register') }}">Register Now</a></span>
                                    <span class="pull-right" style="font-size:14px;"><a href="{{ route('password.request') }}">Forgot Password?</a></span>

                                    <!--<span class="pull-left">Not a member as yet? <a  href="jobseeker-registration.html">Register Now</a></span>


                                    <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/forgot-password.html">Forgot Password?</a>-->

                                </div>
                            </div>

                            <input type="hidden" checked type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>


                            {!! app('captcha')->display($attributes) !!}


                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" name="submit" id="submit" class="btn-blue btn bcL">Login</button>



                                    <a href="{{ route('social.login','facebook') }}" class="btn-blue btn bcL" >Login with Facebooks</a>
                                    <a href="#"  onclick="alert('Google  Login is currently disable for demo purpose');" class="btn-blue btn bcL" >Login with Google</a>



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
