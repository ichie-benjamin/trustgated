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
                        <li><a href="{{ route('jobseeker.profile') }}">My Account</a></li>
                        <li class="active">Edit Details</li>
                    </ol>
                </div>
                <div class="col-md-3">

                    @include('layouts.partials.job-sidebar')
                    <!--create-job-->


                </div><!--col-sm-2-->

                <div class="col-md-9" >
                    <div class="top-emp-center">
                        <h4>Edit IT Skills</h4>
                    </div> <!--top-emp-center-->

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

                    <form name="form1" action="{{ route('user.update.itskills') }}" method="POST" class="form-horizontal m10">
                        @csrf
                        <div class="row" >
                            <div class="" >
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="col-md-3 all-catehead">Skill</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if (count(auth()->user()->it_skills) > 0)
                                        @foreach(auth()->user()->it_skills as $item)
                                            <tr>
                                                <td><input type="text" class="form-control" name="it_skills[]" value="{{ $item }}" ></td>
                                            </tr>
                                        @endforeach
                                            @endif


                                    <tr>
                                        <td><input type="text" class="form-control" name="it_skills[]" value="" ></td>
                                    </tr>

                                    <tr>
                                        <td><input type="text" class="form-control" name="it_skills[]" value="" ></td>
                                    </tr>

                                    <tr>
                                        <td><input type="text" class="form-control" name="it_skills[]" value="" ></td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div><!--col-md-6-->
                            <div class="col-sm-12" style="margin-top: 20px">
                                <div class="col-sm-7">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-3"><input type="submit" name="save1" class="btn-blue btn" value="Save" ></div>
                                    <div class="col-sm-3"><div class="btn-blue btn"><a href="{{ route('jobseeker.profile') }}" style="color:#FFF"> Cancel </a></div></div>
                                </div> <!--col-md-6-->
                            </div><!--col-md-12-->
                        </div>
                    </form>
                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
    <!--ADVANCED SEARCH POPUP-->

@endsection
