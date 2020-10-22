@extends('layouts.master')

@section('content')
    <!-- CONTENT -->
    <div id="content">
        <div class="container">



            <ol  class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li ><a href="#">Jobs</a></li>
                <!-- <li><a href="#">Interior Design Jobs</a></li>-->
                <li class="active"><a href="#">{{ $job->title }}</a></li>
            </ol>
            <div id="nap_msg"></div>

            <div class="row">
                <div class="col-sm-9" >
                    <div class="top-emp-center p5">
                        <h4> {{ $job->title }} </h4>
                    </div>
                    <div class=" job-detail-bg">
                        <div class="job-detail">
                            <div class="media">
                                <div class="media-body">
                                    <div class="col-md-10">
                                        <h4 class="media-heading"><em>{{ $job->title }}</em></h4>
                                    </div>
                                    <div class="col-md-2">


                                        <div class="save-job">
                                            <a href="javascript:;" onclick="window.location.href='jobsseeker-login.html'"><i class="fa fa-floppy-o"></i> Save Job</a>
                                        </div>


                                    </div>
                                    <div class="entry-meta mtop40">
                                        <div class="col-md-12"> <span class="posted-on"><i class="fa fa-map-marker"></i> <span class="entry-date">
													{{ $job->city }}
											</span></span> <span class="byline"> <i class="fa fa-suitcase"></i> <span class="author vcard">{{ $job->experience_from }} - {{ $job->experience_to }} YRS</span></span>	<span class="comments-link">{{ $job->salary }}</span></div>
                                    </div>
                                    <div class="bot-align">
                                        @guest()
                                        <ul>

                                            <li><a href="jobsseeker-login.html?jid=31527847435&setcok" target="_blank" onClick="javascript:window.close();">
                                                    <input type="button" name="loginto" value="Login to Apply"  class="btn-blue btn"/></a></li>
                                            <li><a href="jobseeker-registration.html?setco" class="btn-gre btn"> Register and Apply </a></li>
                                            <!--<li><input class="btn-gray btn" value="Apply without Registration" type="button"> </li>-->
                                        </ul>
                                        @else
                                            <ul>
                                                <li>
                                                    <input type="button" name="31527838551" class="btn-blue btn" value="Apply" id="31527838551" onclick="new_apply(this.id);">
                                                </li>
                                            </ul>
                                        @endguest
                                    </div>
                                </div>
                            </div><!--media-->
                        </div>

                        <div class="col-sm-7 m5" >
                            <div class="all-catehead blue">Job Description</div>
                        </div>

                        <div class="col-sm-12 m5" >
                            <div class="jd"><em>
                                {!! $job->description !!}
                                </em>
                            </div>
                            <hr />
                            <div class="m5">
                                <div><span class="label lco"> Salary:</span> <span class="label lco-n"> {{ $job->salary }} As per rules of Industry</span></div>
                                <div><span class="label lco">Industry:</span> <span class="label lco-n"> {{ optional($job->industry)->name }}</span></div>
                                <div><span class="label lco">Functional Area:</span> <span class="label lco-n">{{ optional($job->functional_area)->category_functional_area }}</span></div>
                                <div><span class="label lco">Job Posted On:</span> <span class="label lco-n">{{ $job->created_at->format('Y-m-d') }}</span></div>
                                <!--<div><span class="label lco">Role Category:</span> <span class="label lco-n">Interior Design</span></div>
                                <div><span class="label lco">Role:</span> <span class="label lco-n">Interior Designer</span></div>-->
                            </div>
                        </div>
                        <div class="col-sm-12 m5">
                            <div class="all-catehead blue">Key Skills</div>
                            <div class="key">
                                <ul>
                                    <li><input class="btn-grey btn" value="SOFTWARE" type="button"></li>
                                    <li><input class="btn-grey btn" value="CSS" type="button"></li>
                                    <li><input class="btn-grey btn" value="JAVA" type="button"></li>
                                    <li><input class="btn-grey btn" value="HTML" type="button"></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-sm-12 m5">
                            <div class="all-catehead blue"> Desired Candidate Profile</div>
                            <div class="enq">Education :</div>
                            <div class="m5">
                                @if(count($job->qualification))
                                    @foreach ($job->qualification as $item)
                                    {{ $item }},
                                @endforeach
                                @else
                                'Not Mentioned'
                                @endif
                            </div>
                            <div class="all-catehead blue">Company Profile</div>
                            <div class="enq">{{ optional($job->company)->name }}</div>
                            <div class="m5">
                                <div><span class="label lco-n">Description about company</span></div>
                               {{ optional($job->company)->description }}
                            </div>
                        </div>

                        <div class="m5 col-sm-12 ">
                            <div class="con-view lco-n"> <a data-toggle="collapse" href="#contactview" >View Contact Details </a> </div>
                            <div class="collapse" id="contactview" >
                                <div class="con-view-bg">
                                    <div><span class="label lco-n"> Recruiter Name: {{ $job->user->name }}</span></div>
                                    <div><span class="label lco-n"> Address: {{ $job->user->address }} </span></div>
                                    <div><span class="label lco-n add"> Website: <a href="{{ optional($job->company)->website }}" target="_blank"> {{ optional($job->company)->website }}</a></span></div>
                                    <div><span class="label lco-n">Telephone: {{ optional($job->user)->mobile_number }}</span></div>
                                    <div><span class="label lco-n">Email Address: {{ optional($job->user)->email }}</span></div>
                                </div>
                            </div>

                            <div class="bot-align2 col-lg-12">
                                <ul>
                                </ul>
                            </div>

                        </div>

                    </div>  <!--job-detail-bg-->

                    <div class="bot-bg">
                        <div class="botlink">

                            <!--  <a href="jobsearch_all.html?jid=$jid"> View Similar jobs </a> -->
                            <a href="#" data-toggle="modal" data-target="#mailjob"> Email this job </a>

                        </div>
                    </div>

                </div><!--col-sm-9-->

                <div class="col-sm-3" >

                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Job Posted By</h3>
                        </div>
                        <div class="post-job-content">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="img-rounded" src="{{ optional($job->user)->avatar }}" alt="{{ optional($job->user)->username }}">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="post-na">
                                        <a href="#">{{ optional($job->user)->username }}</a><br>
                                        <a href="#"></a><br>
                                        <a href="#">{{ optional($job->company)->name }}</a><br>
                                        @if (strlen(optional($job->user)->state) > 1)
                                            <a href="#"><i class="fa fa-map-marker"></i> {{ optional($job->user)->state }}</a>
                                        @endif
                                    </div>
                                </div>
                                <!-- <div class="col-sm-7 post-na text-right m10" ><a href="#">31607 followers</a></div>
                                 <div class="col-sm-5" > <div class="ali-right"> <input class="btn-blue btn" value="Follow" type="button"></div></div>-->
                            </div>
                        </div>

                    </div><!--create-job-->

                    <div class="create-job">
                        <div class="create-job-head">
                            <h3>Similar Jobs for You </h3>
                        </div>
                        <div class="create-job-content">



                            <div class="ali-right"> <a class="btn-blue btn" href="{{ route('searchall') }}">View All</a></div>
                        </div>
                    </div>
                    <div class="openings">
                        <a href="#">
                            <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/images/logo-1565092795.png" alt="ads" />
                            <!--<img src="images/internship.jpg" alt="ads">-->
                        </a>
                    </div>
                    <div class="openings">
                        <a href="#">
                            <a  href='' target="_blank"><img src='http://phpscriptsmall.biz/demo/jobsite/images/tmp/banner_ad_336x280_blue1.jpg' />Best Jobs Website in Pakistan and India3</a>
                            <!--<img src="images/internship.jpg" alt="ads">-->
                        </a>
                    </div>
                    <div class="openings">
                        <a href="#">
                            <a  href='' target="_blank"><img src='http://phpscriptsmall.biz/demo/jobsite/images/tmp/banner_ad_336x280_white.jpg' />Best Jobs Website in Pakistan and India8</a>
                            <!--<img src="images/internship.jpg" alt="ads">-->
                        </a>
                    </div>
                </div><!--col-sm-3-->

            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
@stop
