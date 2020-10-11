@extends('layouts.master')

@section('content')
    
    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="jobseeker-profile.html">My Account</a></li>
                <li class="active">Other Details</li>
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
                <form class="form-horizontal m10" name="moredetails" id="moredetails">
                    <div class="col-md-10 m10" >
                        <div class="top-emp-center">
                            <h4>Other Details</h4>
                        </div> <!--top-emp-center-->



                        <p class="m10">The information on this page will make your profile complete</p>

                        <div class="all-catehead blue">Languages Known</div>

                        <div class="form-group ">
                            <div class="row">
                                <div class="col-sm-4 all-catehead">Language</div>
                                <div class="col-sm-2 all-catehead">Proficiency Level </div>
                                <div class="col-sm-1 all-catehead">Read </div>
                                <div class="col-sm-1 all-catehead">Write </div>
                                <div class="col-sm-1 all-catehead">Speak </div>
                            </div>

                            <div class="row m10">
                                <div class="col-sm-4 "><input type="Text" name="language" id="language" class="form-control"value="" ></div>
                                <div class="col-sm-2 ">
                                    <select class="form-control" name="proficiencylevel" id="proficiencylevel">
                                        <option value="">Select </option>
                                        <option value="Beginner" >Beginner</option>
                                        <option value="Proficient" >Proficient</option>
                                        <option value="Expert" >Expert</option>
                                    </select>
                                </div>
                                <div class="col-sm-1 "><label class="checkbox-inline mbt55"><input type="checkbox" name="read" id="read" value="1" ></label></div>
                                <div class="col-sm-1 "><label class="checkbox-inline mbt55"><input type="checkbox" name="write" id="write" value="1" ></label> </div>
                                <div class="col-sm-1 "><label class="checkbox-inline mbt55"><input type="checkbox" name="speak" id="speak" value="1" ></label></div>
                            </div>

                            <div class="row m10">
                                <div class="col-sm-4 "><input type="Text" name="language2" id="language2" class="form-control" value="" ></div>
                                <div class="col-sm-2 ">
                                    <select class="form-control" name="proficiencylevel2" id="proficiencylevel2">
                                        <option value="">Select </option>
                                        <option value="Beginner" >Beginner</option>
                                        <option value="Proficient" >Proficient</option>
                                        <option value="Expert" >Expert</option>
                                    </select>
                                </div>
                                <div class="col-sm-1 "><label class="checkbox-inline mbt55"><input type="checkbox" name="read2" id="read2" value="1" ></label></div>
                                <div class="col-sm-1 "><label class="checkbox-inline mbt55"><input type="checkbox" name="write2" id="write2" value="1" ></label> </div>
                                <div class="col-sm-1 "><label class="checkbox-inline mbt55"><input type="checkbox" name="speak2" id="speak2" value="1" ></label></div>
                            </div>

                            <div class="row m10">
                                <div class="col-sm-4 "><input type="Text" name="language3" id="language3" class="form-control"value="" ></div>
                                <div class="col-sm-2 ">
                                    <select class="form-control" name="proficiencylevel3" id="proficiencylevel3">
                                        <option value="">Select </option>
                                        <option value="Beginner" >Beginner</option>
                                        <option value="Proficient" >Proficient</option>
                                        <option value="Expert" >Expert</option>
                                    </select>
                                </div>
                                <div class="col-sm-1 "><label class="checkbox-inline mbt55"><input type="checkbox" name="read3" id="read3" value="1" ></label></div>
                                <div class="col-sm-1 "><label class="checkbox-inline mbt55"><input type="checkbox" name="write3" id="write3" value="1" ></label> </div>
                                <div class="col-sm-1 "><label class="checkbox-inline mbt55"><input type="checkbox" name="speak3" id="speak3" value="1" ></label></div>
                            </div>


                        </div><!--form-group-->

                        <div class="all-catehead blue">Desired Job</div>

                        <!--  <div class="form-group col-sm-12">
                             <label class="col-sm-3 pedit2 text-right">Preferred Work Location: </label>
                             <div class="col-sm-5">
                                <select multiple class="form-control">
                                   <option>Nagoya</option>
                                   <option>Osaka</option>
                                   <option>Sapporo</option>
                                   <option>Tokyo</option>
                                   <option>Yokohama</option>
                                 </select>
                                <small class="pedit">Select only up to 3 desired locations.</small>
                             </div>

                           </div><!--form-group-->

                        <div class="form-group col-sm-12">
                            <label class="col-sm-3 pedit2 text-right">Job Type: </label>
                            <div class="col-sm-5">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="permanent" id="permanent" value="1"> Permanent
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="temporay" id="temporay" value="1" > Temporary/Contractual
                                </label>
                            </div>
                        </div><!--form-group-->

                        <div class="form-group col-sm-12">
                            <label class="col-sm-3 pedit2 text-right">Employment Status: </label>
                            <div class="col-sm-5">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="full" id="full" value="1" >  Full Time
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="part" id="part" value="1" >  Part Time
                                </label>
                            </div>
                        </div><!--form-group-->


                        <div class="all-catehead blue">Affirmative Action</div>

                        <div class="form-group col-sm-12">
                            <label class="col-sm-3 pedit2 text-right">Category: </label>
                            <div class="col-sm-2">
                                <select class="form-control" name="categories" id="categories" >
                                    <option value="">Select </option>
                                    <option value="general" >General</option>
                                    <option value="sc" >SC</option>
                                    <option value="st" >ST</option>
                                    <option value="obc-creamy" >OBC-Creamy</option>
                                    <option value="obc-non-creamy" >OBC-Non-Creamy</option>
                                </select>
                            </div>
                        </div><!--form-group-->

                        <div class="form-group col-sm-12">
                            <label class="col-sm-3 pedit2 text-right">Physically Challenged: </label>
                            <div class="col-sm-5">
                                <label class="radio-inline">
                                    <input type="radio" name="phychallenge" id="phychallenge" value="1"  Onchange="radiophy(this.value);"> Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="phychallenge" id="phychallenge2" value="2"  Onchange="radiophy(this.value);"> No
                                </label>
                            </div>
                        </div><!--form-group-->

                        <div class="form-group col-sm-12" id="desc">
                            <label class="col-sm-3 pedit2 text-right">Description: </label>
                            <div class="col-sm-4">
                                <textarea class="texcover1" rows="2" name="phydescription" id="counter_selector2" maxlength='150'></textarea>
                            </div>
                            <div class="col-md-2"><div id="my_counter2"></div></div>
                        </div><!--form-group-->

                        <div class="all-catehead blue">Work Authorization</div>

                        <div class="form-group col-sm-12">
                            <label class="col-sm-3 pedit2 text-right">Work Permit for USA: </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="workusa" id="workusa">
                                    <option value="">Select</option>
                                    <option value="Have H1 Visa" >Have H1 Visa</option>
                                    <option value="Need H1 Visa" >Need H1 Visa</option>
                                    <option value="TN Permit Holder" >TN Permit Holder</option>
                                    <option value="Green Card Holder" >Green Card Holder</option>
                                    <option value="US Citizen" >US Citizen</option>
                                    <option value="Authorized to work in US" >Authorized to work in US</option>
                                </select>
                            </div>
                        </div><!--form-group-->

                        <div class="form-group col-sm-12">
                            <label class="col-sm-3 pedit2 text-right">Other Countries: </label>
                            <div class="col-sm-4">
                                <select multiple rows="2" name="otherco[]" id="otherco" class="form-control">


                                    <option selected value="India">India</option>


                                    <option selected value="Australia">Australia</option>


                                    <option selected value="Bahrain">Bahrain</option>


                                    <option selected value="Bangladesh">Bangladesh</option>


                                    <option selected value="Belgium">Belgium</option>


                                    <option selected value="Italy">Italy</option>


                                    <option selected value="Canada">Canada</option>


                                    <option selected value="China">China</option>


                                    <option selected value="Dubai">Dubai</option>


                                    <option selected value="France">France</option>


                                </select>
                                <!--<small class="pedit">Select only up to 3 countries.</small> -->
                            </div>
                        </div><!--form-group-->



                        <div class="col-md-12">
                            <div class="col-sm-3"> </div>
                            <div class="ali-left col-sm-8"> <input class="btn-blue btn bc" value="Complete Profile" name="save1" id="save1" type="submit"></div>
                        </div>
                    </div><!--col-sm-10-->
                </form>
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->


@endsection