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
                        <li class="active">Background Verification Response</li>
                    </ol>
                </div>

                @include('employer.partials.sidebar')


                <div class="col-md-9" >

                    <div class="br-pagebody">
                        <div class="br-section-wrapper">
                            <h4 style="padding-bottom: 10px; padding-top: 10px" class="tx-gray-800 text-center tx-uppercase tx-bold"> Background Verification Submissions</h4>

                            <div class="table-wrapper">
                                <table id="datatable1" class="table display table-condensed table-bordered responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th class="wd-5p"> S.No</th>
                                        <th class="wd-30p">User Name</th>
                                        <th class="wd-20p">Package</th>
                                        <th class="wd-10p">Payment</th>
                                        <th class="wd-10p">Status</th>
                                        <th class="wd-15p"> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($bgs as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ optional($user->user)->name }}</td>
                                            <td>{{ optional($user->package)->name }}</td>
                                            <td>{{ $user->paid ? 'Paid' : 'Unpaid' }}</td>
                                            <td>{{ $user->status }}</td>

                                            <td class="text-center">
                                                {{--                                <form method="POST" action="{!! route('admin.locations.destroy', $user->id) !!}" accept-charset="UTF-8">--}}
                                                {{--                                    <input name="_method" value="DELETE" type="hidden">--}}
                                                {{--                                    {{ csrf_field() }}--}}


                                                @if ($user->user_type === 'employer')
                                                    @if ($user->document)
                                                        <a target="_blank" href="{{ $user->document }}" class="btn btn-success btn-sm">View Document</a>
                                                    @else
                                                        <p>Pending</p>
                                                    @endif
                                                @else
                                                    <p>Pending</p>
                                                @endif



{{--                                                <div class="btn-group justify-center" role="group">--}}
{{--                                                    <a href="{{ route('admin.background.submission', $user->id ) }}" class="btn btn-primary btn-sm" title="View details">--}}
{{--                                                        <span class="fa fa-eye" aria-hidden="true"></span>--}}
{{--                                                    </a>--}}

{{--                                                </div>--}}


                                                {{--                                </form>--}}

                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div><!-- table-wrapper -->

                        </div><!-- br-pagebody -->
                    </div>

                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
@endsection
