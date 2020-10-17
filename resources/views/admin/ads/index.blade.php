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
            <a class="breadcrumb-item" href="{{ route('admin.educational-details.index') }}"> Ads</a>
{{--            <span class="breadcrumb-item active">Ads Layouts</span>--}}
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Ads</h4>
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
                Add Ads
            </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="br-section-wrapper">

            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add Ads</h6>

            <form action="{{ route('admin.ads.store') }}" method="POST">
                @csrf
                <div class="form-layout form-layout-1">
                    <div class="row mg-b-25">

                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Company Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="company_name" required placeholder="Enter Company Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Company Link: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="company_link" required placeholder="Enter Company Link">
                            </div>
                        </div>
                    </div><!-- row -->

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                <select name="category_id" class="form-control" required data-placeholder="Choose Category:">
{{--                                    <option label="Choose Category"></option>--}}
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
                                    <option value="1">Active</option>
                                    <option value="0">In Active</option>
                                </select>
                            </div>
                        </div><!-- col-4 -->

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            @include('admin.partials.image-uploader',['field' => 'image'])
                        </div>
                    </div>

                    <div class="form-layout-footer">
                        <button class="btn btn-primary" type="submit">Submit Form</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        </div><!-- br-section-wrapper -->
        </div>
            @include('notification')
    </div>
        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"> Ads List</h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display table-condensed responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-5p"> S.No</th>
                            <th class="wd-15p"> Company Name</th>
                            <th class="wd-15p"> Company Link</th>
                            <th class="wd-15p"> Image</th>
                            <th class="wd-15p"> Category</th>
                            <th class="wd-15p"> Status</th>
                            <th class="wd-20p"> Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ads as $ad)
                        <tr>
                            <td>{{ $ad->id }}</td>
                            <td>{{ $ad->company_name }}</td>
                            <td>{{ $ad->company_link }}</td>
                            <td><img src="{{ asset($ad->image) }}" height="70" /></td>
                            <td>{{ $ad->category_id }}</td>
                            <td>@if ($ad->status)
                                Active
                                @else
                                    Inactive
                            @endif</td>
                            <td class="text-center">
                                <form method="POST" action="{!! route('admin.ads.destroy', $ad->id) !!}" accept-charset="UTF-8">
                                    <input name="_method" value="DELETE" type="hidden">
                                    {{ csrf_field() }}

                                    <div class="btn-group justify-center" role="group">
                                        <a href="{{ route('admin.ads.edit', $ad->id ) }}" class="btn btn-primary btn-sm" title="Edit Job">
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
