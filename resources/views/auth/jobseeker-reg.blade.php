@extends('layouts.master')

@section('content')
    <div id="content">
        <div class="container">



            <ol  class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Jobseeker Registration</li>
                <li><a href="{{ route('employer.register') }}"> Employer Registration</a></li>
            </ol>

            <div class="row">
                <div class="col-sm-9" >

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <div class="well34 well-sm">
                        <div class="row">
                            <div class="col-md-12 weltop padno">Become a Member of {{ setting('site_name') }} and find the right job. Create your Profile now.</div>

                        </div>
                    </div>
                    <div class="top-emp-center p5">
                        <h4>Jobseeker Registration</h4>
                    </div>
                    <div class="col-sm-12">

                        <div class="click-here">
                            <span class="click-here"><span class="mandatory">*</span> Mandatory Fields </span>
                        </div>
                    </div>
                    <form id="register" name="register" class="form-horizontal m10" action="{{ route('register') }}" method="post" enctype="multipart/form-data">


                        @csrf
<input name="pincode" type="hidden">

                        <input type="hidden" name="skill_i_hire">


                        <div class="col-md-12">
                            <label class="namecover m10">Create Login Details</label>


                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Username: </label>
                                <div class="col-sm-5">
                                    <input type="text" name="username" id="username" onBlur="this.value=trim(this.value); return username_val(this.value);" onKeyPress="return rmv_space(this.event);" class="form-control" >

                                </div>
                                <div>
                                    <span id="usernameInfo"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Enter your Email ID: </label>
                                <div class="col-sm-5">
                                    <input type="text" name="email" id="email" onBlur="this.value=trim(this.value); return email_val(this.value);" class="form-control" >
                                    <small class="pedit">Register using your current email address.</small>
                                </div>
                                <div><span id="emailInfo"></span></div>
                            </div><!--form-group-->
                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Create a Password for your account: </label>
                                <div class="col-sm-5">
                                    <input type="password" name="password" id="password" onKeyUp="checkPasswordStrength();" class="form-control" >
                                </div>
                                <div>
                                    <span id="passwordInfo"></span>
                                    <span id="password-strength-status" style="color:#FF0000;  font-size:10px; font-style:italic"></span>
                                </div>
                            </div><!--form-group-->
                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Confirm the Password: </label>
                                <div class="col-sm-5">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                </div>
                                <div>
                                    <span id="cpasswordInfo"></span>
                                </div>
                            </div><!--form-group-->
                            <div class="form-group">
                                <label class="col-sm-4 text-right"><span class="red-star">*</span>Gender : </label>
                                <div class="col-sm-5">
                                    <label class="radio-inline pedit4">
                                        <input type="radio" value="male" checked="checked" id="c1" onClick="" name="gender"  >Male
                                    </label>
                                    <input value="jobseeker" name="role" type="hidden" />
                                    <label class="radio-inline pedit4">
                                        <input type="radio" name="gender" value="female" id="c2" onClick=""> Female
                                    </label>
                                </div>
                                <div id="typeLabel" class="floaterror"></div>
                            </div>

                            <label class="namecover m10">Your Contact Information</label>

                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>First Name: </label>
                                <div class="col-sm-5">
                                    <input type="text" name="first_name" id="first_name" class="form-control" >
                                </div>
                                <div>
                                    <span id="firstnameInfo"></span>
                                </div>
                            </div><!--form-group-->
                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Last Name: </label>
                                <div class="col-sm-5">
                                    <input type="text" name="last_name" id="last_name" class="form-control" >
                                </div>
                                <div>
                                    <span id="lastnameInfo"></span>
                                </div>
                            </div><!--form-group-->


                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Country: </label>
                                <div class="col-sm-5">
                                    <select name="country" class="form-control country_select select2" data-size="7" title="Select country Type">
                                        <option>Select Country</option>
                                        @foreach(\App\Models\Country::pluck('name') as $item)
                                            <option  value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div>
                                    <span id="countryInfo"></span>
                                </div>
                            </div><!--form-group-->


                            <div class="form-group" id="statee">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>State: </label>
                                <div class="col-sm-5">
                                    <select style="width: 100%" class="form-control select2 states" required name="state">

                                        <option>Select Country first</option>

                                    </select>

                                </div>
                                <div>
                                    <span id="stateInfo"></span>
                                </div>
                            </div><!--form-group-->

                            <div class="form-group" id="cityy">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>City: </label>
                                <div class="col-sm-5">
                                    <input required type="text" name="city" id="city" class="form-control" placeholder="">

                                </div>
                                <div>
                                    <span id="cityInfo"></span>
                                </div>
                            </div><!--form-group-->


                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right"> <span class="red-star">*</span> Enter your Mobile number:</label>
                                <div class="col-sm-5">
                                    <div class="row">
                                        <div class="col-sm-3">

                                            <input type="text" name="phone_countrycode" id="phone_countrycode" class="form-control" placeholder="+91">
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="mobile_number" id="mobile_number"  maxlength="15"  class="form-control">

                                        </div>
                                        <div class="col-sm-12">
                                            <small class="pedit">If you do not have a mobile, enter <span class="regi"><a href="javascript:;" id="landlink" onClick="landlink()">Landline no</a></span>.</small>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <span id="mobileInfo" style="color:#FF0000"></span>
                                </div>
                            </div><!--form-group-->

                            <div class="form-group" id="land" style="display:none;">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Landline:</label>
                                <div class="col-sm-1">

                                    <input type="text" name="land_countrycode" id="land_countrycode" class="form-control" onKeyPress="return checkIt(event);" placeholder="+91">
                                </div>
                                <div class="col-sm-1">
                                    <input type="text" name="land_areacode" id="land_areacode"class="form-control"  onKeyPress="return checkIt(event);"placeholder="044">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="landline_number" id="landline_number" class="form-control" onKeyPress="return checkIt(event);" placeholder="123456">
                                </div>
                            </div><!--form-group-->

                            <label class="namecover m10">Your Current Employment Details</label>
                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right">Select the work experience?: </label>

                                <div class="col-sm-3 padno">
                                    <div class="col-sm-8">
                                        <select name="exp_year" id="year" class="form-control">
                                            <option value="">select</option>
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
                                        </select>
                                    </div>
                                    <label>Years </label>
                                </div><!--col-sm-6-->
                                <div class="col-sm-3 padno">
                                    <div class="col-sm-8">
                                        <select name="exp_month" id="month" class="form-control">
                                            <option value="">select</option>
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
                                        </select>
                                    </div>
                                    <label>Months </label>
                                </div>
                                <div>
                                    <span id="expInfo"></span>
                                </div>
                            </div><!--form-group-->


                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right">Designation :</label>
                                <div class="col-sm-5">
                                    <select name="function_area" id="function_area" class="form-control">
                                        <option value="">select</option>
                                        @foreach($f_areas as $item => $value)
                                            <option value="{{ $item }}"> {{ $item }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <span id="desigInfo"></span>
                                </div>
                            </div><!--form-group-->

                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right">What are your Key Skills?:</label>
                                <div class="col-sm-5">
                                    <input type="text" name="keyskills" id="keyskills" class="form-control " placeholder=" Enter your areas of expertise/specialization." >
                                </div>
                                <div>
                                    <span id="keyInfo"></span>
                                </div>
                            </div><!--form-group-->

                            <label class="namecover m10">Your Education Background</label>

                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Select Your Basic Eduction :</label>
                                <div class="col-sm-5">
                                    <select name="basic_education" id="basic_education" class="form-control">
                                        <option value="">Select</option>
                                        @foreach(\App\Models\EducationDetails::pluck('name') as $item)
                                            <option value="{{ $item }}"> {{ $item }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <span id="basicInfo"></span>
                                </div>
                            </div><!--form-group-->

                            <div class="form-group">
                                <div class="col-sm-4 text-right">
                                    <!--<button type="button " class="btn5 btn-d "> &nbsp;  &nbsp;  &nbsp;  &nbsp;Add Doctorate/Phd Education</button>-->
                                    <a href="javascript:;" onClick="pg_edu()" id="mas" class="btn5 btn-d btn-newreg">&nbsp;  &nbsp;  &nbsp;  &nbsp;Add Masters Education</a>
                                </div>
                                <div class="col-sm-5">
                                </div>
                            </div><!--form-group-->

                            <!--  <div class="form-group">
                              <label class="col-sm-4 pedit2 text-right">Please Select Your Masters Eduction :</label>
                              <div class="col-sm-5">
                                <select class="form-control" name="post_grad" id="post_grad">
                                  <option value="">Select</option>
                                  <option>MA	</option>
                                  <option>M.sc</option>
                                </select>
                              </div>
                              <div>
                                <span id="postInfo"></span>
                              </div>
                             </div><!--form-group-->

                            <div id="pged" class="form-group" style="display:none;">

                                <label class="col-sm-4 pedit2 text-right">Select Your Masters Eduction :</label>

                                <input type="hidden" name="hidnot_pggrad1" id="hidnot_pggrad1" value="">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="col-sm-5">
                                    <select name="po_grad" id="po_grad" class="form-control" onChange="pgedsp(this.value)">
                                        <option value="0">Select</option>
                                        <option value="">Not Pursuing Post Graduation</option>
                                        <option value="41">
                                            M.A			</option>
                                        <option value="42">
                                            M.Arch			</option>
                                        <option value="43">
                                            MBA / PGDM / PGDBA			</option>
                                        <option value="45">
                                            MCA/PGDCA			</option>
                                        <option value="46">
                                            MCM			</option>
                                        <option value="47">
                                            M.Com			</option>
                                        <option value="48">
                                            M.D/Ms			</option>
                                        <option value="49">
                                            M.E/M Tech			</option>
                                        <option value="52">
                                            M.H.R.M			</option>
                                        <option value="56">
                                            M.P.Ed			</option>
                                        <option value="57">
                                            M.Pharm			</option>
                                        <option value="58">
                                            M.Phil			</option>
                                        <option value="59">
                                            M.S.W			</option>
                                        <option value="60">
                                            M.Sc			</option>
                                        <option value="61">
                                            M.T.M			</option>
                                        <option value="64">
                                            CA/ ICWA/ CS			</option>
                                        <option value="65">
                                            not mentioned			</option>
                                        <option value="66">
                                            Others			</option>
                                        <option value="67">
                                            M.C.S.			</option>
                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-sm-4 text-right">
                                    <!--<button type="button " class="btn5 btn-d "> &nbsp;  &nbsp;  &nbsp;  &nbsp;Add Doctorate/Phd Education</button>-->
                                    <a href="javascript:;" onClick="phd_edu()" id="phd" class="btn5 btn-d" style="display:none;">&nbsp;  &nbsp;  &nbsp;  &nbsp;Add Doctorate/Phd Education</a>
                                </div>
                                <div class="col-sm-5">
                                </div>
                            </div><!--form-group-->

                            <div id="phed" class="form-group" style="display:none;">

                                <label class="col-sm-4 pedit2 text-right">Select Your Doctorate/Phd:</label>

                                <input type="hidden" name="hidnot_postpggrad" id="hidnot_postpggrad" value="4">
                                <div class="col-sm-5">
                                    <select name="doctorate" class="form-control" onChange="doctspec(this.value)">
                                        <option value="0">Select</option>
                                        <option value="Not Pursuing Doctorate/Phd">Not Pursuing Doctorate/Phd</option>
                                        <option value="Ph.D/Doctorate"> Ph.D/Doctorate </option>
                                        <option value="MPHIL"> MPHIL </option>
                                        <option value=" Other"> Other </option>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group" id="coursename" style="display:none;">
                                <label class="col-sm-4 pedit2 text-right">Enter the certificate course name :</label>
                                <div class="col-sm-5">
                                    <input type="text"  name="course" id="course" class="form-control "  >
                                </div>
                            </div><!--form-group-->
                            <div class="form-group" id="coursename2" style="display:none;">
                                <label class="col-sm-4 pedit2 text-right">Enter the certificate course name :</label>
                                <div class="col-sm-5">
                                    <input type="text"  name="course2" id="course2"class="form-control "  >
                                </div>
                            </div><!--form-group-->
                            <div class="form-group" id="coursename3" style="display:none;">
                                <label class="col-sm-4 pedit2 text-right">Enter the certificate course name :</label>
                                <div class="col-sm-5">
                                    <input type="text"  name="course3" id="course3" class="form-control "  >
                                </div>
                            </div><!--form-group-->

                            <div class="form-group">
                                <div class="col-sm-4 text-right">
                                    <!--<button type="button " class="btn5 btn-d "> &nbsp;  &nbsp;  &nbsp;  &nbsp; You can add Certification Courses</button>-->
                                    <a href="javascript:;" onClick="cou_edu()" id="cour" class="btn5 btn-d btn-newreg">&nbsp;  &nbsp;  &nbsp;  &nbsp;You can add Certification Courses</a>
                                    <a href="javascript:;" onClick="cou2_edu()" id="cour2" class="btn5 btn-d" style="display:none;">&nbsp;  &nbsp;  &nbsp;  &nbsp;You can add Certification Courses</a>
                                    <a href="javascript:;" onClick="cou3_edu()" id="cour3" class="btn5 btn-d" style="display:none;">&nbsp;  &nbsp;  &nbsp;  &nbsp;You can add Certification Courses</a>
                                </div>
                                <div class="col-sm-5">
                                </div>
                            </div><!--form-group-->
                            <label class="namecover m10">Upload your detailed resume</label>
                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right">Upload your Resume Document : </label>
                                <div class="col-sm-5">
                                    <input type="file" name="fupload" id="fupload" onBlur="this.value=trim(this.value);" onChange="return file_upload(this);">
                                    <small class="pedit3">Supported Formats: doc, docx, rtf, pdf. Max file size: 1 Mb</small>
                                    <small class="regi" id="hid"><a href="javascript:;" onClick="resum()">You may also write or copy-paste your resume here..</a><b>If you do not have your resume presently, you may still continue to create your account.</b>
                                    </small>
                                    <textarea name="textresume" id="textresume" class="form-control adm" rows="5" style="display:none;" placeholder="You can Copy-Paste your resume here (Max 10000 characters). However, recruiters cannot download it. They can only download your jobs profile or your Uploaded Resume. So ensure both of them are updated too."></textarea>
                                    <small class="pedit3" id="resum" style="display:none;">Remember to upload your resume as soon as possible after creating your
                                        account. It will make your profile more effective. <b>If you do not have your resume presently, you may still continue to create your account.</b></small>
                                </div>
                                <div>
                                    <span id="resumeInfo"></span>
                                </div>
                            </div><!--form-group-->
                            <label class="namecover m10">Mailer and Privacy Settings</label>


                            <div class="form-group">

                                <div class="col-sm-6 line5">
                                    <div class="checkbox"> <label class="pedit2"> <input type="checkbox" checked> Job Alerts</label> </div>
                                    <div class="checkbox"> <label class="pedit2"> <input type="checkbox" checked> Jobs FastForward E-Mails </label> </div>
                                    <div class="checkbox"> <label class="pedit2"> <input type="checkbox" checked> Jobs FastForward Calls/SMS </label> </div>
                                </div>

                                <div class="col-sm-6 line5">
                                    <div class="checkbox"> <label class="pedit2"> <input type="checkbox" checked> Important Notifications from Jobs.com</label> </div>
                                    <div class="checkbox"> <label class="pedit2"> <input type="checkbox" checked> Communication from Clients(Voice/Calls/SMS)</label> </div>
                                    <div class="checkbox"> <label class="pedit2"> <input type="checkbox" checked> Other Promotions/ Special Offers </label> </div>
                                </div>
                            </div><!--form-group-->

                            <div class="form-group">
                                <label  class="col-sm-3  control-label efs"></label>
                                <div class="col-sm-9">
                                    {!! app('captcha')->display() !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="checkbox"> <label class="pedit2"> <input type="checkbox" name="terms" id="terms"> <small> I have read and understood and agree to the <span class="regi"><a href="terms.php" target="_blank">Terms and Conditions</a></span> governing the use of Jobs.com.</small></label> </div>
                                <div>
                                    <span id="termInfo"></span>
                                </div>
                            </div><!--form-group-->
                            <div class="form-group text-center">
                                <input type="hidden" name="frmsubval" id="frmsubval" value="">
                                <input name="sub" id="sub" class="btn-blue btn bc submit " onclick="return validateForm();" value="Join {{ env('APP_NAME') }}" type="button">
                            </div><!--form-group-->


                        </div><!--col-sm-12-->
                    </form>



                </div><!--col-sm-9-->

                <div class="col-sm-3" >

                    <div class="create-job">
                        <div class="create-job-head text-center padno">
                            <h3 class="line5">Why become a member of {{ env('APP_URL') }}?</h3>
                        </div>
                        <div class="post-job-content">
                            Jobs helps passive and active jobseekers find better jobs.
                            <div class="folist">
                                <ul>
                                    <li class="lileft">Get connected with over 45000 recruiters.</li>
                                    <li class="lileft">Apply to jobs in just one click.</li>
                                    <li class="lileft">Apply to thousands of jobs posted daily.</li>
                                    <li class="lileft">Get relevant jobs on your mobile, and online.</li>
                                    <li class="lileft">Create multiple job alerts to target the kind of jobs you want.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="create-job">
                        <div class="create-job-head text-center rep5r">
                            <h3 class="line5">Your Privacy & Confidentiality</h3>
                        </div>
                        <div class="post-job-content">
                            After you register, you can
                            <div class="folist">
                                <ul>
                                    <li class="lileft">Block your company or other specific companies from viewing your profile.</li>
                                    <li class="lileft">Apply to jobs from the site while keeping your resume hidden from all recruiters.</li>
                                    <li class="lileft">Apply to jobs from the site while keeping your resume hidden from all recruiters.</li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div><!--col-sm-3-->

            </div><!--row-->
        </div><!-- container -->

    </div>
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



    <script type="text/javascript">
        function validateForm(){
            var nameReg = /^[A-Za-z]+$/;
            var numberReg =  /^[0-9]+$/;
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var letterNumber =  /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d][A-Za-z\d!@#$%^&*()_+]{6,19}$/;
            var username = $('#username').val();
            var email = $('#email').val();
            var pass= $('#password').val();
            var cpass= $('#password_confirmation').val();
            var firstname = $('#first_name').val();
            var lastname = $('#last_name').val();

            var select_country = $('#select_country').val();
            var state = $('#state').val();
            var city = $('#city').val();
            var mobile_number = $('#mobile_number').val();
            // var year = $('#year').val();
            // var month = $('#month').val();
            //var designation = $('#function_area').val();
            //var keyskills = $('#keyskills').val();
            var basic_education = $('#basic_education').val();
            var post_grad = $('#post_grad').val();
            var terms= $('#terms');

            var inputMessage = new Array("Username","Email Address","Password","Confirm password", "Your First Name",'Your Last Name',"Current Location","City","Mobile Number","Work Experience","Designation","Key Skills","Basic Education","Agree To Terms And Conditions");

            $('.error').hide();
            var clr=0;

            if(username == ""){

                $('#usernameInfo').html('<span class="error">Username is Required</span>');
                $('#username').focus();
                clr=1;
            }
            if(email == ""){
                $('#emailInfo').html('<span class="error">Specify your email ID.</span>');
                //$('#email').focus();
                clr=1;
            }
            else if(!emailReg.test(email)){
                $('#emailInfo').html('<span class="error"> Enter a valid email Id</span>');
                //$('#email').focus();clr=1;
            }
            if(pass == ""){
                $('#passwordInfo').html('<span class="error">Specify a password.</span>');
                $('#password').focus();clr=1;
            }
            if(cpass == ""){
                $('#cpasswordInfo').html('<span class="error">Specify confirm password.</span>')
                $('#password_confirmation').focus();clr=1;
            }
            if(pass != cpass){
                $('#cpasswordInfo').html('<span class="error">Your passwords entries do not match.</span>');
                $('#password_confirmation').focus();clr=1;
            }
            if(lastname == ""){

                $('#yournameInfo').html('<span class="error">Specify you name.</span>');
                $('#yourname').focus();
                clr=1;
            }

            if(firstname == ""){

                $('#firstnameInfo').html('<span class="error">Specify your first name.</span>');
                $('#first_name').focus();
                clr=1;
            }

            if(lastname == ""){

                $('#lastnameInfo').html('<span class="error">Specify your last name.</span>');
                $('#last_name').focus();
                clr=1;
            }

            if(select_country == ""){

                $('#countryInfo').html('<span class="error"> Select your country.</span>');
                $('#select_country').focus();
                clr=1;
            }
            if(state == ""){

                $('#stateInfo').html('<span class="error"> Select your state.</span>');
                $('#state').focus();
                clr=1;
            }
            if(city == ""){

                $('#cityInfo').html('<span class="error">Select your current city.</span>');
                $('#city').focus(); clr=1;
            }
            /* else if(!nameReg.test(lnames)){
                 $('#lnameLabel').html('<span class="error"> Letters only</span>');
                 clr=1;
             }*/


            if(mobile_number == ""){
                //alert("success");
                // alert(mobile_number.length);
                $('#mobileInfo').html('<span class="error">Specify your mobile number.</span>');
                $('#mobile_number').focus();clr=1;
            }

            /* if(year == ""){
                $('#expInfo').html('<span class="error">Please select your total experience.</span>');$('#year').focus(); clr=1;
            }

            if(designation == ""){
                $('#desigInfo').html('<span class="error">Please specify your Designation</span>');
                $('#function_area').focus();clr=1;
            }
            if(keyskills == ""){
                $('#keyInfo').html('<span class="error">Please specify your key skills.</span>');$('#keyskills').focus();clr=1;
            }  */

            if(basic_education == ""){
                $('#basicInfo').html('<span class="error">Select your basic course.</span>');
                $('#basic_education').focus();clr=1;
            }

            if(document.getElementById("terms").checked == false){
                $('#termInfo').html('<span class="error">Agree to the terms and conditions to continue.</span>');
                $('#terms').focus();clr=1;
            }
            if(clr==0)
            {
                //alert('ffff');

                document.register.frmsubval.value=1;
                //alert(document.register.frmsubval.value);

                document.register.submit();
                return true;
                // $('#register').submit();
            }
        }

    </script>

    <script type="text/javascript">
        var code=0;
        function phd_edu()
        {
            document.getElementById('phed').style.display='block';
            document.getElementById('phd').style.display='none';
        }

        function pg_edu()
        {
            document.getElementById('po_grad').value='';
            document.getElementById('mas').style.display='none';
            document.getElementById('pged').style.display='block';
            document.getElementById('phd').style.display='block';

        }

        function cou_edu()
        {
            document.getElementById('coursename').style.display='block';
            document.getElementById('cour').style.display='none';
            document.getElementById('cour2').style.display='block';

        }
        function cou2_edu()
        {
            document.getElementById('coursename2').style.display='block';
            document.getElementById('cour2').style.display='none';
            document.getElementById('cour3').style.display='block';

        }
        function cou3_edu()
        {
            document.getElementById('coursename3').style.display='block';
            document.getElementById('cour3').style.display='none';

        }
        function resum()
        {
            document.getElementById('textresume').style.display='block';
            document.getElementById('resum').style.display='block';
            document.getElementById('hid').style.display='none';

        }
        function landlink()
        {
            document.getElementById('land').style.display='block';
            document.getElementById('landlink').style.display='none';

        }

        function city_change(v){
            var re = /Other/;
            if(re.test(v)){
                document.getElementById('new_city').style.display="block";
                document.getElementById('hc2').value=1;
            }
            else {
                document.getElementById('new_city').style.display="none";
                //document.getElementById('other_city').value="";
                document.getElementById('hc2').value=0;
            }
        }

        function change_country(c){
            if(c!='1'){
                document.getElementById('new_city').style.display="block";
                document.getElementById('city').value="";
                document.getElementById('city').options[document.getElementById('city').selectedIndex].text="Select";
                document.getElementById('city').disabled=true;
                //document.getElementById('other_city').value="";
                document.getElementById('hc1').value=1;
            }
            else{
                document.getElementById('new_city').style.display="none";
                document.getElementById('city').disabled=false;
                document.getElementById('hc1').value=0;
            }
        }


        function forgotview() {

            if (document.getElementById('light').style.display=='none') {
                document.getElementById('light').style.display='block';
                document.getElementById('fade').style.display='block';
            }
            else{
                document.getElementById('light').style.display='none';
                document.getElementById('fade').style.display='none';
                //return;
            }
        }
    </script>



    <script>

        function email_val(val)
        {

            var email=val;
            var re=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if(email=="")
            {
                document.getElementById("emailInfo").innerHTML='<font color="#F00" style="font-size:11px;">Enter the Email address</font>';
                //document.getElementById('email').focus();
                return false;
            }
            else if(re.test(document.getElementById('email').value)==false)
            {

                document.getElementById("emailInfo").innerHTML='<font color="#F00" style="font-size:11px;">invalid</font>';
                document.getElementById('email').value="";
                //document.getElementById('email').focus();

                return false;
            }
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
                    if(xmlhttp.responseText==0)
                    {
                        document.getElementById("emailInfo").innerHTML="<font color='#F00' style='font-size:11px;'>Email ID Already Exists !!!";
                        document.getElementById('email').value="";
                        document.getElementById('email').focus();

                    }
                    else
                    {
                        document.getElementById("emailInfo").innerHTML="<font color='#009966' style='font-size:12px;'>Email Id is available</font>";
                    }
                }
            }
            // xmlhttp.open("GET","check/email?q="+val,true);
            xmlhttp.open("GET", "{{ route('check.user','email') }}?q="+val,true);
            xmlhttp.send();

        }

        function username_val(val)
        {

            var letterNumber =  /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d][A-Za-z\d!@#$%^&*()_+]{6,19}$/;
            var username=val;
            if(username=="")
            {

                document.getElementById("usernameInfo").innerHTML='<font color="#F00" style="font-size:11px;">Enter the Username</font>';
                document.getElementById('username').focus();
                //document.getElementById('username').value="";


                return false;
            }
            else if(username!="")
            {
                if(username.length<6)
                {
                    document.getElementById("usernameInfo").innerHTML='<font color="#F00" style="font-size:11px;">Username must be 6 letters</font>';
                    document.getElementById('username').focus();
                    document.getElementById('username').value="";

                    return false;
                }

            }

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
                    if(xmlhttp.responseText==0)
                    {
                        document.getElementById("usernameInfo").innerHTML="<font color='red' style='font-size:12px;'>Username Already Exists !!!</font>";
                        document.getElementById('username').value="";
                        document.getElementById('username').focus();

                    }
                    else
                    {
                        document.getElementById("usernameInfo").innerHTML="<font color='#009966' style='font-size:12px;'>Username is available</font>";
                    }
                }
            }
            xmlhttp.open("GET", "{{ route('check.user','username') }}?q="+val,true);
            xmlhttp.send();
        }

    </script>


    <script type="text/javascript" language="javascript">

        /*function trim(s)
        {
            var l=0; var r=s.length -1;
            while(l < s.length && s[l] == ' ')
            {     l++; }
            while(r > l && s[r] == ' ')
            {     r-=1;     }
            return s.substring(l, r+1);
        }*/


        function LTrim(str){
            var whitespace = new String(" \t\n\r");
            var s = new String(str);
            if(whitespace.indexOf(s.charAt(0)) != -1){
                // We have a string with leading blank(s)...
                var j=0, i = s.length;
                // Iterate from the far left of string until we
                // don't have any more whitespace...
                while(j < i && whitespace.indexOf(s.charAt(j)) != -1)
                    j++;
                // Get the substring from the first non-whitespace
                // character to the end of the string...
                s = s.substring(j, i);
            }
            return s;
        }

        function RTrim(str){
            // We don't want to trip JUST spaces, but also tabs,
            // line feeds, etc.  Add anything else you want to
            // "trim" here in Whitespace
            var whitespace = new String(" \t\n\r");
            var s = new String(str);
            if (whitespace.indexOf(s.charAt(s.length-1)) != -1) {
                // We have a string with trailing blank(s)...
                var i = s.length - 1;       // Get length of string
                // Iterate from the far right of string until we
                // don't have any more whitespace...
                while (i >= 0 && whitespace.indexOf(s.charAt(i)) != -1)
                    i--;
                // Get the substring from the front of the string to
                // where the last non-whitespace character is...
                s = s.substring(0, i+1);
            }
            return s;
        }

        function trim(str){
            return RTrim(LTrim(str));
        }


        function check_dob(val)
        {
            var currentDate = new Date();
            var cday = currentDate.getDate();
            var cmonth = currentDate.getMonth()+1;
            if(cmonth<10)
            {
                cmonth="0"+cmonth;
            }
            var cyear = currentDate.getFullYear();
            var newtoday=cmonth+"/"+cday+"/"+cyear;
            var cyearless=cyear-18;
            var sptdate=val.split("/");

            if(newtoday==val || sptdate[2]>cyearless)
            {
                document.register.dob.value='';
                document.register.dob.focus();
                alert("Enter the valid date");
            }

        }

        //Form validation starts here

        function checkIt(evt)
        {
            evt = (evt) ? evt : window.event
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                status = "This field accepts numbers only."
                return false
            }
            status = "";
            return true
        }



        function file_upload(upload_field)
        {
            var re_text = /\.pdf|\.doc|\.docx/i;

            var filename = upload_field.value;

            if (filename.search(re_text) == -1)
            {
                alert("File does not have (doc, docx and pdf) extension");

                //      upload_field.register.reset();

//  		upload_field.value = '' ;

                document.getElementById('fupload').value = "";

                return false;
            }

            return true;

        }


        function photo_upload(upload)
        {
            var re_text = /\.jpg|\.png|\.gif|\.jpeg/i;

            var filename = upload.value;

            if(filename.search(re_text) == -1)
            {
                alert("Image does not have Image(jpg, gif, png) extension");

                //      upload.register.reset();

                // 	  upload.value;

                document.getElementById('nusr_photo').value = "" ;

                return false;
            }

            return true;
        }

        function ugspec(v){
            document.getElementById('basic_grad_spec').value="";
            if(v!=1 && v!=0){
                document.getElementById('basic_grad_spec').style.display="block";
                document.getElementById('basic_txt1').style.display="block";
                document.getElementById('basic_txt').style.display="block";
                document.getElementById('basic_grad_spec').style.color='#000000';
                document.getElementById('basic_txt').focus();
            }
            else{
                document.getElementById('basic_grad_spec').style.display="none";
                document.getElementById('basic_txt1').style.display="none";
                document.getElementById('basic_txt').style.display="none";
            }
        }

        function ugedsp(v){
            document.getElementById('basic_grad_spec1').value="";
            if(v!=1 && v!=0){
                document.getElementById('basic_grad_spec1').style.display="block";
                document.getElementById('basic_text1').style.display="block";
                document.getElementById('basic_text').style.display="block";
                document.getElementById('basic_grad_spec1').style.color='#000000';
                document.getElementById('basic_text').focus();
            }
            else{
                document.getElementById('basic_grad_spec1').style.display="none";
                document.getElementById('basic_text1').style.display="none";
                document.getElementById('basic_text').style.display="none";
            }
        }

        function pgspec(v){
            document.getElementById('post_grad_spec').value="";

            if(v!=0 && v!=document.getElementById('hidnot_pggrad').value){
                document.getElementById('post_grad_spec').style.display="block";
                document.getElementById('pg_txt1').style.display="block";
                document.getElementById('post_txt').style.display="block";
                document.getElementById('post_grad_spec').style.color='#000000';
                document.getElementById('post_grad_spec').focus();
            }
            else{
                document.getElementById('post_txt').style.display="none";
                document.getElementById('pg_txt1').style.display="none";
                document.getElementById('post_grad_spec').style.display="none";
            }
        }

        function pgedsp(v){
            document.getElementById('post_grad_spec1').value="";

            if(v!=0 && v!=document.getElementById('hidnot_pggrad1').value){
                document.getElementById('post_grad_spec1').style.display="block";
                document.getElementById('pg_text1').style.display="block";
                document.getElementById('post_text').style.display="block";
                document.getElementById('post_grad_spec1').style.color='#000000';
                document.getElementById('post_grad_spec1').focus();
            }
            else{
                document.getElementById('post_text').style.display="none";
                document.getElementById('pg_text1').style.display="none";
                document.getElementById('post_grad_spec1').style.display="none";
            }
        }

        function expedet(v){
            document.getElementById('annulsal').value="";
            if(v!=1 && v!=0){
                document.getElementById('exp_det').style.display="block";
                document.getElementById('exp_det').focus();
            }
            else{
                document.getElementById('annulsal').style.display="none";
                document.getElementById('exp_det').style.display="none";

            }
        }

        function doctspec(v){
            document.getElementById('doct_spec').value="";
            if(v!=0 && v!=document.getElementById('hidnot_postpggrad').value){
                document.getElementById('doct_txt').style.display="block";
                document.getElementById('doct_spec').style.display="block";
                document.getElementById('postpg_txt1').style.display="block";
                document.getElementById('doct_spec').style.color='#000000';
                document.getElementById('doct_spec').focus();
            }
            else {
                document.getElementById('doct_txt').style.display="none";
                document.getElementById('postpg_txt1').style.display="none";
                document.getElementById('doct_spec').style.display="none";
            }
        }

        function alpha(e) {
            var k;
            document.all ? k = e.keyCode : k = e.which;
            return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k==32);
        }



        function rmv_space(val)
        {
//alert(window.event.keyCode);
            if(window.event.keyCode!=32 && window.event.keyCode!=64)
                return true;
            else
                return false;
        }

        $(document).ready(function () {
            //called when key is pressed in textbox
            $("#mobile_number").keypress(function (e) {
                //if the letter is not digit then display error and don't type anything
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    //display error message
                    //$("#mobileInfo").html("Digits Only");//.show().fadeOut("slow");
                    return false;
                }
            });
        });
        /*function minmax(value, min, max)
        {

            if(parseInt(value) < min || isNaN(value))
                return 0;
            else if(parseInt(value) > max)
                return 0;
            else return value;
        }*/
    </script>

    <script>
        //-------------------------Ajax loading for states-------------//
        function loadXMLDoc(val)
        {
//alert(val);
            var xmlhttp;
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
                    var resp=trim(xmlhttp.responseText);
                    if(resp!="")
                    {
                        document.getElementById("state").innerHTML=resp;

                    }
                    else{
                        var sta=document.getElementById("statee");
                        sta.hide();

                    }

                }
            }
            xmlhttp.open("GET","state_ajax.php?country="+val,true);
            xmlhttp.send();
        }

        //--------------------------Ajax Loading for Cities--------------//
        function loadcity(cityval)
        {
//alert(cityval);
            var xmlhttp;
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
                    document.getElementById("city").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","city_ajax.php?city="+cityval,true);
            xmlhttp.send();
        }

        function loadcityspace()
        {
            document.getElementById('city1').style.display="block";
        }
        function countrycheck(valu)
        {
            //var valu=document.getElementById("inlineCheckbox1").value;
            //alert(valu);
            if(valu == 1)
            {
                //alert('ffff');
                //loadcountry();
                document.getElementById('divcity').style.display="none";
                document.getElementById('divcountry').style.display="block";
                document.getElementById('inlineCheckbox2').checked = "checked";
            }
            else if(valu == 2)
            {
                document.getElementById('divcity').style.display="block";
                document.getElementById('divcountry').style.display="none";
                document.getElementById('inlineCheckbox1').checked = "";
                //document.getElementById('conn').style.display="none";
                //document.getElementById('con').style.display="block";
            }
        }

        //--------------------------Ajax Loading for Countries--------------//
        function loadcountry()
        {
//alert(countryval);
            var countryval=1;
            var xmlhttp;
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
                    document.getElementById("select_country").innerHTML=xmlhttp.responseText;
                    //document.getElementById('stateInfo').innerHTML='';
                }
            }
            xmlhttp.open("GET","country_ajax.php?country="+countryval,true);
            xmlhttp.send();
        }


    </script>

@endsection
