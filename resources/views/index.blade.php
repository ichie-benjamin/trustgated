
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Jobs Portal" />
	<meta property="og:title" content="Jobs Portal" />
	<meta property="og:description" content="Jobs Portal" />
{{--	<meta property="og:image" content="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/social-image.png" />--}}
{{--	<meta name="format-detection" content="telephone=no">--}}

	<!-- FAVICONS ICON -->
	<link rel="icon" href="{{ setting('favicon') }}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ setting('favicon') }}" />

	<!-- PAGE TITLE HERE -->
	<title>Jobs Portal</title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- STYLESHEETS -->
	<!-- STYLESHEETS -->
{{--	<link rel="stylesheet" type="text/css" href="/asset/css/plugins.css">--}}
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/template.css">
{{--	<link class="skin" rel="stylesheet" type="text/css" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/css/skin/skin-1.css">--}}

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


	<style>
[aria-expanded="false"] > .expanded,
[aria-expanded="true"] > .collapsed {
  display: none;
}
.logo-header img, .logo-footer img {
    height: auto;
    width: auto;
    max-width: 236px;
}
</style>
</head>
<body id="bg">

<div class="page-wraper">
	<!-- header -->
    <header class="site-header mo-left header fullwidth">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="{{ route('home') }}">
												<img src="{{ asset('images/logo.png') }}" alt="{{ env('APP_URL') }}" class="logo" ></a>
											</div>
                    <!-- nav toggle button -->
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">

@guest()
                            <a href="{{ route('jobseeker.login') }}" class="site-button"><i class="fa fa-user"></i>Login</a>
                            <a href="{{ route('jobseeker.register') }}" title="READ MORE" rel="bookmark" class="site-button"><i class="fa fa-lock"></i> Register </a>
@endguest
@auth
@if(auth()->user()->hasRole('employer'))
<a href="{{ route('employer.profile') }}" class="site-button"><i class="fa fa-user"></i> {{ auth()->user()->username }} </a>
@elseif (auth()->user()->hasRole(['admin','super_admin']))
            <a href="{{ route('admin.dashboard') }}" class="site-button"><i class="fa fa-user"></i> {{ auth()->user()->username }} </a>
        @else
            <a href="{{ route('jobseeker.profile') }}" class="site-button"><i class="fa fa-user"></i> {{ auth()->user()->username }} </a>
@endif

    <a href="{{ route('logout') }}"
       onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();"
    >
        <i class="fa fa-sign-out"></i>Logout</a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

@endauth
                        </div>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">
							<li class="" ><a href="{{ route('searchall') }}">Jobs</a></li>
{{--							<li class="" ><a href="{{ route('searchall') }}">Jobseekers</a></li>--}}
							{{-- <li ><a href="{{ route('searchall') }}">Jobs </a></li>
							<li ><a href="{{ route('searchall') }}">IIT/IIM Jobs </a></li>
                            <li ><a  href="{{ route('job.type','govt-jobs') }}">Govt.jobs</a></li> --}}
{{--                            <li ><a href="{{ route('job.type','oversea-jobs') }}"> Oversea jobs</a></li>--}}
							<li ><a href="{{ route('recruiters') }}">Recruiters </a></li>
							<li ><a href="{{ route('contactus') }}">Contact </a></li>

						</ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
		<!-- Section Banner -->

		<div class="dez-bnr-inr dez-bnr-inr-md" style="background-image:url(/images/slider-1598937228.);">
            <div class="container">
                <div class="dez-bnr-inr-entry align-m padb-130">
					<div class="find-job-bx">
											<!--<a href="#" class="site-button button-sm">Find Jobs, Employment & Career Opportunities</a>
						<h2>Search Between More Then <br/> <span class="text-primary">50,000</span> Open Jobs.</h2>-->
						<h2>Search Between More Than&nbsp;<br/><span>50,000</span>&nbsp;Open Jobs.</h2>
                        <form class="dezPlaceAni" action="{{ route('jobsearch') }}" method="GET">
							<div class="row">
								<div class="col-lg-3 col-md-6">
									<div class="form-group">
										<label>Job Title, Keywords, or company</label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="" value="{{ request()->get('keyword') }}" name="keyword">
											<div class="input-group-append">
											  <span class="input-group-text"><i class="fa fa-search"></i></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="form-group">
										<label>Location</label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="" value="{{ request()->get('location') }}" name="location">
											<div class="input-group-append">
											  <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-6">
									<div class="form-group">
                                        <select name="category">
                                            <option value="">select industry</option>
                                            @foreach($industries as $item)
                                                <option value="{{ $item->id }}">{{ $item->category }}</option>
                                            @endforeach
                                        </select>
									</div>
								</div>
								<div class="col-lg-2 col-md-6">
									<div class="form-group">
										<select name="experience">
										<option value="">Experience</option>
											<option value="1" >0 to 1 Year</option>
												<option value="2" >2 Years</option>
												<option value="3" >3 Years</option>
												<option value="4" >4 Years</option>
												<option value="5" >5 Years</option>
												<option value="6" >6 Years</option>
												<option value="7" >7 Years</option>
												<option value="8" >8 Years</option>
												<option value="9" >9 Years</option>
												<option value="10" >10 Years</option>
												<option value="15" >15 Years</option>
						<option value="20" >20 Years</option>

										</select>
									</div>
								</div>
								<div class="col-lg-2 col-md-6">
									<button type="submit" name="homeadvsearch" class="site-button btn-block"><i class="fa fa-search"></i> Find Job</button>
								</div>
							</div>
						</form>
					</div>
				</div>

            </div>
						<div class="jp_banner_jobs_categories_wrapper">
               <div class="container">
			    <div class="row">
                    @foreach($f_areas as $item)
				                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border jp_job_cate_left_border_bottom col-sm-2">
                    <div class="jp_top_jobs_category">
                        <!--<i class="fa fa-code"></i>-->
                        <h3><a href="{{ route('jobsearch') }}?f_area={{ $item->id }}">{{ $item->category_functional_area }}</a></h3>
                        <p>({{ $item->jobs_count }} jobs)</p>
                    </div>
                </div>
                    @endforeach
				</div>
            </div>
        </div>

        </div>
		<div class="clearfix"></div>



<section class="content-inner bg-gray">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 main-heading">
            <!--<p>200 New Jobs</p>-->
            <h2>New &amp; Random <span>Jobs</span></h2>
         </div>
      </div>

       <div class="row extra-mrg">
           @foreach($jobs as $job)
           <div class="col-md-3 col-sm-6">
               <div class="grid-view brows-job-list">
               <div class="brows-job-company-img">

			 <img src="{{ optional($job->company)->logo }}" class="img-responsive img-circle" style="border-radius: 50%" alt="{{ optional($job->company)->name }}">
               </div>
               <div class="brows-job-position">

                   <div style="min-height: 60px; max-height: 60px;">
                       <h3><a href="{{ route('jobs.job.view',$job->slug) }}">{{ substr($job->title,0,30) }}</a></h3>
                   </div>
                  <p><span>{{ optional($job->company)->name }} </span></p>
               </div>
               <div class="job-position"><span class="job-num">{{ "$job->experience_from - $job->experience_to" }} YRS</span></div>
               <!--<div class="brows-job-type"><span class="part-time">Part Time</span></div>-->
               <ul class="grid-view-caption">
                  <li>
                     <div class="brows-job-location">
                        <p><i class="fa fa-map-marker"></i>{{ str_limit($job->city, 10) }}</p>
                     </div>
                  </li>
                  <li>
                     <p><span class="brows-job-sallery" style="font-size: 0.8em"><i class="fa fa-money"></i>{{ $job->salary }} </span></p>
                  </li>
               </ul>
            </div>
           </div>
           @endforeach
      </div>
   </div>
</section>

		<!-- About Us END -->
		<!-- Call To Action -->
		<div class="section-full content-inner ">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 section-head text-center">
						<h2 class="m-b5">Featured Cities</h2>
						<h6 class="fw4 m-b0"> Featured Cities Added Jobs</h6>
					</div>
				</div>
				<div class="row">
                    @foreach ($cities as $item)
                        <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                            <a href="{{ route('jobsearch') }}?city={{ $item->name }}">
                                <div class="city-bx align-items-end  d-flex" style="background-image:url({{ $item->image }})">
                                    <div class="city-info">
                                        <h5>{{ $item->name }}</h5>
                                        <span>{{ $item->jobs_count }} Jobs</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

				</div>
			</div>
		</div>

     <div class="section-full  bg-gray p-t30 p-b20">
		<div class="container">
		   <div class="row">
			  <div class="col-lg-9">
			     <div class="jp_register_section_main_wrapper">
                                <div class="jp_regis_left col-md-6 col-sm-6">
                                    <div class="left_side_box">
									                                         <img src="/assets/images/regis_icon.png" alt="icon">

										<h4>Im an EMPLOYER</h4>
<p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>                                        <ul>
                                            <li> <a href="{{ route('employer.register') }}"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS COMPANY</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="jp_regis_right col-md-6 col-sm-12">
                                    <div class="right_img_overlay"></div>
                                    <div class="right_side_box">
									                                        <img src="/assets/images/regis_icon2.png" alt="icon">
                                        <h4>Im an candidate</h4>
                                        <p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>



                                        <ul>
                                            <li><a href="{{ route('jobseeker.reg') }}"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS CANDIDATE</a></li>
                                        </ul>
                                    </div>
                                    <div class="center_tag">
                                        <p>OR</p>
                                    </div>
                                </div>

                            </div>
							<div class="clearfix"></div>
			         <div class="jp_best_deals_main_wrapper">

                       <div class="jp_best_deal_slider_main_wrapper">
                        <div class="jp_best_deal_heading_wrapper">
                            <h2>Offering the best Deals</h2>
                        </div>
                        <div class="jp_best_deal_slider_wrapper">

                                <div class="item">
                                    <div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="jp_best_deal_main_cont_wrapper ">
											   <div class="row">
                                                <div class="jp_best_deal_icon_sec col-sm-2">
                                                    <i class="fa fa-search"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec col-sm-10">
                                                    <h4><a href="#">Search a Jobs</a></h4>
                                                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                                </div>
												</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper1">
											 <div class="row">
                                                <div class="jp_best_deal_icon_sec col-sm-2">
                                                    <i class="fa fa-users"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec col-sm-10">
                                                    <h4><a href="#">Apply a Good Job</a></h4>
                                                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                                </div>
												</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2 ">
											   <div class="row">
                                                <div class="jp_best_deal_icon_sec col-sm-2">
                                                    <i class="fa fa-shield"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec col-sm-10">
                                                    <h4><a href="#">Job Security</a></h4>
                                                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                                </div>
												</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2 ">
											   <div class="row">
                                                <div class="jp_best_deal_icon_sec col-sm-2">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec col-sm-10">
                                                    <h4><a href="#">Top Employers</a></h4>
                                                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                                </div>
											  </div>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2 ">
											   <div class="row">
                                                <div class="jp_best_deal_icon_sec col-sm-2">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec col-sm-10">
                                                    <h4><a href="#">Job Notifications</a></h4>
                                                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                                </div>
											  </div>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2 ">
											   <div class="row">
                                                <div class="jp_best_deal_icon_sec col-sm-2">
                                                    <i class="fa fa-building"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec col-sm-10">
                                                    <h4><a href="#">Featured Cities</a></h4>
                                                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                                </div>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               </div>
                        </div>

                </div>


			  </div>
			  <div class="col-lg-3">

			     <div class="jp_rightside_job_categories_wrapper">
                                    <div class="job_categories_heading">
                                        <h4>Jobs by Industry</h4>
                                    </div>
                                    <div class="job_categories_content" >
                                        <ul>
                                            @foreach ($industries as $item)
                                                <li><i class="fa fa-caret-right"></i> <a href="{{ route('jobsearch') }}?category={{ $item->id }}">{{ $item->category }}<span>({{ $item->jobs_count }})</span></a></li>
                                            @endforeach

                                        </ul>
                                    </div>
                         </div>
						 <div class="clearfix"></div>
						 						 <div class="candidates-are-sys m-t30">
								<div class="candidates-bx">
									<div class="testimonial-pic radius"><img src="/art_photo/1472533219.png" alt="" width="100" height="100"></div>
									<div class="testimonial-text">
										<p><p>"Donec sagittis et massa at rutrum. Proin eleifend nunc interdum tortor malesuada molestie."</p> </p>
									</div>
									<div class="testimonial-detail"> <strong class="testimonial-name">John</strong> <span class="testimonial-position">Branding Manager</span> </div>
								</div>
							</div>
							 						 <div class="clearfix"></div>
						 <div class="quote-bx m-t30">
								<div class="quote-info">
																	<h4>Make a Difference with Your Online Resume!</h4><p>Your resume in minutes with JobBoard resume assistant is ready!</p>									<a href="{{ route('jobseeker.reg') }}" class="site-button">Create an Account</a>
								</div>
							</div>

			  </div>
		</div>
	</div>
</div>
<div class="section-full content-inner jobs-category-bx">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 m-b30">
							<div class="job-bx bg-white">
								<div class="job-bx-title clearfix">
									<h6 class="font-24 font-weight-700 pull-left text-uppercase">Top Employers</h6>
								</div>

								<div class="row">
                                    @foreach($companies as $item)
																	<div class="col-lg-4 col-sm-12">
										<ul class="category-list category-bx">

											<li><a href="{{ route('company.jobs',$item->slug) }}">
												<div class="logo">

												<img src="{{ asset($item->logo) }}" alt="" style=" width: 50px;height: 35px;">
												 												</div>
												<span>{{ $item->name }}</span>
											</a></li>




										</ul>
									</div>
                                    @endforeach


								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



	<!-- Content END-->
	<!-- Modal Box -->
	<div class="modal fade lead-form-modal" id="car-details" tabindex="-1" role="dialog" >
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="modal-body row m-a0 clearfix">
					<div class="col-lg-6 col-md-6 overlay-primary-dark d-flex p-a0" style="background-image:url(/assets/images/background/bg3.jpg);  background-position:center; background-size:cover;">
						<div class="form-info text-white align-self-center">
							<h3 class="m-b15">Login To You Now</h3>
							<p class="m-b15">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry.</p>
							<ul class="list-inline m-a0">
								<li><a href="#" class="m-r10 text-white"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="m-r10 text-white"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="m-r10 text-white"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="m-r10 text-white"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="m-r10 text-white"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 p-a0">
						<div class="lead-form browse-job text-left">
							<form>
								<h3 class="m-t0">Personal Details</h3>
								<div class="form-group">
									<input value="" class="form-control" placeholder="Name"/>
								</div>
								<div class="form-group">
									<input value="" class="form-control" placeholder="Mobile Number"/>
								</div>
								<div class="clearfix">
									<button type="button" class="btn-primary site-button btn-block">Submit </button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Box End -->
	<!-- Footer -->
    <footer class="site-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
					<div class="col-xl-3 col-lg-4 col-md-12 col-sm-12">
                        <div class="widget">
                           <div class=" border-0">

							 <h5 class="m-b20 text-white">Browse Jobs</h5>
                            <ul class="list-2 w10 list-line">
                                <li><a href="#jobsearch_all.html">Browse All Jobs</a></li>
                                <li><a href="#jobsearch_all.html?sch=1">Govt. Jobs</a></li>
                                <li><a href="#jobsearch_all.html?sch=2">International Jobs</a></li>
                                <!--<li><a href="job_by_company.html">Jobs by Company</a></li>-->
                                <li><a href="#job_by_category.html">Jobs by Category</a></li>
								<li><a href="#job_by_area.html">Jobs by Location</a></li>
                            </ul>
                        </div>

                        </div>
                    </div>
					<div class="col-xl-5 col-lg-5 col-md-8 col-sm-8 col-12">
					   <div class="row">

						<div class="col-xl-6">
						   <div class="widget border-0">
                            <h5 class="m-b20 text-white">INFORMATION</h5>
                              <ul class="list-2 w10 list-line">
                                <li><a href="#aboutus.html">About Us </a></li>
                                <li><a href="#terms.html">Terms & Conditions </a></li>
                                <li><a href="#privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="#contactus.html">Contact Us</a></li>
                                <li><a href="#faq.html">Help / FAQ</a></li>

                            </ul>
                        </div>
						 </div>
						 <div class="col-xl-6">
						   <div class="widget border-0">
                            <h5 class="m-b20 text-white">Jobseekers</h5>
                            <ul class="list-2 w10 list-line">
                                <li><a href="#jobsseeker-login.html">Login/Register</a></li>
                            </ul>
							<h5 class="m-b20 text-white">Jobseekers</h5>
							<ul class="list-2 w10 list-line">
                                <li><a href="#recruiter-listing.html">Browse All Recruiters</a></li>
                            </ul>
                        </div>

						</div>
                       </div>
                    </div>

					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-12">
                        <div class="widget border-0">
                            <h5 class="m-b20 text-white">GOVT. JOBS</h5>
                            <ul class="list-2 w10 list-line">
                                <li><a href="#jobsearch_all.html?sch=1">US Jobs</a></li>

                            </ul>
							<h5 class="m-b30 text-white">OVERSEA JOBS</h5>
                            <ul class="list-2 w10 list-line">
                                <li><a href="#jobsearch_all.html?sch=2">US Jobs</a></li>

                            </ul>
                        </div>
                    </div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-12">
                        <div class="widget border-0">
                            <h5 class="m-b20 text-white">Employers</h5>
                            <ul class="list-2 w10 list-line">
                                <li><a href="#emp_postjob.html">US Jobs</a></li>

                            </ul>
                        </div>
                    </div>
				</div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
				                     <div class="col-lg-6 text-left">
						<!--<p class="p-t15"> © 2020 Copyright by
						<a href="javascript:void(0);"> </a> All rights reserved.</p>-->

					</div>
					<div class="col-lg-6 text-right">
					  <div class="widget1">
					   <ul class="list-inline m-a0">
								<li><a href="http://www.facebook.com/" class="site-button white facebook circle "><i class="fa fa-facebook"></i></a></li>
								<li><a href="http://www.googleplus.com/" class="site-button white google-plus circle "><i class="fa fa-google-plus"></i></a></li>
								<li><a href="http://www.linkedin.com/" class="site-button white linkedin circle "><i class="fa fa-linkedin"></i></a></li>
								<!--<li><a href="javascript:void(0);" class="site-button white instagram circle "><i class="fa fa-instagram"></i></a></li>-->
								<li><a href="http://www.twitter.com/" class="site-button white twitter circle "><i class="fa fa-twitter"></i></a></li>
							</ul>
					   </div>
					</div>
                </div>
            </div>
        </div>
    </footer>

        <script src="/assets/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->

    <!-- Footer END -->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up" ></button>
</div>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="/lib/popper.js/popper.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="/lib/bootstrap/bootstrap.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="/assets/plugins/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="/assets/plugins/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="/assets/plugins/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="/assets/plugins/waypoints-min.js"></script><!-- WAYPOINTS JS -->
{{--<script src="/assets/plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->--}}
{{--<script src="/assets/plugins/asset/imagesloaded/asset/imagesloaded.js"></script><!-- IMAGESLOADED -->--}}
<script src="/assets/plugins/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="/assets/plugins/masonry.filter.js"></script><!-- MASONRY -->
<script src="/assets/plugins/owl.carousel.js"></script><!-- OWL SLIDER -->

<script src="/assets/js/custom1.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="/assets/js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
{{--<script src="/assets/js/dz.ajax.js"></script><!-- CONTACT JS  -->--}}

</body>

</html>
