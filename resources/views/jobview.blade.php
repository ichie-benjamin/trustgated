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



                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                        @if (session('failure'))
                            <div class="alert alert-danger" role="alert">
                                <strong>Error!</strong> {{ session('failure') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
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




                                    </div>
                                    <div class="entry-meta mtop40">
                                        <div class="col-md-12"> <span class="posted-on"><i class="fa fa-map-marker"></i> <span class="entry-date">
													{{ $job->city }}
											</span></span> <span class="byline"> <i class="fa fa-suitcase"></i> <span class="author vcard">{{ $job->experience_from }} - {{ $job->experience_to }} YRS</span></span>	<span class="comments-link">{{ $job->salary }}</span></div>
                                    </div>
                                    <div class="bot-align">
                                        @guest()
                                        <ul>

                                            <li><a href="{{ route('jobseeker.login') }}" >
                                                    <input type="button" name="loginto" value="Login to Apply"  class="btn-blue btn"/></a></li>
                                            <li><a href="{{ route('jobseeker.register') }}" class="btn-gre btn"> Register and Apply </a></li>
                                            <!--<li><input class="btn-gray btn" value="Apply without Registration" type="button"> </li>-->
                                        </ul>
                                        @else
                                            <ul>
                                                @if (auth()->user()->applied($job->id))
                                                    <li>

                                                        <button type="button" class="btn-blue btn" >Applied</button>

                                                    </li>
                                                @else
                                                    <li>
                                                        <form action="{{ route('job.apply') }}" method="POST">
                                                            @csrf
                                                            <input value="{{ $job->id }}" name="job_id" type="hidden">
                                                            <input type="submit" class="btn-blue btn" value="Apply">
                                                        </form>
                                                    </li>
                                                @endif
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
                                <div><span class="label lco"> Salary:</span> <span class="label lco-n"> {{ $job->salary }}</span></div>
                                <div><span class="label lco">Industry:</span> <span class="label lco-n"> {{ optional($job->industry)->category }}</span></div>
                                <div><span class="label lco">Functional Area:</span> <span class="label lco-n">{{ optional($job->functional)->category_functional_area }}</span></div>
                                <div><span class="label lco">Job Posted On:</span> <span class="label lco-n">{{ $job->created_at->format('Y-m-d') }}</span></div>
                                <!--<div><span class="label lco">Role Category:</span> <span class="label lco-n">Interior Design</span></div>
                                <div><span class="label lco">Role:</span> <span class="label lco-n">Interior Designer</span></div>-->
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

                    @foreach($ad_job_right->slice(0, 2) as $item)
                    <div class="openings">
                        <a href="#">
                            <a  href='' target="#"><img src='{{ $item->image }}' /></a>
                            <!--<img src="images/internship.jpg" alt="ads">-->
                        </a>
                    </div>
                    @endforeach

                </div><!--col-sm-3-->

            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->


    <!--CREATE JOB ALERT POPUP-->

    <div class="modal fade bs-example-modal-lg" id="mailjob" tabindex="-1" role="dialog" aria-labelledby="search">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header avd-serbg">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="opacity: 1;"><span aria-hidden="true"> <img src="/images/close-icon.png"></span></button>
                    <h4 class="modal-title mode-tit" id="myModalLabel">Forward Job to Friend</h4>
                </div>
                <div class="modal-body avdbg1a">
                    <form class="form-horizontal m10" method="post" action="{{ route('mail.job') }}">
                        @csrf

                        <div class="form-group m20">
                            <label class="col-sm-4 pedit2 text-right mtop4"><span class="red-star">*</span>Your Email: </label>
                            <div class="col-sm-5">
                                <input type="text" required class="form-control" placeholder="Enter your email address" name="mail" id="mail"><div id="id1"></div>
                            </div>
                        </div>
                        <div class="form-group m20">
                            <label class="col-sm-4 pedit2 text-right mtop4"><span class="red-star">*</span>Friend's Email: </label>
                            <div class="col-sm-5">
                                <input required type="text" class="form-control" placeholder="Enter your friend's email address" name="fmail" id="fmail"><div id="id2"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  >Subject:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" disabled value="{{ $job->title }}" readonly>
                                <input type="hidden" name="subject" id="subject" value="{{ $job->title }}" />
                                <input type="hidden" name="link" value="{{ route('jobs.job.view',$job->slug) }}" />
                                <div id="id3"></div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  >Message:</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" required name="message" id="message">  </textarea>


                            </div>
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="red-star">*</span>Enter the captcha:</label>--}}
{{--                            <div class="col-sm-5">--}}
{{--                                <input type="text" id="mainCaptcha"/>--}}
{{--                                <script>Captcha();</script>--}}
{{--                                <!--<input type="button" id="refresh" value="Refresh" onclick="Captcha();" />-->--}}
{{--                                <input type="text" id="txtInput" placeholder="Enter correct captcha"/>--}}
{{--                                <!-- <input id="Button1" type="button" value="Check" onclick="alert(ValidCaptcha());"/>-->--}}

{{--                                <div id='id5'></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


                        <div class="form-group">
                            <div class="col-sm-12 text-center">

                                <input class="btn-blue btn bc3" value="Send " type="submit"/> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--CREATE JOB ALERT END-->

@stop
