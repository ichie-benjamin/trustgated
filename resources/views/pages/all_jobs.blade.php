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
                      <li><a href="#"> Jobs </a></li>
                      <li class="active">Search Results</li>
                  </ol>
              </div>

              @include('pages.partials.left_sidebar')


              <div class="col-md-7">
                 


                  @foreach($jobs as $job)
                      @include('pages.partials.job_item', ['job' => $job])
                  @endforeach


                  @if (count($jobs) < 1)
                      <div class=" tab-content">

                          <div class='newpagination text-center'>
                              No Job Found
                          </div>
                      </div>

                  @else
                      <div class=" tab-content">

                          <div class='newpagination text-center'>
                              {{ $jobs->links() }}
                          </div>
                      </div>
                  @endif


              </div><!--col-md-7-->

             @include('pages.partials.right_sidebar')

          </div><!--row-->
      </div><!-- container -->

  </div><!-- CONTENT -->
  <!--ADVANCED SEARCH POPUP-->

@endsection

@section('js')
    <script>
        function sortit(val){
{{--            let url = "{{ Request::fullUrl() }}?sort="+val--}}
            window.location = "{{ Request::fullUrl() }}&sort="+val;
        }
    </script>
    @endsection
