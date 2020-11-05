@extends('layouts.master')

@section('content')
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#">My Account</a></li>
                        <li class="active">Candidate Profile</li>
                    </ol>
                </div>

                <div style="float:right; padding:5px 2px;">
                    Resume : <strong></strong>
                </div>
                <div class="top-emp-center">
                    <h4>Candidate Profile</h4>
                </div>
                <br />
                <hr class="blue" style="margin: -7px 0px 7px 0px;" />
                <div class="col-md-8">
                    <div class="box radius" style="margin-left:3px; ">
                        <div class="innerpadding">
                            <div class="procinfobar table-responsive" >
                                <table width="100%" class="">

                                    <tr>
                                        <td valign="top" colspan="2" align="center" style="padding:10px;">

                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="profile_big_box" >
                                                <tr>
                                                    <td style="margin:5px;">

                                                        <table width="100%" border="0" cellspacing="2" cellpadding="4"  >
                                                            <tr>
                                                                <td width="120" height="120" align="center">
                                                                    <div id="demo">
                                                                        <img src="{{ $user->avatar  }}"  border="0" width="100" height="110"  style="border:1px solid #d6d6d6; z-index:1; background-color:#FFFFFF; padding:3px;"/>
                                                                    </div>
                                                                </td>
                                                                <td style="vertical-align: top;">
                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="profile_mainclass" style="color:#666666; margin-top:7px;">
                                                                        <tr>
                                                                            <td height="30"> <span style="font-size:24px; font-weight:bold; font-family:'Times New Roman', Times, serif; color:#000000; letter-spacing:2px;">{{ $user->name }} </span> </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="23" >
	<span style="color:#333333; font-size:16px; letter-spacing:1px;">
    </span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td height="22">
  <span style="color:#666666; font-size:12px; letter-spacing:1px;">
  {{ $user->username }} | &nbsp;

 {{ $user->functional_area }}
  </span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td height="22" style="padding-top:3px;">


                                                                            </td>
                                                                        </tr>

                                                                    </table>

                                                                </td>
                                                            </tr>
                                                        </table>


                                                        <div style=" border-bottom:1px dashed #CCCCCC; margin-left:25px; margin-right:25px;"></div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>

                                                        <table width="100%" border="0" cellspacing="0" cellpadding="3"  class="profile_mainclass_2">
                                                            <tr>
                                                                <td width="20%" height="1"></td>
                                                                <td width="80%"></td>
                                                            </tr>

                                                            <tr >
                                                                <td align="right" valign="top"><span id="profile_co_01">Resume headline</span></td>
                                                                <td style="padding-left:12px; letter-spacing:1px; font-family:Arial, Helvetica, sans-serif;"><strong>{{ $user->headline }}</strong>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td align="right" valign="top" style="padding-top:10px;" ><span id="profile_co_01">Key Skills</span></td>
                                                                <td style="padding-left:12px; letter-spacing:1px; padding-top:10px;" valign="top" height="26">
                                                                    {{ $user->skills }}</td>
                                                            </tr>


                                                            <tr>
                                                                <td align="right" ><span id="profile_co_01">Experience</span></td>
                                                                <td style="padding-left:12px; letter-spacing:1px;" height="26">
                                                                    {{ $user->exp }}</td>
                                                            </tr>


                                                            <tr>
                                                                <td align="right" ><span id="profile_co_01">Functional area</span></td>
                                                                <td style="padding-left:12px; letter-spacing:1px;" height="26">
                                                                    {{ $user->functional_area }}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </table>

                                                    </td>
                                                </tr>
                                            </table>


                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
                                                <tr>
                                                    <td style="font-family:Arial, Helvetica, sans-serif; color:#818181; font-size:16px; padding:5px; border-bottom:1px solid #e0e0e0; letter-spacing:2px;">Summary</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px; text-align:justify; font-size:12px; letter-spacing:1px; color:#353535;">{{ $user->info }}</td>
                                                </tr>
                                            </table>



                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
                                                <tr>
                                                    <td style="font-family:Arial, Helvetica, sans-serif; color:#818181; font-size:16px; padding:5px; border-bottom:1px solid #e0e0e0;letter-spacing:2px;">Academic - Institute Details</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px; text-align:justify; letter-spacing:1px; color:#353535;">

                                                        <span style="font-family:Arial, Helvetica, sans-serif; letter-spacing:2px; color:#1b1b1b; font-size:13px; font-weight:bold; "></span> <br />
                                                        <span style="font-family:Arial, Helvetica, sans-serif; letter-spacing:2px; color:#006699; font-size:13px; font-weight:bold; ">{{ $user->basic_education }}</span> <br />

                                                        <span style="  letter-spacing:1px; color:#353535;">
	</span>



                                                    </td>
                                                </tr>
                                            </table>




                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="clear">&nbsp;</div>

                    </div>
                </div>
                <div class="col-md-4">
                    <iframe src="{{ $user->cv }}" width="100%" height="500"></iframe>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('style')

@endsection
