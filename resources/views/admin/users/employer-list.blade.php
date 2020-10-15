@extends('admin.layouts.admin-app')

@section('css')
    @include('admin.partials.dt-css')
@endsection

@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a class="breadcrumb-item" href="#">Users</a>
                <span class="breadcrumb-item active">{{ $title }}</span>
            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">

            <div class="br-section-wrapper">

                @include('notification')

                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10" style="padding-bottom: 50px">{{ $title }} User List <a href="{{ route('admin.users.create') }}?r={{ $title }}"><button class="btn btn-success" style="float: right"> Add New</button></a></h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">S/N</th>
                            <th class="wd-15p">Username</th>
                            <th class="wd-15p">Photo</th>
                            <th class="wd-20p">Email</th>
{{--                            <th class="wd-15p">Phone</th>--}}
                            <th class="wd-15p">Role</th>
                            <th class="wd-10p">Action</th>

                        </tr>
                        </thead>
                        <tbody>

                        @php
                            $count = 1;
                        @endphp
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $user->username }}</td>
                                <td><img height="40" src="{{ $user->avatar }}"></td>
                                <td>{{ $user->email }}</td>
{{--                                <td>{{ $user->phone }}</td>--}}
                                <td>{{ $user->role }}</td>
                                <td>
                                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Edit User"><em class="fa fa-edit"></em></a>
                                    <a href="{{ route('admin.users.destroy', $user) }}" onclick="destroyUser(event)" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Delete"><em class="fa fa-trash"></em>
                                        <form id="delete-customer-form" action="{{ route('admin.users.destroy', $user) }}" method="POST" class="d-none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </a>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div>
        </div>
        @endsection

        @section('js')
            <script>
                function destroyUser(e) {
                    e.preventDefault();

                    if (confirm('There is no reversal to this!\nAre you sure you want to remove this user entirely from the system? '))
                        document.getElementById('delete-customer-form').submit()
                    else
                        return false;
                }
            </script>

    @include('admin.partials.dt-js')
@endsection
