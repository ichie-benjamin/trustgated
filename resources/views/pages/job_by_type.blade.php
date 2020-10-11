@extends('layouts.master')

@section('content')
    
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

@endsection