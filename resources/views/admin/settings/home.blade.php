@extends('admin.layouts.admin-app')

@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a class="breadcrumb-item" href="{{ route('admin.settings.index') }}"> Settings</a>
{{--            <span class="breadcrumb-item active">Settings Layouts</span>--}}
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Settings</h4>
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
        @if (auth()->user()->hasRole('super_admin'))
                <p>
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Add Setting
                    </button>
                </p>
        @endif

        <div class="collapse" id="collapseExample">
        <div class="br-section-wrapper">

            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add Settings</h6>

            <form action="{{ route('admin.settings.store.item') }}" method="POST">
                @csrf
                <div class="form-layout form-layout-1">
                    <div class="row mg-b-25">

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Setting Key: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="key" value="{{ old('key') }}" required placeholder="Enter Key">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Setting Value: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" value="{{ old('value') }}" name="value" required placeholder="Enter Value">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Type:  <span class="tx-danger">*</span></label>
                                <select name="type" class="form-control" required data-placeholder="Select type:">
                                    {{--                                    <option label="Choose Category"></option>--}}
                                    <option value="text">Text</option>
                                    <option value="image">Image</option>
                                    <option value="textarea">Textarea</option>
                                </select>
                            </div>
                        </div><!-- col-4 -->

                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-primary" type="submit">Add Setting</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        </div><!-- br-section-wrapper -->
        </div>
            @include('notification')
    </div>
        <div class="br-pagebody">
            <div class="br-section-wrapper">

                <form action="{{ route('admin.settings.store') }}" method="POST">

                    @csrf

                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"> Settings List</h6>

                <input value="Save" type="submit" class="btn btn-success float-right" />

                <div class="table-wrapper">
                    <table class="table table-bordered display table-condensed responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-10p"> S.No</th>
                            <th class="wd-30p"> Name</th>
                            <th class="wd-60p">Value</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-capitalize">First Banner Text</td>
                            <td>
                                <textarea class="form-control" name="first_banner_text">{{ setting('first_banner_text') }}</textarea>
                            </td>
{{--                                @if ($setting->type == 'text')--}}
{{--                                    <input class="form-control" width="70%" name="{{ $setting->key }}" value="{{ $setting->value }}">--}}
{{--                                @endif--}}
{{--                                    @if ($setting->type == 'textarea')--}}
{{--                                        <textarea class="form-control" name="{{ $setting->key }}">{{ $setting->value }}</textarea>--}}
{{--                                    @endif--}}
{{--                                @if ($setting->type == 'image')--}}
{{--                                        <div class="input-group">--}}
{{--   <span class="input-group-btn">--}}
{{--     <a id="lfm" data-input="{{ $setting->key }}_thumbnail" data-preview="{{ $setting->key }}" class="btn btn-primary">--}}
{{--       <i class="fas fa-picture"></i> Choose Image--}}
{{--     </a>--}}
{{--   </span>--}}
{{--                                                <input id="{{ $setting->key }}_thumbnail" class="form-control" type="text" value="{{ $setting->value }}" name="{{ $setting->key }}">--}}
{{--                                                <input disabled class="form-control" value="{{ $image }}" type="text">--}}
{{--                                        </div>--}}
{{--                                        <div id="{{ $setting->key }}" style="margin-top:15px; margin-bottom:20px;max-height:200px;">--}}
{{--                                            <img src="{{ $setting->value }}" height="60">--}}
{{--                                        </div>--}}

{{--                                    @endif--}}
{{--                           --}}
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="text-capitalize">Job List Heading</td>
                            <td>
                                <input class="form-control" width="70%" name="job_list_heading" required value="{{ setting('job_list_heading') }}">
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="text-capitalize">Featured Cities </td>
                            <td>
                                <input class="form-control" width="70%" name="featured_cities" required value="{{ setting('featured_cities') }}">
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="text-capitalize">Featured Cities Sub</td>
                            <td>
                                <input class="form-control" width="70%" name="featured_cities_sub" required value="{{ setting('featured_cities_sub') }}">
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="text-capitalize">Banner 1 heading</td>
                            <td>
                                <input class="form-control" width="70%" name="banner_1_head" required value="{{ setting('banner_1_head') }}">
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="text-capitalize">Banner 1 text</td>
                            <td>
                                <input class="form-control" width="70%" name="banner_1_text" required value="{{ setting('banner_1_text') }}">
                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td class="text-capitalize">Banner 2 heading</td>
                            <td>
                                <input class="form-control" width="70%" name="banner_2_head" required value="{{ setting('banner_2_head') }}">
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="text-capitalize">Banner 2 text</td>
                            <td>
                                <input class="form-control" width="70%" name="banner_2_text" required value="{{ setting('banner_2_text') }}">
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="text-capitalize">Deals Heading</td>
                            <td>
                                <input class="form-control" width="70%" name="deals_head" required value="{{ setting('deals_head') }}">
                            </td>
                        </tr>
{{--                        @endforeach--}}

                        </tbody>
                    </table>
                </div><!-- table-wrapper -->

                <input value="Save" type="submit" class="btn btn-success float-right" />

                </form>

            </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

@endsection


