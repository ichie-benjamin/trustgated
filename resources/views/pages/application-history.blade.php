@extends('layouts.master')

@section('content')
    
    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">My Account</li>
            </ol>
            <div class="row">
                <div class="col-md-2 padno">

                    @include('layouts.partials.job-sidebar')
                    <!--create-job-->

                    <!-- PROFILE VISIBILITY -->
                    <div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header avd-serbg">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img src="images/close-icon.png"></span></button>
                                    <h4 class="modal-title mode-tit" id="myModalLabel">Visibility Settings</h4>
                                </div>
                                <div class="modal-body avdbg1a">
                                    <form class="form-horizontal m10">
                                        <div class="row visipad">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="visifont"> Your visibility setting currently is:
                                                        Not Visible</div>
                                                </div>
                                                <div class="form-group m20">
                                                    <div class="radio visipad15 visicol">
                                                        <div class="clearfix m10"></div>
                                                        <label> <input type="radio" name="visibility" id="visibility" value="1" />  Visible as Active
                                                            <div class="visifont2">Your profile will be visible in the Jobs database to recruiters. Recruiters will contact you for suitable job opportunities</div>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group m20">
                                                    <div class="radio visipad15a visicol">
                                                        <div class="clearfix m10"></div>
                                                        <label> <input type="radio" name="visibility" id="visibility1" value="0" />  Visible as Inactive
                                                            <div class="visifont2">Your profile will be visible in the Jobs database, but recruiters will be informed that you are not actively looking for jobs. Recruiters may still contact you for job opportunities </div>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group m20 ">
                                                    <div class="radio visipad15 visicol">
                                                        <div class="clearfix m10"></div>
                                                        <label> <input type="radio" name="visibility" id="visibility2" value="2" checked/>  Not Visible
                                                            <div class="visifont2">Your profile will not be visible to recruiters. You will not get unadvertised jobs (which comprise up to 40% of all job opportunities on Jobs.com) from recruiters</div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group m20 visibor">
                                                    Regardless of the above settings you can continue to apply to jobs advertised on Jobs.com
                                                </div>

                                                <div class="form-group ">

                                                    <div class="col-sm-3 ">
                                                        <input name="save2" class="btn-blue btn bc3 " value="Save" type="submit">
                                                    </div>
                                                    <div class="col-sm-3 ">
                                                        <div class="btn-blue btn bc3"><a data-dismiss="modal" href="#" style="color:#FFF"> Cancel </a></div>
                                                    </div>
                                                </div>

                                            </div><!--col-md-10-->
                                        </div> <!--row-->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PROFILE VISIBILITY -->
                </div><!--col-sm-2-->

                <div class="col-md-7 m10" >
                    <div class="top-emp-center">
                        <h4> Application History</h4>
                    </div> <!--top-emp-center-->

                    <p class="m10 text13">You have applied to the following jobs in the last 30 days: </p>
                    <!-- <div class="text-right"> <div class="inboxa"><i class="fa fa-print"></i> <a href="#"> Print Application History</a></div></div>-->

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="col-md-8">Job Detail</th>
                                <th class="col-md-2">Applied Date</th>
                                <th class="col-md-2">Viewed Date</th>
                            </tr>
                            </thead>
                            <tbody>


                            <tr>
                                <td>
                                    <div class="media-body">
                                        <div class="col-md-12">
                                            <h4 class="media-heading c23"><a href="job-detail-page.php?jid=31527844504">Production Assistant - Journalism & Mass Communication</a></h4>
                                            <small><em>Inet-Solution</em></small>
                                        </div>

                                        <div class="entry-meta mtop40">
                                            <div class="col-md-12 m10"> <span class="posted-on"><i class="fa fa-map-marker"></i> <a href="#"><span class="entry-date">Bastar </span></a></span> <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard"><a href="#">0-10 YRS </a></span></span>
                                                <span class="comments-link"><i class="fa fa-yen"></i> <a href="#">1,00,000 - 9,00,000 P.A </a></span></div>
                                        </div>
                                        <div class="bs-example " data-example-id="horizontal-dl">
                                            <dl class="dl-horizontal">
                                                <dt>Job Description:  </dt>
                                                <dd> YMCA University of Science & Tech., payable at Faridabad. Retired persons may also apply to be engaged on appropriate position on contract basis up to the age of 65 years. The University reserves the right to increase/ decrease the number of posts or it may not fill any of the posts advertised without assigning any reason.Minimum Qualification:1) Bachelor degree in any discipline from a recognized University.2) Diploma in Mass Communication/ Journalism/ Film/ Video Editing from a recognized University/ Institution Two years experience in video program production preferable of editing videos on non-linear machines like FCP/ Velocity/ Adobe premiere or relevant experience.How to Apply: Applications on prescribed form duly completed in all respects along with self attested copies of testimonials and Demand Draft of Rs. 1000/- (Rs. 250/- for SC/ST) in favour of Registrar, YMCA University of Science & Technology, payable at Faridabad should be sent to Establishment Branch, YMCA University of Science & Technology, Sector-6 Faridabad-121006 by speed Post on or before 7th June, 2018 up to 04:00 PM. No application will be received through e-mail/fax. The University would not be responsible for any postal delay.	 </dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <!-- <div class="botlink7"><a href="#">View Similar Jobs</a> >> <a href="#">Database Arch</a>... <a href="#">Applicant Comparison</a></div>-->
                                    <div class="datee2 text-right ">Posted Date: Jun 01, 2018</div>
                                </td>
                                <td>Sep 10, 2020</td>
                                <td>Information   not available </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="media-body">
                                        <div class="col-md-12">
                                            <h4 class="media-heading c23"><a href="job-detail-page.php?jid=31527834957">Manager Media Sales (print & Digital) - Grehlakshmi & Cricket Today</a></h4>
                                            <small><em>Diamond Magazines P Ltd</em></small>
                                        </div>

                                        <div class="entry-meta mtop40">
                                            <div class="col-md-12 m10"> <span class="posted-on"><i class="fa fa-map-marker"></i> <a href="#"><span class="entry-date">Gopalasamudram </span></a></span> <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard"><a href="#">1-10 YRS </a></span></span>
                                                <span class="comments-link"><i class="fa fa-yen"></i> <a href="#">2,00,000 - 14,00,000 P.A </a></span></div>
                                        </div>
                                        <div class="bs-example " data-example-id="horizontal-dl">
                                            <dl class="dl-horizontal">
                                                <dt>Job Description:  </dt>
                                                <dd> Diamond Group is looking for candidates with extensive experience in Print & digital ad space selling. Extensive understanding of the media is a must.Candidates with past similar experience should apply.\\r\\nSalary: INR 4,00,000 - 6,00,000 P.A.\\r\\n\\r\\nIndustry:Media / Entertainment / Internet\\r\\n\\r\\nFunctional Area:Sales , Retail , Business Development\\r\\n\\r\\nRole Category:Retail Sales\\r\\n\\r\\nRole:Sales/Business Development Manager\\r\\n\\r\\nEmployment Type: Permanent Job, Full Time	 </dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <!-- <div class="botlink7"><a href="#">View Similar Jobs</a> >> <a href="#">Database Arch</a>... <a href="#">Applicant Comparison</a></div>-->
                                    <div class="datee2 text-right ">Posted Date: Jun 01, 2018</div>
                                </td>
                                <td>Sep 10, 2020</td>
                                <td>Information   not available </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="media-body">
                                        <div class="col-md-12">
                                            <h4 class="media-heading c23"><a href="job-detail-page.php?jid=31527833800">Legal Associate - Bombay High Court Litigation ( For Law Firm )</a></h4>
                                            <small><em>OASIS</em></small>
                                        </div>

                                        <div class="entry-meta mtop40">
                                            <div class="col-md-12 m10"> <span class="posted-on"><i class="fa fa-map-marker"></i> <a href="#"><span class="entry-date">Nongpoh </span></a></span> <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard"><a href="#">1-10 YRS </a></span></span>
                                                <span class="comments-link"><i class="fa fa-yen"></i> <a href="#">1,00,000 - 10,00,000 P.A </a></span></div>
                                        </div>
                                        <div class="bs-example " data-example-id="horizontal-dl">
                                            <dl class="dl-horizontal">
                                                <dt>Job Description:  </dt>
                                                <dd> Appearances in Bombay High Court, Arbitration Tribunals, Appellate Tribunals and other quasi-judicial bodies.\\r\\nDrafting of suits, complaints, written statement, replication, writs, appeals.\\r\\nLitigation & arbitration in civil,property and company law.\\r\\nSalary: INR 1,50,000 - 3,00,000 P.A.\\r\\n\\r\\nIndustry:Legal\\r\\n\\r\\nFunctional Area:Legal , Regulatory , Intellectual Property\\r\\n\\r\\nRole Category:Other\\r\\n\\r\\nRole:Private Attorney/Lawyer\\r\\n\\r\\nEmployment Type: Permanent Job, Full Time	 </dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <!-- <div class="botlink7"><a href="#">View Similar Jobs</a> >> <a href="#">Database Arch</a>... <a href="#">Applicant Comparison</a></div>-->
                                    <div class="datee2 text-right ">Posted Date: Jun 01, 2018</div>
                                </td>
                                <td>Sep 10, 2020</td>
                                <td>Information   not available </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="media-body">
                                        <div class="col-md-12">
                                            <h4 class="media-heading c23"><a href="job-detail-page.php?jid=31527834595">Abroad Opportunities | Manager - Sales & Marketing</a></h4>
                                            <small><em>CN Immigration Services Pvt. Ltd</em></small>
                                        </div>

                                        <div class="entry-meta mtop40">
                                            <div class="col-md-12 m10"> <span class="posted-on"><i class="fa fa-map-marker"></i> <a href="#"><span class="entry-date">Sirsa </span></a></span> <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard"><a href="#">1-8 YRS </a></span></span>
                                                <span class="comments-link"><i class="fa fa-yen"></i> <a href="#">1,00,000 - 12,00,000 P.A </a></span></div>
                                        </div>
                                        <div class="bs-example " data-example-id="horizontal-dl">
                                            <dl class="dl-horizontal">
                                                <dt>Job Description:  </dt>
                                                <dd> Marketing managers establish distribution networks for products and services, initiate market research studies and analyze their findings, assist in product development, and direct and evaluate the marketing strategies of establishments.\\r\\nSalary: USD 65,000 - 85,000 P.A.\\r\\n\\r\\nIndustry:Advertising / PR / MR / Event Management\\r\\n\\r\\nFunctional Area:Sales , Retail , Business Development\\r\\n\\r\\nRole Category:Retail Sales\\r\\n\\r\\nRole:Sales/Business Development Manager\\r\\n\\r\\nEmployment Type: Permanent Job, Full Time	 </dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <!-- <div class="botlink7"><a href="#">View Similar Jobs</a> >> <a href="#">Database Arch</a>... <a href="#">Applicant Comparison</a></div>-->
                                    <div class="datee2 text-right ">Posted Date: Jun 01, 2018</div>
                                </td>
                                <td>Oct 01, 2020</td>
                                <td>Information   not available </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="media-body">
                                        <div class="col-md-12">
                                            <h4 class="media-heading c23"><a href="job-detail-page.php?jid=31527837584">Travel Expert for Ticketing and tour Management</a></h4>
                                            <small><em>THE HOLIDAYS INN</em></small>
                                        </div>

                                        <div class="entry-meta mtop40">
                                            <div class="col-md-12 m10"> <span class="posted-on"><i class="fa fa-map-marker"></i> <a href="#"><span class="entry-date">Jorethang </span></a></span> <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard"><a href="#">0-5 YRS </a></span></span>
                                                <span class="comments-link"><i class="fa fa-yen"></i> <a href="#">1,00,000 - 12,00,000 P.A </a></span></div>
                                        </div>
                                        <div class="bs-example " data-example-id="horizontal-dl">
                                            <dl class="dl-horizontal">
                                                <dt>Job Description:  </dt>
                                                <dd> We are a Travel Agency working from Past 4 years . We need new candidates for our business for air ticketing and tour management. we also provide incentive to our candidates . we deal mostly in international tour packages\\r\\nSalary: INR 1,25,000 - 2,00,000 P.A. + incentives\\r\\n\\r\\nIndustry:Travel / Hotels / Restaurants / Airlines / Railways\\r\\n\\r\\nFunctional Area:Travel , Tours , Ticketing , Airlines\\r\\n\\r\\nRole Category:Ticketing/Travel/Documentation\\r\\n\\r\\nRole:Tour Mngmt Executive\\r\\n\\r\\nEmployment Type: Permanent Job, Full Time	 </dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <!-- <div class="botlink7"><a href="#">View Similar Jobs</a> >> <a href="#">Database Arch</a>... <a href="#">Applicant Comparison</a></div>-->
                                    <div class="datee2 text-right ">Posted Date: Jun 01, 2018</div>
                                </td>
                                <td>Oct 01, 2020</td>
                                <td>Information   not available </td>
                            </tr>



                            </tbody>
                        </table>
                    </div>


                </div><!--col-sm-7-->


                <div class="col-md-3" >
                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Profile Status </h3> <span class="badge markq" title="See how your profile on jobs has performed over the last 30 days.">?</span>
                        </div>

                        <div class="create-job-content">
                            <div class="progress">

                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%" >
                                    40%complete
                                </div>


                            </div>
                            <div class="add indx"><span class="bocol">Pending : </span>Profile Image,Keyskills,Resume </div>

                        </div>

                    </div><!--create-job-->

                    <div class="create-job">
                        <div class="create-job-head">
                            <h3>Profile Performance</h3> <span class="badge markq" title="Profile performance">?</span>
                        </div>
                        <div class="create-job-content">
                            <div class="pt10">
                                <ul class="pp">
                                    <li class="bdrLN"><a class="curDef">2</a><div>Views</div></li>
                                    <li class="w88"><a class="curDef">0</a><div>Downloads</div></li>
                                    <li class="bdrRN"><a class="curDef">0</a><div>Contacts</div></li>
                                </ul>
                                <div class="widPad">
                                    <div class="f11 txtrt">By recruiters in last 30 days</div>
                                </div>
                                <!-- <div class="pt5">
                                   <span class="pbott"><a target="_blank" href="#"> Get professional help to increase CV views</a> </span>
                                 </div>-->
                            </div>
                        </div>

                    </div><!--create-job-->


                    <div class="create-job">
                        <div class="create-job-head">
                            <h3>Application Summary</h3>
                        </div>
                        <div class="create-job-content">

                            <div class="add mbt">
                                You have applied for <span class="pbott"><a href="application-history.php"><b>5 Jobs</b></a> </span> in last 30 days<br>
                                Daily Limit of Application: 50
                                Monthly Limit of Application: 150
                            </div>

                        </div>
                    </div><!--create-job-->

                    <div class="create-job">
                        <div class="create-job-head">
                            <h3>My Job Alert </h3>
                        </div>
                        <div class="create-job-content">


                            <div class="text-right m10">
                                <input class="btn-blue btn bc" data-toggle="modal" data-target="#createjob" value="Create Another Job Alert " type="button">
                            </div>
                        </div><!--create-job-content-->
                    </div><!--create-job-->



                    <div class="openings">
                        <a href="#"><img src="images/searchimg.jpg" alt="ads"></a>
                    </div>
                    <div class="create-job">
                        <div class="create-job-head">
                            <h3>Friend Connect </h3>
                        </div>
                        <div class="create-job-content">

                            <div class="add mbt"> Find jobs in companies your friends work in </div>
                            <div class=" text-left m10"><a href="#"> <img src="images/fconnect.png" alt="facebook connect"> </a></div>
                        </div>
                    </div><!--create-job-->

                </div><!--col-sm-3-->

            </div><!--row-->
        </div><!-- container -->


    </div><!-- CONTENT -->

@endsection