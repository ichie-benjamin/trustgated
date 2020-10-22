@extends('layouts.master')

@section('content')

    <!-- CONTENT -->
    <div id="content">
      <div class="container">
          <div class="row">
              <div class="col-md-0"></div>
              <div class="col-md-11">
                  <ol class="breadcrumb">
                      <li><a href="{{ url('/') }}">Home</a></li>
                      <li><a href="#"> Jobs</a></li>
                      <li class="active">Search Results</li>
                  </ol>
              </div>
              <div class="col-md-2  padno">
                  <div class="refine">
                      <div class="refine-head">
                          <h2>Refine Results</h2>
                      </div>

                      <div class="refine-content">
                          <form action="" method="GET" name="refine1" class="jobsr" onSubmit="">
                              <input type="text" name="refkeyword" id="refkeyword" class="form-control "  placeholder="Keywords" value="">
                              <input type="text" name="reflocation" id="reflocation" class="form-control m10"  placeholder="Location" value="">
                              <div class="text-center"> <input class="btn-blue btn m10" value="Refine " type="submit" name="refinesrch1"></div>
                          </form>

                      </div>
                  </div>
                  <div class="openings">
                      <a href="http://192.168.1.50/sindhu/job/job-portal"><img src="admin/uploads/banner/banner-1552284433.jpg" alt="ads"></a>
                  </div>
                  <div class="openings">
                      <a href="http://192.168.1.50/sindhu/job/job-portal"><img src="admin/uploads/banner/banner-1552284396.jpg" alt="ads"></a>
                  </div>
                  <div class="openings">
                      <a href="http://192.168.1.50/sindhu/job/job-portal"><img src="admin/uploads/banner/banner-1552284419.jpg" alt="ads"></a>
                  </div>

              </div>

              <div class="col-md-7">
                  <div class=" tab-content " >
                      <div class="col-md-8" >
                          <form class="form-inline" method='GET'>
                              <div class="form-group ">
                                  <label >Sort by </label>
                                  <select class="form-control input-sm " name="view_ord" id="view_ord" onchange='sortit(this.value);'>
                                      <option  value="ASC" >Ascending </option>
                                      <option  value="DESC">Descending</option>
                                  </select>

                              </div>
                              <div class="form-group select-arrow">
                                  <label >Show</label>
                                  <select class="form-control input-sm" name="view_num" id="view_num" onchange='sortcount(this.value);'>
                                      <option  value="5">5</option>
                                      <option selected="selected" value="10">10</option>
                                      <option  value="15">15</option></select>
                              </div>
                          </form>
                      </div>  <!--list-bga-->
                  </div>


                  @foreach($jobs as $job)
                  <div class=" m10 li-he">
                      <div class="media jobmbg">
                          <div class="media-body">
                              <div class="col-md-10">
                                  <h4 class="media-heading"><a href="{{ route('jobs.job.view',$job->slug) }}">{{ $job->title }}</a></h4>
                                  <small><em>{{ optional($job->company)->name }} </em></small>
                                  <!-- <div class="save-job">
                                                                                  <a href="javascript:;" onclick="alert('Please Login to Save')"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                              </div> -->
                                  <!--<div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                              </div>
                              <div class="entry-meta mtop40">
                                  <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
                       <span class="entry-date">
                       {{ $job->city }}												 </span></span>
                                      <span class="byline"> <i class="fa fa-suitcase"></i> <span class="author vcard">{{ $job->experience_from }} - {{ $job->experience_to }} YRS </span></span>

                                      <span class="comments-link">{{ $job->salary }}</span></div>
                                  <div class="col-md-2 text-right">
                                      <a class="btn-blue btn" style="color:#FFFFFF" href="{{ route('jobs.job.view',$job->slug) }}">Details</a>
                                  </div>
                              </div>
                              <div class="bs-example " data-example-id="horizontal-dl">
                                  <dl class="dl-horizontal">

                                      <dt>Industry:</dt><dd> {{ optional($job->industry)->category }}</dd>
                                      <dt>Key Skills: </dt>
                                      <dd>{{ $job->skills }}</dd>
                                      <dt>Job Description:  </dt>
                                      <dd>{{ $job->short_description }}</dd>
                                  </dl>
                              </div>
                          </div>
                      </div>
                  </div><!--job-list-bg-->
                  @endforeach

                  <div class=" tab-content">
                      <div class='newpagination'> <span class'current'>1</span>  <a class="link" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.html?sch=4&page=2&">2</a>  <a class="link" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.html?sch=4&page=3&">3</a>  <a class="navlink" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.html?sch=4&page=2&">[Next]</a>  <a class="navlink" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.html?sch=4&page=3&">[Last]</a> </div>                     </div>


              </div><!--col-md-7-->
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

                  <!--<div class="career-services">
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
