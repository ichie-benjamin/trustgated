@extends('layouts.master')


@section('content')
    <div id="content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home </a></li>
                <li><a href="#"> Recruiters  </a></li>
                <li class="active">{{ $user->name }}</li>
            </ol>
            <div class="row">

                <div class="col-md-9" >
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="top-emp-center">
                        <h4>{{ $user->name }}</h4>
                    </div> <!--top-emp-center-->
                    <div class="tab-content m20 p20">

                        <div class="media">
                            <div class="media-left2 p20">

                                <!-- <img  src="images/recruiter.jpg" alt="recruiter">-->
                                <a href="#">
                                    <img style="height: 150px; width: 80px" src="{{ $user->avatar }}" alt="re">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="col-md-12" >
                                    <h4 class="media-heading mtop15 fontw"><a href="#"></a></h4>
                                    <div class="ff12"><i class="fa fa-user"></i> {{ $user->name }}</div>
                                    <div class="ff12"><i class="fa fa-map-marker"></i> {{ optional($user->company)->name }} </div>
                                    <div class="ff12"><i class="fa fa-suitcase"></i> {{ optional($user->company)->activeJobs() }} Active Jobs</div>
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
                            <div class="post-na5">{{ optional($user->company)->name }}</div>
                            <div class="ff12">Roles I hire for:</div>
                            IT- Application- Oracle ERP., Manager Media Sales (print & Digital) - Grehlakshmi & Cricket Today.

                        </div><!--media-body-->
                        <div class="col-md-12 text-right"> <div class="viewal"></div> </div>
                    </div><!--tab-content-->

                    <div class="browse-cat ">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-1-5" data-toggle="tab" aria-expanded="true">  I am currently hiring for ({{ optional($user->company)->activeJobs() }} job(s))  </a></li>
{{--                            <li class=""><a href="#tab-1-6" data-toggle="tab" aria-expanded="false"> Positions i have managed in the past (8 jobs) </a></li>--}}
                        </ul>


                    </div>
                </div>

                <div class="col-md-3" >


                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Recent Recruiters</h3>
                        </div>
                        <div class="create-job-content">
                            @foreach($top_recruiters as $user)
                                <div class="media bor-bott">
                                    <div class="media-left">
                                        <a href="{{ route('recruiter.profile',$user->username) }}" target="_blank" >
                                            <img src="{{ asset($user->avatar) }}" alt="{{ $user->username }}">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recru-name">
                                            <a href="{{ route('recruiter.profile',$user->username) }}"> {{ $user->name }}</a><br>
                                            <span class="re-pos">  </span><br>
                                            <span class="pright15">  <i class="fa fa-suitcase"></i> {{ optional($user->company)->name }} </span>
                                            <span class="re-pos"><i class="fa fa-map-marker"></i> {{ optional($user->company)->city }} </span>
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
                            @endforeach
                        </div><!--create-job-content-->
                    </div><!--create-job-->

                </div><!--col-sm-3-->
            </div>
        </div>
    </div>


    <div class="modal fade" id="recruiter-listing-send-message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #017BC6; text-align:center;">
                    <button type="button" style="color:#FFF;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 style="color:#FFF; font-weight:bold;" class="modal-title" id="exampleModalLabel">Send Message To :
                        {{ $user->name }}</h4>
                </div>
                <form action="{{ route('mail.employer') }}" method="post">
                    @csrf

                    <div class="modal-body">

                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Email ID:</label>
                            <input required type="text" class="form-control" id="recipient-name" name="sender" value="">
                            <input type="hidden" name="mail" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Message:</label>
                            <textarea required class="form-control" id="message-text" name="message"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="sub-text" class="control-label">Subject:</label>
                            <textarea required class="form-control" id="sub-text" name="subject"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">

                        <input type="submit" class="btn-blue btn bc" name="send_mail" value="Send message"/>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
