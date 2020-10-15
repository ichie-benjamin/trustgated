@extends('layouts.master')

@section('content')
    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">My Account</a></li>
                        <li class="active">Sub user Management</li>
                    </ol>
                </div>

                @include('employer.partials.sidebar')


                <div class="col-md-9" >
                    <a href="{{ route('employer.sub_users') }}" style="float:right; padding:5px;" class="btn-blue">View All</a>
                    <div class="top-emp-center">
                        <h4>Add Sub user</h4>
                    </div> <!--top-emp-center-->
                    <form name="form_sub">
                        <table cellpadding="0" cellspacing="0" border="0" style="border:1px solid #a6d6f4; " height="100" width="100%" align="center">
                            <tr>
                                <td valign="middle" colspan="3" height="1"  bgcolor="#FFFFFF"></td>
                            </tr>
                            <tr style="background-color: #E0EEF7;" height="30">
                                <td valign="middle"align="center" width="50" colspan="3"><b>Recuriter information</b></td>
                            </tr>
                            <tr>
                                <td width="45%" align="right">User Name</td>
                                <td width="3%" align="center">:</td>
                                <td align="left"><input style="margin-top:30px;" name="sub_uname" id="sub_uname" type="text" class="textbox-registration" onBlur="chk_av();"  />  &nbsp; <label id="suser_av"> </label></td>
                            </tr>

                            <tr>
                                <td width="45%" align="right">Password</td>
                                <td width="3%" align="center">:</td>
                                <td align="left"><input style="margin-bottom: 30px; margin-top: 30px;" name="sub_pwd" id="sub_pwd" type="password" class="textbox-registration" onKeyPress="document.getElementById('suser_av').innerHTML ='';" /></td>
                            </tr>

                            <tr>
                                <td valign="middle" colspan="3" height="1" style="background-color:#a6d6f4;"></td>
                            </tr>
                            <tr>

                        </table>
                        <br />
                        <table cellpadding="0" cellspacing="0" border="0" style="border:1px solid #a6d6f4;" height="100" width="100%" align="center">
                            <tr>
                                <td valign="middle" height="1"  bgcolor="#FFFFFF"></td>
                            </tr>
                            <tr style="background-color: #E0EEF7;" height="30">
                                <td valign="middle"align="center" width="50"><b>Post Job Type</b></td>
                            </tr>
                            <tr>
                                <td width="45%" align="center" >
                                    <div class="inline col-sm-3" style="margin:0 10px;">
                                        <label for="perm1">
                                            ADD<br>
                                            <label class="checkbox-inline">
                                                <input name="perm1" id="perm1" type="checkbox" value="add" onChange="count_check(this)" />
                                            </label>
                                        </label>
                                    </div>

                                    <div class="inline col-sm-3" style="margin:0 10px;">
                                        <label for="perm2">
                                            EDIT<br>
                                            <label class="checkbox-inline">
                                                <input name="perm2" id="perm2" type="checkbox" value="edit" onChange="count_check(this)"/>
                                            </label></label>
                                    </div>

                                    <div class="inline col-sm-3" style="margin:0 10px;">
                                        <label for="perm3">
                                            DELETE<br>
                                            <label class="checkbox-inline">
                                                <input name="perm3" id="perm3" type="checkbox" value="delete" onChange="count_check(this)" />
                                            </label></label>
                                    </div>
                                </td>
                            </tr>

                        </table>
                        <br>
                        <table cellpadding="0" cellspacing="0" border="0" style="border:1px solid #a6d6f4;" height="100" width="100%" align="center">
                            <tr>
                                <td valign="middle" height="1"  bgcolor="#FFFFFF"></td>
                            </tr>
                            <tr style="background-color: #E0EEF7;" height="30">
                                <td valign="middle"align="center" width="50"><b>Response Type</b></td>
                            </tr>
                            <tr>
                                <td width="45%" align="center">
                                    <div class="inline col-sm-5" style="margin:0 10px;">
                                        <label for="resp1">
                                            View Job<br>
                                            <label class="checkbox-inline">
                                                <input name="resp1" id="resp1" type="checkbox" value="view" onChange="count_check(this)" />
                                            </label></label>
                                    </div>

                                    <div class="inline col-sm-5" style="margin:0 10px;">
                                        <label for="resp2">
                                            Resume Access<br>
                                            <label class="checkbox-inline">
                                                <input name="resp2" id="resp2" type="checkbox" value="access" onChange="count_check(this)" />
                                            </label></label>
                                    </div>

                                </td>
                            </tr>

                        </table>
                        <br />
                        <div align="center">
{{--                            <img src="images/add-subuser.png" border="0px" style="cursor:pointer;" onClick="sub_save('91');" />--}}
                            <input class="btn btn-success" value="Save User" type="button">
                        </div>
                    </form>
                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
@endsection
