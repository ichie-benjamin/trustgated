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
            <a class="breadcrumb-item" href="{{ route('admin.locations.index') }}"> Forms</a>
{{--            <span class="breadcrumb-item active">Forms Layouts</span>--}}
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Forms</h4>
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
                Add Form
            </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="br-section-wrapper">

            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add Forms</h6>

            <form action="{{ route('admin.forms.store') }}" method="POST">
                @csrf
                <div class="form-layout form-layout-1">
                    <div class="row mg-b-25">

                        <div class="col-md-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Form Name :  <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name" required placeholder="Enter form name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Is Required:  <span class="tx-danger">*</span></label>
                                <select name="required" class="form-control" required data-placeholder="Choose Status:">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>

                            <input name="model" value="{{ $model }}" type="hidden">
                        </div><!-- col-4 -->
                        <div class="col-md-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Input Rows :  <span class="tx-danger">*</span></label>
                                <select name="rows" class="form-control" required>
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
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Type :  <span class="tx-danger">*</span></label>
                                <select name="type" class="form-control" required>
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
                        <button class="btn btn-primary" type="submit">Add Form</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        </div><!-- br-section-wrapper -->
        </div>
            @include('notification')
    </div>
        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"> Forms List</h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display table-condensed responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-5p"> S.No</th>
                            <th class="wd-40p">Form Name</th>
                            <th class="wd-20p">is Required</th>
                            <th class="wd-10p">Page</th>
                            <th class="wd-10p">Type</th>
                            <th class="wd-10p">Row</th>
                            <th class="wd-15p"> Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($forms as $form)
                        <tr>
                            <td>{{ $form->id }}</td>
                            <td class="text-capitalize">{{ str_replace('_',' ',$form->name) }}</td>
                            <td>{{ $form->required ? 'Yes' : 'No' }}</td>
                            <td>{{ $form->page }}</td>
                            <td class="text-capitalize">{{ $form->type }}</td>
                            <td>{{ $form->rows }}</td>
                            <td class="text-center">
                                <form method="POST" action="{!! route('admin.forms.destroy', $form->id) !!}" accept-charset="UTF-8">
                                    <input name="_method" value="DELETE" type="hidden">
                                    {{ csrf_field() }}

                                    <div class="btn-group justify-center" role="group">
                                        <a href="{{ route('admin.forms.edit', $form->id ) }}" class="btn btn-primary btn-sm" title="Edit Form">
                                            <span class="fa fa-edit" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Form" onclick="return confirm(&quot;Click Ok to delete Record.&quot;)">
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
