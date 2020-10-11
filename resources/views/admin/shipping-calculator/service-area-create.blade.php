@extends('layouts.admin-app')

@section('css')
<script src="{{ asset('lib/datatables/jquery.dataTables.css') }}"></script>
@endsection
@section('js')
<script src="{{ asset('lib/datatables/jquery.dataTables.css') }}"></script>
<script src="{{ asset('lib/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('lib/datatables-responsive/dataTables.responsive.js') }}"></script>
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

    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30" style="position:center;">
        <h4 class="tx-gray-800 mg-b-5">Service Area</h4>
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">

            <div class="row mg-t-10">
                <div class="col-xl-12">
                    <form action="{{ route('admin.zoneServiceAreas.store') }}" method="POST">
                        @csrf
                        <div class="form-layout form-layout-4">
                            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add Service Areas</h6>
                            <div class="row">
                                <label class="col-sm-4 form-control-label">Select Country* </label>
                                <div class="col-sm-8 mg-t-10 mg-b-10">
                                    <select class="form-control select2" data-placeholder="Choose country"
                                        name="country_id" required>
                                        <option label="Choose country"></option>
                                        @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select> </div>
                            </div><!-- col-4 -->
                            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"></h6>
                            <div class="row">
                                <label class="col-sm-4 form-control-label">Select State* </label>
                                <div class="col-sm-8 mg-t-10 mg-b-10">
                                    <select class="form-control select2" data-placeholder="Choose State" required
                                        name="state_id">
                                        <option label="Choose State"></option>
                                        @foreach ($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select> </div>
                            </div><!-- col-4 -->

                            <div class="row">
                                <label class="col-sm-4 form-control-label">Select LGA* </label>
                                <div class="col-sm-8 mg-t-10 mg-b-10">
                                    <select class="form-control select2" data-placeholder="Choose LGA" required
                                        name="lga_id">
                                        <option label="Choose LGA"></option>
                                        @foreach ($lgas as $lga)
                                        <option value="{{ $lga->id }}">{{ $lga->name }}</option>
                                        @endforeach
                                    </select> </div>
                            </div><!-- col-4 -->
                            <div class="row">
                                <label class="col-sm-4 form-control-label">Select City* </label>
                                <div class="col-sm-8 mg-t-10 mg-b-10">
                                    <select class="form-control select2" data-placeholder="Choose City" name="city_id">
                                        <option label="Choose City"></option>
                                        @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select> </div>
                            </div><!-- col-4 -->
                            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"></h6>
                            <div class="row">
                                <label class="col-sm-4 form-control-label">Service Code: <span
                                        class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" placeholder="Service Code" name="code">
                                </div>
                            </div><!-- row -->
                            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-20"></h6>
                            <div class="row">
                                <label class="col-sm-4 form-control-label">Service Number: <span
                                        class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" placeholder="Serice Number" name="number">
                                </div>
                            </div><!-- row -->


                            <div class="form-layout-footer mg-t-30">
                                <button class="btn btn-info" type="submit">Submit </button>
                                <a href="{{ route('admin.zoneServiceAreas.index') }}" class="btn btn-secondary">Cancel</a>
                            </div><!-- form-layout-footer -->
                        </div><!-- form-layout -->
                    </form>
                </div><!-- col-6 -->

            </div>
        </div>

    </div><!-- br-mainpanel -->
    @endsection
