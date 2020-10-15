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
                        <li class="active">Transaction Details</li>
                    </ol>
                </div>

              @include('employer.partials.sidebar')

                <div class="col-md-9" ><!--<a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/add_sub_user.html" style="float:right; padding:5px;" class="btn-blue">ADD</a>-->
                    <div class="top-emp-center">
                        <h4>Transaction Details</h4>
                    </div> <!--top-emp-center-->
                    <div style="color:#009900; padding:5px; font-family:'Times New Roman', Times, serif; font-style:italic;"> 					</div>
                    <table cellpadding="0" cellspacing="0" border="0" style="border:1px solid #BACDDC; width:100%;"   align="center"  bgcolor="#F1F9FE">
                        <tr>
                            <td valign="middle" colspan="7" height="35" style="background-color:#95B3D7;">&nbsp; &nbsp; <font color="#FFFFFF" size="3"><b>Resume Access </b></font></td>
                        </tr>
                        <tr bgcolor="#e0eef7">
                            <td valign="middle"align="center" width="100" height="35" ><b>S.No</b></td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="center"><b>Transaction Details</b></td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle"align="center" width="350"><b>Product</b></td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle"align="center" width="150"><b>Status</b></td>
                        </tr>

                        <!--	<tr> <td> <br /> </td> </tr>	-->



                        <tr>
                            <td valign="middle"height="50" align="center">1</td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="left" style="padding-left:20px;">
                                <b>Purchase Date</b><br>24-09-2020									<br />
                                <b>Expiry Date</b><br>02-01-2021									<br />
                                <b>Invoice No.</b> 117								</td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="center">platinum </td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle"align="center">Active</td>
                            <!-- </tr>   <tr> <td> <br /> </td> </tr>-->




                        <tr>
                            <td valign="middle"height="50" align="center">2</td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="left" style="padding-left:20px;">
                                <b>Purchase Date</b><br>23-09-2020									<br />
                                <b>Expiry Date</b><br>07-11-2020									<br />
                                <b>Invoice No.</b> 116								</td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="center">Silver </td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle"align="center"><span style='color:red;'>Inactive</span></td>
                            <!-- </tr>   <tr> <td> <br /> </td> </tr>-->




                        <tr>
                            <td valign="middle"height="50" align="center">3</td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="left" style="padding-left:20px;">
                                <b>Purchase Date</b><br>07-08-2020									<br />
                                <b>Expiry Date</b><br>05-11-2020									<br />
                                <b>Invoice No.</b> 115								</td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="center">FREE </td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle"align="center"><span style='color:red;'>Inactive</span></td>
                            <!-- </tr>   <tr> <td> <br /> </td> </tr>-->





                    </table>
                    <br />
                    <table cellpadding="0" cellspacing="0" border="0" style="border:1px solid #BACDDC; width:100%;"  align="center"  bgcolor="#F1F9FE">
                        <tr>
                            <td valign="middle" colspan="7" height="35" style="background-color:#95B3D7;">&nbsp; &nbsp; <font color="#FFFFFF" size="3"><b>Job Posting</b></font></td>
                        </tr>

                        <tr bgcolor="#E0EEF7">
                            <td valign="middle"align="center" width="100" height="35" ><b>S.No</b></td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="center"><b>Transaction Details</b></td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle"align="center" width="350"><b>Product</b></td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle"align="center" width="150"><b>Status</b></td>
                        </tr>

                        <!--	<tr> <td> <br /> </td> </tr>	-->

                        <tr>
                            <td valign="middle"height="50" align="center">1</td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="left" style="padding-left:20px;">
                                <b>Purchase Date</b><br>
                                13-10-2020<br />
                                <b>Expiry Date</b>
                                <br>
                                11-01-2021 <br />
                                <b>Invoice No:</b> 65								</td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="center"> Job Posting Offer </td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="center">
                                <span style='color:red;'>Inactive</span>			  </span></td>
                        </tr> 						<!--<tr> <td> <br /> </td> </tr>-->

                        <tr>
                            <td valign="middle"height="50" align="center">2</td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="left" style="padding-left:20px;">
                                <b>Purchase Date</b><br>
                                23-09-2020<br />
                                <b>Expiry Date</b>
                                <br>
                                22-12-2020 <br />
                                <b>Invoice No:</b> 64								</td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="center"> Job Posting Offer </td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle" align="center">
                                <span style='color:red;'>Inactive</span>			  </span></td>
                        </tr> 						<!--<tr> <td> <br /> </td> </tr>-->



                    </table>
                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
    <!--ADVANCED SEARCH POPUP-->
@endsection
