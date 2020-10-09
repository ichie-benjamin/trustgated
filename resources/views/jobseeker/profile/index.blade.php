@extends('layouts.master')

@section('content')
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
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img src="{{ asset('assets/images/close-icon.png') }}"></span></button>
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
                </div>
                <div class="col-md-7" >
                    <div style="text-align:center;">
                    </div>
                    <div class="top-emp-center">
                        <h4>{{ $user->name }}</h4>

                    </div> <!--top-emp-center-->

                    <div class="row">
                        <div class="profile-bg">
                            <ul>
                                <li class="dropdown" >
                                    <a href="#" class="dropdown-toggle"  data-toggle="dropdown">Profiles <b class="caret"></b></a>
                                    <ul class="dropdown-menu nu">
                                        <li>
                                            <!--<a href="#">Technical Architect </a>-->
                                            <span > Functional Area :</span>
                                            {{ $user->function_area }}
                                            <span>| Exp:</span>{{ $user->exp }} <br>
                                            <span class="grytxta">Last Updated on:</span>
                                            {{ $user->updated_at->diffForHumans()  }}
                                        </li>
                                        <li class="divider"></li>

                                    </ul>
                                </li>
                            </ul>

                            <ul> | </ul>
                            <ul>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle"  data-toggle="dropdown">Cover Letter <b class="caret"></b></a>
                                    <ul class="dropdown-menu nu">

                                        <li class="divider"></li>
                                        <li><div class="jselink"><span><a href="#">Create New Cover Letter</a></span> |   <span><a href="#"> Manage Cover Letters</a></span></div></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="tab-content  p10">

                        <div class="media">
                            <div class="media-left3 p10">

                                <a href="#" data-toggle="modal" data-target="#myModal"> <img src="{{ $user->avatar }}" alt="{{ $user->name }}"></a>
                                <div class="pbott text-center"> <a href="#" data-toggle="modal" data-target="#myModal"> Add/Edit Photo </a></div>
                            </div>
                            <div class="media-body">
                                <dl class="dl-horizontal">
                                    <dt class="text-left">Resume Headline : </dt>
                                    <dd>{{ $user->headline }}</dd>
                                    <dt class="text-left">Designation : </dt>
                                    <dd></dd>
                                    <dt class="text-left">Company :</dt>
                                    <dd></dd>
                                    <dt class="text-left">Experience : </dt>
                                    <dd>{{ $user->exp }}</dd>
                                    <dt class="text-left"> Location :   </dt>
                                    <dd>{{ $user->location() }}</dd>
                                    <dt class="text-left">Job Applied : </dt>
                                    <dd>( 6 ) </dd>
                                    <dt class="text-left">Key Skills : </dt>
                                    <dd>{{ $user->skills }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="all-catehead4">Recruiters will reach you at your registered email</div>
                    <div class="editmail">
                        <div class="row">
                            <!--<div class="col-md-3" >
                              <span class="ftb12a"> <i class="fa fa-envelope-o"></i> </span> <span>|</span><span class="ftb12a">Varsha@gmai...</span>
                            </div>-->
                        </div>
                    </div><!--editmail-bg-->


                    <div class="row" >
                        <div class="col-md-6 mbot20" >
                            <!-- <input class="btn-blue btn bc" value="View and Update Profile " type="button">-->
                            <a href="jobseeker-profile-edit.html" class="btn-blue btn bc" value="View and Update Profile">View and Update</a>                                <div class="save-job"><span>Last updated on Apr 07, 2020 </span></div>
                        </div>
                        <div class="col-md-6 mbot20 text-right" >

                            <!--
                               <div class="downlo"><a href="#"> <i class="fa fa-download"></i> Download </a></div>
                               <div class="save-job">Your Attached Resume</div>
-->

                        </div>
                    </div>

                    <div class="our-stats">
                        <div class="top-emp-center">
                            <h4>Jobs Recommendations 10 jobs</h4>
                        </div> <!--top-emp-center-->

                        <div class=" m10 li-he">
                            <div class="media jobmbg">
                                <div class="media-body">
                                    <div class="col-md-10">
                                        <h4 class="media-heading"><a href="job-detail-page.html?jid=31530526424" target="_blank">Associative Vice President</a></h4>
                                        <small><em>php script mall</em></small>
                                    </div>
                                    <div class="col-md-2">
                                        <!--
                                        <div class="save-job">
                                                                                        <a href="javascript:;" onclick="return save_job('31530526424','296');"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                                    </div>
                                        -->
                                        <!-- <div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                    </div>
                                    <div class="entry-meta mtop40">
                                        <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <a href="#"><span class="entry-date">
											   												 </span></a></span>
                                            <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard"><a  href="#">15-13 YRS </a></span></span>

                                            <span class="comments-link"><!--<i class="fa fa-inr"></i>--> <a href="#" >4,00,000 - 9,00,000 P.A </a></span></div>
                                        <div class="col-md-2 text-right">
                                            <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31530526424" target="_blank">Apply</a>
                                        </div>
                                    </div>
                                    <div class="bs-example " data-example-id="horizontal-dl">
                                        <dl class="dl-horizontal">
                                            <dt>Key Skills: </dt>
                                            <dd>Associative Vice President</dd>
                                            <dt>Job Description:  </dt>                                             <dd>Associative Vice President....</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div><!--job-list-bg-->

                        <div class=" m10 li-he">
                            <div class="media jobmbg">
                                <div class="media-body">
                                    <div class="col-md-10">
                                        <h4 class="media-heading"><a href="job-detail-page.html?jid=31527832748" target="_blank">Associate Vice President - Talent Acquisition - IT/BPO/KPO</a></h4>
                                        <small><em>Client of Antrors HR Solutions</em></small>
                                    </div>
                                    <div class="col-md-2">
                                        <!--
                                        <div class="save-job">
                                                                                        <a href="javascript:;" onClick="alert('Already you have saved this job');" id="tet" ><i class="fa fa-floppy-o"></i> Saved</a>
                                                                                    </div>
                                        -->
                                        <!-- <div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                    </div>
                                    <div class="entry-meta mtop40">
                                        <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <a href="#"><span class="entry-date">
											   Dhanbad												 </span></a></span>
                                            <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard"><a  href="#">2-10 YRS </a></span></span>

                                            <span class="comments-link"><!--<i class="fa fa-inr"></i>--> <a href="#" >6,00,000 - 16,00,000 P.A </a></span></div>
                                        <div class="col-md-2 text-right">
                                            <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31527832748" target="_blank">Apply</a>
                                        </div>
                                    </div>
                                    <div class="bs-example " data-example-id="horizontal-dl">
                                        <dl class="dl-horizontal">
                                            <dt>Key Skills: </dt>
                                            <dd>mass recruitment, talent ,acquisition hiring, it training ,continuous ,improvement ,customer satisfaction ,Recruitment.</dd>
                                            <dt>Job Description:  </dt>                                             <dd>- The individual would be required to manage the TA Team & Hiring for the BPO & KPO Business of the ..</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div><!--job-list-bg-->

                        <div class=" m10 li-he">
                            <div class="media jobmbg">
                                <div class="media-body">
                                    <div class="col-md-10">
                                        <h4 class="media-heading"><a href="job-detail-page.html?jid=31594726295" target="_blank">Asdasd</a></h4>
                                        <small><em>inet-solution</em></small>
                                    </div>
                                    <div class="col-md-2">
                                        <!--
                                        <div class="save-job">
                                                                                        <a href="javascript:;" onclick="return save_job('31594726295','296');"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                                    </div>
                                        -->
                                        <!-- <div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                    </div>
                                    <div class="entry-meta mtop40">
                                        <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <a href="#"><span class="entry-date">
											   												 </span></a></span>
                                            <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard"><a  href="#">1-4 YRS </a></span></span>

                                            <span class="comments-link"><!--<i class="fa fa-inr"></i>--> <a href="#" >8,00,000 - 11,00,000 P.A </a></span></div>
                                        <div class="col-md-2 text-right">
                                            <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31594726295" target="_blank">Apply</a>
                                        </div>
                                    </div>
                                    <div class="bs-example " data-example-id="horizontal-dl">
                                        <dl class="dl-horizontal">
                                            <dt>Key Skills: </dt>
                                            <dd>asdasdad</dd>
                                            <dt>Job Description:  </dt>                                             <dd>asdasd....</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div><!--job-list-bg-->

                        <div class=" m10 li-he">
                            <div class="media jobmbg">
                                <div class="media-body">
                                    <div class="col-md-10">
                                        <h4 class="media-heading"><a href="job-detail-page.html?jid=31527846358" target="_blank">Junior Engineering Assistant Grade II - Production</a></h4>
                                        <small><em>Inet-Solution</em></small>
                                    </div>
                                    <div class="col-md-2">
                                        <!--
                                        <div class="save-job">
                                                                                        <a href="javascript:;" onclick="return save_job('31527846358','296');"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                                    </div>
                                        -->
                                        <!-- <div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                    </div>
                                    <div class="entry-meta mtop40">
                                        <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <a href="#"><span class="entry-date">
											   Soledad												 </span></a></span>
                                            <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard"><a  href="#">0-9 YRS </a></span></span>

                                            <span class="comments-link"><!--<i class="fa fa-inr"></i>--> <a href="#" >1,00,000 - 10,00,000 P.A </a></span></div>
                                        <div class="col-md-2 text-right">
                                            <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31527846358" target="_blank">Apply</a>
                                        </div>
                                    </div>
                                    <div class="bs-example " data-example-id="horizontal-dl">
                                        <dl class="dl-horizontal">
                                            <dt>Key Skills: </dt>
                                            <dd>Maintanance</dd>
                                            <dt>Job Description:  </dt>                                             <dd>Junior Engineering Assistant Grade II/ Fireman job opportunities in National Fertilizers Limited\\r\..</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div><!--job-list-bg-->

                        <div class=" m10 li-he">
                            <div class="media jobmbg">
                                <div class="media-body">
                                    <div class="col-md-10">
                                        <h4 class="media-heading"><a href="job-detail-page.html?jid=31527844504" target="_blank">Production Assistant - Journalism & Mass Communication</a></h4>
                                        <small><em>Inet-Solution</em></small>
                                    </div>
                                    <div class="col-md-2">
                                        <!--
                                        <div class="save-job">
                                                                                        <a href="javascript:;" onclick="return save_job('31527844504','296');"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                                    </div>
                                        -->
                                        <!-- <div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                    </div>
                                    <div class="entry-meta mtop40">
                                        <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <a href="#"><span class="entry-date">
											   Bastar												 </span></a></span>
                                            <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard"><a  href="#">0-10 YRS </a></span></span>

                                            <span class="comments-link"><!--<i class="fa fa-inr"></i>--> <a href="#" >1,00,000 - 9,00,000 P.A </a></span></div>
                                        <div class="col-md-2 text-right">
                                            <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31527844504" target="_blank">Apply</a>
                                        </div>
                                    </div>
                                    <div class="bs-example " data-example-id="horizontal-dl">
                                        <dl class="dl-horizontal">
                                            <dt>Key Skills: </dt>
                                            <dd>Production,Head,Supervisor</dd>
                                            <dt>Job Description:  </dt>                                             <dd>YMCA University of Science & Tech., payable at Faridabad. Retired persons may also apply to be engag..</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div><!--job-list-bg-->

                        <div class=" m10 li-he">
                            <div class="media jobmbg">
                                <div class="media-body">
                                    <div class="col-md-10">
                                        <h4 class="media-heading"><a href="job-detail-page.html?jid=31527833800" target="_blank">Legal Associate - Bombay High Court Litigation ( For Law Firm )</a></h4>
                                        <small><em>OASIS</em></small>
                                    </div>
                                    <div class="col-md-2">
                                        <!--
                                        <div class="save-job">
                                                                                        <a href="javascript:;" onclick="return save_job('31527833800','296');"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                                    </div>
                                        -->
                                        <!-- <div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                    </div>
                                    <div class="entry-meta mtop40">
                                        <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <a href="#"><span class="entry-date">
											   Nongpoh												 </span></a></span>
                                            <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard"><a  href="#">1-10 YRS </a></span></span>

                                            <span class="comments-link"><!--<i class="fa fa-inr"></i>--> <a href="#" >1,00,000 - 10,00,000 P.A </a></span></div>
                                        <div class="col-md-2 text-right">
                                            <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31527833800" target="_blank">Apply</a>
                                        </div>
                                    </div>
                                    <div class="bs-example " data-example-id="horizontal-dl">
                                        <dl class="dl-horizontal">
                                            <dt>Key Skills: </dt>
                                            <dd>Legal Litigation Arbitration Drafting Law Writs Tribunals High Court Suits Llb Appeals court Advocate associate firm mumbai cooperate appeal</dd>
                                            <dt>Job Description:  </dt>                                             <dd>Appearances in Bombay High Court, Arbitration Tribunals, Appellate Tribunals and other quasi-judicia..</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div><!--job-list-bg-->

                        <div class=" m10 li-he">
                            <div class="media jobmbg">
                                <div class="media-body">
                                    <div class="col-md-10">
                                        <h4 class="media-heading"><a href="job-detail-page.html?jid=31527838551" target="_blank">Immediate Requirement of Marketing Executive at Nagpur</a></h4>
                                        <small><em>Podar Education Network Pvt Ltd</em></small>
                                    </div>
                                    <div class="col-md-2">
                                        <!--
                                        <div class="save-job">
                                                                                        <a href="javascript:;" onclick="return save_job('31527838551','296');"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                                    </div>
                                        -->
                                        <!-- <div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                    </div>
                                    <div class="entry-meta mtop40">
                                        <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <a href="#"><span class="entry-date">
											   Serchhip												 </span></a></span>
                                            <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard"><a  href="#">0-10 YRS </a></span></span>

                                            <span class="comments-link"><!--<i class="fa fa-inr"></i>--> <a href="#" >2,00,000 - 10,00,000 P.A </a></span></div>
                                        <div class="col-md-2 text-right">
                                            <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31527838551" target="_blank">Apply</a>
                                        </div>
                                    </div>
                                    <div class="bs-example " data-example-id="horizontal-dl">
                                        <dl class="dl-horizontal">
                                            <dt>Key Skills: </dt>
                                            <dd>leaflets posters ,marketing campaigns, advertising market, research newsletters, cold calling, events ,exhibitions, marketing, executive business development, education institutional, marketing target, courses brochure</dd>
                                            <dt>Job Description:  </dt>                                             <dd>Effective communication.Target Oriented Target centered.Eye for details.Well versed in computing.Lia..</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div><!--job-list-bg-->

                        <div class=" m10 li-he">
                            <div class="media jobmbg">
                                <div class="media-body">
                                    <div class="col-md-10">
                                        <h4 class="media-heading"><a href="job-detail-page.html?jid=31527834595" target="_blank">Abroad Opportunities | Manager - Sales & Marketing</a></h4>
                                        <small><em>CN Immigration Services Pvt. Ltd</em></small>
                                    </div>
                                    <div class="col-md-2">
                                        <!--
                                        <div class="save-job">
                                                                                        <a href="javascript:;" onclick="return save_job('31527834595','296');"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                                    </div>
                                        -->
                                        <!-- <div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                    </div>
                                    <div class="entry-meta mtop40">
                                        <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <a href="#"><span class="entry-date">
											   Sirsa												 </span></a></span>
                                            <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard"><a  href="#">1-8 YRS </a></span></span>

                                            <span class="comments-link"><!--<i class="fa fa-inr"></i>--> <a href="#" >1,00,000 - 12,00,000 P.A </a></span></div>
                                        <div class="col-md-2 text-right">
                                            <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31527834595" target="_blank">Apply</a>
                                        </div>
                                    </div>
                                    <div class="bs-example " data-example-id="horizontal-dl">
                                        <dl class="dl-horizontal">
                                            <dt>Key Skills: </dt>
                                            <dd>sales management, marketing, marketing executive, sales manager, sales executive, sales officer, marketing manager, business development manager</dd>
                                            <dt>Job Description:  </dt>                                             <dd>Marketing managers establish distribution networks for products and services, initiate market resear..</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div><!--job-list-bg-->

                        <div class=" m10 li-he">
                            <div class="media jobmbg">
                                <div class="media-body">
                                    <div class="col-md-10">
                                        <h4 class="media-heading"><a href="job-detail-page.html?jid=31527835351" target="_blank">Associate Editor ( Magazine / Newspaper / Journals )</a></h4>
                                        <small><em>Sphere TravelMedia & Exhibition Private Limited</em></small>
                                    </div>
                                    <div class="col-md-2">
                                        <!--
                                        <div class="save-job">
                                                                                        <a href="javascript:;" onclick="return save_job('31527835351','296');"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                                    </div>
                                        -->
                                        <!-- <div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                    </div>
                                    <div class="entry-meta mtop40">
                                        <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <a href="#"><span class="entry-date">
											   Karveripakkam												 </span></a></span>
                                            <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard"><a  href="#">0-10 YRS </a></span></span>

                                            <span class="comments-link"><!--<i class="fa fa-inr"></i>--> <a href="#" >1,00,000 - 10,00,000 P.A </a></span></div>
                                        <div class="col-md-2 text-right">
                                            <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31527835351" target="_blank">Apply</a>
                                        </div>
                                    </div>
                                    <div class="bs-example " data-example-id="horizontal-dl">
                                        <dl class="dl-horizontal">
                                            <dt>Key Skills: </dt>
                                            <dd>editorial proof, reading editing, magazines, social media, creative writing, journalism reader, transcription ,proofer, language editing blogs, sub editing, article writing</dd>
                                            <dt>Job Description:  </dt>                                             <dd>Selecting content, writing and editing for the magazine\\r\\nEnsuring content is replete with accura..</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div><!--job-list-bg-->

                        <div class=" m10 li-he">
                            <div class="media jobmbg">
                                <div class="media-body">
                                    <div class="col-md-10">
                                        <h4 class="media-heading"><a href="job-detail-page.html?jid=31527836914" target="_blank">Travel Expert for Ticketing and tour Management</a></h4>
                                        <small><em>THE STAR HOLIDAYS</em></small>
                                    </div>
                                    <div class="col-md-2">
                                        <!--
                                        <div class="save-job">
                                                                                        <a href="javascript:;" onclick="return save_job('31527836914','296');"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                                    </div>
                                        -->
                                        <!-- <div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                    </div>
                                    <div class="entry-meta mtop40">
                                        <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <a href="#"><span class="entry-date">
											   Astara												 </span></a></span>
                                            <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard"><a  href="#">0-8 YRS </a></span></span>

                                            <span class="comments-link"><!--<i class="fa fa-inr"></i>--> <a href="#" >2,00,000 - 15,00,000 P.A </a></span></div>
                                        <div class="col-md-2 text-right">
                                            <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31527836914" target="_blank">Apply</a>
                                        </div>
                                    </div>
                                    <div class="bs-example " data-example-id="horizontal-dl">
                                        <dl class="dl-horizontal">
                                            <dt>Key Skills: </dt>
                                            <dd>Travel Management, tourism management, ticketing management, gds management, Holiday Packages ,Flight ,Visa Counselling,International Travel</dd>
                                            <dt>Job Description:  </dt>                                             <dd>We are a Travel Agency working from Past 4 years . We need new candidates for our business for air t..</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div><!--job-list-bg-->

                    </div>  <!--our-stats-->


                    <div class="browse-cat ">
                    </div>

                </div>

                <div class="col-md-3" >
                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Profile Status </h3> <span class="badge markq" title="See how your profile on {{ env('APP_NAME') }} has performed over the last 30 days.">?</span>
                        </div>

                        <div class="create-job-content">
                            <div class="progress">

                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $user->profile_complete }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ $user->profile_complete }}%" >
                                    {{ $user->profile_complete }}%complete
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






        <!--POPUP- START-->

        <!--Edit Email-->
        <div id="editmail" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                        <div class="top-emp-center">
                            <h4>Edit Email</h4>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="tab-content  p10">
                            <form>
                                <div class="form-group">
                                    <label >Email address</label>
                                    <input type="email" name="eemail" id="eemail" class="form-control"  placeholder="Email Id" required="required">
                                </div>
                                <input type="submit" name="email_sub" class="btn btn-blue" value="Save">
                                <button type="submit" class="btn btn-blue" data-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--Edit Email-End-->


        <!--Edit Mobile-->
        <div id="editmobile" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                        <div class="top-emp-center">
                            <h4>Edit Mobile Number</h4>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="tab-content  p10">
                            <form>
                                <div class="form-group">
                                    <label >Mobile</label>
                                    <input type="Text" name="emobile" id="emobile"class="form-control" required="required">
                                </div>
                                <input type="submit" name="mob_submit" class="btn btn-blue" value="save" />
                                <button type="submit" class="btn btn-blue" data-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Edit Mobile-End-->



        <!--Edit Photo-->

        <div id="myModal" class="modal fade" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <a href="jobseeker-profile.php" class="close" >&times;</a>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> &times; </button>-->
                        <!--<button type="button" class="close" onClick="hide()">&times;</button>-->
                        <div class="top-emp-center">
                            <h4>Upload your Latest Photo</h4>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="tab-content  p10">
                            <div class="media">
                                <div class="media-left3 p20">
												  <span id="upload_area">
																										<img src="images/profileimg.png" alt="seeker"/>
																									  </span>
                                    <!-- <a href="#"> <img src="images/profileimg.png" alt="recruiter"></a>-->
                                    <div class="pbott text-center"> <!-- <button type="button" class="btn btn-primary btn-no">Delete Photo</button>-->
                                        <a href="jobseeker-profile.php?del"><button type="button" class="btn btn-primary btn-no">Delete Photo</button></a></div>
                                </div>
                                <div class="media-body">
                                    <div class="col-md-12">
                                        <form name="register" id="register" method="post" action="" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <input type="hidden" name="filename" value="filename" />
                                                <label >File input</label>
                                                <input type="file" name="filename" id="filename" onChange=" ajaxUpload(this.form,'ajaxupload.php?filename=name&amp;maxSize=9999999999&amp;maxW=4288&amp;fullPath=profile_photo/&amp;relPath=profile_photo/&amp;colorR=255&amp;colorG=255&amp;colorB=255&amp;maxH=2848','upload_area','File Uploading Please Wait	...&lt;br /&gt;&lt;img src=\'images/loader_light_blue.gif\' width=\'128\' height=\'15\' border=\'0\' /&gt;','&lt;img src=\'images/error.gif\' width=\'16\' height=\'16\' border=\'0\' /&gt; Error in Upload, check settings and path info in source code.'); return false;" />
                                                <p class="help-block">Supported file format : png, jpg, jpeg, gif - upto
                                                    1 MB
                                                    Uploading a new photo will replace the existing photograph.</p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>  <!--media-->
                            <div class="col-md-12">
                                <em class="ftb12">By uploading your photograph, you certify that jobs.com has the right to display this photograph to the recruiters and that the uploaded file does not violate our <a href="terms.html" target="_blank">Terms of Service</a>. </em></div>
                        </div><!--tab-content -->

                    </div>
                </div>
            </div>
        </div>
        <!--Edit Photo- End-->
        <!--POPUP- END-->




    </div>
@endsection
