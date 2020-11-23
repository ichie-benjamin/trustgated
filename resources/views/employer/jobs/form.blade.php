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
{{--    <div class="col-md-9">--}}
{{--        <div class="form-group">--}}
{{--            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Job Post Type :</label>--}}
{{--            <div class="col-sm-8">--}}
{{--                <select class="form-control" id="premium" name="type_id">--}}
{{--                    <option value="">Select One</option>--}}
{{--                    <option value="3" >Job Posting Offer</option>--}}
{{--                    <option value="4" >Silver Job Posting</option>--}}
{{--                    <option value="5" >Web Developer</option>--}}
{{--                </select>--}}
{{--                {!! $errors->first('type_id', '<p class="help-block">:message</p>') !!}--}}
{{--            </div>--}}
{{--        </div><!--form-group-->--}}
{{--    </div>--}}
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
            <div class="col-sm-8">

               <select name="industry_id" id="industry_id" class="form-control select2">
                   <option value="" style="display: none;" {{ old('industry_id', optional($job)->industry_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select Industry...</option>
               @foreach(\App\Models\IndustryType::pluck('id','category') as $item => $value)
                        <option {{ old('industry_id', optional($job)->industry_id) == $value ? 'selected' : '' }} value="{{ $value }}"> {{ $item }} </option>
                    @endforeach
                </select>

            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Functional area :</label>
            <div class="col-sm-8">

                <select name="function_area" id="function_area" class="form-control select2">
{{--                    <option value="">select Functional Area</option>--}}
{{--                    <option value="{{ old('function_area', optional($job)->function_area ?: '') }}" selected>{{ old('function_area')}} {{  optional($job)->function_area ?? '' }}</option>--}}
                @foreach(\App\Models\FunctionalArea::pluck('id','category_functional_area') as $item => $value)
                        <option {{ old('functional_area', optional($job)->functional_area) == $value ? 'selected' : '' }} value="{{ $value }}"> {{ $item }} </option>
                    @endforeach
                </select>
            </div>
        </div><!--form-group-->
    </div>
    @section('hide')
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
    @endsection
    <div id="expire_date">
        <div class="col-md-9" >
            <div class="form-group">
                <label  class="col-sm-4 pedit"><span class="red-star">*</span>Expire Date :</label>
                <div class="col-sm-8">
{{ optional($job)->closing_date }}
                    <input  type="date" name="closing_date" id="closing_date" class="form-control" value="{{ old('closing_date', optional($job)->closing_date) }}" style=""/>
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
                <input required type="text" name="tags" id="keywords" class="form-control" value="{{ old('tags', optional($job)->tags) }}" style=""/>
                {!! $errors->first('tags', '<p class="help-block">:message</p>') !!}
                <p>Separate with comma</p>
            </div>
        </div>
    </div><!--col-md-6-->


    <div class="col-md-9">
    <div class="form-group">
        <label class="col-sm-4 pedit"><span class="red-star">*</span>Country: </label>
        <div class="col-sm-8">
          
            <select name="country" class="form-control country_select select2" data-size="7" title="Select country Type">
                {{-- <option>Select Country</option> --}}
                <option value="" style="display: none;" {{ old('country', optional($job)->country ?: '') == '' ? 'selected' : '' }} disabled selected>select Country.</option>

            @foreach(\App\Models\Country::pluck('name') as $item)
                    <option {{ old('country', optional($job)->country) == $item ? 'selected' : '' }} value="{{ $item }}">{{ $item }}</option>
                @endforeach
            </select>

        </div>
        <div>
            <span id="countryInfo"></span>
        </div>
    </div><!--form-group-->
    </div>


    <div class="col-md-9">
    <div class="form-group" id="statee">
        <label class="col-sm-4 pedit2 "><span class="red-star">*</span>State: </label>
        <div class="col-sm-8">
            <select style="width: 100%" class="form-control select2 states" required name="state">

                <option value="{{ old('state', optional($job)->state ?: '')}}">{{ old('state', optional($job)->state ?: 'Select Country First')}}</option>
{{--                <option>Select Country first</option>--}}

            </select>

        </div>
        <div>
            <span id="stateInfo"></span>
        </div>
    </div><!--form-group-->
    </div>

    <div class="col-md-9">
    <div class="form-group" id="cityy">
        <label class="col-sm-4 pedit2 "><span class="red-star">*</span>City: </label>
        <div class="col-sm-8">
            <input required type="text" name="city" id="city" value="{{ old('city', optional($job)->city) }}" class="form-control" placeholder="">

        </div>
        <div>
            <span id="cityInfo"></span>
        </div>
    </div><!--form-group-->
    </div>


    @section('hide')
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
    @endsection

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


{{--    <div class="col-md-9">--}}
{{--        <div class="form-group">--}}
{{--            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Job To:  </label>--}}
{{--            <div class="col-sm-8">--}}
{{--                <label class="radio-inline"><input checked type="radio" name="job_to" value="1">Govt Jobs</label>--}}
{{--                <label class="radio-inline"><input type="radio" name="job_to" value="2">Oversea Jobs</label>--}}
{{--                <label class="radio-inline"><input type="radio" name="job_to" value="4">IIT Jobs</label>--}}
{{--                <label class="radio-inline"><input type="radio" name="job_to" value="3">Others</label>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


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
                    <option value="{{ old('experience_from', optional($job)->experience_from) }}" selected="selected">{{ old('experience_from', optional($job)->experience_from) ?? 'Select Year' }}</option>
                    <option value="0">
                        0										</option>
                    <option value="1" >
                        1										
                    </option>
                    <option value="2" >
                        2</option>
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
                    <option value="{{ old('experience_to', optional($job)->experience_to) }}" selected="selected">{{ old('experience_to', optional($job)->experience_to) ?? 'Select Year' }}</option>
                    
                    <option value="0">
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
            $('.select2').select2();

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

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

