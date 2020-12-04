@extends('layouts.master')

@section('content')
    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Resume Access</a></li>
                        <li class="active">Candidate Manager</li>
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
                    <div class="top-emp-center">
                        <h4>Candidate Manager</h4>
                    </div> <!--top-emp-center-->
                    <div style="color:#009900; padding:5px;"> 					</div>
                    <table width="100%">
                        <tr class="folderhead">
                            <td class="mangerhead">
                                <a href="" style="text-decoration:none; color: #017BC6;">
                                    Search Result   ( {{ count($users) }} )
                                    <hr style="margin:-2px 25px 7px 25px; border-width:2px;">
                                </a>
                            </td>
                        </tr>
                    </table>
                    <form method='post' action='#' name='mailform'>

                        <div class="candidatelist">
                            <p><strong>List of candidates</strong></p>
                            <h6 style="float:right;">
                                <strong>
                                    Search Result Candidates Below
                                </strong>
                            </h6>
                            <div class="clear">&nbsp;</div>
                            <div class="procinfobar" style="margin-top:7px;">
                                <div class="">

                                </div>

                                <table width="100%" class="table table-bordered">
                                    <tr style="background-color:#E5E5E5; height:30px; font-size:13px;">
                                        <td style="width:3%; text-align:center;">
                                            <label class="checkbox-inline" style="margin-top: -24px; margin-left: 5px; ">
                                                <input type="checkbox" name="select_all_contacts" id="select_all_contacts" onClick="selectUnselect_contacts(this.form)" class="text1"/>
                                            </label>
                                        </td>
                                        <td>
                                            <strong>Candidate Summary</strong>
                                        </td>
                                        <td>
                                            <strong>Professional Details</strong>
                                        </td>
{{--                                        <td>--}}
{{--                                            <strong>Personal Details</strong>--}}
{{--                                        </td>--}}
                                        <td style="width: 15%; text-align:center;">
                                            Process
                                        </td>
                                    </tr>
                                    @foreach($users as $user)
                                    <tr >
                                        <td valign="top" style="width:3%; text-align:center;">
                                            <label class="checkbox-inline" >
                                                <input type="checkbox" name="check[]" value="212" />
                                            </label>
                                        </td>
                                        <td>
                                            <strong>Key Skill :</strong> ({{ $user->skills }}) <br>
                                            <strong>Experience :</strong> {{ $user->exp }} <br>
                                            <strong>Last Active on :</strong>
                                            {{ $user->lastLoginAt() }}</td>
                                        <td>
                                            <strong></strong>
                                            <strong>Qualification :</strong>
                                            {{ $user->basic_education }}<br>
                                            <strong>Functional Area :</strong>
                                            {{ $user->functional_area }}<br>

                                        </td>
{{--                                        <td>--}}
{{--                                            <strong>Name :</strong>{{ $user->name }} <br>--}}
{{--                                            <strong>Email :</strong>{{ $user->email }} <br>--}}
{{--                                            <strong>Mobile :</strong>{{ $user->mobile_number }}<br>--}}
{{--                                            <strong>Location :</strong> {{ $user->city }} </td>--}}
                                        <td style="width: 15%; text-align:center;">

                                            <a href="{{ route('user.profile.public', $user->username) }}" target="">View Profile</a>
                                            <br>
                                            <hr class="noshade">

{{--                                            <a href="#">Send mail</a>--}}

                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </form>
                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
@endsection


