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
                        <h4>Edit IT Skills</h4>
                    </div> <!--top-emp-center-->
                    <form name="form1" class="form-horizontal m10">
                        <div class="row" >
                            <div class="" >

                                <!-- <div class="all-catehead blue">IT Skills</div>

                           <div class="itsk">
                              You should mention all the important programming languages and software packages that you have expertise in.
                           </div>   -->


                                <table>
                                    <thead>
                                    <tr>
                                        <th class="col-md-3 all-catehead">Skill</th>
                                        <th class="col-md-2 all-catehead">Version</th>
                                        <th class="col-md-2 all-catehead">Last Used</th>
                                        <th class="col-md-2 all-catehead">Experience</th>
                                        <th class="col-md-1 all-catehead"> </th>
                                        <th class="col-md-2 all-catehead"> </th>
                                        <th class="col-md-1 all-catehead"> </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td><input type="Text" class="form-control" name="skill1" id="skill1" value="" ></td>
                                        <td><input type="Text" class="form-control" name="version1" id="version1" value=""  ></td>
                                        <td><select name="lastused1" id="lastused1" class="form-control">
                                                <option value="">Select</option>
                                                <option value="2016" >2016</option>
                                                <option value="2015" >2015</option>
                                                <option value="2014" >2014</option>
                                                <option value="2013" >2013</option>
                                                <option value="2012" >2012</option>
                                                <option value="2011" >2011</option>
                                                <option value="2010" >2010</option>
                                                <option value="2009" >2009</option>
                                                <option value="2008" >2008</option>
                                                <option value="2007" >2007</option>
                                                <option value="2006" >2006</option>
                                                <option value="2005" >2005</option>
                                                <option value="2004" >2004</option>
                                                <option value="2003" >2003</option>
                                                <option value="2002" >2002</option>
                                                <option value="2001" >2001</option>
                                                <option value="2000" >2000</option>
                                                <option value="1999" >1999</option>
                                                <option value="1998" >1998</option>
                                                <option value="1997" >1997</option>
                                                <option value="1996" >1996</option>
                                                <option value="1995" >1995</option>
                                                <option value="1994" >1994</option>
                                                <option value="1993" >1993</option>
                                                <option value="1992" >1992</option>
                                                <option value="1991" >1991</option>
                                                <option value="1990" >1990</option>
                                                <option value="1989" >1989</option>
                                                <option value="1988" >1988</option>
                                                <option value="1987" >1987</option>
                                                <option value="1986" >1986</option>
                                                <option value="1985" >1985</option>
                                                <option value="1984" >1984</option>
                                                <option value="1983" >1983</option>
                                                <option value="1982" >1982</option>
                                                <option value="1981" >1981</option>
                                                <option value="1980" >1980</option>
                                                <option value="1979" >1979</option>
                                                <option value="1978" >1978</option>
                                                <option value="1977" >1977</option>
                                                <option value="1976" >1976</option>
                                                <option value="1975" >1975</option>
                                                <option value="1974" >1974</option>
                                                <option value="1973" >1973</option>
                                                <option value="1972" >1972</option>
                                                <option value="1971" >1971</option>
                                                <option value="1970" >1970</option>
                                                <option value="1969" >1969</option>
                                                <option value="1968" >1968</option>
                                                <option value="1967" >1967</option>
                                                <option value="1966" >1966</option>
                                                <option value="1965" >1965</option>
                                                <option value="1964" >1964</option>
                                                <option value="1963" >1963</option>
                                                <option value="1962" >1962</option>
                                                <option value="1961" >1961</option>
                                                <option value="1960" >1960</option>
                                                <option value="1959" >1959</option>
                                                <option value="1958" >1958</option>
                                                <option value="1957" >1957</option>
                                                <option value="1956" >1956</option>
                                                <option value="1955" >1955</option>
                                                <option value="1954" >1954</option>
                                                <option value="1953" >1953</option>
                                                <option value="1952" >1952</option>
                                                <option value="1951" >1951</option>
                                                <option value="1950" >1950</option>
                                                <option value="1949" >1949</option>
                                                <option value="1948" >1948</option>
                                                <option value="1947" >1947</option>
                                                <option value="1946" >1946</option>
                                                <option value="1945" >1945</option>
                                                <option value="1944" >1944</option>
                                                <option value="1943" >1943</option>
                                                <option value="1942" >1942</option>
                                                <option value="1941" >1941</option>
                                                <option value="1940" >1940</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="exp_years1" id="exp_years1">
                                                <option value="">Select</option>
                                                <option  value="0" selected>0</option>
                                                <option  value="1" >1</option>
                                                <option  value="2" >2</option>
                                                <option  value="3" >3</option>
                                                <option  value="4" >4</option>
                                                <option  value="5" >5</option>
                                                <option  value="6" >6</option>
                                                <option  value="7" >7</option>
                                                <option  value="8" >8</option>
                                                <option  value="9" >9</option>
                                                <option  value="10" >10</option>
                                                <option  value="11" >11</option>
                                                <option  value="12" >12</option>
                                                <option  value="13" >13</option>
                                                <option  value="14" >14</option>
                                                <option  value="15" >15</option>
                                                <option  value="16" >16</option>
                                                <option  value="17" >17</option>
                                                <option  value="18" >18</option>
                                                <option  value="19" >19</option>
                                                <option  value="20" >20</option>
                                                <option  value="21" >21</option>
                                                <option  value="22" >22</option>
                                                <option  value="23" >23</option>
                                                <option  value="24" >24</option>
                                                <option  value="25" >25</option>
                                                <option  value="26" >26</option>
                                                <option  value="27" >27</option>
                                                <option  value="28" >28</option>
                                                <option  value="29" >29</option>
                                                <option  value="30" >30</option>

                                            </select>
                                        </td>
                                        <td>Year</td>
                                        <td>
                                            <select class="form-control" name="exp_months1" id="exp_months1">
                                                <option value="">Select</option>
                                                <option value="1" >1</option>
                                                <option value="2" >2</option>
                                                <option value="3" >3</option>
                                                <option value="4" >4</option>
                                                <option value="5" >5</option>
                                                <option value="6" >6</option>
                                                <option value="7" >7</option>
                                                <option value="8" >8</option>
                                                <option value="9" >9</option>
                                                <option value="10" >10</option>
                                                <option value="11" >11</option>
                                                <option value="12" >12</option>

                                            </select>

                                        </td>
                                        <td>Months</td>
                                    </tr><!--tr-end-->
                                    <tr>
                                        <td><input type="Text" class="form-control" name="skill2" id="skill2" value="" ></td>
                                        <td><input type="Text" class="form-control" name="version2" id="version2" value=""  ></td>
                                        <td><select name="lastused2" id="lastused2" class="form-control">
                                                <option value="">Select</option>
                                                <option value="2016" >2016</option>
                                                <option value="2015" >2015</option>
                                                <option value="2014" >2014</option>
                                                <option value="2013" >2013</option>
                                                <option value="2012" >2012</option>
                                                <option value="2011" >2011</option>
                                                <option value="2010" >2010</option>
                                                <option value="2009" >2009</option>
                                                <option value="2008" >2008</option>
                                                <option value="2007" >2007</option>
                                                <option value="2006" >2006</option>
                                                <option value="2005" >2005</option>
                                                <option value="2004" >2004</option>
                                                <option value="2003" >2003</option>
                                                <option value="2002" >2002</option>
                                                <option value="2001" >2001</option>
                                                <option value="2000" >2000</option>
                                                <option value="1999" >1999</option>
                                                <option value="1998" >1998</option>
                                                <option value="1997" >1997</option>
                                                <option value="1996" >1996</option>
                                                <option value="1995" >1995</option>
                                                <option value="1994" >1994</option>
                                                <option value="1993" >1993</option>
                                                <option value="1992" >1992</option>
                                                <option value="1991" >1991</option>
                                                <option value="1990" >1990</option>
                                                <option value="1989" >1989</option>
                                                <option value="1988" >1988</option>
                                                <option value="1987" >1987</option>
                                                <option value="1986" >1986</option>
                                                <option value="1985" >1985</option>
                                                <option value="1984" >1984</option>
                                                <option value="1983" >1983</option>
                                                <option value="1982" >1982</option>
                                                <option value="1981" >1981</option>
                                                <option value="1980" >1980</option>
                                                <option value="1979" >1979</option>
                                                <option value="1978" >1978</option>
                                                <option value="1977" >1977</option>
                                                <option value="1976" >1976</option>
                                                <option value="1975" >1975</option>
                                                <option value="1974" >1974</option>
                                                <option value="1973" >1973</option>
                                                <option value="1972" >1972</option>
                                                <option value="1971" >1971</option>
                                                <option value="1970" >1970</option>
                                                <option value="1969" >1969</option>
                                                <option value="1968" >1968</option>
                                                <option value="1967" >1967</option>
                                                <option value="1966" >1966</option>
                                                <option value="1965" >1965</option>
                                                <option value="1964" >1964</option>
                                                <option value="1963" >1963</option>
                                                <option value="1962" >1962</option>
                                                <option value="1961" >1961</option>
                                                <option value="1960" >1960</option>
                                                <option value="1959" >1959</option>
                                                <option value="1958" >1958</option>
                                                <option value="1957" >1957</option>
                                                <option value="1956" >1956</option>
                                                <option value="1955" >1955</option>
                                                <option value="1954" >1954</option>
                                                <option value="1953" >1953</option>
                                                <option value="1952" >1952</option>
                                                <option value="1951" >1951</option>
                                                <option value="1950" >1950</option>
                                                <option value="1949" >1949</option>
                                                <option value="1948" >1948</option>
                                                <option value="1947" >1947</option>
                                                <option value="1946" >1946</option>
                                                <option value="1945" >1945</option>
                                                <option value="1944" >1944</option>
                                                <option value="1943" >1943</option>
                                                <option value="1942" >1942</option>
                                                <option value="1941" >1941</option>
                                                <option value="1940" >1940</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="exp_years2" id="exp_years2">
                                                <option value="">Select</option>
                                                <option  value="0" selected>0</option>
                                                <option  value="1" >1</option>
                                                <option  value="2" >2</option>
                                                <option  value="3" >3</option>
                                                <option  value="4" >4</option>
                                                <option  value="5" >5</option>
                                                <option  value="6" >6</option>
                                                <option  value="7" >7</option>
                                                <option  value="8" >8</option>
                                                <option  value="9" >9</option>
                                                <option  value="10" >10</option>
                                                <option  value="11" >11</option>
                                                <option  value="12" >12</option>
                                                <option  value="13" >13</option>
                                                <option  value="14" >14</option>
                                                <option  value="15" >15</option>
                                                <option  value="16" >16</option>
                                                <option  value="17" >17</option>
                                                <option  value="18" >18</option>
                                                <option  value="19" >19</option>
                                                <option  value="20" >20</option>
                                                <option  value="21" >21</option>
                                                <option  value="22" >22</option>
                                                <option  value="23" >23</option>
                                                <option  value="24" >24</option>
                                                <option  value="25" >25</option>
                                                <option  value="26" >26</option>
                                                <option  value="27" >27</option>
                                                <option  value="28" >28</option>
                                                <option  value="29" >29</option>
                                                <option  value="30" >30</option>

                                            </select>
                                        </td>
                                        <td>Year</td>
                                        <td>
                                            <select class="form-control" name="exp_months2" id="exp_months2">
                                                <option value="">Select</option>
                                                <option value="1" >1</option>
                                                <option value="2" >2</option>
                                                <option value="3" >3</option>
                                                <option value="4" >4</option>
                                                <option value="5" >5</option>
                                                <option value="6" >6</option>
                                                <option value="7" >7</option>
                                                <option value="8" >8</option>
                                                <option value="9" >9</option>
                                                <option value="10" >10</option>
                                                <option value="11" >11</option>
                                                <option value="12" >12</option>

                                            </select>

                                        </td>
                                        <td>Months</td>
                                    </tr><!--tr-end-->
                                    <tr>
                                        <td><input type="Text" class="form-control" name="skill3" id="skill3" value="" ></td>
                                        <td><input type="Text" class="form-control" name="version3" id="version3" value=""  ></td>
                                        <td><select name="lastused3" id="lastused3" class="form-control">
                                                <option value="">Select</option>
                                                <option value="2016" >2016</option>
                                                <option value="2015" >2015</option>
                                                <option value="2014" >2014</option>
                                                <option value="2013" >2013</option>
                                                <option value="2012" >2012</option>
                                                <option value="2011" >2011</option>
                                                <option value="2010" >2010</option>
                                                <option value="2009" >2009</option>
                                                <option value="2008" >2008</option>
                                                <option value="2007" >2007</option>
                                                <option value="2006" >2006</option>
                                                <option value="2005" >2005</option>
                                                <option value="2004" >2004</option>
                                                <option value="2003" >2003</option>
                                                <option value="2002" >2002</option>
                                                <option value="2001" >2001</option>
                                                <option value="2000" >2000</option>
                                                <option value="1999" >1999</option>
                                                <option value="1998" >1998</option>
                                                <option value="1997" >1997</option>
                                                <option value="1996" >1996</option>
                                                <option value="1995" >1995</option>
                                                <option value="1994" >1994</option>
                                                <option value="1993" >1993</option>
                                                <option value="1992" >1992</option>
                                                <option value="1991" >1991</option>
                                                <option value="1990" >1990</option>
                                                <option value="1989" >1989</option>
                                                <option value="1988" >1988</option>
                                                <option value="1987" >1987</option>
                                                <option value="1986" >1986</option>
                                                <option value="1985" >1985</option>
                                                <option value="1984" >1984</option>
                                                <option value="1983" >1983</option>
                                                <option value="1982" >1982</option>
                                                <option value="1981" >1981</option>
                                                <option value="1980" >1980</option>
                                                <option value="1979" >1979</option>
                                                <option value="1978" >1978</option>
                                                <option value="1977" >1977</option>
                                                <option value="1976" >1976</option>
                                                <option value="1975" >1975</option>
                                                <option value="1974" >1974</option>
                                                <option value="1973" >1973</option>
                                                <option value="1972" >1972</option>
                                                <option value="1971" >1971</option>
                                                <option value="1970" >1970</option>
                                                <option value="1969" >1969</option>
                                                <option value="1968" >1968</option>
                                                <option value="1967" >1967</option>
                                                <option value="1966" >1966</option>
                                                <option value="1965" >1965</option>
                                                <option value="1964" >1964</option>
                                                <option value="1963" >1963</option>
                                                <option value="1962" >1962</option>
                                                <option value="1961" >1961</option>
                                                <option value="1960" >1960</option>
                                                <option value="1959" >1959</option>
                                                <option value="1958" >1958</option>
                                                <option value="1957" >1957</option>
                                                <option value="1956" >1956</option>
                                                <option value="1955" >1955</option>
                                                <option value="1954" >1954</option>
                                                <option value="1953" >1953</option>
                                                <option value="1952" >1952</option>
                                                <option value="1951" >1951</option>
                                                <option value="1950" >1950</option>
                                                <option value="1949" >1949</option>
                                                <option value="1948" >1948</option>
                                                <option value="1947" >1947</option>
                                                <option value="1946" >1946</option>
                                                <option value="1945" >1945</option>
                                                <option value="1944" >1944</option>
                                                <option value="1943" >1943</option>
                                                <option value="1942" >1942</option>
                                                <option value="1941" >1941</option>
                                                <option value="1940" >1940</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="exp_years3" id="exp_years3">
                                                <option value="">Select</option>
                                                <option  value="0" selected>0</option>
                                                <option  value="1" >1</option>
                                                <option  value="2" >2</option>
                                                <option  value="3" >3</option>
                                                <option  value="4" >4</option>
                                                <option  value="5" >5</option>
                                                <option  value="6" >6</option>
                                                <option  value="7" >7</option>
                                                <option  value="8" >8</option>
                                                <option  value="9" >9</option>
                                                <option  value="10" >10</option>
                                                <option  value="11" >11</option>
                                                <option  value="12" >12</option>
                                                <option  value="13" >13</option>
                                                <option  value="14" >14</option>
                                                <option  value="15" >15</option>
                                                <option  value="16" >16</option>
                                                <option  value="17" >17</option>
                                                <option  value="18" >18</option>
                                                <option  value="19" >19</option>
                                                <option  value="20" >20</option>
                                                <option  value="21" >21</option>
                                                <option  value="22" >22</option>
                                                <option  value="23" >23</option>
                                                <option  value="24" >24</option>
                                                <option  value="25" >25</option>
                                                <option  value="26" >26</option>
                                                <option  value="27" >27</option>
                                                <option  value="28" >28</option>
                                                <option  value="29" >29</option>
                                                <option  value="30" >30</option>

                                            </select>
                                        </td>
                                        <td>Year</td>
                                        <td>
                                            <select class="form-control" name="exp_months3" id="exp_months3">
                                                <option value="">Select</option>
                                                <option value="1" >1</option>
                                                <option value="2" >2</option>
                                                <option value="3" >3</option>
                                                <option value="4" >4</option>
                                                <option value="5" >5</option>
                                                <option value="6" >6</option>
                                                <option value="7" >7</option>
                                                <option value="8" >8</option>
                                                <option value="9" >9</option>
                                                <option value="10" >10</option>
                                                <option value="11" >11</option>
                                                <option value="12" >12</option>

                                            </select>

                                        </td>
                                        <td>Months</td>
                                    </tr><!--tr-end-->

                                    <tr>
                                        <td><input type="Text" class="form-control" name="skill4" id="skill4" value="" ></td>
                                        <td><input type="Text" class="form-control" name="version4" id="version4" value=""  ></td>
                                        <td><select name="lastused4" id="lastused4" class="form-control">
                                                <option value="">Select</option>
                                                <option value="2016" >2016</option>
                                                <option value="2015" >2015</option>
                                                <option value="2014" >2014</option>
                                                <option value="2013" >2013</option>
                                                <option value="2012" >2012</option>
                                                <option value="2011" >2011</option>
                                                <option value="2010" >2010</option>
                                                <option value="2009" >2009</option>
                                                <option value="2008" >2008</option>
                                                <option value="2007" >2007</option>
                                                <option value="2006" >2006</option>
                                                <option value="2005" >2005</option>
                                                <option value="2004" >2004</option>
                                                <option value="2003" >2003</option>
                                                <option value="2002" >2002</option>
                                                <option value="2001" >2001</option>
                                                <option value="2000" >2000</option>
                                                <option value="1999" >1999</option>
                                                <option value="1998" >1998</option>
                                                <option value="1997" >1997</option>
                                                <option value="1996" >1996</option>
                                                <option value="1995" >1995</option>
                                                <option value="1994" >1994</option>
                                                <option value="1993" >1993</option>
                                                <option value="1992" >1992</option>
                                                <option value="1991" >1991</option>
                                                <option value="1990" >1990</option>
                                                <option value="1989" >1989</option>
                                                <option value="1988" >1988</option>
                                                <option value="1987" >1987</option>
                                                <option value="1986" >1986</option>
                                                <option value="1985" >1985</option>
                                                <option value="1984" >1984</option>
                                                <option value="1983" >1983</option>
                                                <option value="1982" >1982</option>
                                                <option value="1981" >1981</option>
                                                <option value="1980" >1980</option>
                                                <option value="1979" >1979</option>
                                                <option value="1978" >1978</option>
                                                <option value="1977" >1977</option>
                                                <option value="1976" >1976</option>
                                                <option value="1975" >1975</option>
                                                <option value="1974" >1974</option>
                                                <option value="1973" >1973</option>
                                                <option value="1972" >1972</option>
                                                <option value="1971" >1971</option>
                                                <option value="1970" >1970</option>
                                                <option value="1969" >1969</option>
                                                <option value="1968" >1968</option>
                                                <option value="1967" >1967</option>
                                                <option value="1966" >1966</option>
                                                <option value="1965" >1965</option>
                                                <option value="1964" >1964</option>
                                                <option value="1963" >1963</option>
                                                <option value="1962" >1962</option>
                                                <option value="1961" >1961</option>
                                                <option value="1960" >1960</option>
                                                <option value="1959" >1959</option>
                                                <option value="1958" >1958</option>
                                                <option value="1957" >1957</option>
                                                <option value="1956" >1956</option>
                                                <option value="1955" >1955</option>
                                                <option value="1954" >1954</option>
                                                <option value="1953" >1953</option>
                                                <option value="1952" >1952</option>
                                                <option value="1951" >1951</option>
                                                <option value="1950" >1950</option>
                                                <option value="1949" >1949</option>
                                                <option value="1948" >1948</option>
                                                <option value="1947" >1947</option>
                                                <option value="1946" >1946</option>
                                                <option value="1945" >1945</option>
                                                <option value="1944" >1944</option>
                                                <option value="1943" >1943</option>
                                                <option value="1942" >1942</option>
                                                <option value="1941" >1941</option>
                                                <option value="1940" >1940</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="exp_years4" id="exp_years4">
                                                <option value="">Select</option>
                                                <option  value="0" selected>0</option>
                                                <option  value="1" >1</option>
                                                <option  value="2" >2</option>
                                                <option  value="3" >3</option>
                                                <option  value="4" >4</option>
                                                <option  value="5" >5</option>
                                                <option  value="6" >6</option>
                                                <option  value="7" >7</option>
                                                <option  value="8" >8</option>
                                                <option  value="9" >9</option>
                                                <option  value="10" >10</option>
                                                <option  value="11" >11</option>
                                                <option  value="12" >12</option>
                                                <option  value="13" >13</option>
                                                <option  value="14" >14</option>
                                                <option  value="15" >15</option>
                                                <option  value="16" >16</option>
                                                <option  value="17" >17</option>
                                                <option  value="18" >18</option>
                                                <option  value="19" >19</option>
                                                <option  value="20" >20</option>
                                                <option  value="21" >21</option>
                                                <option  value="22" >22</option>
                                                <option  value="23" >23</option>
                                                <option  value="24" >24</option>
                                                <option  value="25" >25</option>
                                                <option  value="26" >26</option>
                                                <option  value="27" >27</option>
                                                <option  value="28" >28</option>
                                                <option  value="29" >29</option>
                                                <option  value="30" >30</option>

                                            </select>
                                        </td>
                                        <td>Year</td>
                                        <td>
                                            <select class="form-control" name="exp_months4" id="exp_months4">
                                                <option value="">Select</option>
                                                <option value="1" >1</option>
                                                <option value="2" >2</option>
                                                <option value="3" >3</option>
                                                <option value="4" >4</option>
                                                <option value="5" >5</option>
                                                <option value="6" >6</option>
                                                <option value="7" >7</option>
                                                <option value="8" >8</option>
                                                <option value="9" >9</option>
                                                <option value="10" >10</option>
                                                <option value="11" >11</option>
                                                <option value="12" >12</option>

                                            </select>

                                        </td>
                                        <td>Months</td>
                                    </tr><!--tr-end-->






                                    </tbody>
                                </table>
                                <div class="col-md-12">
                                    <div class="col-md-3 all-sample"> e.g. Java</div>
                                    <div class="col-md-2 all-sample"> 1.0</div>
                                    <div class="col-md-2 all-sample"> 2008</div>
                                    <div class="col-md-2 all-sample"> 10</div>

                                </div>
                                <!--<div class="col-md-12">
                                  <div class="ali-left"> <input class="btn-blue btn bc" value="Add another skill" OnClick="addit();"   type="button"></div>
                                 </div> -->








                            </div><!--col-md-6-->
                            <div class="col-sm-12">
                                <div class="col-sm-7">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-3"><input type="submit" name="save1" class="btn-blue btn" value="Save" ></div>
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