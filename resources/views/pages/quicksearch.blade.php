@extends('layouts.master')

@section('style')
    <link rel="stylesheet" href="/assets/css/dev.css" type="text/css" />

@endsection

@section('content')
    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#"> Jobs</a></li>
                        <li class="active">Quick Search</li>
                    </ol>
                </div>
                <!--col-md-2-->

                <!--col-md-7-->

                <div class="col-md-9" style="  margin-left:0px;">

                    <div class="box radius fixheight" style="padding:0px 13px; height:430px !important; ">

                        <h4 style="margin: 0; padding: 5px 0px 0px 3px;">Quick Search</h4>

                        <form action="jobsearch.php" method="post" name="quicksearch" onSubmit="return checksubmit();" style="overflow:hidden;">

                            <div class="srchbar" style=" margin-top: 7px; padding:20px; height:150px !important;">

                                <div class="grid_5" style="padding:10px;">

                                    <P>Type to search your desired jobs</P>

                                    <input type="text" id="keyword" class="full" name="key" autocomplete="off">

                                </div>

                                <div class="grid_4" style=" padding:10px; margin: 13px;">

                                    <!--<a href="search.htm" class="gobtn">Search</a>-->

                                    <button type="submit" name="quickserach" class="btn btn-blue" style="line-height: 35px;">Search</button>

                                </div>

                            </div>

                        </form>

                        <div class="srchbar" style="padding:10px; margin-top: 15px; height:200px !important;">



                            <p style="color:#000; width:95%;">

                                <b>Jobs By Functions:</b><br />


                                <a href="searchpage.php?searchindus&indus=41">Transportation/Logistics</a>

                                |
                                <a href="searchpage.php?searchindus&indus=45">Others</a>

                                |
                                <a href="searchpage.php?searchindus&indus=54">NGO/Social Services</a>

                                |
                                <a href="searchpage.php?searchindus&indus=37">Media/Journalism</a>

                                |
                                <a href="searchpage.php?searchindus&indus=51">Media </a>


                                | <a href="categorysearch.php" style="font-weight:bold; text-decoration:none;"><strong>View More..</strong></a>



                            </p>



                            <p style="color:#000; width:95%;">

                                <b>Jobs By Locations:</b> <br />

                                <a href="jobsearch.php?locationsearch&loc=Indore"  class="side-link">
                                    Indore
                                </a>

                                |

                                <a href="{{ route('job_by_area') }}" style="font-weight:bold; text-decoration:none;">View More ...</a>




                            </p>

                        </div>

                    </div>

                </div>
                <div class="col-md-3">
                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Create Your Job Alert</h3>
                        </div>
                        <div class="create-job-content">
                            <p>
                                Specify your criteria and Regularly receive jobs of your choice
                                Be the first to apply for these jobs Stay updated about the job market.</p>
                            <div class="ali-right"> <input class="btn-blue btn" value="Create Now " type="button"></div>
                        </div>
                    </div><!--create-job-->

                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Recruiters </h3>
                        </div>
                        <div class="create-job-content">
                            <p> Connect to recruiters directly. More than 50,000 Recruiter across Industries.</p>
                            <div class="ali-right"> <input class="btn-blue btn" value="View All " type="button"></div>
                        </div>
                    </div><!--create-job-->


                    <div class="career-services">
                        <div class="career-services-head">
                            <h3>Career Services</h3>
                        </div>
                        <div class="all-category">
                            <ul>
                                <li><a href="">Featured Service</a></li>
                                <li><a href="">Speak to HR Expert</a></li>
                                <li><a href="">Resume Spotlight</a></li>
                                <li><a href="">Career Guidence</a></li>
                                <li><a href="">Salary Negotiator</a></li>
                                <li><a href="">Interview Skills </a></li>
                            </ul>
                        </div>
                    </div><!--career-services-->

                    <div class="career-services">
                        <div class="career-services-head">
                            <h3>Premium Service</h3>
                        </div>
                        <div class="all-category">
                            <ul>
                                <li><a href="">Resume Writing</a></li>
                                <li><a href="">Background Verification</a></li>
                                <li><a href="">Aptitude Test</a></li>
                                <li><a href="">Jobs for You</a></li>

                            </ul>
                        </div>
                    </div>


                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Featured Companies </h3>
                        </div>
                        <div class="create-job-content">
                            <div class="fea-compa"><a href="#"> <img src="images/featured-companie-1.jpg" alt="featured-companie"></a></div>
                            <div class="fea-compa"><a href="#"> <img src="images/featured-companie-2.jpg" alt="featured-companie"></a></div>
                            <div class="fea-compa"><a href="#"> <img src="images/featured-companie-3.jpg" alt="featured-companie"></a></div>
                            <div class="fea-compa"><a href="#"> <img src="images/featured-companie-4.jpg" alt="featured-companie"></a></div>
                            <div class="fea-compa"><a href="#"> <img src="images/featured-companie-5.jpg" alt="featured-companie"></a></div>
                            <div class="fea-compa"><a href="#"> <img src="images/featured-companie-6.jpg" alt="featured-companie"></a></div>
                        </div>
                    </div><!--create-job-->

                    <div class="openings">
                        <a href="#"><img src="images/mg-group.jpg" alt="ads"></a>
                    </div><!--openings-->

                </div><!--col-md-3-->

            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
    <!--ADVANCED SEARCH POPUP-->
@endsection
