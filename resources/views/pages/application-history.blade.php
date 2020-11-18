@extends('layouts.master')

@section('content')

    <!-- CONTENT -->
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

                </div><!--col-sm-2-->

                <div class="col-md-7 m10" >
                    <div class="top-emp-center">
                        <h4> Application History</h4>
                    </div> <!--top-emp-center-->

                    <p class="m10 text13">You have applied to the following jobs in the last 30 days: </p>
                    <!-- <div class="text-right"> <div class="inboxa"><i class="fa fa-print"></i> <a href="#"> Print Application History</a></div></div>-->

                    @if(count($applications) > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="col-md-8">Job Detail</th>
                                <th class="col-md-2">Applied Date</th>
                                <th class="col-md-2">Posted Date</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($applications as $item)

                            <tr>
                                <td>
                                    <div class="media-body">
                                        <div class="col-md-12">
                                            <h4 class="media-heading c23"><a href="{{ route('jobs.job.view', optional($item->job)->slug) }}">{{ optional($item->job)->title }}</a></h4>
                                            <small><em>{{ optional($item->job->company)->name }}</em></small>
                                        </div>

                                        <div class="entry-meta mtop40">
                                            <div class="col-md-12 m10"> <span class="posted-on"><i class="fa fa-map-marker"></i> <a href="#"><span class="entry-date">{{ $item->job->city }} </span></a></span> <span class="byline"> <i class="fa fa-suitcase"></i> <span class="author vcard">
                                                        <a href="#">{{ $item->job->experience_from }}-{{ $item->job->experience_to }} YRS </a></span></span>
                                                <span class="comments-link"><i class="fa fa-yen"></i> <a href="#">{{ $item->job->salary }}</a></span></div>
                                        </div>
                                        <div class="bs-example " data-example-id="horizontal-dl">
                                            <dl class="dl-horizontal">
                                                <dt>Job Description:  </dt>
                                                <dd>
                                                {!! $item->job->short_description !!}
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <!-- <div class="botlink7"><a href="#">View Similar Jobs</a> >> <a href="#">Database Arch</a>... <a href="#">Applicant Comparison</a></div>-->
                                    <div class="datee2 text-right ">Posted Date: {{ $item->job->created_at->format('M d, Y') }}</div>
                                </td>
                                <td>{{ $item->created_at->format('M d, Y') }}</td>
                                <td>{{ optional($item->job)->created_at->format('M d, Y') }}</td>

                            </tr>

                            @endforeach


                            </tbody>
                        </table>
                    </div>
                    @else
                        <div class=" tab-content">

                            <div class='newpagination text-center'>
                               You have not applied for any job yet
                            </div>
                        </div>
                    @endif


                </div><!--col-sm-7-->


                @include('pages.partials.right_sidebar')

            </div><!--row-->
        </div><!-- container -->


    </div><!-- CONTENT -->

@endsection
