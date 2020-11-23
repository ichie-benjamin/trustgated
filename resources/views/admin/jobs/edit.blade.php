@extends('admin.layouts.admin-app')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30" style="position:center; ">
            <h4 class="tx-gray-800 mg-b-5">Editing {{ $job->title }}</h4>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">

                <div class="row mg-t-10">
                    <div class="col-xl-12">

                        @if ($errors->any())

                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success_message') }}
                            </div>
                        @endif


                            <form class="form-horizontal m10" action="{{ route('admin.jobs.update', $job->id) }}" method="post" enctype="multipart/form-data">

                                @csrf

                                <div class="row">

                                    <div class="card card-body">


                                    @include('admin.jobs.form')

                                <div class="row mt-4">
                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <div class="col-sm-3"><input type="submit" class="btn-blue pdng-btn1 btn" value="Update Job"></div>
                                            {{-- <div class="col-sm-3"><div class="btn-blue pdng-btn1 btn"><a href="{{ route('jobs.create') }}" style="color:#FFF"> Cancel </a></div></div> --}}
                                        </div> <!--col-md-6-->
                                    </div>
                                </div>
                                </div>
                                </div>

                            </form>

                    </div><!-- col-6 -->

                </div>
            </div>

        </div><!-- br-mainpanel -->
@endsection
