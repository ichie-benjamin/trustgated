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
            <a class="breadcrumb-item" href="{{ route('admin.pages.index') }}"> CMS Content</a>
            <span class="breadcrumb-item active">Ad Edit</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Edit {{ $page->title }}</h4>
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
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Editing {{ $page->title }}</h6>

                <form action="{{ route('admin.pages.update', $page->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-layout form-layout-1">
                        <div class="row mg-b-25">

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ old('title', optional($page)->title) }}" name="company_name" required placeholder="Enter Title">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">URL: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ old('url', optional($page)->url) }}" name="url" required placeholder="Enter Url">
                                </div>
                            </div>
                        </div><!-- row -->

                        <div class="row">

                        </div>

                        <div class="form-layout-footer">
                            <button class="btn btn-primary" type="submit">Update Ad</button>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- br-section-wrapper -->
    </div>


@endsection
