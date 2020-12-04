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
                            Job Tittle : <strong>{{ $job->title }}</strong>
                        </div>
                        <div class="top-emp-center">
                            <h4>Candidate Manager</h4>
                        </div>
                        <br />
                        <hr class="blue" style="margin: -7px 0px 7px 0px;" />



                        <br/>

                            <div class="candidatelist table-responsive procinfobar " style="">
                                <p><strong>List of Applications For This Job</strong></p>

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


                                    @foreach($applied as $item)
                                        <div class="col-md-12">

{{--                                    <div class="col-md-1"><input type="checkbox" name="check[]" value="104" /></div>--}}
                                    <div class="col-md-3">
                                        <strong>Key Skill :</strong> (
                                        {{ $item->user->skills }} )<br>
                                        <strong>Experience :</strong> {{ $item->user->exp }}<br>
{{--                                        <strong>Last Active on :</strong>--}}
{{--                                        Monday Nov,09th 2020--}}
                                        <br>
                                        <strong>Applied on :</strong>{{ $item->created_at->format('D M, Y') }}       </div><!--col-md-2------------------------------>
                                    <div class="col-md-3">

                                        <strong></strong>
                                        <strong>Qualification :</strong>
                                        {{ $item->user->basic_education }}			<br>
                                        <strong>Functional Area :</strong>
                                        {{ $item->user->functional_area }}			<br>

                                    </div><!--col-md-3------------------------------>
                                    <div class="col-md-3">
                                        <strong>Name :</strong>  {{ $item->user->name }}	  <br>
                                        <strong>Email :</strong>  xxxxxxxxxxxxxxxx	<br>
                                        <strong>Mobile :</strong>  xxxxxxxxxxxxxxx	 <br>
                                        <strong>Address :</strong>   {{ $item->user->address }}     </div><!--col-md-3------------------------------>
                                    <div class="col-md-3">

                                        <a href="{{ route('user.profile.public', $item->user->username) }}">View Profiles</a>
                                        <br>
                                        <hr class="noshade">
                                        <br/>
                                        <a href="{{ route('user.resume.download',$item->user->username) }}"><!--href='resume_download.php?resume=resume/1604235212_Antoine App Timeline.pdf'>-->
                                            Resume
                                        </a>

                                    </div><!--col-md-2------------------------------>
                                        </div>
                                    <div class="col-md-12">
                                        <hr />
                                    </div>


                                    @endforeach

                                </div><!--col-md-12--------------------------------------->


                            </div>

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
