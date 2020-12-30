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
                        <li><a href="{{ route('employer.profile') }}">My Account</a></li>
                        <li class="active">Product List</li>
                    </ol>
                </div>

                @include('employer.partials.sidebar')

                <div class="col-md-9" >

                    @if (session('failure'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <strong>Error!</strong> {{ session('failure') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <div class="top-emp-center">
                        <h4>Product List</h4>
                    </div> <!--top-emp-center-->
                    <div style="color:#009900; padding:5px; "> 					</div>
                    <div class="innerpadding" style="text-align: center;">
                        <!--<h2 class="noshade radius">Product List</h2>
                        <hr class="blue" style="margin: -7px 0px 7px 0px;" />--><br>
                        <form action="{{ route('plan.purchase') }}" method="POST" style="overflow: visible;">
                            @csrf
                            <div class="products row" >
                                <div class="col-md-6">
                                    <table cellpadding="0" cellspacing="0" width="100%" height="125" style="border:1px solid #a6d6f4;">
                                        <tr>
                                            <td>
                                                <h6 class="text-center" style="margin-top: 10px">Search Resume Database-Instantly</h6>
                                                <hr>
                                                <ul style="list-style:none;">

                                                    <li>Search qualified resumes through worldclass search engine</li>
                                                    <li>View, save & organize resumes online</li>
                                                    <li>Get access to resume database instantly									</li>
                                                    <li><br></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </table>

{{--                                    <hr />--}}

                                    <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#f1f9fe" style="border:1px solid #a6d6f4;" height="150">
                                        <tr>
                                            <td height="35"><!--bgcolor="#3188c4" -->
                                                <h6 style="padding:4px; margin-top:10px; font-weight: bold; font-size: 1.5em">Resume Access</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" align="center">
                                                <table width="90%" cellpadding="0" cellspacing="0" style="padding-top:6px;">
                                                    @foreach(\App\Models\DatabaseProduct::all() as $item)
                                                        <tr>
                                                            <td height="25">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="db_access_id" value="{{ $item->id }}" />
                                                                </label>
                                                            </td>
                                                            <td style="padding-top:10px;">
                                                                <label for="0" style="font-size: 1.3em; font-weight: bold">{{ $item->name }} ({{ $item->price }})</label><br>
                                                                <span style="font-weight:normal; font-size:10px;">
                                                                No of Days : {{ $item->no_of_days }},<br/>
                                                                Resume Download : {{ $item->no_of_resumes }},<br/>
                                                                Email send : {{ $item->no_of_emails }},<br/>
																Join Featured List : {{ $item->become_future_list ? 'Yes': 'No' }}
                                                            </span>
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </td>
                                        </tr>
                                    </table>

                                </div>

                                <div class="col-md-6">
                                    <table cellpadding="0" cellspacing="0" width="100%" style="border:1px solid #a6d6f4;" height="175">
                                        <tr>
                                            <td>
                                                <h6 style="margin-top: 10px" class="text-center mt-4">Advertise Your Jobs-instantly</h6>
                                                <hr>
                                                <ul style="list-style:none;">
                                                    <li>Qualified and screened applicant</li>
                                                    <li>No word limit or space constraint</li>
                                                    <li>Post any time, any day, and get resumes immediately</li>
                                                    <li>Post your job instantly</li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </table>

{{--                                    <hr />--}}
                                    <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#f1f9fe" style="border:1px solid #a6d6f4;" height="150">
                                        <tr>
                                            <td height="35"><!--bgcolor="#3188c4" -->
                                                <h6 style="padding:4px; margin-top:10px; font-weight: bold; font-size: 1.5em">Job Posting Access</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" align="center">
                                                <table width="90%" cellpadding="0" cellspacing="0" style="padding-top:6px;">
                                                    @foreach(\App\Models\Products::all() as $item)
                                                        <tr>
                                                            <td height="25">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="job_posting_id" value="{{ $item->id }}"/>
                                                                </label>
                                                            </td>
                                                            <td style="padding-top:10px;">
                                                                <label for="0" style="font-size: 1.3em; font-weight: bold">{{ $item->name }} ({{ $item->price }})</label><br>
                                                                <span style="font-weight:normal; font-size:10px;">
                                                                No of Days : {{ $item->no_of_days }},<br/>
                                                                Resume Download : {{ $item->no_of_jobs }},<br/>
                                                            </span>
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </td>
                                        </tr>
                                    </table>

                                </div>
                                <br><br>
{{--                                <div class="col-md-6">--}}
{{--                                    <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#f1f9fe" style="border:1px solid #a6d6f4;" height="150">--}}
{{--                                        <tr>--}}
{{--                                            <td height="35"><!--bgcolor="#3188c4" -->--}}
{{--                                                <h6 style="padding:4px; margin-top:10px; font-weight: bold; font-size: 1.5em">Resume Access</h6>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td valign="top" align="center">--}}
{{--                                                <table width="90%" cellpadding="0" cellspacing="0" style="padding-top:6px;">--}}
{{--                                                    @foreach(\App\Models\DatabaseProduct::all() as $item)--}}
{{--                                                    <tr>--}}
{{--                                                        <td height="25">--}}
{{--                                                            <label class="radio-inline">--}}
{{--                                                                <input type="radio" name="db_access_id" value="{{ $item->id }}" />--}}
{{--                                                            </label>--}}
{{--                                                        </td>--}}
{{--                                                        <td style="padding-top:10px;">--}}
{{--                                                            <label for="0" style="font-size: 1.3em; font-weight: bold">{{ $item->name }} ({{ $item->price }})</label><br>--}}
{{--                                                            <span style="font-weight:normal; font-size:10px;">--}}
{{--                                                                No of Days : {{ $item->no_of_days }},<br/>--}}
{{--                                                                Resume Download : {{ $item->no_of_resumes }},<br/>--}}
{{--                                                                Email send : {{ $item->no_of_emails }},<br/>--}}
{{--																Join Featured List : {{ $item->become_future_list ? 'Yes': 'No' }}--}}
{{--                                                            </span>--}}
{{--                                                        </td>--}}

{{--                                                    </tr>--}}
{{--                                                    @endforeach--}}
{{--                                                </table>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    </table>--}}
{{--                                </div>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#f1f9fe" style="border:1px solid #a6d6f4;" height="150">--}}
{{--                                        <tr>--}}
{{--                                            <td height="35"><!--bgcolor="#3188c4" -->--}}
{{--                                                <h6 style="padding:4px; margin-top:10px; font-weight: bold; font-size: 1.5em">Job Posting Access</h6>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td valign="top" align="center">--}}
{{--                                                <table width="90%" cellpadding="0" cellspacing="0" style="padding-top:6px;">--}}
{{--                                                    @foreach(\App\Models\Products::all() as $item)--}}
{{--                                                        <tr>--}}
{{--                                                            <td height="25">--}}
{{--                                                                <label class="radio-inline">--}}
{{--                                                                    <input type="radio" name="job_posting_id" value="{{ $item->id }}"/>--}}
{{--                                                                </label>--}}
{{--                                                            </td>--}}
{{--                                                            <td style="padding-top:10px;">--}}
{{--                                                                <label for="0" style="font-size: 1.3em; font-weight: bold">{{ $item->name }} ({{ $item->price }})</label><br>--}}
{{--                                                                <span style="font-weight:normal; font-size:10px;">--}}
{{--                                                                No of Days : {{ $item->no_of_days }},<br/>--}}
{{--                                                                Resume Download : {{ $item->no_of_jobs }},<br/>--}}
{{--                                                            </span>--}}
{{--                                                            </td>--}}

{{--                                                        </tr>--}}
{{--                                                    @endforeach--}}
{{--                                                </table>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    </table>--}}

{{--                                </div>--}}
                                <div class="" style="width:98%; text-align:center;">
                                    <input type="submit" value="Place Order" class="btn btn-success" style="margin-top: 30px" />
                                </div>

                            </div>
                        </form>
                    </div>
                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
    <!--ADVANCED SEARCH POPUP-->
@endsection
