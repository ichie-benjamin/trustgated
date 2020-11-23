@extends('layouts.master')

@section('content')
    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('employer.profile')  }}">My Account</a></li>
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

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <strong>Successful!</strong> {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if (session('failure'))
                        <div class="alert alert-danger" role="alert">
                            <strong>Error!</strong> {{ session('failure') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div>

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
                                                <label  class="col-sm-4 pedit">First Name </label>
                                                <div class="col-sm-8">
                                                    <label id="cpname"> {{ $user->first_name }}</label>
                                                </div>
                                            </div><!--col-md-6-->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  class="col-sm-4 pedit">Last Name </label>
                                                <div class="col-sm-8">
                                                    <label id="cpname"> {{ $user->last_name }}</label>
                                                </div>
                                            </div><!--col-md-6-->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  class="col-sm-4 pedit">Phone </label>
                                                <div class="col-sm-8">
                                                    <label id="cpname"> {{ $user->mobile_number }}</label>
                                                </div>
                                            </div><!--col-md-6-->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  class="col-sm-4 pedit">Address </label>
                                                <div class="col-sm-8">
                                                    <label id="cpname"> {{ $user->address }}</label>
                                                </div>
                                            </div><!--col-md-6-->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  class="col-sm-4 pedit">Country </label>
                                                <div class="col-sm-8">
                                                    <label id="cpname"> {{ $user->country }}</label>
                                                </div>
                                            </div><!--col-md-6-->
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  class="col-sm-4 pedit">State </label>
                                                <div class="col-sm-8">
                                                    <label id="cpname"> {{ $user->state }}</label>
                                                </div>
                                            </div><!--col-md-6-->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  class="col-sm-4 pedit">City </label>
                                                <div class="col-sm-8">
                                                    <label id="cpname"> {{ $user->city }}</label>
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
                                                    <label id="rec_type">{{ optional($user->job_plan->product)->name }} </label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-sm-4 pedit">Expired at :</label>
                                                <div class="col-sm-6">
                                                    <label id="rec_type">{{ optional($user->job_plan)->expired_at->diffforhumans() }} </label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-sm-4 pedit">Membership plan for Resume Access :</label>
                                                <div class="col-sm-6">
                                                    <label id="rec_type">{{ optional($user->access_plan->access)->name }} </label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-sm-4 pedit">Expired at:</label>
                                                <div class="col-sm-6">
                                                    <label id="rec_type">{{ optional($user->access_plan)->expired_at->diffforhumans() }} </label>
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
                                            <img src="{{ asset($user->avatar)}}" width="150" >						</div>
                                    </div>
                                </div>
                            </div>
                            <div id="display11" style="display:none">
                                <div class="top-emp-center">
                                    <h4>Edit Account Details</h4>
                                </div><br />
                                <form method="POST" class="form-horizontal m10"  action="{{ route('user.account.update') }}">
                                    @csrf
                                    <input name="gender" type="hidden"><input name="phone_countrycode" type="hidden"><input name="land_countrycode" type="hidden"><input name="land_areacode" type="hidden">
                                    <input name="exp_year" type="hidden"><input name="exp_month" type="hidden"><input name="function_area" type="hidden"><input name="keyskills" type="hidden"><input name="basic_education" type="hidden"><input name="course" type="hidden"><input name="course2" type="hidden"><input name="course3" type="hidden">



                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  class="col-sm-4 pedit"> User Name  </label>
                                            <div class="col-sm-8">
                                                {{ $user->name }}                                 </div>
                                        </div><!--form-group-->
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  class="col-sm-4 pedit"><span class="red-star">*</span>First Name </label>
                                            <div class="col-sm-8">
                                                <input type="text" required class="form-control" name="first_name" value="{{ $user->first_name }}">
                                            </div>
                                        </div><!--col-md-6-->
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Last Name </label>
                                            <div class="col-sm-8">
                                                <input type="text" required class="form-control" name="last_name" value="{{ $user->last_name }}">
                                            </div>
                                        </div><!--col-md-6-->
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Company Address </label>
                                            <div class="col-sm-8">
                                                <input type="text" required class="form-control" name="address" value="{{ $company->address }}">
                                            </div>
                                        </div><!--col-md-6-->
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  class="col-sm-4 pedit">Mobile Number </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="mobile_number" value="{{ $user->mobile_number }}">
                                            </div>
                                        </div><!--col-md-6-->
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Profile Image</label>
                                            <div class="col-sm-8">
                                                <div class="-group">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <a data-input="thumbnail1" data-preview="avatar" class="btn btn-primary lfm">
                                                                <i class="fa fa-picture-o"></i> Choose Profile Image
                                                            </a>
                                                        </span>
                                                        <input id="thumbnail1" value="{{ $user->avatar }}" required class="form-control" type="hidden"
                                                               name="avatar">
                                                    </div>
                                                    <div id="avatar" style="margin-top:15px; margin-bottom:20px;max-height:200px;"></div>
                                                </div>
                                            </div>
                                        </div><!--col-md-6-->
                                    </div>


{{--                                    <div class="col-md-8">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Pincode </label>--}}
{{--                                            <div class="col-sm-8">--}}
{{--                                                <input type="text" class="form-control" name="pincode" value="{{ $user->pincode }}" />--}}
{{--                                            </div>--}}
{{--                                        </div><!--col-md-6-->--}}
{{--                                    </div>--}}
                                    <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit"><span class="red-star">*</span>Country: </label>
                                        <div class="col-sm-8">
                                            <select style="width: 100%!important;" name="country" class="form-control country_select select2" required data-size="7" title="Select country Type">
                                                <option  value="{{ $user->country }}">{{ $user->country }}</option>
                                                @foreach(\App\Models\Country::pluck('name') as $item)
                                                    <option  value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div>
                                            <span id="countryInfo"></span>
                                        </div>
                                    </div><!--form-group-->
                                    </div>


                                    <div class="col-md-8">
                                    <div class="form-group" id="statee">
                                        <label class="col-sm-4 pedit"><span class="red-star">*</span>State: </label>
                                        <div class="col-sm-8">
                                            <select style="width: 100%" class="form-control select2 states" required name="state">

                                                <option>Select Country first</option>

                                            </select>

                                        </div>
                                        <div>
                                            <span id="stateInfo"></span>
                                        </div>
                                    </div><!--form-group-->
                                    </div>

                                    <div class="col-md-8">
                                    <div class="form-group" id="cityy">
                                        <label class="col-sm-4 pedit"><span class="red-star">*</span>City: </label>
                                        <div class="col-sm-8">
                                            <input required type="text" name="city" id="city"  value="{{ $user->city }}" class="form-control" placeholder="">

                                        </div>
                                        <div>
                                            <span id="cityInfo"></span>
                                        </div>
                                    </div><!--form-group-->
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
                                            {{--                                        <label class="radio-inline pedit4">--}}
                                            {{--                                            <input name="role" type="radio" @if($user->role == 'consultant') checked @endif  value="consultant" > Consultant--}}
                                            {{--                                        </label>--}}
                                            <div id="typeLabel" class="floaterror"></div>
                                        </div>
                                    </div>

                                    <div class="col-sm-8">

                                        <div class="col-sm-3 ">
                                            <input class="btn-blue btn bc" type="submit" name="submits" value="SAVE">

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
                                <div class="form-horizontal">
                                    <div class="col-md-8">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  class="col-sm-4 pedit">Contact Person  </label>
                                                <div class="col-sm-8">
                                                    <label id="uname">{{ $company->contact_person }} </label>
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
                                                <label  class="col-sm-4 pedit">Company Phone </label>
                                                <div class="col-sm-8">
                                                    <label id="cpname"> {{ $company->phone }}</label>
                                                </div>
                                            </div><!--col-md-6-->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  class="col-sm-4 pedit">Company Address </label>
                                                <div class="col-sm-8">
                                                    <label id="cpname"> {{ $company->address }}</label>
                                                </div>
                                            </div><!--col-md-6-->
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  class="col-sm-4 pedit">Company Website </label>
                                                <div class="col-sm-8">
                                                    <label id="cpname"> {{ $company->website }}</label>
                                                </div>
                                            </div><!--col-md-6-->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  class="col-sm-4 pedit">Company Info </label>
                                                <div class="col-sm-8">
                                                    <label id="cpname"> {{ $company->info }}</label>
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

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <img src="{{ asset($company->logo)}}" width="150" >						</div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  class="col-sm-4 pedit"><h5><a href="javascript:;" style="color:#0099FF" onclick="div_dis2();"> Edit Company Details </a></h5></label>
                                            <div class="col-sm-8">

                                            </div>
                                        </div><!--form-group-->
                                    </div>
                                </div>

                                <!--col-md-6-->
                            </div>
                            <div id="display22" style="display:none">
                                <form method="POST"  id="form_div" class="form-horizontal m10"  action="{{ route('companies.update', $company->id) }}">

                                    <div class="top-emp-center">
                                        <h4>Edit Company Details</h4>
                                    </div><br />
                                    @csrf
                                    @method('PATCH')
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
                                                <input type="text" required class="form-control" name="name" value="{{ $company->name }}">
                                            </div>
                                        </div><!--col-md-6-->
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Company Address </label>
                                            <div class="col-sm-8">
                                                <input type="text" required class="form-control" name="address" value="{{ $company->address }}">
                                            </div>
                                        </div><!--col-md-6-->
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  class="col-sm-4 pedit">Company Website </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="website" value="{{ $company->website }}">
                                            </div>
                                        </div><!--col-md-6-->
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Company Phone </label>
                                            <div class="col-sm-8">
                                                <input type="text" required class="form-control" name="phone" value="{{ $company->phone }}">
                                            </div>
                                        </div><!--col-md-6-->
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Company Info </label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" name="info">{{ $company->info }}</textarea>
                                            </div>
                                        </div><!--col-md-6-->
                                    </div>
                                    <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit"><span class="red-star">*</span> Industry Type : </label>
                                        <div class="col-sm-8">
                                            <select class="form-control select2" required name="type" id="Industry_Type">
                                                <option value="{{ $company->type }}">{{ $company->type }}</option>
                                                @foreach ($industries as $key => $value)
                                                    <option value="{{ $key  }}">{{ $key }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Master Email</label>
                                            <div class="col-sm-8">
                                                <input type="text" disabled class="form-control" name="email1" id="email1" value="{{ $user->email }}">
                                            </div>
                                        </div><!--col-md-6-->
                                    </div>
{{--                                    <div class="col-sm-8">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="col-sm-4 pedit2"><span class="red-star">*</span>Type </label>--}}
{{--                                            <label class="radio-inline pedit4">--}}
{{--                                                <input name="role" @if($user->role == 'employer') checked @endif type="radio" value="employer">Company--}}
{{--                                            </label>--}}
{{--                                            --}}{{--                                        <label class="radio-inline pedit4">--}}
{{--                                            --}}{{--                                            <input name="role" type="radio" @if($user->role == 'consultant') checked @endif  value="consultant" > Consultant--}}
{{--                                            --}}{{--                                        </label>--}}
{{--                                            <div id="typeLabel" class="floaterror"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Contact Person</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="contact_person" value="{{ $company->contact_person }}" >
                                            </div>
                                        </div><!--col-md-6-->
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Logo</label>
                                            <div class="col-sm-8">
                                                <div class="-group">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <a data-input="thumbnail" data-preview="holder" class="btn btn-primary lfm">
                                                                <i class="fa fa-picture-o"></i> Choose Company Logo
                                                            </a>
                                                        </span>
                                                        <input id="thumbnail" value="{{ $company->logo }}" required class="form-control" type="hidden"
                                                               name="logo">
                                                    </div>
                                                    <div id="holder" style="margin-top:15px; margin-bottom:20px;max-height:200px;"></div>
                                                </div>
                                            </div>
                                        </div><!--col-md-6-->
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  class="col-sm-4 pedit"><span class="red-star">*</span>Company Profile</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" cols="30" rows="6" name="info">{{ $company->info }}</textarea>
                                            </div>
                                        </div><!--col-md-6-->
                                    </div>
                                    <div class="col-sm-8">

                                        <div class="col-sm-8">

                                            <div class="col-sm-3 ">
                                                <input class="btn-blue btn bc" type="submit" name="submits" value="SAVE">

                                            </div>
                                            <div class="col-sm-3 padno">
                                                <div class="btn-blue btn bc"><a href="{{ route('employer.profile') }}" style="color:#FFF"> Cancel </a> </div><!--<input type="reset" onclick="cls_acc2();" value="Cancel" /><!--</div>-->
                                                <br>
                                            </div>
                                        </div>

                                    </div>
                                </form>
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
                                            <label id="lab">{{ $user->address }} </label>
                                        </div>
                                    </div><!--form-group-->
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit">Country </label>
                                        <div class="col-sm-8">
                                            {{ $user->country }}
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit">State </label>
                                        <div class="col-sm-8">
                                            <!-- <textarea class="form-control" rows="3"></textarea>-->
                                            <label id="state">
                                                {{ $user->state }}
                                            </label>
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit">City </label>
                                        <div class="col-sm-8">
                                            <!-- <textarea class="form-control" rows="3"></textarea>-->
                                            <label id="city">
                                                {{ $user->city }}
                                            </label>
                                        </div>
                                    </div><!--col-md-6-->
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label  class="col-sm-4 pedit">Mobile Number </label>
                                        <div class="col-sm-8">
                                            <!-- <textarea class="form-control" rows="3"></textarea>-->
                                            <label id="mobn">  {{ $user->mobile_number }} </label>
                                        </div>
                                    </div><!--col-md-6-->
                                </div>
{{--                                <div class="col-md-8">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label  class="col-sm-4 pedit">Landline Number</label>--}}
{{--                                        <div class="col-sm-8">--}}
{{--                                            <!-- <textarea class="form-control" rows="3"></textarea>-->--}}
{{--                                            <label id="ph1">--}}
{{--                                                {{7856756756}} </label>--}}
{{--                                        </div>--}}
{{--                                    </div><!--col-md-6-->--}}
{{--                                </div>--}}

                            </div>

                        </div>

                    </div><!--col-sm-9-->
                </div><!--row-->
            </div><!-- container -->

        </div><!-- CONTENT -->
        <!--ADVANCED SEARCH POPUP-->

    </div>
        @endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('/css/select2.css') }}">
@endsection

        @section('js')
            <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

            <script src="{{ asset('/js/select2.full.js')}}" type="text/javascript"></script>


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

                $('.lfm').filemanager('image');

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

{{--@section('js')--}}


{{--    <script>--}}
{{--        $('.lfm').filemanager('image');--}}
{{--    </script>--}}

{{--@endsection--}}
