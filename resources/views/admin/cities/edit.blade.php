@extends('admin.layouts.admin-app')

@section('style')
    @include('admin.partials.dt-css')
@endsection

@section('js')
    @include('admin.partials.dt-js')
@endsection

@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a class="breadcrumb-item" href="{{ route('admin.categories.index') }}"> Cities</a>
            <span class="breadcrumb-item active">City Edit</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Edit Cities</h4>
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
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Editing City details</h6>

                <form action="{{ route('admin.cities.update', $city) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-layout form-layout-4">

                        <div class="row">
                            <label class="col-sm-4 form-control-label">Select State* </label>
                            <div class="col-sm-8 mg-t-10 mg-b-10">
                                <select class="form-control select2" data-placeholder="Select State" name="state_id" id="state">
                                    <option label="Choose State"></option>
                                    @foreach ($states as $state)
                                        <option value="{{ $state->id }}" @if($city->state_id == $state->id) selected @endif>{{ $state->name }}</option>
                                    @endforeach
                                </select> </div>
                        </div><!-- col-4 -->
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"></h6>
                        <div class="row">
                            <label class="col-sm-4 form-control-label">Enter Cities: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" class="form-control" placeholder="Enter Cities" name="name" value="{{ $city->name }}">
                            </div>
                        </div><!-- row -->


                        <div class="row">
                            <label class="col-sm-4 form-control-label">Featured * </label>
                            <div class="col-sm-8 col-md-8 mg-t-10 mg-b-10">
                                <select name="featured" class="form-control" required>
                                    <option @if($city->featured == 0) selected @endif value="0">No</option>
                                    <option @if($city->featured == 1) selected @endif value="1">Yes</option>
                                </select> </div>
                        </div><!-- col-4 -->

                        <div class="row">
                            <label class="col-sm-4 form-control-label">Image * </label>
                            <div class="col-sm-8 col-md-8 mg-t-10 mg-b-10">

                                @include('admin.partials.image-uploader',['field' => 'image','image' => $city->image])


                            </div>
                        </div><!-- col-4 -->

                        <div class="form-layout-footer mg-t-30">
                            <button class="btn btn-info" type="submit">Submit </button>
                            <a href="{{ route('admin.cities.index') }}" class="btn btn-secondary">Cancel</a>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>

            </div><!-- br-section-wrapper -->
    </div>


@endsection
