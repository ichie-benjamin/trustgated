<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>{{ env('APP_NAME') }}</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('front/css/colors/blue.css') }}">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ setting('favicon') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ setting('favicon') }}" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



</head>

<style>
    @media (min-width: 768px){
        .header-container {
            margin-left: 100px;
        }
    }

    #footer {
        background-color: #222845!important;
    }

    .intro-banner .background-image-container {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: 100% 60%;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        /* left: 10%; */
        z-index: 10;
        overflow: hidden;
    }


</style>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidt">

	<!-- Header -->
	<div id="header">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->
				<div id="logo">
                    <a href="{{ url('/') }}" >
                    <img src="{{ asset('images/logo.png') }}" alt="{{ env('APP_URL') }}">
                    </a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

                        <li class="" ><a href="{{ route('searchall') }}">Jobs</a></li>

                        <li ><a href="{{ route('recruiters') }}">Recruiters </a></li>
                        <li ><a href="{{ route('contactus') }}">Contact </a></li>

                    </ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">

                <nav id="navigation">
                    <ul id="responsive">

                    @auth

                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();"
                    >
                        <i class="fa fa-sign-out"></i>Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                        @endauth
                    </ul>
                </nav>
				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>


<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Intro Banner
================================================== -->
<!-- add class "disable-gradient" to enable consistent background overlay -->
<div class="intro-banner" data-background-image="{{ asset('front/images/home-background.png') }}">
	<div class="container">

		<!-- Intro Headline -->
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline">
					<h2>
						<strong style="color: white">Background Verification Payment</strong>

					</h2>
				</div>
			</div>
		</div>


	</div>
</div>

    <div class="container mb-5 mt-5 text text-center">
        <img class="img-thumbnail" style="height: 100px; width: 100px" src="/images/su.png">

        <div class="col-md-12 mt-4">
            <h3>Your {{ $package->name }} form succesfully submitted</h3>
            <h3 class="mt-4 mb-4">Amount : {{ $package->amount }}</h3>


            @if ($user_bg->paid)
                <div class="alert col-10 alert-warning">Verification Package Paid</div>

            @if ($user_bg->user_type == 'employer')
                    <a class="mt-4 btn btn-success" href="{{ route('employer.profile') }}">Go to Profile</a>
                @else
                    <a class="mt-4 btn btn-success" href="{{ route('jobseeker.profile') }}">Go to Profile</a>
                @endif

            @else

                <form action="{{ route('verification.payment') }}" method="POST">
                    @csrf

                    <input type="hidden" name="razorpay_payment_id" value="verification_package_{{ $user_bg->id }}" >

                    <input type="hidden" name="id" value="{{ $user_bg->id }}" >

                    <script src="https://checkout.razorpay.com/v1/checkout.js"
                            data-key="{{ env('RAZOR_KEY') }}"
                            data-amount="{{ $package->amount * 100 }}"
                            data-buttontext="PAY WITH RAZOR PAY"
                            data-name="{{ $package->name }} payment"
                            data-description="{{ $package->name }} payment"
                            data-image="{{ asset('/images/razorpay.png') }}"
                            data-prefill.name="{{ auth()->user()->name }}"
                            data-prefill.email="{{ auth()->user()->email }}"
                            data-theme.color="#009688">
                    </script>
                </form>


            @endif

        </div>

    </div>


<!-- Footer
================================================== -->
<div id="footer">

	<!-- Footer Top Section -->
{{--	<div class="footer-top-section">--}}
{{--		<div class="container">--}}
{{--			<div class="row">--}}
{{--				<div class="col-xl-12">--}}

{{--					<!-- Footer Rows Container -->--}}
{{--					<div class="footer-rows-container">--}}

{{--						<!-- Left Side -->--}}
{{--						<div class="footer-rows-left">--}}
{{--							<div class="footer-row">--}}
{{--								<div class="footer-row-inner footer-logo">--}}
{{--									<img src="images/logo2.png" alt="">--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}

{{--						<!-- Right Side -->--}}
{{--						<div class="footer-rows-right">--}}

{{--							<!-- Social Icons -->--}}
{{--							<div class="footer-row">--}}
{{--								<div class="footer-row-inner">--}}
{{--									<ul class="footer-social-links">--}}
{{--										<li>--}}
{{--											<a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">--}}
{{--												<i class="icon-brand-facebook-f"></i>--}}
{{--											</a>--}}
{{--										</li>--}}
{{--										<li>--}}
{{--											<a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">--}}
{{--												<i class="icon-brand-twitter"></i>--}}
{{--											</a>--}}
{{--										</li>--}}
{{--										<li>--}}
{{--											<a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">--}}
{{--												<i class="icon-brand-google-plus-g"></i>--}}
{{--											</a>--}}
{{--										</li>--}}
{{--										<li>--}}
{{--											<a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">--}}
{{--												<i class="icon-brand-linkedin-in"></i>--}}
{{--											</a>--}}
{{--										</li>--}}
{{--									</ul>--}}
{{--									<div class="clearfix"></div>--}}
{{--								</div>--}}
{{--							</div>--}}

{{--							<!-- Language Switcher -->--}}
{{--							<div class="footer-row">--}}
{{--								<div class="footer-row-inner">--}}
{{--									<select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5">--}}
{{--										<option selected>English</option>--}}
{{--										<option>Français</option>--}}
{{--										<option>Español</option>--}}
{{--										<option>Deutsch</option>--}}
{{--									</select>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}

{{--					</div>--}}
{{--					<!-- Footer Rows Container / End -->--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	</div>--}}
	<!-- Footer Top Section / End -->

	<!-- Footer Middle Section -->
	<div class="footer-middle-section">
		<div class="container">
			<div class="row">

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>For Candidates</h3>
						<ul>
							<li><a href="#"><span>Browse Jobs</span></a></li>
							<li><a href="#"><span>Add Resume</span></a></li>
							<li><a href="#"><span>Job Alerts</span></a></li>
							<li><a href="#"><span>My Bookmarks</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>For Employers</h3>
						<ul>
							<li><a href="#"><span>Browse Candidates</span></a></li>
							<li><a href="#"><span>Post a Job</span></a></li>
							<li><a href="#"><span>Post a Task</span></a></li>
							<li><a href="#"><span>Plans & Pricing</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Helpful Links</h3>
						<ul>
							<li><a href="#"><span>Contact</span></a></li>
							<li><a href="#"><span>Privacy Policy</span></a></li>
							<li><a href="#"><span>Terms of Use</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Account</h3>
						<ul>
							<li><a href="#"><span>Log In</span></a></li>
							<li><a href="#"><span>My Account</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Newsletter -->
				<div class="col-xl-4 col-lg-4 col-md-12">
					<h3><i class="icon-feather-mail"></i> Sign Up For a Newsletter</h3>
					<p>Weekly breaking news, analysis and cutting edge advices on job searching.</p>
					<form action="#" method="get" class="newsletter">
						<input type="text" name="fname" placeholder="Enter your email address">
						<button type="submit"><i class="icon-feather-arrow-right"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Middle Section / End -->

	<!-- Footer Copyrights -->
	<div class="footer-bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					© {{ date('Y') }} <strong>{{ setting('site_name') }}</strong>. All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Copyrights / End -->

</div>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="{{ asset('front/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('front/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ asset('front/js/mmenu.min.js') }}"></script>
<script src="{{ asset('front/js/tippy.all.min.js') }}"></script>
<script src="{{ asset('front/js/simplebar.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap-slider.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('front/js/snackbar.js') }}"></script>
<script src="{{ asset('front/js/clipboard.min.js') }}"></script>
<script src="{{ asset('front/js/counterup.min.js') }}"></script>
<script src="{{ asset('front/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('front/js/slick.min.js') }}"></script>
<script src="{{ asset('front/js/custom.js') }}"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() {
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	});
});
</script>


<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);
	}

	// Autocomplete adjustment for homepage
	if ($('.intro-banner-search-form')[0]) {
	    setTimeout(function(){
	        $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
	    }, 300);
	}

</script>

<!-- Google API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&amp;libraries=places&amp;callback=initAutocomplete"></script>

</body>

</html>
