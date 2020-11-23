@extends('admin.layouts.admin-app')

@section('style')
    @include('admin.partials.dt-css')
@endsection

@section('js')
    @include('admin.partials.dt-js')
@endsection

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>

            </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Jobs List</h4>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                @include('notification')
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10" style="padding-bottom: 50px">Jobs List
{{--                    <a href="{{ route('admin.jobs.create') }}"><button class="btn btn-success" style="float: right"> Add New</button></a>--}}
                </h6>
                <div class="table-wrapper table-responsive">
                    <table id="datatable1" class="table table-condensed table-bordered display responsive nowra">
                        <thead>
                        <tr>
                            <th class="">S/N</th>
                            <th class="wd-20p">Title</th>
                            <th class="wd-10p">Industry</th>
                            <th class="wd-15p">Company</th>
                            <th class="wd-15p">Date Posted</th>
                            {{-- <th class="wd-20p">Keywords</th> --}}
                            <th class="wd-10p">Response</th>
                            <th class="wd-20p">Action</th>
                            {{--                            <th></th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        <input type="hidden" value="{{ $i=1 }}">
                        @foreach ($jobs as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->title }}
                                <br>
                                @if($item->is_active)
                                <span class="badge badge-success">Activated</span>
                                @else
                                <span class="badge badge-danger">Not Active</span>
                                @endif
                                </td>
                                <td>{{ optional($item->industry)->category }}</td>
                                <td>{{ optional($item->company)->name }}</td>
                                <td>{{ $item->created_at->format('d-M-Y')}}</td>
                                {{-- <td>{{ $item->keywords }}</td> --}}
                                <td>{{ count($item->applied_job) }}</td>


                                <td class="p-1">
                                    <form method="POST" action="{!! route('jobs.destroy', $item->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group justify-center" role="group">
                                            <a href="{{ route('jobs.show', $item->slug ) }}" target="_blank" class="btn btn-info btn-sm" title="Public View">
                                                <span class="fa fa-eye" aria-hidden="true"></span>
                                            </a>
                                            @if ($item->is_active)
                                            
                                                <a href="{{ route('admin.jobs.toggle_disabled', $item->slug) }}" class="btn btn-warning btn-sm" title="deactivate job">
                                                    <span class="fa fa-remove" aria-hidden="true"></span>
                                                </a>
                                            @else
                                            <a href="{{ route('admin.jobs.toggle_disabled', $item->slug ) }}" class="btn btn-success btn-sm" title="activate job">
                                                <span class="fa fa-check" aria-hidden="true"></span>
                                            </a>
                                            @endif

                                            <a href="{{ route('admin.jobs.edit', $item->slug ) }}" class="btn btn-primary btn-sm" title="Edit Job">
                                                <span class="fa fa-edit" aria-hidden="true"></span>
                                            </a>

                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Job" onclick="return confirm(&quot;Click Ok to delete Job.&quot;)">
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

                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div><!-- table-wrapper -->





            </div>

@endsection
