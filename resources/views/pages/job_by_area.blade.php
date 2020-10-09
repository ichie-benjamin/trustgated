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
                    <div class="col-md-9">
                        <div style="color:rgb(56, 112, 159)">
                            <table class="table table-striped" style="border: 1px solid #dadada;">
                                <tr>
                                    <th>S.No</th>
                                    <th>Location</th>

                                    <!--<th>Address</th>
                                    <th>Walking Date</th>
                                    <th>Walking Date</th>-->
                                    <th></th>
                                </tr>
                                <tr><td>1</td>

                                    <td>Aduthurai alias maruthuvakudi(1)</td><!--<td>Chennai</td>
							<td>0000-00-00</td><td>0000-00-00</td>--><td><a href='jobsearch_all.html?locat=Aduthurai alias maruthuvakudi' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>2</td>

                                    <td>Astara(1)</td><!--<td>Bfb</td>
							<td>0000-00-00</td><td>0000-00-00</td>--><td><a href='jobsearch_all.html?locat=Astara' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>3</td>

                                    <td>Baisi(1)</td><!--<td>No.20,Luxe Street</td>
							<td>0000-00-00</td><td>0000-00-00</td>--><td><a href='jobsearch_all.html?locat=Baisi' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>4</td>

                                    <td>Barbil(1)</td><!--<td>Chennai</td>
							<td>0000-00-00</td><td>0000-00-00</td>--><td><a href='jobsearch_all.html?locat=Barbil' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>5</td>

                                    <td>Bastar(1)</td><!--<td>No.20,Luxe Street</td>
							<td>0000-00-00</td><td>0000-00-00</td>--><td><a href='jobsearch_all.html?locat=Bastar' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>6</td>

                                    <td>Dhanbad(1)</td><!--<td>Chennai</td>
							<td>0000-00-00</td><td>0000-00-00</td>--><td><a href='jobsearch_all.html?locat=Dhanbad' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>7</td>

                                    <td>Gopalasamudram(1)</td><!--<td>Chennai</td>
							<td>0000-00-00</td><td>0000-00-00</td>--><td><a href='jobsearch_all.html?locat=Gopalasamudram' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>8</td>

                                    <td>Indore(2)</td><!--<td>No 1,2 Vanniyar Street,karayanchavadi,po</td>
							<td>2018-12-12</td><td>2019-12-12</td>--><td><a href='jobsearch_all.html?locat=Indore' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>9</td>

                                    <td>Jorethang(1)</td><!--<td>Bfb</td>
							<td>0000-00-00</td><td>0000-00-00</td>--><td><a href='jobsearch_all.html?locat=Jorethang' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>10</td>

                                    <td>Kalavai(1)</td><!--<td>Bfb</td>
							<td>0000-00-00</td><td>0000-00-00</td>--><td><a href='jobsearch_all.html?locat=Kalavai' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>11</td>

                                    <td>Karveripakkam(1)</td><!--<td>Chennai</td>
							<td>0000-00-00</td><td>0000-00-00</td>--><td><a href='jobsearch_all.html?locat=Karveripakkam' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>12</td>

                                    <td>Nongpoh(1)</td><!--<td>Chennai</td>
							<td>0000-00-00</td><td>0000-00-00</td>--><td><a href='jobsearch_all.html?locat=Nongpoh' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>13</td>

                                    <td>Ponda City(1)</td><!--<td>Bfb</td>
							<td>0000-00-00</td><td>0000-00-00</td>--><td><a href='jobsearch_all.html?locat=Ponda City' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>14</td>

                                    <td>Pondicherry(1)</td><!--<td>Chennai</td>
							<td>0000-00-00</td><td>0000-00-00</td>--><td><a href='jobsearch_all.html?locat=Pondicherry' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>15</td>

                                    <td>Serchhip(1)</td><!--<td>Bfb</td>
							<td>0000-00-00</td><td>0000-00-00</td>--><td><a href='jobsearch_all.html?locat=Serchhip' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>16</td>

                                    <td>Sirsa(1)</td><!--<td>Chennai</td>
							<td>0000-00-00</td><td>0000-00-00</td>--><td><a href='jobsearch_all.html?locat=Sirsa' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>17</td>

                                    <td>Soledad(1)</td><!--<td>No.20,Luxe Street</td>
							<td>0000-00-00</td><td>0000-00-00</td>--><td><a href='jobsearch_all.html?locat=Soledad' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr><tr><td>18</td>

                                    <td>Tura(1)</td><!--<td>Bfb</td>
							<td>0000-00-00</td><td>0000-00-00</td>--><td><a href='jobsearch_all.html?locat=Tura' style='color:rgb(56, 112, 159)'>Clickhere</a></td></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Create Your Job Alert</h3>
                        </div>
                        <div class="create-job-content">
                            <p>
                                Specify your criteria and Regularly receive jobs of your choice
                                Be the first to apply for these jobs Stay updated about the job market.</p>
                            <div class="ali-right"><input class="btn-blue btn" data-toggle="modal" data-target="#createjob" value="Create Now" type="button"></div>
                        </div>
                    </div><!--create-job-->

                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Recruiters </h3>
                        </div>
                        <div class="create-job-content">
                            <p> Connect to recruiters directly. More than 50,000 Recruiter across Industries.</p>
                            <div class="ali-right">  <a href="recruiter-listing.html" class="btn-blue btn" >View All<a></div>
                        </div>
                    </div><!--create-job-->


                    <!-- <div class="career-services">
                        <div class="career-services-head">
                          <h3>Career Services</h3>
                        </div>
                         <div class="all-category">
                             <ul>
                              <li><a href="">Featured Service</a></li>
                              <li><a href="">Speak to HR Expert</a></li>
                              <li><a href="">Resume Spotlight</a></li>
                              <li><a href="">Career Guidence</a></li>
                              <li><a href="">Salary Negotiator</a></li>
                              <li><a href="">Interview Skills </a></li>
                             </ul>
                          </div>
                      </div>--><!--career-services-->

                    <!-- <div class="career-services">
                        <div class="career-services-head">
                          <h3>Premium Service</h3>
                        </div>
                         <div class="all-category">
                             <ul>
                              <li><a href="">Resume Writing</a></li>
                              <li><a href="">Background Verification</a></li>
                              <li><a href="">Aptitude Test</a></li>
                              <li><a href="">Jobs for You</a></li>

                             </ul>
                          </div>
                      </div>-->


                    <div class="create-job">
                        <div class="create-job-head">
                            <h3> Featured Companies </h3>
                        </div>
                        <div class="create-job-content">
                            <div class="fea-compa"><a href="#"> <img src="images/featured-companie-1.jpg" alt="featured-companie"></a></div>
                            <div class="fea-compa"><a href="#"> <img src="images/featured-companie-2.jpg" alt="featured-companie"></a></div>
                            <div class="fea-compa"><a href="#"> <img src="images/featured-companie-3.jpg" alt="featured-companie"></a></div>
                            <div class="fea-compa"><a href="#"> <img src="images/featured-companie-4.jpg" alt="featured-companie"></a></div>
                            <div class="fea-compa"><a href="#"> <img src="images/featured-companie-5.jpg" alt="featured-companie"></a></div>
                            <div class="fea-compa"><a href="#"> <img src="images/featured-companie-6.jpg" alt="featured-companie"></a></div>
                        </div>
                    </div><!--create-job-->

                    <div class="openings">
                        <a href="#"><img src="images/mg-group.jpg" alt="ads"></a>
                    </div><!--openings-->

                </div><!--col-md-3-->

            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
@endsection