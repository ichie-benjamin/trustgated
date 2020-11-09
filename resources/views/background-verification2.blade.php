@extends('layouts.verification')

@section('head')
    <div class="row">
        <div class="col-md-12">
            <div class="banner-headline">
                <h3>
                    <strong style="color: white">Background Verification 2</strong>

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

            <!-- Headline -->
            <div class="headline">
                <h4>Hire Ready Application Form ({{ $package->name }})</h4>
                <p> Educational Details - Step 2 of 3</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                </div>
            </div>

            <div class="content with-padding padding-bottom-10">
                <form method="POST" action="{{ route('store.edu') }}">
                    @csrf
                <div class="row">

                    @foreach (\App\Models\Form::whereModel('verification_user_forms')->wherePage(2)->get() as $item)
                        @if ($item->type == 'country')
                            <div class="col-md-{{ $item->rows }}">
                                <div class="submit-field">
                                    <h5 class="text-capitalize">{{ str_replace('_',' ',$item->name) }}
                                        @if ($item->required)
                                            <span class="text text-danger">*</span>
                                        @endif
                                    </h5>
                                    <select name="educations[country]" class="form-control country_select select2" data-size="7" title="Select country Type">
                                        <option>Select Country</option>
                                        @foreach(\App\Models\Country::pluck('name') as $item)
                                            <option  value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @elseif ($item->type == 'state')
                            <div class="col-md-{{ $item->rows }}">
                                <div class="submit-field">
                                    <h5 class="text-capitalize">{{ str_replace('_',' ',$item->name) }}
                                        @if ($item->required)
                                            <span class="text text-danger">*</span>
                                        @endif
                                    </h5>
                                    <select style="width: 100%" class="form-control select2 states" required name="educations[state]">

                                        <option>Select Country first</option>

                                    </select>
                                </div>
                            </div>
                        @elseif ($item->type == 'textarea')
                            <div class="col-md-{{ $item->rows }}">
                                <div class="submit-field">
                                    <h5 class="text-capitalize">{{ str_replace('_',' ',$item->name) }}
                                        @if ($item->required)
                                            <span class="text text-danger">*</span>
                                        @endif
                                    </h5>
                                    <textarea rows="3" class="" required="{{ $item->required }}"  name="educations[{{$item->name}}]"></textarea>
                                </div>
                            </div>
                            @elseif ($item->type == 'file')
                                <div class="col-md-{{ $item->rows }}">
                                    <div class="submit-field">
                                        <h5 class="text-capitalize">{{ str_replace('_',' ',$item->name) }}
                                            @if ($item->required)
                                                <span class="text text-danger">*</span>
                                            @endif
                                        </h5>
                                        <div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose Resume
     </a>
   </span>
                                            <input id="thumbnail" required class="form-control" type="hidden"  name="educations[{{$item->name}}]">
                                        </div>
                                        <img id="holder" style="margin-top:15px;max-height:100px;">
                                    </div>
                                </div>
                            @else
                            <div class="col-md-{{ $item->rows }}">
                                <div class="submit-field">
                                    <h5 class="text-capitalize">{{ str_replace('_',' ',$item->name) }}
                                        @if ($item->required)
                                            <span class="text text-danger">*</span>
                                        @endif
                                    </h5>
                                    <input class="with-border" required="{{ $item->required }}" name="educations[{{$item->name}}]" placeholder="{{ str_replace('_',' ',$item->name) }}">
                                </div>
                            </div><!-- col-8 -->
                        @endif
                    @endforeach

                        <input type="hidden" name="package" value="{{ $package->id }}">

                </div>
                    <div class="col-xl-12">
                        <button type="submit"  class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Next</button>
                    </div>
                </form>
            </div>
        </div>
{{--        <div class="col-xl-12">--}}
{{--            <a href="{{ route('background-verification-3') }}?package={{ $package->id }}" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Next</a>--}}
{{--        </div>--}}
    </div>

</div>
        </div>
    </div>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('/css/select2.css') }}">
@endsection

@section('js')

    <script src="{{ asset('/js/select2.full.js')}}" type="text/javascript"></script>


    <script type="text/javascript">
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

    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

    <script>
        $('#lfm').filemanager('file');
        // $('#lfm').filemanager('image');
    </script>


@endsection
