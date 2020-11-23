@extends('layouts.master')


@section('content')

    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">


                @if(session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()->get('success_message') }}
                    </div>
                @endif

                @if(session()->has('unexpected_error'))
                    <div class="alert alert-danger">
                        {{ session()->get('unexpected_error') }}
                    </div>
                @endif



                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('employer.profile') }}">My Account</a></li>
                        <li class="active">Posted Jobs</li>
                    </ol>
                </div>

                @include('employer.partials.sidebar')


                <div class="col-md-9">
                    <a href="{{ route('jobs.deleted') }}" style="float:right; padding:5px;" class="btn-blue">TRASH</a>
                    <a href="{{ route('jobs.create') }}" style="float:right; padding:5px; margin-right: 5px;" class="btn-blue">ADD</a>
                    <div class="top-emp-center" style="margin-top: 10px">
                        <h4>Response Manager</h4>
                    </div> <!--top-emp-center-->
                    <div style="color:#009900; padding:5px; font-family:'Times New Roman', Times, serif; font-style:italic;">
                        <span style="color: #FF0000"><b>{{ $title }} </b></span>


                    </div>
                    <div class="table-responsive">


                        @if (count($jobs) < 1)
                            <div class="alert">
                                <p>No job Available</p>
                            </div>
                        @else
                                <table  class="table-responsive table table-bordered" style="border:1px solid #CCC; font-size:13px;">

                                    <tr style="background-color:#009900; color:#000; ">
                                        <td class="text-center"  style="border-right:2px solid #FFF; width: 20%;"><b>POSTED DATE & TIME</b></td>
                                        <td height="35"  class="text-center" style="border-right:2px solid #FFF;  width: 40%;"><b>JOB TITLE</b></td>
                                        <td height="35"  class="text-center" style="border-right:2px solid #FFF; width: 5%;"><b>Industry</b></td>
                                        <td height="35"  class="text-center" style="border-right:2px solid #FFF; width: 5%;"><b>State</b></td>
                                        <td class="text-center" style="border-right:2px solid #FFF; width: 5%;"><b>RESPONSES</b></td>
                                        <td class="text-center" style="border-right:2px solid #FFF; width: 25%;"><b>ACTION</b></td>
                                    </tr>

                                    @foreach($jobs as $job)
                                    <tr>
                                        <td height="35" class="text-center">{{ $job->created_at->format('M d, Y H:i:s') }}
                                            <br>
                                            @if (!$job->trashed())
                                                @if ($job->status == 'Active')
                                                    <span class="text-success">Active</span>
                                                @else
                                                    <span class="help-block">{{ $job->status }}</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td class="text-center"><a href="{{ route('jobs.show',$job->slug) }}">{{ $job->title }}</a>

                                        </td>

                                        <td class="text-center">{{ optional($job->industry)->category }}</td>
                                        <td class="text-center">
                                            {{ $job->state}}
                                            {{-- @foreach($job->locations as $item)
                                                {{ $item }},
                                            @endforeach --}}
                                        </td>
                                        @if(count($job->applied_job) > 0)
                                        <td class="text-center"><a href="{{ route('job.response',$job->id) }}" >{{ count($job->applied_job) }}</a></td>
                                            @else
                                                <td class="text-center">{{ count($job->applied_job) }}</td>
                                            @endif
                                        @if ($job->trashed())
                                            <td class="text-center">
                                                <form method="POST" action="{!! route('jobs.delete', $job->id) !!}" accept-charset="UTF-8">
                                                    {{ csrf_field() }}

                                                    <div class="btn-group justify-center" role="group">
                                                        <a href="{{ route('jobs.restore',[$job->slug,$job->id] ) }}" onclick="return confirm(&quot;Click Ok to restore Job.&quot;)" class="btn btn-success" title="Restore Job">
                                                            <span class="fa fa-refresh" aria-hidden="true"></span>
                                                        </a>

                                                        <button type="submit" class="btn btn-danger" title="Delete Job" onclick="return confirm(&quot;Deleted trash cant be recovered, click Ok to delete.&quot;)">
                                                            <span class="fa fa-trash" aria-hidden="true"></span>
                                                        </button>
                                                    </div>

                                                </form>
                                            </td>
                                        @else
                                            <td class="text-center">
                                                <form method="POST" action="{!! route('jobs.destroy', $job->id) !!}" accept-charset="UTF-8">
                                                    <input name="_method" value="DELETE" type="hidden">
                                                    {{ csrf_field() }}

                                                    <div class="btn-group justify-center" role="group">
                                                        <a href="{{ route('jobs.show', $job->slug ) }}" class="btn btn-info" title="Public View">
                                                            <span class="fa fa-eye" aria-hidden="true"></span>
                                                        </a>
                                                        @if ($job->is_disabled)
                                                            <a href="{{ route('jobs.toggle_disabled', $job->slug ) }}" class="btn btn-success" title="activate job">
                                                                <span class="fa fa-check" aria-hidden="true"></span>
                                                            </a>
                                                        @else
                                                            <a href="{{ route('jobs.toggle_disabled', $job->slug) }}" class="btn btn-warning" title="deactivate job">
                                                                <span class="fa fa-remove" aria-hidden="true"></span>
                                                            </a>
                                                        @endif

                                                        <a href="{{ route('jobs.edit', $job->slug ) }}" class="btn btn-primary" title="Edit Job">
                                                            <span class="fa fa-edit" aria-hidden="true"></span>
                                                        </a>

                                                        <button type="submit" class="btn btn-danger" title="Delete Job" onclick="return confirm(&quot;Click Ok to delete Job.&quot;)">
                                                            <span class="fa fa-trash" aria-hidden="true"></span>
                                                        </button>
                                                    </div>

                                                </form>
                                                {{--                                            <a href="emp_postedjobs.php?act_id=31602575081&act">--}}
                                                {{--                                                <img src="images/ico_active_1.png" width="20">--}}
                                                {{--                                            </a>--}}
                                                {{--                                            <a href="emp_postjob_edit.php?edit_id=31602575081" onClick="if(confirm('Do you want to edit this job')) { return true; } else { return false; }">--}}
                                                {{--                                                <img src="images/edit-1.gif" border="0" />--}}
                                                {{--                                            </a>--}}

                                                {{--                                            <a href="delete_posted_job.php?id=31602575081"><img src="images/delete-11.png" border="0" /></a>--}}

                                                {{--                                            <a href="javascript:void(0);" onclick = "alert('Job posted today only'); " title="Click to refresh"><img src="images/refresh.png" width="16" border="0"  /></a>--}}
                                                {{--                                       --}}

                                            </td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </table>
                        @endif
                    </div>
                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->

@endsection
