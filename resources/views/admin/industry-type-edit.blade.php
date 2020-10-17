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
            <a class="breadcrumb-item" href="index.html">Dashbord</a>
            <a class="breadcrumb-item" href="{{ route('admin.industry-type.index') }}">Industry Type</a>
            <span class="breadcrumb-item active">Industry Type Edit</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Industry Type Edit</h4>
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
            <div class="br-section-wrapper">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.industry-type.update', $industry_type->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-layout form-layout-1">

                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="category" value="{{ old('category', optional($industry_type)->category) }}"  placeholder="Enter Category">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Meta Title: </label>
                                    <textarea class="form-control" type="text" name="meta_title" >{{ old('meta_title', optional($industry_type)->meta_title) }}</textarea>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Descriptiom: </label>
                                    <textarea class="form-control" type="text" name="description" >{{ old('meta_title', optional($industry_type)->description) }}</textarea>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Keywords: </label>
                                    <textarea class="form-control" type="text" name="keywords" >{{ old('meta_title', optional($industry_type)->keywords) }}</textarea>
                                </div>
                            </div><!-- col-4 -->
                           <div class="col-lg-10">
                               <div class="row mg-t-10 col-lg-8">
                                   <h6>Category: </h6>
                                   <div class="col-lg-5 form-group">
                                       <label class="cat_industry_type">
                                           <input name="cat_industry_type" value="IT company" type="radio" {{ old('radio.cat_industry_type', optional($industry_type)->cat_industry_type)=="IT company" ? 'checked='.'"'.'checked'.'"' : '' }} >
                                           <span>IT Company </span>
                                       </label>
                                   </div><!-- col-3 -->
                                   <div class="col-lg-5 mg-t-20 mg-lg-t-0 form-group">
                                       <label class="cat_industry_type">
                                           <input name="cat_industry_type" value="Non IT company" type="radio" {{ old('radio.cat_industry_type', optional($industry_type)->cat_industry_type)=='Non IT company' ? 'checked='.'"'.'checked'.'"' : '' }} >
                                           <span>Non IT Company </span>
                                       </label>
                                   </div><!-- col-3 -->
                               </div>
                               <div class="row mg-t-10 col-lg-8">
                                   <h6>Job Type: </h6>
                                   <div class="col-lg-5 form-group">
                                       <label class="job_type">
                                           <input value="IT/IIM Jobs" name="job_type" type="radio" {{ old('job_type', optional($industry_type)->job_type)=='IT/IIM Jobs' ? 'checked='.'"'.'checked'.'"' : '' }}>
                                           <span>IT/IIM Jobs</span>
                                       </label>
                                   </div><!-- col-3 -->
                                   <div class="col-lg-5 mg-t-20 mg-lg-t-0 form-group">
                                       <label class="job_type">
                                           <input value="Govt Jobs" name="job_type" type="radio" {{ old('job_type', optional($industry_type)->job_type)=='Govt Jobs' ? 'checked='.'"'.'checked'.'"' : '' }}>
                                           <span>Govt.Jobs </span>
                                       </label>
                                   </div><!-- col-3 -->
                               </div>
                           </div>

                        </div><!-- row -->

                        <div class="form-layout-footer">
                            <button class="btn btn-info" type="submit">Submit </button>
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
