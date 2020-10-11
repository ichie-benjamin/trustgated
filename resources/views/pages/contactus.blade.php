@extends('layouts.master')

@section('content')
    

    <!-- CONTENT -->
    <div id="content">
        <div class="container">



            <ol  class="breadcrumb">
                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/">Home</a></li>
                <li class="active">Contact Us</li>
            </ol>

            <div class="row">
                <div class="col-sm-9" >
                    <div class="top-emp-center p5">
                        <h4>Contact Us</h4>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="all-catehead blue">Employers contact us at</div><br>
                                <address>
                                    <div class="enq"> For Sales Enquiries</div>
                                    <strong class="enq">Toll Free Nuber:</strong>98767876565 <br>
                                    <strong class="enq">Mobile:</strong>  8787678765<br>
                                    <strong class="enq">Email: </strong><span class="add"> <a href="mailto:employer@gmail.com">employer@gmail.com</a></span><br>
                                    <!-- <div class="add"><a href="#">Click here</a>  to request information</div>	-->
                                </address>
                            </div><!--col-sm-6-->

                            <div class="col-sm-6">
                                <div class="all-catehead blue">Job Seekers contact us at</div><br>
                                <address>
                                    <strong class="enq">Toll Free Nuber:</strong> 987987987<br>
                                    Enterprenuer Services<br>
                                    <strong class="enq">Email: </strong><span class="add"> <a href="mailto:info@gmail.com">info@gmail.com</a></span><br>
                                    <!--<div class="add"><a href="#">Click here</a>  for My Enterprenuer Services </div>-->
                                </address>
                            </div><!--col-sm-6-->
                        </div><!--col-sm-12-->
                    </div>

                    <div class="top-emp-center p5 mtop40">
                        <h4>Our Management Team</h4>
                    </div>
                    <div class="contact row mtop40 ">
                        <div class="col-sm-4">
                            <div class="manage-bg ">
                                <div class="manage-title"> Mr. Haruto Shimabukuro</div>
                                <div class="manage">
                                    <ul>
                                        <li>Chief Operating Officer</li>
                                        <li>Enterprenuer Services</li>
                                        <li><i class="fa fa-envelope-o"></i> <a href="mailto:yourdomain@gmail.com">yourdomain@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--col-sm-4-->

                        <div class="col-sm-4">
                            <div class="manage-bg ">
                                <div class="manage-title"> Mr. Yamato Chinen</div>
                                <div class="manage">
                                    <ul>
                                        <li>Product & Marketing Head</li>
                                        <li>Enterprenuer Services</li>
                                        <li><i class="fa fa-envelope-o"></i> <a href="mailto:yourdomain@gmail.com">yourdomain@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--col-sm-4-->

                        <div class="col-sm-4">
                            <div class="manage-bg ">
                                <div class="manage-title">  Mr. Kosuke Higa </div>
                                <div class="manage">
                                    <ul>
                                        <li>Customer Care Manager</li>
                                        <li>Enterprenuer Services</li>
                                        <li><i class="fa fa-envelope-o"></i> <a href="mailto:yourdomain@gmail.com">yourdomain@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--col-sm-4-->
                    </div><!--contact -->


                </div><!--col-sm-9-->

                <div class="col-sm-3" >

                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Enquiry Form </h3>
                        </div>
                        <div class="create-job-content">

                            <p ></p>
                            <form  action="" name="formreg" id="formreg" method="post" onsubmit="return ChkContact()">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="fullname" name="fullname" value="" placeholder="*Name"><div id='id1'></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email"  placeholder="Email"><div id='id2'></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="mobile" name="mobile" maxlength="10" placeholder="*Phone"><div id='id3'></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="message" name="message" rows="3" placeholder="*Message"></textarea><div id='id4'></div>
                                </div>
                                <div class="form-group">


                                    <input type="text" id="mainCaptcha"/>
                                    <script>Captcha();</script>

                                    <input type="text" id="txtInput" placeholder="Enter above code"/>
                                    <!--<input id="Button1" type="button" value="Check" onclick="alert(ValidCaptcha());"/>-->


                                    <div id='id5'></div>
                                </div>
                                <!--<div class="g-recaptcha" data-sitekey="6LdwJCMUAAAAAENeQP_xGsG-VFH4vNd1OGHGs8Wy"></div>-->
                                <div class="ali-right">
                                    <input  type="hidden" id="formsubmit" name="formsubmit" value="add">
                                    <input class="btn-blue btn" type="submit" name="Submits"  value="Submit" onclick="return ValidCaptcha();" >
                                </div>
                            </form>
                        </div>
                    </div><!--create-job-->

                    <div class="press-banner img-responsive"><img src="images/agency.jpg"  alt="agency"></div>

                </div><!--col-sm-3-->

            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->

@endsection