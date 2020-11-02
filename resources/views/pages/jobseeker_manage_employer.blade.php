@extends('layouts.master')

@section('content')

<!-- CONTENT -->
<div id="content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">My Account</a></li>
            <li class="active">Create Cover Letter</li>
        </ol>
        <div class="row">
            <div class="col-md-2 padno">

                @include('layouts.partials.job-sidebar')
            </div><!--col-sm-2-->

            <div class="col-md-10 m20" >

                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <strong>Successful!</strong> {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif


                <div class="top-emp-center">
                    <h4>Manage Employer/Designation Details</h4>
                </div> <!--top-emp-center--><br>
                <div class="text-right">
                    <a class="btn-blue btn bc" style="color:#FFFFFF" href="{{ route('create_emp') }}" >Add an Employer/Designation</a>
                </div>


                @foreach($employers as $item)

                <div class="manabg ">
                      {{ $item->from }} - {{ $item->to }}
                        <b>
                            {{ $item->company_name }}                </b>as
                        <b>
                            {{ $item->designation }}                 </b>
                        <br>
                        <p>
                        </p>
                        <div class="create-botlink"><a href="{{ route('edit_emp',$item->id) }}">View/Edit</a> |
                            <form method="POST" action="{!! route('delete_emp', $item->id) !!}" accept-charset="UTF-8">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm(&quot;Click Ok to delete Record.&quot;)"> Delete</button>
                            </form>

                        </div>
                    </div><!--manabg-->
                @endforeach

                @if (count($employers) < 1)
                    <div class=" tab-content">

                        <div class='newpagination text-center'>
                            No employer added yet
                        </div>
                    </div>

                @endif





            </div ><!--col-sm-7-->


            <!--<div class="col-md-3">
               <div class="create-job">
                  <div class="create-job-head">
                   <h3>Suggestion</h3>
                  </div>
                 <div class="create-job-content">

                    <div class="show-bg post-na7">
                        A professional cover letter can add more value to your application.

                     </div><!--show-bg-->
            <!-- <div class="post-na7">
               <a href="#"> know more</a><br>
                Call <span class="jse-title">1800-102-5557 (toll free)</span> now!
             </div>

           </div><!--create-job-content-->
            <!--  </div><!--create-job-->

            <!--  <div class="openings">
               <a href="#"><img src="images/searchimg.jpg" alt="ads"></a>
              </div>

              <div class="create-job">
                <div class="create-job-head">
                 <h3>Friend Connect </h3>
                </div>
                <div class="create-job-content">

                <div class="add mbt"> Find jobs in companies your friends work in </div>
                <div class=" text-left m10"><a href="#"> <img src="images/fconnect.png" alt="facebook connect"> </a></div>
                </div>
             </div><!--create-job-->




            <!--  </div><!--col-sm-3-->

        </div><!--row-->
    </div><!-- container -->









</div><!-- CONTENT -->

@endsection
