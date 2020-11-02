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
