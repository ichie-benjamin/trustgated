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

                <div class="col-md-9" ><!--<a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/add_sub_user.html" style="float:right; padding:5px;" class="btn-blue">ADD</a>-->
                    <div class="top-emp-center">
                        <h4>Product List</h4>
                    </div> <!--top-emp-center-->
                    <div style="color:#009900; padding:5px; "> 					</div>
                    <div class="innerpadding" style="text-align: center;">
                        <!--<h2 class="noshade radius">Product List</h2>
                        <hr class="blue" style="margin: -7px 0px 7px 0px;" />--><br>
                        <form name="frm_pack" action="#" method="post" onSubmit="return validate();" style="overflow: visible;">
                            <div class="products row" >
                                <div class="col-md-6">
                                    <table cellpadding="0" cellspacing="0" width="100%" height="125" style="border:1px solid #a6d6f4;">
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
                                </div>

                                <div class="col-md-6">
                                    <table cellpadding="0" cellspacing="0" width="100%" style="border:1px solid #a6d6f4;" height="175">
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
                                </div>
                                <br><br>
                                <div class="col-md-6">
                                    <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#f1f9fe" style="border:1px solid #a6d6f4;" height="150">
                                        <tr>
                                            <td height="35"><!--bgcolor="#3188c4" -->
                                                <h6 style="padding:4px; margin-top:10px;">Resume Access</h6>
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" align="center">
                                                <table width="90%" cellpadding="0" cellspacing="0" style="padding-top:6px;">
                                                    <input type="hidden" name="option" value="">
                                                    <tr>
                                                        <td valign="middle" align="center" width="10%" height="25">
                                                            <label class="radio-inline"><input type="radio"  name="access" id="0" value="1" onClick="calPrice(this.value,'access')" /></label>
                                                        </td>
                                                        <td valign="middle" width="88%" style="padding-top:4px;">
                                                            <label for="0">
                                                                FREE 0								</label><br>



                                                            <span style="font-weight:normal; font-size:10px;">
								Resume Download : 3000,
								Email send : 3000,
																Featured List : Yes
																</span>
                                                            <input type="hidden" id="accPrice_1" name="accPrice_1" value="0" />

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="middle" align="center" width="10%" height="25">
                                                            <label class="radio-inline"><input type="radio"  name="access" id="500" value="3" onClick="calPrice(this.value,'access')" /></label>
                                                        </td>
                                                        <td valign="middle" width="88%" style="padding-top:4px;">
                                                            <label for="500">
                                                                Silver 500								</label><br>



                                                            <span style="font-weight:normal; font-size:10px;">
								Resume Download : 20,
								Email send : 3,
																</span>
                                                            <input type="hidden" id="accPrice_3" name="accPrice_3" value="500" />

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="middle" align="center" width="10%" height="25">
                                                            <label class="radio-inline"><input type="radio"  name="access" id="4000" value="4" onClick="calPrice(this.value,'access')" /></label>
                                                        </td>
                                                        <td valign="middle" width="88%" style="padding-top:4px;">
                                                            <label for="4000">
                                                                platinum 4000								</label><br>



                                                            <span style="font-weight:normal; font-size:10px;">
								Resume Download : 50,
								Email send : 5,
																</span>
                                                            <input type="hidden" id="accPrice_4" name="accPrice_4" value="4000" />

                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="col-md-6">
                                    <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#f1f9fe" style="border:1px solid #a6d6f4; height:115px;" >
                                        <tr>
                                            <td height="35"><!--bgcolor="#3188c4" -->
                                                <h6 style="padding:4px; margin-top:10px;">Job Posting Access</h6>
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" align="center">
                                                <table width="90%" cellpadding="0" cellspacing="0" style="padding-top:6px;">
                                                    <tr>
                                                        <td valign="middle" align="center" width="10%" height="25">
                                                            <label class="radio-inline"><input type="radio"  name="postings" id="1500" value="3" onClick="calPrice(this.value,'posting')" />
                                                        </td></label>
                                                        <td valign="middle" width="88%" style="padding-top:4px;">
                                                            <label for="1500">Job Posting Offer 1500</label><br>
                                                            <span style="font-weight:normal; font-size:10px;">
								Days limit : 90,
								</span>
                                                            <input type="hidden" id="postPrice_3" name="job_3" value="1500" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="middle" align="center" width="10%" height="25">
                                                            <label class="radio-inline"><input type="radio"  name="postings" id="2700" value="4" onClick="calPrice(this.value,'posting')" />
                                                        </td></label>
                                                        <td valign="middle" width="88%" style="padding-top:4px;">
                                                            <label for="2700">Silver Job Posting 2700</label><br>
                                                            <span style="font-weight:normal; font-size:10px;">
								Days limit : 90,
								</span>
                                                            <input type="hidden" id="postPrice_4" name="job_4" value="2700" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="middle" align="center" width="10%" height="25">
                                                            <label class="radio-inline"><input type="radio"  name="postings" id="50" value="5" onClick="calPrice(this.value,'posting')" />
                                                        </td></label>
                                                        <td valign="middle" width="88%" style="padding-top:4px;">
                                                            <label for="50">Web Developer 50</label><br>
                                                            <span style="font-weight:normal; font-size:10px;">
								Days limit : 500,
								</span>
                                                            <input type="hidden" id="postPrice_5" name="job_5" value="50" />
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="inline" style="width:98%; text-align:center;">
                                    <input type="submit" value="Send request" name="free_order" class="btn btn-success" style="margin-top: 30px" />
                                    <input type="hidden" name="payment_mode" id="payment_mode" value="free">

                                    <input type="hidden" name="paymentmethoddb" id="paymentmethoddb" value="free">
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
