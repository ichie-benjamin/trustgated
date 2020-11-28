@extends('layouts.master')

@section('content')

    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">My Account</a></li>
                        <li class="active">Edit Details</li>
                    </ol>
                </div>
                <div class="col-md-3">


                    @include('layouts.partials.job-sidebar')
                    <!--create-job-->


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
                        <h4>Edit Details</h4>
                    </div> <!--top-emp-center-->
                    <form action="{{ route('user.account.update') }}" id="register" method="post" class="form-horizontal m10">
                        @csrf

                        <div class="row" >
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>First Name:</label>
                                    <div class="col-sm-8">
                                        <input type="text" required class="form-control" name="first_name" id="name" placeholder="First name" value="{{ $user->first_name }}" >
                                        <span id="nameInfo"></span>
                                    </div>
                                </div><!--col-md-6-->

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>First Name:</label>
                                    <div class="col-sm-8">
                                        <input type="text" required class="form-control" name="last_name" id="name" placeholder="last name" value="{{ $user->last_name }}" >
                                        <span id="nameInfo"></span>
                                    </div>
                                </div><!--col-md-6-->

                            </div>
                            <div class="col-md-6" >
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>Username:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Username" value="{{ $user->username }}" readonly>
                                        <span id="usernameInfo"></span>
                                    </div>

                                </div>

                            </div><!--col-md-6-->
                            <div class="col-md-12" >
                                <div class="form-group">
                                    <label class="col-sm-2 pedit"><span class="red-star">*</span>Resume Headline:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" required name="headline" id="res_title"rows="3">{{ $user->headline }}</textarea>
                                        <div class="text-right inboxa "><small >Your Resume Headline is the first thing Recruiters will see.</small></div>
                                        <span id="resumeInfo"></span>
                                    </div>
                                </div>
                            </div><!--col-md-12-->

                            <div class="col-md-6" >

                                <div id='divcountry'>
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit"><span class="red-star">*</span>Country:</label>
                                        <div class="col-sm-8">
                                            <select  name="country" class="form-control country_select select2"  required id="country">
                                                <option value="">Select Country</option>
                                                @foreach(\App\Models\Country::all() as $item)
                                                <option @if ($user->country == $item->name) selected @endif value="{{ $item->name }}" > {{ $item->name }} </option>
                                                @endforeach
                                            </select>
                                            <span id="countryinfo"></span>
                                        </div>
                                    </div>
                                </div>

                                <div id='divstate'>
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit"><span class="red-star">*</span>State:</label>
                                        <div class="col-sm-8" id='emp_state'>
                                            <select required class="form-control  select2 states" name="state" id="state">

                                                @if ($user->state)
                                                    <option name="state" value="{{ $user->state }}">{{ $user->state }}</option>
                                                @else
                                                    <option>Select Country first</option>
                                                @endif
                                            </select>
                                            <span id="stateInfo"></span>
                                        </div>
                                    </div>
                                </div>


                                <div id='divcity'>
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit"><span class="red-star">*</span>City:</label>
                                        <div class="col-sm-8">
                                            <input type="text"  name="city" class="form-control" placeholder="City" value="{{ $user->city }}">
                                            <span id="cityInfo"></span>
                                        </div>
                                    </div>
                                </div>




                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>Industry:</label>
                                    <div class="col-sm-8">
                                        <select required class="form-control" name="industry" id="industry">
                                                <option value="">Select Industry</option>
                                                @foreach(\App\Models\IndustryType::all() as $item)
                                                    <option @if ($user->industry == $item->category) selected @endif value="{{ $item->category }}" > {{ $item->category }} </option>
                                                @endforeach
                                        </select>


                                        <span id="industryInfo"></span>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group">
                                    <label class="col-sm-4 pedit"><span class="red-star">*</span>Functional Area:</label>
                                    <div class="col-sm-8">

                                        <select required class="form-control" name="function_area" id="function_area">
                                            <option value="">Select Fuctional Area</option>
                                            @foreach(\App\Models\FunctionalArea::all() as $item)
                                                <option @if ($user->function_area == $item->category_functional_area) selected @endif value="{{ $item->category_functional_area }}" > {{ $item->category_functional_area }} </option>
                                            @endforeach
                                        </select>
                                        <span id="functionalInfo"></span>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>Date of birth:</label>

                                    <div class="col-sm-8">
                                       <input name="dob" type="date" value="{{ $user->dob }}">

                                    </div>
                                    <div>
                                        <span id="dobInfo"></span>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group">
                                    <label class="col-sm-4 pedit"><span class="red-star">*</span> Gender:</label>
                                    <div class="col-sm-8">
                                        <select name="gender" id="gender" class="form-control">
                                            <option @if ($user->gender == "males") selected @endif value="male" >Male</option>
                                            <option @if ($user->gender == "female") selected @endif value="female" >Female</option>
                                        </select>
                                        <span id="genderInfo"></span>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group">
                                    <label class="col-sm-4 pedit"><span class="red-star">*</span>Key Skills:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control"  name="skills" id="keyskills" placeholder="Photoshop,Flash," value="{{ $user->skills }}">
                                        <span id="keyInfo"></span>
                                    </div>
                                </div><!--form-group-->

                            </div><!--col-md-6-->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-sm-4 pedit"><span class="red-star">*</span>Total Experience: </label>
                                    <div class="col-sm-4 padno">
                                        <div class="col-sm-12">
                                            <select name="exp_year" id="year" class="form-control">
                                                <option value="">Years</option>
                                                <option value="0" selected="">0Years</option>
                                                <option value="1">1Years</option>
                                                <option value="2">2Years</option>
                                                <option value="3">3Years</option>
                                                <option value="4">4Years</option>
                                                <option value="5">5Years</option>
                                                <option value="6">6Years</option>
                                                <option value="7">7Years</option>
                                                <option value="8">8Years</option>
                                                <option value="9">9Years</option>
                                                <option value="10">10Years</option>
                                                <option value="11">11Years</option>
                                                <option value="12">12Years</option>
                                                <option value="13">13Years</option>
                                                <option value="14">14Years</option>
                                                <option value="15">15Years</option>
                                                <option value="16">16Years</option>
                                                <option value="17">17Years</option>
                                                <option value="18">18Years</option>
                                                <option value="19">19Years</option>
                                                <option value="20">20Years</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-sm-4 padno">
                                        <div class="col-sm-12">
                                            <select name="exp_month" id="month" class="form-control">
                                                <option value="">Months</option>
                                                <option value='0' selected>0Months</option>
                                                <option value='1' >1Months</option>
                                                <option value='2' >2Months</option>
                                                <option value='3' >3Months</option>
                                                <option value='4' >4Months</option>
                                                <option value='5' >5Months</option>
                                                <option value='6' >6Months</option>
                                                <option value='7' >7Months</option>
                                                <option value='8' >8Months</option>
                                                <option value='9' >9Months</option>
                                                <option value='10' >10Months</option>
                                                <option value='11' >11Months</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div style="padding-left:160px">
                                        <span id="expInfo"></span>
                                    </div>
                                </div><!--form-group-->

                                                            <div class="form-group">
                                    <label class="col-sm-4 pedit"><span class="red-star">*</span>Annual Salary:</label>

                                    <div class="col-sm-4 padno">
                                        <div class="col-sm-12">
                                            <input type="number" class="form-control"  name="min_annual_salary" value="{{ $user->min_annual_salary }}">
                                        </div>


                                    </div><!--col-sm-6-->
                                    <div class="col-sm-4 padno">
                                        <div class="col-sm-12">
                                            <input type="number" class="form-control"  name="max_annual_salary" value="{{ $user->max_annual_salary }}">
                                        </div>


                                    </div>
                                    <div style="padding-left:160px">
                                        <span id="salInfo"></span>
                                    </div>

                                </div><!--form-group-->

                                <div class="form-group">
                                    <label class="col-sm-4 pedit"><span class="red-star">*</span>Mobile:</label>
                                    <div class="col-sm-8">
                                        <input required type="text" name="mobile_number" id="mobile_number" class="form-control" placeholder="0000000000"  value="{{ $user->mobile_number }}">
                                        <span id="mobileInfo"></span>
                                    </div>
                                </div><!--form-group-->
                                <div class="form-group">
                                    <label class="col-sm-4 pedit">Landline:</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="land_countrycode" id="land_countrycode" class="form-control"  placeholder="+91" value="{{ $user->land_countrycode }}">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" name="land_areacode" id="land_areacode"  placeholder="044" value="{{ $user->land_areacode }}">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="landline_number" id="landline_number" placeholder="123456" value="{{ $user->landline_number }}">
                                    </div>
                                    <span id="landInfo"></span>
                                </div><!--form-group-->
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>Email:</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" disabled id="email" value="{{ $user->email }}">
                                        <span id="emailInfo"></span>
                                    </div>
                                </div><!--form-group-->
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>Permanent Address:</label>
                                    <div class="col-sm-8">
                                        <textarea required class="form-control" name="address" id="address" rows="4" >{{ $user->address }}</textarea>
                                        <span id="addressInfo"></span>
                                    </div>
                                </div><!--form-group-->

                            </div><!--col-md-6-->
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-3"><input class="btn-blue btn" value="Save" type="submit" id="submit"></div>
                                    <div class="col-sm-3"><div class="btn-blue btn"><a href="{{ route('jobseeker.profile') }}" style="color:#FFF"> Cancel </a></div></div>
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
