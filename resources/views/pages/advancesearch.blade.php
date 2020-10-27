@extends('layouts.master')

@section('style')
    <link rel="stylesheet" href="/assets/css/dev.css" type="text/css" />

@endsection

@section('content')
    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#"> Jobs</a></li>
                        <li class="active">Advanced Search</li>
                    </ol>
                </div>

                <br />

                <!--col-md-2-->

                <!--col-md-7-->

                <div class="col-md-9" style="  margin-left:0px; margin-top:0px;">
                    <div class="box radius fixheight" style="padding:0px 13px; height:400px !important;">
                        <h4 style="margin:0; padding: 4px 2px;">Advanced Search</h4>
                        <form name="advancesearchform" action="{{ route('jobsearch') }}" method="get">
{{--                            @csrf--}}
                            <div class="srchbar" style=" margin-top: 0px; height:360px !important; ">

                                <div class="col-md-6" style="  padding: 10px;">
                                    <P style="margin:0;">Keyword</P>
                                    <input type="text" id="ad-keyword" style="width: 100%; margin-bottom: 10px;" name="keyword" autocomplete="off">

                                    <P >Location</P>
                                    <select name="location" style="width: 100%; margin-bottom: 10px;">
                                        @foreach($locations as $key => $value)
                                            <option value="{{ $key }}">{{ $key }}</option>
                                        @endforeach
                                    </select>
                                    <P>Experience</P>
                                    <input  type="text" id="ad-keyword" style="width: 100%; margin-bottom: 10px;" name="experience" autocomplete="off">


                                    <P style="margin:0;">Salary</P>
                                    <input type="number" id="ad-keyword" style="width: 100%; margin-bottom: 10px;" name="salary" autocomplete="off">


                                </div><!----col-md-6---->
                                <div class="col-md-6" style="  padding: 10px;">
                                    <P style="margin:0;">Functional area</P>

                                    <select required name="f_areas" style="width: 100%; margin-bottom: 10px;">
                                        @foreach($f_areas as $key => $value)
                                            <option value="{{ $value }}">{{ $key }}</option>
                                        @endforeach
                                    </select>


                                    <P style="margin:0;">Job industry</P>
                                    <select  name="category" style="width: 100%; margin-bottom: 10px;">
                                      @foreach($industries as $key => $value)
                                            <option value="{{ $value }}">{{ $key }}</option>
                                        @endforeach
                                    </select>

                                    <!--<P style="margin:0;">Job role</P>
                                    <span id="advjobrole">
                                    <select name="advrole" style="width: 100%; margin-bottom: 10px;">
                                    <option value="">Select functional area first</option>
                                    </select>-->
                                    </span>
                                </div><!----col-md-6---->

                                <div class="col-md-12" style="margin-bottom:20px; text-align:center;" >
                                    <!--<a href="search.htm" class="gobtn" style="margin:0;">Search</a> -->
                                    <button class="btn btn-blue" name="advancesearch" value="yes" style="margin:0; line-height: 32px; height: 36px;">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                @include('pages.partials.right_sidebar')

            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
    <!--ADVANCED SEARCH POPUP-->
@endsection
