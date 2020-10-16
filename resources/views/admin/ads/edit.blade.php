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
            <a class="breadcrumb-item" href="{{ route('admin.ads.index') }}"> Ads</a>
            <span class="breadcrumb-item active">Ad Edit</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Edit Ad</h4>
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
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Editing {{ $ad->company_name }} details</h6>

                <form action="{{ route('admin.ads.update', $ad->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-layout form-layout-1">
                        <div class="row mg-b-25">

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Company Name: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ old('name', optional($ad)->company_name) }}" name="company_name" required placeholder="Enter Company Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Company Link: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ old('name', optional($ad)->company_link) }}" name="company_link" required placeholder="Enter Company Link">
                                </div>
                            </div>
                        </div><!-- row -->

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                    <select name="category_id" class="form-control" required data-placeholder="Choose Category:">
                                        {{--                                    <option label="Choose Category"></option>--}}
                                        <option value="{{ $ad->category_id }}" selected>{{ $ad->category_id }}</option>
                                        <option value="1"> Under Graduation</option>
                                        <option value="2">Post Graduation</option>
                                        <option value="3"> Doctorate/PhD</option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Company Status: <span class="tx-danger">*</span></label>
                                    <select name="company_status" class="form-control " required data-placeholder="Choose Company Status:">
                                        {{--                                    <option label="Choose Category"></option>--}}
                                        <option value="{{ $ad->company_status }}" selected><span class="text-capitalize"> {{ $ad->company_status }}</span></option>
                                        <option value="top">Top</option>
                                        <option value="best">Best</option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Status:  <span class="tx-danger">*</span></label>
                                    <select name="status" class="form-control" required data-placeholder="Choose Status:">
                                        {{--                                    <option label="Choose Category"></option>--}}
                                        <option value="{{ $ad->status }}" selected><span class="text-capitalize">@if ($ad->status)
                                            Active
                                                @else
                                                                                                                     Inactive
                                        @endif
                                            </span></option>
                                        <option value="1">Active</option>
                                        <option value="0">In Active</option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                        </div>

                        <div class="form-layout-footer">
                            <button class="btn btn-primary" type="submit">Update Ad</button>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- br-section-wrapper -->
    </div>


@endsection
