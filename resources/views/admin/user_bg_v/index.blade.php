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
{{--            <a class="breadcrumb-item" href="{{ route('admin.locations.index') }}"> Forms</a>--}}
            <span class="breadcrumb-item active">Background Verification Submissions</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Background Verification Submission</h4>
    </div>

    <div class="br-pagebody">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            @include('notification')
    </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"> Background Verification Submissions</h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display table-condensed table-bordered responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-5p"> S.No</th>
                            <th class="wd-30p">User Name</th>
                            <th class="wd-20p">User Type</th>
                            <th class="wd-20p">Package</th>
                            <th class="wd-10p">Payment</th>
                            <th class="wd-10p">Status</th>
                            <th class="wd-15p"> Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ optional($user->user)->name }}</td>
                            <td>{{ $user->user_type }}</td>
                            <td>{{ optional($user->package)->name }}</td>
                            <td>{{ $user->paid ? 'Paid' : 'Unpaid' }}</td>
                            <td>{{ $user->status }}</td>

                            <td class="text-center">
{{--                                <form method="POST" action="{!! route('admin.locations.destroy', $user->id) !!}" accept-charset="UTF-8">--}}
{{--                                    <input name="_method" value="DELETE" type="hidden">--}}
{{--                                    {{ csrf_field() }}--}}


                                @if ($user->approved)
                                    <a href="#" class="btn btn-success btn-sm">
                                        Approved
                                    </a>
                                @else
                                    <a href="{{ route('admin.background.submission', $user->id ) }}" class="btn btn-success btn-sm">
                                        Approve
                                    </a>
                                @endif


                                    <div class="btn-group justify-center" role="group">
                                        <a href="{{ route('admin.background.submission', $user->id ) }}" class="btn btn-primary btn-sm" title="View details">
                                            <span class="fa fa-eye" aria-hidden="true"></span>
                                        </a>

                                    </div>


{{--                                </form>--}}

                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div><!-- table-wrapper -->

    </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

@endsection
