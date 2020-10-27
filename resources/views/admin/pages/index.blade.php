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
            <a class="breadcrumb-item" href="#">CMS Content Listing</a>
{{--            <span class="breadcrumb-item active">Pages Layouts</span>--}}
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> CMS Content</h4>
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
                Add CMS
            </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="br-section-wrapper">

            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add CMS Content</h6>

            <form action="{{ route('admin.pages.store') }}" method="POST">
                @csrf
                <div class="form-layout form-layout-1">
                    <div class="row mg-b-25">

                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="title" required placeholder="Enter CMS Title">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Url: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="url" required placeholder="Enter CMS URL">
                            </div>
                        </div>
                    </div><!-- row -->

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
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">CMS Content List</h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display table-condensed responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-5p"> S.No</th>
                            <th class="wd-40p"> Page Title</th>
                            <th class="wd-30p"> Page Url</th>
                            <th class="wd-20p"> Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pages as $page)
                        <tr>
                            <td>{{ $page->id }}</td>
                            <td>{{ $page->title }}</td>
                            <td>{{ $page->url }}</td>

                            <td class="text-center">
                                <form method="POST" action="{!! route('admin.pages.destroy', $page->id) !!}" accept-charset="UTF-8">
                                    <input name="_method" value="DELETE" type="hidden">
                                    {{ csrf_field() }}

                                    <div class="btn-group justify-center" role="group">
                                        <a href="{{ route('admin.pages.edit.page') }}?id={{$page->id}}" class="btn btn-primary btn-sm" title="Edit Job">
                                            <span class="fa fa-edit" aria-hidden="true"></span> Edit CMS
                                        </a>

                                        @if (auth()->user()->hasRole('super_admin'))
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Job" onclick="return confirm(&quot;Click Ok to delete Record.&quot;)">
                                                <span class="fa fa-trash" aria-hidden="true"></span>
                                            </button>
                                        @endif

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
