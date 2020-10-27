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
            <a class="breadcrumb-item" href="{{ route('admin.cities.index') }}"> Cities</a>
{{--            <span class="breadcrumb-item active">Cities Layouts</span>--}}
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Cities</h4>
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
        <p>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Add City
            </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="br-section-wrapper">

            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add Cities</h6>
            <form action="{{ route('admin.cities.store') }}" method="POST">
                @csrf
                <div class="form-layout form-layout-4">
                    <div class="row">
                        <label class="col-sm-4 form-control-label">Select State* </label>
                        <div class="col-sm-8 col-md-8 mg-t-10 mg-b-10">
                            <select class="form-control selec" data-placeholder="Select State" name="state_id" required>
{{--                                <option label="Choose State"></option>--}}
                                @foreach ($states as $state)
                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select> </div>
                    </div><!-- col-4 -->

                    <div class="row">
                        <label class="col-sm-4 form-control-label">Enter Cities: <span
                                class="tx-danger">*</span></label>
                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input type="text" class="form-control" placeholder="Enter Cities" name="name" required>
                        </div>
                    </div><!-- row -->

                    <div class="row">
                        <label class="col-sm-4 form-control-label">Featured * </label>
                        <div class="col-sm-8 col-md-8 mg-t-10 mg-b-10">
                            <select name="featured" class="form-control" required>
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select> </div>
                    </div><!-- col-4 -->

                    <div class="row">
                        <label class="col-sm-4 form-control-label">Image * </label>
                        <div class="col-sm-8 col-md-8 mg-t-10 mg-b-10">

                            @include('admin.partials.image-uploader',['field' => 'image'])

                        </div>
                    </div><!-- col-4 -->



                    <div class="form-layout-footer mg-t-30">
                        <button class="btn btn-info" type="submit" >Submit </button>
                        <a href="{{ route('admin.cities.index') }}" class="btn btn-secondary">Cancel</a>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>


        </div><!-- br-section-wrapper -->
        </div>
            @include('notification')
    </div>
        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"> Cities List</h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-5p">S/N</th>
                            <th class="wd-15p">Image</th>
                            <th class="wd-20p">Country</th>
                            <th class="wd-15p">State</th>
                            <th class="wd-25p">City</th>
                            <th class="wd-10p">Featured</th>
                            <th class="wd-10p">Action</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <input type="hidden" value="{{ $i=1 }}">
                        @foreach ($cities as $city)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td> <img height="60" src="{{ $city->image }}" /></td>
                                <td>{{ optional($city->state)->country->name }}</td>
                                <td>{{ optional($city->state)->name }}</td>
                                <td>{{ $city->name }}</td>
                                <td>{{ $city->featured ? 'Yes' : 'No' }}</td>
                                <td>
                                    <form action="{{  route('admin.cities.destroy', $city) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ route('admin.cities.edit', $city) }}" class="btn btn-danger"
                                           title="Edit"><em class="fa fa-edit"></em>
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

    </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

@endsection
