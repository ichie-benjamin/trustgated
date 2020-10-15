@extends('admin.layouts.admin-app')

@section('css')
@include('admin.partials.dt-css')
@endsection

@section('js')
@include('admin.partials.dt-js')
@endsection

@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>

        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">State List</h4>
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            @include('notification')
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10" style="padding-bottom: 50px">State List <a
                    href="{{ route('admin.states.create') }}"><button class="btn btn-success" style="float: right"> Add New</button></a></h6>
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-10p">S/N</th>
                            <th class="wd-30p">Country</th>
                            <th class="wd-30p">State</th>
                            <th class="wd-30p">Action</th>
{{--                            <th></th>--}}
                        </tr>
                    </thead>
                    <tbody>
                        <input type="hidden" value="{{ $i=1 }}">
                        @foreach ($states as $state)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $state->country->name }}</td>
                            <td>{{ $state->name }}</td>

                            <td>
                                <form action="{{  route('admin.states.destroy', $state) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('admin.states.edit', $state) }}" class="btn btn-danger" title="Edit"><em class="fa fa-edit"></em>
                                    </a>
                                    <button type="submit" class="btn btn-warning" title="Delete">
                                        <em class="fa fa-trash"></em>
                                    </button>
                                </form>
                            </td>

                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div><!-- table-wrapper -->





        </div>

@endsection
