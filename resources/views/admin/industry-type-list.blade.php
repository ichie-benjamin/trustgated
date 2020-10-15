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
            <span class="breadcrumb-item active">Industry Type Layout</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Industry Type</h4>
    </div>



    <div class="br-pagebody">
        <p>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Add Industry Type
            </button>
        </p>
        <div class="collapse" id="collapseExample">
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
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Top Label Layout</h6>
                <form action="{{ route('admin.industry-type.store') }}" method="POST">
                    @csrf
                <div class="form-layout form-layout-1">

                    <div class="row mg-b-25">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="category"  placeholder="Enter Category">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Meta Title: </label>
                                <textarea class="form-control" type="text" name="meta_title" ></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Descriptiom: </label>
                                <textarea class="form-control" type="text" name="description" ></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Keywords: </label>
                                <textarea class="form-control" type="text" name="keywords"  ></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="row mg-t-10 col-lg-10">
                            <h6>Category: </h6>
                            <div class="col-lg-5 form-group">
                                <label class="cat_industry_type">
                                    <input name="cat_industry_type" value="IT company" type="radio" checked="">
                                    <span>IT Company </span>
                                </label>
                            </div><!-- col-3 -->
                            <div class="col-lg-5 mg-t-20 mg-lg-t-0 form-group">
                                <label class="cat_industry_type">
                                    <input name="cat_industry_type" value="Non IT company" type="radio">
                                    <span>Non IT Company </span>
                                </label>
                            </div><!-- col-3 -->
                        </div>
                        <div class="row mg-t-10 col-lg-10">
                            <h6>Job Type: </h6>
                            <div class="col-lg-5 form-group">
                                <label class="job_type">
                                    <input value="IT/IIM Jobs" name="job_type" type="radio" checked="">
                                    <span>IT/IIM Jobs</span>
                                </label>
                            </div><!-- col-3 -->
                            <div class="col-lg-5 mg-t-20 mg-lg-t-0 form-group">
                                <label class="job_type">
                                    <input value="Govt Jobs" name="job_type" type="radio" >
                                    <span>Govt.Jobs </span>
                                </label>
                            </div><!-- col-3 -->
                        </div>

                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info" type="submit">Submit </button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
                </form>
            </div><!-- br-section-wrapper -->

        </div>
    </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Key Skills List</h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">S.No</th>
                            <th class="wd-15p">Category - Industry Type</th>
                            <th class="wd-15p">Category - Company</th>
                            <th class="wd-15p">Job Type</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $industry_types as $industry_type)
                        <tr>
                            <td>{{ $industry_type->id }}</td>
                            <td>{{ $industry_type->category }}</td>
                            <td>{{ $industry_type->cat_industry_type }}</td>
                            <td>{{ $industry_type->job_type }}</td>
                            <td class="text-center">
                                <form method="POST" action="{!! route('admin.industry-type.destroy', $industry_type->id) !!}" accept-charset="UTF-8">
                                    <input name="_method" value="DELETE" type="hidden">
                                    {{ csrf_field() }}

                                    <div class="btn-group justify-center" role="group">
                                        <a href="{{ route('admin.industry-type.edit', $industry_type->id ) }}" class="btn btn-primary" title="Edit Job">
                                            <span class="fa fa-edit" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Job" onclick="return confirm(&quot;Click Ok to delete Industry Type.&quot;)">
                                            <span class="fa fa-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>

                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div><!-- table-wrapper -->

    </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->
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
