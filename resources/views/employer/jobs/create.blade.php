@extends('layouts.master')

@section('content')


    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                    @if ($errors->any())

                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('employer.profile') }}">My Account</a></li>
                        <li class="active">Post Job</li>
                    </ol>
                </div>

                @include('employer.partials.sidebar')




                <div class="col-md-9" >

                    <div style="color:#009900; padding:5px;"> 					</div>
                    <form class="form-horizontal m10" action="{{ route('jobs.store') }}" method="post" enctype="multipart/form-data">

                        @csrf

                        @include('employer.jobs.form')

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-3"><input type="submit" class="btn-blue pdng-btn1 btn" value="Post Job"></div>
                                    <div class="col-sm-3"><div class="btn-blue pdng-btn1 btn"><a href="{{ route('jobs.create') }}" style="color:#FFF"> Cancel </a></div></div>
                                </div> <!--col-md-6-->
                            </div>
                        </div>

                    </form>

                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
@endsection

