@extends('admin.layouts.admin-app')

@section('style')
    @include('admin.partials.dt-css')
@endsection



@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a class="breadcrumb-item" href="{{ route('admin.pages.index') }}"> CMS Content</a>
            <span class="breadcrumb-item active">CMS Edit</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Edit {{ $page->title }}</h4>
    </div>


    <div class="br-pagebody">
        @include('notification')

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
                <form action="{{ route('admin.pages.edit.page') }}" method="GET">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <select class="form-control select2" data-placeholder="Choose country" name="id">
                            @foreach ($pages as $item)
                                <option {{ request()->get('id') == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">View</button>
                    </div>
                </div>
                </form>

                <form action="{{ route('admin.pages.update', $page->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-layout form-layout-1">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Content : <span class="tx-danger">*</span></label>
{{--                                <textarea class="form-control" name="content">{{ old('title', optional($page)->content) }}</textarea>--}}

                                <textarea id="my-editor" name="content" class="form-control">{!! old('content', $page->content) !!}</textarea>

                            </div>
                            </div>
                        </div>

                        <div class="form-layout-footer">
                            <button class="btn btn-primary" type="submit">Update CMS</button>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- br-section-wrapper -->
    </div>


@endsection

    @section('js')

        <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
        <script>
            var options = {
                filebrowserImageBrowseUrl: '/filemanager?type=Images',
                filebrowserImageUploadUrl: '/filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/filemanager?type=Files',
                filebrowserUploadUrl: '/filemanager/upload?type=Files&_token='
            };

            CKEDITOR.replace('my-editor', options);
        </script>
@endsection
