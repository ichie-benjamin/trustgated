@extends('layouts.auth')


@section('content')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('/images/company.jpg');">
            <div class="wrap-login100 p-l-62 p-r-62 p-t-10 p-b-10">

                <form action="{{ route('login') }}" method="post" class="login100-form validate-form flex-sb flex-w">
                    @csrf
                    <span class="login100-form-title p-b-53">
						Employer Login<br>
                        <a href="{{ route('jobseeker.login') }}"> << Login as a Jobseeker</a>
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
                            Login as a Jobseeker
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
