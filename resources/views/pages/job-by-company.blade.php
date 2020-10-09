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
                        <li><a href="#"> Company</a></li>
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
                                    <th>Company</th>
                                    <!--<th>Walking start Date</th>
                                    <th>Walking end Date</th>-->
                                    <th>Address</th>
                                    <th></th>
                                </tr>

                                <tr><td>1</td><td><a href='jobsearch_all.html?cmpid=Testing Demo' style='color:rgb(56, 112, 159)'>Testing Demo</a></td>
                                    <!--<td>2018-12-12</td><td>2019-12-12</td>--><td>no 1,2 vanniyar street,karayanchavadi,po</td><td><a href='jobsearch_all.html?cmpid=Testing Demo' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr>
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
