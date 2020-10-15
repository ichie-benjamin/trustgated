@extends('layouts.master')

@section('content')
    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="employer-profile-view.php">My Account</a></li>
                        <li class="active">Change Password</li>
                    </ol>
                </div>

                <div class="col-md-3">
                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> My Home</h3>
                        </div>
                        <div class="create-job-content">
                            <div class="inbox-bg" onclick="return menu_click1();">Administration</div>
                            <!--<div class="inboxa"><a href="#">Product Settings</a></li> -->
                            <div id="show1">
                                <div class="inboxa"><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/sub_user_managment.html" >Manage Sub-Users</a></div>
                                <!--<li><a href="emp_resume_pack.php?id=91">Set Access Time</a></li>-->
                                <div class="inboxa"><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/emp_transaction.html" >Subscription Status</a></div>
                                <div class="inboxa"><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/emp_resume_pack.html"  >Product Settings<!--Resume Pack--></a></div>
                                <div class="inboxa"><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/employer-profile-view.html"  >Company profile</a></div>
                                <!--<div class="inboxa"><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/emp_folders.html" >Manage personal folder</a></div>-->
                                <div class="inboxa"><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/changepassword.html"  style="color:#00CCFF" >Change Password</a></div>
                            </div>
                            <div class="inbox-bg">Search Resumes</div>
                            <div class="inboxa"><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/emp_resumeaccess.html?featured=yes" >Featured Resumes</a></div>
                            <!--<div class="inbox	a"><a href="emp_resumeaccess.php?viewall=yes">All Resumes</a></div>-->

                            <div class="inbox-bg">Jobs & Responses</div>
                            <div class="inboxa"><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/emp_find-candidate.html"  >Job Posted Responses</a></div>
                            <div class="inboxa"><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/emp_postjob.html" >Post Jobs</a></div>
                            <!--<li><a href="#" >Post Jobs to Campuses</a></li> -->
                            <div class="inboxa"><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/emp_postedjobs.html" >Response Manager</a></div>
                            <!--<li><a href="#" >Other Media Jobs</a></li>
                            <li><a href="#" >Upload Resumes</a></li> -->


                            <!-- <div class="inbox-bg">Profile</div>
                            <div class="inboxa"><a href="#">View Profile</a></div>
                            <div class="panel-titlea">
                            <a class="" role="button" data-toggle="collapse" href="#collapseListGroup1" aria-expanded="true" aria-controls="collapseListGroup1">
                            Update Profile
                            </a>
                            </div>
                            <div id="collapseListGroup1" class="panel-collapse collapse in" role="tabpanel"  aria-expanded="true">
                            <ul class="togg">
                            <li><a href="#"> Summary </a></li>
                            <li><a href="#">Employer/Designation</a></li>
                            <li><a href="#">Attached Resume</a></li>
                            <li><a href="#">Attached Resume</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">IT Skills</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">More Details</a></li>
                            </ul>
                            </div>
                            <div class="inboxa"><a href="#">Create/Manage Profiles</a></div>
                            <div class="inboxa"><a href="#">Profile Performance</a></div>
                            <div class="inboxa"><a href="#">Manage Cover Letters</a></div>
                            <div class="inboxa"><a href="#">Upload Photo</a></div>
                            <div class="inboxa"><a href="#">My Jobs Services</a></div>
                            <div class="inbox-bg">Jobs & Applications</div>
                            <div class="inboxa"><a href="#">Saved Jobs</a></div>
                            <div class="inboxa"><a href="#">Application History</a></div>
                            <div class="inbox-bg">Recruiters</div>
                            <div class="inboxa"><a href="#"> Jobs & Updates</a></div>
                            <div class="inboxa"><a href="#">Manage Following</a></div>
                            <div class="inboxa"><a href="#">RecruiterConnection</a></div>
                            <div class="inbox-bg">Settings</div>
                            <div class="inboxa"><a href="#">Visibility Settings</a></div>
                            <div class="inboxa"><a href="#">Communication Settings</a></div>
                            <div class="inboxa"><a href="#">Block Companies</a></div>
                            <div class="inboxa"><a href="#">Change Password</a></div> -->
                        </div><!--create-job-content-->

                    </div><!--create-job-->
                </div>

                <div class="col-md-9" >
                    <div class="top-emp-center">
                        <h4>Change Password</h4>
                    </div> <!--top-emp-center-->
                    <div style="color:#FF0000; padding:5px;">
                    </div>
                    <form class="form-horizontal m10">
                        <div class="row" >
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>Current Password:</label>
                                    <div class="col-sm-8">
                                        <input type="password" name="currentpass" class="form-control" required />
                                    </div>
                                </div><!--col-md-6-->
                            </div>
                            <div class="col-md-8" >
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>New Password:</label>
                                    <div class="col-sm-8">
                                        <input type="password" name="newpass" class="form-control" pattern=".{6,}" required />&nbsp;
                                        <span style="color:#FF0000; font-size:10px; font-style:italic">Minimum 6 letters</span>
                                    </div>
                                </div>
                            </div><!--col-md-6-->
                            <div class="col-md-8" >
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>New Password again:</label>
                                    <div class="col-sm-8">
                                        <input type="password" name="newpass2" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                            <!--col-md-12-->

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="col-sm-4 pedit"></label>
                                    <div class="col-sm-8">
                                        <input class="btn-blue btn form-control" name="changepass" value="SAVE" type="submit">
                                    </div>

                                </div> <!--col-md-6-->
                            </div> <!--col-md-12-->
                        </div>
                    </form>
                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div>
    <!-- CONTENT -->
@endsection
