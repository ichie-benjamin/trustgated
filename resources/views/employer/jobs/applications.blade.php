@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="/assets/css/empdev.css" />
@endsection

@section('content')
<!-- CONTENT -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-0"></div>
            <div class="col-md-11">
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('employer.profile') }}">My Account</a></li>
                    <li class="active">Candidate Manager</li>
                </ol>
            </div>


            <div class="col-md-12">
                <div class="box radius" style="margin-left:3px; ">
                    <div class="innerpadding">
                        <div style="float:right; padding:5px 2px;">
                            Job Tittle : <strong>New Job</strong>
                        </div>
                        <div class="top-emp-center">
                            <h4>Candidate Manager</h4>
                        </div>
                        <br />
                        <hr class="blue" style="margin: -7px 0px 7px 0px;" />



                        <br/>
                        <form method='post' action='mail_preview.php' name='mailform' onSubmit='return ValidateForm()'>
                            <div class="candidatelist table-responsive procinfobar " style="">
                                <p><strong>List of Applicatipons For This Job</strong></p>
                                <h6 style="float:right;"><strong>folder1 Candidates Below</strong></h6>
                                <div class="clear">&nbsp;</div>


                                <style>
                                    .well {
                                        min-height: 30px !important;
                                        padding: 5px 0px !important;
                                        margin-bottom: 20px;
                                        background-color: #f5f5f5;
                                        border: 1px solid #e3e3e3;
                                        /* border-radius: 4px; */
                                        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
                                        box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
                                    }
                                </style>

                                <div class="col-md-12">
                                    <div class="well ">
{{--                                        <div class="col-md-1"><input type="checkbox" name="select_all_contacts" id="select_all_contacts" onClick="selectUnselect_contacts(this.form)" class="text1"/></div>--}}
                                        <div class="col-md-3" style="color:#337ab7"><strong>Candidate Summary</strong></div>
                                        <div class="col-md-3" style="color:#337ab7"><strong>Professional Details</strong></div>
                                        <div class="col-md-3" style="color:#337ab7"><strong>Personal Details</strong></div>
                                        <div class="col-md-2" style="color:#337ab7"><strong>Process</strong></div>
                                    </div>


                                    @foreach($users as $user)
                                        <div class="col-md-12">

{{--                                    <div class="col-md-1"><input type="checkbox" name="check[]" value="104" /></div>--}}
                                    <div class="col-md-3">
                                        <strong>Key Skill :</strong> (
                                        Nil )<br>
                                        <strong>Experience :</strong> Fresher<br>
                                        <strong>Last Active on :</strong>
                                        Monday Nov,09th 2020<br><strong>Applied on :</strong> Monday Nov,09th 2020       </div><!--col-md-2------------------------------>
                                    <div class="col-md-3">

                                        <strong></strong>
                                        <strong>Qualification :</strong>
                                        ug : B.E/ B. Tech				<br>
                                        <strong>Functional Area :</strong>
                                        Technical Architect				<br>

                                    </div><!--col-md-3------------------------------>
                                    <div class="col-md-3">
                                        <strong>Name :</strong> Varsha  <br>
                                        <strong>Email :</strong> Varsha@gmail.com <br>
                                        <strong>Mobile :</strong> 9841300660 <br>
                                        <strong>Location :</strong>        </div><!--col-md-3------------------------------>
                                    <div class="col-md-2">

                                        <a href="view_userprofile.php?uname=296" target="_blank">View Profile</a>
                                        <br>
                                        <hr class="noshade">


                                        <hr class="noshade">
                                        <!--<a href="resume/" target="_blank">Resume</a>-->
                                        <a><!--href='resume_download.php?resume=resume/1604235212_Antoine App Timeline.pdf'>-->
                                            Resume
                                        </a>

                                    </div><!--col-md-2------------------------------>

                                        </div>
                                    @endforeach

                                </div><!--col-md-12--------------------------------------->

                                <div class="col-md-12">
                                    <div class="col-md-6" style="margin:10px;">
                                        <table>
                                            <tr>
                                                <td>
                                                    <input type="hidden" name="jobid" value="31602575081">
                                                    <select name="movetofolder" id="movetofolder"  >
                                                        <option value="">Move to folder</option>
                                                        <option value="19">folder1</option>
                                                        <option value="20">folder2</option>
                                                        <option value="21">folder3</option>
                                                        <option value="22">folder4</option>
                                                        <option value="23">folder5</option>
                                                        <option value="24">folder6</option>
                                                        <option value="25">folder7</option>
                                                    </select>	</td><td><button type="submit" name="movefolder" class="gobtn toosmallbtn">Move now</button>
                                                </td><td>
                                                    <button type="submit" name="sendmail" class="gobtn toosmallbtn ">Send Mail</button>
                                                    <span style="float:right;">
				</span></td>
                                            </tr>
                                        </table>
                                        <table>
                                        </table>
                                    </div>
                                </div>



                            </div>
                        </form>
                    </div>

                    <div class="clear">&nbsp;</div>

                </div>
            </div>
            <!--col-sm-9-->
        </div><!--row-->
    </div><!-- container -->

</div><!-- CONTENT -->
<!--ADVANCED SEARCH POPUP-->

@endsection
