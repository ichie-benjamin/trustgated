@extends('layouts.master')

@section('content')
                <!-- CONTENT -->
                <div id="content">
                    <div class="container">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">My Account</li>
                </ol>
                <div class="row">
                    <div class="col-md-2 padno">

                    @include('layouts.partials.job-sidebar')
    <!--create-job-->

                <!-- PROFILE VISIBILITY -->
                <div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header avd-serbg">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img src="images/close-icon.png"></span></button>
                <h4 class="modal-title mode-tit" id="myModalLabel">Visibility Settings</h4>
                </div>
                <div class="modal-body avdbg1a">
                    <form class="form-horizontal m10">
                    <div class="row visipad">
                    <div class="col-md-12">
                    <div class="form-group">
                    <div class="visifont"> Your visibility setting currently is:
                    Not Visible</div>
                </div>
                <div class="form-group m20">
                    <div class="radio visipad15 visicol">
                    <div class="clearfix m10"></div>
                    <label> <input type="radio" name="visibility" id="visibility" value="1" />  Visible as Active
                <div class="visifont2">Your profile will be visible in the Jobs database to recruiters. Recruiters will contact you for suitable job opportunities</div>
                </label>
                </div>
                </div>

                <div class="form-group m20">
                    <div class="radio visipad15a visicol">
                    <div class="clearfix m10"></div>
                    <label> <input type="radio" name="visibility" id="visibility1" value="0" />  Visible as Inactive
                <div class="visifont2">Your profile will be visible in the Jobs database, but recruiters will be informed that you are not actively looking for jobs. Recruiters may still contact you for job opportunities </div>
                </label>
                </div>
                </div>

                <div class="form-group m20 ">
                    <div class="radio visipad15 visicol">
                    <div class="clearfix m10"></div>
                    <label> <input type="radio" name="visibility" id="visibility2" value="2" checked/>  Not Visible
                <div class="visifont2">Your profile will not be visible to recruiters. You will not get unadvertised jobs (which comprise up to 40% of all job opportunities on Jobs.com) from recruiters</div>
                </label>
                </div>
                </div>
                <div class="form-group m20 visibor">
                    Regardless of the above settings you can continue to apply to jobs advertised on Jobs.com
                </div>

                <div class="form-group ">

                    <div class="col-sm-3 ">
                    <input name="save2" class="btn-blue btn bc3 " value="Save" type="submit">
                    </div>
                    <div class="col-sm-3 ">
                    <div class="btn-blue btn bc3"><a data-dismiss="modal" href="#" style="color:#FFF"> Cancel </a></div>
                </div>
                </div>

                </div><!--col-md-10-->
                </div> <!--row-->
                </form>
                </div>
                </div>
                </div>
                </div>
                <!-- PROFILE VISIBILITY -->
                </div><!--col-sm-2-->
                <div class="col-md-10 m20" >
                    <span style="float:right"><a href="search-agent.php" style="text-decoration:none;">[Create New Search Agent]</a></span>
                <div class="top-emp-center">
                    <h4>Search Job Agents</h4>
                </div> <!--top-emp-center-->

                <br>
                <br>

                <div class="innerpadding">

                    <hr class="blue" style="margin: -7px 0px 7px 0px;" />

                    <form name="register" id="register" method="post" action="">

                    <table width="100%" cellspacing="0" cellpadding="0" align="center" border="0">
                    <tr><td colspan="7" align="center"> <font color="#CC3333"> <b>
                    </b> </font>
                </td>
                </tr>
                <tr>
                <td width="1%" height="31">&nbsp;</td>
                <td width="19%" align="center" valign="middle"><b> Job Agent</b></td>
                <td width="4%">&nbsp;</td>
                <td width="19%" align="left"   valign="middle"> <b> Agent's Jobs </b> </td>
                <!--<td width="33%" align="center" valign="middle"> <b> Details </b> </td>-->
                <td width="12%" align="center" valign="middle"> <b> View/Edit </b> </td>
                <td width="12%" align="center" valign="middle"> <b> Delete </b> </td>
                </tr>
                <tr><td colspan="7"><hr></td></tr>
                <tr>
                <td height="90" colspan="7" align="center" valign="middle" style="font-size:15px; color:#000099">No Agents Created&nbsp;&nbsp;&nbsp;<a href="create_agent.php" class="link_innerpage">Create New </a></td>
                </tr>
                </table>
                </form>
                </div>
                </div ><!--col-sm-7-->
                </div><!--row-->
                </div><!-- container -->
                </div><!-- CONTENT -->
@endsection
