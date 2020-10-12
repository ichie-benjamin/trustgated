@extends('layouts.master')

@section('content')
    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="employer-profile-view.php">My Account</a></li>
                        <li class="active">Professional Details</li>
                    </ol>
                </div>

                <script type="text/javascript">
                    $('.inbox-bg .inboxa').hide(0);

                    $('.inbox-bg').click(function(){
                        alert('ffff');
                        if($('.inboxa').hasClass('vis')){
                            $('.inboxa', this).removeClass('vis');
                            $('.inboxa', this).hide();
                        }else{
                            $('.inboxa', this).addClass('vis');
                            $('.inboxa', this).show();
                        }
                    });
                    function menu_click1()
                    {
                        $('#show1')
                    }
                </script>

                @include('employer.partials.sidebar')

                <div class="col-md-9" >
                    <br />

                    <form class="form-horizontal m10" name='div2' enctype="multipart/form-data">

                        <div class="row" >
                            <div id="display1">
                                <div class="top-emp-center">
                                    <h4>Account Details</h4>
                                </div><br />
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  class="col-sm-4 pedit">User Name  </label>
                                                <div class="col-sm-8">
                                                    <label id="uname">{{ $user->name }} </label>
                                                </div>
                                            </div><!--form-group-->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  class="col-sm-4 pedit">Company Name </label>
                                                <div class="col-sm-8">
                                                    <label id="cpname"> {{ $company->name }}</label>
                                                </div>
                                            </div><!--col-md-6-->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  class="col-sm-4 pedit">Master Email</label>
                                                <div class="col-sm-8">
                                                    <label id="cpname"> {{ $user->email }}</label>
                                                </div>
                                            </div><!--col-md-6-->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  class="col-sm-4 pedit">Type </label>
                                                <div class="col-sm-8">
                                                    <label id="rec_type"> {{ $user->role }} </label>
                                                </div>
                                            </div><!--col-md-6-->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-sm-4 pedit">Membership Plan for Job Posting :</label>
                                                <div class="col-sm-6">
                                                    <label id="rec_type">Free Plan </label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-sm-4 pedit">Membership plan for Resume Access :</label>
                                                <div class="col-sm-6">
                                                    <label id="rec_type">platinum </label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  class="col-sm-4 pedit"><h5><a href="javascript:;" style="color:#0099FF" onclick="div_dis1();"> Edit Account Details </a></h5></label>
                                                <div class="col-sm-8">

                                                </div>
                                            </div><!--form-group-->
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <img src="{{ asset($company->logo)}}" width="150" >						</div>
                                    </div>
                                </div>
                            </div>
                            <div id="display11" style="display:none">
                                <div class="top-emp-center">
                                    <h4>Edit Account Details</h4>
                                </div><br />
                                <form action="">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit"> User Name  </label>
                                        <div class="col-sm-8">
                                            {{ $user->name }}                                 </div>
                                    </div><!--form-group-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit"><span class="red-star">*</span>Company Name </label>
                                        <div class="col-sm-8">
                                            <input type="text" required class="form-control" name="company_name" id="cpname1" value="{{ $company->name }}">
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit"><span class="red-star">*</span>Master Email</label>
                                        <div class="col-sm-8">
                                            <input type="text" disabled class="form-control" name="email1" id="email1" value="{{ $user->email }}">
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit2"><span class="red-star">*</span>Type </label>
                                        <label class="radio-inline pedit4">
                                            <input name="role" @if($user->role == 'employer') checked @endif type="radio" value="employer">Company
                                        </label>
                                        <label class="radio-inline pedit4">
                                            <input name="role" type="radio" @if($user->role == 'consultant') checked @endif  value="consultant" > Consultant
                                        </label>
                                        <div id="typeLabel" class="floaterror"></div>
                                    </div>
                                </div>

                                <div class="col-sm-8">

                                    <div class="col-sm-3 ">
                                        <input class="btn-blue btn bc" type="button" name="submits" value="SAVE">

                                    </div>
                                    <div class="col-sm-3 padno">
                                        <div class="btn-blue btn bc"><a href="{{ route('employer.profile') }}" style="color:#FFF"> Cancel </a> </div><!--<input type="reset" onclick="cls_acc2();" value="Cancel" /><!--</div>-->
                                        <br>
                                    </div>
                                </div>
                              </form>

                            </div>
                            <!--col-md-6-->
                        </div>
                        <div class="row" >
                            <div id="display2">
                                <div class="top-emp-center">
                                    <h4>Company Details</h4>
                                </div><br />
                                <form class="form-horizontal">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit">Industry Type </label>
                                        <div class="col-sm-8">
                                            <label id="itype"> {{ $company->type }}</label>
                                        </div>
                                    </div><!--form-group-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit">Contact Person</label>
                                        <div class="col-sm-8">
                                            <label id="cperson">{{ $company->contact_person }}</label>
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit">Logo</label>
                                        <div class="col-sm-6">

                                            <img src="{{ asset($company->logo)}}" height="70" width="100" id="logo" name="logo" style="background:none;" />
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit"><span class="red-star"></span>Website</label>
                                        <div class="col-sm-8">
                                            <label id="wsite">
                                                {{ $company->website }}
                                            </label>
                                        </div>
                                    </div><!--form-group-->
                                </div>
                                {{-- <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit">Company Profile</label>
                                        <div class="col-sm-6">
                                            <label id="cpro"> Not Mentioned </label>
                                        </div>

                                    </div>
                                </div> --}}

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit"><h5><a href="javascript:;" style="color:#0099FF" onclick="div_dis2();"> Edit Company Details </a></h5></label>
                                        <div class="col-sm-8">

                                        </div>
                                    </div><!--form-group-->
                                </div>
                              </form>

                                <!--col-md-6-->
                            </div>
                            <div id="display22" style="display:none">
                                <form name="form_div" id="form_div" action="logo_upload.php" target="upload_iframe" method="post" enctype="multipart/form-data">
                                    <div class="top-emp-center">
                                        <h4>Edit Company Details</h4>
                                    </div><br />
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  class="col-sm-4 pedit">Industry Type  </label>
                                            <div class="col-sm-8">
                                                <select name="ins" id="ins" class="textbox-med">
                                                    <option value="">Select</option>
                                                    <option value="Law Enforcement/Security"  >
                                                        Law Enforcement/Security </option>

                                                    <option value="Legal/Law"  >
                                                        Legal/Law </option>

                                                    <option value="Marketing/Sales"  >
                                                        Marketing/Sales </option>

                                                    <option value="Media/Journalism"  >
                                                        Media/Journalism </option>

                                                    <option value="Production/Manufacturing/Maintenance"  >
                                                        Production/Manufacturing/Maintenance </option>

                                                    <option value="Tours and Travel/Airline"  >
                                                        Tours and Travel/Airline </option>

                                                    <option value="Transportation/Logistics"  >
                                                        Transportation/Logistics </option>

                                                    <option value="KPO/Technical Support"  >
                                                        KPO/Technical Support </option>

                                                    <option value="Strategy / Management Consulting Firms"  >
                                                        Strategy / Management Consulting Firms </option>

                                                    <option value="Others"  >
                                                        Others </option>

                                                    <option value="test cate"  >
                                                        test cate </option>

                                                    <option value="IT-ERP-Oracle"  >
                                                        IT-ERP-Oracle </option>

                                                    <option value="Media "  >
                                                        Media  </option>

                                                    <option value="mech"  >
                                                        mech </option>

                                                    <option value="IT - BPO"  >
                                                        IT - BPO </option>

                                                    <option value="NGO/Social Services"  >
                                                        NGO/Social Services </option>

                                                    <option value="Management"  >
                                                        Management </option>

                                                    <option value="Construction"  >
                                                        Construction </option>


                                                </select>
                                            </div>
                                        </div><!--form-group-->
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Contact Person</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="cper" id="cper" onKeyUp="chkkabuse(this.id);" value="Liza" >
                                            </div>
                                        </div><!--col-md-6-->
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Logo</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="file" name="logo1" id="logo1" value="Choose" onChange="jsUpload(this);" >
                                            </div>
                                        </div><!--col-md-6-->
                                    </div>
                                    <!--<div class="col-md-8">
                                          <div class="form-group">
                                            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Website</label>
                                            <div class="col-sm-8">
                                              <input class="form-control" type="text" id="wsite1" name="wsite1" onKeyUp="chkkabuse(this.id);" value="" >
                                            </div>
                                          </div>
                                    </div>-->
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Company Profile</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" cols="30" rows="6" id="cpro1" name="cpro1" onKeyUp="chkkabuse(this.id);"></textarea>
                                            </div>
                                        </div><!--col-md-6-->
                                    </div>
                                    <div class="col-sm-8">

                                        <div class="col-sm-3 ">
                                            <input class="btn-blue btn bc" type="button" id="submits" name="submits" onClick="save_acc4();" value="SAVE">

                                        </div>
                                        <div class="col-sm-3 padno">
                                            <div class="btn-blue btn bc"><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/employer-profile-view.html" style="color:#FFF"> Cancel </a><!--<input type="reset" value="Cancel" onclick="cls_acc4();" /><!--</div>-->
                                            </div>
                                            <br>
                                        </div>

                                        <!-- </form>--->
                                    </div>
                            </div>
                        </div>
                        <div class="row" >
                            <div id="display3">
                                <div class="top-emp-center">
                                    <h4>Contact Details</h4>
                                </div><br />
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit">Address Label</label>
                                        <div class="col-sm-8">
                                            <label id="lab">inet </label>
                                        </div>
                                    </div><!--form-group-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit"> Street Address </label>

                                        <div class="col-sm-8">
                                            <label id="lab">cbfdgdfgds</label>
                                        </div>
                                        <div class="col-sm-1"><!--<i class="fa fa-jpy"></i>--></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit">Country </label>
                                        <div class="col-sm-8">
                                            <!-- <textarea class="form-control" rows="3"></textarea>-->

                                            <label id="con">
                                            </label>
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit">State </label>
                                        <div class="col-sm-8">
                                            <!-- <textarea class="form-control" rows="3"></textarea>-->
                                            <label id="state">
                                                Kentucky														</label>
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit">City </label>
                                        <div class="col-sm-8">
                                            <!-- <textarea class="form-control" rows="3"></textarea>-->
                                            <label id="city">
                                                Ary																				</label>
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit">Pincode </label>
                                        <div class="col-sm-8">
                                            <!-- <textarea class="form-control" rows="3"></textarea>-->
                                            <label id="pin">6575464</label>
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit">Mobile Number </label>
                                        <div class="col-sm-8">
                                            <!-- <textarea class="form-control" rows="3"></textarea>-->
                                            <label id="mobn">   </label>
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit">Landline Number</label>
                                        <div class="col-sm-8">
                                            <!-- <textarea class="form-control" rows="3"></textarea>-->
                                            <label id="ph1">
                                                7856756756 </label>
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit">Fax </label>
                                        <div class="col-sm-8">
                                            <!-- <textarea class="form-control" rows="3"></textarea>-->
                                            <label id="fax">Not Mentioned </label>
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit"><h5><a href="javascript:;" style="color:#0099FF" onclick="div_dis3();"> Edit Contact Details </a></h5></label>
                                        <div class="col-sm-8">

                                        </div>
                                    </div><!--form-group-->
                                </div>
                            </div>
                            <div id="display33" style="display:none">
                                <div class="top-emp-center">
                                    <h4>Edit Contact Details</h4>
                                </div><br />

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit"><span class="red-star">*</span>Address Label</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control"id="cplabel" name="cplabel" onKeyUp="chkkabuse(this.id);" value="inet" >
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit"><span class="red-star">*</span>Street Address</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="adr1" name="adr1" value="cbfdgdfgds">
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit"><span class="red-star">*</span>Country</label>
                                        <div class="col-sm-8">

                                            <select class="form-control" id="country" onChange="loadXMLDoc(this.value)" >

                                                <option value="211"   >
                                                    Bangladesh </option>
                                                <option value="210"   >
                                                    India </option>
                                                <option value="212"   >
                                                    Pakistan </option>

                                            </select>
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit"><span class="red-star">*</span>State</label>
                                        <div class="col-sm-8">

                                            <select  class="form-control" name="state1"  id="state1" onChange="loadcity(this.value)">
                                                string(3) "138"
                                                <option value="138"  >Alabama</option>
                                                string(3) "142"
                                                <option value="142"  >Alaska</option>
                                                string(3) "246"
                                                <option value="246"  >Arizona</option>
                                                string(3) "248"
                                                <option value="248"  >Arkansas</option>
                                                string(3) "623"
                                                <option value="623"  >California</option>
                                                string(3) "807"
                                                <option value="807"  >Colorado</option>
                                                string(3) "813"
                                                <option value="813"  >Connecticut</option>
                                                string(3) "904"
                                                <option value="904"  >Delaware</option>
                                                string(3) "940"
                                                <option value="940"  >District of Columbia</option>
                                                string(4) "1124"
                                                <option value="1124"  >Florida</option>
                                                string(4) "1188"
                                                <option value="1188"  >Georgia</option>
                                                string(4) "1349"
                                                <option value="1349"  >Hawaii</option>
                                                string(4) "1421"
                                                <option value="1421"  >Idaho</option>
                                                string(4) "1437"
                                                <option value="1437"  >Illinois</option>
                                                string(4) "1451"
                                                <option value="1451"  >Indiana</option>
                                                string(4) "1459"
                                                <option value="1459"  >Iowa</option>
                                                string(4) "1591"
                                                <option value="1591"  >Kansas</option>
                                                string(4) "1653"
                                                <option value="1653" selected >Kentucky</option>
                                                string(4) "1993"
                                                <option value="1993"  >Louisiana</option>
                                                string(4) "2055"
                                                <option value="2055"  >Maine</option>
                                                string(4) "2124"
                                                <option value="2124"  >Maryland</option>
                                                string(4) "2136"
                                                <option value="2136"  >Massachusetts</option>
                                                string(4) "2190"
                                                <option value="2190"  >Michigan</option>
                                                string(4) "2208"
                                                <option value="2208"  >Minnesota</option>
                                                string(4) "2222"
                                                <option value="2222"  >Mississippi</option>
                                                string(4) "2223"
                                                <option value="2223"  >Missouri</option>
                                                string(4) "2248"
                                                <option value="2248"  >Montana</option>
                                                string(4) "2367"
                                                <option value="2367"  >Nebraska</option>
                                                string(4) "2380"
                                                <option value="2380"  >Nevada</option>
                                                string(4) "2383"
                                                <option value="2383"  >New Hampshire</option>
                                                string(4) "2385"
                                                <option value="2385"  >New Jersey</option>
                                                string(4) "2386"
                                                <option value="2386"  >New Mexico</option>
                                                string(4) "2389"
                                                <option value="2389"  >New York</option>
                                                string(4) "2454"
                                                <option value="2454"  >North Carolina</option>
                                                string(4) "2457"
                                                <option value="2457"  >North Dakota</option>
                                                string(4) "2537"
                                                <option value="2537"  >Ohio</option>
                                                string(4) "2545"
                                                <option value="2545"  >Oklahoma</option>
                                                string(4) "2570"
                                                <option value="2570"  >Oregon</option>
                                                string(4) "2684"
                                                <option value="2684"  >Pennsylvania</option>
                                                string(4) "2887"
                                                <option value="2887"  >Rhode Island</option>
                                                string(4) "3299"
                                                <option value="3299"  >South Carolina</option>
                                                string(4) "3301"
                                                <option value="3301"  >South Dakota</option>
                                                string(4) "3496"
                                                <option value="3496"  >Tennessee</option>
                                                string(4) "3501"
                                                <option value="3501"  >Texas</option>
                                                string(4) "3642"
                                                <option value="3642"  >Utah</option>
                                                string(4) "3696"
                                                <option value="3696"  >Vermont</option>
                                                string(4) "3726"
                                                <option value="3726"  >Virginia</option>
                                                string(4) "3769"
                                                <option value="3769"  >Washington</option>
                                                string(4) "3784"
                                                <option value="3784"  >West Virginia</option>
                                                string(4) "3812"
                                                <option value="3812"  >Wisconsin</option>
                                                string(4) "3820"
                                                <option value="3820"  >Wyoming</option>
                                            </select><span id="state_span"></span>
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit"><span class="red-star">*</span>City</label>
                                        <div class="col-sm-8">

                                            <select name="city1" type="text"  class="form-control" id="city1" >
                                                <option value="Aberdeen"  >Aberdeen</option>
                                                <option value="Adairville"  >Adairville</option>
                                                <option value="Adams"  >Adams</option>
                                                <option value="Adolphus"  >Adolphus</option>
                                                <option value="Ages Brookside"  >Ages Brookside</option>
                                                <option value="Albany"  >Albany</option>
                                                <option value="Alexandria"  >Alexandria</option>
                                                <option value="Allen"  >Allen</option>
                                                <option value="Allensville"  >Allensville</option>
                                                <option value="Almo"  >Almo</option>
                                                <option value="Alpha"  >Alpha</option>
                                                <option value="Alvaton"  >Alvaton</option>
                                                <option value="Annville"  >Annville</option>
                                                <option value="Argillite"  >Argillite</option>
                                                <option value="Arjay"  >Arjay</option>
                                                <option value="Arlington"  >Arlington</option>
                                                <option value="Artemus"  >Artemus</option>
                                                <option value="Ary" selected>Ary</option>
                                                <option value="Ashcamp"  >Ashcamp</option>
                                                <option value="Asher"  >Asher</option>
                                                <option value="Ashland"  >Ashland</option>
                                                <option value="Athol"  >Athol</option>
                                                <option value="Auburn"  >Auburn</option>
                                                <option value="Augusta"  >Augusta</option>
                                                <option value="Austin"  >Austin</option>
                                                <option value="Auxier"  >Auxier</option>
                                                <option value="Avawam"  >Avawam</option>
                                                <option value="Bagdad"  >Bagdad</option>
                                                <option value="Bandana"  >Bandana</option>
                                                <option value="Banner"  >Banner</option>
                                                <option value="Barbourville"  >Barbourville</option>
                                                <option value="Bardstown"  >Bardstown</option>
                                                <option value="Bardwell"  >Bardwell</option>
                                                <option value="Barlow"  >Barlow</option>
                                                <option value="Baskett"  >Baskett</option>
                                                <option value="Battletown"  >Battletown</option>
                                                <option value="Baxter"  >Baxter</option>
                                                <option value="Bays"  >Bays</option>
                                                <option value="Bear Branch"  >Bear Branch</option>
                                                <option value="Beattyville"  >Beattyville</option>
                                                <option value="Beaumont"  >Beaumont</option>
                                                <option value="Beauty"  >Beauty</option>
                                                <option value="Beaver"  >Beaver</option>
                                                <option value="Beaver Dam"  >Beaver Dam</option>
                                                <option value="Bedford"  >Bedford</option>
                                                <option value="Bee Spring"  >Bee Spring</option>
                                                <option value="Beech Creek"  >Beech Creek</option>
                                                <option value="Beech Grove"  >Beech Grove</option>
                                                <option value="Beechmont"  >Beechmont</option>
                                                <option value="Belcher"  >Belcher</option>
                                                <option value="Belfry"  >Belfry</option>
                                                <option value="Bellevue"  >Bellevue</option>
                                                <option value="Belton"  >Belton</option>
                                                <option value="Benham"  >Benham</option>
                                                <option value="Benton"  >Benton</option>
                                                <option value="Berea"  >Berea</option>
                                                <option value="Berry"  >Berry</option>
                                                <option value="Bethany"  >Bethany</option>
                                                <option value="Bethelridge"  >Bethelridge</option>
                                                <option value="Bethlehem"  >Bethlehem</option>
                                                <option value="Betsy Layne"  >Betsy Layne</option>
                                                <option value="Beverly"  >Beverly</option>
                                                <option value="Bevinsville"  >Bevinsville</option>
                                                <option value="Big Clifty"  >Big Clifty</option>
                                                <option value="Big Creek"  >Big Creek</option>
                                                <option value="Big Laurel"  >Big Laurel</option>
                                                <option value="Bighill"  >Bighill</option>
                                                <option value="Bimble"  >Bimble</option>
                                                <option value="Blackey"  >Blackey</option>
                                                <option value="Blackford"  >Blackford</option>
                                                <option value="Blaine"  >Blaine</option>
                                                <option value="Bledsoe"  >Bledsoe</option>
                                                <option value="Bloomfield"  >Bloomfield</option>
                                                <option value="Blue River"  >Blue River</option>
                                                <option value="Boaz"  >Boaz</option>
                                                <option value="Bonnieville"  >Bonnieville</option>
                                                <option value="Bonnyman"  >Bonnyman</option>
                                                <option value="Booneville"  >Booneville</option>
                                                <option value="Boons Camp"  >Boons Camp</option>
                                                <option value="Boston"  >Boston</option>
                                                <option value="Bowling Green"  >Bowling Green</option>
                                                <option value="Bradfordsville"  >Bradfordsville</option>
                                                <option value="Brandenburg"  >Brandenburg</option>
                                                <option value="Breeding"  >Breeding</option>
                                                <option value="Bremen"  >Bremen</option>
                                                <option value="Brodhead"  >Brodhead</option>
                                                <option value="Bronston"  >Bronston</option>
                                                <option value="Brooks"  >Brooks</option>
                                                <option value="Brooksville"  >Brooksville</option>
                                                <option value="Browder"  >Browder</option>
                                                <option value="Brownsville"  >Brownsville</option>
                                                <option value="Bryants Store"  >Bryants Store</option>
                                                <option value="Bryantsville"  >Bryantsville</option>
                                                <option value="Buckhorn"  >Buckhorn</option>
                                                <option value="Buckner"  >Buckner</option>
                                                <option value="Buffalo"  >Buffalo</option>
                                                <option value="Bulan"  >Bulan</option>
                                                <option value="Burdine"  >Burdine</option>
                                                <option value="Burgin"  >Burgin</option>
                                                <option value="Burkesville"  >Burkesville</option>
                                                <option value="Burlington"  >Burlington</option>
                                                <option value="Burna"  >Burna</option>
                                                <option value="Burnside"  >Burnside</option>
                                                <option value="Bush"  >Bush</option>
                                                <option value="Busy"  >Busy</option>
                                                <option value="Butler"  >Butler</option>
                                                <option value="Bypro"  >Bypro</option>
                                                <option value="Cadiz"  >Cadiz</option>
                                                <option value="Calhoun"  >Calhoun</option>
                                                <option value="California"  >California</option>
                                                <option value="Calvert City"  >Calvert City</option>
                                                <option value="Calvin"  >Calvin</option>
                                                <option value="Campbellsburg"  >Campbellsburg</option>
                                                <option value="Campbellsville"  >Campbellsville</option>
                                                <option value="Campton"  >Campton</option>
                                                <option value="Canada"  >Canada</option>
                                                <option value="Cane Valley"  >Cane Valley</option>
                                                <option value="Caneyville"  >Caneyville</option>
                                                <option value="Canmer"  >Canmer</option>
                                                <option value="Cannel City"  >Cannel City</option>
                                                <option value="Cannon"  >Cannon</option>
                                                <option value="Carlisle"  >Carlisle</option>
                                                <option value="Carrie"  >Carrie</option>
                                                <option value="Carrollton"  >Carrollton</option>
                                                <option value="Carter"  >Carter</option>
                                                <option value="Catlettsburg"  >Catlettsburg</option>
                                                <option value="Cave City"  >Cave City</option>
                                                <option value="Cawood"  >Cawood</option>
                                                <option value="Cecilia"  >Cecilia</option>
                                                <option value="Center"  >Center</option>
                                                <option value="Centertown"  >Centertown</option>
                                                <option value="Central City"  >Central City</option>
                                                <option value="Cerulean"  >Cerulean</option>
                                                <option value="Chaplin"  >Chaplin</option>
                                                <option value="Chavies"  >Chavies</option>
                                                <option value="Clarkson"  >Clarkson</option>
                                                <option value="Clay"  >Clay</option>
                                                <option value="Clay City"  >Clay City</option>
                                                <option value="Clayhole"  >Clayhole</option>
                                                <option value="Clearfield"  >Clearfield</option>
                                                <option value="Cleaton"  >Cleaton</option>
                                                <option value="Clermont"  >Clermont</option>
                                                <option value="Clifty"  >Clifty</option>
                                                <option value="Clinton"  >Clinton</option>
                                                <option value="Closplint"  >Closplint</option>
                                                <option value="Cloverport"  >Cloverport</option>
                                                <option value="Coalgood"  >Coalgood</option>
                                                <option value="Coldiron"  >Coldiron</option>
                                                <option value="Columbia"  >Columbia</option>
                                                <option value="Columbus"  >Columbus</option>
                                                <option value="Combs"  >Combs</option>
                                                <option value="Corbin"  >Corbin</option>
                                                <option value="Corinth"  >Corinth</option>
                                                <option value="Cornettsville"  >Cornettsville</option>
                                                <option value="Corydon"  >Corydon</option>
                                                <option value="Covington"  >Covington</option>
                                                <option value="Coxs Creek"  >Coxs Creek</option>
                                                <option value="Crab Orchard"  >Crab Orchard</option>
                                                <option value="Cranks"  >Cranks</option>
                                                <option value="Crayne"  >Crayne</option>
                                                <option value="Crestwood"  >Crestwood</option>
                                                <option value="Crittenden"  >Crittenden</option>
                                                <option value="Crockett"  >Crockett</option>
                                                <option value="Crofton"  >Crofton</option>
                                                <option value="Cromona"  >Cromona</option>
                                                <option value="Cromwell"  >Cromwell</option>
                                                <option value="Cub Run"  >Cub Run</option>
                                                <option value="Cumberland"  >Cumberland</option>
                                                <option value="Cunningham"  >Cunningham</option>
                                                <option value="Curdsville"  >Curdsville</option>
                                                <option value="Custer"  >Custer</option>
                                                <option value="Cynthiana"  >Cynthiana</option>
                                                <option value="Dana"  >Dana</option>
                                                <option value="Danville"  >Danville</option>
                                                <option value="David"  >David</option>
                                                <option value="Dawson Springs"  >Dawson Springs</option>
                                                <option value="Dayhoit"  >Dayhoit</option>
                                                <option value="Dayton"  >Dayton</option>
                                                <option value="De Mossville"  >De Mossville</option>
                                                <option value="Deane"  >Deane</option>
                                                <option value="Debord"  >Debord</option>
                                                <option value="Delphia"  >Delphia</option>
                                                <option value="Dema"  >Dema</option>
                                                <option value="Denniston"  >Denniston</option>
                                                <option value="Denton"  >Denton</option>
                                                <option value="Dewitt"  >Dewitt</option>
                                                <option value="Dexter"  >Dexter</option>
                                                <option value="Dice"  >Dice</option>
                                                <option value="Dixon"  >Dixon</option>
                                                <option value="Dorton"  >Dorton</option>
                                                <option value="Dover"  >Dover</option>
                                                <option value="Drake"  >Drake</option>
                                                <option value="Drakesboro"  >Drakesboro</option>
                                                <option value="Drift"  >Drift</option>
                                                <option value="Dry Ridge"  >Dry Ridge</option>
                                                <option value="Dubre"  >Dubre</option>
                                                <option value="Dunbar"  >Dunbar</option>
                                                <option value="Dundee"  >Dundee</option>
                                                <option value="Dunmor"  >Dunmor</option>
                                                <option value="Dunnville"  >Dunnville</option>
                                                <option value="Dwale"  >Dwale</option>
                                                <option value="Dwarf"  >Dwarf</option>
                                                <option value="Dycusburg"  >Dycusburg</option>
                                                <option value="Earlington"  >Earlington</option>
                                                <option value="East Bernstadt"  >East Bernstadt</option>
                                                <option value="East Point"  >East Point</option>
                                                <option value="Eastern"  >Eastern</option>
                                                <option value="Eastview"  >Eastview</option>
                                                <option value="Eastwood"  >Eastwood</option>
                                                <option value="Eddyville"  >Eddyville</option>
                                                <option value="Edmonton"  >Edmonton</option>
                                                <option value="Eighty Eight"  >Eighty Eight</option>
                                                <option value="Ekron"  >Ekron</option>
                                                <option value="Elizabethtown"  >Elizabethtown</option>
                                                <option value="Elizaville"  >Elizaville</option>
                                                <option value="Elk Horn"  >Elk Horn</option>
                                                <option value="Elkfork"  >Elkfork</option>
                                                <option value="Elkhorn City"  >Elkhorn City</option>
                                                <option value="Elkton"  >Elkton</option>
                                                <option value="Elliottville"  >Elliottville</option>
                                                <option value="Emerson Orcutts Grocery"  >Emerson Orcutts Grocery</option>
                                                <option value="Eminence"  >Eminence</option>
                                                <option value="Emlyn"  >Emlyn</option>
                                                <option value="Emmalena"  >Emmalena</option>
                                                <option value="Eolia"  >Eolia</option>
                                                <option value="Eriline"  >Eriline</option>
                                                <option value="Erlanger"  >Erlanger</option>
                                                <option value="Ermine"  >Ermine</option>
                                                <option value="Essie"  >Essie</option>
                                                <option value="Etoile"  >Etoile</option>
                                                <option value="Eubank"  >Eubank</option>
                                                <option value="Evarts"  >Evarts</option>
                                                <option value="Ewing"  >Ewing</option>
                                                <option value="Ezel"  >Ezel</option>
                                                <option value="Fairdale"  >Fairdale</option>
                                                <option value="Fairfield"  >Fairfield</option>
                                                <option value="Fairview"  >Fairview</option>
                                                <option value="Falcon"  >Falcon</option>
                                                <option value="Fall Rock"  >Fall Rock</option>
                                                <option value="Falls Of Rough"  >Falls Of Rough</option>
                                                <option value="Falmouth"  >Falmouth</option>
                                                <option value="Fancy Farm"  >Fancy Farm</option>
                                                <option value="Farmers"  >Farmers</option>
                                                <option value="Farmington"  >Farmington</option>
                                                <option value="Fedscreek"  >Fedscreek</option>
                                                <option value="Ferguson"  >Ferguson</option>
                                                <option value="Finchville"  >Finchville</option>
                                                <option value="Fisherville"  >Fisherville</option>
                                                <option value="Fisty"  >Fisty</option>
                                                <option value="Flat Lick"  >Flat Lick</option>
                                                <option value="Flatgap"  >Flatgap</option>
                                                <option value="Flatwoods"  >Flatwoods</option>
                                                <option value="Flemingsburg"  >Flemingsburg</option>
                                                <option value="Florence"  >Florence</option>
                                                <option value="Fords Branch"  >Fords Branch</option>
                                                <option value="Fordsville"  >Fordsville</option>
                                                <option value="Forest Hills"  >Forest Hills</option>
                                                <option value="Fort Campbell"  >Fort Campbell</option>
                                                <option value="Fort Knox"  >Fort Knox</option>
                                                <option value="Fort Thomas"  >Fort Thomas</option>
                                                <option value="Foster"  >Foster</option>
                                                <option value="Fountain Run"  >Fountain Run</option>
                                                <option value="Fourmile"  >Fourmile</option>
                                                <option value="Frakes"  >Frakes</option>
                                                <option value="Frankfort"  >Frankfort</option>
                                                <option value="Franklin"  >Franklin</option>
                                                <option value="Fredonia"  >Fredonia</option>
                                                <option value="Freeburn"  >Freeburn</option>
                                                <option value="Frenchburg"  >Frenchburg</option>
                                                <option value="Ft Mitchell"  >Ft Mitchell</option>
                                                <option value="Fulton"  >Fulton</option>
                                                <option value="Gamaliel"  >Gamaliel</option>
                                                <option value="Gapville"  >Gapville</option>
                                                <option value="Garfield"  >Garfield</option>
                                                <option value="Garner"  >Garner</option>
                                                <option value="Garrard"  >Garrard</option>
                                                <option value="Garrett"  >Garrett</option>
                                                <option value="Garrison"  >Garrison</option>
                                                <option value="Gays Creek"  >Gays Creek</option>
                                                <option value="Georgetown"  >Georgetown</option>
                                                <option value="Germantown"  >Germantown</option>
                                                <option value="Ghent"  >Ghent</option>
                                                <option value="Gilbertsville"  >Gilbertsville</option>
                                                <option value="Girdler"  >Girdler</option>
                                                <option value="Glasgow"  >Glasgow</option>
                                                <option value="Glencoe"  >Glencoe</option>
                                                <option value="Glendale"  >Glendale</option>
                                                <option value="Glens Fork"  >Glens Fork</option>
                                                <option value="Glenview"  >Glenview</option>
                                                <option value="Goose Rock"  >Goose Rock</option>
                                                <option value="Gordon"  >Gordon</option>
                                                <option value="Goshen"  >Goshen</option>
                                                <option value="Gracey"  >Gracey</option>
                                                <option value="Gradyville"  >Gradyville</option>
                                                <option value="Graham"  >Graham</option>
                                                <option value="Grahn"  >Grahn</option>
                                                <option value="Grand Rivers"  >Grand Rivers</option>
                                                <option value="Gravel Switch"  >Gravel Switch</option>
                                                <option value="Gray"  >Gray</option>
                                                <option value="Gray Hawk"  >Gray Hawk</option>
                                                <option value="Grays Knob"  >Grays Knob</option>
                                                <option value="Grayson"  >Grayson</option>
                                                <option value="Green Road"  >Green Road</option>
                                                <option value="Greensburg"  >Greensburg</option>
                                                <option value="Greenup"  >Greenup</option>
                                                <option value="Greenville"  >Greenville</option>
                                                <option value="Grethel"  >Grethel</option>
                                                <option value="Gulston"  >Gulston</option>
                                                <option value="Gunlock"  >Gunlock</option>
                                                <option value="Guston"  >Guston</option>
                                                <option value="Guthrie"  >Guthrie</option>
                                                <option value="Hagerhill"  >Hagerhill</option>
                                                <option value="Hallie"  >Hallie</option>
                                                <option value="Hampton"  >Hampton</option>
                                                <option value="Hanson"  >Hanson</option>
                                                <option value="Happy"  >Happy</option>
                                                <option value="Hardburly"  >Hardburly</option>
                                                <option value="Hardin"  >Hardin</option>
                                                <option value="Hardinsburg"  >Hardinsburg</option>
                                                <option value="Hardy"  >Hardy</option>
                                                <option value="Hardyville"  >Hardyville</option>
                                                <option value="Harlan"  >Harlan</option>
                                                <option value="Harned"  >Harned</option>
                                                <option value="Harold"  >Harold</option>
                                                <option value="Harrods Creek"  >Harrods Creek</option>
                                                <option value="Harrodsburg"  >Harrodsburg</option>
                                                <option value="Hartford"  >Hartford</option>
                                                <option value="Hawesville"  >Hawesville</option>
                                                <option value="Hazard"  >Hazard</option>
                                                <option value="Hazel"  >Hazel</option>
                                                <option value="Hazel Green"  >Hazel Green</option>
                                                <option value="Hebron"  >Hebron</option>
                                                <option value="Heidelberg"  >Heidelberg</option>
                                                <option value="Heidrick"  >Heidrick</option>
                                                <option value="Hellier"  >Hellier</option>
                                                <option value="Helton"  >Helton</option>
                                                <option value="Henderson"  >Henderson</option>
                                                <option value="Herndon"  >Herndon</option>
                                                <option value="Hestand"  >Hestand</option>
                                                <option value="Hi Hat"  >Hi Hat</option>
                                                <option value="Hickman"  >Hickman</option>
                                                <option value="Hickory"  >Hickory</option>
                                                <option value="Hillsboro"  >Hillsboro</option>
                                                <option value="Hillview"  >Hillview</option>
                                                <option value="Hima"  >Hima</option>
                                                <option value="Hindman"  >Hindman</option>
                                                <option value="Hinkle"  >Hinkle</option>
                                                <option value="Hiseville"  >Hiseville</option>
                                                <option value="Hitchins"  >Hitchins</option>
                                                <option value="Hodgenville"  >Hodgenville</option>
                                                <option value="Holland"  >Holland</option>
                                                <option value="Holmes Mill"  >Holmes Mill</option>
                                                <option value="Hope"  >Hope</option>
                                                <option value="Hopkinsville"  >Hopkinsville</option>
                                                <option value="Horse Branch"  >Horse Branch</option>
                                                <option value="Horse Cave"  >Horse Cave</option>
                                                <option value="Hoskinston"  >Hoskinston</option>
                                                <option value="Huddy"  >Huddy</option>
                                                <option value="Hudson"  >Hudson</option>
                                                <option value="Hueysville"  >Hueysville</option>
                                                <option value="Hulen"  >Hulen</option>
                                                <option value="Hustonville"  >Hustonville</option>
                                                <option value="Hyden"  >Hyden</option>
                                                <option value="Independence"  >Independence</option>
                                                <option value="Inez"  >Inez</option>
                                                <option value="Ingram"  >Ingram</option>
                                                <option value="Irvine"  >Irvine</option>
                                                <option value="Irvington"  >Irvington</option>
                                                <option value="Island"  >Island</option>
                                                <option value="Island City"  >Island City</option>
                                                <option value="Isom"  >Isom</option>
                                                <option value="Isonville"  >Isonville</option>
                                                <option value="Ivel"  >Ivel</option>
                                                <option value="Jackhorn"  >Jackhorn</option>
                                                <option value="Jackson"  >Jackson</option>
                                                <option value="Jamestown"  >Jamestown</option>
                                                <option value="Jeff"  >Jeff</option>
                                                <option value="Jeffersonville"  >Jeffersonville</option>
                                                <option value="Jenkins"  >Jenkins</option>
                                                <option value="Jeremiah"  >Jeremiah</option>
                                                <option value="Jetson"  >Jetson</option>
                                                <option value="Jonancy"  >Jonancy</option>
                                                <option value="Jonesville"  >Jonesville</option>
                                                <option value="Junction City"  >Junction City</option>
                                                <option value="Keaton"  >Keaton</option>
                                                <option value="Keavy"  >Keavy</option>
                                                <option value="Keene"  >Keene</option>
                                                <option value="Kenton"  >Kenton</option>
                                                <option value="Kenvir"  >Kenvir</option>
                                                <option value="Kettle Island"  >Kettle Island</option>
                                                <option value="Kevil"  >Kevil</option>
                                                <option value="Kimper"  >Kimper</option>
                                                <option value="Kings Mountain"  >Kings Mountain</option>
                                                <option value="Kirksey"  >Kirksey</option>
                                                <option value="Kite"  >Kite</option>
                                                <option value="Knifley"  >Knifley</option>
                                                <option value="Knob Lick"  >Knob Lick</option>
                                                <option value="Krypton"  >Krypton</option>
                                                <option value="Kuttawa"  >Kuttawa</option>
                                                <option value="La Center"  >La Center</option>
                                                <option value="La Fayette"  >La Fayette</option>
                                                <option value="La Grange"  >La Grange</option>
                                                <option value="Lackey"  >Lackey</option>
                                                <option value="Lancaster"  >Lancaster</option>
                                                <option value="Langley"  >Langley</option>
                                                <option value="Latonia"  >Latonia</option>
                                                <option value="Lawrenceburg"  >Lawrenceburg</option>
                                                <option value="Lebanon"  >Lebanon</option>
                                                <option value="Lebanon Junction"  >Lebanon Junction</option>
                                                <option value="Leburn"  >Leburn</option>
                                                <option value="Ledbetter"  >Ledbetter</option>
                                                <option value="Leitchfield"  >Leitchfield</option>
                                                <option value="Lerose"  >Lerose</option>
                                                <option value="Letcher"  >Letcher</option>
                                                <option value="Lewisburg"  >Lewisburg</option>
                                                <option value="Lewisport"  >Lewisport</option>
                                                <option value="Lexington"  >Lexington</option>
                                                <option value="Liberty"  >Liberty</option>
                                                <option value="Lick Creek"  >Lick Creek</option>
                                                <option value="Lily"  >Lily</option>
                                                <option value="Linefork"  >Linefork</option>
                                                <option value="Littcarr"  >Littcarr</option>
                                                <option value="Livermore"  >Livermore</option>
                                                <option value="Livingston"  >Livingston</option>
                                                <option value="Lockport"  >Lockport</option>
                                                <option value="London"  >London</option>
                                                <option value="Lone"  >Lone</option>
                                                <option value="Lookout"  >Lookout</option>
                                                <option value="Loretto"  >Loretto</option>
                                                <option value="Lost Creek"  >Lost Creek</option>
                                                <option value="Louisa"  >Louisa</option>
                                                <option value="Louisville"  >Louisville</option>
                                                <option value="Lovelaceville"  >Lovelaceville</option>
                                                <option value="Lovely"  >Lovely</option>
                                                <option value="Lowes"  >Lowes</option>
                                                <option value="Lowmansville"  >Lowmansville</option>
                                                <option value="Loyall"  >Loyall</option>
                                                <option value="Lucas"  >Lucas</option>
                                                <option value="Lynch"  >Lynch</option>
                                                <option value="Lynnville"  >Lynnville</option>
                                                <option value="Maceo"  >Maceo</option>
                                                <option value="Mackville"  >Mackville</option>
                                                <option value="Madisonville"  >Madisonville</option>
                                                <option value="Magnolia"  >Magnolia</option>
                                                <option value="Majestic"  >Majestic</option>
                                                <option value="Mallie"  >Mallie</option>
                                                <option value="Malone"  >Malone</option>
                                                <option value="Mammoth Cave"  >Mammoth Cave</option>
                                                <option value="Manchester"  >Manchester</option>
                                                <option value="Manitou"  >Manitou</option>
                                                <option value="Mannsville"  >Mannsville</option>
                                                <option value="Maple Mount"  >Maple Mount</option>
                                                <option value="Marion"  >Marion</option>
                                                <option value="Marrowbone"  >Marrowbone</option>
                                                <option value="Marshes Siding"  >Marshes Siding</option>
                                                <option value="Martha"  >Martha</option>
                                                <option value="Martin"  >Martin</option>
                                                <option value="Mary Alice"  >Mary Alice</option>
                                                <option value="Mason"  >Mason</option>
                                                <option value="Masonic Home"  >Masonic Home</option>
                                                <option value="Mayfield"  >Mayfield</option>
                                                <option value="Mayking"  >Mayking</option>
                                                <option value="Mayslick"  >Mayslick</option>
                                                <option value="Maysville"  >Maysville</option>
                                                <option value="Mazie"  >Mazie</option>
                                                <option value="Mc Andrews"  >Mc Andrews</option>
                                                <option value="Mc Carr"  >Mc Carr</option>
                                                <option value="Mc Daniels"  >Mc Daniels</option>
                                                <option value="Mc Dowell"  >Mc Dowell</option>
                                                <option value="Mc Henry"  >Mc Henry</option>
                                                <option value="Mc Kee"  >Mc Kee</option>
                                                <option value="Mc Quady"  >Mc Quady</option>
                                                <option value="Mc Roberts"  >Mc Roberts</option>
                                                <option value="Mcandrews"  >Mcandrews</option>
                                                <option value="Mccarr"  >Mccarr</option>
                                                <option value="Mcdowell"  >Mcdowell</option>
                                                <option value="Mchenry"  >Mchenry</option>
                                                <option value="Mckee"  >Mckee</option>
                                                <option value="Mcroberts"  >Mcroberts</option>
                                                <option value="Meally"  >Meally</option>
                                                <option value="Means"  >Means</option>
                                                <option value="Melber"  >Melber</option>
                                                <option value="Melbourne"  >Melbourne</option>
                                                <option value="Melvin"  >Melvin</option>
                                                <option value="Middleburg"  >Middleburg</option>
                                                <option value="Middlesboro"  >Middlesboro</option>
                                                <option value="Midway"  >Midway</option>
                                                <option value="Migrate"  >Migrate</option>
                                                <option value="Milburn"  >Milburn</option>
                                                <option value="Milford"  >Milford</option>
                                                <option value="Millersburg"  >Millersburg</option>
                                                <option value="Millstone"  >Millstone</option>
                                                <option value="Millwood"  >Millwood</option>
                                                <option value="Milton"  >Milton</option>
                                                <option value="Minerva"  >Minerva</option>
                                                <option value="Minnie"  >Minnie</option>
                                                <option value="Miracle"  >Miracle</option>
                                                <option value="Mistletoe"  >Mistletoe</option>
                                                <option value="Mitchellsburg"  >Mitchellsburg</option>
                                                <option value="Mize"  >Mize</option>
                                                <option value="Monticello"  >Monticello</option>
                                                <option value="Moorefield"  >Moorefield</option>
                                                <option value="Morehead"  >Morehead</option>
                                                <option value="Morganfield"  >Morganfield</option>
                                                <option value="Morgantown"  >Morgantown</option>
                                                <option value="Morning View"  >Morning View</option>
                                                <option value="Mortons Gap"  >Mortons Gap</option>
                                                <option value="Mount Eden"  >Mount Eden</option>
                                                <option value="Mount Hermon"  >Mount Hermon</option>
                                                <option value="Mount Olivet"  >Mount Olivet</option>
                                                <option value="Mount Sherman"  >Mount Sherman</option>
                                                <option value="Mount Sterling"  >Mount Sterling</option>
                                                <option value="Mount Vernon"  >Mount Vernon</option>
                                                <option value="Mount Washington"  >Mount Washington</option>
                                                <option value="Mousie"  >Mousie</option>
                                                <option value="Mouthcard"  >Mouthcard</option>
                                                <option value="Mozelle"  >Mozelle</option>
                                                <option value="Muldraugh"  >Muldraugh</option>
                                                <option value="Munfordville"  >Munfordville</option>
                                                <option value="Murray"  >Murray</option>
                                                <option value="Muses Mills"  >Muses Mills</option>
                                                <option value="Myra"  >Myra</option>
                                                <option value="Nancy"  >Nancy</option>
                                                <option value="Nazareth"  >Nazareth</option>
                                                <option value="Nebo"  >Nebo</option>
                                                <option value="Neon"  >Neon</option>
                                                <option value="Nerinx"  >Nerinx</option>
                                                <option value="New Castle"  >New Castle</option>
                                                <option value="New Concord"  >New Concord</option>
                                                <option value="New Haven"  >New Haven</option>
                                                <option value="New Hope"  >New Hope</option>
                                                <option value="New Liberty"  >New Liberty</option>
                                                <option value="Newport"  >Newport</option>
                                                <option value="Nicholasville"  >Nicholasville</option>
                                                <option value="North Middletown"  >North Middletown</option>
                                                <option value="Nortonville"  >Nortonville</option>
                                                <option value="Oak Grove"  >Oak Grove</option>
                                                <option value="Oakland"  >Oakland</option>
                                                <option value="Oil Springs"  >Oil Springs</option>
                                                <option value="Olaton"  >Olaton</option>
                                                <option value="Olive Hill"  >Olive Hill</option>
                                                <option value="Olmstead"  >Olmstead</option>
                                                <option value="Olympia"  >Olympia</option>
                                                <option value="Oneida"  >Oneida</option>
                                                <option value="Ophir"  >Ophir</option>
                                                <option value="Orlando"  >Orlando</option>
                                                <option value="Owensboro"  >Owensboro</option>
                                                <option value="Owenton"  >Owenton</option>
                                                <option value="Owingsville"  >Owingsville</option>
                                                <option value="Paducah"  >Paducah</option>
                                                <option value="Paint Lick"  >Paint Lick</option>
                                                <option value="Paintsville"  >Paintsville</option>
                                                <option value="Paris"  >Paris</option>
                                                <option value="Park City"  >Park City</option>
                                                <option value="Parkers Lake"  >Parkers Lake</option>
                                                <option value="Parksville"  >Parksville</option>
                                                <option value="Partridge"  >Partridge</option>
                                                <option value="Pathfork"  >Pathfork</option>
                                                <option value="Payneville"  >Payneville</option>
                                                <option value="Pembroke"  >Pembroke</option>
                                                <option value="Pendleton"  >Pendleton</option>
                                                <option value="Perry Park"  >Perry Park</option>
                                                <option value="Perryville"  >Perryville</option>
                                                <option value="Petersburg"  >Petersburg</option>
                                                <option value="Pewee Valley"  >Pewee Valley</option>
                                                <option value="Phelps"  >Phelps</option>
                                                <option value="Philpot"  >Philpot</option>
                                                <option value="Phyllis"  >Phyllis</option>
                                                <option value="Pikeville"  >Pikeville</option>
                                                <option value="Pilgrim"  >Pilgrim</option>
                                                <option value="Pine Knot"  >Pine Knot</option>
                                                <option value="Pine Ridge"  >Pine Ridge</option>
                                                <option value="Pine Top"  >Pine Top</option>
                                                <option value="Pineville"  >Pineville</option>
                                                <option value="Pinsonfork"  >Pinsonfork</option>
                                                <option value="Pippa Passes"  >Pippa Passes</option>
                                                <option value="Pittsburg"  >Pittsburg</option>
                                                <option value="Pleasureville"  >Pleasureville</option>
                                                <option value="Plummers Landing"  >Plummers Landing</option>
                                                <option value="Poole"  >Poole</option>
                                                <option value="Port Royal"  >Port Royal</option>
                                                <option value="Powderly"  >Powderly</option>
                                                <option value="Premium"  >Premium</option>
                                                <option value="Preston"  >Preston</option>
                                                <option value="Prestonsburg"  >Prestonsburg</option>
                                                <option value="Primrose"  >Primrose</option>
                                                <option value="Princeton"  >Princeton</option>
                                                <option value="Printer"  >Printer</option>
                                                <option value="Prospect"  >Prospect</option>
                                                <option value="Providence"  >Providence</option>
                                                <option value="Putney"  >Putney</option>
                                                <option value="Quincy"  >Quincy</option>
                                                <option value="Raccoon"  >Raccoon</option>
                                                <option value="Radcliff"  >Radcliff</option>
                                                <option value="Ransom"  >Ransom</option>
                                                <option value="Raven"  >Raven</option>
                                                <option value="Ravenna"  >Ravenna</option>
                                                <option value="Raywick"  >Raywick</option>
                                                <option value="Redfox"  >Redfox</option>
                                                <option value="Reed"  >Reed</option>
                                                <option value="Regina"  >Regina</option>
                                                <option value="Renfro Valley"  >Renfro Valley</option>
                                                <option value="Revelo"  >Revelo</option>
                                                <option value="Reynolds Station"  >Reynolds Station</option>
                                                <option value="Rhodelia"  >Rhodelia</option>
                                                <option value="Ricetown"  >Ricetown</option>
                                                <option value="Richmond"  >Richmond</option>
                                                <option value="Rineyville"  >Rineyville</option>
                                                <option value="River"  >River</option>
                                                <option value="Roark"  >Roark</option>
                                                <option value="Robards"  >Robards</option>
                                                <option value="Robinson Creek"  >Robinson Creek</option>
                                                <option value="Rochester"  >Rochester</option>
                                                <option value="Rockfield"  >Rockfield</option>
                                                <option value="Rockholds"  >Rockholds</option>
                                                <option value="Rockhouse"  >Rockhouse</option>
                                                <option value="Rockport"  >Rockport</option>
                                                <option value="Rocky Hill"  >Rocky Hill</option>
                                                <option value="Rogers"  >Rogers</option>
                                                <option value="Rosine"  >Rosine</option>
                                                <option value="Roundhill"  >Roundhill</option>
                                                <option value="Rousseau"  >Rousseau</option>
                                                <option value="Rowdy"  >Rowdy</option>
                                                <option value="Roxana"  >Roxana</option>
                                                <option value="Royalton"  >Royalton</option>
                                                <option value="Rumsey"  >Rumsey</option>
                                                <option value="Rush"  >Rush</option>
                                                <option value="Russell"  >Russell</option>
                                                <option value="Russell Springs"  >Russell Springs</option>
                                                <option value="Russellville"  >Russellville</option>
                                                <option value="Sacramento"  >Sacramento</option>
                                                <option value="Sadieville"  >Sadieville</option>
                                                <option value="Saint Catharine"  >Saint Catharine</option>
                                                <option value="Saint Charles"  >Saint Charles</option>
                                                <option value="Saint Francis"  >Saint Francis</option>
                                                <option value="Saint Helens"  >Saint Helens</option>
                                                <option value="Saint Mary"  >Saint Mary</option>
                                                <option value="Salem"  >Salem</option>
                                                <option value="Salt Lick"  >Salt Lick</option>
                                                <option value="Salvisa"  >Salvisa</option>
                                                <option value="Salyersville"  >Salyersville</option>
                                                <option value="Sanders"  >Sanders</option>
                                                <option value="Sandgap"  >Sandgap</option>
                                                <option value="Sandy Hook"  >Sandy Hook</option>
                                                <option value="Sassafras"  >Sassafras</option>
                                                <option value="Saul"  >Saul</option>
                                                <option value="Scalf"  >Scalf</option>
                                                <option value="Science Hill"  >Science Hill</option>
                                                <option value="Scottsville"  >Scottsville</option>
                                                <option value="Scuddy"  >Scuddy</option>
                                                <option value="Sebree"  >Sebree</option>
                                                <option value="Seco"  >Seco</option>
                                                <option value="Sedalia"  >Sedalia</option>
                                                <option value="Sextons Creek"  >Sextons Creek</option>
                                                <option value="Sharon Grove"  >Sharon Grove</option>
                                                <option value="Sharpsburg"  >Sharpsburg</option>
                                                <option value="Shelbiana"  >Shelbiana</option>
                                                <option value="Shelby Gap"  >Shelby Gap</option>
                                                <option value="Shelbyville"  >Shelbyville</option>
                                                <option value="Shepherdsville"  >Shepherdsville</option>
                                                <option value="Sidney"  >Sidney</option>
                                                <option value="Siler"  >Siler</option>
                                                <option value="Silver Grove"  >Silver Grove</option>
                                                <option value="Simpsonville"  >Simpsonville</option>
                                                <option value="Sitka"  >Sitka</option>
                                                <option value="Sizerock"  >Sizerock</option>
                                                <option value="Slade"  >Slade</option>
                                                <option value="Slaughters"  >Slaughters</option>
                                                <option value="Slemp"  >Slemp</option>
                                                <option value="Smilax"  >Smilax</option>
                                                <option value="Smith Mills"  >Smith Mills</option>
                                                <option value="Smithfield"  >Smithfield</option>
                                                <option value="Smithland"  >Smithland</option>
                                                <option value="Smiths Grove"  >Smiths Grove</option>
                                                <option value="Soldier"  >Soldier</option>
                                                <option value="Somerset"  >Somerset</option>
                                                <option value="Sonora"  >Sonora</option>
                                                <option value="South Carrollton"  >South Carrollton</option>
                                                <option value="South Portsmouth"  >South Portsmouth</option>
                                                <option value="South Shore"  >South Shore</option>
                                                <option value="South Union"  >South Union</option>
                                                <option value="South Williamson"  >South Williamson</option>
                                                <option value="Sparta"  >Sparta</option>
                                                <option value="Spottsville"  >Spottsville</option>
                                                <option value="Springfield"  >Springfield</option>
                                                <option value="Staffordsville"  >Staffordsville</option>
                                                <option value="Stambaugh"  >Stambaugh</option>
                                                <option value="Stamping Ground"  >Stamping Ground</option>
                                                <option value="Stanford"  >Stanford</option>
                                                <option value="Stanley"  >Stanley</option>
                                                <option value="Stanton"  >Stanton</option>
                                                <option value="Stanville"  >Stanville</option>
                                                <option value="Stearns"  >Stearns</option>
                                                <option value="Steele"  >Steele</option>
                                                <option value="Stephensport"  >Stephensport</option>
                                                <option value="Stinnett"  >Stinnett</option>
                                                <option value="Stone"  >Stone</option>
                                                <option value="Stoney Fork"  >Stoney Fork</option>
                                                <option value="Stopover"  >Stopover</option>
                                                <option value="Strunk"  >Strunk</option>
                                                <option value="Sturgis"  >Sturgis</option>
                                                <option value="Sullivan"  >Sullivan</option>
                                                <option value="Sulphur"  >Sulphur</option>
                                                <option value="Summer Shade"  >Summer Shade</option>
                                                <option value="Summersville"  >Summersville</option>
                                                <option value="Sweeden"  >Sweeden</option>
                                                <option value="Symsonia"  >Symsonia</option>
                                                <option value="Taylorsville"  >Taylorsville</option>
                                                <option value="Teaberry"  >Teaberry</option>
                                                <option value="Thelma"  >Thelma</option>
                                                <option value="Thornton"  >Thornton</option>
                                                <option value="Thousandsticks"  >Thousandsticks</option>
                                                <option value="Tiline"  >Tiline</option>
                                                <option value="Tollesboro"  >Tollesboro</option>
                                                <option value="Tolu"  >Tolu</option>
                                                <option value="Tomahawk"  >Tomahawk</option>
                                                <option value="Tompkinsville"  >Tompkinsville</option>
                                                <option value="Topmost"  >Topmost</option>
                                                <option value="Totz"  >Totz</option>
                                                <option value="Tram"  >Tram</option>
                                                <option value="Trenton"  >Trenton</option>
                                                <option value="Trosper"  >Trosper</option>
                                                <option value="Turners Station"  >Turners Station</option>
                                                <option value="Tutor Key"  >Tutor Key</option>
                                                <option value="Tyner"  >Tyner</option>
                                                <option value="Ulysses"  >Ulysses</option>
                                                <option value="Union"  >Union</option>
                                                <option value="Union Star"  >Union Star</option>
                                                <option value="Uniontown"  >Uniontown</option>
                                                <option value="Upton"  >Upton</option>
                                                <option value="Utica"  >Utica</option>
                                                <option value="Van Lear"  >Van Lear</option>
                                                <option value="Vanceburg"  >Vanceburg</option>
                                                <option value="Vancleve"  >Vancleve</option>
                                                <option value="Varney"  >Varney</option>
                                                <option value="Verona"  >Verona</option>
                                                <option value="Versailles"  >Versailles</option>
                                                <option value="Vest"  >Vest</option>
                                                <option value="Vicco"  >Vicco</option>
                                                <option value="Vincent"  >Vincent</option>
                                                <option value="Vine Grove"  >Vine Grove</option>
                                                <option value="Viper"  >Viper</option>
                                                <option value="Virgie"  >Virgie</option>
                                                <option value="Waco"  >Waco</option>
                                                <option value="Waddy"  >Waddy</option>
                                                <option value="Walker"  >Walker</option>
                                                <option value="Wallingford"  >Wallingford</option>
                                                <option value="Wallins Creek"  >Wallins Creek</option>
                                                <option value="Walton"  >Walton</option>
                                                <option value="Waneta"  >Waneta</option>
                                                <option value="Warbranch"  >Warbranch</option>
                                                <option value="Warfield"  >Warfield</option>
                                                <option value="Warsaw"  >Warsaw</option>
                                                <option value="Washington"  >Washington</option>
                                                <option value="Water Valley"  >Water Valley</option>
                                                <option value="Waverly"  >Waverly</option>
                                                <option value="Wayland"  >Wayland</option>
                                                <option value="Waynesburg"  >Waynesburg</option>
                                                <option value="Webbville"  >Webbville</option>
                                                <option value="Webster"  >Webster</option>
                                                <option value="Weeksbury"  >Weeksbury</option>
                                                <option value="Welchs Creek"  >Welchs Creek</option>
                                                <option value="Wellington"  >Wellington</option>
                                                <option value="Wendover"  >Wendover</option>
                                                <option value="West Liberty"  >West Liberty</option>
                                                <option value="West Louisville"  >West Louisville</option>
                                                <option value="West Paducah"  >West Paducah</option>
                                                <option value="West Point"  >West Point</option>
                                                <option value="West Somerset"  >West Somerset</option>
                                                <option value="West Van Lear"  >West Van Lear</option>
                                                <option value="Westport"  >Westport</option>
                                                <option value="Westview"  >Westview</option>
                                                <option value="Wheatcroft"  >Wheatcroft</option>
                                                <option value="Wheelwright"  >Wheelwright</option>
                                                <option value="Whick"  >Whick</option>
                                                <option value="White Mills"  >White Mills</option>
                                                <option value="White Plains"  >White Plains</option>
                                                <option value="Whitesburg"  >Whitesburg</option>
                                                <option value="Whitesville"  >Whitesville</option>
                                                <option value="Whitley City"  >Whitley City</option>
                                                <option value="Wickliffe"  >Wickliffe</option>
                                                <option value="Wildie"  >Wildie</option>
                                                <option value="Willard"  >Willard</option>
                                                <option value="Williamsburg"  >Williamsburg</option>
                                                <option value="Williamsport"  >Williamsport</option>
                                                <option value="Williamstown"  >Williamstown</option>
                                                <option value="Willisburg"  >Willisburg</option>
                                                <option value="Wilmore"  >Wilmore</option>
                                                <option value="Winchester"  >Winchester</option>
                                                <option value="Windsor"  >Windsor</option>
                                                <option value="Wingo"  >Wingo</option>
                                                <option value="Winston"  >Winston</option>
                                                <option value="Wittensville"  >Wittensville</option>
                                                <option value="Woodbine"  >Woodbine</option>
                                                <option value="Woodburn"  >Woodburn</option>
                                                <option value="Woodbury"  >Woodbury</option>
                                                <option value="Woollum"  >Woollum</option>
                                                <option value="Wooton"  >Wooton</option>
                                                <option value="Worthington"  >Worthington</option>
                                                <option value="Worthville"  >Worthville</option>
                                                <option value="Wrigley"  >Wrigley</option>
                                                <option value="Yeaddiss"  >Yeaddiss</option>
                                                <option value="Yerkes"  >Yerkes</option>
                                                <option value="Yosemite"  >Yosemite</option>
                                                <option value="Zoe"  >Zoe</option>

                                            </select>
                                            <br><span id="city_span"></span>
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit"><span class="red-star">*</span>Pincode</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="pin1" name="pin1" value="6575464">
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit"><span class="red-star">*</span>Mobile Number</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="mobno" name="mobno" value="">
                                        </div>
                                    </div><!--col-md-6-->
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit">Landline Number</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control"  placeholder="+91" id="isd1" name="isd1" value="">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control"  placeholder="044" id="std1" name="std1" value="" >
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control"  placeholder="123456" id="ph11" name="ph11" value="7856756756">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit">Fax</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="fax1" name="fax1" onKeyUp="chkkabuse(this.id);" value="">
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-sm-8">

                                    <div class="col-sm-3 ">
                                        <input class="btn-blue btn bc" type="button" id="submits" name="submits" value="SAVE" onClick="save_acc6();">

                                    </div>
                                    <div class="col-sm-3 padno">
                                        <div class="btn-blue btn bc"><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/employer-profile-view.html" style="color:#FFF"> Cancel </a><!-- <input type="reset" value="Cancel" onclick="cls_acc6();" />--></div>
                                    </div><br>
                                </div>
                            </div>
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
    function div_dis1()
    {
//alert("fgd");
        $("#display1").hide();
        $("#display11").show();
        $("#display22").hide();
        $("#display33").hide();
        $("#display2").show();
        $("#display3").show();
    }
    function div_dis2()
    {
//alert("fgd");
        $("#display2").hide();
        $("#display22").show();
        $("#display11").hide();
        $("#display33").hide();
        $("#display1").show();
        $("#display3").show();

    }
    function div_dis3()
    {
//alert("fgd");
        $("#display3").hide();
        $("#display33").show();
        $("#display11").hide();
        $("#display22").hide();
        $("#display1").show();
        $("#display2").show();
    }
</script>

@endsection
