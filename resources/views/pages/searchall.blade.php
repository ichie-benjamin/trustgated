@extends('layouts.master')

@section('content')
    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/">Home</a></li>
                        <li><a href="#"> Jobs</a></li>
                        <li class="active">Search</li>
                    </ol>
                </div>
                <!--col-md-2-->

                <!--col-md-7-->

                <div class="col-md-9"><br />
                    <div class="col-md-6" style="border:1px solid #a1d8ff; height:126px;">
                        <div align="center">
                            <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/quicksearch.html">
                                <img class="img-responsive" src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/images/quick-search-menu.jpg" alt="Quick Search" title="Quick Search" border="0"  />
                            </a>
                        </div>
                        <div align="center" style="margin-bottom: 10px;">
                            <span class="sub_heading3">View the Names of your job agent , which you have created.</span>
                        </div>
                    </div>


                    <div class="col-md-6" style="border:1px solid #a1d8ff; height:126px;">
                        <div align="center">
                            <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/advancesearch.html">
                                <img class="img-responsive" src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/images/Advance-search-menu.jpg" alt="Advanced Search" title="Advanced Search" border="0"  />
                            </a>
                        </div>
                        <div align="center" style="margin-bottom: 10px;">
                            <span class="sub_heading3">Edit the Job Agent details to view the job posted.</span>
                        </div>
                    </div>



                    <div class="col-md-6" style="border:1px solid #a1d8ff; height:126px;">
                        <div align="center">
                            <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/companysearch.html">
                                <img class="img-responsive" src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/images/search_by_company-menu.jpg" alt="Search by Company" title="Search by Company" border="0"  />
                            </a>
                        </div>
                        <div align="center" style="margin-bottom: 10px;">
                            <span class="sub_heading3">List of jobs of  available to the Company </span>
                        </div>
                    </div>


                    <div class="col-md-6" style="border:1px solid #a1d8ff; height:126px;">
                        <div align="center">
                            <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/categorysearch.html">
                                <img class="img-responsive" src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/images/search_by_industry-menu.jpg" alt="Industry wise Search" title="Industry wise Search" border="0" />
                            </a>
                        </div>
                        <div align="center" style="margin-bottom: 10px;">
                            <span class="sub_heading3">List of jobs of  available to the users under the different categories</span>
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
                            <div class="ali-right"><input class="btn-blue btn" data-toggle="modal" data-target="#createjob" value="Create Now" type="button"></div>
                        </div>
                    </div><!--create-job-->

                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Recruiters </h3>
                        </div>
                        <div class="create-job-content">
                            <p> Connect to recruiters directly. More than 50,000 Recruiter across Industries.</p>
                            <div class="ali-right">  <a href="recruiter-listing.html" class="btn-blue btn" >View All<a></div>
                        </div>
                    </div><!--create-job-->


                    <!--<div class="career-services">
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
                     </div>--><!--career-services-->

                    <!-- <div class="career-services">
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
                      </div>-->


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
