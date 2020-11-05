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
            <span class="breadcrumb-item active"> Packages Layouts</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Package</h4>
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add Package</h6>

            <form action="{{ route('admin.v_packages.update', $packages->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-layout form-layout-1">
                    <div class="row mg-b-25">

                        <div class="col-lg-8">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label"> Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" value="{{ old('name', optional($packages)->name) }}" name="name" placeholder="Enter Name">
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label text text-capitalize"> Employment Verification <span class="tx-danger">*</span></label>
                                <input class="form-control" value="{{ old('employment_verification', optional($packages)->employment_verification) }}" type="number" name="employment_verification" placeholder="">
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label text text-capitalize"> Education Verification <span class="tx-danger">*</span></label>
                                <input class="form-control" value="{{ old('education_verification', optional($packages)->education_verification) }}" type="number" name="education_verification" placeholder="">
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label text text-capitalize"> Reference Verification <span class="tx-danger">*</span></label>
                                <input class="form-control" value="{{ old('reference_verification', optional($packages)->reference_verification) }}" type="number" name="reference_verification" placeholder="">
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label"> Amount: <span class="tx-danger">*</span></label>
                                <input class="form-control" value="{{ old('amount', optional($packages)->amount) }}" type="number" name="amount" placeholder="Amount">
                            </div>
                        </div><!-- col-8 -->
                        @foreach ($packages->extra as $key => $value)
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label text-capitalize"> {{ str_replace('_',' ',$key) }}: <span class="tx-danger">*</span></label>
                                    <input class="form-control"  name="extra[{{$key}}]" value="{{ $value }}">
                                </div>
                            </div><!-- col-8 -->
                        @endforeach
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

        @section('js')
            <script src="{{ asset('lib/jquery-ui/jquery-ui.js') }}"></script>
            <script src="{{ asset('lib/jquery-switchbutton/jquery.switchButton.js') }}"></script>
            <script src="{{ asset('lib/peity/jquery.peity.js') }}"></script>
            <script src="{{ asset('lib/datatables/jquery.dataTables.js') }}"></script>
            <script src="{{ asset('lib/datatables-responsive/dataTables.responsive.js') }}"></script>
            <script src="{{ asset('lib/select2/js/select2.min.js') }}"></script>
            <script src="{{ asset('lib/highlightjs/highlight.pack.js') }}"></script>
            <script>
                $(function(){
                    'use strict';

                    $('#datatable1').DataTable({
                        responsive: true,
                        language: {
                            searchPlaceholder: 'Search...',
                            sSearch: '',
                            lengthMenu: '_MENU_ items/page',
                        }
                    });

                    $('#datatable2').DataTable({
                        bLengthChange: false,
                        searching: false,
                        responsive: true
                    });

                    // Select2
                    $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

                });
            </script>
       @endsection

@endsection
