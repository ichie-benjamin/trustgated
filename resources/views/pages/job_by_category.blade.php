@extends('layouts.master')

@section('content')
    
    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#"> Category</a></li>
                        <li class="active">Search</li>
                    </ol>
                </div>
                <!--col-md-2-->

                <!--col-md-7-->

                <div class="col-md-9"><br />
                    <div class="col-md-9">
                        <div style="color:rgb(56, 112, 159)">
                            <table class="table table-striped">
                                <tr>
                                    <th>S.No</th>
                                    <th>Category</th>
                                    <th></th>
                                </tr>

                                <tr><td>1</td><td>IT-ERP-Oracle</td><td><a href='jobsearch.html?category=50' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>2</td><td>Others</td><td><a href='jobsearch.html?category=45' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>3</td><td>IT - BPO</td><td><a href='jobsearch.html?category=53' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>4</td><td>KPO/Technical Support</td><td><a href='jobsearch.html?category=42' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>5</td><td>Law Enforcement/Security</td><td><a href='jobsearch.html?category=34' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>6</td><td>Legal/Law</td><td><a href='jobsearch.html?category=35' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>7</td><td>Marketing/Sales</td><td><a href='jobsearch.html?category=36' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>8</td><td>Media </td><td><a href='jobsearch.html?category=51' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>9</td><td>Media/Journalism</td><td><a href='jobsearch.html?category=37' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>10</td><td>Production/Manufacturing/Maintenance</td><td><a href='jobsearch.html?category=38' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>11</td><td>Strategy / Management Consulting Firms</td><td><a href='jobsearch.html?category=44' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>12</td><td>Tours And Travel/Airline</td><td><a href='jobsearch.html?category=40' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>13</td><td>Transportation/Logistics</td><td><a href='jobsearch.html?category=41' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>14</td><td>NGO/Social Services</td><td><a href='jobsearch.html?category=54' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>15</td><td>Management</td><td><a href='jobsearch.html?category=55' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr>
                            </table>
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
@endsection