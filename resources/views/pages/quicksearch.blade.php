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
                        <li class="active">Quick Search</li>
                    </ol>
                </div>
                <!--col-md-2-->

                <!--col-md-7-->

                <div class="col-md-9" style="  margin-left:0px;">

                    <div class="box radius fixheight" style="padding:0px 13px; height:430px !important; ">

                        <h4 style="margin: 0; padding: 5px 0px 0px 3px;">Quick Search</h4>

                        <form action="{{ route('jobsearch') }}" method="GET" style="overflow:hidden;">

                            <div class="srchbar" style=" margin-top: 7px; padding:20px; height:150px !important;">

                                <div class="grid_5" style="padding:10px;">

                                    <P>Type to search your desired jobs</P>

                                    <input type="text" id="keyword" class="full" name="quick" autocomplete="off">

                                </div>

                                <div class="grid_4" style=" padding:10px; margin: 13px;">

                                    <!--<a href="search.htm" class="gobtn">Search</a>-->

                                    <button type="submit" class="btn btn-blue" style="line-height: 35px;">Search</button>

                                </div>

                            </div>

                        </form>

                        <div class="srchbar" style="padding:10px; margin-top: 15px; height:200px !important;">



                            <p style="color:#000; width:95%;">

                                <b>Jobs By Functions:</b><br />


                                <a href="searchpage.php?searchindus&indus=41">Transportation/Logistics</a>

                                |
                                <a href="searchpage.php?searchindus&indus=45">Others</a>

                                |
                                <a href="searchpage.php?searchindus&indus=54">NGO/Social Services</a>

                                |
                                <a href="searchpage.php?searchindus&indus=37">Media/Journalism</a>

                                |
                                <a href="searchpage.php?searchindus&indus=51">Media </a>


                                | <a href="categorysearch.php" style="font-weight:bold; text-decoration:none;"><strong>View More..</strong></a>



                            </p>



                            <p style="color:#000; width:95%;">

                                <b>Jobs By Locations:</b> <br />

                                <a href="jobsearch.php?locationsearch&loc=Indore"  class="side-link">
                                    Indore
                                </a>

                                |

                                <a href="{{ route('job_by_area') }}" style="font-weight:bold; text-decoration:none;">View More ...</a>




                            </p>

                        </div>

                    </div>

                </div>

                @include('pages.partials.right_sidebar')

            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
    <!--ADVANCED SEARCH POPUP-->
@endsection
