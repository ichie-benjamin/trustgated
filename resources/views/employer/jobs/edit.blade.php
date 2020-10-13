@extends('layouts.master')

@section('content')


    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
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
                        <li class="active">Edit {{ $job->title }}</li>
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
                                    <div class="col-sm-3"><input type="submit" class="btn-blue pdng-btn1 btn" value="Update Job"></div>
                                    <div class="col-sm-3"><div class="btn-blue pdng-btn1 btn"><a href="{{ route('jobs.create') }}" style="color:#FFF"> Cancel </a></div></div>
                                </div> <!--col-md-6-->
                            </div>
                        </div>

                    </form>
                    <script language="javascript">
                        function checkfiletype(val) {
                            var spearate1=val.split('\\');
                            var filename=spearate1[spearate1.length-1];
                            var seperate2=filename.split('.');
                            var extn1=seperate2[seperate2.length-1];
                            extn1=extn1.toLowerCase();
                            //alert(extn1);
                            if(extn1!="xls" && extn1!="xlsx") {
                                alert("Please upload Excel file only !!!");
                                document.getElementById('timesheet').value='';
                                document.getElementById('timesheet').focus();
                            }
                        }
                    </script>
                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
@endsection
