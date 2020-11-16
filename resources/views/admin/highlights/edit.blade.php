@extends('admin.layouts.admin-app')

@section('style')
    <link href="{{ asset('lib/highlightjs/github.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{  route('admin.dashboard') }}">Dashboard</a>
            <span class="breadcrumb-item active"> Home Highlights</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Home Highlight</h4>
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Modify Home Highlight</h6>

            <form action="{{ route('admin.highlights.update', $highlight->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-layout form-layout-1">
                    <div class="row mg-b-25">

                        <div class="col-md-5">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label"> Icon: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" value="{{ old('name', optional($highlight)->icon) }}" name="icon" placeholder="Enter Name">
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-md-7">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label text text-capitalize">Head <span class="tx-danger">*</span></label>
                                <input class="form-control" value="{{ old('head', optional($highlight)->head) }}" type="text" name="head" placeholder="">
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-md-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label text text-capitalize"> Body <span class="tx-danger">*</span></label>
                                <input class="form-control" value="{{ old('body', optional($highlight)->body) }}" type="text" name="body" placeholder="">
                            </div>
                        </div><!-- col-8 -->
                    </div><!-- row -->

                </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        </div><!-- br-section-wrapper -->
    </div>

<!-- ########## END: MAIN PANEL ########## -->


@endsection
