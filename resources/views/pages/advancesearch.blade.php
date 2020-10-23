@extends('layouts.master')

@section('style')
    <link rel="stylesheet" href="/assets/css/dev.css" type="text/css" />

@endsection

@section('content')
    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#"> Jobs</a></li>
                        <li class="active">Advanced Search</li>
                    </ol>
                </div>

                <br />

                <!--col-md-2-->

                <!--col-md-7-->

                <div class="col-md-9" style="  margin-left:0px; margin-top:0px;">
                    <div class="box radius fixheight" style="padding:0px 13px; height:400px !important;">
                        <h4 style="margin:0; padding: 4px 2px;">Advanced Search</h4>
                        <form name="advancesearchform" action="jobsearch.php" method="GET">
                            <div class="srchbar" style=" margin-top: 0px; height:360px !important; ">

                                <div class="col-md-6" style="  padding: 10px;">
                                    <P style="margin:0;">Keyword</P>
                                    <input type="text" id="ad-keyword" style="width: 100%; margin-bottom: 10px;" name="refkeyword" autocomplete="off">
                                    <P style="margin:0;">Location</P>
                                    <input type="text" id="adv-location" style="width: 100%; margin-bottom: 10px;" value="" name="reflocation">
                                    <P style="margin:0;">Experience</P>
                                    <select name="experience" style="width: 100%; margin-bottom: 10px;">
                                        <option value="">Exprience</option>
                                        <option value="1">0 to 1 Year</option>
                                        <option value="2">2 Years</option>
                                        <option value="3">3 Years</option>
                                        <option value="4">4 Years</option>
                                        <option value="5">5 Years</option>
                                        <option value="6">6 Years</option>
                                        <option value="7">7 Years</option>
                                        <option value="8">8 Years</option>
                                        <option value="9">9 Years</option>
                                        <option value="10">10 Years</option>
                                        <option value="11">11 Years</option>
                                        <option value="12">12 Years</option>
                                        <option value="13">13 Years</option>
                                        <option value="14">14 Years</option>
                                        <option value="15">15 Years</option>
                                        <option value="16">16 Years</option>
                                        <option value="17">17 Years</option>
                                        <option value="18">18 Years</option>
                                        <option value="19">19 Years</option>
                                        <option value="20">20 Years</option>
                                        <option value="21">21 Years</option>
                                        <option value="22">22 Years</option>
                                        <option value="23">23 Years</option>
                                        <option value="24">24 Years</option>
                                        <option value="25">25 Years</option>
                                        <option value="25">Above 25 Years</option>
                                    </select>

                                    <P style="margin:0;">Salary</P>
                                    <select name="salary" style="width: 100%; margin-bottom: 10px;">
                                        <option value="">Salary</option>
                                        <option value="1">0 to 1 Lacks</option>
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

                                </div><!----col-md-6---->
                                <div class="col-md-6" style="  padding: 10px;">
                                    <P style="margin:0;">Functional area</P>
                                    <select name="farea" style="width: 100%; margin-bottom: 10px;" onChange="getrole(this.value)">
                                        <option value="">Select Functional area</option>
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
                                    <P style="margin:0;">Job industry</P>
                                    <select name="category" style="width: 100%; margin-bottom: 10px;">
                                        <option value="">select industry</option>
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

                                    <!--<P style="margin:0;">Job role</P>
                                    <span id="advjobrole">
                                    <select name="advrole" style="width: 100%; margin-bottom: 10px;">
                                    <option value="">Select functional area first</option>
                                    </select>-->
                                    </span>
                                </div><!----col-md-6---->

                                <div class="col-md-12" style="margin-bottom:20px; text-align:center;" >
                                    <!--<a href="search.htm" class="gobtn" style="margin:0;">Search</a> -->
                                    <button class="btn btn-blue" name="advancesearch" style="margin:0; line-height: 32px; height: 36px;">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                @include('pages.partials.right_sidebar')

            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
    <!--ADVANCED SEARCH POPUP-->
@endsection
