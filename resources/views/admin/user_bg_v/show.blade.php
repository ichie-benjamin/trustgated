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
            <a class="breadcrumb-item" href="{{ route('admin.background.submissions') }}"> Background Verification Submissions</a>
{{--            <span class="breadcrumb-item active">Background Verification Submissions</span>--}}
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">{{ $item->user->name }} Background Verification Submission
        <a href="{{ route('admin.background.approve',$item->id) }}" class="float-right btn btn-success">Approve</a>
        </h4>
    </div>

    <div class="br-pagebody">

        @include('notification')
    </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="row">
                <div class="col-md-6">
                    <h4 class="tx-gray-800 tx-uppercase tx-bold tx-20 mg-b-10 mt-4 text-center">Employment Details </h4>

                    <div class="table-wrapper ">
                        <table  class="table table-condensed table-bordered responsive">
                            <tbody>
                            @foreach($item['employments'] as $key => $value)
                            <tr>
                                <td class="text-capitalize">{{ str_replace('_',' ',$key) }}</td>
                                <td>{{ $value }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- table-wrapper -->

                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-20 text-center mg-b-10 mt-5">Educational Details </h6>

                    <div class="table-wrapper ">
                        <table class="table table-condensed table-bordered responsive">
                            <tbody>
                            @foreach($item['educations'] as $key => $value)
                                <tr>
                                    <td class="text-capitalize">{{ str_replace('_',' ',$key) }}</td>
                                    <td>{{ $value }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- table-wrapper -->

                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-20 text-center mg-b-10 mt-5">References</h6>

                    <div class="table-wrapper ">
                        <table class="table table-condensed table-bordered responsive">
                            <tbody>
                            @foreach($item['reference'] as $key => $value)
                                <tr>
                                    <td class="text-capitalize">{{ str_replace('_',' ',$key) }}</td>
                                    <td>{{ $value }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- table-wrapper -->
                </div>
                </div>


    </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

@endsection
