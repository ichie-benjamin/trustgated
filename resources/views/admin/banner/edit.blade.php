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
            <a class="breadcrumb-item" href="{{ route('admin.banners.index') }}"> Banners</a>
            <span class="breadcrumb-item active">Banner Edit</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Edit Banner</h4>
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
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Editing Banner details</h6>

                <form action="{{ route('admin.banners.update', $banner->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-layout form-layout-1">
                        <div class="row mg-b-25">

                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Banner Link: <span class="tx-danger">*</span></label>
                                    <input class="form-control" value="{{ old('link', optional($banner)->link) }}" type="text" name="link" required placeholder="Enter Link">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Banner Placement: <span class="tx-danger">*</span></label>
                                    <select name="placement" class="form-control" required data-placeholder="Choose placement:">
                                        <option value="{{ $banner->placement }}" selected><span class="text-capitalize"> {{ $banner->placement }}</span></option>
                                        <option value="home_page">Home Page</option>
                                        <option value="job_view">Job View</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Status:  <span class="tx-danger">*</span></label>
                                    <select name="status" class="form-control" required data-placeholder="Choose Status:">
                                        <option value="{{ $banner->status }}" selected><span class="text-capitalize">@if ($banner->status)
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

                        </div><!-- row -->

                        <div class="row">
                            <div class="col-md-12">
                                @include('admin.partials.image-uploader',['field' => 'banner','image' => $banner->banner])
                            </div>
                        </div>


                        <div class="form-layout-footer">
                            <button class="btn btn-primary" type="submit">Update Banner</button>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- br-section-wrapper -->
    </div>


@endsection
