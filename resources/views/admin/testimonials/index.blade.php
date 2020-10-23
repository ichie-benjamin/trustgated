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
            <span class="breadcrumb-item active">Testimonial Layout</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Testimonial</h4>
    </div>

    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="br-pagebody">
        <p>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Add Testimonial
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
                <form action="{{ route('admin.testimonial.store') }}" method="POST">
                    @csrf
                <div class="form-layout form-layout-1">

                    <div class="row mg-b-25">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name"  placeholder="Enter Category">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label"> Designation: </label>
                                <textarea class="form-control" type="text" name="designation" ></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Descriptiom: </label>
                                <textarea class="form-control" type="text" name="description" ></textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Image: </label>
                                @include('admin.partials.image-uploader',['field' => 'testimonial_image'])
                            </div>
                        </div><!-- col-4 -->
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
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"> Industry Type List</h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">S.No</th>
                            <th class="wd-15p"> Name</th>
                            <th class="wd-15p"> Designation</th>
                            <th class="wd-15p"> Description</th>
                            <th class="wd-15p"> Testimonial Image</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $testimonials as $testimonial)
                        <tr>
                            <td>{{ $testimonial->id }}</td>
                            <td>{{ $testimonial->name }}</td>
                            <td>{{ $testimonial->designation }}</td>
                            <td>{{ $testimonial->description }}</td>
                            <td><img height="70" width="70" src="{{ $testimonial->testimonial_image }}"></td>
                            <td class="text-center">
                                <form method="POST" action="{!! route('admin.testimonial.destroy', $testimonial->id) !!}" accept-charset="UTF-8">
                                    <input name="_method" value="DELETE" type="hidden">
                                    {{ csrf_field() }}

                                    <div class="btn-group justify-center" role="group">
                                        <a href="{{ route('admin.testimonial.edit', $testimonial->id ) }}" class="btn btn-primary" title="Edit Job">
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
