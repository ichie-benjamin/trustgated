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
            <a class="breadcrumb-item" href="{{ route('admin.forms.index') }}"> Form</a>
            <span class="breadcrumb-item active">Form</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Edit Form</h4>
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
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Editing Form details</h6>

                <form action="{{ route('admin.forms.update', $form->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-layout form-layout-1">
                        <div class="row mg-b-25">

                            <div class="col-md-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Name : <span class="tx-danger">*</span></label>
                                    <input class="form-control" value="{{ old('name', optional($form)->d_name) }}" type="text" name="name" required placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Is Required:  <span class="tx-danger">*</span></label>
                                    <select name="required" class="form-control" required data-placeholder="Choose Status:">
                                        <option {{ $form->required == 1 ? 'selected' : '' }} value="1">Yes</option>
                                        <option {{ $form->required == 0 ? 'selected' : '' }} value="0">No</option>
                                    </select>
                                </div>

                                <input name="model" value="{{ $form->model }}" type="hidden">
                            </div><!-- col-4 -->
                            <div class="col-md-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Input Rows :  <span class="tx-danger">*</span></label>
                                    <select name="rows" class="form-control" required>
                                        <option value="{{ $form->rows }}">{{ $form->rows }}</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Page :  <span class="tx-danger">*</span></label>
                                    <select name="page" class="form-control" required>
                                        <option {{ $form->page == 1 ? 'selected' : '' }} value="1">1</option>
                                        <option {{ $form->page == 2 ? 'selected' : '' }} value="2">2</option>
                                        <option {{ $form->page == 3 ? 'selected' : '' }} value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Type :  <span class="tx-danger">*</span></label>
                                    <select name="type" class="form-control" required>
                                        <option value="{{ $form->text }}">{{ $form->text }}</option>
                                        <option value="text">Text</option>
                                        <option value="country">Country</option>
                                        <option value="state">State</option>
                                        <option value="image">Image</option>
                                        <option value="textarea">Textarea</option>
                                        <option value="file">File</option>
                                    </select>
                                </div>
                            </div>

                        </div><!-- row -->

                        <div class="form-layout-footer">
                            <button class="btn btn-primary" type="submit">Update Form</button>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- br-section-wrapper -->
    </div>


@endsection
