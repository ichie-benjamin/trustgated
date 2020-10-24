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
                  <div class=" tab-content " >
                      <div class="col-md-8" >
                          <form class="form-inline" method='GET'>
                              <div class="form-group ">
                                  <label >Sort by </label>
                                  <select class="form-control input-sm " name="view_ord" id="view_ord" onchange='sortit(this.value);'>
                                      <option  value="ASC" >Ascending </option>
                                      <option  value="DESC">Descending</option>
                                  </select>

                              </div>
                              <div class="form-group select-arrow">
                                  <label >Show</label>
                                  <select class="form-control input-sm" name="view_num" id="view_num" onchange='sortcount(this.value);'>
                                      <option  value="5">5</option>
                                      <option selected="selected" value="10">10</option>
                                      <option  value="15">15</option></select>
                              </div>
                          </form>
                      </div>  <!--list-bga-->
                  </div>


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
