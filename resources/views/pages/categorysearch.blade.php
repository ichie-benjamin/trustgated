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
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('searchall') }}"> Jobs</a></li>
                        <li class="active">Industry Search</li>
                    </ol>
                </div>
                <div class="col-md-12" style="margin-left:0px; margin-top:20px;  margin-bottom: 5px;">
                    <div class="box radius" style="min-height: 20px; height: auto; padding: 10px;">
                        <div class="searchtool">
                            <!--<a href="javascript:void(0);" onClick="ajaxcategory('num')">0 - 9</a> | -->

                            @foreach (range('A', 'Z') as $char)
                                <a href="{{ route('categorysearch') }}?indus={{ $char }}">{{ $char }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>


                <!--col-md-2-->

                <!--col-md-7-->

                <div class="col-md-12" style=" min-height:100px; height:auto; margin-left:0px; margin-top:-20px;">
                    <div class="box radius" style="padding:13px;">
                        <div class="searchtoolresult">
                            <h6>
                                Industry List
                                <span style="font-size:12px; float:right;">Random List</span>
                            </h6><hr>

                            <ul>

                                @foreach ($industries as $item)
                                    <li>

                                        <a href="{{ route('jobsearch') }}?industry={{ $item->id }}" style=" display: inline-block;">{{ $item->category }} </a>
                                        <span style="float:right; display:inline-block;">
							[ 0 ]
						</span>

                                    </li>

                                @endforeach

                            </ul>


                        </div>
                    </div>
                </div>
                <!--col-md-3-->

            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
    <!--ADVANCED SEARCH POPUP-->


@endsection
