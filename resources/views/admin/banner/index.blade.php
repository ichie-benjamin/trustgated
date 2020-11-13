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
{{--            <span class="breadcrumb-item active">Banners Layouts</span>--}}
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Banners</h4>
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
                Add Banner
            </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="br-section-wrapper">

            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add Banners</h6>

            <form action="{{ route('admin.banners.store') }}" method="POST">
                @csrf
                <div class="form-layout form-layout-1">
                    <div class="row mg-b-25">

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Banner Link: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="link" required placeholder="Enter Link">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Banner Placement: <span class="tx-danger">*</span></label>
                                <select name="placement" class="form-control" required data-placeholder="Choose placement:">
                                    <option value="home_page">Home Page</option>
                                    <option value="job_view">Job View</option>
                                    <option value="home_employer_bg">Home Employer bg</option>
                                    <option value="home_jobseeker_bg">Home Jobseeker bg</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Status:  <span class="tx-danger">*</span></label>
                                <select name="status" class="form-control" required data-placeholder="Choose Status:">
                                    {{--                                    <option label="Choose Category"></option>--}}
                                    <option value="1">Active</option>
                                    <option value="0">In Active</option>
                                </select>
                            </div>
                        </div><!-- col-4 -->

                    </div><!-- row -->

                    <div class="row">
                        <div class="col-md-12">
                            @include('admin.partials.image-uploader',['field' => 'banner'])
                        </div>
                    </div>



                    <div class="form-layout-footer">
                        <button class="btn btn-primary" type="submit">Add Banner</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        </div><!-- br-section-wrapper -->
        </div>
            @include('notification')
    </div>
        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"> Banners List</h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display table-condensed responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-5p"> S.No</th>
                            <th class="wd-20p"> Banner Link</th>
                            <th class="wd-30p">Banner</th>
                            <th class="wd-20p"> Placement</th>
                            <th class="wd-10p"> Status</th>
                            <th class="wd-15p"> Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($banners as $banner)
                        <tr>
                            <td>{{ $banner->id }}</td>
                            <td>{{ $banner->link }}</td>

                            <td><img src="{{ $banner->banner }}" height="70" /></td>
                            <td>{{ $banner->placement }}</td>
                            <td>@if ($banner->status)
                                Active
                                @else
                                    Inactive
                            @endif</td>
                            <td class="text-center">
                                <form method="POST" action="{!! route('admin.banners.destroy', $banner->id) !!}" accept-charset="UTF-8">
                                    <input name="_method" value="DELETE" type="hidden">
                                    {{ csrf_field() }}

                                    <div class="btn-group justify-center" role="group">
                                        <a href="{{ route('admin.banners.edit', $banner->id ) }}" class="btn btn-primary btn-sm" title="Edit Job">
                                            <span class="fa fa-edit" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Job" onclick="return confirm(&quot;Click Ok to delete Record.&quot;)">
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

@endsection
