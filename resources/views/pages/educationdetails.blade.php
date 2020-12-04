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
                        <li><a href="{{ route('jobseeker.profile') }}">My Account</a></li>
                        <li class="active">Edit Details</li>
                    </ol>
                </div>
                <div class="col-md-3">


                    @include('layouts.partials.job-sidebar')

                </div><!--col-sm-2-->

                <div class="col-md-9" >
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <strong>Successful!</strong> {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="top-emp-center">
                        <h4>Edit Education Details</h4>
                    </div> <!--top-emp-center-->
                    <form class="form-horizontal m10" method="POST" action="{{ route('user.update.education') }}">
                        @csrf

                        <div class="row" >
                            <div class="col-sm-11" >


                                <div class="form-group">
                                    <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Basic/Graduation:</label>
                                    <div class="col-sm-8">
                                        <select required name="basic_education" id="basic_education" class="form-control">
                                            @foreach (\App\Models\EducationDetails::all() as $item)
                                                <option {{ auth()->user()->basic_education == $item->name ? 'selected' : '' }} value="{{ $item->name }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <span id="companyInfo"></span>
                                    </div>
                                </div><!--form-group-->


{{--                                <div class="form-group">--}}
{{--                                    <label class="col-sm-4 pedit2 text-right"><span class="red-star"></span></label>--}}
{{--                                    <div class="col-sm-8">--}}

{{--                                        <label class="radio-inline">--}}
{{--                                            <input type="radio" name="basicstatus" id="basicstatus1" value="1" />&nbsp;Full Time--}}
{{--                                        </label>--}}


{{--                                        <label class="radio-inline">--}}
{{--                                            <input type="radio" name="basicstatus" id="basicstatus2" value="2" />&nbsp;Part Time--}}
{{--                                        </label>--}}


{{--                                        <label class="radio-inline">--}}
{{--                                            <input type="radio" name="basicstatus" id="basicstatus3" value="3"--}}
{{--                                            />&nbsp;Correspondence/Distance Learning--}}
{{--                                        </label>--}}



{{--                                    </div>--}}


{{--                                </div><!--col-md-6-->--}}

                                <div class="form-group">
                                    <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Specialization:</label>

                                    <div class="col-sm-8">
                                        <select required name="industry" id="industry" class="form-control">
                                            @foreach ($industries as $key => $value)
                                                <option {{ auth()->user()->industry == $key ? 'selected' : '' }} value="{{ $key }}">{{ $key }}</option>
                                            @endforeach
                                        </select>

                                    </div><!--col-sm-6-->



                                    <div>
                                        <span id="durationInfo"></span>
                                    </div>
                                </div><!--form-group-->

{{--                                <div class="form-group">--}}
{{--                                    <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>University/Institute:</label>--}}
{{--                                    <div class="col-sm-8">--}}
{{--                                        <input type="text" name="university" id="university" class="form-control " placeholder="" value="{{ auth()->user()->university }}"/>--}}

{{--                                    </div>--}}
{{--                                    <div>--}}
{{--                                        <span id="desigInfo"></span>--}}
{{--                                    </div>--}}
{{--                                </div><!--form-group-->--}}
                                <div class="form-group">
                                    <label class="col-sm-4 pedit2 text-right">Program /Course of study:</label>
                                    <div class="col-sm-8">
                                        <input type="text"  name="course" id="program" class="form-control " placeholder="" value="{{ auth()->user()->course }}"/>

                                    </div>

                                </div><!--form-group-->

                                @section('hide')

                                <div class="form-group" id="notice1" >
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit2 text-right">Post/Graduation:</label>
                                        <div class="col-sm-8">
                                            <select name="postpg" id="postpg" class="form-control">
                                                <option value="">select</option>

                                                <option value='41' >M.A</option>

                                                <option value='42' >M.Arch</option>

                                                <option value='43' >MBA / PGDM / PGDBA</option>

                                                <option value='45' >MCA/PGDCA</option>

                                                <option value='46' >MCM</option>

                                                <option value='47' >M.Com</option>

                                                <option value='48' >M.D/Ms</option>

                                                <option value='49' >M.E/M Tech</option>

                                                <option value='52' >M.H.R.M</option>

                                                <option value='56' >M.P.Ed</option>

                                                <option value='57' >M.Pharm</option>

                                                <option value='58' >M.Phil</option>

                                                <option value='59' >M.S.W</option>

                                                <option value='60' >M.Sc</option>

                                                <option value='61' >M.T.M</option>

                                                <option value='64' >CA/ ICWA/ CS</option>

                                                <option value='65' >not mentioned</option>

                                                <option value='66' >Others</option>

                                                <option value='67' >M.C.S.</option>

                                            </select>

                                        </div>
                                        <div>
                                            <span id="companyInfo"></span>
                                        </div>
                                    </div><!--form-group-->

                                    <div class="form-group">
                                        <label class="col-sm-4 pedit2 text-right"><span class="red-star"></span></label>
                                        <div class="col-sm-8">

                                            <label class="radio-inline">
                                                <input type="radio" name="pgstatus" id="pgstatus1" value="1"  />&nbsp;Full Time
                                            </label>


                                            <label class="radio-inline">
                                                <input type="radio" name="pgstatus" id="pgstatus2" value="2" />&nbsp;Part Time
                                            </label>


                                            <label class="radio-inline">
                                                <input type="radio" name="pgstatus" id="pgstatus3" value="3" />&nbsp;Correspondence/Distance Learning
                                            </label>



                                        </div>


                                    </div><!--col-md-6-->

                                    <div class="form-group">
                                        <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Specialization:</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="pgspec" id="pgspec" class="form-control " placeholder="" value=""/>



                                        </div><!--col-sm-6-->



                                        <div>
                                            <span id="durationInfo"></span>
                                        </div>
                                    </div><!--form-group-->

                                    <div class="form-group">
                                        <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>University/Institute:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="pgcoll" id="pgcoll" class="form-control " placeholder="" value=""/>

                                        </div>
                                        <div>
                                            <span id="desigInfo"></span>
                                        </div>
                                    </div><!--form-group-->


                                    <div class="form-group">
                                        <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Year :</label>
                                        <div class="col-sm-8">
                                            <select name="pgyear" id="pgyear" class="form-control">
                                                <option value="">Year</option>
                                                <option value='1960' >1960</option>
                                                <option value='1961' >1961</option>
                                                <option value='1962' >1962</option>
                                                <option value='1963' >1963</option>
                                                <option value='1964' >1964</option>
                                                <option value='1965' >1965</option>
                                                <option value='1966' >1966</option>
                                                <option value='1967' >1967</option>
                                                <option value='1968' >1968</option>
                                                <option value='1969' >1969</option>
                                                <option value='1970' >1970</option>
                                                <option value='1971' >1971</option>
                                                <option value='1972' >1972</option>
                                                <option value='1973' >1973</option>
                                                <option value='1974' >1974</option>
                                                <option value='1975' >1975</option>
                                                <option value='1976' >1976</option>
                                                <option value='1977' >1977</option>
                                                <option value='1978' >1978</option>
                                                <option value='1979' >1979</option>
                                                <option value='1980' >1980</option>
                                                <option value='1981' >1981</option>
                                                <option value='1982' >1982</option>
                                                <option value='1983' >1983</option>
                                                <option value='1984' >1984</option>
                                                <option value='1985' >1985</option>
                                                <option value='1986' >1986</option>
                                                <option value='1987' >1987</option>
                                                <option value='1988' >1988</option>
                                                <option value='1989' >1989</option>
                                                <option value='1990' >1990</option>
                                                <option value='1991' >1991</option>
                                                <option value='1992' >1992</option>
                                                <option value='1993' >1993</option>
                                                <option value='1994' >1994</option>
                                                <option value='1995' >1995</option>
                                                <option value='1996' >1996</option>
                                                <option value='1997' >1997</option>
                                                <option value='1998' >1998</option>
                                                <option value='1999' >1999</option>
                                                <option value='2000' >2000</option>
                                                <option value='2001' >2001</option>
                                                <option value='2002' >2002</option>
                                                <option value='2003' >2003</option>
                                                <option value='2004' >2004</option>
                                                <option value='2005' >2005</option>
                                                <option value='2006' >2006</option>
                                                <option value='2007' >2007</option>
                                                <option value='2008' >2008</option>
                                                <option value='2009' >2009</option>
                                                <option value='2010' >2010</option>
                                                <option value='2011' >2011</option>
                                                <option value='2012' >2012</option>
                                                <option value='2013' >2013</option>
                                                <option value='2014' >2014</option>
                                                <option value='2015' >2015</option>
                                            </select>
                                        </div>
                                        <div>
                                            <span id="jobInfo"></span>
                                        </div>
                                    </div><!--form-group-->
                                    <div class="col-md-12">
                                        <div class="ali-left col-md-4 text-right"> <input name="butt2" id="butt2" class="btn-blue btn bc" value="Add Phd/Doctrate" type="button" OnClick="phdemp();"></div>
                                    </div>
                                </div>

                                <div class="form-group" id="phd"  style="display:none;" >
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit2 text-right">Doctorate/PhD:</label>
                                        <div class="col-sm-8">
                                            <select name="phdc" id="phdc" class="form-control">
                                                <option value="">select</option>

                                                <option value='1' >Ph.D/Doctorate</option>

                                                <option value='2' >MPHIL</option>

                                                <option value='3' >Other</option>

                                                <option value='4' >Not Pursuing Doctorate/Phd</option>

                                                <option value='5' >koss</option>

                                            </select>

                                        </div>
                                        <div>
                                            <span id="companyInfo"></span>
                                        </div>
                                    </div><!--form-group-->

                                    <div class="form-group">
                                        <label class="col-sm-4 pedit2 text-right"><span class="red-star"></span></label>
                                        <div class="col-sm-8">

                                            <label class="radio-inline">
                                                <input type="radio" name="phdstatus" id="phdstatus1" value="1" />&nbsp;Full Time
                                            </label>


                                            <label class="radio-inline">
                                                <input type="radio" name="phdstatus" id="phdstatus2" value="2" />&nbsp;Part Time
                                            </label>


                                            <label class="radio-inline">
                                                <input type="radio" name="phdstatus" id="phdstatus3" value="3" />&nbsp;Correspondence/Distance Learning
                                            </label>



                                        </div>


                                    </div><!--col-md-6-->

                                    <div class="form-group">
                                        <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Specialization:</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="phdspec" id="phdspec" class="form-control " placeholder="" value=""/>



                                        </div><!--col-sm-6-->



                                        <div>
                                            <span id="durationInfo"></span>
                                        </div>
                                    </div><!--form-group-->

                                    <div class="form-group">
                                        <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>University/Institute:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="phdcoll" id="phdcoll" class="form-control " placeholder="" value=""/>

                                        </div>
                                        <div>
                                            <span id="desigInfo"></span>
                                        </div>
                                    </div><!--form-group-->


                                    <div class="form-group">
                                        <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Year :</label>
                                        <div class="col-sm-8">
                                            <select name="phdyear" id="phdyear" class="form-control">
                                                <option value="">select</option>
                                                <option value='1960' >1960</option>
                                                <option value='1961' >1961</option>
                                                <option value='1962' >1962</option>
                                                <option value='1963' >1963</option>
                                                <option value='1964' >1964</option>
                                                <option value='1965' >1965</option>
                                                <option value='1966' >1966</option>
                                                <option value='1967' >1967</option>
                                                <option value='1968' >1968</option>
                                                <option value='1969' >1969</option>
                                                <option value='1970' >1970</option>
                                                <option value='1971' >1971</option>
                                                <option value='1972' >1972</option>
                                                <option value='1973' >1973</option>
                                                <option value='1974' >1974</option>
                                                <option value='1975' >1975</option>
                                                <option value='1976' >1976</option>
                                                <option value='1977' >1977</option>
                                                <option value='1978' >1978</option>
                                                <option value='1979' >1979</option>
                                                <option value='1980' >1980</option>
                                                <option value='1981' >1981</option>
                                                <option value='1982' >1982</option>
                                                <option value='1983' >1983</option>
                                                <option value='1984' >1984</option>
                                                <option value='1985' >1985</option>
                                                <option value='1986' >1986</option>
                                                <option value='1987' >1987</option>
                                                <option value='1988' >1988</option>
                                                <option value='1989' >1989</option>
                                                <option value='1990' >1990</option>
                                                <option value='1991' >1991</option>
                                                <option value='1992' >1992</option>
                                                <option value='1993' >1993</option>
                                                <option value='1994' >1994</option>
                                                <option value='1995' >1995</option>
                                                <option value='1996' >1996</option>
                                                <option value='1997' >1997</option>
                                                <option value='1998' >1998</option>
                                                <option value='1999' >1999</option>
                                                <option value='2000' >2000</option>
                                                <option value='2001' >2001</option>
                                                <option value='2002' >2002</option>
                                                <option value='2003' >2003</option>
                                                <option value='2004' >2004</option>
                                                <option value='2005' >2005</option>
                                                <option value='2006' >2006</option>
                                                <option value='2007' >2007</option>
                                                <option value='2008' >2008</option>
                                                <option value='2009' >2009</option>
                                                <option value='2010' >2010</option>
                                                <option value='2011' >2011</option>
                                                <option value='2012' >2012</option>
                                                <option value='2013' >2013</option>
                                                <option value='2014' >2014</option>
                                                <option value='2015' >2015</option>
                                            </select>
                                        </div>
                                        <div>
                                            <span id="jobInfo"></span>
                                        </div>
                                    </div><!--form-group-->
                                </div>
                                <div class="col-md-12">
                                    <div class="ali-left col-md-4 text-right"> <input name="butt3" id="butt3" class="btn-blue btn bc" value="Add Certificates obtained" type="button" OnClick="addcerti();"></div>
                                </div>


                                <div class="form-group" id="certificate"  style="display:none;" >
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit2 text-right">Certificate1:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="certi1" id="certi1" class="form-control " placeholder="" value=""/>
                                        </div>
                                        <div>
                                            <span id="companyInfo"></span>
                                        </div>
                                    </div><!--form-group-->
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit2 text-right">Certificate2:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="certi2" id="certi2" class="form-control " placeholder="" value=""/>
                                        </div>
                                        <div>
                                            <span id="companyInfo"></span>
                                        </div>
                                    </div><!--form-group-->
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit2 text-right">Certificate3:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="certi3" id="certi3" class="form-control " placeholder="" value=""/>
                                        </div>
                                        <div>
                                            <span id="companyInfo"></span>
                                        </div>
                                    </div><!--form-group-->
                                </div>

                                @stop

                            </div><!--col-md-6-->

                            <div class="col-sm-12 m20">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-3 text-right"><input type="submit" class="btn-blue btn bc" value="Save"></div>
{{--                                <div class="col-sm-3 "><div class="btn-blue btn bc"><a href="" style="color:#FFF"> Cancel </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                            </div><!--col-md-12-->
                        </div>
                    </form>
                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
    <!--ADVANCED SEARCH POPUP-->

@endsection

@section('js')
    <script type="text/javascript">
        function phdemp()
        {
            //if(document.getElementById("emptype1").checked==true)
            //{

            document.getElementById('phd').style.display='block';
            document.getElementById('butt2').style.display='none';

            //}
            //else if(document.getElementById("emptype1").checked==false)
            //{

            //	document.getElementById('notice1').style.display='none';

            //}

        }
        function addcerti()
        {
            //if(document.getElementById("emptype1").checked==true)
            //{

            document.getElementById('certificate').style.display='block';
            document.getElementById('butt3').style.display='none';

            //}
            //else if(document.getElementById("emptype1").checked==false)
            //{

            //	document.getElementById('notice1').style.display='none';

            //}

        }
    </script>
@endsection
