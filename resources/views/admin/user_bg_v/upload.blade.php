@extends('admin.layouts.admin-app')

@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a class="breadcrumb-item" href="{{ route('admin.background.submissions') }}"> Background Verification Submissions</a>
{{--            <span class="breadcrumb-item active">Background Verification Submissions</span>--}}
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">{{ $item->user->name }} Background Verification Submission

        </h4>
    </div>

    <div class="br-pagebody">

        @include('notification')
    </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="row">
                <div class="col-md-12">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="{{ route('admin.background.upload.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <div class="row">
                            <br/>
                            <div class="col-sm-6">
                                <h4 class="tx-gray-800 tx-uppercase tx-bold tx-20 mg-b-10 mt-4 text-center">Upload Document </h4>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
   <span class="input-group-btn">
     <a id="lf" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-file"></i> Choose Document
     </a>
   </span>
                                            <input id="thumbnail" required class="form-control" type="hidden" name="document">
                                        </div>
                                        <img id="holder" style="margin-top:15px;max-height:100px;">
                                    </div>
                                </div><!--form-group-->

                                <div class="col-sm-12">

                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-3"><input type="submit" class="btn btn-success btn" value="Upload"></div>
                                </div><!--col-md-12-->

                            </div><!--col-md-6-->
                            @if ($item->document)
                                <div class="col-md-5">

                                    <iframe src="{{ $item->document }}" width="100%" height="300"></iframe>

                                </div>
                            @endif

                        </div>
                    </form>

                </div>
                </div>


    </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

@endsection

    @section('js')

        <script>
            $('#lf').filemanager('file');
            // $('#lfm').filemanager('image');
        </script>

@endsection
