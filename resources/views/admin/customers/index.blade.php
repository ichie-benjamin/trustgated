@extends('layouts.admin-app')

@section('css')
    <link href="{{ asset('lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/select2/css/select2.min.css') }}" rel="Stylesheet">
@endsection

@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="index.html">Bracket</a>
            <a class="breadcrumb-item" href="#">Tables</a>
            <span class="breadcrumb-item active">Data Table</span>
            </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Data Table</h4>
            <p class="mg-b-0">DataTables is a plug-in for the jQuery Javascript library.</p>
        </div>

        <div class="br-pagebody">

            <div class="br-section-wrapper">
                
                @include('notification')
                
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10" style="padding-bottom: 50px">User List <a href="{{ route('admin.customers.create') }}"><button class="btn btn-success" style="float: right"> Add New</button></a></h6>

            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                <thead>
                    <tr>
                    <th class="wd-15p">S/N</th>
                    <th class="wd-15p">Username</th>
                    <th class="wd-20p">Email</th>
                    <th class="wd-15p">Phone</th>
                        <th class="wd-15p">Role</th>
                        <th class="wd-10p">Action</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $count = 1;
                    @endphp
                    @foreach ($customers as $user)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $user->profile->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->profile->phone }}</td>
                            <td>{{ $user->getRoleNames()->first() }}</td>
                            <td>
                                <a href="{{ route('admin.customers.edit', $user) }}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Edit User"><em class="fa fa-edit"></em></a>
                                {{-- <a href="<?php //echo url('#'); ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="View"><em class="fa fa-eye"></em></a>
                                <a href="<?php //echo url('#'); ?>" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Deactivate"><em class="fa fa-briefcase"></em></a> --}}
                                <a href="{{ route('admin.customers.destroy', $user) }}" onclick="destroyUser(event)" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Delete"><em class="fa fa-trash"></em>
                                    <form id="delete-customer-form" action="{{ route('admin.customers.destroy', $user) }}" method="POST" class="d-none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </a>
                            </td>
                            <td></td>
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
    <script src="{{ asset('lib/highlightjs/highlight.pack.js') }}"></script>
    <script src="{{ asset('lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('lib/datatables-responsive/dataTables.responsive.js') }}"></script>

    <script src="{{ asset('lib/select2/js/select2.min.js') }}"></script>
    {{-- <script src="http://localhost/afiaanyi-logistics/js/bracket.js"></script> --}}

    <script>
        $(function(){
          'use strict';
  
          $('#datatable1').DataTable({
            responsive: true,
            language: {
              searchPlaceholder: 'Search...',
              sSearch: '',
              lengthMenu: '_MENU_ items/page',
            }
          });
  
          $('#datatable2').DataTable({
            bLengthChange: false,
            searching: false,
            responsive: true
          });
  
          // Select2
          $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
  
        });
    </script>
@endsection