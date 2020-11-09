
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
                    <form method="POST" action="{{ route('store.ref') }}">
                        @csrf
                    <div class="dashboard-box margin-top-0">

                        <div class="headline">
                            <h4>Hire Ready Application Form ({{ $package->name }})</h4>
                            <p>Reference Information - Step 3 of 3</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                            </div>
                        </div>

                        <div class="content with-padding padding-bottom-10">
                            <div class="row">

                                @foreach (\App\Models\Form::whereModel('verification_user_forms')->wherePage(3)->get() as $item)
                                    @if ($item->type == 'country')
                                        <div class="col-md-{{ $item->rows }}">
                                            <div class="submit-field">
                                                <h5 class="text-capitalize">{{ str_replace('_',' ',$item->name) }}
                                                    @if ($item->required)
                                                        <span class="text text-danger">*</span>
                                                    @endif
                                                </h5>
                                                <select name="ref['country']" class="form-control country_select select2" data-size="7" title="Select country Type">
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
                                                <select style="width: 100%" class="form-control select2 states" required name="ref[state]">

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
                                                <textarea rows="3" class="" required="{{ $item->required }}"  name="ref[{{$item->name}}]"></textarea>
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
                                                <input class="with-border" required="{{ $item->required }}" name="ref[{{$item->name}}]" placeholder="{{ str_replace('_',' ',$item->name) }}">
                                            </div>
                                        </div><!-- col-8 -->
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <input type="hidden" name="package" value="{{ $package->id }}">

                    </div>
                    <div class="col-xl-12">
                        <button type="submit"  class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Next</button>
    </div>
                    </form>
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

@endsection
