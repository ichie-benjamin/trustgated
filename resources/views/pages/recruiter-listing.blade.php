@extends('layouts.master')


@section('content')

    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/">Home </a></li>
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

                                    <div>
                                        <img  src="images/intel-1.png" alt="intel">
                                    </div>
                                    <div>
                                        <img  src="images/renesas-2.png" alt="">
                                    </div>
                                    <div>
                                        <img  src="images/toshiba-3.png" alt="">
                                    </div>
                                    <div>
                                        <img  src="images/panasonic-4.png" alt="">
                                    </div>
                                    <div>
                                        <img  src="images/nintendo-5.png" alt="">
                                    </div>
                                    <div>
                                        <img  src="images/sony-6.png" alt="">
                                    </div>
                                    <div>
                                        <img  src="images/capcom-7.png" alt="">
                                    </div>

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

                                                    <a href="recruiter-profile.php?rec_id=46"> test</a><br>
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
                                                <div class="post-na2  text-center">
                                                    <div id="folw1" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('test','anu93info@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=46">6 active jobs</a> <span class="bocol" >|</span> Last active on 2019-08-12 12:59:54</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=77"> David</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> php script mall </span>
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
                                                <div class="post-na2  text-center">
                                                    <div id="folw2" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('David','naveen1inet@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=77">0 active jobs</a> <span class="bocol" >|</span> Last active on 2019-07-29 04:15:46</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=4"> aysha</a><br>
                                                    <span class="re-pos"> fztztf </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> 1 </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> , </span>
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
                                                    <div id="folw3" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('aysha','mymistmail@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=4">0 active jobs</a> <span class="bocol" >|</span> Last active on 2019-07-24 12:41:22</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
                                <div class="media mbg">
                                    <div class="row">
                                        <div class=" col-md-2">
                                            <!--<a href="#" >
                                            <img class="mleft5" src="images/r55.jpg" alt="re">
                                            </a>-->
                                            <a href="recruiter-profile.php?$rec_id" target="_blank" >
                                                <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/images/job-posted.jpg" alt="re">
                                            </a>
                                        </div>

                                        <div class="col-md-10">
                                            <div class="media-body">
                                                <div class="recru-name">

                                                    <a href="recruiter-profile.php?rec_id=1"> Rajesh</a><br>
                                                    <span class="re-pos"> Human Resource </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> testing demo </span>
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
                                                <div class="post-na2  text-center">
                                                    <div id="folw4" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('Rajesh','geetha@duruva.net');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=1">0 active jobs</a> <span class="bocol" >|</span> Last active on 2019-03-06 11:06:32</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=6"> Test</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> 1 </span>
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
                                                <div class="post-na2  text-center">
                                                    <div id="folw5" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('Test','prabakaran@phpscriptsmall.net');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=6">0 active jobs</a> <span class="bocol" >|</span> Last active on 2018-07-20 12:05:26</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=73"> fkhky</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> test </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Karur, </span>
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
                                                    <div id="folw6" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('fkhky','geetha@duruva.net');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=73">0 active jobs</a> <span class="bocol" >|</span> Last active on 2018-06-30 02:59:57</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=66"> Raj</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> Inet-Solution </span>
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
                                                <div class="post-na2  text-center">
                                                    <div id="folw7" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('Raj','ineteswar@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=66">2 active jobs</a> <span class="bocol" >|</span> Last active on 2018-06-30 02:58:17</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=56"> hnhn</a><br>
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
                                                <div class="post-na2  text-center">
                                                    <div id="folw8" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('hnhn','gh@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=56">6 active jobs</a> <span class="bocol" >|</span> Last active on 2018-06-01 12:45:13</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=57"> Anupriya</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> New company </span>
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
                                                <div class="post-na2  text-center">
                                                    <div id="folw9" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('Anupriya','anupriya.inet@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=57">0 active jobs</a> <span class="bocol" >|</span> Last active on 2017-05-10 07:38:41</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=17"> vadivu</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> 1 </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Alanthurai, </span>
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
                                                    <div id="folw10" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('vadivu','vadivuinet@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=17">0 active jobs</a> <span class="bocol" >|</span> Last active on 2016-12-18 13:02:40</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=44"> asha</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> MKM </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Renfrew, </span>
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
                                                    <div id="folw11" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('asha','asha.inet77@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=44">0 active jobs</a> <span class="bocol" >|</span> Last active on 2016-10-21 11:33:51</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=49"> sulthana</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> karum </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Burrel, </span>
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
                                                    <div id="folw12" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('sulthana','karun@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=49">0 active jobs</a> <span class="bocol" >|</span> Last active on 2016-10-20 19:37:52</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=19"> anbu</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> 1 </span>
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
                                                <div class="post-na2  text-center">
                                                    <div id="folw13" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('anbu','thiru@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=19">0 active jobs</a> <span class="bocol" >|</span> Last active on 2016-10-15 11:57:46</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=38"> sulthana</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> jyy </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Chenani, </span>
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
                                                    <div id="folw14" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('sulthana','ram@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=38">0 active jobs</a> <span class="bocol" >|</span> Last active on 2016-08-25 15:49:42</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=23"> vadivu</a><br>
                                                    <span class="re-pos"> Human Resource </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> 1 </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Adoni, </span>
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
                                                    <div id="folw15" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('vadivu','thiru@ymail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=23">0 active jobs</a> <span class="bocol" >|</span> Last active on 2016-08-25 15:47:38</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=22"> vadivu</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> 1 </span>
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
                                                <div class="post-na2  text-center">
                                                    <div id="folw16" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('vadivu','thirukura@ymail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=22">0 active jobs</a> <span class="bocol" >|</span> Last active on 2016-08-25 12:45:25</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=32"> rajasekar</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> php script mall pvt ltd </span>
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
                                                <div class="post-na2  text-center">
                                                    <div id="folw17" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('rajasekar','rajasekar.inet@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=32">0 active jobs</a> <span class="bocol" >|</span> Last active on 2016-08-24 12:33:34</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=20"> vadivu</a><br>
                                                    <span class="re-pos"> HR </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> 1 </span>
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
                                                <div class="post-na2  text-center">
                                                    <div id="folw18" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('vadivu','vadivu333@ymail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=20">0 active jobs</a> <span class="bocol" >|</span> Last active on 2016-08-24 12:11:11</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=21"> anbu</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> 1 </span>
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
                                                <div class="post-na2  text-center">
                                                    <div id="folw19" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('anbu','thiru123@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=21">0 active jobs</a> <span class="bocol" >|</span> Last active on 2015-12-30 11:57:54</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=8"> rajesh</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> 1 </span>
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
                                                <div class="post-na2  text-center">
                                                    <div id="folw20" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('rajesh','krajesh@phpscriptsmall.net');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=8">0 active jobs</a> <span class="bocol" >|</span> Last active on 2015-08-21 21:20:45</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=91"> Liza</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> inet </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Ary, </span>
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
                                                    <div id="folw21" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('Liza','Liza@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=91">0 active jobs</a> <span class="bocol" >|</span> Last active on 20-10-04 09:37:22</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=89"> test</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> inet-solution </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Chengalpattu, </span>
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
                                                    <div id="folw22" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('test','sindhupriya.inet@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=89">0 active jobs</a> <span class="bocol" >|</span> Last active on 20-08-20 02:59:14</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=3"> DzWzfJBspbhMk</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> 1 </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> , </span>
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
                                                    <div id="folw23" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('DzWzfJBspbhMk','rnrsft@irtknr.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=3">0 active jobs</a> <span class="bocol" >|</span> Last active on 0000-00-00 00:00:00</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=5"> sri</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> 1 </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Alangulam, </span>
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
                                                    <div id="folw24" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('sri','best4ideas@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=5">0 active jobs</a> <span class="bocol" >|</span> Last active on 0000-00-00 00:00:00</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=18"> vadivu</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> 1 </span>
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
                                                <div class="post-na2  text-center">
                                                    <div id="folw25" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('vadivu','vadivuinet1@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=18">0 active jobs</a> <span class="bocol" >|</span> Last active on 0000-00-00 00:00:00</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=28"> Jayan</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> 1 </span>
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
                                                <div class="post-na2  text-center">
                                                    <div id="folw26" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('Jayan','employeephpscript@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=28">0 active jobs</a> <span class="bocol" >|</span> Last active on 0000-00-00 00:00:00</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=40"> tat</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> cts </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Bagepalli, </span>
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
                                                    <div id="folw27" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('tat','tash@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=40">0 active jobs</a> <span class="bocol" >|</span> Last active on 0000-00-00 00:00:00</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=41"> rgg</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> keins </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Pernem City, </span>
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
                                                    <div id="folw28" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('rgg','regi@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=41">0 active jobs</a> <span class="bocol" >|</span> Last active on 0000-00-00 00:00:00</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=43"> rgg</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> keins </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Pernem City, </span>
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
                                                    <div id="folw29" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('rgg','regi@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=43">0 active jobs</a> <span class="bocol" >|</span> Last active on 0000-00-00 00:00:00</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=45"> ddd</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> gsdfwgh </span>
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
                                                <div class="post-na2  text-center">
                                                    <div id="folw30" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('ddd','padmakrish77@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=45">0 active jobs</a> <span class="bocol" >|</span> Last active on 0000-00-00 00:00:00</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=48"> vino</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> phpsm </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Kwanza, </span>
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
                                                    <div id="folw31" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('vino','regi77@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=48">0 active jobs</a> <span class="bocol" >|</span> Last active on 0000-00-00 00:00:00</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=50"> sulthana</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> Dopl </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Tuggeranong, </span>
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
                                                    <div id="folw32" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('sulthana','sakthi@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=50">0 active jobs</a> <span class="bocol" >|</span> Last active on 0000-00-00 00:00:00</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=51"> Anupriya</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> New company </span>
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
                                                <div class="post-na2  text-center">
                                                    <div id="folw33" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('Anupriya','anupriya.inet@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=51">0 active jobs</a> <span class="bocol" >|</span> Last active on 0000-00-00 00:00:00</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=54"> uyjhjh</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> vvcv </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Caledonia, </span>
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
                                                    <div id="folw34" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('uyjhjh','anupriya.inet@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=54">0 active jobs</a> <span class="bocol" >|</span> Last active on 0000-00-00 00:00:00</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=72"> </a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i>  </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> , </span>
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
                                                    <div id="folw35" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('','');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=72">0 active jobs</a> <span class="bocol" >|</span> Last active on 0000-00-00 00:00:00</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=74"> keerthi</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> abc </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Karur, </span>
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
                                                    <div id="folw36" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('keerthi','keerthikakannan.k@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=74">0 active jobs</a> <span class="bocol" >|</span> Last active on 0000-00-00 00:00:00</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=76"> llllgf</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> kak </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Denkanikottai, </span>
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
                                                    <div id="folw37" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('llllgf','keerthikakannan.k@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=76">0 active jobs</a> <span class="bocol" >|</span> Last active on 0000-00-00 00:00:00</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->
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

                                                    <a href="recruiter-profile.php?rec_id=82"> amit</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="icon-office"></i> sos </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> Maralik, </span>
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
                                                    <div id="folw38" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('amit','dhananjayable@gmail.com');">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" > <a href="jobsearch_all.php?rid1=82">0 active jobs</a> <span class="bocol" >|</span> Last active on 0000-00-00 00:00:00</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->





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
                            <div class="media bor-bott">
                                <div class="media-left">
                                    <a href="recruiter-profile.php?$rec_id" target="_blank" >
                                        <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/images/recruiter.jpg" alt="re">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="recru-name">
                                        <a href="recruiter-profile.php?rec_id=46"> test</a><br>
                                        <span class="re-pos">  </span><br>
                                        <span class="pright15">  <i class="icon-office"></i> Test </span>
                                        <span class="re-pos"><i class="fa fa-map-marker"></i> Chennai, </span>
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

                            <div class="media bor-bott">
                                <div class="media-left">
                                    <a href="recruiter-profile.php?$rec_id" target="_blank" >
                                        <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/images/recruiter.jpg" alt="re">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="recru-name">
                                        <a href="recruiter-profile.php?rec_id=77"> David</a><br>
                                        <span class="re-pos">  </span><br>
                                        <span class="pright15">  <i class="icon-office"></i> php script mall </span>
                                        <span class="re-pos"><i class="fa fa-map-marker"></i> Chennai, </span>
                                    </div>
                                </div>
                                <div class=" max-w ">
                                    <div class="post-na2  text-center">
                                        <div id="folw2" >
                                            <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button" ><br></a>-->
                                        </div>
                                        <!-- <a href="#">1 followers</a>-->
                                    </div>
                                    <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('David','naveen1inet@gmail.com');">Send Message</a></div></div>
                                </div>
                            </div><!--media-->

                            <div class="media bor-bott">
                                <div class="media-left">
                                    <a href="recruiter-profile.php?$rec_id" target="_blank" >
                                        <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/images/recruiter.jpg" alt="re">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="recru-name">
                                        <a href="recruiter-profile.php?rec_id=4"> aysha</a><br>
                                        <span class="re-pos"> fztztf </span><br>
                                        <span class="pright15">  <i class="icon-office"></i> 1 </span>
                                        <span class="re-pos"><i class="fa fa-map-marker"></i> , </span>
                                    </div>
                                </div>
                                <div class=" max-w ">
                                    <div class="post-na2  text-center">
                                        <div id="folw3" >
                                            <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button" ><br></a>-->
                                        </div>
                                        <!-- <a href="#">1 followers</a>-->
                                    </div>
                                    <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('aysha','mymistmail@gmail.com');">Send Message</a></div></div>
                                </div>
                            </div><!--media-->

                            <div class="media bor-bott">
                                <div class="media-left">
                                    <a href="recruiter-profile.php?$rec_id" target="_blank" >
                                        <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/images/job-posted.jpg" alt="re">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="recru-name">
                                        <a href="recruiter-profile.php?rec_id=1"> Rajesh</a><br>
                                        <span class="re-pos"> Human Resource </span><br>
                                        <span class="pright15">  <i class="icon-office"></i> testing demo </span>
                                        <span class="re-pos"><i class="fa fa-map-marker"></i> Chennai, </span>
                                    </div>
                                </div>
                                <div class=" max-w ">
                                    <div class="post-na2  text-center">
                                        <div id="folw4" >
                                            <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button" ><br></a>-->
                                        </div>
                                        <!-- <a href="#">1 followers</a>-->
                                    </div>
                                    <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('Rajesh','geetha@duruva.net');">Send Message</a></div></div>
                                </div>
                            </div><!--media-->

                            <div class="media bor-bott">
                                <div class="media-left">
                                    <a href="recruiter-profile.php?$rec_id" target="_blank" >
                                        <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/images/recruiter.jpg" alt="re">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="recru-name">
                                        <a href="recruiter-profile.php?rec_id=6"> Test</a><br>
                                        <span class="re-pos">  </span><br>
                                        <span class="pright15">  <i class="icon-office"></i> 1 </span>
                                        <span class="re-pos"><i class="fa fa-map-marker"></i> Chennai, </span>
                                    </div>
                                </div>
                                <div class=" max-w ">
                                    <div class="post-na2  text-center">
                                        <div id="folw5" >
                                            <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button" ><br></a>-->
                                        </div>
                                        <!-- <a href="#">1 followers</a>-->
                                    </div>
                                    <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('Test','prabakaran@phpscriptsmall.net');">Send Message</a></div></div>
                                </div>
                            </div><!--media-->

                            <!-- <div class="media bor-bott">
    <div class="media-left">
      <a href="#">
         <img src="images/r7.jpg" alt="re">
      </a>
    </div>
    <div class="media-body">
       <div class="recru-name">
           <a href="#">Okada</a><br>
            <span class="re-pos">Assistant Manager</span><br>
              <i class="icon-office"></i> <a href="#">Muthoot Group</a><br>
           <span class="re-pos"><i class="fa fa-map-marker"></i>Chiba</span>
        </div>
    </div>
            <div class=" max-w ">
               <div class="post-na2  text-center">
                 <input class="btn-blue btn bc" value="Follow" type="button"><br>
                 <a href="#">31607 followers</a>
           </div>
           <div class="post-na3"><div><a href="#">Send Message</a></div></div>
        </div>
 </div>--><!--media-->

                            <!-- <div class="media bor-bott">
                                <div class="media-left">
                                  <a href="#">
                                     <img src="images/r3.jpg" alt="re">
                                  </a>
                                </div>
                                <div class="media-body">
                                   <div class="recru-name">
                                       <a href="#">Nakajima</a><br>
                                        <span class="re-pos">Assistant Manager</span><br>
                                          <i class="icon-office"></i> <a href="#">Muthoot Group</a><br>
                                       <span class="re-pos"><i class="fa fa-map-marker"></i>Chiba</span>
                                    </div>
                                </div>
                                        <div class=" max-w ">
                                           <div class="post-na2  text-center">
                                             <input class="btn-blue btn bc" value="Follow" type="button"><br>
                                             <a href="#">31607 followers</a>
                                       </div>
                                       <div class="post-na3"><div><a href="#">Send Message</a></div></div>
                                    </div>
                             </div>--><!--media-->

                            <!--<div class="media bor-bott">
                               <div class="media-left">
                                 <a href="#">
                                    <img src="images/r3.jpg" alt="re">
                                 </a>
                               </div>
                               <div class="media-body">
                                  <div class="recru-name">
                                      <a href="#">Kimura</a><br>
                                       <span class="re-pos">Assistant Manager</span><br>
                                         <i class="icon-office"></i> <a href="#">Muthoot Group</a><br>
                                      <span class="re-pos"><i class="fa fa-map-marker"></i>Chiba</span>
                                   </div>
                               </div>
                                       <div class=" max-w ">
                                          <div class="post-na2  text-center">
                                            <input class="btn-blue btn bc" value="Follow" type="button"><br>
                                            <a href="#">31607 followers</a>
                                      </div>
                                      <div class="post-na3"><div><a href="#">Send Message</a></div></div>
                                   </div>
                            </div>--><!--media-->

                            <!--<div class="media bor-bott">
                               <div class="media-left">
                                 <a href="#">
                                    <img src="images/r4.jpg" alt="re">
                                 </a>
                               </div>
                               <div class="media-body">
                                  <div class="recru-name">
                                      <a href="#">Matsumoto</a><br>
                                       <span class="re-pos">Assistant Manager</span><br>
                                         <i class="icon-office"></i> <a href="#">Muthoot Group</a><br>
                                      <span class="re-pos"><i class="fa fa-map-marker"></i>Chiba</span>
                                   </div>
                               </div>
                                       <div class=" max-w ">
                                          <div class="post-na2  text-center">
                                            <input class="btn-blue btn bc" value="Follow" type="button"><br>
                                            <a href="#">31607 followers</a>
                                      </div>
                                      <div class="post-na3"><div><a href="#">Send Message</a></div></div>
                                   </div>
                            </div>--><!--media-->

                            <!-- <div class="media bor-bott">
                                <div class="media-left">
                                  <a href="#">
                                     <img src="images/r5.jpg" alt="re">
                                  </a>
                                </div>
                                <div class="media-body">
                                   <div class="recru-name">
                                       <a href="#">Sasaki</a><br>
                                        <span class="re-pos">Assistant Manager</span><br>
                                          <i class="icon-office"></i> <a href="#">Muthoot Group</a><br>
                                       <span class="re-pos"><i class="fa fa-map-marker"></i>Chiba</span>
                                    </div>
                                </div>
                                        <div class=" max-w ">
                                           <div class="post-na2  text-center">
                                             <input class="btn-blue btn bc" value="Follow" type="button"><br>
                                             <a href="#">31607 followers</a>
                                       </div>
                                       <div class="post-na3"><div><a href="#">Send Message</a></div></div>
                                    </div>
                             </div>--><!--media-->

                            <!-- <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                     <img src="images/r3.jpg" alt="re">
                                  </a>
                                </div>
                                <div class="media-body">
                                   <div class="recru-name">
                                       <a href="#">Kobayashi</a><br>
                                        <span class="re-pos">Assistant Manager</span><br>
                                          <i class="icon-office"></i> <a href="#">Muthoot Group</a><br>
                                       <span class="re-pos"><i class="fa fa-map-marker"></i>Chiba</span>
                                    </div>
                                </div>
                                        <div class=" max-w ">
                                           <div class="post-na2  text-center">
                                             <input class="btn-blue btn bc" value="Follow" type="button"><br>
                                             <a href="#">31607 followers</a>
                                       </div>
                                       <div class="post-na3"><div><a href="#">Send Message</a></div></div>
                                    </div>
                             </div>--><!--media-->



                        </div><!--create-job-content-->
                    </div><!--create-job-->

                </div><!--col-sm-3-->

            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->

@endsection
