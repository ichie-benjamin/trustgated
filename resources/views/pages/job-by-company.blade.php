@extends('layouts.master')

@section('content')
    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#"> Company</a></li>
                        <li class="active">Search</li>
                    </ol>
                </div>
                <!--col-md-2-->

                <!--col-md-7-->

                <div class="col-md-9"><br />
                    <div class="col-md-9">
                        <div style="color:rgb(56, 112, 159)">
                            <table class="table table-striped">
                                <tr>
                                    <th>S.No</th>
                                    <th>Company</th>
                                    <th>Address</th>
                                    <th></th>
                                </tr>
                                @php $i = 1; @endphp
                                @foreach ($companies as $item)
                                    <tr><td>{{ $i++ }}</td><td><a href="{{ route('jobsearch') }}?company={{$item->id}}" style='color:rgb(56, 112, 159)'>{{ $item->name }}</a></td>
                                        <td>{{ $item->address }}</td>
                                        <td><a href='{{ route('jobsearch') }}?company={{$item->id}}' style='color:rgb(56, 112, 159)'>Click here</a></td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>

                @include('pages.partials.right_sidebar')

            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
    <!--ADVANCED SEARCH POPUP-->
@endsection
