
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from 74.124.215.220/~demolin/demo/entrepreneur_job_portal/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Oct 2020 12:57:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Jobs Portal" />
	<meta property="og:title" content="Jobs Portal" />
	<meta property="og:description" content="Jobs Portal" />
	<meta property="og:image" content="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/social-image.png" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<link rel="icon" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png" />

	<!-- PAGE TITLE HERE -->
	<title>Jobs Portal</title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="http://job-board.dexignzone.com/xhtml/js/html5shiv.min.js"></script>
	<script src="http://job-board.dexignzone.com/xhtml/js/respond.min.js"></script>
	<![endif]-->

	<!-- STYLESHEETS -->
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/css/plugins.css">
	<link rel="stylesheet" type="text/css" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/css/templete.css">
	<link class="skin" rel="stylesheet" type="text/css" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/css/skin/skin-1.css">

	<style>
[aria-expanded="false"] > .expanded,
[aria-expanded="true"] > .collapsed {
  display: none;
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
						<a href="index.html">
												<img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/images/logo-1565092795.png" alt="enterprenuer.com" class="logo" ></a>
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

                            <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsseeker-login.html" class="site-button"><i class="fa fa-user"></i>Login</a>
                            <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobseeker-registration.html" title="READ MORE" rel="bookmark" class="site-button"><i class="fa fa-lock"></i> Register </a>

                        </div>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">
							<li class="active" ><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsseeker-login.html">Jobseekers</a></li>
							<li ><a href="{{ route('searchall') }}">Jobs </a></li>
							<li ><a href="{{ route('jobsearch_all') }}">IIT/IIM Jobs </a></li>
							<li ><a href="{{ route('govt_job') }}">Govt.Jobs </a></li>
							<li><a href="{{ route('oversea_jobs') }}">Oversea jobs </a></li>
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

		<div class="dez-bnr-inr dez-bnr-inr-md" style="background-image:url(http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/images/slider-1598937228.);">
            <div class="container">
                <div class="dez-bnr-inr-entry align-m padb-130">
					<div class="find-job-bx">
											<!--<a href="#" class="site-button button-sm">Find Jobs, Employment & Career Opportunities</a>
						<h2>Search Between More Then <br/> <span class="text-primary">50,000</span> Open Jobs.</h2>-->
						<h2 style=\\\"\\\\\\\">Search Between More Than&nbsp;<br style=\\\"\\\\\\\" /><span style=\\\"\\\\\\\">50,000</span>&nbsp;Open Jobs.</h2>						<form class="dezPlaceAni" action="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch.php" method="GET">
							<div class="row">
								<div class="col-lg-3 col-md-6">
									<div class="form-group">
										<label>Job Title, Keywords, or company</label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="" value='' name="refkeyword">
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
											<input type="text" class="form-control" placeholder="" value='' name="reflocation">
											<div class="input-group-append">
											  <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-6">
									<div class="form-group">
										<select name="category">
											<option value="">Select industry</option>
														<option value="56"  >Construction</option>
														<option value="53"  >IT - BPO</option>
														<option value="50"  >IT-ERP-Oracle</option>
														<option value="42"  >KPO/Technical Support</option>
														<option value="34"  >Law Enforcement/Security</option>
														<option value="35"  >Legal/Law</option>
														<option value="55"  >Management</option>
														<option value="36"  >Marketing/Sales</option>
														<option value="52"  >mech</option>
														<option value="51"  >Media </option>
														<option value="37"  >Media/Journalism</option>
														<option value="54"  >NGO/Social Services</option>
														<option value="45"  >Others</option>
														<option value="38"  >Production/Manufacturing/Maintenance</option>
														<option value="44"  >Strategy / Management Consulting Firms</option>
														<option value="46"  >test cate</option>
														<option value="40"  >Tours and Travel/Airline</option>
														<option value="41"  >Transportation/Logistics</option>
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
				                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border jp_job_cate_left_border_bottom col-sm-2">
                    <div class="jp_top_jobs_category">
                        <!--<i class="fa fa-code"></i>-->
                        <h3><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?f_area=261">Business Development...</a></h3>
                        <p>(1 jobs)</p>
                    </div>
                </div>
				                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border jp_job_cate_left_border_bottom col-sm-2">
                    <div class="jp_top_jobs_category">
                        <!--<i class="fa fa-code"></i>-->
                        <h3><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?f_area=262">Customer Relationshi...</a></h3>
                        <p>(1 jobs)</p>
                    </div>
                </div>
				                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border jp_job_cate_left_border_bottom col-sm-2">
                    <div class="jp_top_jobs_category">
                        <!--<i class="fa fa-code"></i>-->
                        <h3><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?f_area=110">Stock Broking</a></h3>
                        <p>(1 jobs)</p>
                    </div>
                </div>
				                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border jp_job_cate_left_border_bottom col-sm-2">
                    <div class="jp_top_jobs_category">
                        <!--<i class="fa fa-code"></i>-->
                        <h3><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?f_area=264">Marketing Executives</a></h3>
                        <p>(1 jobs)</p>
                    </div>
                </div>
				                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border jp_job_cate_left_border_bottom col-sm-2">
                    <div class="jp_top_jobs_category">
                        <!--<i class="fa fa-code"></i>-->
                        <h3><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?f_area=250">Legal Adviser</a></h3>
                        <p>(1 jobs)</p>
                    </div>
                </div>
				                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border jp_job_cate_left_border_bottom col-sm-2">
                    <div class="jp_top_jobs_category">
                        <!--<i class="fa fa-code"></i>-->
                        <h3><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?f_area=326">Tour Operator</a></h3>
                        <p>(1 jobs)</p>
                    </div>
                </div>

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
	           <div class="col-md-3 col-sm-6">
            <div class="grid-view brows-job-list">
               <div class="brows-job-company-img">

			 <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/com-2.jpg" class="img-responsive" alt="">
			 			 </div>
               <div class="brows-job-position">

                  <h3><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/job-detail-page.html?jid=31527846358">Junior Engineering Assistant G...</a></h3>
                  <p><span>Inet-Solution</span></p>
               </div>
               <div class="job-position"><span class="job-num">0-9 YRS</span></div>
               <!--<div class="brows-job-type"><span class="part-time">Part Time</span></div>-->
               <ul class="grid-view-caption">
                  <li>
                     <div class="brows-job-location">
                        <p><i class="fa fa-map-marker"></i>Soledad</p>
                     </div>
                  </li>
                  <li>
                     <p><span class="brows-job-sallery"><i class="fa fa-money"></i>1  - 10lakhs </span></p>
                  </li>
               </ul>
            </div>
         </div>
									         <div class="col-md-3 col-sm-6">
            <div class="grid-view brows-job-list">
               <div class="brows-job-company-img">

			 <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/1437486045.jpg" class="img-responsive" alt="">
			 			 </div>
               <div class="brows-job-position">

                  <h3><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/job-detail-page.html?jid=31527833317">BPO / KPO / CCE / Process Asso...</a></h3>
                  <p><span>Creative Hands HR Co...</span></p>
               </div>
               <div class="job-position"><span class="job-num">2-8 YRS</span></div>
               <!--<div class="brows-job-type"><span class="part-time">Part Time</span></div>-->
               <ul class="grid-view-caption">
                  <li>
                     <div class="brows-job-location">
                        <p><i class="fa fa-map-marker"></i>Pondicherr...</p>
                     </div>
                  </li>
                  <li>
                     <p><span class="brows-job-sallery"><i class="fa fa-money"></i>1  - 45lakhs </span></p>
                  </li>
               </ul>
            </div>
         </div>
									         <div class="col-md-3 col-sm-6">
            <div class="grid-view brows-job-list">
               <div class="brows-job-company-img">

			 <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/1437486045.jpg" class="img-responsive" alt="">
			 			 </div>
               <div class="brows-job-position">

                  <h3><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/job-detail-page.html?jid=31527833570">Manager, India Counterfeit and...</a></h3>
                  <p><span>Connectpro Managemen...</span></p>
               </div>
               <div class="job-position"><span class="job-num">4-10 YRS</span></div>
               <!--<div class="brows-job-type"><span class="part-time">Part Time</span></div>-->
               <ul class="grid-view-caption">
                  <li>
                     <div class="brows-job-location">
                        <p><i class="fa fa-map-marker"></i>Barbil</p>
                     </div>
                  </li>
                  <li>
                     <p><span class="brows-job-sallery"><i class="fa fa-money"></i>8  - 7lakhs </span></p>
                  </li>
               </ul>
            </div>
         </div>
									         <div class="col-md-3 col-sm-6">
            <div class="grid-view brows-job-list">
               <div class="brows-job-company-img">

			 <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/com-6.jpg" class="img-responsive" alt="">
			 			 </div>
               <div class="brows-job-position">

                  <h3><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/job-detail-page.html?jid=31527836914">Travel Expert for Ticketing an...</a></h3>
                  <p><span>THE STAR HOLIDAYS</span></p>
               </div>
               <div class="job-position"><span class="job-num">0-8 YRS</span></div>
               <!--<div class="brows-job-type"><span class="part-time">Part Time</span></div>-->
               <ul class="grid-view-caption">
                  <li>
                     <div class="brows-job-location">
                        <p><i class="fa fa-map-marker"></i>Astara</p>
                     </div>
                  </li>
                  <li>
                     <p><span class="brows-job-sallery"><i class="fa fa-money"></i>2  - 15lakhs </span></p>
                  </li>
               </ul>
            </div>
         </div>
									         <div class="col-md-3 col-sm-6">
            <div class="grid-view brows-job-list">
               <div class="brows-job-company-img">

			 <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/1391518038.png" class="img-responsive" alt="">
			 			 </div>
               <div class="brows-job-position">

                  <h3><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/job-detail-page.html?jid=31530696765">php html developer</a></h3>
                  <p><span>testing demo</span></p>
               </div>
               <div class="job-position"><span class="job-num">3-4 YRS</span></div>
               <!--<div class="brows-job-type"><span class="part-time">Part Time</span></div>-->
               <ul class="grid-view-caption">
                  <li>
                     <div class="brows-job-location">
                        <p><i class="fa fa-map-marker"></i>Indore</p>
                     </div>
                  </li>
                  <li>
                     <p><span class="brows-job-sallery"><i class="fa fa-money"></i>3  - 3lakhs </span></p>
                  </li>
               </ul>
            </div>
         </div>
									         <div class="col-md-3 col-sm-6">
            <div class="grid-view brows-job-list">
               <div class="brows-job-company-img">

			 <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/1391517965.jpg" class="img-responsive" alt="">
			 			 </div>
               <div class="brows-job-position">

                  <h3><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/job-detail-page.html?jid=31530526424">Associative Vice President</a></h3>
                  <p><span>php script mall</span></p>
               </div>
               <div class="job-position"><span class="job-num">15-13 YRS</span></div>
               <!--<div class="brows-job-type"><span class="part-time">Part Time</span></div>-->
               <ul class="grid-view-caption">
                  <li>
                     <div class="brows-job-location">
                        <p><i class="fa fa-map-marker"></i>NIL</p>
                     </div>
                  </li>
                  <li>
                     <p><span class="brows-job-sallery"><i class="fa fa-money"></i>4  - 9lakhs </span></p>
                  </li>
               </ul>
            </div>
         </div>
									         <div class="col-md-3 col-sm-6">
            <div class="grid-view brows-job-list">
               <div class="brows-job-company-img">

			 <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/1437486045.jpg" class="img-responsive" alt="">
			 			 </div>
               <div class="brows-job-position">

                  <h3><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/job-detail-page.html?jid=31527835351">Associate Editor ( Magazine / ...</a></h3>
                  <p><span>Sphere TravelMedia &...</span></p>
               </div>
               <div class="job-position"><span class="job-num">0-10 YRS</span></div>
               <!--<div class="brows-job-type"><span class="part-time">Part Time</span></div>-->
               <ul class="grid-view-caption">
                  <li>
                     <div class="brows-job-location">
                        <p><i class="fa fa-map-marker"></i>Karveripak...</p>
                     </div>
                  </li>
                  <li>
                     <p><span class="brows-job-sallery"><i class="fa fa-money"></i>1  - 10lakhs </span></p>
                  </li>
               </ul>
            </div>
         </div>
									         <div class="col-md-3 col-sm-6">
            <div class="grid-view brows-job-list">
               <div class="brows-job-company-img">

			 <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/com-2.jpg" class="img-responsive" alt="">
			 			 </div>
               <div class="brows-job-position">

                  <h3><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/job-detail-page.html?jid=31527847435">Project Associate (Software/ H...</a></h3>
                  <p><span>Inet-Solution</span></p>
               </div>
               <div class="job-position"><span class="job-num">0-10 YRS</span></div>
               <!--<div class="brows-job-type"><span class="part-time">Part Time</span></div>-->
               <ul class="grid-view-caption">
                  <li>
                     <div class="brows-job-location">
                        <p><i class="fa fa-map-marker"></i>Baisi</p>
                     </div>
                  </li>
                  <li>
                     <p><span class="brows-job-sallery"><i class="fa fa-money"></i>2  - 11lakhs </span></p>
                  </li>
               </ul>
            </div>
         </div>

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
									<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?cityfav=Baisi">
							<div class="city-bx align-items-end  d-flex" style="background-image:url(http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/images/city/pic1.jpg)">
								<div class="city-info">
									<h5>Baisi</h5>
									<span>1 Jobs</span>
								</div>
							</div>
						</a>
					</div>
														<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?cityfav=Serchhip">
							<div class="city-bx align-items-end  d-flex" style="background-image:url(http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/images/city/pic2.jpg)">
								<div class="city-info">
									<h5>Serchhip</h5>
									<span>1 Jobs</span>
								</div>
							</div>
						</a>
					</div>
														<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?cityfav=Bastar">
							<div class="city-bx align-items-end  d-flex" style="background-image:url(http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/images/city/pic3.jpg)">
								<div class="city-info">
									<h5>Bastar</h5>
									<span>1 Jobs</span>
								</div>
							</div>
						</a>
					</div>
														<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?cityfav=Jorethang">
							<div class="city-bx align-items-end  d-flex" style="background-image:url(http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/images/city/pic4.jpg)">
								<div class="city-info">
									<h5>Jorethang</h5>
									<span>1 Jobs</span>
								</div>
							</div>
						</a>
					</div>
														<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?cityfav=Gopalasamudram">
							<div class="city-bx align-items-end  d-flex" style="background-image:url(http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/images/city/pic5.jpg)">
								<div class="city-info">
									<h5>Gopalasamudram</h5>
									<span>1 Jobs</span>
								</div>
							</div>
						</a>
					</div>
														<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?cityfav=Ponda%20City">
							<div class="city-bx align-items-end  d-flex" style="background-image:url(http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/images/city/pic6.jpg)">
								<div class="city-info">
									<h5>Ponda City</h5>
									<span>1 Jobs</span>
								</div>
							</div>
						</a>
					</div>
														<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?cityfav=Barbil">
							<div class="city-bx align-items-end  d-flex" style="background-image:url(http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/images/city/pic7.jpg)">
								<div class="city-info">
									<h5>Barbil</h5>
									<span>1 Jobs</span>
								</div>
							</div>
						</a>
					</div>
														<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?cityfav=Nongpoh">
							<div class="city-bx align-items-end  d-flex" style="background-image:url(http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/images/city/pic8.jpg)">
								<div class="city-info">
									<h5>Nongpoh</h5>
									<span>1 Jobs</span>
								</div>
							</div>
						</a>
					</div>

				</div>
			</div>
		</div>

     <div class="section-full  bg-gray p-t30 p-b20">
		<div class="container">
		   <div class="row">
			  <div class="col-lg-9">
			     <div class="jp_register_section_main_wrapper">
                                <div class="jp_regis_left">
                                    <div class="left_side_box">
									                                         <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/images/regis_icon.png" alt="icon">

										<h4>Im an EMPLOYER</h4>
<p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>                                        <ul>
                                            <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//employer-registration.html"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS COMPANY</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="jp_regis_right">
                                    <div class="right_img_overlay"></div>
                                    <div class="right_side_box">
									                                        <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/images/regis_icon2.png" alt="icon">
                                        <h4>Im an candidate</h4>
                                        <p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>



                                        <ul>
                                            <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//jobseeker-registration.html"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS CANDIDATE</a></li>
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
							                                            <li><i class="fa fa-caret-right"></i> <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?category=36">Marketing/Sales<span>(3)</span></a></li>
											                                            <li><i class="fa fa-caret-right"></i> <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?category=40">Tours and Travel/Air...<span>(3)</span></a></li>
											                                            <li><i class="fa fa-caret-right"></i> <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?category=50">IT-ERP-Oracle<span>(2)</span></a></li>
											                                            <li><i class="fa fa-caret-right"></i> <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?category=53">IT - BPO<span>(2)</span></a></li>
											                                            <li><i class="fa fa-caret-right"></i> <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?category=38">Production/Manufactu...<span>(2)</span></a></li>
											                                         <div id="collapseExample" class="collapse">


                                            <li >

													<i class="fa fa-caret-right"></i> <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?category=34">Law Enforcement/Secu...<span>(1)</span></a>

												</li>


                                            <li >

													<i class="fa fa-caret-right"></i> <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?category=37">Media/Journalism<span>(1)</span></a>

												</li>


                                            <li >

													<i class="fa fa-caret-right"></i> <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?category=44">Strategy / Managemen...<span>(1)</span></a>

												</li>


                                            <li >

													<i class="fa fa-caret-right"></i> <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?category=41">Transportation/Logis...<span>(1)</span></a>

												</li>


                                            <li >

													<i class="fa fa-caret-right"></i> <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?category=55">Management<span>(1)</span></a>

												</li>


                                            <li >

													<i class="fa fa-caret-right"></i> <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?category=45">Others<span>(1)</span></a>

												</li>


                                            <li >

													<i class="fa fa-caret-right"></i> <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?category=42">KPO/Technical Suppor...<span>(1)</span></a>

												</li>


                                            <li >

													<i class="fa fa-caret-right"></i> <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?category=35">Legal/Law<span>(1)</span></a>

												</li>


                                            <li >

													<i class="fa fa-caret-right"></i> <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.php?category=51">Media <span>(1)</span></a>

												</li>
																								</div>
											<li><i class="fa fa-plus-circle"></i> <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" ><span class="collapsed">View more Categories</span> <span class="expanded">View less Categories</span></a></li>


                                        </ul>
                                    </div>
                         </div>
						 <div class="clearfix"></div>
						 						 <div class="candidates-are-sys m-t30">
								<div class="candidates-bx">
									<div class="testimonial-pic radius"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/art_photo/1472533219.png" alt="" width="100" height="100"></div>
									<div class="testimonial-text">
										<p><p>"Donec sagittis et massa at rutrum. Proin eleifend nunc interdum tortor malesuada molestie."</p> </p>
									</div>
									<div class="testimonial-detail"> <strong class="testimonial-name">John</strong> <span class="testimonial-position">Branding Manager</span> </div>
								</div>
							</div>
							 						 <div class="clearfix"></div>
						 <div class="quote-bx m-t30">
								<div class="quote-info">
																	<h4>Make a Difference with Your Online Resume!</h4><p>Your resume in minutes with JobBoard resume assistant is ready!</p>									<a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//jobseeker-registration.html" class="site-button">Create an Account</a>
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
																	<div class="col-lg-4 col-sm-12">
										<ul class="category-list category-bx">

											<li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//jobsearch_all.php?cmpy_srch=testing%20demo">
												<div class="logo">

												<img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/1391518038.png" alt="" style=" width: 50px;height: 35px;">
												 												</div>
												<span>testing demo</span>
											</a></li>




										</ul>
									</div>
																		<div class="col-lg-4 col-sm-12">
										<ul class="category-list category-bx">

											<li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//jobsearch_all.php?cmpy_srch=php%20script%20mall">
												<div class="logo">

												<img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/1391517965.jpg" alt="" style=" width: 50px;height: 35px;">
												 												</div>
												<span>php script mall</span>
											</a></li>




										</ul>
									</div>
																		<div class="col-lg-4 col-sm-12">
										<ul class="category-list category-bx">

											<li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//jobsearch_all.php?cmpy_srch=Client%20of%20Antrors%20HR%20Solutions">
												<div class="logo">

												<img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/1437486045.jpg" alt="" style=" width: 50px;height: 35px;">
												 												</div>
												<span>Client of Antrors HR Solutions</span>
											</a></li>




										</ul>
									</div>
																		<div class="col-lg-4 col-sm-12">
										<ul class="category-list category-bx">

											<li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//jobsearch_all.php?cmpy_srch=CN%20Immigration%20Services%20Pvt.%20Ltd">
												<div class="logo">

												<img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/1437486045.jpg" alt="" style=" width: 50px;height: 35px;">
												 												</div>
												<span>CN Immigration Services Pvt. L...</span>
											</a></li>




										</ul>
									</div>
																		<div class="col-lg-4 col-sm-12">
										<ul class="category-list category-bx">

											<li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//jobsearch_all.php?cmpy_srch=THE%20STAR%20HOLIDAYS">
												<div class="logo">

												<img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/com-6.jpg" alt="" style=" width: 50px;height: 35px;">
												 												</div>
												<span>THE STAR HOLIDAYS</span>
											</a></li>




										</ul>
									</div>
																		<div class="col-lg-4 col-sm-12">
										<ul class="category-list category-bx">

											<li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//jobsearch_all.php?cmpy_srch=Connectpro%20Management%20Consultants%20Pvt%20Ltd">
												<div class="logo">

												<img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/1437486045.jpg" alt="" style=" width: 50px;height: 35px;">
												 												</div>
												<span>Connectpro Management Consulta...</span>
											</a></li>




										</ul>
									</div>
																		<div class="col-lg-4 col-sm-12">
										<ul class="category-list category-bx">

											<li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//jobsearch_all.php?cmpy_srch=Cummins%20India%20Ltd">
												<div class="logo">

												<img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/com-6.jpg" alt="" style=" width: 50px;height: 35px;">
												 												</div>
												<span>Cummins India Ltd </span>
											</a></li>




										</ul>
									</div>
																		<div class="col-lg-4 col-sm-12">
										<ul class="category-list category-bx">

											<li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//jobsearch_all.php?cmpy_srch=Podar%20Education%20Network%20Pvt%20Ltd">
												<div class="logo">

												<img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/com-6.jpg" alt="" style=" width: 50px;height: 35px;">
												 												</div>
												<span>Podar Education Network Pvt Lt...</span>
											</a></li>




										</ul>
									</div>
																		<div class="col-lg-4 col-sm-12">
										<ul class="category-list category-bx">

											<li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//jobsearch_all.php?cmpy_srch=Executive%20Tracks%20Associates%20(P)%20Ltd.">
												<div class="logo">

												<img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/1437486045.jpg" alt="" style=" width: 50px;height: 35px;">
												 												</div>
												<span>Executive Tracks Associates (P...</span>
											</a></li>




										</ul>
									</div>
																		<div class="col-lg-4 col-sm-12">
										<ul class="category-list category-bx">

											<li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//jobsearch_all.php?cmpy_srch=Diamond%20Magazines%20P%20Ltd">
												<div class="logo">

												<img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/1437486045.jpg" alt="" style=" width: 50px;height: 35px;">
												 												</div>
												<span>Diamond Magazines P Ltd</span>
											</a></li>




										</ul>
									</div>
																		<div class="col-lg-4 col-sm-12">
										<ul class="category-list category-bx">

											<li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//jobsearch_all.php?cmpy_srch=IP%20INTEGRATED%20SERVICES%20PVT%20LTS">
												<div class="logo">

												<img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/com-6.jpg" alt="" style=" width: 50px;height: 35px;">
												 												</div>
												<span>IP INTEGRATED SERVICES PVT LTS</span>
											</a></li>




										</ul>
									</div>
																		<div class="col-lg-4 col-sm-12">
										<ul class="category-list category-bx">

											<li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//jobsearch_all.php?cmpy_srch=OASIS">
												<div class="logo">

												<img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/1437486045.jpg" alt="" style=" width: 50px;height: 35px;">
												 												</div>
												<span>OASIS</span>
											</a></li>




										</ul>
									</div>
																		<div class="col-lg-4 col-sm-12">
										<ul class="category-list category-bx">

											<li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//jobsearch_all.php?cmpy_srch=Indian%20Institute%20of%20Management">
												<div class="logo">

												<img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/com-6.jpg" alt="" style=" width: 50px;height: 35px;">
												 												</div>
												<span>Indian Institute of Management</span>
											</a></li>




										</ul>
									</div>
																		<div class="col-lg-4 col-sm-12">
										<ul class="category-list category-bx">

											<li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//jobsearch_all.php?cmpy_srch=Inet-Solution">
												<div class="logo">

												<img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/com-2.jpg" alt="" style=" width: 50px;height: 35px;">
												 												</div>
												<span>Inet-Solution</span>
											</a></li>




										</ul>
									</div>
																		<div class="col-lg-4 col-sm-12">
										<ul class="category-list category-bx">

											<li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//jobsearch_all.php?cmpy_srch=Creative%20Hands%20HR%20Consultancy">
												<div class="logo">

												<img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/1437486045.jpg" alt="" style=" width: 50px;height: 35px;">
												 												</div>
												<span>Creative Hands HR Consultancy</span>
											</a></li>




										</ul>
									</div>
																		<div class="col-lg-4 col-sm-12">
										<ul class="category-list category-bx">

											<li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//jobsearch_all.php?cmpy_srch=Sphere%20TravelMedia%20&amp;%20Exhibition%20Private%20Limited">
												<div class="logo">

												<img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/1437486045.jpg" alt="" style=" width: 50px;height: 35px;">
												 												</div>
												<span>Sphere TravelMedia & Exhibitio...</span>
											</a></li>




										</ul>
									</div>
																		<div class="col-lg-4 col-sm-12">
										<ul class="category-list category-bx">

											<li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//jobsearch_all.php?cmpy_srch=THE%20HOLIDAYS%20INN">
												<div class="logo">

												<img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//company_logo/com-6.jpg" alt="" style=" width: 50px;height: 35px;">
												 												</div>
												<span>THE HOLIDAYS INN</span>
											</a></li>




										</ul>
									</div>

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
					<div class="col-lg-6 col-md-6 overlay-primary-dark d-flex p-a0" style="background-image:url(http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/images/background/bg3.jpg);  background-position:center; background-size:cover;">
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
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.html">Browse All Jobs</a></li>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.html?sch=1">Govt. Jobs</a></li>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.html?sch=2">International Jobs</a></li>
                                <!--<li><a href="job_by_company.html">Jobs by Company</a></li>-->
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/job_by_category.html">Jobs by Category</a></li>
								<li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/job_by_area.html">Jobs by Location</a></li>
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
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/aboutus.html">About Us </a></li>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/terms.html">Terms & Conditions </a></li>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/contactus.html">Contact Us</a></li>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/faq.html">Help / FAQ</a></li>

                            </ul>
                        </div>
						 </div>
						 <div class="col-xl-6">
						   <div class="widget border-0">
                            <h5 class="m-b20 text-white">Jobseekers</h5>
                            <ul class="list-2 w10 list-line">
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsseeker-login.html">Login/Register</a></li>
                            </ul>
							<h5 class="m-b20 text-white">Jobseekers</h5>
							<ul class="list-2 w10 list-line">
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/recruiter-listing.html">Browse All Recruiters</a></li>
                            </ul>
                        </div>

						</div>
                       </div>
                    </div>

					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-12">
                        <div class="widget border-0">
                            <h5 class="m-b20 text-white">GOVT. JOBS</h5>
                            <ul class="list-2 w10 list-line">
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.html?sch=1">US Jobs</a></li>

                            </ul>
							<h5 class="m-b30 text-white">OVERSEA JOBS</h5>
                            <ul class="list-2 w10 list-line">
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.html?sch=2">US Jobs</a></li>

                            </ul>
                        </div>
                    </div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-12">
                        <div class="widget border-0">
                            <h5 class="m-b20 text-white">Employers</h5>
                            <ul class="list-2 w10 list-line">
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/emp_postjob.html">US Jobs</a></li>

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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
    $( document ).ready(function() {
        var getval = document.domain;
        var pass_arg = {get_val:getval};
        $.ajax({
          dataType: "json",
          url: "admin/readajax.php",
          type: "POST",
          async : true,
          data: pass_arg,
        });
    });
    </script>
    <!-- Footer END -->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up" ></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/plugins/asset/imagesloaded/asset/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->

<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/js/dz.ajax.js"></script><!-- CONTACT JS  -->
</body>


<!-- Mirrored from 74.124.215.220/~demolin/demo/entrepreneur_job_portal/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Oct 2020 12:57:19 GMT -->
</html>
