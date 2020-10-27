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
                        <li><a href="#"> Location</a></li>
                        <li class="active">Search</li>
                    </ol>
                </div>
                <!--col-md-2-->

                <!--col-md-7-->

                <div class="col-md-9"><br />
                    <div class="">
                        <div style="color:rgb(56, 112, 159)">
                            <table class="table table-striped" style="border: 1px solid #dadada;">
                                <tr>
                                    <th>S.No</th>
                                    <th>Location</th>
                                    <th></th>
                                </tr>
                                @php $i = 1; @endphp
                                @foreach($locations as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>

                                    <td>{{ $item->name }}</td>
                                    <td><a href="{{ route('jobsearch') }}?location={{ $item->name }}" style='color:rgb(56, 112, 159)'>Click here</a></td>
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
@endsection
