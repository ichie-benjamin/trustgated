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

                <div class="col-md-9" >

                    <div class="top-emp-center">
                        <h4>Create Designation/Employer Details</h4>
                    </div> <!--top-emp-center-->
                    <br>
                    <p>Add an Employer/Designation to your profile. To edit an existing Employer/Designation please <a href="jobseeker_manageemp.php">click here.</a></p>
                    </br>
                    <form class="form-horizontal m10">
                        <div class="row" >
                            <div class="col-sm-10" >


                                <div class="form-group">
                                    <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Company Name:</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="company" id="company" class="form-control " placeholder=""/>
                                    </div>
                                    <div>
                                        <span id="companyInfo"></span>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group">
                                    <label class="col-sm-4 pedit2 text-right"><span class="red-star"></span></label>
                                    <div class="">

                                        <label class="radio-inline">
                                            <input type="radio" name="empstatus" id="emptype3" value="3" OnChange="radioemp();"/>&nbsp;Other Employer
                                        </label>



                                    </div>


                                </div><!--col-md-6-->

                                <div class="form-group">
                                    <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Duration From:</label>

                                    <div class="col-sm-4 padno">
                                        <div class="col-sm-12">
                                            <select name="fromyear" id="fromyear" class="form-control">
                                                <option value="">Year</option>
                                                <option value='1960'>1960</option>
                                                <option value='1961'>1961</option>
                                                <option value='1962'>1962</option>
                                                <option value='1963'>1963</option>
                                                <option value='1964'>1964</option>
                                                <option value='1965'>1965</option>
                                                <option value='1966'>1966</option>
                                                <option value='1967'>1967</option>
                                                <option value='1968'>1968</option>
                                                <option value='1969'>1969</option>
                                                <option value='1970'>1970</option>
                                                <option value='1971'>1971</option>
                                                <option value='1972'>1972</option>
                                                <option value='1973'>1973</option>
                                                <option value='1974'>1974</option>
                                                <option value='1975'>1975</option>
                                                <option value='1976'>1976</option>
                                                <option value='1977'>1977</option>
                                                <option value='1978'>1978</option>
                                                <option value='1979'>1979</option>
                                                <option value='1980'>1980</option>
                                                <option value='1981'>1981</option>
                                                <option value='1982'>1982</option>
                                                <option value='1983'>1983</option>
                                                <option value='1984'>1984</option>
                                                <option value='1985'>1985</option>
                                                <option value='1986'>1986</option>
                                                <option value='1987'>1987</option>
                                                <option value='1988'>1988</option>
                                                <option value='1989'>1989</option>
                                                <option value='1990'>1990</option>
                                                <option value='1991'>1991</option>
                                                <option value='1992'>1992</option>
                                                <option value='1993'>1993</option>
                                                <option value='1994'>1994</option>
                                                <option value='1995'>1995</option>
                                                <option value='1996'>1996</option>
                                                <option value='1997'>1997</option>
                                                <option value='1998'>1998</option>
                                                <option value='1999'>1999</option>
                                                <option value='2000'>2000</option>
                                                <option value='2001'>2001</option>
                                                <option value='2002'>2002</option>
                                                <option value='2003'>2003</option>
                                                <option value='2004'>2004</option>
                                                <option value='2005'>2005</option>
                                                <option value='2006'>2006</option>
                                                <option value='2007'>2007</option>
                                                <option value='2008'>2008</option>
                                                <option value='2009'>2009</option>
                                                <option value='2010'>2010</option>
                                                <option value='2011'>2011</option>
                                                <option value='2012'>2012</option>
                                                <option value='2013'>2013</option>
                                                <option value='2014'>2014</option>
                                                <option value='2015'>2015</option>
                                                <option value='2016'>2016</option>
                                                <option value='2017'>2017</option>
                                            </select>
                                        </div>

                                    </div><!--col-sm-6-->
                                    <div class="col-sm-4 padno">
                                        <div class="col-sm-12">
                                            <select name="frommonth" id="frommonth" class="form-control">
                                                <option value="">Months</option>
                                                <option value='Jan'>Jan</option>
                                                <option value='Feb'>Feb</option>
                                                <option value='Mar'>Mar</option>
                                                <option value='Apr'>Apr</option>
                                                <option value='May'>May</option>
                                                <option value='Jun'>Jun</option>
                                                <option value='Jul'>Jul</option>
                                                <option value='Aug'>Aug</option>
                                                <option value='Sep'>Sep</option>
                                                <option value='Oct'>Oct</option>
                                                <option value='Nov'>Nov</option>
                                                <option value='Dec'>Dec</option>
                                            </select>
                                        </div>

                                    </div>
                                    <!-- <div class="col-sm-3 padno">
                                        <div class="col-sm-10">
                                        <select name="fromyear" id="fromyear" class="form-control">
                                        <option value="">Year</option>
                                                                            <option value='1960'>1960</option>
                                                                            <option value='1961'>1961</option>
                                                                            <option value='1962'>1962</option>
                                                                            <option value='1963'>1963</option>
                                                                            <option value='1964'>1964</option>
                                                                            <option value='1965'>1965</option>
                                                                            <option value='1966'>1966</option>
                                                                            <option value='1967'>1967</option>
                                                                            <option value='1968'>1968</option>
                                                                            <option value='1969'>1969</option>
                                                                            <option value='1970'>1970</option>
                                                                            <option value='1971'>1971</option>
                                                                            <option value='1972'>1972</option>
                                                                            <option value='1973'>1973</option>
                                                                            <option value='1974'>1974</option>
                                                                            <option value='1975'>1975</option>
                                                                            <option value='1976'>1976</option>
                                                                            <option value='1977'>1977</option>
                                                                            <option value='1978'>1978</option>
                                                                            <option value='1979'>1979</option>
                                                                            <option value='1980'>1980</option>
                                                                            <option value='1981'>1981</option>
                                                                            <option value='1982'>1982</option>
                                                                            <option value='1983'>1983</option>
                                                                            <option value='1984'>1984</option>
                                                                            <option value='1985'>1985</option>
                                                                            <option value='1986'>1986</option>
                                                                            <option value='1987'>1987</option>
                                                                            <option value='1988'>1988</option>
                                                                            <option value='1989'>1989</option>
                                                                            <option value='1990'>1990</option>
                                                                            <option value='1991'>1991</option>
                                                                            <option value='1992'>1992</option>
                                                                            <option value='1993'>1993</option>
                                                                            <option value='1994'>1994</option>
                                                                            <option value='1995'>1995</option>
                                                                            <option value='1996'>1996</option>
                                                                            <option value='1997'>1997</option>
                                                                            <option value='1998'>1998</option>
                                                                            <option value='1999'>1999</option>
                                                                            <option value='2000'>2000</option>
                                                                            <option value='2001'>2001</option>
                                                                            <option value='2002'>2002</option>
                                                                            <option value='2003'>2003</option>
                                                                            <option value='2004'>2004</option>
                                                                            <option value='2005'>2005</option>
                                                                            <option value='2006'>2006</option>
                                                                            <option value='2007'>2007</option>
                                                                            <option value='2008'>2008</option>
                                                                            <option value='2009'>2009</option>
                                                                            <option value='2010'>2010</option>
                                                                            <option value='2011'>2011</option>
                                                                            <option value='2012'>2012</option>
                                                                            <option value='2013'>2013</option>
                                                                            <option value='2014'>2014</option>
                                                                            <option value='2015'>2015</option>
                                                                            </select>
                                        </div>

                                      </div><!--col-sm-6-->
                                    <!--<div class="col-sm-3 padno">
                                    <div class="col-sm-10">
                                      <select name="frommonth" id="frommonth" class="form-control">
                                      <option value="">Months</option>
                                      <option value='Jan'>Jan</option>
                                      <option value='Feb'>Feb</option>
                                      <option value='Mar'>Mar</option>
                                      <option value='Apr'>Apr</option>
                                      <option value='May'>May</option>
                                      <option value='Jun'>Jun</option>
                                      <option value='Jul'>Jul</option>
                                      <option value='Aug'>Aug</option>
                                      <option value='Sep'>Sep</option>
                                      <option value='Oct'>Oct</option>
                                      <option value='Nov'>Nov</option>
                                      <option value='Dec'>Dec</option>
                                      </select>
                                    </div>

                                   </div>-->

                                    <div>
                                        <span id="durationInfo"></span>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group" id="durTo" style="display:none;">
                                    <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Duration To:</label>

                                    <div class="col-sm-4 padno">
                                        <div class="col-sm-12">
                                            <select name="toyear" id="toyear" class="form-control">
                                                <option value="">Year</option>
                                                <option value='1960'>1960</option>
                                                <option value='1961'>1961</option>
                                                <option value='1962'>1962</option>
                                                <option value='1963'>1963</option>
                                                <option value='1964'>1964</option>
                                                <option value='1965'>1965</option>
                                                <option value='1966'>1966</option>
                                                <option value='1967'>1967</option>
                                                <option value='1968'>1968</option>
                                                <option value='1969'>1969</option>
                                                <option value='1970'>1970</option>
                                                <option value='1971'>1971</option>
                                                <option value='1972'>1972</option>
                                                <option value='1973'>1973</option>
                                                <option value='1974'>1974</option>
                                                <option value='1975'>1975</option>
                                                <option value='1976'>1976</option>
                                                <option value='1977'>1977</option>
                                                <option value='1978'>1978</option>
                                                <option value='1979'>1979</option>
                                                <option value='1980'>1980</option>
                                                <option value='1981'>1981</option>
                                                <option value='1982'>1982</option>
                                                <option value='1983'>1983</option>
                                                <option value='1984'>1984</option>
                                                <option value='1985'>1985</option>
                                                <option value='1986'>1986</option>
                                                <option value='1987'>1987</option>
                                                <option value='1988'>1988</option>
                                                <option value='1989'>1989</option>
                                                <option value='1990'>1990</option>
                                                <option value='1991'>1991</option>
                                                <option value='1992'>1992</option>
                                                <option value='1993'>1993</option>
                                                <option value='1994'>1994</option>
                                                <option value='1995'>1995</option>
                                                <option value='1996'>1996</option>
                                                <option value='1997'>1997</option>
                                                <option value='1998'>1998</option>
                                                <option value='1999'>1999</option>
                                                <option value='2000'>2000</option>
                                                <option value='2001'>2001</option>
                                                <option value='2002'>2002</option>
                                                <option value='2003'>2003</option>
                                                <option value='2004'>2004</option>
                                                <option value='2005'>2005</option>
                                                <option value='2006'>2006</option>
                                                <option value='2007'>2007</option>
                                                <option value='2008'>2008</option>
                                                <option value='2009'>2009</option>
                                                <option value='2010'>2010</option>
                                                <option value='2011'>2011</option>
                                                <option value='2012'>2012</option>
                                                <option value='2013'>2013</option>
                                                <option value='2014'>2014</option>
                                                <option value='2015'>2015</option>
                                                <option value='2016'>2016</option>
                                                <option value='2017'>2017</option>
                                            </select>
                                        </div>

                                    </div><!--col-sm-6-->
                                    <div class="col-sm-4 padno">
                                        <div class="col-sm-12">
                                            <select name="tomonth" id="tomonth" class="form-control">
                                                <option value="">Months</option>
                                                <option value='Jan'>Jan</option>
                                                <option value='Feb'>Feb</option>
                                                <option value='Mar'>Mar</option>
                                                <option value='Apr'>Apr</option>
                                                <option value='May'>May</option>
                                                <option value='Jun'>Jun</option>
                                                <option value='Jul'>Jul</option>
                                                <option value='Aug'>Aug</option>
                                                <option value='Sep'>Sep</option>
                                                <option value='Oct'>Oct</option>
                                                <option value='Nov'>Nov</option>
                                                <option value='Dec'>Dec</option>
                                            </select>
                                        </div>

                                    </div>


                                    <div>
                                        <span id="durationInfo"></span>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group">
                                    <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Designation :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="designation1" id="designation1" class="form-control " placeholder="">
                                    </div>
                                    <div>
                                        <span id="desigInfo"></span>
                                    </div>
                                </div><!--form-group-->

                                <!--<div class="form-group">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Annual Salary:</label>

                                    <div class="col-sm-4 padno">
                                  <div class="col-sm-12">
                                  <select name="annulsal" id="annulsal" class="form-control">
          <option value="">Lakhs</option>
                      <option value='1'>1Lakhs</option>
                      <option value='2'>2Lakhs</option>
                      <option value='3'>3Lakhs</option>
                      <option value='4'>4Lakhs</option>
                      <option value='5'>5Lakhs</option>
                      <option value='6'>6Lakhs</option>
                      <option value='7'>7Lakhs</option>
                      <option value='8'>8Lakhs</option>
                      <option value='9'>9Lakhs</option>
                      <option value='10'>10Lakhs</option>
                      <option value='11'>11Lakhs</option>
                      <option value='12'>12Lakhs</option>
                      <option value='13'>13Lakhs</option>
                      <option value='14'>14Lakhs</option>
                      <option value='15'>15Lakhs</option>
                      <option value='16'>16Lakhs</option>
                      <option value='17'>17Lakhs</option>
                      <option value='18'>18Lakhs</option>
                      <option value='19'>19Lakhs</option>
                      <option value='20'>20Lakhs</option>
                                              </select>



                                  </div>

                                </div><!--col-sm-6-->
                                <!--<div class="col-sm-4 padno">
                                 <div class="col-sm-12">
                                   <select name="annulsa" id="annulsa" class="form-control">
           <option value="">Thous</option>
                       <option value='5'>5Thous</option>
                       <option value='10'>10Thous</option>
                       <option value='15'>15Thous</option>
                       <option value='20'>20Thous</option>
                       <option value='25'>25Thous</option>
                       <option value='30'>30Thous</option>
                       <option value='35'>35Thous</option>
                       <option value='40'>40Thous</option>
                       <option value='45'>45Thous</option>
                       <option value='50'>50Thous</option>
                       <option value='55'>55Thous</option>
                       <option value='60'>60Thous</option>
                       <option value='65'>65Thous</option>
                       <option value='70'>70Thous</option>
                       <option value='75'>75Thous</option>
                       <option value='80'>80Thous</option>
                       <option value='85'>85Thous</option>
                       <option value='90'>90Thous</option>
                       <option value='95'>95Thous</option>
                       </select>
                                 </div>

                                </div>

                                 <div>
                                   <span id="salInfo"></span>
                                 </div>
                                </div><!--form-group-->



                                <!--<div class="form-group">
                              <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Notice Period:</label>
                               <div class="col-sm-8">
                                <select name="notice" id="notice"  class="form-control">
                                <option value="">Select</option>
                                <option value="serving" >Serving Notice Period</option>
                                <option value="15" >15 Days or Less</option>
                                <option value="1" >1 Month</option>
                                <option value="2" >2 Months</option>
                                <option value="3" >3 Months</option>
                                <option value="4" >More than 3 Month</option>
                                </select>
                              </div>
                              <div>
                                <span id="noticeInfo"></span>
                              </div>
                             </div><!--form-group-->
                                <div class="form-group">
                                    <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Job Profile :</label>
                                    <div class="col-sm-8">
                                        <textarea name="job_profile" id="job_profile" class="form-control"  onBlur="this.value=trim(this.value);"></textarea>
                                    </div>
                                    <div>
                                        <span id="jobInfo"></span>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group" id="notice1" style="display:none;">
                                    <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Notice Period:</label>
                                    <div class="col-sm-8">
                                        <select name="notice" id="notice"  class="form-control">
                                            <option value="">Select</option>
                                            <option value="serving">Serving Notice Period</option>
                                            <option value="15">15 Days or Less</option>
                                            <option value="1">1 Month</option>
                                            <option value="2">2 Months</option>
                                            <option value="3">3 Months</option>
                                            <option value="4">More than 3 Month</option>
                                        </select>
                                    </div>
                                    <div>
                                        <span id="noticeInfo"></span>
                                    </div>
                                </div><!--form-group-->

                            </div><!--col-md-6-->
                            <div class="col-sm-12">
                                <div class="col-sm-7">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-3"><input type="submit" name="save1" class="btn-blue btn" value="Save" onclick="return validateForm1();"></div>
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