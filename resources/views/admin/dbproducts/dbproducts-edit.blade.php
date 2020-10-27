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
            <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Dashboard</a>
            <a class="breadcrumb-item" href="{{ route('admin.dbproducts.index') }}">Database Product</a>
            <span class="breadcrumb-item active">Products</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Database Product</h4>
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit Database Product</h6>

            <form action="{{ route('admin.dbproducts.update', $products->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-layout form-layout-1">
                    <div class="row mg-b-25">

                        <div class="col-md-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label"> Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" value="{{ old('name', optional($products)->name) }}" name="name" placeholder="Enter Name">
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-md-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label text text-capitalize">No of Days recruiter allowed to Database access: <span class="tx-danger">*</span></label>
                                <input required class="form-control" value="{{ old('no_of_days', optional($products)->no_of_days) }}" type="number" name="no_of_days" placeholder="No of Days">
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-md-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label text text-capitalize">No of Resumes allowed to Download access: <span class="tx-danger">*</span></label>
                                <input  required class="form-control"  value="{{ old('no_of_resumes', optional($products)->no_of_resumes) }}" type="number" name="no_of_resumes"  placeholder="No of jobs allowed to post">
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-md-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label text text-capitalize">No of email can send per day: <span class="tx-danger">*</span></label>
                                <input  required class="form-control" type="number" value="{{ old('no_of_emails', optional($products)->no_of_emails) }}" name="no_of_emails"  placeholder="No of emails">
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-md-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label text text-capitalize">Subscribed employer are become feature list:<span class="tx-danger">*</span></label>
                                <input value="1" {{ $products->become_future_list ? 'checked' : '' }} type="radio" required class="" name="become_future_list" >yes
                                <input value="0"  {{ !$products->become_future_list ? 'checked' : '' }} type="radio" required class="" name="become_future_list" >No
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-md-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label"> Price: <span class="tx-danger">*</span></label>
                                <input required class="form-control"  value="{{ old('price', optional($products)->price) }}" type="number" name="price" placeholder="Price">
                            </div>
                        </div><!-- col-8 -->
                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-primary" type="submit">Update DB Access</button>
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
