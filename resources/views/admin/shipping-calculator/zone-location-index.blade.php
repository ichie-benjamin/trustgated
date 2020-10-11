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
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="index.html">Bracket</a>

        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Zone Location</h4>
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            @include('notification')
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10" style="padding-bottom: 50px">Zone Location List
                <a href="{{ route('admin.zoneLocations.create') }}"><button class="btn btn-success" style="float: right"> Add New Zone
                        Location</button></a></h6>

            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-15p">S/N</th>
                            <th class="wd-20p">Zone</th>
                            <th class="wd-20p">Origin Location</th>
                            <th class="wd-20p">Destination Location</th>
                            <th class="wd-25p">Action</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <input type="hidden" value="{{ $i=1 }}">
                        @foreach ($locations as $zoneLocation)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $zoneLocation->zone->name }}</td>
                            <td>
                                <input type="hidden" value="{{ $city = $cities->where('id', $zoneLocation->origin)->first() }}">
                                {{ $city->name . ' - ' . $city->lga->name .', '. $city->lga->state->name.' '.$city->lga->state->country->name }}
                            </td>
                            <td>
                                <input type="hidden" value="{{ $city = $cities->where('id', $zoneLocation->destination)->first() }}">
                                {{ $city->name . ' - ' . $city->lga->name .', '. $city->lga->state->name.' '.$city->lga->state->country->name }}
                            </td>
                            <td>
                                <form action="{{  route('admin.zoneLocations.destroy', $zoneLocation) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('admin.zoneLocations.edit', $zoneLocation) }}" class="btn btn-danger" title="Edit"><em class="fa fa-edit"></em>
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
        <!-- ########## END: MAIN PANEL ########## -->
@endsection
