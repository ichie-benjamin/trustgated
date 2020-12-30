@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dev.css') }}">
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
                        <!--<li class="active">Sub user Management</li>-->
                    </ol>
                </div>

                @include('employer.partials.sidebar')

                <div class="col-md-9" >
                    <div class="top-emp-center">
                        <h4><!--Sub user Management--></h4>
                    </div> <!--top-emp-center-->
                    <div style="color:#009900; padding:5px; font-family:'Times New Roman', Times, serif; font-style:italic;">
                    </div>
                    <div class="col-md-8">
                        <div class="box radius" style="margin-left:3px; ">
                            <div class="innerpadding">
                                <h6 style="margin: 0;">Title : {{ $job->title }}</h6>
                            </div>



                            <div class="clear">&nbsp;</div>

                        </div>

                        <div class="clear">&nbsp;</div>
                        <hr class="noshade">

                        <div class="box radius" style="margin-left: 4px; width:99.3%;">
                            <div style="padding:9px;">
                                <h6>Description</h6>
                                <hr>
                                <strong class="text-justify">
                                    {{ $job->description }}
                                </strong>
                                <hr>

                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            Industry
                                        </td>
                                        <td width="74%">
                                            {{ optional($job->industry)->category }}	</td>
                                    </tr>

                                    <tr>
                                        <td width="25%">
                                            State
                                        </td>
                                        <td width="74%">
                                            {{ $job->state }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="25%">
                                            Experience
                                        </td>
                                        <td width="74%">
                                            {{ $job->experience_from }} - {{ $job->experience_to }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="25%">
                                            Functional Area
                                        </td>
                                        <td width="74%">
                                          {{ optional($job->functional)->category_functional_area}}			</td>
                                    </tr>
                                    <tr>
                                        <td width="25%">
                                            Qualification
                                        </td>
                                        <td width="74%">
                                            @foreach ($job->qualification as $item)
                                                {{ $item }},
                                            @endforeach
                                            		</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <hr class="noshade">

                        <div class="box box-shadow radius" style="margin-left: 4px; width:99.3%;">
                            <div style="padding:9px;">
                                <h6>Company Details</h6>
                                <hr>
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            Company Name
                                        </td>
                                        <td width="74%">
                                            {{ $job->company->name }}				</td>
                                    </tr>

                                    <tr>
                                        <td width="25%">
                                            Website
                                        </td>
                                        <td width="74%">
                                            <a href="#" target="_blank">{{ optional($job->company)->website }}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="25%">
                                            Contact Person
                                        </td>
                                        <td width="74%">
                                            {{ optional($job->company)->contact_person }}				</td>
                                    </tr>
                                    <tr>
                                        <td width="25%">
                                            Telephone
                                        </td>
                                        <td width="74%">
                                            {{ optional($job->company)->phone }}			</td>
                                    </tr>
                                    <tr>
                                        <td width="25%">
                                            Address
                                        </td>
                                        <td width="74%">
                                            {{ optional($job->company)->address }}			</td>
                                    </tr>
                                    <tr>
                                        <td width="25%">
                                            Mail Id
                                        </td>
                                        <td width="74%">
                                            <a href="mailto:{{ optional($job->company)->email }}?Subject=Enquiry about the job - {{ $job->title }}" target="_blank"> {{ optional($job->company)->email }}	</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <hr class="noshade">

                        {{-- <div class="box radius" style="margin-left: 4px; width:99.3%;">
                            <div style="padding:9px;">
                                <h6>Candidate Information</h6>
                                <hr>
                                <table width="100%">
                                    <tr>
                                        <td width="25%" valign="top">
                                            Key Skills
                                        </td>
                                        <td width="74%">
                                            QUICK				</td>
                                    </tr>
                                </table>
                            </div>
                        </div> --}}

                        <hr class="noshade">

                        <div class="box radius" style="margin-left: 4px; width:99.3%;">
                            <div style="padding:9px;">
                                <h6>General Information</h6>
                                <hr>
                                <table width="100%">
                                    <tr>
                                        <td width="25%" valign="top">
                                            Job Posted
                                        </td>
                                        <td width="74%">
                                            {{ $job->created_at->format('M d, Y') }}			</td>
                                    </tr>
                                    <tr>
                                        <td width="25%" valign="top">
                                            Post Expires on
                                        </td>
                                        <td width="74%">
                                            {{ $job->closing_date->format('M d, Y') }}
                                            		</td>
                                    </tr>

                                </table>
                            </div>
                        </div>

                        <hr class="noshade">

                        <div class="box radius" style="margin-left: 4px; width:99.3%;">
                            <div style="padding:9px; text-align:center;">
                                <a href="{{ route('jobs.edit',$job->slug) }}" class="gobtn toosmallbtn">Edit</a>
                                &nbsp;&nbsp;
                                {{-- <a href="#" class="gobtn toosmallbtn" onClick="return confirm('Do you realy want to delete this job ?');">Delete</a> --}}
                            </div>
                        </div>

                        <p>&nbsp;</p>
                    </div>
                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
    @endsection
