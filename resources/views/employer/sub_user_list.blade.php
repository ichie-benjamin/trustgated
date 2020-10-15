@extends('layouts.master')

@section('content')
    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="employer-profile-view.php">My Account</a></li>
                        <li class="active">Sub user Management</li>
                    </ol>
                </div>

                @include('employer.partials.sidebar')


                <div class="col-md-9" ><a href="{{ route('employer.add_sub_user') }}" style="float:right; padding:5px;" class="btn-blue">ADD</a>
                    <div class="top-emp-center">
                        <h4>Sub user Management</h4>
                    </div> <!--top-emp-center-->
                    <div style="color:#009900; padding:5px; font-family:'Times New Roman', Times, serif; font-style:italic;"> 					</div>
                    <table cellpadding="0" cellspacing="0" border="0" style="border:1px solid #a6d6f4; border-bottom: 1px solid #a6d6f4"  width="100%" align="center">
                        <tr>
                            <td valign="middle" colspan="10" height="1"  bgcolor="#FFFFFF"></td>
                        </tr>
                        <tr style="background-color: #E0EEF7;">
                            <td valign="middle"align="center" width="50"><b>S.No</b></td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle"height="35" align="center"  width="150"><b>User Name</b></td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>

                            <td valign="middle"align="center" width="75"><b>BLOCK</b></td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle"align="center" width="75"><b>EDIT</b></td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle"align="center" width="75"><b>DELETE</b></td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <!--<td valign="middle"align="center" width="75"><b>REFRESH</b></td>-->
                        </tr>
                        <tr>
                            <td valign="middle" colspan="10" height="1" style="background-color:#a6d6f4;"></td>
                        </tr>
                        <tr>


                            <td valign="middle"height="35" align="center"> 1 </td>

                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle"align="center"> &nbsp; Ahmad  </td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>

                            <td valign="middle"height="35" align="center">


                                <a href="javascript:void(0);" class="search-link" onClick="save_userstatus('12','0'); return false;">
                                    <span class="fa fa-check" aria-hidden="true"></span></a>



                            </td>

                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle"height="35" align="center">
                                <a href="#">
                                    <span class="fa fa-edit" aria-hidden="true" title="Edit User"></span></a>
                            </td>
                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <td valign="middle"align="center">

                                <a href="#" onClick="if(confirm('Do You Want Delet This User !!!')){return true ;}else{return false;}" >
                                    <span class="fa fa-remove" title="Remove User" aria-hidden="true"></span>
                                </a>
                                <!--<a href="delete_suser.php?id=12">
                                <img src="images/delete-11.png" border="0" title="Delete" />
                                </a>-->
                            </td>

                            <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                            <!--<td valign="middle"align="center" width="40">
                            <a href="javascript:location.reload(true)">
                            <img src="images/refresh.png" border="0px" title="Refresh"/> </a>
                            </td>-->
                        </tr>


                        <td valign="middle"height="35" align="center"> 2 </td>

                        <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                        <td valign="middle"align="center"> &nbsp; benny  </td>
                        <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>

                        <td valign="middle"height="35" align="center">


                            <a href="javascript:void(0);" class="search-link" onClick="save_userstatus('13','0'); return false;">
                                <span class="fa fa-check" aria-hidden="true"></span></a>



                        </td>

                        <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                        <td valign="middle"height="35" align="center">
                            <a href="#">
                                <span class="fa fa-edit" aria-hidden="true" title="Edit User"></span></a>
                        </td>
                        <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>
                        <td valign="middle"align="center">

                            <a href="#" onClick="if(confirm('Do You Want Delet This User !!!')){return true ;}else{return false;}" >
                                <span class="fa fa-remove" title="Remove User" aria-hidden="true"></span>
                            </a>
                            <!--<a href="delete_suser.php?id=12">
                            <img src="images/delete-11.png" border="0" title="Delete" />
                            </a>-->
                        </td>

                        <td valign="middle" align="left" width="1" bgcolor="#FFFFFF"></td>

                        </tr>

                    </table>
                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
@endsection
