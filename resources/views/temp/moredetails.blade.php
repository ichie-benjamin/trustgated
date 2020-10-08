
<!doctype html>
<html lang="en">

@include('temp.layouts.head')

<body>

<div id="page-wrapper">

    <!-- HEADER -->
  @include('temp.layouts.header')

    <!-- HEADER -->






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


                   @include('temp.layouts.job-sidebar')
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


    <!--ADVANCED SEARCH POPUP-->

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header avd-serbg">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img src="images/close-icon.png"></span></button>
                    <h4 class="modal-title mode-tit" id="myModalLabel">Advanced Search</h4>
                </div>
                <div class="modal-body avdbg1a">
                    <div id="divsearch"></div>
                    <form class="form-horizontal m10" name="advancesearchform" id="advancesearchform" action="searchpage.php" >
                        <div class="form-group m20">
                            <label class="col-sm-4 pedit2 text-right mtop4">Keyskills: </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="ad-keyword" name="advkeyword" autocomplete="off" placeholder="Skills, Designation. Companies">
                            </div>
                        </div>
                        <div class="form-group m20">
                            <label class="col-sm-4 pedit2 text-right mtop4">Location: </label>
                            <div class="col-sm-5">
                                <input type="text" id="adv-location" autocomplete="off" name="location" class="form-control" placeholder="Enter the cities you want to work in">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4">Work Experience: </label>
                            <div class="col-sm-2 padno">
                                <div class="col-sm-9">
                                    <select name="advexperience" id="advexperience" class="form-control ">
                                        <option value="" selected="">Select</option>
                                        <!--  <option value="99">Fresher</option>-->
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="25">Above 25 Years</option>
                                        <!--<option value="0" label="0">0</option>
                                        <option value="1" label="1">1</option>
                                        <option value="2" label="2">2</option>
                                        <option value="3" label="3">3</option>
                                        <option value="4" label="4">4</option>-->
                                    </select>
                                </div>
                                <label>Years </label>
                            </div><!--col-sm-6-->
                            <div class="col-sm-3 padno">
                                <div class="col-sm-8">
                                    <select id="admonths" name="admonths" class="form-control">
                                        <option value="" selected="">Select</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="25">Above 25 Years</option>
                                    </select>
                                </div>
                                <label> Months </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4">Expected Salary: </label>
                            <div class="col-sm-2 padno">
                                <div class="col-sm-10">
                                    <select name="advsalary" class="form-control ">
                                        <option value="" selected="">Min</option>
                                        <option value="0">0 Lacks</option>
                                        <option value="1">1 Lacks</option>
                                        <option value="2">2 Lacks</option>
                                        <option value="3">3 Lacks</option>
                                        <option value="4">4 Lacks</option>
                                        <option value="5">5 Lacks</option>
                                        <option value="6">6 Lacks</option>
                                        <option value="7">7 Lacks</option>
                                        <option value="8">8 Lacks</option>
                                        <option value="9">9 Lacks</option>
                                        <option value="10">10 Lacks</option>
                                        <option value="11">11 Lacks</option>
                                        <option value="12">12 Lacks</option>
                                        <option value="13">13 Lacks</option>
                                        <option value="14">14 Lacks</option>
                                        <option value="15">15 Lacks</option>
                                        <option value="16">16 Lacks</option>
                                        <option value="17">17 Lacks</option>
                                        <option value="18">18 Lacks</option>
                                        <option value="19">19 Lacks</option>
                                        <option value="20">20 Lacks</option>
                                        <option value="21">21 Lacks</option>
                                        <option value="22">22 Lacks</option>
                                        <option value="23">23 Lacks</option>
                                        <option value="24">24 Lacks</option>
                                        <option value="25">25 Lacks</option>

                                        <option value="25">Above 25 Lacks</option>
                                        <!--<option value="99">100000</option>
                                        <option value="0" label="0">200000</option>-->

                                    </select>
                                </div>
                                <label><i class="fa fa-jpy"></i> </label>
                            </div><!--col-sm-6-->
                            <div class="col-sm-3 padno">
                                <div class="col-sm-10">
                                    <select name="adv_max" class="form-control">
                                        <option value="" selected="">Max</option>
                                        <option value="0">0 Lacks</option>
                                        <option value="1">1 Lacks</option>
                                        <option value="2">2 Lacks</option>
                                        <option value="3">3 Lacks</option>
                                        <option value="4">4 Lacks</option>
                                        <option value="5">5 Lacks</option>
                                        <option value="6">6 Lacks</option>
                                        <option value="7">7 Lacks</option>
                                        <option value="8">8 Lacks</option>
                                        <option value="9">9 Lacks</option>
                                        <option value="10">10 Lacks</option>
                                        <option value="11">11 Lacks</option>
                                        <option value="12">12 Lacks</option>
                                        <option value="13">13 Lacks</option>
                                        <option value="14">14 Lacks</option>
                                        <option value="15">15 Lacks</option>
                                        <option value="16">16 Lacks</option>
                                        <option value="17">17 Lacks</option>
                                        <option value="18">18 Lacks</option>
                                        <option value="19">19 Lacks</option>
                                        <option value="20">20 Lacks</option>
                                        <option value="21">21 Lacks</option>
                                        <option value="22">22 Lacks</option>
                                        <option value="23">23 Lacks</option>
                                        <option value="24">24 Lacks</option>
                                        <option value="25">25 Lacks</option>

                                        <option value="25">Above 25 Lacks</option>
                                    </select>
                                </div>
                                <label> <i class="fa fa-jpy"></i> </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  >Industry:</label>
                            <div class="col-sm-5">
                                <select name="advindustry" id="advindustry" class="form-control" placeholder="Select the industry where you want to work">
                                    <option value="">Select</option>

                                    <option value="56">Construction</option>
                                    <option value="53">IT - BPO</option>
                                    <option value="50">IT-ERP-Oracle</option>
                                    <option value="42">KPO/Technical Support</option>
                                    <option value="34">Law Enforcement/Security</option>
                                    <option value="35">Legal/Law</option>
                                    <option value="55">Management</option>
                                    <option value="36">Marketing/Sales</option>
                                    <option value="52">mech</option>
                                    <option value="51">Media </option>
                                    <option value="37">Media/Journalism</option>
                                    <option value="54">NGO/Social Services</option>
                                    <option value="45">Others</option>
                                    <option value="38">Production/Manufacturing/Maintenance</option>
                                    <option value="44">Strategy / Management Consulting Firms</option>
                                    <option value="46">test cate</option>
                                    <option value="40">Tours and Travel/Airline</option>
                                    <option value="41">Transportation/Logistics</option>
                                </select>
                                You can select at max 2 Industries
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  >Job Category:</label>
                            <div class="col-sm-5">
                                <select name="advfarea" id="advfarea" class="form-control" placeholder="Select the industry where you want to work">
                                    <option value="">Select</option>
                                    <option value="349">0 - 044 -</option>
                                    <option value="340">Accessory Designer</option>
                                    <option value="99">Accountant</option>
                                    <option value="73">Accounts Assistant</option>
                                    <option value="241">Accounts Manager</option>
                                    <option value="339">AD</option>
                                    <option value="154">Administration</option>
                                    <option value="316">Air Hostess/Steward/Cabin Crew</option>
                                    <option value="183">Anaesthetist</option>
                                    <option value="83">Animator</option>
                                    <option value="176">Apparel / Garment Designer</option>
                                    <option value="136">Architects</option>
                                    <option value="272">Art Director</option>
                                    <option value="258">Asst. Sales Manager</option>
                                    <option value="159">Autocad Draughtman/Designer</option>
                                    <option value="84">AV Executive</option>
                                    <option value="100">Bank Assurance</option>
                                    <option value="101">Banking - General</option>
                                    <option value="211">Banquet Manager</option>
                                    <option value="184">Beautician</option>
                                    <option value="185">Bio-Technology Research</option>
                                    <option value="317">Branch Head</option>
                                    <option value="259">Branch Manager</option>
                                    <option value="286">Building Inspection</option>
                                    <option value="260">Business Analyst</option>
                                    <option value="261">Business Development Executives</option>
                                    <option value="273">Cameraman</option>
                                    <option value="327">Cargo</option>
                                    <option value="137">Carpenter</option>
                                    <option value="74">Chartered Accountant</option>
                                    <option value="186">Chemical Research Scientist</option>
                                    <option value="187">Chemist</option>
                                    <option value="341">chennai</option>
                                    <option value="212">Chief Chef</option>
                                    <option value="160">Chief Engineer</option>
                                    <option value="161">Civil Engineer</option>
                                    <option value="102">Clerk/Office Boy</option>
                                    <option value="247">Company Secretary</option>
                                    <option value="293">Computer Operator/Data Entry</option>
                                    <option value="124">Configuration Manager</option>
                                    <option value="350">Construction</option>
                                    <option value="138">Construction Manager</option>
                                    <option value="274">Content Developer</option>
                                    <option value="139">Controller</option>
                                    <option value="275">Correspondent/Reporter</option>
                                    <option value="75">Cost Accountant</option>
                                    <option value="155">Councellor</option>
                                    <option value="328">Courier/Delivery</option>
                                    <option value="140">Crane Operator</option>
                                    <option value="262">Customer Relationship Officer</option>
                                    <option value="112">Customer Service Executive (Non Voice)</option>
                                    <option value="113">Customer Service Executive (Voice)</option>
                                    <option value="162">Customer Service/Tech. Support</option>
                                    <option value="223">Data Entry/Computer Operator</option>
                                    <option value="114">Data Processing Executive</option>
                                    <option value="125">Database Administrator</option>
                                    <option value="298">Database Programmer</option>
                                    <option value="297">DBA</option>
                                    <option value="188">Dentist</option>
                                    <option value="189">Dietician</option>
                                    <option value="329">Dockworker</option>
                                    <option value="190">Doctor</option>
                                    <option value="318">Documentation and Visa</option>
                                    <option value="319">Domestic Travel</option>
                                    <option value="191">ECG/CGA Technician</option>
                                    <option value="163">Electrical Engineer</option>
                                    <option value="141">Electrician</option>
                                    <option value="164">Engineer</option>
                                    <option value="143">Equipment Operator</option>
                                    <option value="103">Equity Analyst</option>
                                    <option value="85">Event Coordinator</option>
                                    <option value="86">Event/Promotios Manager</option>
                                    <option value="76">External Auditor</option>
                                    <option value="213">F & B Manager</option>
                                    <option value="126">Faculty</option>
                                    <option value="77">Finance Assistant</option>
                                    <option value="165">Foreman</option>
                                    <option value="330">Forklift Operator</option>
                                    <option value="214">Front Office Executive</option>
                                    <option value="345">gdfgdf</option>
                                    <option value="263">GM- Marketing</option>
                                    <option value="294">Graphic Designer /Animator</option>
                                    <option value="320">Ground Staff</option>
                                    <option value="127">H/W Installation / Maintenance Engg</option>
                                    <option value="128">Hardware Design Technical Leader</option>
                                    <option value="347">having 7 years exp. as a professional medical representative with flaring formulation, abbott health</option>
                                    <option value="348">having 7 years exp. as a professional medical representative with flaring formulation, abbott health</option>
                                    <option value="144">Heavy Equipment Operator</option>
                                    <option value="215">Hostess</option>
                                    <option value="193">House Keeping</option>
                                    <option value="216">House Keeping Executive</option>
                                    <option value="225">HR Executive / Recruiter</option>
                                    <option value="226">HR Manager</option>
                                    <option value="129">Instructional Designer</option>
                                    <option value="104">Insurance / Financial Advisor</option>
                                    <option value="105">Insurance Telesales</option>
                                    <option value="166">Interior Designer</option>
                                    <option value="78">Internal Auditor</option>
                                    <option value="343">it software- application programming / maintenance</option>
                                    <option value="346">IT-ERP- Business Analyst</option>
                                    <option value="177">Jewellery Designer</option>
                                    <option value="217">Kitchen Manager</option>
                                    <option value="194">Lab Technician</option>
                                    <option value="146">Laborer</option>
                                    <option value="248">Law Officer</option>
                                    <option value="249">Lawyer</option>
                                    <option value="250">Legal Adviser</option>
                                    <option value="251">Legal Assistant</option>
                                    <option value="252">Legal Consultant</option>
                                    <option value="253">Legal Editor</option>
                                    <option value="254">Legal Services - Manager</option>
                                    <option value="156">Librarian</option>
                                    <option value="331">Logistics Manager</option>
                                    <option value="235">Machine Operator</option>
                                    <option value="236">Machinist</option>
                                    <option value="237">Maintenance Supervisor</option>
                                    <option value="321">Management Trainee</option>
                                    <option value="322">Manager</option>
                                    <option value="79">Manager - Accounts</option>
                                    <option value="80">Manager- Finance Planning</option>
                                    <option value="228">Manager/Co-ordinator</option>
                                    <option value="264">Marketing Executives</option>
                                    <option value="265">Marketing Manager</option>
                                    <option value="167">Mechanical Engineer</option>
                                    <option value="238">Mechanical Technician</option>
                                    <option value="89">Media Planning - Manager / Executive</option>
                                    <option value="195">Medical Assistant</option>
                                    <option value="196">Medical Representative</option>
                                    <option value="115">Medical Transcriptionist</option>
                                    <option value="197">Medical Writer</option>
                                    <option value="179">Merchandiser</option>
                                    <option value="198">Microbiologist</option>
                                    <option value="148">Mining</option>
                                    <option value="107">Mutual Funds</option>
                                    <option value="130">Network Administrator</option>
                                    <option value="131">Network Designer</option>
                                    <option value="295">Network Engineer</option>
                                    <option value="278">News Editor</option>
                                    <option value="279">News Reador</option>
                                    <option value="199">Nurse</option>
                                    <option value="200">Nutritionist</option>
                                    <option value="323">Office Assistant</option>
                                    <option value="229">Office Secretary/AdminOfficer</option>
                                    <option value="287">Officer</option>
                                    <option value="108">Operations</option>
                                    <option value="332">Operations Management</option>
                                    <option value="201">Opthamologist</option>
                                    <option value="296">Oracle Developer</option>
                                    <option value="132">Other</option>
                                    <option value="149">Painter</option>
                                    <option value="256">Patent</option>
                                    <option value="203">Pharmaceutical Research</option>
                                    <option value="204">Pharmacist</option>
                                    <option value="300">Photoshop</option>
                                    <option value="205">Physician</option>
                                    <option value="206">Physiotherapist</option>
                                    <option value="150">Plumber</option>
                                    <option value="288">Process Engineer</option>
                                    <option value="122">Process Engineers</option>
                                    <option value="281">Production Manager</option>
                                    <option value="289">Production Quality Assurance</option>
                                    <option value="301">Programmer</option>
                                    <option value="169">Project Manager</option>
                                    <option value="282">Proof Reader</option>
                                    <option value="257">Proof Reader (Law)</option>
                                    <option value="207">Public Health Administration</option>
                                    <option value="231">Public Relation Officer</option>
                                    <option value="312">QA</option>
                                    <option value="290">Quality Assurance Engineer</option>
                                    <option value="291">Quality Assurance Manager</option>
                                    <option value="292">Quality Control Inspector</option>
                                    <option value="208">Radiographer</option>
                                    <option value="232">Receptionist/Front Office Executive</option>
                                    <option value="109">Relationship Manager</option>
                                    <option value="239">Repairman</option>
                                    <option value="325">Reservation and Ticketing</option>
                                    <option value="219">Reservation Manager</option>
                                    <option value="220">Restaurant Manager</option>
                                    <option value="151">Roofing</option>
                                    <option value="170">Safety Officer</option>
                                    <option value="268">Sales Executives</option>
                                    <option value="269">Sales Manager</option>
                                    <option value="97">Sales/Marketing Executive</option>
                                    <option value="209">Scientist</option>
                                    <option value="243">Security Guard</option>
                                    <option value="240">Security Installation</option>
                                    <option value="221">Security Manager</option>
                                    <option value="333">Shipping And Receiving</option>
                                    <option value="245">Site Manager</option>
                                    <option value="304">Software Application Developer</option>
                                    <option value="305">Software Engineer</option>
                                    <option value="222">Steward/Waiter</option>
                                    <option value="180">Stiching/Tailor</option>
                                    <option value="110">Stock Broking</option>
                                    <option value="171">Store Keeper</option>
                                    <option value="91">Studio Operation Manager</option>
                                    <option value="283">Sub Editor</option>
                                    <option value="95">Supervisor</option>
                                    <option value="181">Supervisor/Officer</option>
                                    <option value="172">Surveyor</option>
                                    <option value="306">System Administrator</option>
                                    <option value="133">System Analyst</option>
                                    <option value="303">System Programmer</option>
                                    <option value="81">Taxation - Manager</option>
                                    <option value="157">Teaching/Professor/Lecturer</option>
                                    <option value="117">Team Leader</option>
                                    <option value="308">Technical Architect</option>
                                    <option value="134">Technical Leader</option>
                                    <option value="135">Technical Support Engineer</option>
                                    <option value="118">Technical Support Executive (Voice)</option>
                                    <option value="309">Technical Writer</option>
                                    <option value="173">Technician</option>
                                    <option value="271">Tele Marketing Executives</option>
                                    <option value="119">Telemarketing Executive</option>
                                    <option value="311">Testing Engineer</option>
                                    <option value="182">Textile Designer</option>
                                    <option value="326">Tour Operator</option>
                                    <option value="335">Train Operator</option>
                                    <option value="120">Trainee/Management Trainee</option>
                                    <option value="313">Trainer</option>
                                    <option value="246">Training Officer</option>
                                    <option value="284">Translator</option>
                                    <option value="336">Transportation Supervisor</option>
                                    <option value="233">Travel/Immigration Coordinator</option>
                                    <option value="337">Truck Driver</option>
                                    <option value="234">Typist</option>
                                    <option value="210">Veterinary</option>
                                    <option value="285">Video Editor</option>
                                    <option value="92">Visualiser- Art Director</option>
                                    <option value="121">Voice & Accent Trainer</option>
                                    <option value="338">Warehouse Worker</option>
                                    <option value="314">Web Designer</option>
                                    <option value="315">Web Developer</option>
                                    <option value="153">Welder</option>
                                    <option value="174">Workman / Foreman / Technician</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  >Job Type:</label>
                            <div class="col-sm-5">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary2 active">
                                        <input type="radio" name="options" id="option1" autocomplete="off" checked value="">  All Jobs
                                    </label>
                                    <label class="btn btn-primary2">
                                        <input type="radio" name="options" id="option2" autocomplete="off" value="Company"> Company Jobs
                                    </label>
                                    <label class="btn btn-primary2">
                                        <input type="radio" name="options" id="option3" autocomplete="off" value="Consultant"> Consultant Jobs
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  > Sort By:</label>
                            <div class="col-sm-5">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary2 active">
                                        <input type="radio" name="options1" id="option1" autocomplete="off" checked> Relevance
                                    </label>
                                    <label class="btn btn-primary2">
                                        <input type="radio" name="options2" id="option2" value="date" autocomplete="off">  Date
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="hiddenval" value="valhid" />
                            <div class="col-sm-12 text-center"><input name="advancesearch" class="btn-blue btn bc3" onclick="advancedsearch()" value="Search" type="button"> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--ADVANCED SEARCH POPUP END-->

    <!--CREATE JOB ALERT POPUP-->

    <div class="modal fade bs-example-modal-lg2" id="createjob" tabindex="-1" role="dialog" aria-labelledby="search">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header avd-serbg">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img src="images/close-icon.png"></span></button>
                    <h4 class="modal-title mode-tit" id="myModalLabel">Tell us what kind of jobs you want</h4>
                </div>
                <div class="modal-body avdbg1a">
                    <form class="form-horizontal m10" name="myform1">
                        <div class="form-group m20">
                            <label class="col-sm-4 pedit2 text-right mtop4"><span class="redstar">*</span> Keyword:</label>
                            <div class="col-sm-5">
                                <input type="text" name="keywordalert" id="keywordalert" class="form-control" placeholder="Skills, Designation. Companies">
                            </div>
                            <div><span id="keywordinfo"></span></div>
                        </div>
                        <div class="form-group m20">
                            <label class="col-sm-4 pedit2 text-right mtop4"><span class="redstar">*</span> Location: </label>
                            <div class="col-sm-5">
                                <input type="text" name="locationalert" id="locationalert" class="form-control" placeholder="Enter the cities you want to work in">
                            </div>
                            <div><span id="locationinfo"></span></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"><span class="redstar">*</span> Work Experience: </label>
                            <div class="col-sm-2 padno">
                                <div class="col-sm-9">
                                    <select class="form-control " name="workexp" id="workexp">
                                        <option value="">Select</option>
                                        <option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option>                                    </select>
                                </div>

                                <label>Years </label>
                            </div><!--col-sm-6-->
                            <div class="col-sm-3 padno">
                                <div class="col-sm-8">
                                    <select class="form-control" name="workexpmon" id="workexpmon">
                                        <option value="">Select</option>

                                        <option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option>                                    </select>
                                </div>
                                <label> Months </label>
                            </div>
                            <div><span id="workinfo"></span></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4">Expected Salary: </label>
                            <div class="col-sm-2 padno">
                                <div class="col-sm-9">
                                    <select class="form-control " name="salmin" id="salmin">
                                        <option value="">Min</option>
                                        <option value="0.5">0.5</option>
                                        <option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option>                                    </select>
                                </div>

                            </div><!--col-sm-6-->
                            <div class="col-sm-3 padno">
                                <div class="col-sm-8">
                                    <select class="form-control" name="salmax" id="salmax">
                                        <option value="">Max</option>
                                        <option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option>                                    </select>
                                </div>
                                <label>In Ethiopias </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Industry:</label>
                            <div class="col-sm-5">
                                <select name="indus" id="indus" class="form-control " placeholder="Select the industry where you want to work">
                                    <option value=''>-&nbsp;Select&nbsp;-</option>

                                    <option value='Construction'>Construction</option><option value='IT - BPO'>IT - BPO</option><option value='IT-ERP-Oracle'>IT-ERP-Oracle</option><option value='KPO/Technical Support'>KPO/Technical Support</option><option value='Law Enforcement/Security'>Law Enforcement/Security</option><option value='Legal/Law'>Legal/Law</option><option value='Management'>Management</option><option value='Marketing/Sales'>Marketing/Sales</option><option value='mech'>mech</option><option value='Media '>Media </option><option value='Media/Journalism'>Media/Journalism</option><option value='NGO/Social Services'>NGO/Social Services</option><option value='Others'>Others</option><option value='Production/Manufacturing/Maintenance'>Production/Manufacturing/Maintenance</option><option value='Strategy / Management Consulting Firms'>Strategy / Management Consulting Firms</option><option value='test cate'>test cate</option><option value='Tours and Travel/Airline'>Tours and Travel/Airline</option><option value='Transportation/Logistics'>Transportation/Logistics</option>								</select>

                            </div>
                            <div><span id="industryinfo"></span></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Job Category:</label>
                            <div class="col-sm-5">
                                <select name="jobcat" id="jobcat" class="form-control " placeholder="Select the industry where you want to work" >

                                    <option value='' >--Select--</option>

                                    <option value='349'>0 - 044 - </option> <option value='340'>Accessory Designer </option> <option value='99'>Accountant </option> <option value='73'>Accounts Assistant </option> <option value='241'>Accounts Manager </option> <option value='339'>AD </option> <option value='154'>Administration </option> <option value='316'>Air Hostess/Steward/Cabin Crew </option> <option value='183'>Anaesthetist </option> <option value='83'>Animator </option> <option value='176'>Apparel / Garment Designer </option> <option value='136'>Architects </option> <option value='272'>Art Director </option> <option value='258'>Asst. Sales Manager </option> <option value='159'>Autocad Draughtman/Designer </option> <option value='84'>AV Executive </option> <option value='100'>Bank Assurance </option> <option value='101'>Banking - General </option> <option value='211'>Banquet Manager </option> <option value='184'>Beautician </option> <option value='185'>Bio-Technology Research </option> <option value='317'>Branch Head </option> <option value='259'>Branch Manager </option> <option value='286'>Building Inspection </option> <option value='260'>Business Analyst </option> <option value='261'>Business Development Executives </option> <option value='273'>Cameraman </option> <option value='327'>Cargo </option> <option value='137'>Carpenter </option> <option value='74'>Chartered Accountant </option> <option value='186'>Chemical Research Scientist </option> <option value='187'>Chemist </option> <option value='341'>chennai </option> <option value='212'>Chief Chef </option> <option value='160'>Chief Engineer </option> <option value='161'>Civil Engineer </option> <option value='102'>Clerk/Office Boy </option> <option value='247'>Company Secretary </option> <option value='293'>Computer Operator/Data Entry </option> <option value='124'>Configuration Manager </option> <option value='350'>Construction </option> <option value='138'>Construction Manager </option> <option value='274'>Content Developer </option> <option value='139'>Controller </option> <option value='275'>Correspondent/Reporter </option> <option value='75'>Cost Accountant </option> <option value='155'>Councellor </option> <option value='328'>Courier/Delivery </option> <option value='140'>Crane Operator </option> <option value='262'>Customer Relationship Officer </option> <option value='112'>Customer Service Executive (Non Voice) </option> <option value='113'>Customer Service Executive (Voice) </option> <option value='162'>Customer Service/Tech. Support </option> <option value='223'>Data Entry/Computer Operator </option> <option value='114'>Data Processing Executive </option> <option value='125'>Database Administrator </option> <option value='298'>Database Programmer </option> <option value='297'>DBA </option> <option value='188'>Dentist </option> <option value='189'>Dietician </option> <option value='329'>Dockworker </option> <option value='190'>Doctor </option> <option value='318'>Documentation and Visa </option> <option value='319'>Domestic Travel </option> <option value='191'>ECG/CGA Technician </option> <option value='163'>Electrical Engineer </option> <option value='141'>Electrician </option> <option value='164'>Engineer </option> <option value='143'>Equipment Operator </option> <option value='103'>Equity Analyst </option> <option value='85'>Event Coordinator </option> <option value='86'>Event/Promotios Manager </option> <option value='76'>External Auditor </option> <option value='213'>F & B Manager </option> <option value='126'>Faculty </option> <option value='77'>Finance Assistant </option> <option value='165'>Foreman </option> <option value='330'>Forklift Operator </option> <option value='214'>Front Office Executive </option> <option value='345'>gdfgdf </option> <option value='263'>GM- Marketing </option> <option value='294'>Graphic Designer /Animator </option> <option value='320'>Ground Staff </option> <option value='127'>H/W Installation / Maintenance Engg </option> <option value='128'>Hardware Design Technical Leader </option> <option value='347'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='348'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='144'>Heavy Equipment Operator </option> <option value='215'>Hostess </option> <option value='193'>House Keeping </option> <option value='216'>House Keeping Executive </option> <option value='225'>HR Executive / Recruiter </option> <option value='226'>HR Manager </option> <option value='129'>Instructional Designer </option> <option value='104'>Insurance / Financial Advisor </option> <option value='105'>Insurance Telesales </option> <option value='166'>Interior Designer </option> <option value='78'>Internal Auditor </option> <option value='343'>it software- application programming / maintenance </option> <option value='346'>IT-ERP- Business Analyst </option> <option value='177'>Jewellery Designer </option> <option value='217'>Kitchen Manager </option> <option value='194'>Lab Technician </option> <option value='146'>Laborer </option> <option value='248'>Law Officer </option> <option value='249'>Lawyer </option> <option value='250'>Legal Adviser </option> <option value='251'>Legal Assistant </option> <option value='252'>Legal Consultant </option> <option value='253'>Legal Editor </option> <option value='254'>Legal Services - Manager </option> <option value='156'>Librarian </option> <option value='331'>Logistics Manager </option> <option value='235'>Machine Operator </option> <option value='236'>Machinist </option> <option value='237'>Maintenance Supervisor </option> <option value='321'>Management Trainee </option> <option value='322'>Manager </option> <option value='79'>Manager - Accounts </option> <option value='80'>Manager- Finance Planning </option> <option value='228'>Manager/Co-ordinator </option> <option value='264'>Marketing Executives </option> <option value='265'>Marketing Manager </option> <option value='167'>Mechanical Engineer </option> <option value='238'>Mechanical Technician </option> <option value='89'>Media Planning - Manager / Executive </option> <option value='195'>Medical Assistant </option> <option value='196'>Medical Representative </option> <option value='115'>Medical Transcriptionist </option> <option value='197'>Medical Writer </option> <option value='179'>Merchandiser </option> <option value='198'>Microbiologist </option> <option value='148'>Mining </option> <option value='107'>Mutual Funds </option> <option value='130'>Network Administrator </option> <option value='131'>Network Designer </option> <option value='295'>Network Engineer </option> <option value='278'>News Editor </option> <option value='279'>News Reador </option> <option value='199'>Nurse </option> <option value='200'>Nutritionist </option> <option value='323'>Office Assistant </option> <option value='229'>Office Secretary/AdminOfficer </option> <option value='287'>Officer </option> <option value='108'>Operations </option> <option value='332'>Operations Management </option> <option value='201'>Opthamologist </option> <option value='296'>Oracle Developer </option> <option value='132'>Other </option> <option value='149'>Painter </option> <option value='256'>Patent </option> <option value='203'>Pharmaceutical Research </option> <option value='204'>Pharmacist </option> <option value='300'>Photoshop </option> <option value='205'>Physician </option> <option value='206'>Physiotherapist </option> <option value='150'>Plumber </option> <option value='288'>Process Engineer </option> <option value='122'>Process Engineers </option> <option value='281'>Production Manager </option> <option value='289'>Production Quality Assurance </option> <option value='301'>Programmer </option> <option value='169'>Project Manager </option> <option value='282'>Proof Reader </option> <option value='257'>Proof Reader (Law) </option> <option value='207'>Public Health Administration </option> <option value='231'>Public Relation Officer </option> <option value='312'>QA </option> <option value='290'>Quality Assurance Engineer </option> <option value='291'>Quality Assurance Manager </option> <option value='292'>Quality Control Inspector </option> <option value='208'>Radiographer </option> <option value='232'>Receptionist/Front Office Executive </option> <option value='109'>Relationship Manager </option> <option value='239'>Repairman </option> <option value='325'>Reservation and Ticketing </option> <option value='219'>Reservation Manager </option> <option value='220'>Restaurant Manager </option> <option value='151'>Roofing </option> <option value='170'>Safety Officer </option> <option value='268'>Sales Executives </option> <option value='269'>Sales Manager </option> <option value='97'>Sales/Marketing Executive </option> <option value='209'>Scientist </option> <option value='243'>Security Guard </option> <option value='240'>Security Installation </option> <option value='221'>Security Manager </option> <option value='333'>Shipping And Receiving </option> <option value='245'>Site Manager </option> <option value='304'>Software Application Developer </option> <option value='305'>Software Engineer </option> <option value='222'>Steward/Waiter </option> <option value='180'>Stiching/Tailor </option> <option value='110'>Stock Broking </option> <option value='171'>Store Keeper </option> <option value='91'>Studio Operation Manager </option> <option value='283'>Sub Editor </option> <option value='95'>Supervisor </option> <option value='181'>Supervisor/Officer </option> <option value='172'>Surveyor </option> <option value='306'>System Administrator </option> <option value='133'>System Analyst </option> <option value='303'>System Programmer </option> <option value='81'>Taxation - Manager </option> <option value='157'>Teaching/Professor/Lecturer </option> <option value='117'>Team Leader </option> <option value='308'>Technical Architect </option> <option value='134'>Technical Leader </option> <option value='135'>Technical Support Engineer </option> <option value='118'>Technical Support Executive (Voice) </option> <option value='309'>Technical Writer </option> <option value='173'>Technician </option> <option value='271'>Tele Marketing Executives </option> <option value='119'>Telemarketing Executive </option> <option value='311'>Testing Engineer </option> <option value='182'>Textile Designer </option> <option value='326'>Tour Operator </option> <option value='335'>Train Operator </option> <option value='120'>Trainee/Management Trainee </option> <option value='313'>Trainer </option> <option value='246'>Training Officer </option> <option value='284'>Translator </option> <option value='336'>Transportation Supervisor </option> <option value='233'>Travel/Immigration Coordinator </option> <option value='337'>Truck Driver </option> <option value='234'>Typist </option> <option value='210'>Veterinary </option> <option value='285'>Video Editor </option> <option value='92'>Visualiser- Art Director </option> <option value='121'>Voice & Accent Trainer </option> <option value='338'>Warehouse Worker </option> <option value='314'>Web Designer </option> <option value='315'>Web Developer </option> <option value='153'>Welder </option> <option value='174'>Workman / Foreman / Technician </option> 									</select>


                            </div>
                            <div><span id="categoryinfo"></span></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Role:</label>
                            <div class="col-sm-5">
                                <select name="jobrole" id="jobrole" class="form-control " placeholder="Select the role where you want to work" >

                                    <option value='' >--Select--</option>

                                    <option value='349'>0 - 044 - </option> <option value='340'>Accessory Designer </option> <option value='99'>Accountant </option> <option value='73'>Accounts Assistant </option> <option value='241'>Accounts Manager </option> <option value='339'>AD </option> <option value='154'>Administration </option> <option value='316'>Air Hostess/Steward/Cabin Crew </option> <option value='183'>Anaesthetist </option> <option value='83'>Animator </option> <option value='176'>Apparel / Garment Designer </option> <option value='136'>Architects </option> <option value='272'>Art Director </option> <option value='258'>Asst. Sales Manager </option> <option value='159'>Autocad Draughtman/Designer </option> <option value='84'>AV Executive </option> <option value='100'>Bank Assurance </option> <option value='101'>Banking - General </option> <option value='211'>Banquet Manager </option> <option value='184'>Beautician </option> <option value='185'>Bio-Technology Research </option> <option value='317'>Branch Head </option> <option value='259'>Branch Manager </option> <option value='286'>Building Inspection </option> <option value='260'>Business Analyst </option> <option value='261'>Business Development Executives </option> <option value='273'>Cameraman </option> <option value='327'>Cargo </option> <option value='137'>Carpenter </option> <option value='74'>Chartered Accountant </option> <option value='186'>Chemical Research Scientist </option> <option value='187'>Chemist </option> <option value='341'>chennai </option> <option value='212'>Chief Chef </option> <option value='160'>Chief Engineer </option> <option value='161'>Civil Engineer </option> <option value='102'>Clerk/Office Boy </option> <option value='247'>Company Secretary </option> <option value='293'>Computer Operator/Data Entry </option> <option value='124'>Configuration Manager </option> <option value='350'>Construction </option> <option value='138'>Construction Manager </option> <option value='274'>Content Developer </option> <option value='139'>Controller </option> <option value='275'>Correspondent/Reporter </option> <option value='75'>Cost Accountant </option> <option value='155'>Councellor </option> <option value='328'>Courier/Delivery </option> <option value='140'>Crane Operator </option> <option value='262'>Customer Relationship Officer </option> <option value='112'>Customer Service Executive (Non Voice) </option> <option value='113'>Customer Service Executive (Voice) </option> <option value='162'>Customer Service/Tech. Support </option> <option value='223'>Data Entry/Computer Operator </option> <option value='114'>Data Processing Executive </option> <option value='125'>Database Administrator </option> <option value='298'>Database Programmer </option> <option value='297'>DBA </option> <option value='188'>Dentist </option> <option value='189'>Dietician </option> <option value='329'>Dockworker </option> <option value='190'>Doctor </option> <option value='318'>Documentation and Visa </option> <option value='319'>Domestic Travel </option> <option value='191'>ECG/CGA Technician </option> <option value='163'>Electrical Engineer </option> <option value='141'>Electrician </option> <option value='164'>Engineer </option> <option value='143'>Equipment Operator </option> <option value='103'>Equity Analyst </option> <option value='85'>Event Coordinator </option> <option value='86'>Event/Promotios Manager </option> <option value='76'>External Auditor </option> <option value='213'>F & B Manager </option> <option value='126'>Faculty </option> <option value='77'>Finance Assistant </option> <option value='165'>Foreman </option> <option value='330'>Forklift Operator </option> <option value='214'>Front Office Executive </option> <option value='345'>gdfgdf </option> <option value='263'>GM- Marketing </option> <option value='294'>Graphic Designer /Animator </option> <option value='320'>Ground Staff </option> <option value='127'>H/W Installation / Maintenance Engg </option> <option value='128'>Hardware Design Technical Leader </option> <option value='347'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='348'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='144'>Heavy Equipment Operator </option> <option value='215'>Hostess </option> <option value='193'>House Keeping </option> <option value='216'>House Keeping Executive </option> <option value='225'>HR Executive / Recruiter </option> <option value='226'>HR Manager </option> <option value='129'>Instructional Designer </option> <option value='104'>Insurance / Financial Advisor </option> <option value='105'>Insurance Telesales </option> <option value='166'>Interior Designer </option> <option value='78'>Internal Auditor </option> <option value='343'>it software- application programming / maintenance </option> <option value='346'>IT-ERP- Business Analyst </option> <option value='177'>Jewellery Designer </option> <option value='217'>Kitchen Manager </option> <option value='194'>Lab Technician </option> <option value='146'>Laborer </option> <option value='248'>Law Officer </option> <option value='249'>Lawyer </option> <option value='250'>Legal Adviser </option> <option value='251'>Legal Assistant </option> <option value='252'>Legal Consultant </option> <option value='253'>Legal Editor </option> <option value='254'>Legal Services - Manager </option> <option value='156'>Librarian </option> <option value='331'>Logistics Manager </option> <option value='235'>Machine Operator </option> <option value='236'>Machinist </option> <option value='237'>Maintenance Supervisor </option> <option value='321'>Management Trainee </option> <option value='322'>Manager </option> <option value='79'>Manager - Accounts </option> <option value='80'>Manager- Finance Planning </option> <option value='228'>Manager/Co-ordinator </option> <option value='264'>Marketing Executives </option> <option value='265'>Marketing Manager </option> <option value='167'>Mechanical Engineer </option> <option value='238'>Mechanical Technician </option> <option value='89'>Media Planning - Manager / Executive </option> <option value='195'>Medical Assistant </option> <option value='196'>Medical Representative </option> <option value='115'>Medical Transcriptionist </option> <option value='197'>Medical Writer </option> <option value='179'>Merchandiser </option> <option value='198'>Microbiologist </option> <option value='148'>Mining </option> <option value='107'>Mutual Funds </option> <option value='130'>Network Administrator </option> <option value='131'>Network Designer </option> <option value='295'>Network Engineer </option> <option value='278'>News Editor </option> <option value='279'>News Reador </option> <option value='199'>Nurse </option> <option value='200'>Nutritionist </option> <option value='323'>Office Assistant </option> <option value='229'>Office Secretary/AdminOfficer </option> <option value='287'>Officer </option> <option value='108'>Operations </option> <option value='332'>Operations Management </option> <option value='201'>Opthamologist </option> <option value='296'>Oracle Developer </option> <option value='132'>Other </option> <option value='149'>Painter </option> <option value='256'>Patent </option> <option value='203'>Pharmaceutical Research </option> <option value='204'>Pharmacist </option> <option value='300'>Photoshop </option> <option value='205'>Physician </option> <option value='206'>Physiotherapist </option> <option value='150'>Plumber </option> <option value='288'>Process Engineer </option> <option value='122'>Process Engineers </option> <option value='281'>Production Manager </option> <option value='289'>Production Quality Assurance </option> <option value='301'>Programmer </option> <option value='169'>Project Manager </option> <option value='282'>Proof Reader </option> <option value='257'>Proof Reader (Law) </option> <option value='207'>Public Health Administration </option> <option value='231'>Public Relation Officer </option> <option value='312'>QA </option> <option value='290'>Quality Assurance Engineer </option> <option value='291'>Quality Assurance Manager </option> <option value='292'>Quality Control Inspector </option> <option value='208'>Radiographer </option> <option value='232'>Receptionist/Front Office Executive </option> <option value='109'>Relationship Manager </option> <option value='239'>Repairman </option> <option value='325'>Reservation and Ticketing </option> <option value='219'>Reservation Manager </option> <option value='220'>Restaurant Manager </option> <option value='151'>Roofing </option> <option value='170'>Safety Officer </option> <option value='268'>Sales Executives </option> <option value='269'>Sales Manager </option> <option value='97'>Sales/Marketing Executive </option> <option value='209'>Scientist </option> <option value='243'>Security Guard </option> <option value='240'>Security Installation </option> <option value='221'>Security Manager </option> <option value='333'>Shipping And Receiving </option> <option value='245'>Site Manager </option> <option value='304'>Software Application Developer </option> <option value='305'>Software Engineer </option> <option value='222'>Steward/Waiter </option> <option value='180'>Stiching/Tailor </option> <option value='110'>Stock Broking </option> <option value='171'>Store Keeper </option> <option value='91'>Studio Operation Manager </option> <option value='283'>Sub Editor </option> <option value='95'>Supervisor </option> <option value='181'>Supervisor/Officer </option> <option value='172'>Surveyor </option> <option value='306'>System Administrator </option> <option value='133'>System Analyst </option> <option value='303'>System Programmer </option> <option value='81'>Taxation - Manager </option> <option value='157'>Teaching/Professor/Lecturer </option> <option value='117'>Team Leader </option> <option value='308'>Technical Architect </option> <option value='134'>Technical Leader </option> <option value='135'>Technical Support Engineer </option> <option value='118'>Technical Support Executive (Voice) </option> <option value='309'>Technical Writer </option> <option value='173'>Technician </option> <option value='271'>Tele Marketing Executives </option> <option value='119'>Telemarketing Executive </option> <option value='311'>Testing Engineer </option> <option value='182'>Textile Designer </option> <option value='326'>Tour Operator </option> <option value='335'>Train Operator </option> <option value='120'>Trainee/Management Trainee </option> <option value='313'>Trainer </option> <option value='246'>Training Officer </option> <option value='284'>Translator </option> <option value='336'>Transportation Supervisor </option> <option value='233'>Travel/Immigration Coordinator </option> <option value='337'>Truck Driver </option> <option value='234'>Typist </option> <option value='210'>Veterinary </option> <option value='285'>Video Editor </option> <option value='92'>Visualiser- Art Director </option> <option value='121'>Voice & Accent Trainer </option> <option value='338'>Warehouse Worker </option> <option value='314'>Web Designer </option> <option value='315'>Web Developer </option> <option value='153'>Welder </option> <option value='174'>Workman / Foreman / Technician </option> 									</select>


                            </div>
                            <div><span id="roleinfo"></span></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Name Your Job Alert:</label>
                            <div class="col-sm-5">
                                <input type="text" name="namealert" id="namealert" class="form-control" placeholder="Enter a name that will help you reconize this job alert">

                            </div>
                            <div><span id="nameinfo"></span></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Email Id:</label>
                            <div class="col-sm-5">
                                <input type="email" name="emailalert" id="emailalert" class="form-control" placeholder="Enter a mail id">

                            </div>
                            <div><span id="emailinfo"></span></div>

                        </div>

                        <div class="form-group ">
                            <label class="col-sm-4 pedit2 text-right"></label>
                            <div class="col-sm-7">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="closejob" id="inlineCheckbox1" value="1"> <span class="redstar">*</span> Also send me job closely related to my search terms.
                                </label>
                            </div>

                        </div>

                        <div class="form-group ">
                            <label class="col-sm-4 pedit2 text-right"></label>
                            <div class="col-sm-7">
                                <div ><span id="termsinfo"></span></div>
                            </div>

                        </div>



                        <div class="form-group">
                            <div class="col-sm-12 text-center"><input class="btn-blue btn bc3" name="submitalert" onclick="return jobalertValidate();" value="Create Job Alert "> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--CREATE JOB ALERT END-->


    <!-- FOOTER -->
    <footer>

        <div id="footer">

            <div class="container">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">

                        <div class="widget widget-contact">
                            <h4 class="widget-title">Information</h4>
                            <ul>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/aboutus.html" > About Us </a> </li>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/terms.html" > Terms & Conditions </a></li>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/privacy-policy.html" > Privacy Policy </a></li>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/contactus.html" > Contact Us </a></li>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/faq.html" > Help / FAQ </a></li>

                            </ul>

                        </div><!-- widget-contact -->

                    </div><!-- col -->
                    <div class="col-sm-2">

                        <div class="widget widget-contact">
                            <h4 class="widget-title">Jobseekers </h4>
                            <ul>
                                <li><a href="jobsseeker-login.html" > Login/Register </a> </li>
                                <!--<li><a href="#" > Follow Top Recruiters </a></li>
                                <li><a href="#" > Resume Free Quality Score </a></li>
                                <li><a href="#" > Career Advice </a></li>
                                <li><a href="#" > Security Advice </a></li>
                                <li><a href="#" > Resume Samples </a> </li>
                                <li><a href="#" > Report a Problem </a></li>-->
                            </ul>

                            <h4 class="widget-title"> Recruiters </h4>
                            <ul>
                                <li><a href="recruiter-listing.html" > Browse All Recruiters </a> </li>

                                <!--<li><a href="recruiter-listing.html" > Go to OwoRecruiters </a></li>-->
                                <!--<li><a href="#" > Report a Problem </a></li>-->
                            </ul>
                        </div><!-- widget-contact -->

                    </div><!-- col -->
                    <div class="col-sm-2">

                        <div class="widget widget-contact">

                            <h4 class="widget-title">Browse Jobs</h4>

                            <ul>
                                <li><a href="jobsearch_all.html" > Browse All Jobs </a> </li>
                                <!--<li><a href="#" > Premium MBA Jobs </a></li>
                                <li><a href="#" > Premium Engineering Jobs </a></li>-->
                                <li><a href="jobsearch_all.html?sch=1" > Govt. Jobs </a></li>
                                <li><a href="jobsearch_all.html?sch=2" > International Jobs </a></li>
                                <li><a href="job_by_company.html" > Jobs by Company </a> </li>
                                <li><a href="job_by_category.html" > Jobs by Category </a></li>
                                <li><a href="job_by_area.html" > Jobs by Location </a></li>
                            </ul>

                        </div><!-- widget-contact -->

                    </div><!-- col -->
                    <div class="col-sm-2">

                        <div class="widget widget-contact">
                            <h4 class="widget-title">GOVT. JOBS</h4>
                            <ul>
                                <li><a href="job_by_location.html?loc=1" > Location </a></li>
                            </ul>

                            <h4 class="widget-title"> Oversea jobs</h4>
                            <ul>
                                <li><a href="job_by_location.html?loc=2" > All Countries </a> </li>
                            </ul>

                            <h4 class="widget-title"> Employers</h4>
                            <ul>
                                <li><a href="emp_postjob.html" > Post Jobs </a> </li>
                                <!--<li><a href="#" > Search Resumes</a> </li>-->
                            </ul>



                        </div><!-- widget-contact -->


                    </div><!-- col -->
                    <div class="col-sm-2">

                        <!--	<div class="widget widget-contact">
                                <h4 class="widget-title">SERVICES</h4>

                                <ul>
                                    <li><a href="#" > In-house Consultants </a> </li>
                                    <li><a href="#" > Resume Writing </a></li>
                                    <li><a href="#" > Featured Resume </a></li>
                                    <li><a href="#" > Priority Applicant </a></li>
                                    <li><a href="#" > Recruiters Connent </a></li>
                                </ul>

                            </div>--><!-- widget-contact -->

                        <div class="widget widget-social">
                            <h4 class="widget-title">FOLLOW US</h4>

                            <div class="social-media">

                                <a class="facebook" href="http://www.facebook.com" target="_blank"><i class="mt-icons-facebook"></i></a>
                                <a class="twitter" href="http://www.twitter.com" target="_blank"><i class="mt-icons-twitter"></i></a>
                                <a class="google" href="http://www.googleplus.com" target="_blank"><i class="mt-icons-google-plus"></i></a>
                                <a class="linkedin" href="http://www.linkedin.com" target="_blank"><i class="mt-icons-linkedin"></i></a>
                            </div><!-- social-media -->
                        </div><!-- widget-social -->
                    </div><!-- col -->
                    <div class="col-sm-1"> </div>
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- footer -->

        <div id="footer-bottom">

            <div class="container">
                <div class="row">

                    <div class="col-sm-12">

                        <div class="widget widget-text">

                            <div  class="copy-right"><p></p>
                                <!--<p>All rights reserved &copy; 2015 Lead Consulting Group. |  Website Designed by <a target="_blank" href="http://www.phpscriptsmall.com/">Php Scripts Mall Pvt Ltd</a></p>-->
                            </div>

                        </div><!-- widget-text -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- footer-bottom -->

    </footer>
    <!-- FOOTER -->

</div><!-- PAGE-WRAPPER -->


<!-- GO TOP -->
<a id="go-top"><i class="mt-icons-arrow-up2"></i></a>

<script >
    $('#myCarousel').carousel({
        interval: 40000
    });

    $('.carousel .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length>0) {

            next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');

        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));

        }
    });
</script>

@include('temp.layouts.scripts')
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script type="text/javascript">
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail());
        var id = profile.getId();
        var name = profile.getName();
        var email = profile.getEmail();
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
            //alert("dfs");
            console.log('User signed out.');
            // window.location='logout.php';
        });
        // alert(id);
        // alert(name);
        // alert(email);

        $.ajax({
            type: "POST",
            url: "ajax_google.php",
            data: "id="+ id + "&name=" + name + "&email=" + email ,
            success: function(msg){
                // alert(msg);
                window.location='emp_welcome.php';
            }
        });
        //alert(profile.getId());
        // alert(profile.getName());
        // alert(profile.getImageUrl());
        // alert(profile.getEmail());

    }

</script>
<script>
    function signOut() {

        // alert("dfsd");
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
            //alert("dfs");
            console.log('User signed out.');
            window.location='logout_emp.php';
        });


    }
</script>
<script type="text/javascript">
    function advancedsearch()
    {
//alert('ghghghfg');
        var adkey = $("#ad-keyword").val();
        var location = $("#location").val();
        var advindustry = $("#advindustry").val();
        var advfarea = $("#advfarea").val();
        if(adkey != "" || location != "" || advindustry != ""  || advfarea != "")
        {
            $('#advancesearchform').submit();
            return true;
        }
        else
        {
            $('#divsearch').html("<div class='alert'>Please enter Keywords or Location or select Job Category or Industry to search</div>");
            return false;
        }
        /*
        $.ajax({
            type: "POST",
            url: "http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//ajax_save_jobs.php",
            async:false,
            data: "id="+id+"&seeker_id="+seeker_id,
            success: function(msg){
                alert(msg);
            //window.location='http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/search.html';
        }
        });*/
    }
</script>
<!--Auto Complete End ------------------------------------------------------------------->
<script type="text/javascript">

    //<![CDATA[



    // check-out date >= check-in date

    function customRange(dates) {

        if (this.id == 'startdate') {

            $('#enddate').datepick('option', 'minDate', dates[0] || null);

        }

        else {

            $('#startdate').datepick('option', 'maxDate', dates[0] || null);

        }

        var edt = $('#ed_timestamp').val();

        var sdt = $('#sd_timestamp').val();

        if ((edt > 0) && (sdt > 0)) {

            $('span.nights').text((edt - sdt) / (3600*24) + ' night(s)');

        } else {

            $('span.nights').text('');

        }

    }



    $(document).ready(function(){




        $("#keyword").autocomplete("keyskillsearch.php", {

            width: 175,
            formatResult: function(data, value) {
                //alert(data);
                return value.split(",")[0];
            }
        });

        $("#ad-keyword").autocomplete("keyskillsearch.php", {
            //alert(data);
            width: 175,
            formatResult: function(data, value) {

                return value.split(",")[0];
            }
        });

        $("#location").autocomplete("ajax_joblocation.php", {

            width: 165,
            formatResult: function(data, value) {
                return value.split(",")[0];
            }
        });

        $("#adv-location").autocomplete("ajax_joblocation.php", {

            width: 165,
            formatResult: function(data, value) {
                return value.split(",")[0];
            }
        });
        // Datepick input fields

        /*	$('#startdate').datepick({

                onSelect: customRange,

                showTrigger: '#trigger',

                altField: '#sd_timestamp',

                //altFormat: $.datepick.TIMESTAMP

            });

            $('#enddate').datepick({

                onSelect: customRange,

                showTrigger: '#trigger',

                altField: '#ed_timestamp',

            //	altFormat: $.datepick.TIMESTAMP

            });
    */


        // Carousel slider

        /*$('.carousel ul').cycle({

            prev: '.previous',

            next: '.next',

            timeout: 6000,

            pause: 1

        });*/



        /* tabs */

        //var tabs = $("#tabs").tabs(function () {



        //$("#innerimages").css("display","none");

        //$("#innerimages_loader").css("display","none");

        //});



        // Template setup

        //	Site.setup();



        // Google map setup

        // centerX: 27.9944

        // centerY: -9.84375

        // zoom: 2

        // clustering: true

        // NOTE: hotel list is loaded on the bottom of this file

        //Site.gmapInit(27.9944, -9.84375, 2, true);



    });



    //]]>

</script>
<script type="text/javascript">
    function chkempty()
    {
        if(tinyMCE.get("job_desc").getContent())
        {

            var idddd = "job_desc";
            alert(job_desc);
            chkkabuse();


        }
    }


    function chkkabuse(txtid)
    {
        // alert(txtid);
        // exit;
        var idd = txtid;
        //alert(idd);
        var textval =document.getElementById(idd).value;
        //alert(textval);
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                //alert(xmlhttp.responseText);

                //alert(xmlhttp.responseText);
                if(xmlhttp.responseText==0)
                {
                    document.getElementById(txtid).focus();
                    document.getElementById(txtid).value="";
                    //document.getElementById("name1").innerHTML="<font color='red' style='font-size:12px;'>Don't use abuse words,  </font> ";
                    alert ("Don't use abuse words");


                }
                else
                {
                    //document.getElementById("name1").innerHTML="<font color='#009966' style='font-size:12px;'>good</font>";
                }
            }
        }
        xmlhttp.open("GET","chkabuse.php?q="+textval,true);
        xmlhttp.send();


    }
</script>
<script type="text/javascript">
    function jobalertValidate()
    {
        var keywordalert=$('#keywordalert').val();
        var locationalert=$('#locationalert').val();
        var workexp=$('#workexp').val();
        var indus=$('#indus').val();
        var jobcat=$('#jobcat').val();
        var jobrole=$('#jobrole').val();
        var namealert=$('#namealert').val();
        var emailalert=$('#emailalert').val();

        var clr=0;
        $('.error').hide();
        if(keywordalert=="")
        {
            $('#keywordinfo').html('<span class="error">Please enter keyword</span>');
            $('#keywordalert').focus();
            document.myform1.keywordalert.style.borderColor="red";
            clr=1;
        }
        if(locationalert=="")
        {
            $('#locationinfo').html('<span class="error">Please enter location</span>');
            $('#locationalert').focus();
            document.myform1.locationalert.style.borderColor="red";
            clr=1;
        }
        if(workexp=="")
        {
            $('#workinfo').html('<span class="error">Please enter Experience</span>');
            $('#workexp').focus();
            document.myform1.workexp.style.borderColor="red";
            clr=1;
        }
        if(indus=="")
        {
            $('#industryinfo').html('<span class="error">Please enter industry</span>');
            $('#indus').focus();
            document.myform1.indus.style.borderColor="red";
            clr=1;
        }
        if(jobcat=="")
        {
            $('#categoryinfo').html('<span class="error">Please enter job category</span>');
            $('#jobcat').focus();
            document.myform1.jobcat.style.borderColor="red";
            clr=1;
        }
        if(jobrole=="")
        {
            $('#roleinfo').html('<span class="error">Please enter job role</span>');
            $('#jobrole').focus();
            document.myform1.jobrole.style.borderColor="red";
            clr=1;
        }
        if(namealert=="")
        {
            $('#nameinfo').html('<span class="error">Please enter Name</span>');
            $('#namealert').focus();
            document.myform1.namealert.style.borderColor="red";
            clr=1;
        }
        if(emailalert=="")
        {
            $('#emailinfo').html('<span class="error">Please enter Email</span>');
            $('#emailalert').focus();
            document.myform1.emailalert.style.borderColor="red";
            clr=1;
        }
        // var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        if(document.getElementById("inlineCheckbox1").checked == false){
            $('#termsinfo').html('<span class="error">Please agree to the terms and conditions to continue.</span>');
            clr=1;
        }

        if(clr==0)
        {
            document.myform1.keywordalert.value=1;
            document.myform1.submit();
            return true;
        }

    }

</script>

<style>
    .error,.redstar{ color:#F00;   font-size: 12px;}
</style>

<script src="assets/plugins/charactercounter/jquery.charactercounter.js"></script>
<script>
    $(function(){

        //Example #6
        $("#counter_selector").characterCounter({
            counterSelector: '#my_counter1'
        });

        //Example #6
        $("#multiple_counters").characterCounter({
            counterSelector: '.a_counter'
        });

    });
</script>

<script>
    $(function(){

        //Example #6
        $("#counter_selector2").characterCounter({
            counterSelector: '#my_counter2'
        });

        //Example #6
        $("#multiple_counters").characterCounter({
            counterSelector: '.a_counter'
        });

    });
</script>

<script type="text/javascript">
    function radiophy(val)
    {

        if(val==1)
        {
            document.getElementById('desc').style.display='block';
        }
        else if(val==2)
        {
            document.getElementById('desc').style.display='none';
        }

    }
</script>
