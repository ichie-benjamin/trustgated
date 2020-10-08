<header>
    <div id="header-top" >
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <!-- LOGO -->
                    <a id="logo" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/">
                        <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/images/logo-1565092795.png" alt="enterprenuer.com">
                    </a>
                </div><!-- col -->
                <div class="col-sm-4">

                </div><!-- col -->
                <div class="col-sm-5 logme">
                    <div class="widget widget-pages">
                        <ul >
                            <div class="dropdown2">
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobseeker-profile.html" class="dropbtn2"><i class="fa fa-lock"></i> <strong> Varsha..</strong></a></li>
                                <div class="dropdown-content2">
                                    <a href="jobseeker-profile-edit.php">Edit Profile</a>
                                    <a href="save-jobs.php">Saved Jobs</a>
                                    <a href="changepasswordseeker.php">Change Password</a>

                                </div>
                            </div>
                            <li> <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>

                            <!--<li>
                                <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobseeker-profile.html">
                                  <i class="fa fa-user"></i> <strong> Varsha..</strong>
                                </a>
                            </li>
                            <li>
                                <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/logout.php">
                                    <!--<!--<i class="fa fa-pencil-square-o"></i>-->
                            <!--<i class="fa fa-sign-out"></i>
                              Logout
                        </a>
                    </li>-->

                        </ul>

                    </div><!-- widget-pages -->


                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- header-top -->
    <div class="banner-top">
        <div id="header" >
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- MENU -->
                        <nav>
                            <a id="mobile-menu-button" href="#"><i class="mt-icons-menu"></i></a>
                            <ul class="menu clearfix" id="menu">
                                <li><a style="font-size: 15px" href="{{ route('welcome') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                                <li><a style="font-size: 15px" href="{{ route('jobseeker-profile') }}"><i class="fa fa-user" aria-hidden="true"></i> Jobseekers</a></li>
                                <li><a style="font-size: 15px" href="{{ route('searchall') }}"><i class="fa fa-briefcase" aria-hidden="true"></i> Jobs</a></li>
                                <li><a style="font-size: 15px" href="{{ route('jobsearch_all') }}"><i class="fa fa-university" aria-hidden="true"></i> IIT/IIM jobs</a></li>
                                <li ><a style="font-size: 15px" href="{{ route('govt_job') }}"><i class="fa fa-university" aria-hidden="true"></i> Govt.jobs</a></li>
                                <li ><a style="font-size: 15px" href="{{ route('oversea_jobs') }}"><i class="fa fa-globe" aria-hidden="true"></i> Oversea jobs</a></li>
                                <li ><a style="font-size: 15px" href="{{ route('recruiters') }}"><i class="fa fa-users" aria-hidden="true"></i> Recruiters</a></li>
{{--                                <li ><a href="index.html"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/employers-icon.png" /> Employers</a></li>--}}
                                <li ><a style="font-size: 15px" href="{{ route('contactus') }}"><i class="fa fa-envelope" ></i> Contact us</a></li>

                            </ul>
                        </nav>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- header -->
        <script type="text/javascript">

        </script>

        <script type="text/javascript" src="assets/js/ajaxupload.js"></script>

        <!-- SEARCH-start -->

        <div class="container hometom">
            <div class="row">
                <div class="col-sm-12" >

                    <!--<div class="col-sm-1" ></div>-->
                    <div class="col-sm-12" >
                        <form class="form-inline" action="jobsearch.php" name="homeadvancesearch" method="GET">

                            <div class="form-group serww"><input class="form-control2 " id="keyword" name="refkeyword" type="text"  placeholder="Keywords, Skills, Designation" value=''></div>
                            <div class="form-group"> <input class="form-control2 " id="location" autocomplete="off" name="reflocation"  type="text" value='' placeholder="Location"></div>
                            <div class="form-group">
                                <select id="category" name="category" class="form-control2 ">
                                    <option value="">select industry</option>
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
                            <div class="form-group">
                                <select id="experience" name="experience" class="form-control2 " >
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
                                <!--<input  class="form-control2 input-lg" type="text" name="exp" placeholder="Experience">--></div>
                            <div class="form-group text-center"><button  class="search-btn btn-lg btn-block"  id="homeadvsearch" type="submit" name="homeadvsearch" value="Search"> <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/search-icon.png" /> Search</button>
                                <!--<span class="avd"><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" >Advanced Search</a></span>-->
                                <span class="avd"><a href="advancesearch.html">Advanced Search</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>            <!--SEARCH-end -->
        <div id="header-bottom" class="hea" >
            <div class="container">
                <div class="col-sm-12">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span ><i class="fa fa-bars fa-2"></i></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-2">
                        <ul class="nav navbar-nav navbar-left  clearfix sss">
                            <li>Browse jobs :</li>
                            <li class="active"><a href="{{ route('all_jobs') }}"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/all-jobs-icon.png" /> All jobs</a></li>
                            <li class=""><a href="{{ route('company_job') }}"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/jobs-by-company-icon.png" /> Job by Company</a></li>
                            <li class=""><a href="{{ route('category_job') }}"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/jobs-by-category-icon.png" /> Job by Category</a></li>
                            <li class=""><a href="{{ route('job_by_area') }}"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/jobs-by-location-icon.png" /> Job by Location</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> <!--col-sm-12-->
            </div><!--container-->
        </div><!--header-bottom-->          </div>  <!--banner-top-->
</header>
