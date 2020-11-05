@extends('layouts.master')

@section('content')
    <div id="content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
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
                                    <dd>( {{ $user->allApplied() }} )</dd>
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

                @include('layouts.partials.jobseeker-right')

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
