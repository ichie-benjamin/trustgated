@extends('layouts.master')

@section('content')
    <!-- CONTENT -->
    <div id="content">
        <div class="container">



            <ol  class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Faq</li>
            </ol>



            <div class="row">
                <div class="col-sm-9" >
                    <div class="top-emp-center p5">
                        <h4>Faq</h4>
                    </div>

                    {!! $content !!}

                </div><!--col-sm-9-->

                @include('pages.partials.right_sidebar')

            </div><!--row-->
        </div><!-- container -->

    </div>
    <!-- CONTENT -->
@endsection
