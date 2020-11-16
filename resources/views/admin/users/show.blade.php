@extends('admin.layouts.admin-app')

@section('css')
    @include('admin.partials.dt-css')
@endsection

@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a class="breadcrumb-item" href="#">User</a>
                <span class="breadcrumb-item active">{{ $user->name }}</span>
            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">

            <div class="br-section-wrapper">

                @include('notification')

                <div class=" mg-b-10 row" style="padding-bottom: 30px">

                    <div class="col-12">
                <h4 class="tx-gray-800 tx-uppercase tx-bold" style="padding-bottom: 10px">{{ $user->username }} Details ({{ $user->role }})</h4>

                <img src="{{ $user->avatar }}" style="width: 130px; height: 150px" />
                    </div>
                    @if ($user->cv)
                        <div class="col-12 mt-3">
                            <a target="_blank" href="{{ route('user.resume.download',$user->username) }}" class="btn btn-success">Download Cv</a>

                        </div>
                    @endif
                    </div>

                <div class="table-wrapper">
                    <table class="table table-bordered display responsive nowrap">
                        {{--                        <thead>--}}
                        {{--                        <tr>--}}
                        {{--                            <th class="wd-15p">Username</th>--}}
                        {{--                            <th class="wd-15p">Photo</th>--}}
                        {{--                        </tr>--}}
                        {{--                        </thead>--}}
                        <tbody>
                                                @foreach ($fields as $item)
                                                    @if ($user->$item)
                                                        <tr>
                                                            <td width="30%" class="text-capitalize ">{{ str_replace('_',' ',$item) }}</td>
                                                            <td>{{ is_string($user->$item) ? $user->$item : '' }}</td>
                                                        </tr>
                                                    @endif

                                                @endforeach

                        </tbody>
                    </table>
                    <a href="" class="btn btn-success">Edit User</a>
                </div><!-- table-wrapper -->
            </div>
        </div>
        @endsection
