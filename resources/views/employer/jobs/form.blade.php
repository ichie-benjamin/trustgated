<div class="row">
    <div class="top-emp-center">
        <h4>Job Details</h4>
        <center><p style='color:red'></p></center>
    </div><br />
    <div class="col-md-9">
        <div class="form-group">
            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Company :</label>
            <div class="col-sm-8">
                <select class="form-control" required id="company_id" name="company_id">
                    @foreach ($companies as $key => $company)
                        <option value="{{ $key }}" {{ old('company_id', optional($job)->company_id) == $key ? 'selected' : '' }}>
                            {{ $company }}
                        </option>
                    @endforeach
                </select>
                {!! $errors->first('company_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div><!--form-group-->
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Job Post Type :</label>
            <div class="col-sm-8">
                <select class="form-control" id="premium" name="type_id">
                    <option value="">Select One</option>
                    <option value="3" >Job Posting Offer</option>
                    <option value="4" >Silver Job Posting</option>
                    <option value="5" >Web Developer</option>
                </select>
                {!! $errors->first('type_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div><!--form-group-->
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Job Title / Designation:</label>
            <div class="col-sm-8">
                <input required type="text" name="title" id="title" class="form-control" value="{{ old('title', optional($job)->title) }}" style=""/>
                {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
            </div>
        </div><!--col-md-6-->
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Job Description:</label>
            <div class="col-sm-8">
                                        <textarea required class="form-control" name="description" id="description" onBlur="chk_length(this.value,'2000');" rows="3">
                                            {{ old('description', optional($job)->description) }}
                                        </textarea>
                <br><span style="color:#646464" >Maximum 2000 charecters.</span>
                {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
            </div>
        </div><!--col-md-6-->
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label class="col-sm-4 pedit"><span class="red-star">*</span>Industry :</label>
            <div class="col-sm-6">
                <select required class="form-control" name="industry_id" id="industry_id">
                    <option value="">Select One</option>
                    <option value="56" >Construction</option>
                    <option value="53" >IT - BPO</option>
                    <option value="50" >IT-ERP-Oracle</option>
                    <option value="42" >KPO/Technical Support</option>
                    <option value="34" >Law Enforcement/Security</option>
                    <option value="35" >Legal/Law</option>
                    <option value="55" >Management</option>
                    <option value="36" >Marketing/Sales</option>
                    <option value="52" >mech</option>			<option value="51" >Media </option>			<option value="37" >Media/Journalism</option>			<option value="54" >NGO/Social Services</option>			<option value="45" >Others</option>			<option value="38" >Production/Manufacturing/Maintenance</option>			<option value="44" >Strategy / Management Consulting Firms</option>			<option value="46" >test cate</option>			<option value="40" >Tours and Travel/Airline</option>			<option value="41" >Transportation/Logistics</option>                                    </select>

            </div>
            <div class="col-sm-2">
                <label class="checkbox-inline pedit">
                    <input type="checkbox" name="walkin" id="walkin" value="1"  onClick="walkin_date();" /> <label for="walkin" class="pdl5">Walkins</label>
                </label>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Functional area :</label>
            <div class="col-sm-8">
                <select class="form-control select" name="functional_area" id="functional_area" required>
                    <option value="" > -- Select Category -- </option>
                    <option value="340" >Accessory Designer</option>
                    <option value="99" >Accountant</option>
                    <option value="73" >Accounts Assistant</option>
                    <option value="241" >Accounts Manager</option>
                    <option value="339" >AD</option>
                    <option value="154" >Administration</option>
                    <option value="316" >Air Hostess/Steward/Cabin Crew</option>
                    <option value="183" >Anaesthetist</option>
                    <option value="83" >Animator</option>
                    <option value="176" >Apparel / Garment Designer</option>
                    <option value="136" >Architects</option>
                    <option value="272" >Art Director</option>
                    <option value="258" >Asst. Sales Manager</option>
                    <option value="159" >Autocad Draughtman/Designer</option>
                    <option value="84" >AV Executive</option>
                    <option value="100" >Bank Assurance</option>
                    <option value="101" >Banking - General</option>
                    <option value="211" >Banquet Manager</option>
                    <option value="184" >Beautician</option>
                    <option value="185" >Bio-Technology Research</option>
                    <option value="317" >Branch Head</option>
                    <option value="259" >Branch Manager</option>
                    <option value="286" >Building Inspection</option>
                    <option value="260" >Business Analyst</option>
                    <option value="261" >Business Development Executives</option>
                    <option value="273" >Cameraman</option>
                    <option value="327" >Cargo</option>
                    <option value="137" >Carpenter</option>
                    <option value="74" >Chartered Accountant</option>
                    <option value="186" >Chemical Research Scientist</option>
                    <option value="187" >Chemist</option>
                    <option value="341" >chennai</option>
                    <option value="212" >Chief Chef</option>
                    <option value="160" >Chief Engineer</option>
                    <option value="161" >Civil Engineer</option>
                    <option value="102" >Clerk/Office Boy</option>
                    <option value="247" >Company Secretary</option>
                    <option value="293" >Computer Operator/Data Entry</option>
                    <option value="124" >Configuration Manager</option>
                    <option value="350" >Construction</option>
                    <option value="138" >Construction Manager</option>
                    <option value="274" >Content Developer</option>
                    <option value="139" >Controller</option>
                    <option value="275" >Correspondent/Reporter</option>
                    <option value="75" >Cost Accountant</option>
                    <option value="155" >Councellor</option>
                    <option value="328" >Courier/Delivery</option>
                    <option value="140" >Crane Operator</option>
                    <option value="262" >Customer Relationship Officer</option>
                    <option value="112" >Customer Service Executive (Non Voice)</option>
                    <option value="113" >Customer Service Executive (Voice)</option>
                    <option value="162" >Customer Service/Tech. Support</option>
                    <option value="223" >Data Entry/Computer Operator</option>
                    <option value="114" >Data Processing Executive</option>
                    <option value="125" >Database Administrator</option>
                    <option value="298" >Database Programmer</option>
                    <option value="297" >DBA</option>
                    <option value="188" >Dentist</option>
                    <option value="189" >Dietician</option>
                    <option value="329" >Dockworker</option>
                    <option value="190" >Doctor</option>
                    <option value="318" >Documentation and Visa</option>
                    <option value="319" >Domestic Travel</option>
                    <option value="191" >ECG/CGA Technician</option>
                    <option value="163" >Electrical Engineer</option>
                    <option value="141" >Electrician</option>
                    <option value="164" >Engineer</option>
                    <option value="143" >Equipment Operator</option>
                    <option value="103" >Equity Analyst</option>
                    <option value="85" >Event Coordinator</option>
                    <option value="86" >Event/Promotios Manager</option>
                    <option value="76" >External Auditor</option>
                    <option value="213" >F & B Manager</option>
                    <option value="126" >Faculty</option>
                    <option value="77" >Finance Assistant</option>
                    <option value="165" >Foreman</option>
                    <option value="330" >Forklift Operator</option>
                    <option value="214" >Front Office Executive</option>
                    <option value="345" >gdfgdf</option>
                    <option value="263" >GM- Marketing</option>
                    <option value="294" >Graphic Designer /Animator</option>
                    <option value="320" >Ground Staff</option>
                    <option value="127" >H/W Installation / Maintenance Engg</option>
                    <option value="128" >Hardware Design Technical Leader</option>
                    <option value="347" >having 7 years exp. as a professional medical representative with flaring formulation, abbott health</option>
                    <option value="144" >Heavy Equipment Operator</option>
                    <option value="215" >Hostess</option>
                    <option value="193" >House Keeping</option>
                    <option value="216" >House Keeping Executive</option>
                    <option value="225" >HR Executive / Recruiter</option>
                    <option value="226" >HR Manager</option>
                    <option value="129" >Instructional Designer</option>
                    <option value="104" >Insurance / Financial Advisor</option>
                    <option value="105" >Insurance Telesales</option>
                    <option value="166" >Interior Designer</option>
                    <option value="78" >Internal Auditor</option>
                    <option value="343" >it software- application programming / maintenance</option>
                    <option value="346" >IT-ERP- Business Analyst</option>
                    <option value="177" >Jewellery Designer</option>
                    <option value="217" >Kitchen Manager</option>
                    <option value="194" >Lab Technician</option>
                    <option value="146" >Laborer</option>
                    <option value="248" >Law Officer</option>
                    <option value="249" >Lawyer</option>
                    <option value="250" >Legal Adviser</option>
                    <option value="251" >Legal Assistant</option>
                    <option value="252" >Legal Consultant</option>
                    <option value="253" >Legal Editor</option>
                    <option value="254" >Legal Services - Manager</option>
                    <option value="156" >Librarian</option>
                    <option value="331" >Logistics Manager</option>
                    <option value="235" >Machine Operator</option>
                    <option value="236" >Machinist</option>
                    <option value="237" >Maintenance Supervisor</option>
                    <option value="321" >Management Trainee</option>
                    <option value="322" >Manager</option>
                    <option value="79" >Manager - Accounts</option>
                    <option value="80" >Manager- Finance Planning</option>
                    <option value="228" >Manager/Co-ordinator</option>
                    <option value="264" >Marketing Executives</option>
                    <option value="265" >Marketing Manager</option>
                    <option value="167" >Mechanical Engineer</option>
                    <option value="238" >Mechanical Technician</option>
                    <option value="89" >Media Planning - Manager / Executive</option>
                    <option value="195" >Medical Assistant</option>
                    <option value="196" >Medical Representative</option>
                    <option value="115" >Medical Transcriptionist</option>
                    <option value="197" >Medical Writer</option>
                    <option value="179" >Merchandiser</option>
                    <option value="198" >Microbiologist</option>
                    <option value="148" >Mining</option>
                    <option value="107" >Mutual Funds</option>
                    <option value="130" >Network Administrator</option>
                    <option value="131" >Network Designer</option>
                    <option value="295" >Network Engineer</option>
                    <option value="278" >News Editor</option>
                    <option value="279" >News Reador</option>
                    <option value="199" >Nurse</option>
                    <option value="200" >Nutritionist</option>
                    <option value="323" >Office Assistant</option>
                    <option value="229" >Office Secretary/AdminOfficer</option>
                    <option value="287" >Officer</option>
                    <option value="108" >Operations</option>
                    <option value="332" >Operations Management</option>
                    <option value="201" >Opthamologist</option>
                    <option value="296" >Oracle Developer</option>
                    <option value="132" >Other</option>
                    <option value="149" >Painter</option>
                    <option value="256" >Patent</option>
                    <option value="203" >Pharmaceutical Research</option>
                    <option value="204" >Pharmacist</option>
                    <option value="300" >Photoshop</option>
                    <option value="205" >Physician</option>
                    <option value="206" >Physiotherapist</option>
                    <option value="150" >Plumber</option>
                    <option value="288" >Process Engineer</option>
                    <option value="122" >Process Engineers</option>
                    <option value="281" >Production Manager</option>
                    <option value="289" >Production Quality Assurance</option>
                    <option value="301" >Programmer</option>
                    <option value="169" >Project Manager</option>
                    <option value="282" >Proof Reader</option>
                    <option value="257" >Proof Reader (Law)</option>
                    <option value="207" >Public Health Administration</option>
                    <option value="231" >Public Relation Officer</option>
                    <option value="312" >QA</option>
                    <option value="290" >Quality Assurance Engineer</option>
                    <option value="291" >Quality Assurance Manager</option>
                    <option value="292" >Quality Control Inspector</option>
                    <option value="208" >Radiographer</option>
                    <option value="232" >Receptionist/Front Office Executive</option>
                    <option value="109" >Relationship Manager</option>
                    <option value="239" >Repairman</option>
                    <option value="325" >Reservation and Ticketing</option>
                    <option value="219" >Reservation Manager</option>
                    <option value="220" >Restaurant Manager</option>
                    <option value="151" >Roofing</option>
                    <option value="170" >Safety Officer</option>
                    <option value="268" >Sales Executives</option>
                    <option value="269" >Sales Manager</option>
                    <option value="97" >Sales/Marketing Executive</option>
                    <option value="209" >Scientist</option>
                    <option value="243" >Security Guard</option>
                    <option value="240" >Security Installation</option>
                    <option value="221" >Security Manager</option>
                    <option value="333" >Shipping And Receiving</option>
                    <option value="245" >Site Manager</option>
                    <option value="304" >Software Application Developer</option>
                    <option value="305" >Software Engineer</option>
                    <option value="222" >Steward/Waiter</option>
                    <option value="180" >Stiching/Tailor</option>
                    <option value="110" >Stock Broking</option>
                    <option value="171" >Store Keeper</option>
                    <option value="91" >Studio Operation Manager</option>
                    <option value="283" >Sub Editor</option>
                    <option value="95" >Supervisor</option>
                    <option value="181" >Supervisor/Officer</option>
                    <option value="172" >Surveyor</option>
                    <option value="306" >System Administrator</option>
                    <option value="133" >System Analyst</option>
                    <option value="303" >System Programmer</option>
                    <option value="81" >Taxation - Manager</option>
                    <option value="157" >Teaching/Professor/Lecturer</option>
                    <option value="117" >Team Leader</option>
                    <option value="308" >Technical Architect</option>
                    <option value="134" >Technical Leader</option>
                    <option value="135" >Technical Support Engineer</option>
                    <option value="118" >Technical Support Executive (Voice)</option>
                    <option value="309" >Technical Writer</option>
                    <option value="173" >Technician</option>
                    <option value="271" >Tele Marketing Executives</option>
                    <option value="119" >Telemarketing Executive</option>
                    <option value="311" >Testing Engineer</option>
                    <option value="182" >Textile Designer</option>
                    <option value="326" >Tour Operator</option>
                    <option value="335" >Train Operator</option>
                    <option value="120" >Trainee/Management Trainee</option>
                    <option value="313" >Trainer</option>
                    <option value="246" >Training Officer</option>
                    <option value="284" >Translator</option>
                    <option value="336" >Transportation Supervisor</option>
                    <option value="233" >Travel/Immigration Coordinator</option>
                    <option value="337" >Truck Driver</option>
                    <option value="234" >Typist</option>
                    <option value="210" >Veterinary</option>
                    <option value="285" >Video Editor</option>
                    <option value="92" >Visualiser- Art Director</option>
                    <option value="121" >Voice & Accent Trainer</option>
                    <option value="338" >Warehouse Worker</option>
                    <option value="314" >Web Designer</option>
                    <option value="315" >Web Developer</option>
                    <option value="153" >Welder</option>
                    <option value="174" >Workman / Foreman / Technician</option>
                </select><div id="functionalinfo"></div>
            </div>
        </div><!--form-group-->
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Job Role :</label>
            <div class="col-sm-8">
                <div id="subcate">
                    <select name="sub_cat" id="sub_cat" class="form-control" >
                        <option value="" > -- Select Sub Category -- </option>
                    </select>
                </div>
            </div>
        </div><!--form-group-->
    </div>
    <div id="expire_date">
        <div class="col-md-9" >
            <div class="form-group">
                <label  class="col-sm-4 pedit"><span class="red-star">*</span>Expire Date :</label>

                <div class="col-sm-8">
                    <input required type="date" name="closing_date" id="closing_date" class="form-control" value="{{ old('closing_date', optional($job)->closing_date) }}" style=""/>
                    {!! $errors->first('closing_date', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="col-sm-1"><!--<i class="fa fa-jpy"></i>--></div>
            </div>
        </div>
    </div>
    <div id="walk_date" style="display:none;">
        <div class="col-md-9">
            <div class="form-group">
                <label  class="col-sm-4 pedit"><span class="red-star">*</span>Walkin Date :  </label>
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

    <div class="col-md-9" >
        <div class="form-group">
            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Keywords :</label>
            <div class="col-sm-8">
                <input required type="text" name="keywords" id="keywords" class="form-control" value="{{ old('keywords', optional($job)->keywords) }}" style=""/>
                {!! $errors->first('keywords', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div><!--col-md-6-->
    <div class="col-md-9">
        <div class="form-group">
            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Country :</label>
            <div class="col-sm-8">
                <select required class="form-control select" name="country" id="country">
                    <option value="">Select Country</option>
                    <option value="Bangladesh" > Bangladesh </option>
                    <option value="India" > India </option>
                    <option value="Pakistan" > Pakistan </option>
                </select>
            </div>
        </div><!--form-group-->
    </div>

    <div class="col-md-9">
        <div class="form-group">
            <label  class="col-sm-4 pedit"><span class="red-star">*</span>job locations :</label>
            <div class="col-sm-8">
                <select required name="locations[]" id='locations' multiple="multiple" class="form-control select">
                    <option value="">Select Location</option>
                    <option value="1">Agartala</option>
                    <option value="2">Ahmadabad</option>
                    <option value="3">Ahmednagar</option>
                    <option value="4">Aizwal</option>
                    <option value="5">Ajmer</option>
                    <option value="6">Akola</option>
                    <option value="7">Allahabad</option>
                    <option value="8">Alleppey</option>
                    <option value="9">Amer</option>
                    <option value="10">Amravati</option>
                    <option value="11">Amritsar</option>
                    <option value="12">Anakapalle</option>
                    <option value="13">Anantapur</option>
                    <option value="229">ApreÅ¡ov</option>
                    <option value="14">Ara</option>
                    <option value="15">Arakonam</option>
                    <option value="16">Arcot</option>
                    <option value="17">Ariyalur</option>
                    <option value="18">Aruppukkottai</option>
                    <option value="19">Auraiya</option>
                    <option value="20">Aurangabad</option>
                    <option value="21">Aurangabad Chikalthan Aerodrome</option>
                    <option value="22">Balasore</option>
                    <option value="23">Bangalore</option>
                    <option value="24">Barddhaman</option>
                    <option value="25">Basirhat</option>
                    <option value="26">Batala</option>
                    <option value="27">Belgaum/Sambra</option>
                    <option value="28">Benares</option>
                    <option value="29">Bhandara</option>
                    <option value="30">Bhatkal</option>
                    <option value="31">Bhatpara</option>
                    <option value="32">Bhiwandi</option>
                    <option value="33">Bhiwani</option>
                    <option value="34">Bhongir</option>
                    <option value="35">Bhopal</option>
                    <option value="36">Bhubaneshwar</option>
                    <option value="37">Bhuj-Rudramata</option>
                    <option value="38">Bihar</option>
                    <option value="39">Bikaner</option>
                    <option value="40">Bombay</option>
                    <option value="41">Bulandshahr</option>
                    <option value="42">Calcutta</option>
                    <option value="43">Chandigarh</option>
                    <option value="44">Chavakkad</option>
                    <option value="45">Chengelput</option>
                    <option value="46">Chennai</option>
                    <option value="47">Chhapra</option>
                    <option value="48">Chitradurga</option>
                    <option value="49">Chittoor</option>
                    <option value="50">Cochin</option>
                    <option value="51">Coimbatore/Peelamedu</option>
                    <option value="52">Cuddalore</option>
                    <option value="53">Cuttack</option>
                    <option value="54">Daman</option>
                    <option value="55">Daosa</option>
                    <option value="56">Darjiling</option>
                    <option value="57">Daund</option>
                    <option value="58">Dehradun</option>
                    <option value="59">Delhi</option>
                    <option value="60">Dewas</option>
                    <option value="61">Dibrugarh/Mohanbari</option>
                    <option value="62">Dindigul</option>
                    <option value="63">Dindivanam</option>
                    <option value="64">Dispur</option>
                    <option value="65">Dod Ballapur</option>
                    <option value="66">Duraha</option>
                    <option value="67">Elamanchili</option>
                    <option value="68">Erode</option>
                    <option value="69">Etawah</option>
                    <option value="70">Faizabad</option>
                    <option value="71">Faridabad</option>
                    <option value="72">Fatehpur</option>
                    <option value="73">Gadag</option>
                    <option value="74">Gandhinagar</option>
                    <option value="75">Gangtok</option>
                    <option value="76">Gauhati</option>
                    <option value="77">Gaya</option>
                    <option value="78">Ghaziabad</option>
                    <option value="79">Ghazipur</option>
                    <option value="80">Goa/Panjim</option>
                    <option value="81">Godhra</option>
                    <option value="82">Guwahati</option>
                    <option value="83">Gwalior</option>
                    <option value="84">Haora</option>
                    <option value="85">Hisar</option>
                    <option value="86">Hoshiarpur</option>
                    <option value="87">Hyderabad</option>
                    <option value="88">Imphal</option>
                    <option value="89">Indore</option>
                    <option value="90">Itanagar</option>
                    <option value="91">Jabalpur</option>
                    <option value="92">Jagdalpur</option>
                    <option value="93">Jaipur</option>
                    <option value="94">Jaisalmer</option>
                    <option value="95">Jalandhar</option>
                    <option value="96">Jamshedpur</option>
                    <option value="97">Jatni</option>
                    <option value="98">Jaunpur</option>
                    <option value="99">Jharsuguda</option>
                    <option value="100">Jodhpur</option>
                    <option value="101">Kakinada</option>
                    <option value="102">Kalimpang</option>
                    <option value="103">Kalyan</option>
                    <option value="104">Kamthi</option>
                    <option value="105">Kancheepuram</option>
                    <option value="106">Kanpur</option>
                    <option value="107">Kanyakumari</option>
                    <option value="108">Kasaragod</option>
                    <option value="109">Kerala</option>
                    <option value="110">Khadki</option>
                    <option value="111">Khammam</option>
                    <option value="112">Kharagpur</option>
                    <option value="113">Kodaikanal</option>
                    <option value="114">Kohima</option>
                    <option value="115">Kolar</option>
                    <option value="116">Kolhapur</option>
                    <option value="117">Koregaon</option>
                    <option value="118">Kovilpatti</option>
                    <option value="119">Kozhikode</option>
                    <option value="120">Kumbakonam</option>
                    <option value="121">Kumbum</option>
                    <option value="122">Kurnool</option>
                    <option value="123">Kutralam</option>
                    <option value="124">Lucknow</option>
                    <option value="125">Ludhiana</option>
                    <option value="126">M. O. Ranchi</option>
                    <option value="127">Machilipatnam</option>
                    <option value="128">Madurai</option>
                    <option value="129">Mahbubnagar</option>
                    <option value="130">Mahesana</option>
                    <option value="131">Malegaon</option>
                    <option value="132">Mandya</option>
                    <option value="133">Mangalore</option>
                    <option value="134">Mannarkudi</option>
                    <option value="135">Mayiladuthurai</option>
                    <option value="136">Medinipur</option>
                    <option value="137">Meerut</option>
                    <option value="138">Mhow</option>
                    <option value="139">Minicoy</option>
                    <option value="140">Mirzapur</option>
                    <option value="141">Moga</option>
                    <option value="142">Mumbai</option>
                    <option value="143">Murud</option>
                    <option value="144">Muzaffarnagar</option>
                    <option value="145">Muzaffarpur</option>
                    <option value="146">Nadiad</option>
                    <option value="147">Nagercoil</option>
                    <option value="148">Nagpur</option>
                    <option value="149">Nasik</option>
                    <option value="150">Nawabganj</option>
                    <option value="151">Nellore</option>
                    <option value="152">New Delhi</option>
                    <option value="153">New Delhi/Safdarjung</option>
                    <option value="154">Neyyattinkara</option>
                    <option value="155">Nizamabad</option>
                    <option value="156">Ooty</option>
                    <option value="157">Panvel</option>
                    <option value="158">Papanasam</option>
                    <option value="159">Patiala</option>
                    <option value="160">Patna</option>
                    <option value="161">Pendra Road</option>
                    <option value="162">Perambalur</option>
                    <option value="163">Pondicherry</option>
                    <option value="164">Poona</option>
                    <option value="165">Port Blair</option>
                    <option value="166">Pune</option>
                    <option value="167">Puri</option>
                    <option value="168">Quilon</option>
                    <option value="169">Rae Bareli</option>
                    <option value="170">Raigarh</option>
                    <option value="171">Rajapalaiyam</option>
                    <option value="172">Rajkot</option>
                    <option value="173">Rameshwaram</option>
                    <option value="174">Ratnagiri</option>
                    <option value="175">Rohtak</option>
                    <option value="176">Salem</option>
                    <option value="177">Sambalpur</option>
                    <option value="178">Sankarankovil</option>
                    <option value="179">Sanwer</option>
                    <option value="180">Saraipali</option>
                    <option value="181">Satara</option>
                    <option value="182">Satna</option>
                    <option value="183">Sattur</option>
                    <option value="184">Sehore</option>
                    <option value="185">Shertallai</option>
                    <option value="186">Shillong</option>
                    <option value="187">Shimla</option>
                    <option value="188">Sholapur</option>
                    <option value="189">Sitapur</option>
                    <option value="190">Sivakasi</option>
                    <option value="191">Solapur</option>
                    <option value="192">Sonipat</option>
                    <option value="193">Srikakulam</option>
                    <option value="194">Srinagar</option>
                    <option value="195">Sriperumpudur</option>
                    <option value="196">Srivilliputhur</option>
                    <option value="197">Surat</option>
                    <option value="198">Tambaram</option>
                    <option value="199">Tezpur</option>
                    <option value="200">Thana, INDIA</option>
                    <option value="201">Thanjavur</option>
                    <option value="202">Theni</option>
                    <option value="203">Thiruchendur</option>
                    <option value="204">Thiruvan</option>
                    <option value="205">Tiruchchirapalli</option>
                    <option value="206">Tirunelveli</option>
                    <option value="207">Tirupati</option>
                    <option value="208">Tiruvottiyur</option>
                    <option value="209">Tonk</option>
                    <option value="210">Trivandrum</option>
                    <option value="211">Tumkur</option>
                    <option value="212">Tuticorin</option>
                    <option value="213">Udupi</option>
                    <option value="214">Ulhasnagar</option>
                    <option value="215">Unnao</option>
                    <option value="216">Vadodara</option>
                    <option value="217">Varanasi</option>
                    <option value="218">Vellore</option>
                    <option value="219">Veraval</option>
                    <option value="220">Vidisha</option>
                    <option value="221">Villupuram</option>
                    <option value="222">Virdhachalam</option>
                    <option value="223">Virudunagar</option>
                    <option value="224">Vishakhapatnam</option>
                    <option value="225">Vizianagaram</option>
                    <option value="226">Warangal</option>
                    <option value="227">Wardha</option>
                    <option value="230">Washington, US</option>
                    <option value="228">Zahirabad</option>
                </select>
            </div>
        </div>
    </div>


    <div class="col-md-9">
        <div class="form-group">
            <label  class="col-sm-4 pedit"><span class="red-star">*</span>State :</label>
            <div class="col-sm-8" id="location1">
                <select required name="state" class="form-control" id="state">
                    <option value="">Select State</option>
                    <option value="Bangladesh" > Bangladesh </option>
                    <option value="India" > India </option>
                    <option value="Pakistan" > Pakistan </option>

                    <!--<span id="cityinfo"></span>-->
                </select>

            </div>
            <span id="stateInfo"></span>
        </div><!--form-group-->
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label  class="col-sm-4 pedit"><span class="red-star">*</span>City :</label>
            <div class="col-sm-8" id="city">
                <select required name="city" class="form-control" id="city1">
                    <option value="">Select City</option>
                    <option value="Bangladesh" > Bangladesh </option>
                    <option value="India" > India </option>
                    <option value="Pakistan" > Pakistan </option>
                </select>

            </div>
        </div><!--form-group-->
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Address :</label>
            <div class="col-sm-8">
                <input required type="text" name="address" id="title" class="form-control" value="{{ old('address', optional($job)->address) }}" style=""/>
                {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
            </div>
        </div><!--col-md-6-->
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Annual Salary:  </label>
            <div class="col-sm-3">
                <input required type="text" name="max_salary" id="min_salary" class="form-control" value="{{ old('max_salary', optional($job)->max_salary) }}" style=""/>
                {!! $errors->first('max_salary', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col-sm-1"><!--<i class="fa fa-jpy"></i>-->-</div>
            <div class="col-sm-3">
                <input required type="text" name="min_salary" id="min_salary" class="form-control" value="{{ old('min_salary', optional($job)->min_salary) }}" style=""/>
                {!! $errors->first('min_salary', '<p class="help-block">:message</p>') !!}
                <div class="col-sm-1"><!--<i class="fa fa-jpy"></i>--></div>

            </div>
        </div>
    </div>


    <div class="col-md-9">
        <div class="form-group">
            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Job To:  </label>
            <div class="col-sm-8">
                <label class="radio-inline"><input checked type="radio" name="job_to" value="1">Govt Jobs</label>
                <label class="radio-inline"><input type="radio" name="job_to" value="2">Oversea Jobs</label>
                <label class="radio-inline"><input type="radio" name="job_to" value="4">IIT Jobs</label>
                <label class="radio-inline"><input type="radio" name="job_to" value="3">Others</label>
            </div>
        </div>
    </div>


</div>

<!--col-md-6-->

<div class="row" >
    <div class="top-emp-center">
        <h4>Candidate Profile</h4>
    </div><br />
    <div class="col-md-9">
        <div class="form-group">
            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Candidate Description :</label>
            <div class="col-sm-8">
                <textarea name="candidate_description" id="candidate_description" onBlur="chk_length(this.value,'2000');" class="form-control" rows="3">{{  old('candidate_description', optional($job)->candidate_description) }}</textarea>
                {!! $errors->first('candidate_description', '<p class="help-block">:message</p>') !!}
            </div>
        </div><!--form-group-->
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Experience :  </label>
            <div class="col-sm-2">
                <select required name="experience_from" class="sub_heading2" style="">
                    <option value="" selected="selected">Year</option>
                    <option value="0" selected="selected">
                        0										</option>
                    <option value="1" >
                        1										</option>
                    <option value="2" >
                        2										</option>
                    <option value="3" >
                        3										</option>
                    <option value="4" >
                        4										</option>
                    <option value="5" >
                        5										</option>
                    <option value="6" >
                        6										</option>
                    <option value="7" >
                        7										</option>
                    <option value="8" >
                        8										</option>
                    <option value="9" >
                        9										</option>
                    <option value="10" >
                        10										</option>
                    <option value="11" >
                        11										</option>
                    <option value="12" >
                        12										</option>
                    <option value="13" >
                        13										</option>
                    <option value="14" >
                        14										</option>
                    <option value="15" >
                        15										</option>
                    <option value="16" >
                        16										</option>
                    <option value="17" >
                        17										</option>
                    <option value="18" >
                        18										</option>
                    <option value="19" >
                        19										</option>
                    <option value="20" >
                        20										</option>
                    <option value="21" >
                        21										</option>
                    <option value="22" >
                        22										</option>
                    <option value="23" >
                        23										</option>
                    <option value="24" >
                        24										</option>
                    <option value="25" >
                        25										</option>
                    <option value="26" >
                        26										</option>
                    <option value="27" >
                        27										</option>
                    <option value="28" >
                        28										</option>
                    <option value="29" >
                        29										</option>
                    <option value="30" >
                        30										</option>
                </select>
            </div>
            <div class="col-sm-1" style="float:left !important;">Year</div>
            <div class="col-sm-1">To</div>
            <div class="col-sm-2">
                <select required name="experience_to" class="text1" id="exp_to" style="">
                    <option value="" selected="selected"></option>
                    <option value="0" selected="selected">
                        0										</option>
                    <option value="1" >
                        1										</option>
                    <option value="2" >
                        2										</option>
                    <option value="3" >
                        3										</option>
                    <option value="4" >
                        4										</option>
                    <option value="5" >
                        5										</option>
                    <option value="6" >
                        6										</option>
                    <option value="7" >
                        7										</option>
                    <option value="8" >
                        8										</option>
                    <option value="9" >
                        9										</option>
                    <option value="10" >
                        10										</option>
                    <option value="11" >
                        11										</option>
                    <option value="12" >
                        12										</option>
                    <option value="13" >
                        13										</option>
                    <option value="14" >
                        14										</option>
                    <option value="15" >
                        15										</option>
                    <option value="16" >
                        16										</option>
                    <option value="17" >
                        17										</option>
                    <option value="18" >
                        18										</option>
                    <option value="19" >
                        19										</option>
                    <option value="20" >
                        20										</option>
                    <option value="21" >
                        21										</option>
                    <option value="22" >
                        22										</option>
                    <option value="23" >
                        23										</option>
                    <option value="24" >
                        24										</option>
                    <option value="25" >
                        25										</option>
                    <option value="26" >
                        26										</option>
                    <option value="27" >
                        27										</option>
                    <option value="28" >
                        28										</option>
                    <option value="29" >
                        29										</option>
                    <option value="30" >
                        30										</option>
                </select>
            </div>
            <div class="col-sm-1" >Year</div>

        </div>
    </div>

    <div class="col-md-9">
        <div class="form-group">
            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Qualification :</label>
            <div class="col-sm-8">
                <div style="border: 1px solid #ccc; padding:5px;
										height: 300px; width: 370px;
										overflow: auto;">
                    <label>****Under Graduation***</label><br>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="B.E/ B. Tech">B.E/ B. Tech</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="mm">mm</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="B.Sc">B.Sc</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="Diplomo">Diplomo</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="HSC">HSC</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="SSLC">SSLC</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="php">php</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="MBBS">MBBS</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="BA">BA</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="B Com">B Com</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="B Ed">B Ed</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="BBA">BBA</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="BAMS">BAMS</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="BHMS">BHMS</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="Others">Others</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="ICMA">ICMA</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="M.Com">M.Com</label><br />
                    <label>****Post Graduation***</label><br>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="M.A">&nbsp;M.A										</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="M.Arch">&nbsp;M.Arch										</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="MBA / PGDM / PGDBA">&nbsp;MBA / PGDM / PGDBA										</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="MCA/PGDCA">&nbsp;MCA/PGDCA										</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="MCM">&nbsp;MCM										</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="M.Com">&nbsp;M.Com										</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="M.D/Ms">&nbsp;M.D/Ms										</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="M.E/M Tech">&nbsp;M.E/M Tech										</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="M.H.R.M">&nbsp;M.H.R.M										</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="M.P.Ed">&nbsp;M.P.Ed										</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="M.Pharm">&nbsp;M.Pharm										</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="M.Phil">&nbsp;M.Phil										</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="M.S.W">&nbsp;M.S.W										</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="M.Sc">&nbsp;M.Sc										</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="M.T.M">&nbsp;M.T.M										</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="CA/ ICWA/ CS">&nbsp;CA/ ICWA/ CS										</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="not mentioned">&nbsp;not mentioned										</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="Others">&nbsp;Others										</label><br />
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="M.C.S.">&nbsp;M.C.S.										</label><br />
                    <label>****Doctorate Qualification***</label><br>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="Ph.D/Doctorate">&nbsp;Ph.D/Doctorate										</label><br />

                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="MPHIL">&nbsp;MPHIL										</label><br />

                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="Other">&nbsp;Other										</label><br />

                    <label class="checkbox-inline">
                        <input type="checkbox" id="qualification" name="qualification[]" style="display:inline" value="koss">&nbsp;koss										</label><br />


                </div>
            </div>
        </div><!--col-md-6-->
    </div>
</div>

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select').select2();
        });
    </script>
@endsection

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

