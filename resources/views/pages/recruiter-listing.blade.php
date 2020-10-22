@extends('layouts.master')


@section('content')

    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home </a></li>
                <li class="active"> Recruiters </li>
            </ol>
            <div class="row">

                <div class="col-md-9" >
                    <div class="top-emp-center">
                        <h4> Recruiters in Top Companies</h4>
                    </div> <!--top-emp-center-->
                    <div class="tab-content m20 p20">
                        <div class="row">
                            <div class="col-sm-12 pcrous">

                                <div class="owl-carousel logos">

                                    @foreach ($companies as $item)
                                        <div>
                                            <a href="{{ route('company.jobs',$item->slug) }}">
                                            <img style="height: 40px" src="{{ asset($item->logo) }}" alt="{{ $item->name }}">
                                            </a>
                                        </div>
                                    @endforeach


                                </div><!-- owl-carousel -->

                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!--tab-content-->

                    <div class="top-emp-center">
                        <h4> Top Recruiters</h4>
                    </div> <!--top-emp-center-->
                    <div class="browse-cat2 ">
                        <ul class="nav nav-tabs">
                            <!-- <li class="active"><a href="#tab-1-7" data-toggle="tab" aria-expanded="true">All Sectors </a></li> -->
                            <li class=""><a href="#tab-1-8" data-toggle="tab" aria-expanded="false">IT </a></li>
                            <li class=""><a href="#tab-1-9" data-toggle="tab" aria-expanded="true"> Banking  </a></li>
                            <li class=""><a href="#tab-1-10" data-toggle="tab" aria-expanded="true"> BPO / KPO </a></li>
                            <li class=""><a href="#tab-1-11" data-toggle="tab" aria-expanded="true"> Infrastructure </a></li>
                            <li class=""><a href="#tab-1-12" data-toggle="tab" aria-expanded="true"> Manufacturing </a></li>
                        </ul>
                        <div class="tab-content  bgno1">
                            <div class="tab-pane fade active in" id="tab-1-7">

                                @foreach($users as $user)
                                <div class="media mbg">
                                    <div class="row">
                                        <div class=" col-md-2">
                                            <a href="recruiter-profile.php?$rec_id" target="_blank" >
                                                <img src="{{ asset($user->avatar) }}" alt="{{ $user->username }}">
                                            </a>
                                        </div>

                                        <div class="col-md-10">
                                            <div class="media-body">
                                                <div class="recru-name">

                                                    <a href="recruiter-profile.php?rec_id=46"> {{ $user->name }}</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="fa fa-suitcase"></i> {{ optional($user->company)->name }} </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> {{ optional($user->company)->city }} </span>
                                                    <dl class="dl-horizontal">
                                                        <dt>Skills/Roles I hire for :  </dt>
                                                        <dd>  Architects and Interior Designers required with a minimum experience of 2-5 years. Should be well...</dd>
                                                    </dl>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mtop10">
                                        <div class="col-md-7">
                                            <div class=" max-m ">
                                                <div class="post-na2  text-center">
                                                    <div id="folw1" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('test','anu93info@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=46">{{ optional($user->company)->activeJobs() }} active jobs</a> <span class="bocol" >|</span> Last active on 2019-08-12 12:59:54</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
                                @endforeach


                            </div><!-- tab-pane -->
                            <div class="tab-pane fade " id="tab-1-8">
                                IT
                            </div><!-- tab-pane -->
                            <div class="tab-pane fade " id="tab-1-9">
                                Banking
                                <div class="media mbg">No record found</div>                            </div><!-- tab-pane -->
                            <div class="tab-pane fade " id="tab-1-10">
                                BPO / KPO
                                <div class="media mbg">
                                    <div class="row">
                                        <div class=" col-md-2">
                                            <!--<a href="#" >
                                            <img class="mleft5" src="images/r55.jpg" alt="re">
                                            </a>-->
                                            <a href="recruiter-profile.php?$rec_id" target="_blank" >
                                                <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/images/recruiter.jpg" alt="re">
                                            </a>
                                        </div>

                                        <div class="col-md-10">
                                            <div class="media-body">
                                                <div class="recru-name">
                                                    <a href="#"> test</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> Test </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Chennai, </span>
                                                    <dl class="dl-horizontal">
                                                        <dt>Skills/Roles I hire for :  </dt>
                                                        <dd>  Architects and Interior Designers required with a minimum experience of 2-5 years. Should be well...</dd>
                                                    </dl>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mtop10">
                                        <div class="col-md-7">
                                            <div class=" max-m ">
                                                <!--<div class="post-na2  text-center">
                                                <input class="btn-blue btn bc" value="Follow" type="button"><br>
                                                </div>-->
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=82">6 active jobs</a> <span class="bocol" >|</span>  <a href="#">Last active on 2019-08-12 12:59:54</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
                            </div><!-- tab-pane -->
                            <div class="tab-pane fade " id="tab-1-11">
                                Infrastructure
                                <div class="media mbg">No record found</div>                            </div><!-- tab-pane -->
                            <div class="tab-pane fade " id="tab-1-12">
                                Manufacturing
                                <div class="media mbg">
                                    <div class="row">
                                        <div class=" col-md-2">
                                            <!--<a href="#" >
                                            <img class="mleft5" src="images/r55.jpg" alt="re">
                                            </a>-->
                                            <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/Recruiter-56.html" target="_blank" >
                                                <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/images/recruiter.jpg" alt="re">
                                            </a>
                                        </div>

                                        <div class="col-md-10">
                                            <div class="media-body">
                                                <div class="recru-name">
                                                    <a href="#"> hnhn</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> fbfb </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Mount Brevitor, </span>
                                                    <dl class="dl-horizontal">
                                                        <dt>Skills/Roles I hire for :  </dt>
                                                        <dd>  Architects and Interior Designers required with a minimum experience of 2-5 years. Should be well...</dd>
                                                    </dl>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mtop10">
                                        <div class="col-md-7">
                                            <div class=" max-m ">
                                                <!--<div class="post-na2  text-center">
                                                <input class="btn-blue btn bc" value="Follow" type="button"><br>
                                                </div>-->
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=82">6 active jobs</a> <span class="bocol" >|</span>  <a href="#">Last active on 2018-06-01 12:45:13</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
                            </div><!-- tab-pane -->

                        </div><!--tab-content-->
                    </div><!--browse-cat2-->







                </div><!--col-sm-9-->


                <div class="col-md-3" >


                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Recent Recruiters</h3>
                        </div>
                        <div class="create-job-content">
                            @foreach($top_recruiters as $user)
                            <div class="media bor-bott">
                                <div class="media-left">
                                    <a href="recruiter-profile.php?$rec_id" target="_blank" >
                                        <img src="{{ asset($user->avatar) }}" alt="{{ $user->username }}">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="recru-name">
                                        <a href="recruiter-profile.php?rec_id=46"> {{ $user->name }}</a><br>
                                        <span class="re-pos">  </span><br>
                                        <span class="pright15">  <i class="fa fa-suitcase"></i> {{ optional($user->company)->name }} </span>
                                        <span class="re-pos"><i class="fa fa-map-marker"></i> {{ optional($user->company)->city }} </span>
                                    </div>
                                </div>
                                <div class=" max-w ">
                                    <div class="post-na2  text-center">
                                        <div id="folw1" >
                                            <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button" ><br></a>-->
                                        </div>
                                        <!-- <a href="#">1 followers</a>-->
                                    </div>
                                    <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('test','anu93info@gmail.com');">Send Message</a></div></div>
                                </div>
                            </div><!--media-->
                            @endforeach
                        </div><!--create-job-content-->
                    </div><!--create-job-->

                </div><!--col-sm-3-->

            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->

@endsection
