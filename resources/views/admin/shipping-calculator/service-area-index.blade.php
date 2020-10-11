@extends('layouts.admin-app')

@section('css')
<link href="{{ asset('lib/highlightjs/github.css') }}" rel="stylesheet">
<link href="{{ asset('lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
<link href="{{ asset('lib/select2/css/select2.min.css') }}" rel="Stylesheet">
@endsection
@section('js')
<script src="{{ asset('lib/highlightjs/highlight.pack.js') }}"></script>
<script src="{{ asset('lib/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('lib/datatables-responsive/dataTables.responsive.js') }}"></script>

<script src="{{ asset('lib/select2/js/select2.min.js') }}"></script>
{{-- <script src="http://localhost/afiaanyi-logistics/js/bracket.js"></script> --}}

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
@section('content')

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Bracket</a>

        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Data Table</h4>
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            @include('notification')
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10" style="padding-bottom: 50px">Service Area <a
                    href="{{ route('admin.zoneServiceAreas.create') }}"><button class="btn btn-success" style="float: right">
                        Add
                        New</button></a></h6>

            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-10p">S/N</th>
                            <th class="wd-30p">Country</th>
                            <th class="wd-30p">Service Area/State</th>
                            <th class="wd-30p">Action</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <input type="hidden" value="{{ $i=1 }}">
                        @foreach ($zoneServiceAreas as $zoneServiceArea)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>Nixon</td>
                            <td>Nixon</td>

                            <td>
                                <form action="{{  route('admin.zoneServiceAreas.destroy', $zoneServiceArea) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('admin.zoneServiceAreas.edit', $zoneServiceArea) }}" class="btn btn-danger" title="Edit"><em
                                            class="fa fa-edit"></em>
                                    </a>
                                    <button type="submit" class="btn btn-warning" title="Delete">
                                        <em class="fa fa-trash"></em>
                                    </button>
                                </form>

                            </td>
                            <td></td>

                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div><!-- table-wrapper -->





        </div>
        @endsection
