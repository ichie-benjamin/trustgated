@extends('admin.layouts.admin-app')


@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashbord</a>
            <a class="breadcrumb-item" href="{{ route('admin.industry-type.index') }}">Industry Type</a>
            <span class="breadcrumb-item active">Industry Type Edit</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> Industry Type Edit</h4>
    </div>



    <div class="br-pagebody">
            <div class="br-section-wrapper">
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
                <form action="{{ route('admin.resume.search') }}" method="POST">
                    @csrf

                    <div class="form-layout form-layout-1">

                        <div class="row mg-b-25">
                            <div class="col-md-6">
                                <label class="form-control-label">Functional Area: <span class="tx-danger">*</span></label>

                                <select class="form-control select2" data-placeholder="Choose Functional Area" name="functional_area">
                                                                            <option>Choose functional Area</option>
                                    @foreach (\App\Models\FunctionalArea::pluck('category_functional_area') as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-control-label">Industry Type: <span class="tx-danger">*</span></label>

                                <select class="form-control select2" data-placeholder="Choose Industry Type" name="industry_type">
                                                                            <option>Choose Industry Type</option>
                                    @foreach (\App\Models\IndustryType::pluck('category') as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Keyword : </label>
                                    <input class="form-control" type="text" name="keyword" />
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Experience From: </label>
                                    <select class="form-control select2" data-placeholder="Choose Exp From" name="exp_from">
                                        <option value="">Year</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Experience To: </label>
                                    <select class="form-control select2" data-placeholder="Choose Exp From" name="exp_to">
                                        <option value="">Year</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Location : </label>
                                    <input class="form-control" type="text" name="location" />
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Country: </label>
                                    <select class="form-control select2" data-placeholder="Choose Country" name="country">
                                        <option value="">Country</option>
                                    @foreach(\App\Models\Country::pluck('name') as $item)
                                       <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Qualification: </label>
                                    <select class="form-control select2" data-placeholder="Choose Qualification" name="qualification">
                                        <option value="">Qualification</option>
                                    @foreach(\App\Models\EducationDetails::pluck('name') as $item)
                                       <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- col-4 -->




                        </div><!-- row -->

                        <div class="form-layout-footer">
                            <button class="btn btn-info" type="submit">Search </button>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- br-section-wrapper -->
    </div>



@endsection
