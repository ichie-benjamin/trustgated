
<!doctype html>
<html lang="en">

@include('temp.layouts.head')
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

                    document.getElementById("name1").innerHTML="<font color='red' style='font-size:12px;'>Don't use abuse words,  </font> ";

                    //document.getElementById('name').focus();
                    document.getElementById('txtid').value="";
                }
                else
                {
                    document.getElementById("name1").innerHTML="<font color='#009966' style='font-size:12px;'>good</font>";
                }
            }
        }
        xmlhttp.open("GET","chkabuse.php?q="+textval,true);
        xmlhttp.send();


    }
</script>
<script type="text/javascript">
    function send_mail(rec_name,rec_mail){
        document.getElementById('recname').value=rec_name;
        document.getElementById('recmail').value=rec_mail;
    }
</script>
<body>

<div class="modal fade" id="recruiter-listing-send-message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #017BC6; text-align:center;">
                <button type="button" style="color:#FFF;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:#FFF; font-weight:bold;" class="modal-title" id="exampleModalLabel">Send Message To : <input class="btn" type="text" style="font-weight:bold; font-size:16px;" id="recname" readonly></h4>
            </div>
            <form action="" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Email ID:</label>
                        <input type="text" class="form-control" id="recipient-name" name="recipient-name" value="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Message:</label>
                        <textarea class="form-control" id="message-text" name="message-text"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="sub-text" class="control-label">Subject:</label>
                        <textarea class="form-control" id="sub-text" name="sub-text"></textarea>
                    </div>

                    <input type="hidden" id="recmail" name="recmail"/>
                </div>
                <div class="modal-footer">

                    <input type="submit" class="btn-blue btn bc" name="send_mail" value="Send message"/>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="page-wrapper">

    <!-- HEADER -->

    @include('temp.layouts.header')
    <!-- HEADER -->



    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/">Home</a></li>
                        <li><a href="#"> Jobs</a></li>
                        <li class="active">Search Results</li>
                    </ol>
                </div>
                <div class="col-md-2  padno">
                    <div class="refine">
                        <div class="refine-head">
                            <h2>Refine Results</h2>
                        </div>

                        <div class="refine-content">
                            <form action="" method="GET" name="refine1" class="jobsr" onSubmit="">
                                <input type="text" name="refkeyword" id="refkeyword" class="form-control "  placeholder="Keywords" value="">
                                <input type="text" name="reflocation" id="reflocation" class="form-control m10"  placeholder="Location" value="">
                                <div class="text-center"> <input class="btn-blue btn m10" value="Refine " type="submit" name="refinesrch1"></div>
                            </form>

                        </div>
                    </div>
                    <div class="openings">
                        <a href="http://192.168.1.50/sindhu/job/job-portal"><img src="admin/uploads/banner/banner-1552284433.jpg" alt="ads"></a>
                    </div>
                    <div class="openings">
                        <a href="http://192.168.1.50/sindhu/job/job-portal"><img src="admin/uploads/banner/banner-1552284396.jpg" alt="ads"></a>
                    </div>
                    <div class="openings">
                        <a href="http://192.168.1.50/sindhu/job/job-portal"><img src="admin/uploads/banner/banner-1552284419.jpg" alt="ads"></a>
                    </div>

                </div>
                <!--
                <form action="" method="post" name="refine2" onSubmit="return refine2validate();">
                                       <div class="re-bg"><div class="rea"><a data-toggle="collapse" href="#tech0" aria-expanded="true" >
                  Freshness <div class="caret text-right"></div>
                 </a></div></div>
                <div class="collapse" id="tech0">

                 <select name="fday" id="fday" class="form-control input-sm" style="padding:0;" onchange='this.form.submit()'>
                 <option value="">-- Select --</option>
                 <option  value="1">1 Day</option>
                 <option  value="10">10 Days</option>
                 <option  value="20">20 Days</option>
                 <option  value="30">30 Days</option>
                 <option  value="60">60 Days</option>
                 </select>
                 </div>


                 <div class="re-bg"><div class="rea"><a data-toggle="collapse" href="#tech22" aria-expanded="true" >
                  Jobs by Location <div class="caret text-right"></div>
                 </a></div></div>

                 <div class="collapse" id="tech22">
                 <div style="height:325px; overflow:scroll; overflow-x:hidden;">

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Agartala"> Agartala                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Ahmadabad"> Ahmadabad                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Ahmednagar"> Ahmednagar                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Aizwal"> Aizwal                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Ajmer"> Ajmer                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Akola"> Akola                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Allahabad"> Allahabad                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Alleppey"> Alleppey                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Amer"> Amer                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Amravati"> Amravati                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Amritsar"> Amritsar                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Anakapalle"> Anakapalle                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Anantapur"> Anantapur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="ApreÅ¡ov"> ApreÅ¡ov                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Ara"> Ara                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Arakonam"> Arakonam                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Arcot"> Arcot                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Ariyalur"> Ariyalur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Aruppukkottai"> Aruppukkottai                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Auraiya"> Auraiya                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Aurangabad"> Aurangabad                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Aurangabad Chikalthan Aerodrome"> Aurangabad Chikalthan Aerodrome                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Balasore"> Balasore                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Bangalore"> Bangalore                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Barddhaman"> Barddhaman                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Basirhat"> Basirhat                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Batala"> Batala                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Belgaum/Sambra"> Belgaum/Sambra                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Benares"> Benares                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Bhandara"> Bhandara                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Bhatkal"> Bhatkal                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Bhatpara"> Bhatpara                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Bhiwandi"> Bhiwandi                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Bhiwani"> Bhiwani                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Bhongir"> Bhongir                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Bhopal"> Bhopal                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Bhubaneshwar"> Bhubaneshwar                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Bhuj-Rudramata"> Bhuj-Rudramata                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Bihar"> Bihar                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Bikaner"> Bikaner                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Bombay"> Bombay                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Bulandshahr"> Bulandshahr                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Calcutta"> Calcutta                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Chandigarh"> Chandigarh                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Chavakkad"> Chavakkad                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Chengelput"> Chengelput                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Chennai"> Chennai                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Chhapra"> Chhapra                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Chitradurga"> Chitradurga                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Chittoor"> Chittoor                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Cochin"> Cochin                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Coimbatore/Peelamedu"> Coimbatore/Peelamedu                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Cuddalore"> Cuddalore                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Cuttack"> Cuttack                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Daman"> Daman                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Daosa"> Daosa                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Darjiling"> Darjiling                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Daund"> Daund                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Dehradun"> Dehradun                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Delhi"> Delhi                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Dewas"> Dewas                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Dibrugarh/Mohanbari"> Dibrugarh/Mohanbari                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Dindigul"> Dindigul                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Dindivanam"> Dindivanam                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Dispur"> Dispur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Dod Ballapur"> Dod Ballapur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Duraha"> Duraha                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Elamanchili"> Elamanchili                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Erode"> Erode                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Etawah"> Etawah                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Faizabad"> Faizabad                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Faridabad"> Faridabad                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Fatehpur"> Fatehpur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Gadag"> Gadag                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Gandhinagar"> Gandhinagar                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Gangtok"> Gangtok                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Gauhati"> Gauhati                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Gaya"> Gaya                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Ghaziabad"> Ghaziabad                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Ghazipur"> Ghazipur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Goa/Panjim"> Goa/Panjim                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Godhra"> Godhra                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Guwahati"> Guwahati                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Gwalior"> Gwalior                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Haora"> Haora                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Hisar"> Hisar                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Hoshiarpur"> Hoshiarpur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Hyderabad"> Hyderabad                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Imphal"> Imphal                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Indore"> Indore                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Itanagar"> Itanagar                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Jabalpur"> Jabalpur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Jagdalpur"> Jagdalpur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Jaipur"> Jaipur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Jaisalmer"> Jaisalmer                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Jalandhar"> Jalandhar                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Jamshedpur"> Jamshedpur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Jatni"> Jatni                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Jaunpur"> Jaunpur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Jharsuguda"> Jharsuguda                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Jodhpur"> Jodhpur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kakinada"> Kakinada                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kalimpang"> Kalimpang                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kalyan"> Kalyan                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kamthi"> Kamthi                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kancheepuram"> Kancheepuram                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kanpur"> Kanpur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kanyakumari"> Kanyakumari                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kasaragod"> Kasaragod                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kerala"> Kerala                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Khadki"> Khadki                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Khammam"> Khammam                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kharagpur"> Kharagpur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kodaikanal"> Kodaikanal                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kohima"> Kohima                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kolar"> Kolar                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kolhapur"> Kolhapur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Koregaon"> Koregaon                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kovilpatti"> Kovilpatti                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kozhikode"> Kozhikode                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kumbakonam"> Kumbakonam                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kumbum"> Kumbum                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kurnool"> Kurnool                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Kutralam"> Kutralam                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Lucknow"> Lucknow                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Ludhiana"> Ludhiana                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="M. O. Ranchi"> M. O. Ranchi                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Machilipatnam"> Machilipatnam                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Madurai"> Madurai                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Mahbubnagar"> Mahbubnagar                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Mahesana"> Mahesana                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Malegaon"> Malegaon                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Mandya"> Mandya                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Mangalore"> Mangalore                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Mannarkudi"> Mannarkudi                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Mayiladuthurai"> Mayiladuthurai                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Medinipur"> Medinipur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Meerut"> Meerut                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Mhow"> Mhow                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Minicoy"> Minicoy                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Mirzapur"> Mirzapur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Moga"> Moga                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Mumbai"> Mumbai                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Murud"> Murud                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Muzaffarnagar"> Muzaffarnagar                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Muzaffarpur"> Muzaffarpur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Nadiad"> Nadiad                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Nagercoil"> Nagercoil                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Nagpur"> Nagpur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Nasik"> Nasik                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Nawabganj"> Nawabganj                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Nellore"> Nellore                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="New Delhi"> New Delhi                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="New Delhi/Safdarjung"> New Delhi/Safdarjung                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Neyyattinkara"> Neyyattinkara                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Nizamabad"> Nizamabad                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Ooty"> Ooty                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Panvel"> Panvel                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Papanasam"> Papanasam                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Patiala"> Patiala                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Patna"> Patna                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Pendra Road"> Pendra Road                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Perambalur"> Perambalur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Pondicherry"> Pondicherry                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Poona"> Poona                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Port Blair"> Port Blair                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Pune"> Pune                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Puri"> Puri                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Quilon"> Quilon                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Rae Bareli"> Rae Bareli                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Raigarh"> Raigarh                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Rajapalaiyam"> Rajapalaiyam                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Rajkot"> Rajkot                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Rameshwaram"> Rameshwaram                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Ratnagiri"> Ratnagiri                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Rohtak"> Rohtak                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Salem"> Salem                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Sambalpur"> Sambalpur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Sankarankovil"> Sankarankovil                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Sanwer"> Sanwer                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Saraipali"> Saraipali                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Satara"> Satara                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Satna"> Satna                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Sattur"> Sattur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Sehore"> Sehore                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Shertallai"> Shertallai                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Shillong"> Shillong                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Shimla"> Shimla                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Sholapur"> Sholapur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Sitapur"> Sitapur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Sivakasi"> Sivakasi                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Solapur"> Solapur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Sonipat"> Sonipat                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Srikakulam"> Srikakulam                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Srinagar"> Srinagar                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Sriperumpudur"> Sriperumpudur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Srivilliputhur"> Srivilliputhur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Surat"> Surat                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Tambaram"> Tambaram                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Tezpur"> Tezpur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Thana, INDIA"> Thana, INDIA                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Thanjavur"> Thanjavur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Theni"> Theni                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Thiruchendur"> Thiruchendur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Thiruvan"> Thiruvan                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Tiruchchirapalli"> Tiruchchirapalli                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Tirunelveli"> Tirunelveli                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Tirupati"> Tirupati                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Tiruvottiyur"> Tiruvottiyur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Tonk"> Tonk                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Trivandrum"> Trivandrum                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Tumkur"> Tumkur                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Tuticorin"> Tuticorin                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Udupi"> Udupi                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Ulhasnagar"> Ulhasnagar                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Unnao"> Unnao                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Vadodara"> Vadodara                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Varanasi"> Varanasi                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Vellore"> Vellore                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Veraval"> Veraval                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Vidisha"> Vidisha                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Villupuram"> Villupuram                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Virdhachalam"> Virdhachalam                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Virudunagar"> Virudunagar                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Vishakhapatnam"> Vishakhapatnam                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Vizianagaram"> Vizianagaram                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Warangal"> Warangal                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Wardha"> Wardha                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Washington, US"> Washington, US                        </label><br />

                 <label class="checkbox-inline tech ">
                   <input type="checkbox"  name="jlocation[]" value="Zahirabad"> Zahirabad                        </label><br />
                                         </div>

                 </div>

                 <div class="re-bg"><div class="rea"><a data-toggle="collapse" href="#tech32" aria-expanded="true" >
                  Jobs by Industry <div class="caret text-right"></div>
                 </a></div></div>


                  <div class="collapse" id="tech32">
                  <div style="height:325px; overflow:scroll; ">
                                        <label class="checkbox-inline tech">
                   <input type="checkbox" name="jindustry[]" value="34"> Law Enforcement/Secu..
                 </label>
                                         <label class="checkbox-inline tech">
                   <input type="checkbox" name="jindustry[]" value="35"> Legal/Law..
                 </label>
                                         <label class="checkbox-inline tech">
                   <input type="checkbox" name="jindustry[]" value="36"> Marketing/Sales..
                 </label>
                                         <label class="checkbox-inline tech">
                   <input type="checkbox" name="jindustry[]" value="37"> Media/Journalism..
                 </label>
                                         <label class="checkbox-inline tech">
                   <input type="checkbox" name="jindustry[]" value="38"> Production/Manufactu..
                 </label>
                                         <label class="checkbox-inline tech">
                   <input type="checkbox" name="jindustry[]" value="40"> Tours and Travel/Air..
                 </label>
                                         <label class="checkbox-inline tech">
                   <input type="checkbox" name="jindustry[]" value="41"> Transportation/Logis..
                 </label>
                                         <label class="checkbox-inline tech">
                   <input type="checkbox" name="jindustry[]" value="42"> KPO/Technical Suppor..
                 </label>
                                         <label class="checkbox-inline tech">
                   <input type="checkbox" name="jindustry[]" value="44"> Strategy / Managemen..
                 </label>
                                         <label class="checkbox-inline tech">
                   <input type="checkbox" name="jindustry[]" value="45"> Others..
                 </label>
                                         <label class="checkbox-inline tech">
                   <input type="checkbox" name="jindustry[]" value="46"> test cate..
                 </label>
                                         <label class="checkbox-inline tech">
                   <input type="checkbox" name="jindustry[]" value="50"> IT-ERP-Oracle..
                 </label>
                                         <label class="checkbox-inline tech">
                   <input type="checkbox" name="jindustry[]" value="51"> Media ..
                 </label>
                                         <label class="checkbox-inline tech">
                   <input type="checkbox" name="jindustry[]" value="52"> mech..
                 </label>
                                         <label class="checkbox-inline tech">
                   <input type="checkbox" name="jindustry[]" value="53"> IT - BPO..
                 </label>
                                         <label class="checkbox-inline tech">
                   <input type="checkbox" name="jindustry[]" value="54"> NGO/Social Services..
                 </label>
                                         <label class="checkbox-inline tech">
                   <input type="checkbox" name="jindustry[]" value="55"> Management..
                 </label>
                                         <label class="checkbox-inline tech">
                   <input type="checkbox" name="jindustry[]" value="56"> Construction..
                 </label>
                                         </div>

                 </div>

                  <div class="re-bg"><div class="rea"><a data-toggle="collapse" href="#tech4" aria-expanded="true" >
                  Jobs by salary <div class="caret text-right"></div>
                 </a></div></div>
                  <div class="collapse" id="tech4">
                  <label class="radio-inline tech">
                   <input type="radio" name="refin31"  id="refin301" value="1"> Up to 1 lac
                 </label>
                 <label class="radio-inline tech">
                   <input type="radio" name="refin31"  id="refin312" value="1-2"> 01 to 2 lac
                 </label>
                 <label class="radio-inline tech">
                   <input type="radio" name="refin31"  id="refin325" value="2-5"> 02 to 5 lac
                 </label>
                 <label class="radio-inline tech">
                   <input type="radio" name="refin31"  id="refin357" value="5-7"> 05 to 7 lac
                 </label>
                 <label class="radio-inline tech">
                   <input type="radio" name="refin31"  id="refin3710" value="7-10"> 7 to 10 lac
                 </label>
                 <label class="radio-inline tech">
                   <input type="radio" name="refin31"  id="refin31015" value="10-15"> 10 to 15 lac
                 </label>
                 <label class="radio-inline tech">
                   <input type="radio" name="refin31"  id="refin31525" value="15-25"> 15 to 25 lac
                 </label>
                 <label class="radio-inline tech">
                   <input type="radio" name="refin31"  id="refin32550" value="25-50"> 25 to 50 lac
                 </label>
                 <label class="radio-inline tech">
                   <input type="radio" name="refin31"  id="refin3-50" value=">50"> Above 50 lac
                 </label>
                 </div>

                  <div class="re-bg"><div class="rea"><a data-toggle="collapse" href="#tech5" aria-expanded="true" >
                  Jobs by Education <div class="caret text-right"></div>
                 </a></div></div>
                  <div class="collapse" id="tech5">

                     <label class="checkbox-inline tech">
                     <input type="checkbox"  value="Any Bachelor" name="refin51[]" id="refin5any"> Any Bachelor
                     </label>

                     <label class="checkbox-inline tech">
                     <input type="checkbox"  value="Masters" name="refin51[]" id="refin5anypg"> Any Postgraduate
                     </label>


                     <label class="checkbox-inline tech">
                     <input type="checkbox"  value="Not required" name="refin51[]" id="refin5notreq"> Graduate not required
                     </label>

                     <label class="checkbox-inline tech">
                     <input type="checkbox"  value="Diploma" name="refin51[]" id="refin5pgnrq"> Diploma
                     </label>

                     <label class="checkbox-inline tech">
                     <input type="checkbox"  value="Doctorate" name="refin51[]" id="refin5doctorate"> Doctorate
                     </label>


                     <label class="checkbox-inline tech">
                     <input type="checkbox"  value="MBA/PGDM" name="refin51[]" id="refin5mba"> MBA / PGDM
                     </label>

                     <label class="checkbox-inline tech">
                     <input type="checkbox"  value="B.A/B.Com" name="refin51[]" id="refin5BA"> B.A / B.Com
                     </label>

                     <label class="checkbox-inline tech">
                     <input type="checkbox"  value="B.Sc/BCA" name="refin51[]" id="refin5bsc"> B.Sc / BCA
                     </label>
                     <label class="checkbox-inline tech">
                     <input type="checkbox"  value="M.Sc/MCA" name="refin51[]" id="refin5msc"> M.Sc / MCA
                     </label>

                 </div>

                  <div class="re-bg"><div class="rea"><a data-toggle="collapse" href="#tech6" aria-expanded="true">
                  Employer Type<div class="caret text-right"></div>
                 </a></div></div>
                  <div class="collapse" id="tech6">
                  <label class="checkbox-inline tech">
                     <input type="checkbox"  value="Company" name="emptype[]" id="emptype"> Company
                     </label>
                     <label class="checkbox-inline tech">
                     <input type="checkbox"  value="Consultant" name="emptype[]" id="emptype"> Consultant
                     </label>
                 </div>


                   <div class="text-center"> <input class="btn-blue btn" value="Submit " type="submit" name="refinesrch3"></div>
                 </form>

                </div>
             </div>

             <div class="create-job">
                <div class="create-job-head">
                 <h3> Find Job For</h3>
                </div>
                <div class="create-job-content">
                  <div class="job-li-title">Designations</div>
                   <div class="job-li">

                         <div class="job-li"><a href="jobsearch.php?area=309"> Technical Writer</a></li></div>



                         <div class="job-li"><a href="jobsearch.php?area=254"> Legal Services - Manager</a></li></div>



                         <div class="job-li"><a href="jobsearch.php?area=330"> Forklift Operator</a></li></div>



                         <div class="job-li"><a href="jobsearch.php?area=91"> Studio Operation Manager</a></li></div>



                         <div class="job-li"><a href="jobsearch.php?area=345"> gdfgdf</a></li></div>



                         <div class="job-li"><a href="jobsearch.php?area=343"> it software- application programming / maintenance</a></li></div>



                         <div class="job-li"><a href="jobsearch.php?area=212"> Chief Chef</a></li></div>



                         <div class="job-li"><a href="jobsearch.php?area=250"> Legal Adviser</a></li></div>



                     </div>
                     <div class="job-li-title">Skills</div>
                   <div class="job-li">

                           <div class="job-li"><a href="jobsearch.php?skill=44"> Strategy / Management Consulting Firms</a></div>

                           <div class="job-li"><a href="jobsearch.php?skill=50"> IT-ERP-Oracle</a></div>

                           <div class="job-li"><a href="jobsearch.php?skill=36"> Marketing/Sales</a></div>

                           <div class="job-li"><a href="jobsearch.php?skill=56"> Construction</a></div>

                           <div class="job-li"><a href="jobsearch.php?skill=45"> Others</a></div>

                           <div class="job-li"><a href="jobsearch.php?skill=34"> Law Enforcement/Security</a></div>

                           <div class="job-li"><a href="jobsearch.php?skill=46"> test cate</a></div>

                           <div class="job-li"><a href="jobsearch.php?skill=35"> Legal/Law</a></div>

                     </div>

                </div>
             </div>


            </div><!--col-md-2-->

                <div class="col-md-7">
                    <div class=" tab-content " >
                        <div class="col-md-8" >
                            <form class="form-inline" method='GET'>
                                <div class="form-group ">
                                    <label >Sort by </label>
                                    <select class="form-control input-sm " name="view_ord" id="view_ord" onchange='sortit(this.value);'>
                                        <option  value="ASC" >Ascending </option>
                                        <option  value="DESC">Descending</option>
                                    </select>

                                </div>
                                <div class="form-group select-arrow">
                                    <label >Show</label>
                                    <select class="form-control input-sm" name="view_num" id="view_num" onchange='sortcount(this.value);'>
                                        <option  value="5">5</option>
                                        <option selected="selected" value="10">10</option>
                                        <option  value="15">15</option></select>
                                </div>
                            </form>
                        </div>  <!--list-bga-->
                    </div>


                    <div class=" m10 li-he">
                        <div class="media jobmbg">
                            <div class="media-body">
                                <div class="col-md-10">
                                    <h4 class="media-heading"><a href="job-detail-page.html?jid=31527834595" target="_blank">Abroad Opportunities | Manager - Sales & Marketing</a></h4>
                                    <small><em>CN Immigration Services Pvt. Ltd</em></small>
                                </div>
                                <div class="col-md-2">
                                    <!-- <div class="save-job">
                                                                                    <a href="javascript:;" onclick="alert('Please Login to Save')"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                                </div> -->
                                    <!--<div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                </div>
                                <div class="entry-meta mtop40">
                                    <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <span class="entry-date">
											   Sirsa												 </span></span>
                                        <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard">1-8 YRS </span></span>

                                        <span class="comments-link"><!--<i class="fa fa-inr"></i>--> 1,00,000 - 12,00,000 P.A </span></div>
                                    <div class="col-md-2 text-right">
                                        <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31527834595" target="_blank">Details</a>
                                    </div>
                                </div>
                                <div class="bs-example " data-example-id="horizontal-dl">
                                    <dl class="dl-horizontal">

                                        <dt>Industry:</dt>
                                        <dd> Marketing/Sales</dd>
                                        <dt>Key Skills: </dt>
                                        <dd>sales management, marketing, marketing executive, sales manager, sales executive, sales officer, marketing manager, business development manager</dd>
                                        <dt>Job Description:  </dt>                                             <dd>Marketing managers establish distribution networks for products and services, initiate market resear</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div><!--job-list-bg-->

                    <div class=" m10 li-he">
                        <div class="media jobmbg">
                            <div class="media-body">
                                <div class="col-md-10">
                                    <h4 class="media-heading"><a href="job-detail-page.html?jid=31527835351" target="_blank">Associate Editor ( Magazine / Newspaper / Journals )</a></h4>
                                    <small><em>Sphere TravelMedia & Exhibition Private Limited</em></small>
                                </div>
                                <div class="col-md-2">
                                    <!-- <div class="save-job">
                                                                                    <a href="javascript:;" onclick="alert('Please Login to Save')"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                                </div> -->
                                    <!--<div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                </div>
                                <div class="entry-meta mtop40">
                                    <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <span class="entry-date">
											   Karveripakkam												 </span></span>
                                        <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard">0-10 YRS </span></span>

                                        <span class="comments-link"><!--<i class="fa fa-inr"></i>--> 1,00,000 - 10,00,000 P.A </span></div>
                                    <div class="col-md-2 text-right">
                                        <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31527835351" target="_blank">Details</a>
                                    </div>
                                </div>
                                <div class="bs-example " data-example-id="horizontal-dl">
                                    <dl class="dl-horizontal">

                                        <dt>Industry:</dt>
                                        <dd> Media/Journalism</dd>
                                        <dt>Key Skills: </dt>
                                        <dd>editorial proof, reading editing, magazines, social media, creative writing, journalism reader, transcription ,proofer, language editing blogs, sub editing, article writing</dd>
                                        <dt>Job Description:  </dt>                                             <dd>Selecting content, writing and editing for the magazine\\r\\nEnsuring content is replete with accura</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div><!--job-list-bg-->

                    <div class=" m10 li-he">
                        <div class="media jobmbg">
                            <div class="media-body">
                                <div class="col-md-10">
                                    <h4 class="media-heading"><a href="job-detail-page.html?jid=31527832748" target="_blank">Associate Vice President - Talent Acquisition - IT/BPO/KPO</a></h4>
                                    <small><em>Client of Antrors HR Solutions</em></small>
                                </div>
                                <div class="col-md-2">
                                    <!-- <div class="save-job">
                                                                                    <a href="javascript:;" onclick="alert('Please Login to Save')"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                                </div> -->
                                    <!--<div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                </div>
                                <div class="entry-meta mtop40">
                                    <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <span class="entry-date">
											   Dhanbad												 </span></span>
                                        <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard">2-10 YRS </span></span>

                                        <span class="comments-link"><!--<i class="fa fa-inr"></i>--> 6,00,000 - 16,00,000 P.A </span></div>
                                    <div class="col-md-2 text-right">
                                        <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31527832748" target="_blank">Details</a>
                                    </div>
                                </div>
                                <div class="bs-example " data-example-id="horizontal-dl">
                                    <dl class="dl-horizontal">

                                        <dt>Industry:</dt>
                                        <dd> IT - BPO</dd>
                                        <dt>Key Skills: </dt>
                                        <dd>mass recruitment, talent ,acquisition hiring, it training ,continuous ,improvement ,customer satisfaction ,Recruitment.</dd>
                                        <dt>Job Description:  </dt>                                             <dd>- The individual would be required to manage the TA Team & Hiring for the BPO & KPO Business of the </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div><!--job-list-bg-->

                    <div class=" m10 li-he">
                        <div class="media jobmbg">
                            <div class="media-body">
                                <div class="col-md-10">
                                    <h4 class="media-heading"><a href="job-detail-page.html?jid=31530526424" target="_blank">Associative Vice President</a></h4>
                                    <small><em>php script mall</em></small>
                                </div>
                                <div class="col-md-2">
                                    <!-- <div class="save-job">
                                                                                    <a href="javascript:;" onclick="alert('Please Login to Save')"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                                </div> -->
                                    <!--<div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                </div>
                                <div class="entry-meta mtop40">
                                    <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <span class="entry-date">
											   												 </span></span>
                                        <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard">15-13 YRS </span></span>

                                        <span class="comments-link"><!--<i class="fa fa-inr"></i>--> 4,00,000 - 9,00,000 P.A </span></div>
                                    <div class="col-md-2 text-right">
                                        <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31530526424" target="_blank">Details</a>
                                    </div>
                                </div>
                                <div class="bs-example " data-example-id="horizontal-dl">
                                    <dl class="dl-horizontal">

                                        <dt>Industry:</dt>
                                        <dd> Management</dd>
                                        <dt>Key Skills: </dt>
                                        <dd>Associative Vice President</dd>
                                        <dt>Job Description:  </dt>                                             <dd>Associative Vice President.</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div><!--job-list-bg-->

                    <div class=" m10 li-he">
                        <div class="media jobmbg">
                            <div class="media-body">
                                <div class="col-md-10">
                                    <h4 class="media-heading"><a href="job-detail-page.html?jid=31527833317" target="_blank">BPO / KPO / CCE / Process Associate / Technical Support / CSA</a></h4>
                                    <small><em>Creative Hands HR Consultancy</em></small>
                                </div>
                                <div class="col-md-2">
                                    <!-- <div class="save-job">
                                                                                    <a href="javascript:;" onclick="alert('Please Login to Save')"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                                </div> -->
                                    <!--<div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                </div>
                                <div class="entry-meta mtop40">
                                    <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <span class="entry-date">
											   Pondicherry												 </span></span>
                                        <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard">2-8 YRS </span></span>

                                        <span class="comments-link"><!--<i class="fa fa-inr"></i>--> 1,00,000 - 45,00,000 P.A </span></div>
                                    <div class="col-md-2 text-right">
                                        <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31527833317" target="_blank">Details</a>
                                    </div>
                                </div>
                                <div class="bs-example " data-example-id="horizontal-dl">
                                    <dl class="dl-horizontal">

                                        <dt>Industry:</dt>
                                        <dd> KPO/Technical Support</dd>
                                        <dt>Key Skills: </dt>
                                        <dd>bpo, kpo customer ,service, non voice, cce mnc, technical support, voice process, Call Center, google ibm, microsoft, genpact ,hp, dell</dd>
                                        <dt>Job Description:  </dt>                                             <dd>Hiring For Worlds Best International MNC for Jaipur & Indore locationGuest HouseRelocation BonusTick</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div><!--job-list-bg-->

                    <div class=" m10 li-he">
                        <div class="media jobmbg">
                            <div class="media-body">
                                <div class="col-md-10">
                                    <h4 class="media-heading"><a href="job-detail-page.html?jid=31527838551" target="_blank">Immediate Requirement of Marketing Executive at Nagpur</a></h4>
                                    <small><em>Podar Education Network Pvt Ltd</em></small>
                                </div>
                                <div class="col-md-2">
                                    <!-- <div class="save-job">
                                                                                    <a href="javascript:;" onclick="alert('Please Login to Save')"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                                </div> -->
                                    <!--<div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                </div>
                                <div class="entry-meta mtop40">
                                    <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <span class="entry-date">
											   Serchhip												 </span></span>
                                        <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard">0-10 YRS </span></span>

                                        <span class="comments-link"><!--<i class="fa fa-inr"></i>--> 2,00,000 - 10,00,000 P.A </span></div>
                                    <div class="col-md-2 text-right">
                                        <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31527838551" target="_blank">Details</a>
                                    </div>
                                </div>
                                <div class="bs-example " data-example-id="horizontal-dl">
                                    <dl class="dl-horizontal">

                                        <dt>Industry:</dt>
                                        <dd> Marketing/Sales</dd>
                                        <dt>Key Skills: </dt>
                                        <dd>leaflets posters ,marketing campaigns, advertising market, research newsletters, cold calling, events ,exhibitions, marketing, executive business development, education institutional, marketing target, courses brochure</dd>
                                        <dt>Job Description:  </dt>                                             <dd>Effective communication.Target Oriented Target centered.Eye for details.Well versed in computing.Lia</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div><!--job-list-bg-->

                    <div class=" m10 li-he">
                        <div class="media jobmbg">
                            <div class="media-body">
                                <div class="col-md-10">
                                    <h4 class="media-heading"><a href="job-detail-page.html?jid=31527833049" target="_blank">IT- Application- Oracle ERP.</a></h4>
                                    <small><em>Executive Tracks Associates (P) Ltd.</em></small>
                                </div>
                                <div class="col-md-2">
                                    <!-- <div class="save-job">
                                                                                    <a href="javascript:;" onclick="alert('Please Login to Save')"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                                </div> -->
                                    <!--<div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                </div>
                                <div class="entry-meta mtop40">
                                    <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <span class="entry-date">
											   Aduthurai alias maruthuvakudi												 </span></span>
                                        <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard">0-6 YRS </span></span>

                                        <span class="comments-link"><!--<i class="fa fa-inr"></i>--> 1,00,000 - 11,00,000 P.A </span></div>
                                    <div class="col-md-2 text-right">
                                        <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31527833049" target="_blank">Details</a>
                                    </div>
                                </div>
                                <div class="bs-example " data-example-id="horizontal-dl">
                                    <dl class="dl-horizontal">

                                        <dt>Industry:</dt>
                                        <dd> IT-ERP-Oracle</dd>
                                        <dt>Key Skills: </dt>
                                        <dd>erp,oracle</dd>
                                        <dt>Job Description:  </dt>                                             <dd>We have an opening with a well reputed Auto MNC for the position of IT Application.Location:Ahmedaba</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div><!--job-list-bg-->

                    <div class=" m10 li-he">
                        <div class="media jobmbg">
                            <div class="media-body">
                                <div class="col-md-10">
                                    <h4 class="media-heading"><a href="job-detail-page.html?jid=31527846358" target="_blank">Junior Engineering Assistant Grade II - Production</a></h4>
                                    <small><em>Inet-Solution</em></small>
                                </div>
                                <div class="col-md-2">
                                    <!-- <div class="save-job">
                                                                                    <a href="javascript:;" onclick="alert('Please Login to Save')"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                                </div> -->
                                    <!--<div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                </div>
                                <div class="entry-meta mtop40">
                                    <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <span class="entry-date">
											   Soledad												 </span></span>
                                        <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard">0-9 YRS </span></span>

                                        <span class="comments-link"><!--<i class="fa fa-inr"></i>--> 1,00,000 - 10,00,000 P.A </span></div>
                                    <div class="col-md-2 text-right">
                                        <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31527846358" target="_blank">Details</a>
                                    </div>
                                </div>
                                <div class="bs-example " data-example-id="horizontal-dl">
                                    <dl class="dl-horizontal">

                                        <dt>Industry:</dt>
                                        <dd> Production/Manufacturing/Maintenance</dd>
                                        <dt>Key Skills: </dt>
                                        <dd>Maintanance</dd>
                                        <dt>Job Description:  </dt>                                             <dd>Junior Engineering Assistant Grade II/ Fireman job opportunities in National Fertilizers Limited\\r\</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div><!--job-list-bg-->

                    <div class=" m10 li-he">
                        <div class="media jobmbg">
                            <div class="media-body">
                                <div class="col-md-10">
                                    <h4 class="media-heading"><a href="job-detail-page.html?jid=31527833800" target="_blank">Legal Associate - Bombay High Court Litigation ( For Law Firm )</a></h4>
                                    <small><em>OASIS</em></small>
                                </div>
                                <div class="col-md-2">
                                    <!-- <div class="save-job">
                                                                                    <a href="javascript:;" onclick="alert('Please Login to Save')"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                                </div> -->
                                    <!--<div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                </div>
                                <div class="entry-meta mtop40">
                                    <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <span class="entry-date">
											   Nongpoh												 </span></span>
                                        <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard">1-10 YRS </span></span>

                                        <span class="comments-link"><!--<i class="fa fa-inr"></i>--> 1,00,000 - 10,00,000 P.A </span></div>
                                    <div class="col-md-2 text-right">
                                        <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31527833800" target="_blank">Details</a>
                                    </div>
                                </div>
                                <div class="bs-example " data-example-id="horizontal-dl">
                                    <dl class="dl-horizontal">

                                        <dt>Industry:</dt>
                                        <dd> Legal/Law</dd>
                                        <dt>Key Skills: </dt>
                                        <dd>Legal Litigation Arbitration Drafting Law Writs Tribunals High Court Suits Llb Appeals court Advocate associate firm mumbai cooperate appeal</dd>
                                        <dt>Job Description:  </dt>                                             <dd>Appearances in Bombay High Court, Arbitration Tribunals, Appellate Tribunals and other quasi-judicia</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div><!--job-list-bg-->

                    <div class=" m10 li-he">
                        <div class="media jobmbg">
                            <div class="media-body">
                                <div class="col-md-10">
                                    <h4 class="media-heading"><a href="job-detail-page.html?jid=31527834957" target="_blank">Manager Media Sales (print & Digital) - Grehlakshmi & Cricket Today</a></h4>
                                    <small><em>Diamond Magazines P Ltd</em></small>
                                </div>
                                <div class="col-md-2">
                                    <!-- <div class="save-job">
                                                                                    <a href="javascript:;" onclick="alert('Please Login to Save')"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                                                </div> -->
                                    <!--<div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
                                </div>
                                <div class="entry-meta mtop40">
                                    <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
											   <span class="entry-date">
											   Gopalasamudram												 </span></span>
                                        <span class="byline"> <i class="icon-suitcase"></i> <span class="author vcard">1-10 YRS </span></span>

                                        <span class="comments-link"><!--<i class="fa fa-inr"></i>--> 2,00,000 - 14,00,000 P.A </span></div>
                                    <div class="col-md-2 text-right">
                                        <a class="btn-blue btn" style="color:#FFFFFF" href="job-detail-page.html?jid=31527834957" target="_blank">Details</a>
                                    </div>
                                </div>
                                <div class="bs-example " data-example-id="horizontal-dl">
                                    <dl class="dl-horizontal">

                                        <dt>Industry:</dt>
                                        <dd> Media </dd>
                                        <dt>Key Skills: </dt>
                                        <dd>advertising, sales business ,development ,media sales, franchise, india group ,world wide ,media, hindustan hindustan, times dainik, jagran, dainik ,bhaskar, space selling ,digital sales</dd>
                                        <dt>Job Description:  </dt>                                             <dd>Diamond Group is looking for candidates with extensive experience in Print & digital ad space sellin</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div><!--job-list-bg-->


                    <div class=" tab-content">
                        <div class='newpagination'> <span class'current'>1</span>  <a class="link" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.html?sch=4&page=2&">2</a>  <a class="link" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.html?sch=4&page=3&">3</a>  <a class="navlink" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.html?sch=4&page=2&">[Next]</a>  <a class="navlink" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.html?sch=4&page=3&">[Last]</a> </div>                     </div>


                </div><!--col-md-7-->
                <div class="col-md-3">
                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Create Your Job Alert</h3>
                        </div>
                        <div class="create-job-content">
                            <p>
                                Specify your criteria and Regularly receive jobs of your choice
                                Be the first to apply for these jobs Stay updated about the job market.</p>
                            <div class="ali-right"><input class="btn-blue btn" data-toggle="modal" data-target="#createjob" value="Create Now" type="button"></div>
                        </div>
                    </div><!--create-job-->

                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Recruiters </h3>
                        </div>
                        <div class="create-job-content">
                            <p> Connect to recruiters directly. More than 50,000 Recruiter across Industries.</p>
                            <div class="ali-right">  <a href="recruiter-listing.html" class="btn-blue btn" >View All<a></div>
                        </div>
                    </div><!--create-job-->


                    <!--<div class="career-services">
                       <div class="career-services-head">
                         <h3>Career Services</h3>
                       </div>
                        <div class="all-category">
                            <ul>
                             <li><a href="">Featured Service</a></li>
                             <li><a href="">Speak to HR Expert</a></li>
                             <li><a href="">Resume Spotlight</a></li>
                             <li><a href="">Career Guidence</a></li>
                             <li><a href="">Salary Negotiator</a></li>
                             <li><a href="">Interview Skills </a></li>
                            </ul>
                         </div>
                     </div>--><!--career-services-->

                    <!--<div class="career-services">
                       <div class="career-services-head">
                         <h3>Premium Service</h3>
                       </div>
                        <div class="all-category">
                            <ul>
                             <li><a href="">Resume Writing</a></li>
                             <li><a href="">Background Verification</a></li>
                             <li><a href="">Aptitude Test</a></li>
                             <li><a href="">Jobs for You</a></li>

                            </ul>
                         </div>
                     </div>-->


                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Featured Companies </h3>
                        </div>
                        <div class="create-job-content">
                            <div class="fea-compa"><a href="#"> <img src="images/featured-companie-1.jpg" alt="featured-companie"></a></div>
                            <div class="fea-compa"><a href="#"> <img src="images/featured-companie-2.jpg" alt="featured-companie"></a></div>
                            <div class="fea-compa"><a href="#"> <img src="images/featured-companie-3.jpg" alt="featured-companie"></a></div>
                            <div class="fea-compa"><a href="#"> <img src="images/featured-companie-4.jpg" alt="featured-companie"></a></div>
                            <div class="fea-compa"><a href="#"> <img src="images/featured-companie-5.jpg" alt="featured-companie"></a></div>
                            <div class="fea-compa"><a href="#"> <img src="images/featured-companie-6.jpg" alt="featured-companie"></a></div>
                        </div>
                    </div><!--create-job-->

                    <div class="openings">
                        <a href="#"><img src="images/mg-group.jpg" alt="ads"></a>
                    </div><!--openings-->

                </div><!--col-md-3-->

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
<script language="javascript">
    function refine1validate() {

        var refkeyword=document.getElementById('refkeyword').value;
        var reflocation=document.getElementById('reflocation').value;
//alert(reflocation);
        if(refkeyword=='' && reflocation=='')
        {
            alert("Enter your detaile to search");
            document.getElementById('refkeyword').focus();
            return false;
        }
    }
</script>
<script type="text/javascript" src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/job.js"> </script>
<script type="text/javascript">
    function save_job(id,seeker_id)
    {
//alert(id);
        $.ajax({
            type: "POST",
            url: "http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//ajax_save_jobs.php",
            async:false,
            data: "id="+id+"&seeker_id="+seeker_id,
            success: function(msg){
                alert(msg);
                //window.location='http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/search.html';
            }
        });
    }


    function sortit(val){
        window.location = "http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.html?sch=4&sortby="+val;
    }

    function sortcount(val){
        window.location = "http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsearch_all.html?sch=4&view_num="+val;
    }
</script>
