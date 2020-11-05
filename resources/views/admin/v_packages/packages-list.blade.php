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
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <span class="breadcrumb-item active"> Packages Layouts</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Package</h4>
    </div>

    <div class="br-pagebody">
        <p>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Add Package
            </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add Package</h6>

            <form action="{{ route('admin.v_packages.store') }}" method="POST">
                @csrf
                <div class="form-layout form-layout-1">
                    <div class="row mg-b-25">

                        <div class="col-lg-8">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label"> Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" required type="text" name="name" placeholder="Enter Name">
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label text text-capitalize"> Employment Verification <span class="tx-danger">*</span></label>
                                <input class="form-control" required type="number" name="employment_verification" placeholder="">
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label text text-capitalize"> Education Verification </label>
                                <input class="form-control"  type="number" name="education_verification" placeholder="">
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label text text-capitalize"> Reference Verification </label>
                                <input class="form-control" type="number" name="reference_verification" placeholder="">
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label"> Amount: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="number" required name="amount" placeholder="Amount">
                            </div>
                        </div><!-- col-8 -->
                        @foreach (\App\Models\Form::whereModel('verification_packages')->get() as $item)
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label text-capitalize"> {{ str_replace('_',' ',$item->name) }}: <span class="tx-danger">*</span></label>
                                    <input class="form-control" required="{{ $item->required }}" name="extra[{{$item->name}}]" placeholder="{{ str_replace('_',' ',$item->name) }}">
                                </div>
                            </div><!-- col-8 -->
                        @endforeach
                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-primary" type="submit">Submit Form</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        </div><!-- br-section-wrapper -->
        </div>
    </div>
        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"> Packages List</h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">S.No</th>
                            <th class="wd-15p"> Name</th>
                            <th class="wd-15p"> Employment Verification</th>
                            <th class="wd-20p"> Education Verification</th>
                            <th class="wd-20p"> Reference Verification</th>
                            <th class="wd-20p"> Other</th>
                            <th class="wd-20p"> Amount</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($v_packages as $package)
                        <tr>
                            <td>{{ $package->id }}</td>
                            <td>{{ $package->name }}</td>
                            <td>{{ $package->no_of_users }}</td>
                            <td>{{ $package->education_verification }}</td>
                            <td>{{ $package->reference_verification }}</td>
                            @if ($package->extra)
                                <td class="text-capitalize">
                                @foreach($package->extra as $value => $key)
                                    {{ str_replace('_',' ',$value) }} =>  {{ $key }}<br/>
                                    @endforeach
                                </td>
                            @else
                                <td>[]</td>
                            @endif

                            <td>{{ $package->amount }}</td>
                            <td class="text-center">
                                <form method="POST" action="{!! route('admin.v_packages.destroy', $package->id) !!}" accept-charset="UTF-8">
                                    <input name="_method" value="DELETE" type="hidden">
                                    {{ csrf_field() }}

                                    <div class="btn-group justify-center" role="group">
                                        <a href="{{ route('admin.v_packages.edit', $package->id ) }}" class="btn btn-primary" title="Edit Job">
                                            <span class="fa fa-edit" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Job" onclick="return confirm(&quot;Click Ok to delete Record.&quot;)">
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
