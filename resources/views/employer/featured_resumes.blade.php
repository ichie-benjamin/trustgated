@extends('layouts.master')

@section('content')
    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#">My Account</a></li>
                        <li class="active">inet Profile</li>
                    </ol>
                </div>
                <script type="text/javascript">
                    $('.inbox-bg .inboxa').hide(0);

                    $('.inbox-bg').click(function(){
                        alert('ffff');
                        if($('.inboxa').hasClass('vis')){
                            $('.inboxa', this).removeClass('vis');
                            $('.inboxa', this).hide();
                        }else{
                            $('.inboxa', this).addClass('vis');
                            $('.inboxa', this).show();
                        }
                    });
                    function menu_click1()
                    {
                        $('#show1')
                    }
                </script>

            @include('employer.partials.sidebar')

                <div class="col-md-9" >



                    <div class="top-emp-center">
                        <h4>Search Candidate for Resume Access</h4>
                    </div> <!--top-emp-center-->

                    @if (session('failure'))
                        <div class="alert">
                            {{ session('failure') }}
                        </div>
                    @endif

                    <form class="form-horizontal m10"  method="post" action="{{ route('search_resumes') }}">
                        @csrf
                        <div class="row" >
                            <div class="top-emp-center">
                                <h4>Basic Details</h4>
                            </div><br />
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit">Keyword :</label>
                                    <div class="col-sm-8">
                                        <input name="keyskill" id="jobkeywords" type="text" class="form-control" />
                                        <span id="preInfo"></span>
                                    </div>
                                </div><!--form-group-->
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit">Search in :</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input name="restitle" type="radio" style="display:inline" value="0" /> Resume Title
                                        </label>
                                        <label class="radio-inline">
                                            <input name="restitle" type="radio" style="display:inline" value="1" /> Resume Title & Keyskills
                                        </label>
                                    </div>
                                </div><!--col-md-6-->
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit">Experience :</label>
                                    <div class="col-sm-8">
                                        From
                                        <select name="from" style="display:inline">
                                            <option value="">Year</option>
                                            <option value='0'>0</option>
                                            <option value='1'>1</option>
                                            <option value='2'>2</option>
                                            <option value='3'>3</option>
                                            <option value='4'>4</option>
                                            <option value='5'>5</option>
                                            <option value='6'>6</option>
                                            <option value='7'>7</option>
                                            <option value='8'>8</option>
                                            <option value='9'>9</option>
                                            <option value='10'>10</option>
                                            <option value='11'>11</option>
                                            <option value='12'>12</option>
                                            <option value='13'>13</option>
                                            <option value='14'>14</option>
                                            <option value='15'>15</option>
                                            <option value='16'>16</option>
                                            <option value='17'>17</option>
                                            <option value='18'>18</option>
                                            <option value='19'>19</option>
                                            <option value='20'>20</option>
                                            <option value='21'>21</option>
                                            <option value='22'>22</option>
                                            <option value='23'>23</option>
                                            <option value='24'>24</option>
                                            <option value='25'>25</option>
                                            <option value='26'>26</option>
                                            <option value='27'>27</option>
                                            <option value='28'>28</option>
                                            <option value='29'>29</option>
                                        </select>

                                        To
                                        <select name="to" style="display:inline">
                                            <option value="">Year</option>
                                            <option value='1'>1</option>
                                            <option value='2'>2</option>
                                            <option value='3'>3</option>
                                            <option value='4'>4</option>
                                            <option value='5'>5</option>
                                            <option value='6'>6</option>
                                            <option value='7'>7</option>
                                            <option value='8'>8</option>
                                            <option value='9'>9</option>
                                            <option value='10'>10</option>
                                            <option value='11'>11</option>
                                            <option value='12'>12</option>
                                            <option value='13'>13</option>
                                            <option value='14'>14</option>
                                            <option value='15'>15</option>
                                            <option value='16'>16</option>
                                            <option value='17'>17</option>
                                            <option value='18'>18</option>
                                            <option value='19'>19</option>
                                            <option value='20'>20</option>
                                            <option value='21'>21</option>
                                            <option value='22'>22</option>
                                            <option value='23'>23</option>
                                            <option value='24'>24</option>
                                            <option value='25'>25</option>
                                            <option value='26'>26</option>
                                            <option value='27'>27</option>
                                            <option value='28'>28</option>
                                            <option value='29'>29</option>
                                        </select>
                                    </div>
                                </div><!--col-md-6-->
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit">Annual Salary:  </label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="fromlacs" style="width:100px;">
                                            <option value="">Lacs</option>
                                            <option value='0'>0</option>
                                            <option value='1'>1</option>
                                            <option value='2'>2</option>
                                            <option value='3'>3</option>
                                            <option value='4'>4</option>
                                            <option value='5'>5</option>
                                            <option value='6'>6</option>
                                            <option value='7'>7</option>
                                            <option value='8'>8</option>
                                            <option value='9'>9</option>
                                            <option value='10'>10</option>
                                            <option value='11'>11</option>
                                            <option value='12'>12</option>
                                            <option value='13'>13</option>
                                            <option value='14'>14</option>
                                            <option value='15'>15</option>
                                            <option value='16'>16</option>
                                            <option value='17'>17</option>
                                            <option value='18'>18</option>
                                            <option value='19'>19</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-1"><!--<i class="fa fa-jpy"></i>-->-</div>
                                    <div class="col-sm-3">
                                        <select  class="form-control" name="tolacs" style="width:100px;">
                                            <option value="">Lacs</option>
                                            <option value='0'>0</option>
                                            <option value='1'>1</option>
                                            <option value='2'>2</option>
                                            <option value='3'>3</option>
                                            <option value='4'>4</option>
                                            <option value='5'>5</option>
                                            <option value='6'>6</option>
                                            <option value='7'>7</option>
                                            <option value='8'>8</option>
                                            <option value='9'>9</option>
                                            <option value='10'>10</option>
                                            <option value='11'>11</option>
                                            <option value='12'>12</option>
                                            <option value='13'>13</option>
                                            <option value='14'>14</option>
                                            <option value='15'>15</option>
                                            <option value='16'>16</option>
                                            <option value='17'>17</option>
                                            <option value='18'>18</option>
                                            <option value='19'>19</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-1"><!--<i class="fa fa-jpy"></i>--></div>

                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="col-sm-4 pedit">Location :</label>
                                    <div class="col-sm-8">
                                        <input name="location" id="adv-location" type="text" class="form-control" autocomplete="off" />
                                    </div>

                                </div>
                            </div>


                            <div class="col-md-8">

                            </div>
                            <div id="expire_date">
                                <div class="col-md-8" >
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit">Expire Date :</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="exp_date" id="exp_date" class="form-control" value="" style=""/>
                                        </div>
                                        <div class="col-sm-1"><!--<i class="fa fa-jpy"></i>--></div>
                                    </div>
                                </div>
                            </div>
                            <div id="walk_date" style="display:none;">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit">Walkin Date :  </label>
                                        <div class="col-sm-3">
                                            From <input type="text" name="from_date" id="from_date" class="form-control"  />

                                        </div>
                                        <div class="col-sm-1"><!--<i class="fa fa-jpy"></i>-->-</div>
                                        <div class="col-sm-3">
                                            To <input type="text" name="to_date" class="form-control" id="to_date" />

                                        </div>
                                        <div class="col-sm-1"><!--<i class="fa fa-jpy"></i>--></div>

                                    </div>
                                </div>
                            </div>

                            <!--<div class="col-md-8" >
                            <div class="form-group">
                            <label  class="col-sm-4 pedit">Keywords :</label>
                            <div class="col-sm-8">
                            <input type="text" name="keywords"  id="jobkeywords" onKeyUp="chkkabuse(this.id);" value="" class="form-control"  placeholder="">
                            </div>
                            </div>
                            </div><!--col-md-6-->


                            <div class="col-md-8">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit">Country :</label>
                                    <div class="col-sm-8">
                                        <select name="country" class="form-control country_select select2" data-size="7" title="Select country Type">
                                            <option>Select Country</option>
                                            @foreach(\App\Models\Country::pluck('name') as $item)
                                                <option  value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </div><span id="countryinfo"></span>
                                </div><!--form-group-->
                            </div>


                            <div class="col-md-8">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit">State :</label>
                                    <div class="col-sm-8" id='emp_state'>
                                        <select style="width: 100%" class="form-control select2 states" required name="state">

                                            <option>Select Country first</option>

                                        </select>
                                    </div><span id="stateInfo"></span>
                                </div><!--form-group-->
                            </div>


                            <div class="col-md-8">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit">City :</label>
                                    <div class="col-sm-8" id="location1">
                                        <select name="city" class="form-control" id="city1">
                                            <option value="">Select City</option>
                                            <!--<span id="cityinfo"></span>-->
                                        </select>

                                    </div><span id="cityInfo"></span>
                                </div><!--form-group-->
                            </div>



                            <!--col-md-6-->

                            <!--col-md-12-->
                        </div>
                        <div class="row" >
                            <div class="top-emp-center">
                                <h4>Employer Details</h4>
                            </div><br />
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit">Functional area :</label>
                                    <div class="col-sm-8">
                                        <select name="function_area" class="form-control">
                                            <option value="">Select</option>
                                        @foreach(\App\Models\FunctionalArea::all() as $item)
                                                <option value="{{ $item->category_functional_area }}">{{ $item->category_functional_area }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!--form-group-->

                            </div>


                            <div class="col-md-8">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit">Industry :</label>
                                    <div class="col-sm-8">
                                        <select name="industry" class="form-control">
                                            <option value="">Select</option>
                                        @foreach(\App\Models\IndustryType::all() as $item)
                                                <option value="{{ $item->category }}">{{ $item->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!--col-md-6-->
                            </div>
                        </div>
                        <div class="row" >
                            <div class="top-emp-center">
                                <h4>Educational Details</h4>
                            </div><br />
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit">Basic Education :</label>
                                    <div class="col-sm-8">
                                        <select name="basic_education" class="form-control">
                                            <option value="">Select</option>
                                            @foreach(\App\Models\EducationDetails::all() as $item)
                                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!--form-group-->
                            </div>
{{--                            <div class="col-md-8">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label  class="col-sm-4 pedit">Institute Name :</label>--}}
{{--                                    <div class="col-sm-8">--}}
{{--                                        <input name="pginstname" type="text" class="form-control"  />--}}
{{--                                    </div>--}}
{{--                                </div><!--form-group-->--}}
{{--                            </div>--}}
{{--                            <div class="col-md-8">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label  class="col-sm-4 pedit">Year of Passing :</label>--}}
{{--                                    <div class="col-sm-8">--}}
{{--                                        Between--}}
{{--                                        <select name="ugfrom" style="display:inline">--}}
{{--                                            <option value="">From</option>--}}
{{--                                            <option value="2020" >2020</option>--}}
{{--                                            <option value="2019" >2019</option>--}}
{{--                                            <option value="2018" >2018</option>--}}
{{--                                            <option value="2017" >2017</option>--}}
{{--                                            <option value="2016" >2016</option>--}}
{{--                                            <option value="2015" >2015</option>--}}
{{--                                            <option value="2014" >2014</option>--}}
{{--                                            <option value="2013" >2013</option>--}}
{{--                                            <option value="2012" >2012</option>--}}
{{--                                            <option value="2011" >2011</option>--}}
{{--                                            <option value="2010" >2010</option>--}}
{{--                                            <option value="2009" >2009</option>--}}
{{--                                            <option value="2008" >2008</option>--}}
{{--                                            <option value="2007" >2007</option>--}}
{{--                                            <option value="2006" >2006</option>--}}
{{--                                            <option value="2005" >2005</option>--}}
{{--                                            <option value="2004" >2004</option>--}}
{{--                                            <option value="2003" >2003</option>--}}
{{--                                            <option value="2002" >2002</option>--}}
{{--                                            <option value="2001" >2001</option>--}}
{{--                                            <option value="2000" >2000</option>--}}
{{--                                            <option value="1999" >1999</option>--}}
{{--                                            <option value="1998" >1998</option>--}}
{{--                                            <option value="1997" >1997</option>--}}
{{--                                            <option value="1996" >1996</option>--}}
{{--                                            <option value="1995" >1995</option>--}}
{{--                                            <option value="1994" >1994</option>--}}
{{--                                            <option value="1993" >1993</option>--}}
{{--                                            <option value="1992" >1992</option>--}}
{{--                                            <option value="1991" >1991</option>--}}
{{--                                            <option value="1990" >1990</option>--}}
{{--                                            <option value="1989" >1989</option>--}}
{{--                                            <option value="1988" >1988</option>--}}
{{--                                            <option value="1987" >1987</option>--}}
{{--                                            <option value="1986" >1986</option>--}}
{{--                                            <option value="1985" >1985</option>--}}
{{--                                            <option value="1984" >1984</option>--}}
{{--                                            <option value="1983" >1983</option>--}}
{{--                                            <option value="1982" >1982</option>--}}
{{--                                            <option value="1981" >1981</option>--}}
{{--                                            <option value="1980" >1980</option>--}}
{{--                                            <option value="1979" >1979</option>--}}
{{--                                            <option value="1978" >1978</option>--}}
{{--                                            <option value="1977" >1977</option>--}}
{{--                                            <option value="1976" >1976</option>--}}
{{--                                            <option value="1975" >1975</option>--}}
{{--                                            <option value="1974" >1974</option>--}}
{{--                                            <option value="1973" >1973</option>--}}
{{--                                            <option value="1972" >1972</option>--}}
{{--                                            <option value="1971" >1971</option>--}}
{{--                                            <option value="1970" >1970</option>--}}
{{--                                        </select>--}}
{{--                                        and--}}
{{--                                        <select name="ugto" style="display:inline">--}}
{{--                                            <option value="">To</option>--}}
{{--                                            <option value="2025" >2025</option>--}}
{{--                                            <option value="2024" >2024</option>--}}
{{--                                            <option value="2023" >2023</option>--}}
{{--                                            <option value="2022" >2022</option>--}}
{{--                                            <option value="2021" >2021</option>--}}
{{--                                            <option value="2020" >2020</option>--}}
{{--                                            <option value="2019" >2019</option>--}}
{{--                                            <option value="2018" >2018</option>--}}
{{--                                            <option value="2017" >2017</option>--}}
{{--                                            <option value="2016" >2016</option>--}}
{{--                                            <option value="2015" >2015</option>--}}
{{--                                            <option value="2014" >2014</option>--}}
{{--                                            <option value="2013" >2013</option>--}}
{{--                                            <option value="2012" >2012</option>--}}
{{--                                            <option value="2011" >2011</option>--}}
{{--                                            <option value="2010" >2010</option>--}}
{{--                                            <option value="2009" >2009</option>--}}
{{--                                            <option value="2008" >2008</option>--}}
{{--                                            <option value="2007" >2007</option>--}}
{{--                                            <option value="2006" >2006</option>--}}
{{--                                            <option value="2005" >2005</option>--}}
{{--                                            <option value="2004" >2004</option>--}}
{{--                                            <option value="2003" >2003</option>--}}
{{--                                            <option value="2002" >2002</option>--}}
{{--                                            <option value="2001" >2001</option>--}}
{{--                                            <option value="2000" >2000</option>--}}
{{--                                            <option value="1999" >1999</option>--}}
{{--                                            <option value="1998" >1998</option>--}}
{{--                                            <option value="1997" >1997</option>--}}
{{--                                            <option value="1996" >1996</option>--}}
{{--                                            <option value="1995" >1995</option>--}}
{{--                                            <option value="1994" >1994</option>--}}
{{--                                            <option value="1993" >1993</option>--}}
{{--                                            <option value="1992" >1992</option>--}}
{{--                                            <option value="1991" >1991</option>--}}
{{--                                            <option value="1990" >1990</option>--}}
{{--                                            <option value="1989" >1989</option>--}}
{{--                                            <option value="1988" >1988</option>--}}
{{--                                            <option value="1987" >1987</option>--}}
{{--                                            <option value="1986" >1986</option>--}}
{{--                                            <option value="1985" >1985</option>--}}
{{--                                            <option value="1984" >1984</option>--}}
{{--                                            <option value="1983" >1983</option>--}}
{{--                                            <option value="1982" >1982</option>--}}
{{--                                            <option value="1981" >1981</option>--}}
{{--                                            <option value="1980" >1980</option>--}}
{{--                                            <option value="1979" >1979</option>--}}
{{--                                            <option value="1978" >1978</option>--}}
{{--                                            <option value="1977" >1977</option>--}}
{{--                                            <option value="1976" >1976</option>--}}
{{--                                            <option value="1975" >1975</option>--}}
{{--                                            <option value="1974" >1974</option>--}}
{{--                                            <option value="1973" >1973</option>--}}
{{--                                            <option value="1972" >1972</option>--}}
{{--                                            <option value="1971" >1971</option>--}}
{{--                                            <option value="1970" >1970</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div><!--form-group-->--}}
{{--                            </div>--}}
{{--                            <div class="col-md-8">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label  class="col-sm-4 pedit">PG Qualification :  </label>--}}
{{--                                    <div class="col-sm-8">--}}
{{--                                        <select name="post_grad" class="form-control">--}}
{{--                                            <option value="">Select</option>--}}
{{--                                            <option value="41"> M.A </option>--}}
{{--                                            <option value="42"> M.Arch </option>--}}
{{--                                            <option value="43"> MBA / PGDM / PGDBA </option>--}}
{{--                                            <option value="45"> MCA/PGDCA </option>--}}
{{--                                            <option value="46"> MCM </option>--}}
{{--                                            <option value="47"> M.Com </option>--}}
{{--                                            <option value="48"> M.D/Ms </option>--}}
{{--                                            <option value="49"> M.E/M Tech </option>--}}
{{--                                            <option value="52"> M.H.R.M </option>--}}
{{--                                            <option value="56"> M.P.Ed </option>--}}
{{--                                            <option value="57"> M.Pharm </option>--}}
{{--                                            <option value="58"> M.Phil </option>--}}
{{--                                            <option value="59"> M.S.W </option>--}}
{{--                                            <option value="60"> M.Sc </option>--}}
{{--                                            <option value="61"> M.T.M </option>--}}
{{--                                            <option value="64"> CA/ ICWA/ CS </option>--}}
{{--                                            <option value="65"> not mentioned </option>--}}
{{--                                            <option value="66"> Others </option>--}}
{{--                                            <option value="67"> M.C.S. </option>--}}
{{--                                        </select>--}}

{{--                                    </div>--}}
{{--                                    <div class="col-sm-1"><!--<i class="fa fa-jpy"></i>--></div>--}}

{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-md-8">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label  class="col-sm-4 pedit">Institute Name :</label>--}}
{{--                                    <div class="col-sm-8">--}}
{{--                                        <input name="pginstname" type="text" class="form-control"  />--}}
{{--                                    </div>--}}
{{--                                </div><!--form-group-->--}}
{{--                            </div>--}}
{{--                            <div class="col-md-8">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label  class="col-sm-4 pedit">Year of Passing :</label>--}}
{{--                                    <div class="col-sm-8">--}}
{{--                                        Between--}}
{{--                                        <select name="pgfrom" style="display:inline">--}}
{{--                                            <option value="">From</option>--}}
{{--                                            <option value="2020">2020</option>--}}
{{--                                            <option value="2019">2019</option>--}}
{{--                                            <option value="2018">2018</option>--}}
{{--                                            <option value="2017">2017</option>--}}
{{--                                            <option value="2016">2016</option>--}}
{{--                                            <option value="2015">2015</option>--}}
{{--                                            <option value="2014">2014</option>--}}
{{--                                            <option value="2013">2013</option>--}}
{{--                                            <option value="2012">2012</option>--}}
{{--                                            <option value="2011">2011</option>--}}
{{--                                            <option value="2010">2010</option>--}}
{{--                                            <option value="2009">2009</option>--}}
{{--                                            <option value="2008">2008</option>--}}
{{--                                            <option value="2007">2007</option>--}}
{{--                                            <option value="2006">2006</option>--}}
{{--                                            <option value="2005">2005</option>--}}
{{--                                            <option value="2004">2004</option>--}}
{{--                                            <option value="2003">2003</option>--}}
{{--                                            <option value="2002">2002</option>--}}
{{--                                            <option value="2001">2001</option>--}}
{{--                                            <option value="2000">2000</option>--}}
{{--                                            <option value="1999">1999</option>--}}
{{--                                            <option value="1998">1998</option>--}}
{{--                                            <option value="1997">1997</option>--}}
{{--                                            <option value="1996">1996</option>--}}
{{--                                            <option value="1995">1995</option>--}}
{{--                                            <option value="1994">1994</option>--}}
{{--                                            <option value="1993">1993</option>--}}
{{--                                            <option value="1992">1992</option>--}}
{{--                                            <option value="1991">1991</option>--}}
{{--                                            <option value="1990">1990</option>--}}
{{--                                            <option value="1989">1989</option>--}}
{{--                                            <option value="1988">1988</option>--}}
{{--                                            <option value="1987">1987</option>--}}
{{--                                            <option value="1986">1986</option>--}}
{{--                                            <option value="1985">1985</option>--}}
{{--                                            <option value="1984">1984</option>--}}
{{--                                            <option value="1983">1983</option>--}}
{{--                                            <option value="1982">1982</option>--}}
{{--                                            <option value="1981">1981</option>--}}
{{--                                            <option value="1980">1980</option>--}}
{{--                                            <option value="1979">1979</option>--}}
{{--                                            <option value="1978">1978</option>--}}
{{--                                            <option value="1977">1977</option>--}}
{{--                                            <option value="1976">1976</option>--}}
{{--                                            <option value="1975">1975</option>--}}
{{--                                            <option value="1974">1974</option>--}}
{{--                                            <option value="1973">1973</option>--}}
{{--                                            <option value="1972">1972</option>--}}
{{--                                            <option value="1971">1971</option>--}}
{{--                                            <option value="1970">1970</option>--}}
{{--                                        </select>--}}

{{--                                        and--}}
{{--                                        <select name="pgto" style="display:inline">--}}
{{--                                            <option value="">To</option>--}}
{{--                                            <option value="2025">2025</option>--}}
{{--                                            <option value="2024">2024</option>--}}
{{--                                            <option value="2023">2023</option>--}}
{{--                                            <option value="2022">2022</option>--}}
{{--                                            <option value="2021">2021</option>--}}
{{--                                            <option value="2020">2020</option>--}}
{{--                                            <option value="2019">2019</option>--}}
{{--                                            <option value="2018">2018</option>--}}
{{--                                            <option value="2017">2017</option>--}}
{{--                                            <option value="2016">2016</option>--}}
{{--                                            <option value="2015">2015</option>--}}
{{--                                            <option value="2014">2014</option>--}}
{{--                                            <option value="2013">2013</option>--}}
{{--                                            <option value="2012">2012</option>--}}
{{--                                            <option value="2011">2011</option>--}}
{{--                                            <option value="2010">2010</option>--}}
{{--                                            <option value="2009">2009</option>--}}
{{--                                            <option value="2008">2008</option>--}}
{{--                                            <option value="2007">2007</option>--}}
{{--                                            <option value="2006">2006</option>--}}
{{--                                            <option value="2005">2005</option>--}}
{{--                                            <option value="2004">2004</option>--}}
{{--                                            <option value="2003">2003</option>--}}
{{--                                            <option value="2002">2002</option>--}}
{{--                                            <option value="2001">2001</option>--}}
{{--                                            <option value="2000">2000</option>--}}
{{--                                            <option value="1999">1999</option>--}}
{{--                                            <option value="1998">1998</option>--}}
{{--                                            <option value="1997">1997</option>--}}
{{--                                            <option value="1996">1996</option>--}}
{{--                                            <option value="1995">1995</option>--}}
{{--                                            <option value="1994">1994</option>--}}
{{--                                            <option value="1993">1993</option>--}}
{{--                                            <option value="1992">1992</option>--}}
{{--                                            <option value="1991">1991</option>--}}
{{--                                            <option value="1990">1990</option>--}}
{{--                                            <option value="1989">1989</option>--}}
{{--                                            <option value="1988">1988</option>--}}
{{--                                            <option value="1987">1987</option>--}}
{{--                                            <option value="1986">1986</option>--}}
{{--                                            <option value="1985">1985</option>--}}
{{--                                            <option value="1984">1984</option>--}}
{{--                                            <option value="1983">1983</option>--}}
{{--                                            <option value="1982">1982</option>--}}
{{--                                            <option value="1981">1981</option>--}}
{{--                                            <option value="1980">1980</option>--}}
{{--                                            <option value="1979">1979</option>--}}
{{--                                            <option value="1978">1978</option>--}}
{{--                                            <option value="1977">1977</option>--}}
{{--                                            <option value="1976">1976</option>--}}
{{--                                            <option value="1975">1975</option>--}}
{{--                                            <option value="1974">1974</option>--}}
{{--                                            <option value="1973">1973</option>--}}
{{--                                            <option value="1972">1972</option>--}}
{{--                                            <option value="1971">1971</option>--}}
{{--                                            <option value="1970">1970</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div><!--form-group-->--}}
{{--                            </div>--}}


                        </div>
                        <div class="row" >
                            <div class="top-emp-center">
                                <h4>Affirmative Actions</h4>
                            </div><br />
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"></label>
                                    <div class="col-sm-8">
                                        <label class="checkbox-inline">

                                            <input type="checkbox" name="gender" value="female" style="display:inline" />&nbsp; Search Women Candidates only
                                        </label>
                                    </div>
                                </div><!--form-group-->
                            </div>
                        </div>
                        @section('hide')
                        <div class="row" >
                            <div class="top-emp-center">
                                <h4>Additional Filters</h4>
                            </div><br />
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit">Additional Filters</label>
                                    <div class="col-sm-8"> From <select name="minage" style="display:inline">
                                            <option value="">Min</option>
                                            <option value='18'>18</option>
                                            <option value='19'>19</option>
                                            <option value='20'>20</option>
                                            <option value='21'>21</option>
                                            <option value='22'>22</option>
                                            <option value='23'>23</option>
                                            <option value='24'>24</option>
                                            <option value='25'>25</option>
                                            <option value='26'>26</option>
                                            <option value='27'>27</option>
                                            <option value='28'>28</option>
                                            <option value='29'>29</option>
                                            <option value='30'>30</option>
                                            <option value='31'>31</option>
                                            <option value='32'>32</option>
                                            <option value='33'>33</option>
                                            <option value='34'>34</option>
                                            <option value='35'>35</option>
                                            <option value='36'>36</option>
                                            <option value='37'>37</option>
                                            <option value='38'>38</option>
                                            <option value='39'>39</option>
                                        </select>
                                        &nbsp; to  &nbsp;
                                        <select name="maxage" style="display:inline">
                                            <option value="">Max</option>
                                            <option value='18'>18</option>
                                            <option value='19'>19</option>
                                            <option value='20'>20</option>
                                            <option value='21'>21</option>
                                            <option value='22'>22</option>
                                            <option value='23'>23</option>
                                            <option value='24'>24</option>
                                            <option value='25'>25</option>
                                            <option value='26'>26</option>
                                            <option value='27'>27</option>
                                            <option value='28'>28</option>
                                            <option value='29'>29</option>
                                            <option value='30'>30</option>
                                            <option value='31'>31</option>
                                            <option value='32'>32</option>
                                            <option value='33'>33</option>
                                            <option value='34'>34</option>
                                            <option value='35'>35</option>
                                            <option value='36'>36</option>
                                            <option value='37'>37</option>
                                            <option value='38'>38</option>
                                            <option value='39'>39</option>
                                        </select>
                                    </div>
                                </div><!--form-group-->
                            </div>

                        </div>
                        @endsection
                        <div class="row" >
                            <div class="top-emp-center">
                                <h4>Display Options</h4>
                            </div><br />
                            @section('hide')
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit">Candidates Active in Last</label>
                                    <div class="col-sm-8">
                                        <select name="canactive" class="form-control">
                                            <option value="">Select</option>
                                            <option value="90">90 days</option>
                                            <option value="180">180 days</option>
                                            <option value="365">365 days</option>
                                        </select>
                                    </div>
                                </div><!--form-group-->
                            </div>
                            @endsection
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit">Show</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input name="show_all" type="radio" value="1" style="display:inline" /> All Candidates
                                        </label>
                                        <label class="radio-inline">
                                            <input name="show_new" type="radio" value="1" style="display:inline" /> New Registrations only
                                        </label>
                                    </div>
                                </div><!--form-group-->
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"></label>
                                    <div class="col-sm-8">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="onlypre" value="1" style="display:inline"/> Show only Premium Resumes
                                        </label>
                                    </div>
                                </div><!--form-group-->
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"></label>
                                    <div class="col-sm-8">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" value="1" name="vernum" style="display:inline"/> Candidates verified numbers only
                                        </label>
                                    </div>
                                </div><!--form-group-->
                            </div>
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-3"><input type="submit"  value="Search"  class="btn-blue btn" ></div>
                                    <div class="col-sm-3"><div class="btn-blue btn"><a href="{{ route('employer.featured_resumes') }}" style="color:#FFF"> Cancel </a></div></div>
                                </div> <!--col-md-6-->
                            </div>
                        </div>
                    </form>

                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
    <!--ADVANCED SEARCH POPUP-->

@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('/css/select2.css') }}">
@endsection

@section('js')

    <script src="{{ asset('/js/select2.full.js')}}" type="text/javascript"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('.select2').select2({});
            $(".country_select").on('select2:select', function (e) {
                let country = e.params.data.id;
                $.ajax({
                    url: '{{route('ajax.getstates')}}?country=' + country,
                    method: 'GET',
                    error: function () {
                    },
                    success: function (response) {
                        $(".states").empty();
                        $.each(response.states, function (index, value) {
                            $(".states").append(`<option value=${value.name}>${value.name}</option>`);
                        });
                    },
                    complete: function () {

                    }
                });
            });
        });
    </script>

    @endsection
