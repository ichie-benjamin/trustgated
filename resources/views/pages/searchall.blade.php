@extends('layouts.master')

@section('content')
    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#"> Jobs</a></li>
                        <li class="active">Search</li>
                    </ol>
                </div>
                <!--col-md-2-->

                <!--col-md-7-->

                <div class="col-md-9"><br />
                    <div class="col-md-6" style="border:1px solid #a1d8ff; height:126px;">
                        <div align="center">
                            <a href="{{ route('quicksearch') }}">
                                <img class="img-responsive" src="{{ asset('/assets/images/quick-search-menu.jpg') }}" alt="Quick Search" title="Quick Search" border="0"  />
                            </a>
                        </div>
                        <div align="center" style="margin-bottom: 10px;">
                            <span class="sub_heading3">View the Names of your job agent , which you have created.</span>
                        </div>
                    </div>


                    <div class="col-md-6" style="border:1px solid #a1d8ff; height:126px;">
                        <div align="center">
                            <a href="{{ route('advancedsearch') }}">
                                <img class="img-responsive" src="/assets/images/Advance-search-menu.jpg" alt="Advanced Search" title="Advanced Search" border="0"  />
                            </a>
                        </div>
                        <div align="center" style="margin-bottom: 10px;">
                            <span class="sub_heading3">Edit the Job Agent details to view the job posted.</span>
                        </div>
                    </div>



                    <div class="col-md-6" style="border:1px solid #a1d8ff; height:126px;">
                        <div align="center">
                            <a href="{{ route('company_job') }}">
                                <img class="img-responsive" src="/assets/images/search_by_company-menu.jpg" alt="Search by Company" title="Search by Company" border="0"  />
                            </a>
                        </div>
                        <div align="center" style="margin-bottom: 10px;">
                            <span class="sub_heading3">List of jobs of  available to the Company </span>
                        </div>
                    </div>


                    <div class="col-md-6" style="border:1px solid #a1d8ff; height:126px;">
                        <div align="center">
                            <a href="{{ route('categorysearch') }}">
                                <img class="img-responsive" src="/assets/images/search_by_industry-menu.jpg" alt="Industry wise Search" title="Industry wise Search" border="0" />
                            </a>
                        </div>
                        <div align="center" style="margin-bottom: 10px;">
                            <span class="sub_heading3">List of jobs of  available to the users under the different categories</span>
                        </div>
                    </div>
                </div>

                @include('pages.partials.right_sidebar')

            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
    <!--ADVANCED SEARCH POPUP-->
    @endsection
