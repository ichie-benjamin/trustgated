@extends('layouts.master')


@section('content')
      <!-- CONTENT -->
      <div id="content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">My Account</a></li>
                <li class="active">Block Companies</li>
            </ol>
            <div class="row">
                <div class="col-md-2 padno">


@include('layouts.partials.job-sidebar')
                    <!--create-job-->

                </div><!--col-sm-2-->

                <div class="col-md-7 m10" >
                    <div class="top-emp-center">
                        <h4> Block Companies </h4>
                    </div> <!--top-emp-center-->

                    <p class="font13p m20">Block companies to whom you do not wish to reveal your resume. You can block the company name, group company name, associate company, short forms and related abbreviations. </p>

                    <p class="font12p m20">Note: If your visibility status is 'Unsearchable' then your profile is not visible to any recruiter. You need not block any company then.</p>

                    <div class="col-md-5 m10 padno" >
                        <form method="post" name="companies" id="companies" action="block-companies.php?block&companies">
                            <div class="list-group">
                                <div  class="list-group-item active"> Search Companies</div>
                                <div class="list-group-item">
                                    <!-- <div class="form-group">
                                      <input type="search" class="form-control"  placeholder="Search">
                                    </div>-->

                                    <!-- tabs left -->
                                    <div class="tabbable tabs-left">
                                        <ul class="teb">
                                            <li class="active" >
                                                <a href="#ss" data-toggle="tab"></a></li>
                                            <li><a href="#a" data-toggle="tab">A</a></li>
                                            <li><a href="#b" data-toggle="tab">B</a></li>
                                            <li><a href="#c" data-toggle="tab">C</a></li>
                                            <li><a href="#d" data-toggle="tab">D</a></li>
                                            <li><a href="#e" data-toggle="tab">E</a></li>
                                            <li><a href="#f" data-toggle="tab">F</a></li>
                                            <li><a href="#g" data-toggle="tab">G</a></li>
                                            <li><a href="#h" data-toggle="tab">H</a></li>
                                            <li><a href="#i" data-toggle="tab">I</a></li>
                                            <li><a href="#j" data-toggle="tab">J</a></li>
                                            <li><a href="#k" data-toggle="tab">K</a></li>
                                            <li><a href="#l" data-toggle="tab">L</a></li>
                                            <li><a href="#m" data-toggle="tab">M</a></li>
                                            <li><a href="#n" data-toggle="tab">N</a></li>
                                            <li><a href="#o" data-toggle="tab">O</a></li>
                                            <li><a href="#p" data-toggle="tab">P</a></li>
                                            <li><a href="#q" data-toggle="tab">Q</a></li>
                                            <li><a href="#r" data-toggle="tab">R</a></li>
                                            <li><a href="#s" data-toggle="tab">S</a></li>
                                            <li><a href="#t" data-toggle="tab">T</a></li>
                                            <li><a href="#u" data-toggle="tab">U</a></li>
                                            <li><a href="#v" data-toggle="tab">V</a></li>
                                            <li><a href="#w" data-toggle="tab">W</a></li>
                                            <li><a href="#x" data-toggle="tab">X</a></li>
                                            <li><a href="#y" data-toggle="tab">Y</a></li>
                                            <li><a href="#z" data-toggle="tab">Z</a></li>
                                            <li><a href="#0-9" data-toggle="tab">0-9</a></li>
                                        </ul>
                                        <div class="tab-content padno tebbg trap">
                                            <div class="tab-pane tapfo active " id="ss" >To find a company to be blocked, either start typing the company name in the box above OR click on the starting alphabet in the company name from the alphabets listed on the left.
                                            </div>
                                            <div class="tab-pane tapfo" id="a" >										   <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="aaa[]" id="aaa" value="abc"> abc  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="aaa[]" id="aaa" value="abc"> abc  </label> </div>
                                            </div>
                                            <div class="tab-pane tapfo" id="b">
                                                <!-- <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> Bosch  </label> </div>
          <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> BBS Pvt ltd Jobs  </label> </div>
          <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> BDJ Group Jobs  </label> </div>
          <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> befree Jobs  </label> </div>
          <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> BISIL Jobs  </label> </div>
          <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> BIT Canny Jobs </label> </div> -->
                                            </div>
                                            <div class="tab-pane tapfo" id="c">										   <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="ccc[]" id="ccc" value="cts"> cts  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="ccc[]" id="ccc" value="cts"> cts  </label> </div>
                                            </div>
                                            <div class="tab-pane tapfo" id="d">
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="ddd[]" id="ddd" value="Dopl"> Dopl  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="ddd[]" id="ddd" value="dddddddddddddd"> dddddddddddddd  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="ddd[]" id="ddd" value="dghggudgj"> dghggudgj  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="ddd[]" id="ddd" value="Duruva"> Duruva  </label> </div>
                                            </div>
                                            <div class="tab-pane tapfo" id="e">
                                            </div>
                                            <div class="tab-pane tapfo" id="f">
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="fff[]" id="fff" value="fbfb"> fbfb  </label> </div>
                                            </div>
                                            <div class="tab-pane tapfo" id="g">
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="ggg[]" id="ggg" value="gsdfwgh"> gsdfwgh  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="ggg[]" id="ggg" value="global services"> global services  </label> </div>
                                            </div>
                                            <div class="tab-pane tapfo" id="h">
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="hhh[]" id="hhh" value="Hcl" > Hcl  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="hhh[]" id="hhh" value="Hhhh" > Hhhh  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="hhh[]" id="hhh" value="Hhhh" > Hhhh  </label> </div>
                                            </div>
                                            <div class="tab-pane tapfo" id="i">
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="iii[]" id="iii" value="Inet-Solution"> Inet-Solution  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="iii[]" id="iii" value="inet-solution"> inet-solution  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="iii[]" id="iii" value="inet"> inet  </label> </div>
                                            </div>
                                            <div class="tab-pane tapfo" id="j">
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> jyy  </label> </div>
                                            </div>
                                            <div class="tab-pane tapfo" id="k">
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> keins  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> keins  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> keins  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> karum  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> kak  </label> </div>
                                            </div>
                                            <div class="tab-pane tapfo" id="l">
                                            </div>
                                            <div class="tab-pane tapfo" id="m">
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> MKM  </label> </div>
                                            </div>
                                            <div class="tab-pane tapfo" id="n">
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> New company  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> New company  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> ngo  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> ngo  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> ngo  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> ngo  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> ngo  </label> </div>
                                            </div>
                                            <div class="tab-pane tapfo" id="o">
                                            </div>
                                            <div class="tab-pane tapfo" id="p">
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="ppp[]" id="ppp" value="php script mall pvt ltd"> php script mall pvt ltd  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="ppp[]" id="ppp" value="phpsm"> phpsm  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox" name="ppp[]" id="ppp" value="php script mall"> php script mall  </label> </div>
                                            </div>
                                            <div class="tab-pane tapfo" id="q">
                                            </div>
                                            <div class="tab-pane tapfo" id="r">
                                            </div>
                                            <div class="tab-pane tapfo" id="s">
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> sams  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> STL  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> STL  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> sfil  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> sfil  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> sos  </label> </div>
                                            </div>
                                            <div class="tab-pane tapfo" id="t">
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> testing demo  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> Test  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> test  </label> </div>
                                            </div>
                                            <div class="tab-pane tapfo" id="u">
                                            </div>
                                            <div class="tab-pane tapfo" id="v">
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> vdvdv  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> vdvdv  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> vvcv  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> vincit  </label> </div>
                                            </div>
                                            <div class="tab-pane tapfo" id="x">
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> xyz  </label> </div>
                                            </div>
                                            <div class="tab-pane tapfo" id="y">
                                            </div>
                                            <div class="tab-pane tapfo" id="z">
                                            </div>
                                            <div class="tab-pane tapfo" id="0-9">
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> 1  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> 1  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> 1  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> 1  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> 1  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> 1  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> 1  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> 1  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> 1  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> 1  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> 1  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> 1  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> 1  </label> </div>
                                                <div class="checkbox ml5"> <label class="pedit2"> <input type="checkbox"> 1  </label> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /tabs -->

                                </div>
                            </div>

                        </form>
                    </div> <!--col-md-5-->
                    <div class="col-md-2 mtof">
                        <div class="mtoftm"> <a href="#" Onclick="document.companies.submit();"><img src="/images/block.png"></a> </div>
                        <div class="mtoftm"> <a href="#" Onclick="document.blockedcompany.submit();"><img src="/images/unlock.png"></a> </div>
                    </div> <!--col-md-2-->
                    <div class="col-md-5 m10 padno">
                        <form method="post" name="blockedcompany" id="blockedcompany" action="block-companies.php?unblock">
                            <div class="list-group">
                                <div  class="list-group-item active"> Blocked Companies</div>
                                <div class="list-group-item">

                                    <div class="m3er tapfo">


                                        Every Company has access to your profile. </div>

                                </div>
                            </div>

                        </form>
                    </div> <!--col-md-5-->


                </div><!--col-sm-7-->




                <div class="col-md-3" >

                    <div class="create-job">
                        <div class="create-job-head">
                            <h3>My Job Alert </h3>
                        </div>
                        <div class="create-job-content">


                            <div class="text-right m10">
                                <input class="btn-blue btn bc" data-toggle="modal" data-target="#createjob" value="Create Another Job Alert " type="button">
                            </div>
                        </div><!--create-job-content-->
                    </div><!--create-job-->

                    <div class="openings">
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




                </div><!--col-sm-3-->

            </div><!--row-->
        </div><!-- container -->


    </div><!-- CONTENT -->
@endsection
