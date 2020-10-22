
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Jobs Portal</title>



    <!-- FAVICON AND APPLE TOUCH -->
    <link rel="shortcut icon" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="apple-touch-180x180.png">

    <!-- FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,500,300">-->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/fonts/icomoon.css">
    <link href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/font-n/stylesheet.css" rel="stylesheet" type="text/css" charset="utf-8" />

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/bootstrap/css/bootstrap.min.css">

    <!-- MT ICONS -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/fonts/mt-icons/mt-icons.css">

    <!-- FANCYBOX -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/fancybox/jquery.fancybox.css">

    <!-- REVOLUTION SLIDER -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/revolutionslider/css/settings.css">

    <!-- OWL Carousel -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/owl-carousel/owl.transitions.css">

    <!-- MAGNIFY -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/magnify/magnify.css">

    <!-- YOUTUBE PLAYER -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/ytplayer/css/YTPlayer.css">

    <!-- TEXT ROTATOR -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/text-rotator/simpletextrotator.css">

    <!-- ANIMATIONS -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/animations/animate.min.css">

    <!-- CUSTOM & PAGES STYLE -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/css/custom.css">
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/css/pages-style.css">
    <style>

        ul.acc li {
            margin-top: 10px;
            margin-left: 4%;
            display: inline-block;
            width: 80px;
            height: 80px;
            overflow: hidden;
            /* line-height: 71px; */
            background:#fff;
            border-radius: 100%;
            border: 5px solid #017BC6;
            margin-right: 19%;
            margin-bottom: .5em;
            padding: 20px;
        }
        ul.acc li:hover {
            color:#fff;
            position: relative;
            background: rgba(234, 234, 234, 0.27);
            box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.19); }

        ul.acc li a {
            -webkit-transition-duration: 0.7s;
            -moz-transition-duration: 0.7s;
            -o-transition-duration: 0.7s;
            transition-duration: 0.7s;
            display: block;
            width: 100%;
            height: 200%;
            position: relative;
            color: #027BC4;

        }
        /*  ul.acc li a:after {
            text-align: center;
            position: absolute;
            width: inherit;
            height: 50%;
            left: 0;
            bottom: 0;
            line-height: 60px;
            color: #fff; }*/

    </style>

</head>
<script type="text/javascript">
    function chkempty()
    {
        if(tinyMCE.get("job_desc").getContent())
        {

            var idddd = "job_desc";
            alert(job_desc);
            chkkabuse();


        }
    }

    function chkkabuse(txtid)
    {

        var idd = txtid;
        //alert(idd);
        var textval =document.getElementById(idd).value;
        //alert(textval);
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {

            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                //alert(xmlhttp.responseText);

                //alert(xmlhttp.responseText);
                if(xmlhttp.responseText==0)
                {

                    document.getElementById("name1").innerHTML="<font color='red' style='font-size:12px;'>Don't use abuse words,  </font> ";

                    //document.getElementById('name').focus();
                    document.getElementById('txtid').value="";
                }
                else
                {
                    document.getElementById("name1").innerHTML="<font color='#009966' style='font-size:12px;'>good</font>";
                }
            }
        }
        xmlhttp.open("GET","chkabuse.php?q="+textval,true);
        xmlhttp.send();


    }
</script>
<script type="text/javascript">
    function send_mail(rec_name,rec_mail){
        document.getElementById('recname').value=rec_name;
        document.getElementById('recmail').value=rec_mail;
    }
</script>
<body>

<div class="modal fade" id="recruiter-listing-send-message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #017BC6; text-align:center;">
                <button type="button" style="color:#FFF;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:#FFF; font-weight:bold;" class="modal-title" id="exampleModalLabel">Send Message To : <input class="btn" type="text" style="font-weight:bold; font-size:16px;" id="recname" readonly></h4>
            </div>
            <form action="" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Email ID:</label>
                        <input type="text" class="form-control" id="recipient-name" name="recipient-name" value="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Message:</label>
                        <textarea class="form-control" id="message-text" name="message-text"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="sub-text" class="control-label">Subject:</label>
                        <textarea class="form-control" id="sub-text" name="sub-text"></textarea>
                    </div>

                    <input type="hidden" id="recmail" name="recmail"/>
                </div>
                <div class="modal-footer">

                    <input type="submit" class="btn-blue btn bc" name="send_mail" value="Send message"/>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="page-wrapper">

    <!-- HEADER -->

    <div id="header-top" >
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <!-- LOGO -->
                    <a id="logo" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/">
                        <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/images/logo-1565092795.png" alt="enterprenuer.com">
                    </a>
                </div><!-- col -->
                <div class="col-sm-4">
                </div><!-- col -->

                <div class="col-sm-5 logme">
                    <div class="widget widget-pages">
                        <ul>
                            <li>
                                <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsseeker-login.html">
                                    <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/login-icon.png" />
                                    Login
                                </a>
                            </li>
                            <li>
                                <!--<a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/employer-login.html">-->
                                <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobseeker-registration.html">
                                    <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/register-icon.png" />
                                    <!--<i class="fa fa-lock"></i>-->
                                    Register
                                </a>
                            </li>

                        </ul>
                    </div><!-- widget-pages -->


                </div><!-- col -->


                <!-- <div class="text-right botlink5"><a href="#">Job Seeker? Click here</a>  |  Report a Problem</div>-->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- header-top -->
    <div class="banner-top">	 			<div id="header" >
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- MENU -->
                        <nav>
                            <a id="mobile-menu-button" href="#"><i class="mt-icons-menu"></i></a>
                            <ul class="menu clearfix" id="menu"><!--class="fa fa-user"-->

                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/home.png" /> Home</a></li>
                                <li ><a href="jobsseeker-login.html"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/job-seeker-icon.png" /> Jobseekers</a></li>
                                <li  ><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/searchall.html"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/jobs-icon.png" /> Jobs</a></li>
                                <li ><a href="jobsearch_all.html?sch=4"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/govt-jobs-icon.png" /> IIT/IIM jobs</a></li>
                                <li ><a href="jobsearch_all.html?sch=1"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/govt-jobs-icon.png" /> Govt.jobs</a></li>
                                <li ><a href="jobsearch_all.html?sch=2"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/oversea-jobs-icon.png" /> Oversea jobs</a></li>
                                <li ><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/recruiter-listing.html"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/recruiters-icon.png" /> Recruiters</a></li>
                                <!--<li><a href="faq.html">Help / FAQ</a></li>-->
                                <li  ><a href="contactus.html">Contact</a></li>
                                <!--<li ><a href="index.html"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/employers-icon.png" /> Employers</a></li>
                                <li ><a href="index.html"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/services-icon.png" /> Services</a></li>-->
                                <!--<li  class="dropdown" ><a href="index.html"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/more-icon.png" /> More</a>
                                    <ul >
                                        <li><a href="faq.html">Help / FAQ</a></li>
                                        <li><a href="#">Career Advice</a></li>
                                        <li><a href="contactus.html">Contact Us</a></li>
                                    </ul>
                                </li>-->
                                <!--<li ><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                                <li ><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/searchall.html"><i class="fa fa-briefcase"></i> Search Jobs </a></li>
                                <li ><a href="index.html"><i class="fa fa-briefcase"></i> Jobs</a></li>
                                <li ><a href="index.html"><i class="fa fa-university"></i> Govt.jobs</a></li>
                                <li ><a href="index.html"><i class="fa fa-globe"></i> Oversea jobs</a></li>
                                <li  ><a href="recruiter-listing.html"><i class="fa fa-users"></i> Recruiters</a></li>
                               <!-- <li ><a href="index.html"><i class="icon-user4"></i> Employers</a></li>
                                <li ><a href="index.html"><i class="fa fa-cogs"></i> Services</a></li>-->
                                <!--<li ><a href="index.html" ><i class="fa fa-plus-circle"></i> More</a></li>-->
                            </ul>
                        </nav>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- header -->

        <!-- SEARCH-start -->

        <div class="container hometom">
            <div class="row">
                <div class="col-sm-12" >

                    <!--<div class="col-sm-1" ></div>-->
                    <div class="col-sm-12" >
                        <form class="form-inline" action="jobsearch.php" name="homeadvancesearch" method="GET">

                            <div class="form-group serww"><input class="form-control2 " id="keyword" name="refkeyword" type="text"  placeholder="Keywords, Skills, Designation" value=''></div>
                            <div class="form-group"> <input class="form-control2 " id="location" autocomplete="off" name="reflocation"  type="text" value='' placeholder="Location"></div>
                            <div class="form-group">
                                <select id="category" name="category" class="form-control2 ">
                                    <option value="">select industry</option>
                                    <option value="56"  >Construction</option>
                                    <option value="53"  >IT - BPO</option>
                                    <option value="50"  >IT-ERP-Oracle</option>
                                    <option value="42"  >KPO/Technical Support</option>
                                    <option value="34"  >Law Enforcement/Security</option>
                                    <option value="35"  >Legal/Law</option>
                                    <option value="55"  >Management</option>
                                    <option value="36"  >Marketing/Sales</option>
                                    <option value="52"  >mech</option>
                                    <option value="51"  >Media </option>
                                    <option value="37"  >Media/Journalism</option>
                                    <option value="54"  >NGO/Social Services</option>
                                    <option value="45"  >Others</option>
                                    <option value="38"  >Production/Manufacturing/Maintenance</option>
                                    <option value="44"  >Strategy / Management Consulting Firms</option>
                                    <option value="46"  >test cate</option>
                                    <option value="40"  >Tours and Travel/Airline</option>
                                    <option value="41"  >Transportation/Logistics</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select id="experience" name="experience" class="form-control2 " >
                                    <option value="">Experience</option>
                                    <option value="1" >0 to 1 Year</option>
                                    <option value="2" >2 Years</option>
                                    <option value="3" >3 Years</option>
                                    <option value="4" >4 Years</option>
                                    <option value="5" >5 Years</option>
                                    <option value="6" >6 Years</option>
                                    <option value="7" >7 Years</option>
                                    <option value="8" >8 Years</option>
                                    <option value="9" >9 Years</option>
                                    <option value="10" >10 Years</option>
                                    <option value="15" >15 Years</option>
                                    <option value="20" >20 Years</option>
                                </select>
                                <!--<input  class="form-control2 input-lg" type="text" name="exp" placeholder="Experience">--></div>
                            <div class="form-group text-center"><button  class="search-btn btn-lg btn-block"  id="homeadvsearch" type="submit" name="homeadvsearch" value="Search"> <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/search-icon.png" /> Search</button>
                                <!--<span class="avd"><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" >Advanced Search</a></span>-->
                                <span class="avd"><a href="advancesearch.html">Advanced Search</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>            <!--SEARCH-end -->
        <div id="header-bottom" class="hea" >
            <div class="container">
                <div class="col-sm-12">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span ><i class="fa fa-bars fa-2"></i></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-2">
                        <ul class="nav navbar-nav navbar-left  clearfix sss">
                            <li>Browse jobs :</li>
                            <li class="active"><a href="jobsearch_all.html"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/all-jobs-icon.png" /> All jobs</a></li>
                            <li class=""><a href="job_by_company.php"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/jobs-by-company-icon.png" /> Job by Company</a></li>
                            <li class=""><a href="job_by_category.php"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/jobs-by-category-icon.png" /> Job by Category</a></li>
                            <li class=""><a href="job_by_area.php"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/jobs-by-location-icon.png" /> Job by Location</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> <!--col-sm-12-->
            </div><!--container-->
        </div><!--header-bottom-->          </div>  <!--banner-top-->
    </header>

    <!-- HEADER -->
    <!--CREATE JOB ALERT POPUP-->
    <div class="modal fade bs-example-modal-lg" id="mailjob" tabindex="-1" role="dialog" aria-labelledby="search">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header avd-serbg">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="opacity: 1;"><span aria-hidden="true"> <img src="images/close-icon.png"></span></button>
                    <h4 class="modal-title mode-tit" id="myModalLabel">Forward Job to Friend</h4>
                </div>
                <div class="modal-body avdbg1a">
                    <form class="form-horizontal m10" onsubmit="return modalvalidate()";>
                        <div class="form-group m20">
                            <label class="col-sm-4 pedit2 text-right mtop4"><span class="red-star">*</span>Your Email: </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" placeholder="Enter your email address" name="mail" id="mail"><div id="id1"></div>
                            </div>
                        </div>
                        <div class="form-group m20">
                            <label class="col-sm-4 pedit2 text-right mtop4"><span class="red-star">*</span>Friend's Email: </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" placeholder="Enter your friend's email address" name="fmail" id="fmail"><div id="id2"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  >Subject:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="subject" id="subject" value="Your Friend has forwarded you the Job:  at  " readonly><div id="id3"></div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  >Message:</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" name="message" id="message">  </textarea>
                                <div id="id3"></div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="red-star">*</span>Enter the captcha:</label>
                            <div class="col-sm-5">
                                <input type="text" id="mainCaptcha" placeholder="Refresh to view captcha code"/>
                                <input type="button" class="btn btn-info" id="refresh" value="Refresh" onclick="Captcha();" /><br>
                                Enter the above code:
                                <input type="text" id="txtInput"/>    <div id="id4"></div>

                                <!-- Enter Captcha <img src="captcha.php"><input type="text" name="vercode" id="vercode"/>  -->
                                <div id='id5'></div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-12 text-center">
                                <input type="hidden" name="jid" value="" />
                                <input class="btn-blue btn bc3" value="Send " name="frdmailsubmit" type="submit" onclick="return ValidCaptcha();"> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--CREATE JOB ALERT END-->

    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/">Home </a></li>
                <li><a href="#"> Recruiters  </a></li>
                <li class="active">test</li>
            </ol>
            <div class="row">

                <div class="col-md-9" >
                    <div class="top-emp-center">
                        <h4>test</h4>
                    </div> <!--top-emp-center-->
                    <div class="tab-content m20 p20">

                        <div class="media">
                            <div class="media-left2 p20">

                                <!-- <img  src="images/recruiter.jpg" alt="recruiter">-->
                                <a href="#">
                                    <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/images/recruiter.jpg" alt="re">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="col-md-12" >
                                    <h4 class="media-heading mtop15 fontw"><a href="#"></a></h4>
                                    <div class="ff12"><i class="icon-office"></i> Test</div>
                                    <div class="ff12"><i class="fa fa-map-marker"></i> Chennai, </div>
                                    <div class="ff12"><i class="icon-suitcase"></i> 8 Active Jobs</div>
                                    <!--<div class="ff12 add" >I am a seasoned Human Resource management professionals with 9+ years of proven track record in
                                    managing Recruitment Life cycle in Financial Services Industry.
                                    I have got hands-on experience in managing <a href="">read more</a></div>-->
                                </div>
                                <div class="col-md-6" >
                                    <div class="post-na4">
                                        <!-- <input class="btn-blue btn bc" value="Follow" type="button">
                                         <a href="#">14874 Followers</a>-->
                                    </div>
                                </div>
                                <div class="col-md-6  text-right"> <div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('','');"><input class="btn-blue btn bc" value="Send Message" type="button"> </div> </a></div>




                            </div>
                        </div>


                        <div class="media-body pleft20">
                            <div class="post-na5">Test</div>
                            <div class="ff12">Roles I hire for:</div>
                            IT- Application- Oracle ERP.,														Manager Media Sales (print & Digital) - Grehlakshmi & Cricket Today.

                            <div class="post-na5 m20"> My Work Experience</div>
                            <div class="ff12"> Currently with:</div>
                            <div class="ff12">Rathi Financial Services Limited (Since Jan-2012)</div>
                        </div><!--media-body-->
                        <div class="col-md-12 text-right"> <div class="viewal"></div> </div>
                    </div><!--tab-content-->

                    <div class="browse-cat ">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-1-5" data-toggle="tab" aria-expanded="true">  I am currently hiring for (6 jobs)  </a></li>
                            <li class=""><a href="#tab-1-6" data-toggle="tab" aria-expanded="false"> Positions i have managed in the past (8 jobs) </a></li>
                        </ul>


                        <div class="tab-content pleft35">
                            <div class="tab-pane fade active in" id="tab-1-5">
                                31527832748
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
