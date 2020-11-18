@extends('layouts.master')

@section('content')
    <!-- CONTENT -->
    <div id="content">
        <div class="container">

            <ol  class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Employer Registration</li>
                <li class=""><a href="{{route('jobseeker.reg')}}">Jobseeker Registration</a></li>
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


                    <div class="top-emp-center p5">
                        <h4>Employer Registration</h4>
                    </div>
                    <div class="col-sm-12">

                        <div class="click-here">
                            <span class="click-here"><span class="mandatory">*</span> Mandatory Fields </span>
                        </div>
                    </div>
                    <!-- <label  id="n1"><span id="name1"></span></label>-->
                    <form  class="form-horizontal m10" action="{{ route('register') }}" name="register" id="register" method="post"  enctype="multipart/form-data">

                        @csrf

                        <input name="gender" type="hidden">
                        <input name="phone_countrycode" type="hidden">
                        <input name="land_countrycode" type="hidden">
                        <input name="land_areacode" type="hidden">
                        <input name="exp_year" type="hidden">
                        <input name="exp_month" type="hidden">
                        <input name="function_area" type="hidden">
                        <input name="keyskills" type="hidden">
                        <input name="basic_education" type="hidden">
                        <input name="course" type="hidden">
                        <input name="course2" type="hidden">
                        <input name="course3" type="hidden">



                        <input type="hidden" name="frmsubval" id="frmsubval" value="">
                        <div class="col-md-12">
                            <label class="namecover m10">Create Your Account Details</label>

                            <div class="form-group">
                                <label class="col-sm-3 pedit2 text-right"><span class="red-star">*</span> User Name : </label>
                                <div class="col-sm-4">
                                    <input name="username" onBlur="return username_val(this.value);" onKeyPress="return rmv_space(this.event);" type="text" id="username" class="form-control" >
                                </div>
                                <div>
                                    <span id="usernameInfo"></span>
                                </div>
                            </div><!--form-group-->

                            <div class="form-group">
                                <label class="col-sm-3 pedit2 text-right">First Name : </label>
                                <div class="col-sm-4">
                                    <input name="first_name" type="text" id="first_name" class="form-control" >
                                </div>

                            </div><!--form-group-->
                            <div class="form-group">
                                <label class="col-sm-3 pedit2 text-right">Last Name : </label>
                                <div class="col-sm-4">
                                    <input name="last_name" type="text" id="last_name" class="form-control" >
                                </div>

                            </div><!--form-group-->
                            <div class="form-group">
                                <label class="col-sm-3 pedit2 text-right"><span class="red-star">*</span> Password : </label>
                                <div class="col-sm-4">
                                    <input name="password" type="password" id="password"  onKeyUp="checkPasswordStrength();" class="form-control">
                                    <span id="password-strength-status" style="color:#FF0000;  font-size:10px; font-style:italic"></span>


                                </div><div id="passLabel" class="floaterror"></div>
                            </div><!--form-group-->

                            <div class="form-group">
                                <label class="col-sm-3 pedit2 text-right"><span class="red-star">*</span>Confirm Password : </label>
                                <div class="col-sm-4">
                                    <input name="password_confirmation" type="password" id="password_confirmation" class="form-control">

                                </div><div id="cpassLabel" class="floaterror"></div>

                            </div><!--form-group-->
                            <div class="form-group">
                                <label class="col-sm-3 pedit2 text-right"><span class="red-star">*</span> Email ID : </label>
                                <div class="col-sm-4">
                                    <input type="text" name="email" id="email" onBlur="return email_val(this.value);" class="form-control" >
                                    <small class="pedit">Please register using your current email address.</small>
                                </div>
                                <div><span id="emailInfo"></span></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 pedit2 text-right"><span class="red-star">*</span>Company Name: </label>
                                <div class="col-sm-4">
                                    <input type="text" name="companyname" id="companyname" class="form-control"><div id="companyLabel" class="floaterror"></div>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 pedit2 text-right">SKill You Hire : </label>
                                <div class="col-sm-4">
                                    <input type="text" name="skill_i_hire" class="form-control">
                                </div>
                            </div>

                            <!--form-group-->

{{--                            <div class="form-group">--}}
{{--                                <label class="col-sm-3 pedit2 text-right">Company Logo: </label>--}}
{{--                                --}}
{{--                            </div>--}}

                            <input type="hidden" value="employer" checked="checked" id="c1" name="role">


                            {{--                            <div class="form-group">--}}
{{--                                <label class="col-sm-3 text-right">Type : </label>--}}
{{--                                <div class="col-sm-4">--}}
{{--                                    <label class="radio-inline pedit4">--}}
{{--                                        <input type="radio" value="employer" checked="checked" id="c1" name="role" >Company--}}
{{--                                    </label>--}}
{{--                                    <label class="radio-inline pedit4">--}}
{{--                                        <input type="radio" name="role" value="consultant" id="c2"> Consultant--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                                <div id="typeLabel" class="floaterror"></div>--}}
{{--                            </div>--}}

{{--                            <input name="role" value="employee" type="hidden">--}}

                            <div class="form-group">
                                <label class="col-sm-3 pedit2 text-right"><span class="red-star">*</span> Industry Type : </label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" name="industry_type" id="Industry_Type">
                                        <option value="">select</option>
                                        <option value="Construction"> Construction </option>
                                        <option value="IT - BPO"> IT - BPO </option>
                                        <option value="IT-ERP-Oracle"> IT-ERP-Oracle </option>
                                        <option value="KPO/Technical Support"> KPO/Technical Support </option>
                                        <option value="Law Enforcement/Security"> Law Enforcement/Security </option>
                                        <option value="Legal/Law"> Legal/Law </option>
                                        <option value="Management"> Management </option>
                                        <option value="Marketing/Sales"> Marketing/Sales </option>
                                        <option value="mech"> mech </option>
                                        <option value="Media "> Media  </option>
                                        <option value="Media/Journalism"> Media/Journalism </option>
                                        <option value="NGO/Social Services"> NGO/Social Services </option>
                                        <option value="Others"> Others </option>
                                        <option value="Production/Manufacturing/Maintenance"> Production/Manufacturing/Maintenance </option>
                                        <option value="Strategy / Management Consulting Firms"> Strategy / Management Consulting Firms </option>
                                        <option value="test cate"> test cate </option>
                                        <option value="Tours and Travel/Airline"> Tours and Travel/Airline </option>
                                        <option value="Transportation/Logistics"> Transportation/Logistics </option>
                                    </select>

{{--                                    <div id="industry_alternate" style="display:none;">--}}
{{--                                        <input type="hidden" name="industry_type" id="Industry_Type" value="Consultant">--}}
{{--                                    </div>--}}
                                </div><div id="industryLabel" class="floaterror"></div>
                            </div><!--form-group-->

                            <div class="form-group">
                                <label class="col-sm-3 pedit2 text-right"><span class="red-star"></span>Website</label>
                                <div class="col-sm-4">
                                    <input type="text" name="website_url" id="website_url" class="form-control">

                                </div><div id="website_url" class="floaterror"></div>
                            </div><!--form-group-->


                            <div class="form-group">
                                <label class="col-sm-3 pedit2 text-right"><span class="red-star">*</span>Address : </label>
                                <div class="col-sm-4">
                                    <input type="text" name="address" id="address"  class="form-control">

                                </div><div id="addressLabel" class="floaterror"></div>
                            </div><!--form-group-->

                            <div class="form-group">
                                <label class="col-sm-3 pedit2 text-right"><span class="red-star">*</span>Mobile Number : </label>
                                <div class="col-sm-4">
                                    <input name="mobile_number" id="mobile_number" type="text" class="form-control" >
                                </div>
                            </div><!--form-group-->

                            <div class="form-group">
                                <label class="col-sm-3 pedit2 text-right"><span class="red-star">*</span>Country: </label>
                                <div class="col-sm-4">
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
                                <label class="col-sm-3 pedit2 text-right"><span class="red-star">*</span>State: </label>
                                <div class="col-sm-4">
                                    <select style="width: 100%" class="form-control select2 states" required name="state">

                                        <option>Select Country first</option>

                                    </select>

                                </div>
                                <div>
                                    <span id="stateInfo"></span>
                                </div>
                            </div><!--form-group-->

                            <div class="form-group" id="cityy">
                                <label class="col-sm-3 pedit2 text-right"><span class="red-star">*</span>City: </label>
                                <div class="col-sm-4">
                                    <input required type="text" name="city" id="city" class="form-control" placeholder="">

                                </div>
                                <div>
                                    <span id="cityInfo"></span>
                                </div>
                            </div><!--form-group-->


                            <div class="form-group">
                                <label class="col-sm-3 pedit2 text-right"><span class="red-star">*</span> Pincode : </label>
                                <div class="col-sm-4">
                                    <input type="text" name="pincode" id="pincode" class="form-control"  maxlength="8" />

                                </div><div id="pincodeLabel" class="floaterror"></div>
                            </div><!--form-group-->
                            <div class="form-group ">
                                <label class="col-sm-3 pedit2 text-right"><span class="red-star">*</span>Contact Number : </label>
                                <div class="col-sm-4">
                                    <div class="col-sm-2 padd2px"><input type="text" class="form-control " id="country_code" name="country_code"  maxlength="2" size="2"></div>
                                    <div class="col-sm-3 padd2px"><input type="text" class="form-control " id="city_code" size="2" name="city_code"  maxlength="3"></div>
                                    <div class="col-sm-7 padd2px"><input type="text" class="form-control " id="no3" name="no3" maxlength="10"></div>

                                </div><div id="numberLabel" class="floaterror"></div>
                            </div><!--form-group-->

                            <div class="form-group">
                                <label class="col-sm-3 pedit2 text-right"><span class="red-star">*</span>Contact Person : </label>
                                <div class="col-sm-4">
                                    <input type="text" name="Contact_Person" id="Contact_Person" class="form-control">

                                </div><div id="contactLabel" class="floaterror"></div>
                            </div><!--form-group-->
                            <div class="form-group">
                                <div class="col-sm-6 line5">
                                    <div class="checkbox"> <label class="pedit2"> <input type="checkbox" name="terms" id="terms" value="chk">  I agree to  </label><span class="regi"><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/terms.html" target="_blank"> Terms & Conditions </a></span></div><div id="termsLabel" class="floaterror"></div>
                                    <div class="checkbox"> <label class="pedit2"> <input type="checkbox" id="news" name="news" value="1" checked="checked">  I want to receive promotions on my email id. </label> </div>
                                </div>
                            </div><!--form-group-->
                            <div class="form-group">
                                <label  class="col-sm-3  control-label efs"></label>
                                <div class="col-sm-9">
                                    {!! app('captcha')->display() !!}
                                </div>
                            </div>
                            <div class="form-group ">

                                <div class="col-sm-3 ">
                                    &nbsp;
                                </div>
                                <div class="col-sm-3 ">
                                    <input class="btn-blue btn bc" type="button" id="submits" name="submits" onclick="return validateForm();" value="Register Now">
                                </div>
                                <div class="col-sm-3 padno">
                                    <div class="btn-blue btn bc"><a href="{{ route('employer.register') }}" style="color:#FFF"> Cancel </a> <!--<input type="reset" value="Cancel" />--></div>
                                </div>
                            </div><!--form-group-->



                        </div><!--col-sm-12-->
                    </form>



                </div><!--col-sm-9-->

                <div class="col-sm-3" >




                    <div class="create-job">
                        <div class="create-job-head ">
                            <h3 class="line5">Customer Support</h3> <span class="icowhite"><i class="fa fa-phone-square"></i></span>
                        </div>
                        <div class="post-job-content">
                          {!! optional(\App\Models\Page::whereTitle('contact details')->first())->content !!}
                        </div><!--post-job-content-->
                    </div><!--create-job-->

                    <div class="create-job">
                        <div class="create-job-head calp5">
                            <h3 class="line5">Request Call Back</h3> <span class="icowhite"> <img src="/images/ed.png" alt="Call back"></span>
                        </div>
                        <div class="post-job-content">
                            Leave your details here and we will get in touch with you:
                            <form name="myform">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="contactperson" placeholder="Contact Person"><div id="id1"></div>
                                        </div>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" placeholder="Company" name="company">
                                        </div><div id="id2"></div>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" placeholder="Email" name="email">
                                        </div><div id="id3"></div>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="col-sm-3 padd2px"><input type="text" name="city" class="form-control " placeholder="City"></div>
                                            <div class="col-sm-4 padd2px"><input type="text" name="state" class="form-control " placeholder="State"></div>
                                            <div class="col-sm-5 padd2px"><input type="text" name="country" class="form-control " placeholder="Contry"></div><div id="id4"><div id="id5"></div></div><div id="id6"></div>
                                        </div>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input type="number" class="form-control" name="phone" placeholder="Phone"><div id="id7"></div>
                                        </div>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="col-sm-4 pedit2 padno">I am a : </label>
                                            <label class="radio-inline pedit4">
                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">Jobseeker
                                            </label>
                                            <label class="radio-inline pedit4">
                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Recruiter
                                            </label><div id="id8"></div>
                                        </div>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group">
                                    <input class="btn-blue btn bc submit"  onclick="return requestvalidation();" name="submit" value="Submit" type="submit" >
                                </div> <!--form-group-->

                            </form>
                        </div><!--post-job-content-->
                    </div><!--create-job-->
                    <div class="openings">


                    </div><!--openings-->

                </div><!--col-sm-3-->

            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
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


    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

    <script>
        $('#lfm').filemanager('image');
    </script>

    <script type="text/javascript">

        function rmv_space(val)
        {
//alert(window.event.keyCode);
            if(window.event.keyCode!=32 && window.event.keyCode!=64)
                return true;
            else
                return false;
        }

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

        function validateForm(){
            var textbox = document.getElementById("no3");
//alert(textbox.value.length);
            var nameReg = /^[A-Za-z]+$/;
            var numberReg =  /^[0-9]+$/;
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var username = $('#username').val();
            //var letterNumber = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d][A-Za-z\d!@#$%^&*()_+]{6,19}$/;    //"/^[0-9a-zA-Z]+$/;" /^[A-Za-z0-9_]+$//^([a-zA-Z+]+[0-9+]+[&@!#+]+)$/
            var companyname = $('#companyname').val();
            var role = $('#role').val();

            var industry_type = $('#Industry_Type').val();

            var email = $('#email').val();
            // var yourname = $('#yourname').val();
            var Contact_Person = $('#Contact_Person').val();
            var message = $('#messageInput').val();
            var address = $('#address').val();
            var city = $('#city').val();
            var country = $('#select_country').val();
            var state = $('#state').val();
            var zip = $('#pincode').val();
            var country_code= $('#country_code').val();
            var city_code= $('#city_code').val();
            var no3= $('#no3').val();
            var pass= $('#password').val();
            var cpass= $('#password_confirmation').val();
            var terms= $('#terms');
            var mobileno = $("#mobileno").val();

            //alert($("#agree").is(':checked'));
            // var inputVal = new Array(names,address,email,telephone,message,lnames);
//alert(names);
            var inputMessage = new Array("Email Address","Password","Confirm password", "Company Name", "Company Type","Industry Type","Address","Country","State","City","Pincode","Mobile number", "Contact Person Name","Agree To Terms And Conditions","User Name");

            $('.error').hide();
            var clr=0;

            if(username == ""){
                $('#ename').html('<span class="error">Please specify name</span>');clr=1;
            }


            if(email == ""){
                $('#email1').html('<span class="error"> Please specify your email ID</span>');clr=1;
            }
            else if(!emailReg.test(email)){
                $('#emailLabel').html('<span class="error"> Please enter a valid email Id</span>');clr=1;
            }
            if(pass == ""){
                $('#passLabel').html('<span class="error"> Please specify a password.</span>');clr=1;
            }
            //else if(pass.length < 6){
            //$('#passLabel').html('<span class="error">Password must be 6 letters</span>');clr=1;
            //}
            if(cpass == ""){
                $('#cpassLabel').html('<span class="error">Please specify a confirm password.</span>');clr=1;
            }
            if(pass != cpass){
                $('#cpassLabel').html('<span class="error">Your passwords entries do not match.</span>');clr=1;
            }
            if(companyname == ""){

                $('#companyLabel').html('<span class="error">Please specify your Company name.</span>');
                clr=1;
            }
            /*else if(!nameReg.test(names)){
                $('#nameLabel').html('<span class="error"> Letters only</span>');
                clr=1;
            }
            else if(names.length<=3){

                $('#nameLabel').html('<span class="error">' + inputMessage[0] + ' Should Be atleast 4 characters Long</span>');
                clr=1;
            } */
            if(role == ""){

                $('#typeLabel').html('<span class="error">Please specify your Company Type.</span>');
                clr=1;
            }
            if(industry_type == ""){
                //alert("industry");

                $('#industryLabel').html('<span class="error">Please specify your Industry Type.</span>');
                clr=1;
            }
            /* else if(!nameReg.test(lnames)){
                 $('#lnameLabel').html('<span class="error"> Letters only</span>');
                 clr=1;
             }*/


            if(address == ""){
                $('#addressLabel').html('<span class="error"> Please specify your address.</span>');clr=1;
            }
            /* else if(!numberReg.test(mob)){
                 $('#mobileLabel').html('<span class="error"> Numbers only</span>');clr=1;
             }*/

            if(country == ""){
                $('#countryLabel').html('<span class="error">Please specify your country.</span>');clr=1;
            }
            if(state == ""){
                $('#stateLabel').html('<span class="error">Please specify your state.</span>');clr=1;
            }
            if(city == ""){
                $('#cityLabel').html('<span class="error">Please specify your City.</span>');clr=1;
            }
            if(zip == ""){
                $('#pincodeLabel').html('<span class="error">Please specify your pincode.</span>');clr=1;
            }
            if(no3 == ""){
                $('#numberLabel').html('<span class="error">Please specify your Contact Number</span>');clr=1;
            }
            /* else if(!numberReg.test(mobileno)){
                 $('#mobileLabel').html('<span class="error"> Numbers only</span>');clr=1;
             }*/
            else if(((textbox.value.length) <= 5))
            {
                $('#numberLabel').html('<span class="error">Wrong Contact number format.</span>');
                ('#numberLabel').focus();clr=1;
            }
            else if(((textbox.value.length) >= 15))
            {
                //alert("success");
                $('#numberLabel').html('<span class="error">Wrong Contact number format.</span>');
                ('#numberLabel').focus();clr=1;
            }
            /* if((country_code == "") && (city_code == "") && (no3 == "")){
                $('#numberLabel').html('<span class="error">Landline Number Required</span>');clr=1;
            } */
            if(Contact_Person == ""){
                $('#contactLabel').html('<span class="error">Please specify your contact person name</span>');clr=1;
            }
            if(document.getElementById("terms").checked == false){
                $('#termsLabel').html('<span class="error">Please agree to the terms and conditions to continue.</span>');clr=1;
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
            /* if(clr==0)
             {
               //  alert(clr);
                 $('#ckhcartview').fadeIn('slow');
               //  $('#checkout-heading-mod').show();
                // $(".checkout-content").slideUp('slow');
                 //document.subfrm.frmsubval.value=1;
             //document.subfrm.submit();
             }
             */
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
    </script>

    <script type="text/javascript">
        function requestvalidation()
        {
            //alert(hi);
            var person=document.myform.contactperson.value;
            var company=document.myform.company.value;
            var email=document.myform.email.value;
            var city=document.myform.city.value;
            var state=document.myform.state.value;
            var country=document.myform.country.value;
            var inlineRadioOptions=document.myform.inlineRadioOptions.value;
            var phone=document.myform.phone.value;

            var box=document.myform.box.value;

            if(person=="")
            {
                //alert("Enter contact person");
                document.getElementById('id1').innerHTML='<span style="color:#DE1616;">Enter contact name</span>';
                document.myform.contactperson.style.borderColor = "red";
                document.myform.contactperson.focus();
                return false;
            }
            if(company=="")
            {

                document.getElementById('id2').innerHTML='<span style="color:#DE1616;">Enter company</span>';
                document.myform.company.style.borderColor = "red";
                document.myform.company.focus();
                return false;
            }
            if(email=="")
            {

                document.getElementById('id3').innerHTML='<span style="color:#DE1616;">Enter Email</span>';
                document.myform.email.style.borderColor = "red";
                document.myform.email.focus();
                return false;
            }

            var filter = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if (!filter.test(email)) {

                document.getElementById('id3').innerHTML='<span style="color:#DE1616;">Please provide a valid email address</span>';
                document.myform.email.style.borderColor = "red";
                return false;
            }

            if(city=="")
            {
                document.getElementById('id4').innerHTML='<span style="color:#DE1616;">Enter City</span>';
                document.myform.city.style.borderColor = "red";
                document.myform.city.focus();
                return false;
            }
            if(state=="")
            {
                document.getElementById('id5').innerHTML='<span style="color:#DE1616;">Enter state</span>';
                document.myform.contactperson.style.borderColor = "red";
                document.myform.state.focus();
                return false;
            }
            if(country=="")
            {
                document.getElementById('id6').innerHTML='<span style="color:#DE1616;">Enter Country</span>';
                document.myform.country.style.borderColor = "red";
                document.myform.country.focus();
                return false;
            }
            if(phone=="")
            {
                document.getElementById('id7').innerHTML='<span style="color:#DE1616;">Enter Pnone no</span>';
                document.myform.phone.style.borderColor = "red";
                document.myform.phone.focus();
                return false;
            }
            if(inlineRadioOptions=="")
            {
                document.getElementById('id8').innerHTML='<span style="color:#DE1616;">Enter Position</span>';
                document.myform.inlineRadio1.style.borderColor = "red";
                document.myform.inlineRadio1.focus();
                return false;
            }
            if(box=="")
            {
                document.getElementById('id9').innerHTML='<span style="color:#DE1616;">Enter Captcha</span>';
                document.myform.box.style.borderColor = "red";
                document.myform.box.focus();
                return false;
            }
            return true;
        }
    </script>

@endsection
