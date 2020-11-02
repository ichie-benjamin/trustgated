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

                </div>
                <div class="col-md-7">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <strong>Successful!</strong> {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div style="text-align:center;">
                    </div>
                    <div class="top-emp-center">
                        <h4>{{ $user->name }}</h4>

                    </div> <!--top-emp-center-->

                    <div class="row">
                        <div class="profile-bg">
                            <ul>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profiles <b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu nu">
                                        <li>
                                            <!--<a href="#">Technical Architect </a>-->
                                            <span> Functional Area :</span>
                                            {{ $user->function_area }}
                                            <span>| Exp:</span>{{ $user->exp }} <br>
                                            <span class="grytxta">Last Updated on:</span>
                                            {{ $user->updated_at->diffForHumans()  }}
                                        </li>
                                        <li class="divider"></li>

                                    </ul>
                                </li>
                            </ul>

                            <ul> |</ul>
                            <ul>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cover Letter <b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu nu">

                                        <li class="divider"></li>
                                        <li>
                                            <div class="jselink"><span><a href="#">Create New Cover Letter</a></span> |
                                                <span><a href="#"> Manage Cover Letters</a></span></div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="tab-content  p10">

                        <div class="media">
                            <div class="media-left3 p10">

                                <a href="#" data-toggle="modal" data-target="#myModal"> <img src="{{ $user->avatar }}"
                                                                                             alt="{{ $user->name }}"></a>
                                <div class="pbott text-center"><a href="#" data-toggle="modal" data-target="#myModal">
                                        Add/Edit Photo </a></div>
                            </div>
                            <div class="media-body">
                                <dl class="dl-horizontal">
                                    <dt class="text-left">Resume Headline :</dt>
                                    <dd>{{ $user->headline }}</dd>
                                    <dt class="text-left">Designation :</dt>
                                    <dd></dd>
                                    <dt class="text-left">Company :</dt>
                                    <dd></dd>
                                    <dt class="text-left">Experience :</dt>
                                    <dd>{{ $user->exp }}</dd>
                                    <dt class="text-left"> Location :</dt>
                                    <dd>{{ $user->location() }}</dd>
                                    <dt class="text-left">Job Applied :</dt>
                                    <dd>( 6 )</dd>
                                    <dt class="text-left">Key Skills :</dt>
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


                    <div class="row">
                        <div class="col-md-6 mbot20">
                            <!-- <input class="btn-blue btn bc" value="View and Update Profile " type="button">-->
                            <a href="{{ route('jobseeker.profile') }}" class="btn-blue btn bc">View and Update</a>
                            <div class="save-job">
                                <span>Last updated on {{ $user->updated_at->diffForHumans()  }} </span></div>
                        </div>
                        <div class="col-md-6 mbot20 text-right">

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


                        @foreach($jobs as $job)
                            @include('pages.partials.job_item', ['job' => $job])
                        @endforeach


                        @if (count($jobs) < 1)
                            <div class=" tab-content">

                                <div class='newpagination text-center'>
                                    No Job Found
                                </div>
                            </div>

                        @endif


                    </div>  <!--our-stats-->


                    <div class="browse-cat ">
                    </div>

                </div>

                <div class="col-md-3">
                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Profile Status </h3> <span class="badge markq"
                                                            title="See how your profile on {{ env('APP_NAME') }} has performed over the last 30 days.">?</span>
                        </div>

                        <div class="create-job-content">
                            <div class="progress">

                                <div class="progress-bar progress-bar-success" role="progressbar"
                                     aria-valuenow="{{ $user->profile_complete }}" aria-valuemin="0" aria-valuemax="100"
                                     style="width:{{ $user->profile_complete }}%">
                                    {{ $user->profile_complete }}%complete
                                </div>


                            </div>
                            <div class="add indx"><span class="bocol">Pending : </span>Profile Image,Keyskills,Resume
                            </div>

                        </div>

                    </div><!--create-job-->

                    <div class="create-job">
                        <div class="create-job-head">
                            <h3>Profile Performance</h3> <span class="badge markq" title="Profile performance">?</span>
                        </div>
                        <div class="create-job-content">
                            <div class="pt10">
                                <ul class="pp">
                                    <li class="bdrLN"><a class="curDef">2</a>
                                        <div>Views</div>
                                    </li>
                                    <li class="w88"><a class="curDef">0</a>
                                        <div>Downloads</div>
                                    </li>
                                    <li class="bdrRN"><a class="curDef">0</a>
                                        <div>Contacts</div>
                                    </li>
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
                                You have applied for <span class="pbott"><a href="application-history.php"><b>5 Jobs</b></a> </span>
                                in last 30 days<br>
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
                                <input class="btn-blue btn bc" data-toggle="modal" data-target="#createjob"
                                       value="Create Another Job Alert " type="button">
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

                            <div class="add mbt"> Find jobs in companies your friends work in</div>
                            <div class=" text-left m10"><a href="#"> <img src="images/fconnect.png"
                                                                          alt="facebook connect"> </a></div>
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
                                    <label>Email address</label>
                                    <input type="email" name="eemail" id="eemail" class="form-control"
                                           placeholder="Email Id" required="required">
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
                                    <label>Mobile</label>
                                    <input type="Text" name="emobile" id="emobile" class="form-control"
                                           required="required">
                                </div>
                                <input type="submit" name="mob_submit" class="btn btn-blue" value="save"/>
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
                        <a href="{{ route('jobseeker.profile') }}" class="close">&times;</a>
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
																										<img
                                                                                                            src="{{ auth()->user()->avatar }}"
                                                                                                            alt="{{ auth()->user()->username }}"/>
																									  </span>
                                    <!-- <a href="#"> <img src="images/profileimg.png" alt="recruiter"></a>-->
                                    <div class="pbott text-center">
                                        <!-- <button type="button" class="btn btn-primary btn-no">Delete Photo</button>-->
                                        {{--                                        <a href="jobseeker-profile.php?del"><button type="button" class="btn btn-primary btn-no">Delete Photo</button></a>--}}
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="col-md-12">
                                        <form name="register" id="register" method="post" action="{{ route('user.update.avatar') }}"
                                              enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                <div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose Image
     </a>
   </span>

                                                    <input id="thumbnail" required class="form-control" type="hidden"
                                                           name="avatar">
                                                </div>

                                                <div id="holder" style="margin-top:15px; margin-bottom:20px;max-height:200px;"></div>

                                                <input type="submit" class="btn btn-success" value="Update" />

                                                <p class="help-block">Supported file format : png, jpg, jpeg, gif - upto
                                                    1 MB
                                                    Uploading a new photo will replace the existing photograph.</p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>  <!--media-->
                            <div class="col-md-12">
                                <em class="ftb12">By uploading your photograph, you certify that jobs.com has the right
                                    to display this photograph to the recruiters and that the uploaded file does not
                                    violate our <a href="{{ route('terms') }}" target="_blank">Terms of Service</a>. </em></div>
                        </div><!--tab-content -->

                    </div>
                </div>
            </div>
        </div>
        <!--Edit Photo- End-->
        <!--POPUP- END-->


    </div>
@endsection

@section('js')

    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

    <script>
        $('#lfm').filemanager('image');
    </script>

@endsection
