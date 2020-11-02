@extends('layouts.master')

@section('content')

    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('jobseeker.profile') }}">My Account</a></li>
                <li class="active">Other Details</li>
            </ol>
            <div class="row">
                <div class="col-md-2 padno">


                   @include('layouts.partials.job-sidebar')
                    <!--create-job-->

                </div><!--col-sm-2-->
                <form class="form-horizontal m10" method="POST" action="{{ route('user.update.more') }}" name="moredetails" id="moredetails">
                    @csrf
                    <div class="col-md-10 m10" >

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                <strong>Successful!</strong> {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="top-emp-center">
                            <h4>Other Details</h4>
                        </div> <!--top-emp-center-->



                        <p class="m10">The information on this page will make your profile complete</p>

                        <div class="all-catehead blue">Languages Known</div>

                        <div class="form-group ">
                            <div class="row">
                                <div class="col-sm-4 all-catehead">Language</div>
                                <div class="col-sm-2 all-catehead">Proficiency Level </div>
                                <div class="col-sm-1 all-catehead">Read </div>
                                <div class="col-sm-1 all-catehead">Write </div>
                                <div class="col-sm-1 all-catehead">Speak </div>
                            </div>

                            <div class="row m10">
                                <div class="col-sm-4 "><input type="Text" name="language1" id="language" class="form-control"value="{{ $user->language1 }}" ></div>
                                <div class="col-sm-2 ">
                                    <select class="form-control" name="language1_proficiency" id="proficiencylevel">
                                        <option value="{{ $user->language1_proficiency }}">{{ $user->language1_proficiency }} </option>
                                        <option value="Beginner" >Beginner</option>
                                        <option value="Proficient" >Proficient</option>
                                        <option value="Expert" >Expert</option>
                                    </select>
                                </div>
                                <div class="col-sm-1 "><label class="checkbox-inline mbt55"><input type="checkbox" name="language1_rws[]" id="read" value="Read" ></label></div>
                                <div class="col-sm-1 "><label class="checkbox-inline mbt55"><input type="checkbox" name="language1_rws[]" id="write" value="Write" ></label> </div>
                                <div class="col-sm-1 "><label class="checkbox-inline mbt55"><input type="checkbox" name="language1_rws[]" id="speak" value="Speak" ></label></div>
                            </div>
                            <div class="row m10">
                                <div class="col-sm-4 "><input type="Text" name="language2" id="language" class="form-control"value="{{ $user->language2 }}" ></div>
                                <div class="col-sm-2 ">
                                    <select class="form-control" name="language2_proficiency" id="proficiencylevel">
                                        <option value="{{ $user->language2_proficiency }}">{{ $user->language2_proficiency }} </option>
                                        <option value="Beginner" >Beginner</option>
                                        <option value="Proficient" >Proficient</option>
                                        <option value="Expert" >Expert</option>
                                    </select>
                                </div>
                                <div class="col-sm-1 "><label class="checkbox-inline mbt55"><input type="checkbox" name="language2_rws[]" id="read" value="Read" ></label></div>
                                <div class="col-sm-1 "><label class="checkbox-inline mbt55"><input type="checkbox" name="language2_rws[]" id="write" value="Write" ></label> </div>
                                <div class="col-sm-1 "><label class="checkbox-inline mbt55"><input type="checkbox" name="language2_rws[]" id="speak" value="Speak" ></label></div>
                            </div>
                            <div class="row m10">
                                <div class="col-sm-4 "><input type="Text" name="language3" id="language" class="form-control"value="{{ $user->language3 }}" ></div>
                                <div class="col-sm-2 ">
                                    <select class="form-control" name="language3_proficiency" id="proficiencylevel">
                                        <option value="{{ $user->language3_proficiency }}">{{ $user->language3_proficiency }} </option>
                                        <option value="Beginner" >Beginner</option>
                                        <option value="Proficient" >Proficient</option>
                                        <option value="Expert" >Expert</option>
                                    </select>
                                </div>
                                <div class="col-sm-1 "><label class="checkbox-inline mbt55"><input type="checkbox" name="language3_rws[]" id="read" value="Read" ></label></div>
                                <div class="col-sm-1 "><label class="checkbox-inline mbt55"><input type="checkbox" name="language3_rws[]" id="write" value="Write" ></label> </div>
                                <div class="col-sm-1 "><label class="checkbox-inline mbt55"><input type="checkbox" name="language3_rws[]" id="speak" value="Speak" ></label></div>
                            </div>


                        </div><!--form-group-->

                        <div class="all-catehead blue">Desired Job</div>

                        <div class="form-group col-sm-12">
                            <label class="col-sm-3 pedit2 text-right">Job Type: </label>
                            <div class="col-sm-5">
                                <label class="radio-inline">
                                    <input required type="radio" @if ($user->job_type == 'permanent') checked @endif name="job_type" id="permanent" value="permanent"> Permanent
                                </label>
                                <label class="radio-inline">
                                    <input required @if ($user->job_type == 'temporay') checked @endif  type="radio" name="job_type" id="temporay" value="temporay" > Temporary/Contractual
                                </label>
                            </div>
                        </div><!--form-group-->

                        <div class="form-group col-sm-12">
                            <label class="col-sm-3 pedit2 text-right">Employment Status: </label>
                            <div class="col-sm-5">
                                <label class="radio-inline">
                                    <input @if ($user->employment_status == 'Full time') checked @endif required type="radio" name="employment_status" id="full" value="Full time" >  Full Time
                                </label>
                                <label class="radio-inline">
                                    <input @if ($user->employment_status == 'Part time') checked @endif required type="radio" name="employment_status" id="part" value="Part time" >  Part Time
                                </label>
                            </div>
                        </div><!--form-group-->


                        <div class="all-catehead blue">Affirmative Action</div>

                        <div class="form-group col-sm-12">
                            <label class="col-sm-3 pedit2 text-right">Category: </label>
                            <div class="col-sm-2">
                                <select  class="form-control" name="affirmative_category" id="categories" >
                                    <option value="">Select </option>
                                    <option value="general" >General</option>
                                    <option value="sc" >SC</option>
                                    <option value="st" >ST</option>
                                    <option value="obc-creamy" >OBC-Creamy</option>
                                    <option value="obc-non-creamy" >OBC-Non-Creamy</option>
                                </select>
                            </div>
                        </div><!--form-group-->

                        <div class="form-group col-sm-12">
                            <label class="col-sm-3 pedit2 text-right">Physically Challenged: </label>
                            <div class="col-sm-5">
                                <label class="radio-inline">
                                    <input required type="radio" @if ($user->physically_challenged) checked @endif name="physically_challenged" id="phychallenge" value="1"> Yes
                                </label>
                                <label class="radio-inline">
                                    <input required type="radio" @if (!$user->physically_challenged) checked @endif name="physically_challenged" id="phychallenge2" value="0"> No
                                </label>
                            </div>
                        </div><!--form-group-->

                        <div class="form-group col-sm-12" id="desc">
                            <label class="col-sm-3 pedit2 text-right">Description: </label>
                            <div class="col-sm-4">
                                <textarea class="texcover1" rows="2" name="affirmative_description" id="counter_selector2" maxlength='150'>{{ $user->affirmative_description }}</textarea>
                            </div>
                            <div class="col-md-2"><div id="my_counter2"></div></div>
                        </div><!--form-group-->

                        <div class="all-catehead blue">Work Authorization</div>

                        <div class="form-group col-sm-12">
                            <label class="col-sm-3 pedit2 text-right">Work Permit for USA: </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="usa_work_permit" id="workusa">
                                    <option value="{{ $user->usa_work_permit }}">{{ $user->usa_work_permit }}</option>
                                    <option value="Have H1 Visa" >Have H1 Visa</option>
                                    <option value="Have H1 Visa" >Have H1 Visa</option>
                                    <option value="Need H1 Visa" >Need H1 Visa</option>
                                    <option value="TN Permit Holder" >TN Permit Holder</option>
                                    <option value="Green Card Holder" >Green Card Holder</option>
                                    <option value="US Citizen" >US Citizen</option>
                                    <option value="Authorized to work in US" >Authorized to work in US</option>
                                </select>
                            </div>
                        </div><!--form-group-->

                        <div class="form-group col-sm-12">
                            <label class="col-sm-3 pedit2 text-right">Other Countries: </label>
                            <div class="col-sm-4">
                                <select multiple rows="2" name="country_work_permit[]" id="otherco" class="form-control">


                                    <option selected value="India">India</option>


                                    <option selected value="Australia">Australia</option>


                                    <option selected value="Bahrain">Bahrain</option>


                                    <option selected value="Bangladesh">Bangladesh</option>


                                    <option selected value="Belgium">Belgium</option>


                                    <option selected value="Italy">Italy</option>


                                    <option selected value="Canada">Canada</option>


                                    <option selected value="China">China</option>


                                    <option selected value="Dubai">Dubai</option>


                                    <option selected value="France">France</option>


                                </select>
                                <!--<small class="pedit">Select only up to 3 countries.</small> -->
                            </div>
                        </div><!--form-group-->



                        <div class="col-md-12">
                            <div class="col-sm-3"> </div>
                            <div class="ali-left col-sm-8"> <input class="btn-blue btn bc" value="Complete Profile" id="save1" type="submit"></div>
                        </div>
                    </div><!--col-sm-10-->
                </form>
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->


@endsection
