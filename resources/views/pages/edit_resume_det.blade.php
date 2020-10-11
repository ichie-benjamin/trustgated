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
                        <li><a href="jobseeker-profile.html">My Account</a></li>
                        <li class="active">Edit Details</li>
                    </ol>
                </div>
                <div class="col-md-3">

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
                                                        <label> <input type="radio" name="visibility" id="visibility1" value="0" checked/>  Visible as Inactive
                                                            <div class="visifont2">Your profile will be visible in the Jobs database, but recruiters will be informed that you are not actively looking for jobs. Recruiters may still contact you for job opportunities </div>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group m20 ">
                                                    <div class="radio visipad15 visicol">
                                                        <div class="clearfix m10"></div>
                                                        <label> <input type="radio" name="visibility" id="visibility2" value="2" />  Not Visible
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

                <div class="col-md-9" >
                    <div class="top-emp-center">
                        <h4>Update Resume</h4>
                    </div> <!--top-emp-center-->
                    <form name="register" id="register" class="form-horizontal m10" method="post" action="" enctype="multipart/form-data">

                        <div class="row">



                            <br/>

                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>Upload Resume:</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="fupload" id="fupload" class="form-control" onChange="return file_upload(this.value);" />
                                    </div>
                                </div><!--form-group-->


                            </div><!--col-md-6-->
                            <div class="col-sm-12">
                                <div class="col-sm-7">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-3"><input type="submit" name="save1"class="btn-blue btn" value="Save" onClick="javascript: return userval();"></div>
                                    <div class="col-sm-3"><div class="btn-blue btn"><a href="jobseeker-profile.html" style="color:#FFF"> Cancel </a></div></div>
                                </div> <!--col-md-6-->
                            </div><!--col-md-12-->
                        </div>
                    </form>
                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
    <!--ADVANCED SEARCH POPUP-->

@endsection