
@extends('layouts.verification')

@section('head')
    <div class="row">
        <div class="col-md-12">
            <div class="banner-headline">
                <h3>
                    <strong style="color: white">Background Verification 3</strong>

                </h3>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="section margin-top-65">
        <div class="container">
            <div class="row">

                <!-- Dashboard Box -->
                <div class="col-lg-10 offset-md-1">
                    <div class="dashboard-box margin-top-0">

                        <div class="headline">
                            <h4>Hire Ready Application Form (Package 1)</h4>
                            <p> Employment Details - Step 3 of 3</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                            </div>
                        </div>

                        <div class="content with-padding padding-bottom-10">
                            <div class="row">

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>First Name<span class="text text-danger">*</span></h5>
                                        <input type="text" name="first_name" class="with-border">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Middle Name<span class="text text-danger">*</span></h5>
                                        <input type="text" name="middle_name" class="with-border">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Last Name<span class="text text-danger">*</span></h5>
                                        <input type="text" name="last_name" class="with-border">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="submit-field">
                                        <h5>Reference Name First Name<span class="text text-danger">*</span></h5>
                                        <input type="text"   class="with-border">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="submit-field">
                                        <h5>Reference Name Last Name<span class="text text-danger">*</span></h5>
                                        <input type="text"  class="with-border">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="submit-field">
                                        <h5>Email</h5>
                                        <input type="text" class="with-border">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="submit-field">
                                        <h5>Reference Email ID</h5>
                                        <div class="input-with-icon">
                                            <div id="autocomplete-container">
                                                <input id="autocomplete-input" class="with-border" type="text" placeholder="Enter Email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="submit-field">
                                        <h5>Confirm Email</h5>
                                        <div class="input-with-icon">
                                            <div id="autocomplete-container">
                                                <input id="autocomplete-input" class="with-border" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="submit-field">
                                        <h5>Reference Phone</h5>
                                        <div class="input-with-icon">
                                            <div id="autocomplete-container">
                                                <input id="autocomplete-input" class="with-border" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="submit-field">
                                        <h5>Write about your reference</h5>
                                        <textarea cols="30" rows="5" class="with-border"></textarea>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <a href="#" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i>Proceed to Payment</a>
                    </div>
                </div>


            </div>

        </div>
    </div>
@endsection
