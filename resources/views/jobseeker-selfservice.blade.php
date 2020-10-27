<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2019 23:04:32 GMT -->
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->
				<div id="logo">
					<a href="index.html"><img src="images/logo.png" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li><a href="#" class="current">Home</a>
							<ul class="dropdown-nav">
								<li><a href="index.html">Home 1</a></li>
								<li><a href="index-2.html">Home 2</a></li>
								<li><a href="index-3.html">Home 3</a></li>
							</ul>
						</li>

						<li><a href="#">Find Work</a>
							<ul class="dropdown-nav">
								<li><a href="#">Browse Jobs</a>
									<ul class="dropdown-nav">
										<li><a href="jobs-list-layout-full-page-map.html">Full Page List + Map</a></li>
										<li><a href="jobs-grid-layout-full-page-map.html">Full Page Grid + Map</a></li>
										<li><a href="jobs-grid-layout-full-page.html">Full Page Grid</a></li>
										<li><a href="jobs-list-layout-1.html">List Layout 1</a></li>
										<li><a href="jobs-list-layout-2.html">List Layout 2</a></li>
										<li><a href="jobs-grid-layout.html">Grid Layout</a></li>
									</ul>
								</li>
								<li><a href="#">Browse Tasks</a>
									<ul class="dropdown-nav">
										<li><a href="tasks-list-layout-1.html">List Layout 1</a></li>
										<li><a href="tasks-list-layout-2.html">List Layout 2</a></li>
										<li><a href="tasks-grid-layout.html">Grid Layout</a></li>
										<li><a href="tasks-grid-layout-full-page.html">Full Page Grid</a></li>
									</ul>
								</li>
								<li><a href="browse-companies.html">Browse Companies</a></li>
								<li><a href="single-job-page.html">Job Page</a></li>
								<li><a href="single-task-page.html">Task Page</a></li>
								<li><a href="single-company-profile.html">Company Profile</a></li>
							</ul>
						</li>

						<li><a href="#">For Employers</a>
							<ul class="dropdown-nav">
								<li><a href="#">Find a Freelancer</a>
									<ul class="dropdown-nav">
										<li><a href="freelancers-grid-layout-full-page.html">Full Page Grid</a></li>
										<li><a href="freelancers-grid-layout.html">Grid Layout</a></li>
										<li><a href="freelancers-list-layout-1.html">List Layout 1</a></li>
										<li><a href="freelancers-list-layout-2.html">List Layout 2</a></li>
									</ul>
								</li>
								<li><a href="single-freelancer-profile.html">Freelancer Profile</a></li>
								<li><a href="dashboard-post-a-job.html">Post a Job</a></li>
								<li><a href="dashboard-post-a-task.html">Post a Task</a></li>
							</ul>
						</li>

						<li><a href="#">Dashboard</a>
							<ul class="dropdown-nav">
								<li><a href="dashboard.html">Dashboard</a></li>
								<li><a href="dashboard-messages.html">Messages</a></li>
								<li><a href="dashboard-bookmarks.html">Bookmarks</a></li>
								<li><a href="dashboard-reviews.html">Reviews</a></li>
								<li><a href="dashboard-manage-jobs.html">Jobs</a>
									<ul class="dropdown-nav">
										<li><a href="dashboard-manage-jobs.html">Manage Jobs</a></li>
										<li><a href="dashboard-manage-candidates.html">Manage Candidates</a></li>
										<li><a href="dashboard-post-a-job.html">Post a Job</a></li>
									</ul>
								</li>
								<li><a href="dashboard-manage-tasks.html">Tasks</a>
									<ul class="dropdown-nav">
										<li><a href="dashboard-manage-tasks.html">Manage Tasks</a></li>
										<li><a href="dashboard-manage-bidders.html">Manage Bidders</a></li>
										<li><a href="dashboard-my-active-bids.html">My Active Bids</a></li>
										<li><a href="dashboard-post-a-task.html">Post a Task</a></li>
									</ul>
								</li>
								<li><a href="dashboard-settings.html">Settings</a></li>
							</ul>
						</li>

						<li><a href="#">Pages</a>
							<ul class="dropdown-nav">
								<li><a href="pages-blog.html">Blog</a></li>
								<li><a href="pages-pricing-plans.html">Pricing Plans</a></li>
								<li><a href="pages-checkout-page.html">Checkout Page</a></li>
								<li><a href="pages-invoice-template.html">Invoice Template</a></li>
								<li><a href="pages-user-interface-elements.html">User Interface Elements</a></li>
								<li><a href="pages-icons-cheatsheet.html">Icons Cheatsheet</a></li>
								<li><a href="pages-login.html">Login & Register</a></li>
								<li><a href="pages-404.html">404 Page</a></li>
								<li><a href="pages-contact.html">Contact</a></li>
							</ul>
						</li>

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">

				<!--  User Notifications -->
				<div class="header-widget hide-on-mobile">

					<!-- Notifications -->
					<div class="header-notifications">

						<!-- Trigger -->
						<div class="header-notifications-trigger">
							<a href="#"><i class="icon-feather-bell"></i><span>4</span></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<div class="header-notifications-headline">
								<h4>Notifications</h4>
								<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
									<i class="icon-feather-check-square"></i>
								</button>
							</div>

							<div class="header-notifications-content">
								<div class="header-notifications-scroll" data-simplebar>
									<ul>
										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-manage-candidates.html">
												<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
												<span class="notification-text">
													<strong>Michael Shannah</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
												</span>
											</a>
										</li>

										<!-- Notification -->
										<li>
											<a href="dashboard-manage-bidders.html">
												<span class="notification-icon"><i class=" icon-material-outline-gavel"></i></span>
												<span class="notification-text">
													<strong>Gilbert Allanis</strong> placed a bid on your <span class="color">iOS App Development</span> project
												</span>
											</a>
										</li>

										<!-- Notification -->
										<li>
											<a href="dashboard-manage-jobs.html">
												<span class="notification-icon"><i class="icon-material-outline-autorenew"></i></span>
												<span class="notification-text">
													Your job listing <span class="color">Full Stack PHP Developer</span> is expiring.
												</span>
											</a>
										</li>

										<!-- Notification -->
										<li>
											<a href="dashboard-manage-candidates.html">
												<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
												<span class="notification-text">
													<strong>Sindy Forrest</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>

						</div>

					</div>

					<!-- Messages -->
					<div class="header-notifications">
						<div class="header-notifications-trigger">
							<a href="#"><i class="icon-feather-mail"></i><span>3</span></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<div class="header-notifications-headline">
								<h4>Messages</h4>
								<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
									<i class="icon-feather-check-square"></i>
								</button>
							</div>

							<div class="header-notifications-content">
								<div class="header-notifications-scroll" data-simplebar>
									<ul>
										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-online"><img src="images/user-avatar-small-03.jpg" alt=""></span>
												<div class="notification-text">
													<strong>David Peterson</strong>
													<p class="notification-msg-text">Thanks for reaching out. I'm quite busy right now on many...</p>
													<span class="color">4 hours ago</span>
												</div>
											</a>
										</li>

										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-offline"><img src="images/user-avatar-small-02.jpg" alt=""></span>
												<div class="notification-text">
													<strong>Sindy Forest</strong>
													<p class="notification-msg-text">Hi Tom! Hate to break it to you, but I'm actually on vacation until...</p>
													<span class="color">Yesterday</span>
												</div>
											</a>
										</li>

										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-online"><img src="images/user-avatar-placeholder.png" alt=""></span>
												<div class="notification-text">
													<strong>Marcin Kowalski</strong>
													<p class="notification-msg-text">I received payment. Thanks for cooperation!</p>
													<span class="color">Yesterday</span>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>

							<a href="dashboard-messages.html" class="header-notifications-button ripple-effect button-sliding-icon">View All Messages<i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>

				</div>
				<!--  User Notifications / End -->

				<!-- User Menu -->
				<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu">
						<div class="header-notifications-trigger">
							<a href="#"><div class="user-avatar status-online"><img src="images/user-avatar-small-01.jpg" alt=""></div></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
							<div class="user-status">

								<!-- User Name / Avatar -->
								<div class="user-details">
									<div class="user-avatar status-online"><img src="images/user-avatar-small-01.jpg" alt=""></div>
									<div class="user-name">
										Tom Smith <span>Freelancer</span>
									</div>
								</div>

								<!-- User Status Switcher -->
								<div class="status-switch" id="snackbar-user-status">
									<label class="user-online current-status">Online</label>
									<label class="user-invisible">Invisible</label>
									<!-- Status Indicator -->
									<span class="status-indicator" aria-hidden="true"></span>
								</div>
						</div>

						<ul class="user-menu-small-nav">
							<li><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="index-logged-out.html"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>

						</div>
					</div>

				</div>
				<!-- User Menu / End -->

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
<div class="intro-banner" data-background-image="{{ asset('front/images/home-background.jpg') }}">
	<div class="container">

		<!-- Intro Headline -->
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline">
					<h3>
						<strong>Jobseeker Self Service.</strong>

					</h3>
				</div>
			</div>
		</div>


	</div>
</div>

    <div class="container mb-5 mt-5 text text-center">
        <h3 class="text text-center">What is <strong class="text text-warning">Jobseeker Self Service?</strong></h3>
        <p class="mt-5 mb-3">Make Sure you are a Candidate who is up for the Job</p>.

              <p>  When an employer brings a new employee into their business to fill a key role, they are exposed to risk. The business is exposed, as are the stakeholders, investors, clients, current employees and suppliers. To operate successfully, they need to minimize that risk.</p>
            <p>The key to minimizing that risk is information. It is proved that 15% of background checks in the Asia Pacific in 2018 contained a lie or discrepancy.</p>
            <p>It is not enough to take an application or CV at face value.</p>
        <p>Employers need to undertake a thorough and comprehensive background check to put the employer in the best possible position when making a hiring decision.</p>
        <p>TrustGated specializes in providing businesses with in-depth, impartial information on a candidate’s background and qualifications. All of our screening services are performed under tried and tested processes, and everything we do is subject to numerous quality controls. That means that every piece of information we provide to the employer is completely accurate, allowing them to make recruitment decisions confidently.</p>
        <p class="mb-5 mt-5">Let’s be Hire Ready.</p>
        <p>Be a part of the new culture and be Hire Ready. Employers will be happy to have someone available to join instantly and with a completed background check. The service will enable you to complete your background check for prospective employers to view the completed document.</p>
    </div>


<!-- Content
================================================== -->
<!-- Category Boxes -->
<div class="section margin-top-65">
	<div class="container">

	</div>
</div>
<!-- Category Boxes / End -->

    <div class="section gray padding-top-70 padding-bottom-75">
        <div class="container">
            <div class="row">

                <div class="col-xl-12">
                    <div class="counters-container">

                        <!-- Counter -->
                        <div class="single-counter">
                            <i class="fa fa-certificate"></i>
                            <div class="counter-inner">
                                <h3><span class="counter">386</span></h3>
                                <span class="counter-title">TrustGated Certificate Verified</span>
                            </div>
                        </div>

                        <!-- Counter -->
                        <div class="single-counter">
                            <i class="fa fa-users"></i>
                            <div class="counter-inner">
                                <h3><span class="counter">543</span></h3>
                                <span class="counter-title">TrustGated Verified Users</span>
                            </div>
                        </div>

                        <!-- Counter -->
                        <div class="single-counter">
                            <i class="fa fa-building"></i>
                            <div class="counter-inner">
                                <h3><span class="counter">300</span></h3>
                                <span class="counter-title">TrustGated Partnered Companies</span>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

<!-- Highest Rated Freelancers -->
<div class="section gray padding-top-65 padding-bottom-70 full-width-carousel-fix">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<!-- Section Headline -->
				<div class="section-headline text text-center col-md-8 offset-md-2">
					<h3 class="text text-center">Be the first to be <strong class="text text-warning">hired</strong>  by companies by doing verification test</h3>
                    <p>The job market is very competitive. Thousands of people are seeking for jobs every day. TrustGated Verified Certificate gives you many advantages over other candidates, for instance, in first positions when a Company is searching for talent. Be a part of the new culture and be Hire Ready. Employers will be happy to have someone available to join instantly and with a completed background</p>
				</div>
			</div>



		</div>
	</div>
</div>
<!-- Highest Rated Freelancers / End-->


<!-- Membership Plans -->
<div class="section padding-top-60 padding-bottom-75">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<!-- Section Headline -->
				<div class="section-headline centered margin-top-0 margin-bottom-35">
                    <h3 class="text text-warning"><strong>Background Verification</strong></h3>
                    <p>Select one of the Background Verification plans to start verification process.</p>
				</div>
			</div>


			<div class="col-xl-12">

				<!-- Billing Cycle  -->
				<div class="billing-cycle-radios margin-bottom-70">
					<div class="radio billed-monthly-radio">
						<input id="radio-5" name="radio-payment-type" type="radio" checked>
						<label for="radio-5"><span class="radio-label"></span> Billed Monthly</label>
					</div>

					<div class="radio billed-yearly-radio">
						<input id="radio-6" name="radio-payment-type" type="radio">
						<label for="radio-6"><span class="radio-label"></span> Billed Yearly <span class="small-label">Save 10%</span></label>
					</div>
				</div>

				<!-- Pricing Plans Container -->
				<div class="pricing-plans-container recommended">

					<!-- Plan -->
                    <div class="pricing-plan recommended">
                        <div class="recommended-badge">Verification Package 1</div>
                        <h4>Job Seeker Self Service</h4>
                        <p class="margin-top-10">One time fee for one listing or task highlighted in search results.</p>
                        <div class="pricing-plan-label billed-monthly-label"><strong>$49</strong>/ monthly</div>
                        <div class="pricing-plan-label billed-yearly-label"><strong>$529</strong>/ yearly</div>
                        <div class="pricing-plan-features">
                            <strong>Features of Standard Plan</strong>
                            <ul>
                                <li>5 Listings</li>
                                <li>60 Days Visibility</li>
                                <li>Highlighted in Search Results</li>
                            </ul>
                        </div>
                        <a href="pages-checkout-page.html" class="button full-width margin-top-20">Buy Now</a>
                    </div>

					<!-- Plan -->
					<div class="pricing-plan recommended">
						<div class="recommended-badge">Verification Package 2</div>
						<h3>Standard Plan</h3>
						<p class="margin-top-10">One time fee for one listing or task highlighted in search results.</p>
						<div class="pricing-plan-label billed-monthly-label"><strong>$49</strong>/ monthly</div>
						<div class="pricing-plan-label billed-yearly-label"><strong>$529</strong>/ yearly</div>
						<div class="pricing-plan-features">
							<strong>Features of Standard Plan</strong>
							<ul>
								<li>5 Listings</li>
								<li>60 Days Visibility</li>
								<li>Highlighted in Search Results</li>
							</ul>
						</div>
						<a href="pages-checkout-page.html" class="button full-width margin-top-20">Buy Now</a>
					</div>

					<!-- Plan -->
                    <div class="pricing-plan recommended">
                        <div class="recommended-badge">Verification Package 3</div>
                        <h3>Standard Plan</h3>
                        <p class="margin-top-10">One time fee for one listing or task highlighted in search results.</p>
                        <div class="pricing-plan-label billed-monthly-label"><strong>$49</strong>/ monthly</div>
                        <div class="pricing-plan-label billed-yearly-label"><strong>$529</strong>/ yearly</div>
                        <div class="pricing-plan-features">
                            <strong>Features of Standard Plan</strong>
                            <ul>
                                <li>5 Listings</li>
                                <li>60 Days Visibility</li>
                                <li>Highlighted in Search Results</li>
                            </ul>
                        </div>
                        <a href="pages-checkout-page.html" class="button full-width margin-top-20">Buy Now</a>
                    </div>
				</div>

			</div>

		</div>
	</div>
</div>
<!-- Membership Plans / End-->

<!-- Footer
================================================== -->
<div id="footer">

	<!-- Footer Top Section -->
	<div class="footer-top-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">

					<!-- Footer Rows Container -->
					<div class="footer-rows-container">

						<!-- Left Side -->
						<div class="footer-rows-left">
							<div class="footer-row">
								<div class="footer-row-inner footer-logo">
									<img src="images/logo2.png" alt="">
								</div>
							</div>
						</div>

						<!-- Right Side -->
						<div class="footer-rows-right">

							<!-- Social Icons -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<ul class="footer-social-links">
										<li>
											<a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-linkedin-in"></i>
											</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
							</div>

							<!-- Language Switcher -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5">
										<option selected>English</option>
										<option>Français</option>
										<option>Español</option>
										<option>Deutsch</option>
									</select>
								</div>
							</div>
						</div>

					</div>
					<!-- Footer Rows Container / End -->
				</div>
			</div>
		</div>
	</div>
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
					© 2019 <strong>Hireo</strong>. All Rights Reserved.
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

<!-- Mirrored from www.vasterad.com/themes/hireo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2019 23:06:32 GMT -->
</html>
