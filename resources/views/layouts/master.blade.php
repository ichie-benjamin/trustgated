
<!doctype html>
<html lang="en">

@include('layouts.partials.head')
@yield('style')
<body>

<div id="page-wrapper">

    <!-- HEADER -->
@include('layouts.partials.header')

<!-- HEADER -->



@yield('content')






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


@include('layouts.partials.scripts')

@yield('js')

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
{{--<script type="text/javascript">--}}

{{--    function addit()--}}
{{--    {--}}

{{--        document.getElementById('additt').style.display='row';--}}

{{--        //document.getElementById('notice1').style.display='none';--}}


{{--    }--}}

{{--    function validateForm1(){--}}


{{--        var nameReg = /^[A-Za-z]+$/;--}}
{{--        var numberReg =  /^[0-9]+$/;--}}
{{--        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;--}}

{{--        var res_title = $('#res_title').val();--}}
{{--        var curr_industry = $('#curr_industry').val();--}}
{{--        var function_area= $('#function_area').val();--}}
{{--        var role= $('#role').val();--}}
{{--        var designation1 = $('#designation1').val();--}}

{{--        var annulsal = $('#annulsal').val();--}}
{{--        var annulsa = $('#annulsa').val();--}}
{{--        var fromyear = $('#fromyear').val();--}}
{{--        var frommonth = $('#frommonth').val();--}}
{{--        var notice = $('#notice').val();--}}
{{--        var job_profile = $('#job_profile').val();--}}
{{--        //alert($("#agree").is(':checked'));--}}
{{--        // var inputVal = new Array(names,address,email,telephone,message,lnames);--}}
{{--//alert(names);--}}
{{--        var inputMessage = new Array("Username","Email Address","Password","Confirm password", "Your Full Name","Current Location","City","Mobile Number","Work Experience","Designation","Key Skills","Basic Education","Agree To Terms And Conditions");--}}

{{--        $('.error').hide();--}}
{{--        var clr=0;--}}

{{--        if(res_title == ""){--}}

{{--            $('#resumeheadInfo').html('<span class="error">Resume Headline is Required</span>');--}}
{{--            //$('#res_title').focus();--}}
{{--            clr=1;--}}
{{--        }--}}
{{--        if(curr_industry == ""){--}}
{{--            $('#currentInfo').html('<span class="error">Current Industry is Required</span>');--}}
{{--            //$('#curr_industry').focus();--}}
{{--            clr=1;--}}
{{--        }--}}

{{--        if(function_area == ""){--}}
{{--            $('#functionalInfo').html('<span class="error">Functional Area is Required</span>');--}}
{{--            //$('#function_area').focus();--}}
{{--            clr=1;--}}
{{--        }--}}
{{--        if(role == ""){--}}
{{--            $('#roleInfo').html('<span class="error">Role is Required</span>')--}}
{{--            //$('#company').focus();--}}
{{--            clr=1;--}}
{{--        }--}}
{{--        /*if(pass != cpass){--}}
{{--            $('#cpasswordInfo').html('<span class="error">Retype ' + inputMessage[3] + '</span>');--}}
{{--            $('#confirmpassword').focus();clr=1;--}}
{{--        }*/--}}
{{--        /*  if(designation1 == ""){--}}

{{--              $('#desigInfo').html('<span class="error">Designation Required</span>');--}}
{{--              //$('#designation1').focus();--}}
{{--          clr=1;--}}
{{--          } */--}}
{{--        /*else if(!nameReg.test(names)){--}}
{{--            $('#nameLabel').html('<span class="error"> Letters only</span>');--}}
{{--			clr=1;--}}
{{--        }--}}
{{--		else if(names.length<=3){--}}

{{--            $('#nameLabel').html('<span class="error">' + inputMessage[0] + ' Should Be atleast 4 characters Long</span>');--}}
{{--			clr=1;--}}
{{--        } */--}}
{{--        if(annulsal == ""){--}}

{{--            $('#salInfo').html('<span class="error"> Annual Salary is Required</span>');--}}
{{--            //$('#annulsal').focus();--}}
{{--            clr=1;--}}
{{--        }--}}
{{--        /*	if(fromyear == ""){--}}

{{--            $('#durationInfo').html('<span class="error"> Duration is Required</span>');--}}
{{--            //$('#fromyear').focus();--}}
{{--            clr=1;--}}
{{--        }--}}
{{--        if(frommonth ==""){--}}

{{--            $('#durationInfo').html('<span class="error"> Duration is Required</span>');--}}
{{--            //$('#frommonth').focus();--}}
{{--            clr=1;--}}
{{--        } */--}}
{{--        /*if(notice == ""){--}}
{{--        //alert("industry");--}}

{{--            $('#noticeInfo').html('<span class="error">Notice period is Required</span>');--}}
{{--            //$('#notice').focus();--}}
{{--            clr=1;--}}
{{--        } */--}}
{{--        /* else if(!nameReg.test(lnames)){--}}
{{--             $('#lnameLabel').html('<span class="error"> Letters only</span>');--}}
{{--             clr=1;--}}
{{--         }*/--}}


{{--        /* if(job_profile == ""){--}}
{{--            $('#jobInfo').html('<span class="error">Job Profile Number is Required</span>');--}}
{{--            //$('#job_profile').focus();--}}
{{--            clr=1;--}}
{{--        } */--}}

{{--        if(clr==0)--}}
{{--        {--}}
{{--            //alert('ffff');--}}

{{--            document.register1.frmsubvall.value=1;--}}
{{--            //alert(document.register1.frmsubvall.value);--}}

{{--            document.register1.submit();--}}
{{--            // alert('ffff');--}}
{{--            return true;--}}
{{--            // $('#register').submit();--}}
{{--        }--}}
{{--        /* if(clr==0)--}}
{{--         {--}}
{{--           //  alert(clr);--}}
{{--             $('#ckhcartview').fadeIn('slow');--}}
{{--           //  $('#checkout-heading-mod').show();--}}
{{--            // $(".checkout-content").slideUp('slow');--}}
{{--             //document.subfrm.frmsubval.value=1;--}}
{{--         //document.subfrm.submit();--}}
{{--         }--}}
{{--         */--}}
{{--    }--}}
{{--    });--}}
{{--</script>--}}
