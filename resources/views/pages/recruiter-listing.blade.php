@extends('layouts.master')


@section('content')

    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home </a></li>
                <li class="active"> Recruiters </li>
            </ol>
            <div class="row">

                <div class="col-md-9" >
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <strong>Successful!</strong> {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="top-emp-center">
                        <h4> Recruiters in Top Companies</h4>
                    </div> <!--top-emp-center-->
                    <div class="tab-content m20 p20">
                        <div class="row">
                            <div class="col-sm-12 pcrous">

                                <div class="owl-carousel logos">

                                    @foreach ($companies as $item)
                                        <div>
                                            <a href="{{ route('company.jobs',$item->slug) }}">
                                            <img style="height: 40px" src="{{ asset($item->logo) }}" alt="{{ $item->name }}">
                                            </a>
                                        </div>
                                    @endforeach


                                </div><!-- owl-carousel -->

                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!--tab-content-->

                    <div class="top-emp-center">
                        <h4> Top Recruiters</h4>
                    </div> <!--top-emp-center-->
                    <div class="browse-cat2 ">
                        <ul class="nav nav-tabs">
                            <!-- <li class="active"><a href="#tab-1-7" data-toggle="tab" aria-expanded="true">All Sectors </a></li> -->
                            @foreach(array_slice($industries->toArray(),0,5) as $item => $key)

                            <li class=""><a href="{{ route('jobsearch') }}?category={{$key}}">{{ $item }} </a></li>
                            @endforeach
                        </ul>
                        <div class="tab-content  bgno1">
                            <div class="tab-pane fade active in" id="tab-1-7">

                                @foreach($users as $user)
                                <div class="media mbg">
                                    <div class="row">
                                        <div class=" col-md-2">
                                            <a href="{{ route('recruiter.profile',$user->username) }}">
                                                <img src="{{ asset($user->avatar) }}" alt="{{ $user->username }}">
                                            </a>
                                        </div>

                                        <div class="col-md-10">
                                            <div class="media-body">
                                                <div class="recru-name">

                                                    <a href="{{ route('recruiter.profile',$user->username) }}"> {{ $user->name }}</a><br>
                                                    <span class="re-pos">  </span><br>
                                                    <span class="pright15">  <i class="fa fa-suitcase"></i> {{ optional($user->company)->name }} </span>
                                                    <span class="re-pos"><i class="fa fa-map-marker"></i> {{ optional($user->company)->city }} </span>
                                                    <dl class="dl-horizontal">
                                                        <dt>Skills/Roles I hire for :  </dt>
                                                        <dd>  Architects and Interior Designers required with a minimum experience of 2-5 years. Should be well...</dd>
                                                    </dl>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mtop10">
                                        <div class="col-md-7">
                                            <div class=" max-m ">
                                                <div class="post-na2  text-center">
                                                    <div id="folw1" >
                                                        <!--<a href="javascript:;" onclick="alert('Please Login to follow')"><input class="btn-blue btn" value="Follow" type="button"></a>-->

                                                    </div></div>
                                                <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#{{ $user->id }}">Send Message</a></div></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-right">							<div class="botlink3" >
                                                <a href="{{ route('company.all.jobs', optional($user->company)->id) }}">{{ optional($user->company)->activeJobs() }} active jobs</a>
                                                <span class="bocol" >|</span> Last active on {{ $user->lastLoginAt() }}</a>  </div>
                                        </div>
                                    </div>
                                </div><!--media mbg-->

                                    <div class="modal fade" id="{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
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

                                @endforeach


                            </div><!-- tab-pane -->

                        </div><!--tab-content-->
                    </div><!--browse-cat2-->







                </div><!--col-sm-9-->


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
{{--                                    <div class="post-na3"><div><a href="#" data-toggle="modal" data-target="#recruiter-listing-send-message" onclick="return send_mail('test','anu93info@gmail.com');">Send Message</a></div></div>--}}
                                </div>
                            </div><!--media-->
                            @endforeach
                        </div><!--create-job-content-->
                    </div><!--create-job-->

                </div><!--col-sm-3-->

            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->

@endsection
