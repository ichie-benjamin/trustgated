
<!doctype html>
<html lang="en">

@include('temp.layouts.head')

<body>

<div id="page-wrapper">

    <!-- HEADER -->
   @include('temp.layouts.header')

    <!-- HEADER -->




    <!-- CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-11">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">My Account</a></li>
                        <li class="active">Edit Details</li>
                    </ol>
                </div>
                <div class="col-md-3">


                    @include('temp.layouts.job-sidebar')
                    <!--create-job-->

                    <!-- PROFILE VISIBILITY -->
                    <div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header avd-serbg">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img src="images/close-icon.png"></span></button>
                                    <h4 class="modal-title mode-tit" id="myModalLabel">Visibility Settings</h4>
                                </div>
                                <div class="modal-body avdbg1a">
                                    <form class="form-horizontal m10">
                                        <div class="row visipad">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="visifont"> Your visibility setting currently is:
                                                        Not Visible</div>
                                                </div>
                                                <div class="form-group m20">
                                                    <div class="radio visipad15 visicol">
                                                        <div class="clearfix m10"></div>
                                                        <label> <input type="radio" name="visibility" id="visibility" value="1" />  Visible as Active
                                                            <div class="visifont2">Your profile will be visible in the Jobs database to recruiters. Recruiters will contact you for suitable job opportunities</div>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group m20">
                                                    <div class="radio visipad15a visicol">
                                                        <div class="clearfix m10"></div>
                                                        <label> <input type="radio" name="visibility" id="visibility1" value="0" />  Visible as Inactive
                                                            <div class="visifont2">Your profile will be visible in the Jobs database, but recruiters will be informed that you are not actively looking for jobs. Recruiters may still contact you for job opportunities </div>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group m20 ">
                                                    <div class="radio visipad15 visicol">
                                                        <div class="clearfix m10"></div>
                                                        <label> <input type="radio" name="visibility" id="visibility2" value="2" checked/>  Not Visible
                                                            <div class="visifont2">Your profile will not be visible to recruiters. You will not get unadvertised jobs (which comprise up to 40% of all job opportunities on Jobs.com) from recruiters</div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group m20 visibor">
                                                    Regardless of the above settings you can continue to apply to jobs advertised on Jobs.com
                                                </div>

                                                <div class="form-group ">

                                                    <div class="col-sm-3 ">
                                                        <input name="save2" class="btn-blue btn bc3 " value="Save" type="submit">
                                                    </div>
                                                    <div class="col-sm-3 ">
                                                        <div class="btn-blue btn bc3"><a data-dismiss="modal" href="#" style="color:#FFF"> Cancel </a></div>
                                                    </div>
                                                </div>

                                            </div><!--col-md-10-->
                                        </div> <!--row-->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PROFILE VISIBILITY -->
                </div><!--col-sm-2-->

                <div class="col-md-9" >
                    <div class="top-emp-center">
                        <h4>Edit Details</h4>
                    </div> <!--top-emp-center-->
                    <form name="register" id="register" method="post" class="form-horizontal m10">
                        <div class="row" >
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>Full Name:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="First name" value="Varsha" >
                                        <span id="nameInfo"></span>
                                    </div>
                                </div><!--col-md-6-->

                            </div>
                            <div class="col-md-6" >
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>Username:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="editusername" id="editusername" placeholder="Username" value="Varsha" readonly>
                                        <span id="usernameInfo"></span>
                                    </div>

                                </div>

                            </div><!--col-md-6-->
                            <div class="col-md-12" >
                                <div class="form-group">
                                    <label class="col-sm-2 pedit"><span class="red-star">*</span>Resume Headline:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="res_title" id="res_title"rows="3" value="">Masters with 18 years of Technical experience in software development</textarea>
                                        <div class="text-right inboxa "><small >Your Resume Headline is the first thing Recruiters will see.</small></div>
                                        <span id="resumeInfo"></span>
                                    </div>
                                </div>
                            </div><!--col-md-12-->

                            <div class="col-md-6" >
                                <!-- <div class="form-group">
                                  <label  class="col-sm-4 pedit"><span class="red-star">*</span>Nationality: </label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control"  placeholder="Nationality" value="">
                                  </div>
                                </div><!--form-group-->

                                <!--<div class="form-group">
                                  <label  class="col-sm-4 pedit"><span class="red-star">*</span>Visa Status:</label>
                                  <div class="col-sm-8">
                                    <select class="form-control">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                    </select>
                                  </div>
                                </div><!--form-group-->

                                <div id='divcountry'>
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit"><span class="red-star">*</span>Country:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="country" id="country" onChange="loadXMLDoc(this.value)">
                                                <option value="">Select Country</option>
                                                <option value="211" > Bangladesh </option>
                                                <option value="210" > India </option>
                                                <option value="212" > Pakistan </option>
                                            </select>
                                            <span id="countryinfo"></span>
                                        </div>
                                    </div>
                                </div>

                                <div id='divstate'>
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit"><span class="red-star">*</span>State:</label>
                                        <div class="col-sm-8" id='emp_state'>
                                            <select class="form-control" name="location" id="location" onChange="loadXMLDoc1(this.value)">
                                                <option value="" >--Select Location--</option>
                                                <option value="138" > Alabama </option>
                                                <option value="142" > Alaska </option>
                                                <option value="246" > Arizona </option>
                                                <option value="248" > Arkansas </option>
                                                <option value="623" > California </option>
                                                <option value="807" > Colorado </option>
                                                <option value="813" > Connecticut </option>
                                                <option value="904" > Delaware </option>
                                                <option value="940" > District of Columbia </option>
                                                <option value="1124" > Florida </option>
                                                <option value="1188" > Georgia </option>
                                                <option value="1349" > Hawaii </option>
                                                <option value="1421" > Idaho </option>
                                                <option value="1437" > Illinois </option>
                                                <option value="1451" > Indiana </option>
                                                <option value="1459" selected> Iowa </option>
                                                <option value="1591" > Kansas </option>
                                                <option value="1653" > Kentucky </option>
                                                <option value="1993" > Louisiana </option>
                                                <option value="2055" > Maine </option>
                                                <option value="2124" > Maryland </option>
                                                <option value="2136" > Massachusetts </option>
                                                <option value="2190" > Michigan </option>
                                                <option value="2208" > Minnesota </option>
                                                <option value="2222" > Mississippi </option>
                                                <option value="2223" > Missouri </option>
                                                <option value="2248" > Montana </option>
                                                <option value="2367" > Nebraska </option>
                                                <option value="2380" > Nevada </option>
                                                <option value="2383" > New Hampshire </option>
                                                <option value="2385" > New Jersey </option>
                                                <option value="2386" > New Mexico </option>
                                                <option value="2389" > New York </option>
                                                <option value="2454" > North Carolina </option>
                                                <option value="2457" > North Dakota </option>
                                                <option value="2537" > Ohio </option>
                                                <option value="2545" > Oklahoma </option>
                                                <option value="2570" > Oregon </option>
                                                <option value="2684" > Pennsylvania </option>
                                                <option value="2887" > Rhode Island </option>
                                                <option value="3299" > South Carolina </option>
                                                <option value="3301" > South Dakota </option>
                                                <option value="3496" > Tennessee </option>
                                                <option value="3501" > Texas </option>
                                                <option value="3642" > Utah </option>
                                                <option value="3696" > Vermont </option>
                                                <option value="3726" > Virginia </option>
                                                <option value="3769" > Washington </option>
                                                <option value="3784" > West Virginia </option>
                                                <option value="3812" > Wisconsin </option>
                                                <option value="3820" > Wyoming </option>

                                            </select>
                                            <span id="stateInfo"></span>
                                        </div>
                                    </div>
                                </div>


                                <div id='divcity'>
                                    <div class="form-group">
                                        <label class="col-sm-4 pedit"><span class="red-star">*</span>City:</label>
                                        <div class="col-sm-8" id='location1'>
                                            <select name="city" class="form-control" id="city1">
                                                <option value="">Select City</option>
                                                <option value="Ackley" > Ackley </option>
                                                <option value="Ackworth" > Ackworth </option>
                                                <option value="Adair" > Adair </option>
                                                <option value="Adel" > Adel </option>
                                                <option value="Afton" > Afton </option>
                                                <option value="Agency" > Agency </option>
                                                <option value="Ainsworth" > Ainsworth </option>
                                                <option value="Akron" > Akron </option>
                                                <option value="Albert City" > Albert City </option>
                                                <option value="Albia" > Albia </option>
                                                <option value="Albion" > Albion </option>
                                                <option value="Alburnett" > Alburnett </option>
                                                <option value="Alden" > Alden </option>
                                                <option value="Alexander" > Alexander </option>
                                                <option value="Algona" > Algona </option>
                                                <option value="Alleman" > Alleman </option>
                                                <option value="Allerton" > Allerton </option>
                                                <option value="Allison" selected> Allison </option>
                                                <option value="Alta" > Alta </option>
                                                <option value="Alta Vista" > Alta Vista </option>
                                                <option value="Alton" > Alton </option>
                                                <option value="Altoona" > Altoona </option>
                                                <option value="Alvord" > Alvord </option>
                                                <option value="Amana" > Amana </option>
                                                <option value="Ames" > Ames </option>
                                                <option value="Anamosa" > Anamosa </option>
                                                <option value="Andover" > Andover </option>
                                                <option value="Andrew" > Andrew </option>
                                                <option value="Anita" > Anita </option>
                                                <option value="Ankeny" > Ankeny </option>
                                                <option value="Anthon" > Anthon </option>
                                                <option value="Aplington" > Aplington </option>
                                                <option value="Arcadia" > Arcadia </option>
                                                <option value="Archer" > Archer </option>
                                                <option value="Aredale" > Aredale </option>
                                                <option value="Argyle" > Argyle </option>
                                                <option value="Arion" > Arion </option>
                                                <option value="Arispe" > Arispe </option>
                                                <option value="Arlington" > Arlington </option>
                                                <option value="Armstrong" > Armstrong </option>
                                                <option value="Arnolds Park" > Arnolds Park </option>
                                                <option value="Arthur" > Arthur </option>
                                                <option value="Ashton" > Ashton </option>
                                                <option value="Aspinwall" > Aspinwall </option>
                                                <option value="Atalissa" > Atalissa </option>
                                                <option value="Atkins" > Atkins </option>
                                                <option value="Atlantic" > Atlantic </option>
                                                <option value="Auburn" > Auburn </option>
                                                <option value="Audubon" > Audubon </option>
                                                <option value="Aurelia" > Aurelia </option>
                                                <option value="Aurora" > Aurora </option>
                                                <option value="Austinville" > Austinville </option>
                                                <option value="Avoca" > Avoca </option>
                                                <option value="Ayrshire" > Ayrshire </option>
                                                <option value="Badger" > Badger </option>
                                                <option value="Bagley" > Bagley </option>
                                                <option value="Baldwin" > Baldwin </option>
                                                <option value="Bancroft" > Bancroft </option>
                                                <option value="Barnes City" > Barnes City </option>
                                                <option value="Barnum" > Barnum </option>
                                                <option value="Batavia" > Batavia </option>
                                                <option value="Battle Creek" > Battle Creek </option>
                                                <option value="Baxter" > Baxter </option>
                                                <option value="Bayard" > Bayard </option>
                                                <option value="Beacon" > Beacon </option>
                                                <option value="Beaman" > Beaman </option>
                                                <option value="Beaver" > Beaver </option>
                                                <option value="Bedford" > Bedford </option>
                                                <option value="Belle Plaine" > Belle Plaine </option>
                                                <option value="Bellevue" > Bellevue </option>
                                                <option value="Belmond" > Belmond </option>
                                                <option value="Bennett" > Bennett </option>
                                                <option value="Bernard" > Bernard </option>
                                                <option value="Berwick" > Berwick </option>
                                                <option value="Bettendorf" > Bettendorf </option>
                                                <option value="Bevington" > Bevington </option>
                                                <option value="Birmingham" > Birmingham </option>
                                                <option value="Blairsburg" > Blairsburg </option>
                                                <option value="Blairstown" > Blairstown </option>
                                                <option value="Blakesburg" > Blakesburg </option>
                                                <option value="Blanchard" > Blanchard </option>
                                                <option value="Blencoe" > Blencoe </option>
                                                <option value="Blockton" > Blockton </option>
                                                <option value="Bloomfield" > Bloomfield </option>
                                                <option value="Blue Grass" > Blue Grass </option>
                                                <option value="Bode" > Bode </option>
                                                <option value="Bonaparte" > Bonaparte </option>
                                                <option value="Bondurant" > Bondurant </option>
                                                <option value="Boone" > Boone </option>
                                                <option value="Booneville" > Booneville </option>
                                                <option value="Bouton" > Bouton </option>
                                                <option value="Boxholm" > Boxholm </option>
                                                <option value="Boyden" > Boyden </option>
                                                <option value="Braddyville" > Braddyville </option>
                                                <option value="Bradford" > Bradford </option>
                                                <option value="Bradgate" > Bradgate </option>
                                                <option value="Brandon" > Brandon </option>
                                                <option value="Brayton" > Brayton </option>
                                                <option value="Breda" > Breda </option>
                                                <option value="Bridgewater" > Bridgewater </option>
                                                <option value="Brighton" > Brighton </option>
                                                <option value="Bristow" > Bristow </option>
                                                <option value="Britt" > Britt </option>
                                                <option value="Bronson" > Bronson </option>
                                                <option value="Brooklyn" > Brooklyn </option>
                                                <option value="Brunsville" > Brunsville </option>
                                                <option value="Bryant" > Bryant </option>
                                                <option value="Buckeye" > Buckeye </option>
                                                <option value="Buckingham" > Buckingham </option>
                                                <option value="Buffalo" > Buffalo </option>
                                                <option value="Buffalo Center" > Buffalo Center </option>
                                                <option value="Burlington" > Burlington </option>
                                                <option value="Burnside" > Burnside </option>
                                                <option value="Burt" > Burt </option>
                                                <option value="Bussey" > Bussey </option>
                                                <option value="Calamus" > Calamus </option>
                                                <option value="Callender" > Callender </option>
                                                <option value="Calmar" > Calmar </option>
                                                <option value="Calumet" > Calumet </option>
                                                <option value="Camanche" > Camanche </option>
                                                <option value="Cambridge" > Cambridge </option>
                                                <option value="Cantril" > Cantril </option>
                                                <option value="Carbon" > Carbon </option>
                                                <option value="Carlisle" > Carlisle </option>
                                                <option value="Carpenter" > Carpenter </option>
                                                <option value="Carroll" > Carroll </option>
                                                <option value="Carson" > Carson </option>
                                                <option value="Carter Lake" > Carter Lake </option>
                                                <option value="Cascade" > Cascade </option>
                                                <option value="Casey" > Casey </option>
                                                <option value="Castalia" > Castalia </option>
                                                <option value="Castana" > Castana </option>
                                                <option value="Cedar" > Cedar </option>
                                                <option value="Cedar Falls" > Cedar Falls </option>
                                                <option value="Cedar Rapids" > Cedar Rapids </option>
                                                <option value="Center Junction" > Center Junction </option>
                                                <option value="Center Point" > Center Point </option>
                                                <option value="Centerville" > Centerville </option>
                                                <option value="Central City" > Central City </option>
                                                <option value="Chapin" > Chapin </option>
                                                <option value="Chariton" > Chariton </option>
                                                <option value="Charles City" > Charles City </option>
                                                <option value="Charlotte" > Charlotte </option>
                                                <option value="Charter Oak" > Charter Oak </option>
                                                <option value="Chatsworth" > Chatsworth </option>
                                                <option value="Chelsea" > Chelsea </option>
                                                <option value="Cherokee" > Cherokee </option>
                                                <option value="Chester" > Chester </option>
                                                <option value="Chillicothe" > Chillicothe </option>
                                                <option value="Churdan" > Churdan </option>
                                                <option value="Cincinnati" > Cincinnati </option>
                                                <option value="Clare" > Clare </option>
                                                <option value="Clarence" > Clarence </option>
                                                <option value="Clarinda" > Clarinda </option>
                                                <option value="Clarion" > Clarion </option>
                                                <option value="Clarksville" > Clarksville </option>
                                                <option value="Clear Lake" > Clear Lake </option>
                                                <option value="Clearfield" > Clearfield </option>
                                                <option value="Cleghorn" > Cleghorn </option>
                                                <option value="Clemons" > Clemons </option>
                                                <option value="Clermont" > Clermont </option>
                                                <option value="Climbing Hill" > Climbing Hill </option>
                                                <option value="Clinton" > Clinton </option>
                                                <option value="Clio" > Clio </option>
                                                <option value="Clive" > Clive </option>
                                                <option value="Clutier" > Clutier </option>
                                                <option value="Coggon" > Coggon </option>
                                                <option value="Coin" > Coin </option>
                                                <option value="Colesburg" > Colesburg </option>
                                                <option value="Colfax" > Colfax </option>
                                                <option value="College Springs" > College Springs </option>
                                                <option value="Collins" > Collins </option>
                                                <option value="Colo" > Colo </option>
                                                <option value="Columbia" > Columbia </option>
                                                <option value="Columbus City" > Columbus City </option>
                                                <option value="Columbus Junction" > Columbus Junction </option>
                                                <option value="Colwell" > Colwell </option>
                                                <option value="Conesville" > Conesville </option>
                                                <option value="Conrad" > Conrad </option>
                                                <option value="Conroy" > Conroy </option>
                                                <option value="Coon Rapids" > Coon Rapids </option>
                                                <option value="Coralville" > Coralville </option>
                                                <option value="Corning" > Corning </option>
                                                <option value="Correctionville" > Correctionville </option>
                                                <option value="Corwith" > Corwith </option>
                                                <option value="Corydon" > Corydon </option>
                                                <option value="Coulter" > Coulter </option>
                                                <option value="Council Bluffs" > Council Bluffs </option>
                                                <option value="Crawfordsville" > Crawfordsville </option>
                                                <option value="Crescent" > Crescent </option>
                                                <option value="Cresco" > Cresco </option>
                                                <option value="Creston" > Creston </option>
                                                <option value="Cromwell" > Cromwell </option>
                                                <option value="Crystal Lake" > Crystal Lake </option>
                                                <option value="Cumberland" > Cumberland </option>
                                                <option value="Cumming" > Cumming </option>
                                                <option value="Curlew" > Curlew </option>
                                                <option value="Cushing" > Cushing </option>
                                                <option value="Cylinder" > Cylinder </option>
                                                <option value="Dakota City" > Dakota City </option>
                                                <option value="Dallas" > Dallas </option>
                                                <option value="Dallas Center" > Dallas Center </option>
                                                <option value="Dana" > Dana </option>
                                                <option value="Danbury" > Danbury </option>
                                                <option value="Danville" > Danville </option>
                                                <option value="Davenport" > Davenport </option>
                                                <option value="Davis City" > Davis City </option>
                                                <option value="Dawson" > Dawson </option>
                                                <option value="Dayton" > Dayton </option>
                                                <option value="De Soto" > De Soto </option>
                                                <option value="De Witt" > De Witt </option>
                                                <option value="Decatur" > Decatur </option>
                                                <option value="Decorah" > Decorah </option>
                                                <option value="Dedham" > Dedham </option>
                                                <option value="Deep River" > Deep River </option>
                                                <option value="Defiance" > Defiance </option>
                                                <option value="Delaware" > Delaware </option>
                                                <option value="Delhi" > Delhi </option>
                                                <option value="Delmar" > Delmar </option>
                                                <option value="Deloit" > Deloit </option>
                                                <option value="Delta" > Delta </option>
                                                <option value="Denison" > Denison </option>
                                                <option value="Denmark" > Denmark </option>
                                                <option value="Denver" > Denver </option>
                                                <option value="Derby" > Derby </option>
                                                <option value="Des Moines" > Des Moines </option>
                                                <option value="Dewar" > Dewar </option>
                                                <option value="Dexter" > Dexter </option>
                                                <option value="Diagonal" > Diagonal </option>
                                                <option value="Dickens" > Dickens </option>
                                                <option value="Dike" > Dike </option>
                                                <option value="Dixon" > Dixon </option>
                                                <option value="Dolliver" > Dolliver </option>
                                                <option value="Donahue" > Donahue </option>
                                                <option value="Donnellson" > Donnellson </option>
                                                <option value="Doon" > Doon </option>
                                                <option value="Dorchester" > Dorchester </option>
                                                <option value="Douds" > Douds </option>
                                                <option value="Dougherty" > Dougherty </option>
                                                <option value="Dow City" > Dow City </option>
                                                <option value="Dows" > Dows </option>
                                                <option value="Drakesville" > Drakesville </option>
                                                <option value="Dubuque" > Dubuque </option>
                                                <option value="Dumont" > Dumont </option>
                                                <option value="Duncombe" > Duncombe </option>
                                                <option value="Dundee" > Dundee </option>
                                                <option value="Dunkerton" > Dunkerton </option>
                                                <option value="Dunlap" > Dunlap </option>
                                                <option value="Durango" > Durango </option>
                                                <option value="Durant" > Durant </option>
                                                <option value="Dyersville" > Dyersville </option>
                                                <option value="Dysart" > Dysart </option>
                                                <option value="Eagle Grove" > Eagle Grove </option>
                                                <option value="Earlham" > Earlham </option>
                                                <option value="Earling" > Earling </option>
                                                <option value="Earlville" > Earlville </option>
                                                <option value="Early" > Early </option>
                                                <option value="Eddyville" > Eddyville </option>
                                                <option value="Edgewood" > Edgewood </option>
                                                <option value="Elberon" > Elberon </option>
                                                <option value="Eldon" > Eldon </option>
                                                <option value="Eldora" > Eldora </option>
                                                <option value="Eldridge" > Eldridge </option>
                                                <option value="Elgin" > Elgin </option>
                                                <option value="Elk Horn" > Elk Horn </option>
                                                <option value="Elkader" > Elkader </option>
                                                <option value="Elkhart" > Elkhart </option>
                                                <option value="Elkport" > Elkport </option>
                                                <option value="Elliott" > Elliott </option>
                                                <option value="Ellston" > Ellston </option>
                                                <option value="Ellsworth" > Ellsworth </option>
                                                <option value="Elma" > Elma </option>
                                                <option value="Ely" > Ely </option>
                                                <option value="Emerson" > Emerson </option>
                                                <option value="Emmetsburg" > Emmetsburg </option>
                                                <option value="Epworth" > Epworth </option>
                                                <option value="Essex" > Essex </option>
                                                <option value="Estherville" > Estherville </option>
                                                <option value="Evansdale" > Evansdale </option>
                                                <option value="Everly" > Everly </option>
                                                <option value="Exira" > Exira </option>
                                                <option value="Exline" > Exline </option>
                                                <option value="Fairbank" > Fairbank </option>
                                                <option value="Fairfax" > Fairfax </option>
                                                <option value="Fairfield" > Fairfield </option>
                                                <option value="Farley" > Farley </option>
                                                <option value="Farmersburg" > Farmersburg </option>
                                                <option value="Farmington" > Farmington </option>
                                                <option value="Farnhamville" > Farnhamville </option>
                                                <option value="Farragut" > Farragut </option>
                                                <option value="Fayette" > Fayette </option>
                                                <option value="Fenton" > Fenton </option>
                                                <option value="Ferguson" > Ferguson </option>
                                                <option value="Fertile" > Fertile </option>
                                                <option value="Floris" > Floris </option>
                                                <option value="Floyd" > Floyd </option>
                                                <option value="Fonda" > Fonda </option>
                                                <option value="Fontanelle" > Fontanelle </option>
                                                <option value="Forest City" > Forest City </option>
                                                <option value="Fort Atkinson" > Fort Atkinson </option>
                                                <option value="Fort Dodge" > Fort Dodge </option>
                                                <option value="Fort Madison" > Fort Madison </option>
                                                <option value="Fostoria" > Fostoria </option>
                                                <option value="Fredericksburg" > Fredericksburg </option>
                                                <option value="Frederika" > Frederika </option>
                                                <option value="Fremont" > Fremont </option>
                                                <option value="Fruitland" > Fruitland </option>
                                                <option value="Galt" > Galt </option>
                                                <option value="Galva" > Galva </option>
                                                <option value="Garber" > Garber </option>
                                                <option value="Garden City" > Garden City </option>
                                                <option value="Garden Grove" > Garden Grove </option>
                                                <option value="Garnavillo" > Garnavillo </option>
                                                <option value="Garner" > Garner </option>
                                                <option value="Garrison" > Garrison </option>
                                                <option value="Garwin" > Garwin </option>
                                                <option value="Geneva" > Geneva </option>
                                                <option value="George" > George </option>
                                                <option value="Gibson" > Gibson </option>
                                                <option value="Gifford" > Gifford </option>
                                                <option value="Gilbert" > Gilbert </option>
                                                <option value="Gilbertville" > Gilbertville </option>
                                                <option value="Gillett Grove" > Gillett Grove </option>
                                                <option value="Gilman" > Gilman </option>
                                                <option value="Gilmore City" > Gilmore City </option>
                                                <option value="Gladbrook" > Gladbrook </option>
                                                <option value="Glenwood" > Glenwood </option>
                                                <option value="Glidden" > Glidden </option>
                                                <option value="Goldfield" > Goldfield </option>
                                                <option value="Goodell" > Goodell </option>
                                                <option value="Goose Lake" > Goose Lake </option>
                                                <option value="Gowrie" > Gowrie </option>
                                                <option value="Graettinger" > Graettinger </option>
                                                <option value="Grafton" > Grafton </option>
                                                <option value="Grand Junction" > Grand Junction </option>
                                                <option value="Grand Mound" > Grand Mound </option>
                                                <option value="Grand River" > Grand River </option>
                                                <option value="Grandview" > Grandview </option>
                                                <option value="Granger" > Granger </option>
                                                <option value="Grant" > Grant </option>
                                                <option value="Granville" > Granville </option>
                                                <option value="Gravity" > Gravity </option>
                                                <option value="Gray" > Gray </option>
                                                <option value="Greeley" > Greeley </option>
                                                <option value="Greene" > Greene </option>
                                                <option value="Greenfield" > Greenfield </option>
                                                <option value="Greenville" > Greenville </option>
                                                <option value="Grimes" > Grimes </option>
                                                <option value="Grinnell" > Grinnell </option>
                                                <option value="Griswold" > Griswold </option>
                                                <option value="Grundy Center" > Grundy Center </option>
                                                <option value="Gruver" > Gruver </option>
                                                <option value="Guernsey" > Guernsey </option>
                                                <option value="Guthrie Center" > Guthrie Center </option>
                                                <option value="Guttenberg" > Guttenberg </option>
                                                <option value="Halbur" > Halbur </option>
                                                <option value="Hamburg" > Hamburg </option>
                                                <option value="Hamilton" > Hamilton </option>
                                                <option value="Hamlin" > Hamlin </option>
                                                <option value="Hampton" > Hampton </option>
                                                <option value="Hancock" > Hancock </option>
                                                <option value="Hanlontown" > Hanlontown </option>
                                                <option value="Harcourt" > Harcourt </option>
                                                <option value="Hardy" > Hardy </option>
                                                <option value="Harlan" > Harlan </option>
                                                <option value="Harper" > Harper </option>
                                                <option value="Harpers Ferry" > Harpers Ferry </option>
                                                <option value="Harris" > Harris </option>
                                                <option value="Hartford" > Hartford </option>
                                                <option value="Hartley" > Hartley </option>
                                                <option value="Hartwick" > Hartwick </option>
                                                <option value="Harvey" > Harvey </option>
                                                <option value="Hastings" > Hastings </option>
                                                <option value="Havelock" > Havelock </option>
                                                <option value="Haverhill" > Haverhill </option>
                                                <option value="Hawarden" > Hawarden </option>
                                                <option value="Hawkeye" > Hawkeye </option>
                                                <option value="Hayesville" > Hayesville </option>
                                                <option value="Hazleton" > Hazleton </option>
                                                <option value="Hedrick" > Hedrick </option>
                                                <option value="Henderson" > Henderson </option>
                                                <option value="Hiawatha" > Hiawatha </option>
                                                <option value="Hills" > Hills </option>
                                                <option value="Hillsboro" > Hillsboro </option>
                                                <option value="Hinton" > Hinton </option>
                                                <option value="Holland" > Holland </option>
                                                <option value="Holstein" > Holstein </option>
                                                <option value="Holy Cross" > Holy Cross </option>
                                                <option value="Homestead" > Homestead </option>
                                                <option value="Honey Creek" > Honey Creek </option>
                                                <option value="Hopkinton" > Hopkinton </option>
                                                <option value="Hornick" > Hornick </option>
                                                <option value="Hospers" > Hospers </option>
                                                <option value="Houghton" > Houghton </option>
                                                <option value="Hubbard" > Hubbard </option>
                                                <option value="Hudson" > Hudson </option>
                                                <option value="Hull" > Hull </option>
                                                <option value="Humboldt" > Humboldt </option>
                                                <option value="Humeston" > Humeston </option>
                                                <option value="Huxley" > Huxley </option>
                                                <option value="Ida Grove" > Ida Grove </option>
                                                <option value="Imogene" > Imogene </option>
                                                <option value="Independence" > Independence </option>
                                                <option value="Indianola" > Indianola </option>
                                                <option value="Inwood" > Inwood </option>
                                                <option value="Ionia" > Ionia </option>
                                                <option value="Iowa City" > Iowa City </option>
                                                <option value="Iowa Falls" > Iowa Falls </option>
                                                <option value="Ira" > Ira </option>
                                                <option value="Ireton" > Ireton </option>
                                                <option value="Irwin" > Irwin </option>
                                                <option value="Jamaica" > Jamaica </option>
                                                <option value="Janesville" > Janesville </option>
                                                <option value="Jefferson" > Jefferson </option>
                                                <option value="Jesup" > Jesup </option>
                                                <option value="Jewell" > Jewell </option>
                                                <option value="Johnston" > Johnston </option>
                                                <option value="Joice" > Joice </option>
                                                <option value="Jolley" > Jolley </option>
                                                <option value="Kalona" > Kalona </option>
                                                <option value="Kamrar" > Kamrar </option>
                                                <option value="Kanawha" > Kanawha </option>
                                                <option value="Kellerton" > Kellerton </option>
                                                <option value="Kelley" > Kelley </option>
                                                <option value="Kellogg" > Kellogg </option>
                                                <option value="Kensett" > Kensett </option>
                                                <option value="Keokuk" > Keokuk </option>
                                                <option value="Keosauqua" > Keosauqua </option>
                                                <option value="Keota" > Keota </option>
                                                <option value="Kesley" > Kesley </option>
                                                <option value="Keswick" > Keswick </option>
                                                <option value="Keystone" > Keystone </option>
                                                <option value="Killduff" > Killduff </option>
                                                <option value="Kimballton" > Kimballton </option>
                                                <option value="Kingsley" > Kingsley </option>
                                                <option value="Kirkman" > Kirkman </option>
                                                <option value="Kirkville" > Kirkville </option>
                                                <option value="Kiron" > Kiron </option>
                                                <option value="Klemme" > Klemme </option>
                                                <option value="Knierim" > Knierim </option>
                                                <option value="Knoxville" > Knoxville </option>
                                                <option value="La Motte" > La Motte </option>
                                                <option value="La Porte City" > La Porte City </option>
                                                <option value="Lacona" > Lacona </option>
                                                <option value="Ladora" > Ladora </option>
                                                <option value="Lake City" > Lake City </option>
                                                <option value="Lake Mills" > Lake Mills </option>
                                                <option value="Lake Park" > Lake Park </option>
                                                <option value="Lake View" > Lake View </option>
                                                <option value="Lakota" > Lakota </option>
                                                <option value="Lamoni" > Lamoni </option>
                                                <option value="Lamont" > Lamont </option>
                                                <option value="Lanesboro" > Lanesboro </option>
                                                <option value="Langworthy" > Langworthy </option>
                                                <option value="Lansing" > Lansing </option>
                                                <option value="Larchwood" > Larchwood </option>
                                                <option value="Larrabee" > Larrabee </option>
                                                <option value="Latimer" > Latimer </option>
                                                <option value="Laurel" > Laurel </option>
                                                <option value="Laurens" > Laurens </option>
                                                <option value="Lawler" > Lawler </option>
                                                <option value="Lawton" > Lawton </option>
                                                <option value="Le Claire" > Le Claire </option>
                                                <option value="Le Grand" > Le Grand </option>
                                                <option value="Le Mars" > Le Mars </option>
                                                <option value="Ledyard" > Ledyard </option>
                                                <option value="Lehigh" > Lehigh </option>
                                                <option value="Leighton" > Leighton </option>
                                                <option value="Leland" > Leland </option>
                                                <option value="Lenox" > Lenox </option>
                                                <option value="Leon" > Leon </option>
                                                <option value="Lester" > Lester </option>
                                                <option value="Letts" > Letts </option>
                                                <option value="Lewis" > Lewis </option>
                                                <option value="Liberty Center" > Liberty Center </option>
                                                <option value="Libertyville" > Libertyville </option>
                                                <option value="Lidderdale" > Lidderdale </option>
                                                <option value="Lime Springs" > Lime Springs </option>
                                                <option value="Lincoln" > Lincoln </option>
                                                <option value="Linden" > Linden </option>
                                                <option value="Lineville" > Lineville </option>
                                                <option value="Linn Grove" > Linn Grove </option>
                                                <option value="Lisbon" > Lisbon </option>
                                                <option value="Liscomb" > Liscomb </option>
                                                <option value="Little Cedar" > Little Cedar </option>
                                                <option value="Little Rock" > Little Rock </option>
                                                <option value="Little Sioux" > Little Sioux </option>
                                                <option value="Livermore" > Livermore </option>
                                                <option value="Lockridge" > Lockridge </option>
                                                <option value="Logan" > Logan </option>
                                                <option value="Lohrville" > Lohrville </option>
                                                <option value="Lone Rock" > Lone Rock </option>
                                                <option value="Lone Tree" > Lone Tree </option>
                                                <option value="Long Grove" > Long Grove </option>
                                                <option value="Lorimor" > Lorimor </option>
                                                <option value="Lost Nation" > Lost Nation </option>
                                                <option value="Lovilia" > Lovilia </option>
                                                <option value="Low Moor" > Low Moor </option>
                                                <option value="Lowden" > Lowden </option>
                                                <option value="Lu Verne" > Lu Verne </option>
                                                <option value="Luana" > Luana </option>
                                                <option value="Lucas" > Lucas </option>
                                                <option value="Luther" > Luther </option>
                                                <option value="Luxemburg" > Luxemburg </option>
                                                <option value="Luzerne" > Luzerne </option>
                                                <option value="Lynnville" > Lynnville </option>
                                                <option value="Lytton" > Lytton </option>
                                                <option value="Macedonia" > Macedonia </option>
                                                <option value="Macksburg" > Macksburg </option>
                                                <option value="Madrid" > Madrid </option>
                                                <option value="Magnolia" > Magnolia </option>
                                                <option value="Malcom" > Malcom </option>
                                                <option value="Mallard" > Mallard </option>
                                                <option value="Malvern" > Malvern </option>
                                                <option value="Manchester" > Manchester </option>
                                                <option value="Manilla" > Manilla </option>
                                                <option value="Manly" > Manly </option>
                                                <option value="Manning" > Manning </option>
                                                <option value="Manson" > Manson </option>
                                                <option value="Mapleton" > Mapleton </option>
                                                <option value="Maquoketa" > Maquoketa </option>
                                                <option value="Marathon" > Marathon </option>
                                                <option value="Marble Rock" > Marble Rock </option>
                                                <option value="Marcus" > Marcus </option>
                                                <option value="Marengo" > Marengo </option>
                                                <option value="Marion" > Marion </option>
                                                <option value="Marne" > Marne </option>
                                                <option value="Marquette" > Marquette </option>
                                                <option value="Marshalltown" > Marshalltown </option>
                                                <option value="Martelle" > Martelle </option>
                                                <option value="Martensdale" > Martensdale </option>
                                                <option value="Martinsburg" > Martinsburg </option>
                                                <option value="Mason City" > Mason City </option>
                                                <option value="Masonville" > Masonville </option>
                                                <option value="Massena" > Massena </option>
                                                <option value="Matlock" > Matlock </option>
                                                <option value="Maurice" > Maurice </option>
                                                <option value="Maxwell" > Maxwell </option>
                                                <option value="Maynard" > Maynard </option>
                                                <option value="Mc Callsburg" > Mc Callsburg </option>
                                                <option value="Mc Causland" > Mc Causland </option>
                                                <option value="Mc Clelland" > Mc Clelland </option>
                                                <option value="Mc Gregor" > Mc Gregor </option>
                                                <option value="Mc Intire" > Mc Intire </option>
                                                <option value="Mccallsburg" > Mccallsburg </option>
                                                <option value="Mcclelland" > Mcclelland </option>
                                                <option value="Mcgregor" > Mcgregor </option>
                                                <option value="Mcintire" > Mcintire </option>
                                                <option value="Mechanicsville" > Mechanicsville </option>
                                                <option value="Mediapolis" > Mediapolis </option>
                                                <option value="Melbourne" > Melbourne </option>
                                                <option value="Melcher" > Melcher </option>
                                                <option value="Melrose" > Melrose </option>
                                                <option value="Melvin" > Melvin </option>
                                                <option value="Menlo" > Menlo </option>
                                                <option value="Meriden" > Meriden </option>
                                                <option value="Merrill" > Merrill </option>
                                                <option value="Meservey" > Meservey </option>
                                                <option value="Middle Amana" > Middle Amana </option>
                                                <option value="Middletown" > Middletown </option>
                                                <option value="Miles" > Miles </option>
                                                <option value="Milford" > Milford </option>
                                                <option value="Millersburg" > Millersburg </option>
                                                <option value="Millerton" > Millerton </option>
                                                <option value="Milo" > Milo </option>
                                                <option value="Milton" > Milton </option>
                                                <option value="Minburn" > Minburn </option>
                                                <option value="Minden" > Minden </option>
                                                <option value="Mineola" > Mineola </option>
                                                <option value="Mingo" > Mingo </option>
                                                <option value="Missouri Valley" > Missouri Valley </option>
                                                <option value="Mitchellville" > Mitchellville </option>
                                                <option value="Modale" > Modale </option>
                                                <option value="Mondamin" > Mondamin </option>
                                                <option value="Monmouth" > Monmouth </option>
                                                <option value="Monona" > Monona </option>
                                                <option value="Monroe" > Monroe </option>
                                                <option value="Montezuma" > Montezuma </option>
                                                <option value="Monticello" > Monticello </option>
                                                <option value="Montour" > Montour </option>
                                                <option value="Montpelier" > Montpelier </option>
                                                <option value="Montrose" > Montrose </option>
                                                <option value="Moorhead" > Moorhead </option>
                                                <option value="Moorland" > Moorland </option>
                                                <option value="Moravia" > Moravia </option>
                                                <option value="Morley" > Morley </option>
                                                <option value="Morning Sun" > Morning Sun </option>
                                                <option value="Morrison" > Morrison </option>
                                                <option value="Moscow" > Moscow </option>
                                                <option value="Moulton" > Moulton </option>
                                                <option value="Mount Auburn" > Mount Auburn </option>
                                                <option value="Mount Ayr" > Mount Ayr </option>
                                                <option value="Mount Pleasant" > Mount Pleasant </option>
                                                <option value="Mount Sterling" > Mount Sterling </option>
                                                <option value="Mount Union" > Mount Union </option>
                                                <option value="Mount Vernon" > Mount Vernon </option>
                                                <option value="Moville" > Moville </option>
                                                <option value="Murray" > Murray </option>
                                                <option value="Muscatine" > Muscatine </option>
                                                <option value="Mystic" > Mystic </option>
                                                <option value="Nashua" > Nashua </option>
                                                <option value="Nemaha" > Nemaha </option>
                                                <option value="Neola" > Neola </option>
                                                <option value="Nevada" > Nevada </option>
                                                <option value="New Albin" > New Albin </option>
                                                <option value="New Hampton" > New Hampton </option>
                                                <option value="New Hartford" > New Hartford </option>
                                                <option value="New Liberty" > New Liberty </option>
                                                <option value="New London" > New London </option>
                                                <option value="New Market" > New Market </option>
                                                <option value="New Providence" > New Providence </option>
                                                <option value="New Sharon" > New Sharon </option>
                                                <option value="New Vienna" > New Vienna </option>
                                                <option value="New Virginia" > New Virginia </option>
                                                <option value="Newell" > Newell </option>
                                                <option value="Newhall" > Newhall </option>
                                                <option value="Newton" > Newton </option>
                                                <option value="Nichols" > Nichols </option>
                                                <option value="Nodaway" > Nodaway </option>
                                                <option value="Nora Springs" > Nora Springs </option>
                                                <option value="North Buena Vista" > North Buena Vista </option>
                                                <option value="North English" > North English </option>
                                                <option value="North Liberty" > North Liberty </option>
                                                <option value="North Washington" > North Washington </option>
                                                <option value="Northboro" > Northboro </option>
                                                <option value="Northwood" > Northwood </option>
                                                <option value="Norwalk" > Norwalk </option>
                                                <option value="Norway" > Norway </option>
                                                <option value="Oakdale" > Oakdale </option>
                                                <option value="Oakland" > Oakland </option>
                                                <option value="Oakville" > Oakville </option>
                                                <option value="Ocheyedan" > Ocheyedan </option>
                                                <option value="Odebolt" > Odebolt </option>
                                                <option value="Oelwein" > Oelwein </option>
                                                <option value="Ogden" > Ogden </option>
                                                <option value="Okoboji" > Okoboji </option>
                                                <option value="Olds" > Olds </option>
                                                <option value="Olin" > Olin </option>
                                                <option value="Ollie" > Ollie </option>
                                                <option value="Onawa" > Onawa </option>
                                                <option value="Onslow" > Onslow </option>
                                                <option value="Oran" > Oran </option>
                                                <option value="Orange City" > Orange City </option>
                                                <option value="Orchard" > Orchard </option>
                                                <option value="Orient" > Orient </option>
                                                <option value="Osage" > Osage </option>
                                                <option value="Osceola" > Osceola </option>
                                                <option value="Oskaloosa" > Oskaloosa </option>
                                                <option value="Ossian" > Ossian </option>
                                                <option value="Otho" > Otho </option>
                                                <option value="Otley" > Otley </option>
                                                <option value="Oto" > Oto </option>
                                                <option value="Ottosen" > Ottosen </option>
                                                <option value="Ottumwa" > Ottumwa </option>
                                                <option value="Oxford" > Oxford </option>
                                                <option value="Oxford Junction" > Oxford Junction </option>
                                                <option value="Oyens" > Oyens </option>
                                                <option value="Pacific Junction" > Pacific Junction </option>
                                                <option value="Packwood" > Packwood </option>
                                                <option value="Palmer" > Palmer </option>
                                                <option value="Palo" > Palo </option>
                                                <option value="Panama" > Panama </option>
                                                <option value="Panora" > Panora </option>
                                                <option value="Parkersburg" > Parkersburg </option>
                                                <option value="Parnell" > Parnell </option>
                                                <option value="Paton" > Paton </option>
                                                <option value="Patterson" > Patterson </option>
                                                <option value="Paullina" > Paullina </option>
                                                <option value="Pella" > Pella </option>
                                                <option value="Peosta" > Peosta </option>
                                                <option value="Percival" > Percival </option>
                                                <option value="Perry" > Perry </option>
                                                <option value="Persia" > Persia </option>
                                                <option value="Peru" > Peru </option>
                                                <option value="Peterson" > Peterson </option>
                                                <option value="Pierson" > Pierson </option>
                                                <option value="Pilot Grove" > Pilot Grove </option>
                                                <option value="Pilot Mound" > Pilot Mound </option>
                                                <option value="Pisgah" > Pisgah </option>
                                                <option value="Plainfield" > Plainfield </option>
                                                <option value="Plano" > Plano </option>
                                                <option value="Pleasant Valley" > Pleasant Valley </option>
                                                <option value="Pleasantville" > Pleasantville </option>
                                                <option value="Plover" > Plover </option>
                                                <option value="Plymouth" > Plymouth </option>
                                                <option value="Pocahontas" > Pocahontas </option>
                                                <option value="Polk City" > Polk City </option>
                                                <option value="Pomeroy" > Pomeroy </option>
                                                <option value="Popejoy" > Popejoy </option>
                                                <option value="Portsmouth" > Portsmouth </option>
                                                <option value="Postville" > Postville </option>
                                                <option value="Prairie City" > Prairie City </option>
                                                <option value="Prairieburg" > Prairieburg </option>
                                                <option value="Prescott" > Prescott </option>
                                                <option value="Preston" > Preston </option>
                                                <option value="Primghar" > Primghar </option>
                                                <option value="Princeton" > Princeton </option>
                                                <option value="Prole" > Prole </option>
                                                <option value="Promise City" > Promise City </option>
                                                <option value="Protivin" > Protivin </option>
                                                <option value="Pulaski" > Pulaski </option>
                                                <option value="Quasqueton" > Quasqueton </option>
                                                <option value="Quimby" > Quimby </option>
                                                <option value="Radcliffe" > Radcliffe </option>
                                                <option value="Rake" > Rake </option>
                                                <option value="Ralston" > Ralston </option>
                                                <option value="Randalia" > Randalia </option>
                                                <option value="Randall" > Randall </option>
                                                <option value="Randolph" > Randolph </option>
                                                <option value="Raymond" > Raymond </option>
                                                <option value="Readlyn" > Readlyn </option>
                                                <option value="Reasnor" > Reasnor </option>
                                                <option value="Red Oak" > Red Oak </option>
                                                <option value="Redding" > Redding </option>
                                                <option value="Redfield" > Redfield </option>
                                                <option value="Reinbeck" > Reinbeck </option>
                                                <option value="Rembrandt" > Rembrandt </option>
                                                <option value="Remsen" > Remsen </option>
                                                <option value="Renwick" > Renwick </option>
                                                <option value="Rhodes" > Rhodes </option>
                                                <option value="Riceville" > Riceville </option>
                                                <option value="Richland" > Richland </option>
                                                <option value="Ricketts" > Ricketts </option>
                                                <option value="Ridgeway" > Ridgeway </option>
                                                <option value="Ringsted" > Ringsted </option>
                                                <option value="Rippey" > Rippey </option>
                                                <option value="Riverside" > Riverside </option>
                                                <option value="Riverton" > Riverton </option>
                                                <option value="Robins" > Robins </option>
                                                <option value="Rock Falls" > Rock Falls </option>
                                                <option value="Rock Rapids" > Rock Rapids </option>
                                                <option value="Rock Valley" > Rock Valley </option>
                                                <option value="Rockford" > Rockford </option>
                                                <option value="Rockwell" > Rockwell </option>
                                                <option value="Rockwell City" > Rockwell City </option>
                                                <option value="Rodney" > Rodney </option>
                                                <option value="Roland" > Roland </option>
                                                <option value="Rolfe" > Rolfe </option>
                                                <option value="Rome" > Rome </option>
                                                <option value="Rose Hill" > Rose Hill </option>
                                                <option value="Rowan" > Rowan </option>
                                                <option value="Rowley" > Rowley </option>
                                                <option value="Royal" > Royal </option>
                                                <option value="Rudd" > Rudd </option>
                                                <option value="Runnells" > Runnells </option>
                                                <option value="Russell" > Russell </option>
                                                <option value="Ruthven" > Ruthven </option>
                                                <option value="Rutland" > Rutland </option>
                                                <option value="Ryan" > Ryan </option>
                                                <option value="Sabula" > Sabula </option>
                                                <option value="Sac City" > Sac City </option>
                                                <option value="Saint Ansgar" > Saint Ansgar </option>
                                                <option value="Saint Anthony" > Saint Anthony </option>
                                                <option value="Saint Charles" > Saint Charles </option>
                                                <option value="Saint Donatus" > Saint Donatus </option>
                                                <option value="Saint Lucas" > Saint Lucas </option>
                                                <option value="Saint Marys" > Saint Marys </option>
                                                <option value="Saint Olaf" > Saint Olaf </option>
                                                <option value="Saint Paul" > Saint Paul </option>
                                                <option value="Salem" > Salem </option>
                                                <option value="Salix" > Salix </option>
                                                <option value="Sanborn" > Sanborn </option>
                                                <option value="Scarville" > Scarville </option>
                                                <option value="Schaller" > Schaller </option>
                                                <option value="Schleswig" > Schleswig </option>
                                                <option value="Scranton" > Scranton </option>
                                                <option value="Searsboro" > Searsboro </option>
                                                <option value="Selma" > Selma </option>
                                                <option value="Sergeant Bluff" > Sergeant Bluff </option>
                                                <option value="Seymour" > Seymour </option>
                                                <option value="Shambaugh" > Shambaugh </option>
                                                <option value="Shannon City" > Shannon City </option>
                                                <option value="Sharpsburg" > Sharpsburg </option>
                                                <option value="Sheffield" > Sheffield </option>
                                                <option value="Shelby" > Shelby </option>
                                                <option value="Sheldahl" > Sheldahl </option>
                                                <option value="Sheldon" > Sheldon </option>
                                                <option value="Shell Rock" > Shell Rock </option>
                                                <option value="Shellsburg" > Shellsburg </option>
                                                <option value="Shenandoah" > Shenandoah </option>
                                                <option value="Sherrill" > Sherrill </option>
                                                <option value="Sibley" > Sibley </option>
                                                <option value="Sidney" > Sidney </option>
                                                <option value="Sigourney" > Sigourney </option>
                                                <option value="Silver City" > Silver City </option>
                                                <option value="Sioux Center" > Sioux Center </option>
                                                <option value="Sioux City" > Sioux City </option>
                                                <option value="Sioux Rapids" > Sioux Rapids </option>
                                                <option value="Slater" > Slater </option>
                                                <option value="Sloan" > Sloan </option>
                                                <option value="Smithland" > Smithland </option>
                                                <option value="Soldier" > Soldier </option>
                                                <option value="Solon" > Solon </option>
                                                <option value="Somers" > Somers </option>
                                                <option value="South Amana" > South Amana </option>
                                                <option value="South English" > South English </option>
                                                <option value="Spencer" > Spencer </option>
                                                <option value="Sperry" > Sperry </option>
                                                <option value="Spillville" > Spillville </option>
                                                <option value="Spirit Lake" > Spirit Lake </option>
                                                <option value="Spragueville" > Spragueville </option>
                                                <option value="Springbrook" > Springbrook </option>
                                                <option value="Springville" > Springville </option>
                                                <option value="Stacyville" > Stacyville </option>
                                                <option value="Stanhope" > Stanhope </option>
                                                <option value="Stanley" > Stanley </option>
                                                <option value="Stanton" > Stanton </option>
                                                <option value="Stanwood" > Stanwood </option>
                                                <option value="State Center" > State Center </option>
                                                <option value="Steamboat Rock" > Steamboat Rock </option>
                                                <option value="Stockport" > Stockport </option>
                                                <option value="Stockton" > Stockton </option>
                                                <option value="Storm Lake" > Storm Lake </option>
                                                <option value="Story City" > Story City </option>
                                                <option value="Stout" > Stout </option>
                                                <option value="Stratford" > Stratford </option>
                                                <option value="Strawberry Point" > Strawberry Point </option>
                                                <option value="Stuart" > Stuart </option>
                                                <option value="Sully" > Sully </option>
                                                <option value="Sumner" > Sumner </option>
                                                <option value="Superior" > Superior </option>
                                                <option value="Sutherland" > Sutherland </option>
                                                <option value="Swaledale" > Swaledale </option>
                                                <option value="Swan" > Swan </option>
                                                <option value="Swea City" > Swea City </option>
                                                <option value="Swedesburg" > Swedesburg </option>
                                                <option value="Swisher" > Swisher </option>
                                                <option value="Tabor" > Tabor </option>
                                                <option value="Tama" > Tama </option>
                                                <option value="Teeds Grove" > Teeds Grove </option>
                                                <option value="Templeton" > Templeton </option>
                                                <option value="Terril" > Terril </option>
                                                <option value="Thayer" > Thayer </option>
                                                <option value="Thompson" > Thompson </option>
                                                <option value="Thor" > Thor </option>
                                                <option value="Thornburg" > Thornburg </option>
                                                <option value="Thornton" > Thornton </option>
                                                <option value="Thurman" > Thurman </option>
                                                <option value="Tiffin" > Tiffin </option>
                                                <option value="Tingley" > Tingley </option>
                                                <option value="Tipton" > Tipton </option>
                                                <option value="Titonka" > Titonka </option>
                                                <option value="Toddville" > Toddville </option>
                                                <option value="Toeterville" > Toeterville </option>
                                                <option value="Toledo" > Toledo </option>
                                                <option value="Tracy" > Tracy </option>
                                                <option value="Traer" > Traer </option>
                                                <option value="Treynor" > Treynor </option>
                                                <option value="Tripoli" > Tripoli </option>
                                                <option value="Troy Mills" > Troy Mills </option>
                                                <option value="Truesdale" > Truesdale </option>
                                                <option value="Truro" > Truro </option>
                                                <option value="Udell" > Udell </option>
                                                <option value="Underwood" > Underwood </option>
                                                <option value="Union" > Union </option>
                                                <option value="Unionville" > Unionville </option>
                                                <option value="University Park" > University Park </option>
                                                <option value="Urbana" > Urbana </option>
                                                <option value="Urbandale" > Urbandale </option>
                                                <option value="Ute" > Ute </option>
                                                <option value="Vail" > Vail </option>
                                                <option value="Van Horne" > Van Horne </option>
                                                <option value="Van Meter" > Van Meter </option>
                                                <option value="Van Wert" > Van Wert </option>
                                                <option value="Varina" > Varina </option>
                                                <option value="Ventura" > Ventura </option>
                                                <option value="Victor" > Victor </option>
                                                <option value="Villisca" > Villisca </option>
                                                <option value="Vincent" > Vincent </option>
                                                <option value="Vining" > Vining </option>
                                                <option value="Vinton" > Vinton </option>
                                                <option value="Viola" > Viola </option>
                                                <option value="Volga" > Volga </option>
                                                <option value="Wadena" > Wadena </option>
                                                <option value="Walcott" > Walcott </option>
                                                <option value="Walford" > Walford </option>
                                                <option value="Walker" > Walker </option>
                                                <option value="Wall Lake" > Wall Lake </option>
                                                <option value="Wallingford" > Wallingford </option>
                                                <option value="Walnut" > Walnut </option>
                                                <option value="Wapello" > Wapello </option>
                                                <option value="Washington" > Washington </option>
                                                <option value="Washta" > Washta </option>
                                                <option value="Waterloo" > Waterloo </option>
                                                <option value="Waterville" > Waterville </option>
                                                <option value="Watkins" > Watkins </option>
                                                <option value="Waucoma" > Waucoma </option>
                                                <option value="Waukee" > Waukee </option>
                                                <option value="Waukon" > Waukon </option>
                                                <option value="Waverly" > Waverly </option>
                                                <option value="Wayland" > Wayland </option>
                                                <option value="Webb" > Webb </option>
                                                <option value="Webster" > Webster </option>
                                                <option value="Webster City" > Webster City </option>
                                                <option value="Weldon" > Weldon </option>
                                                <option value="Wellman" > Wellman </option>
                                                <option value="Wellsburg" > Wellsburg </option>
                                                <option value="Welton" > Welton </option>
                                                <option value="Wesley" > Wesley </option>
                                                <option value="West Bend" > West Bend </option>
                                                <option value="West Branch" > West Branch </option>
                                                <option value="West Burlington" > West Burlington </option>
                                                <option value="West Chester" > West Chester </option>
                                                <option value="West Des Moines" > West Des Moines </option>
                                                <option value="West Grove" > West Grove </option>
                                                <option value="West Liberty" > West Liberty </option>
                                                <option value="West Point" > West Point </option>
                                                <option value="West Union" > West Union </option>
                                                <option value="Westfield" > Westfield </option>
                                                <option value="Westgate" > Westgate </option>
                                                <option value="Westphalia" > Westphalia </option>
                                                <option value="Westside" > Westside </option>
                                                <option value="Wever" > Wever </option>
                                                <option value="What Cheer" > What Cheer </option>
                                                <option value="Wheatland" > Wheatland </option>
                                                <option value="Whiting" > Whiting </option>
                                                <option value="Whittemore" > Whittemore </option>
                                                <option value="Whitten" > Whitten </option>
                                                <option value="Williams" > Williams </option>
                                                <option value="Williamsburg" > Williamsburg </option>
                                                <option value="Williamson" > Williamson </option>
                                                <option value="Wilton" > Wilton </option>
                                                <option value="Windsor Heights" > Windsor Heights </option>
                                                <option value="Winfield" > Winfield </option>
                                                <option value="Winterset" > Winterset </option>
                                                <option value="Winthrop" > Winthrop </option>
                                                <option value="Wiota" > Wiota </option>
                                                <option value="Woden" > Woden </option>
                                                <option value="Woodbine" > Woodbine </option>
                                                <option value="Woodburn" > Woodburn </option>
                                                <option value="Woodward" > Woodward </option>
                                                <option value="Woolstock" > Woolstock </option>
                                                <option value="Worthington" > Worthington </option>
                                                <option value="Wyoming" > Wyoming </option>
                                                <option value="Yale" > Yale </option>
                                                <option value="Yarmouth" > Yarmouth </option>
                                                <option value="Zearing" > Zearing </option>
                                                <option value="Zwingle" > Zwingle </option>

                                            </select>
                                            <span id="cityInfo"></span>
                                        </div>
                                    </div>
                                </div>




                                <!--<div class="form-group">
                                  <label class="col-sm-4 pedit"><span class="red-star">*</span>City:</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" id="currentlocation" name="currentlocation" onblur="this.value=trim(this.value);"  onKeyPress="(document.getElementById('err_msg2').innerHTML = '');" value="/* /">

                                  </div>
                                </div><!--form-group-->

                                <!--<div class="form-group">
                                  <label class="col-sm-4 pedit"><span class="red-star">*</span>Current Location:</label>
                                  <div class="col-sm-4">
                                    <select class="form-control">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                    </select>
                                  </div>
                                 <!-- <div class="col-sm-4">
                                      <label class="checkbox-inline pedit">
                                         <input type="checkbox" id="inlineCheckbox1" value="option1"> Outside Japan
                                      </label>
                                  </div>
                                </div><!--form-group-->

                                <!-- <div class="form-group">
                                  <label  class="col-sm-4 pedit"><span class="red-star">*</span>Preferred Location:</label>
                                  <div class="col-sm-8">
                                    <select multiple class="form-control">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                    </select>
                                  </div>
                                </div><!--form-group-->

                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>Industry:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="curr_industry" id="curr_industry">

                                            <option value="34" >Law Enforcement/Security</option>

                                            <option value="35" >Legal/Law</option>

                                            <option value="36" >Marketing/Sales</option>

                                            <option value="37" >Media/Journalism</option>

                                            <option value="38" >Production/Manufacturing/Maintenance</option>

                                            <option value="40" >Tours and Travel/Airline</option>

                                            <option value="41" >Transportation/Logistics</option>

                                            <option value="42" >KPO/Technical Support</option>

                                            <option value="44" >Strategy / Management Consulting Firms</option>

                                            <option value="45" >Others</option>

                                            <option value="46" >test cate</option>

                                            <option value="50" selected>IT-ERP-Oracle</option>

                                            <option value="51" >Media </option>

                                            <option value="52" >mech</option>

                                            <option value="53" >IT - BPO</option>

                                            <option value="54" >NGO/Social Services</option>

                                            <option value="55" >Management</option>

                                            <option value="56" >Construction</option>
                                        </select>
                                        <span id="industryInfo"></span>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group">
                                    <label class="col-sm-4 pedit"><span class="red-star">*</span>Functional Area:</label>
                                    <div class="col-sm-8">
                                        <select name="function_area" id="function_area" class="form-control">
                                            <option value="">select</option>
                                            <option value="73" > Accounts Assistant </option>
                                            <option value="74" > Chartered Accountant </option>
                                            <option value="75" > Cost Accountant </option>
                                            <option value="76" > External Auditor </option>
                                            <option value="77" > Finance Assistant </option>
                                            <option value="78" > Internal Auditor </option>
                                            <option value="79" > Manager - Accounts </option>
                                            <option value="80" > Manager- Finance Planning </option>
                                            <option value="81" > Taxation - Manager </option>
                                            <option value="83" > Animator </option>
                                            <option value="84" > AV Executive </option>
                                            <option value="85" > Event Coordinator </option>
                                            <option value="86" > Event/Promotios Manager </option>
                                            <option value="89" > Media Planning - Manager / Executive </option>
                                            <option value="91" > Studio Operation Manager </option>
                                            <option value="92" > Visualiser- Art Director </option>
                                            <option value="95" > Supervisor </option>
                                            <option value="97" > Sales/Marketing Executive </option>
                                            <option value="99" > Accountant </option>
                                            <option value="100" > Bank Assurance </option>
                                            <option value="101" > Banking - General </option>
                                            <option value="102" > Clerk/Office Boy </option>
                                            <option value="103" > Equity Analyst </option>
                                            <option value="104" > Insurance / Financial Advisor </option>
                                            <option value="105" > Insurance Telesales </option>
                                            <option value="107" > Mutual Funds </option>
                                            <option value="108" > Operations </option>
                                            <option value="109" > Relationship Manager </option>
                                            <option value="110" > Stock Broking </option>
                                            <option value="112" > Customer Service Executive (Non Voice) </option>
                                            <option value="113" > Customer Service Executive (Voice) </option>
                                            <option value="114" > Data Processing Executive </option>
                                            <option value="115" > Medical Transcriptionist </option>
                                            <option value="117" > Team Leader </option>
                                            <option value="118" > Technical Support Executive (Voice) </option>
                                            <option value="119" > Telemarketing Executive </option>
                                            <option value="120" > Trainee/Management Trainee </option>
                                            <option value="121" > Voice & Accent Trainer </option>
                                            <option value="122" > Process Engineers </option>
                                            <option value="124" > Configuration Manager </option>
                                            <option value="125" > Database Administrator </option>
                                            <option value="126" > Faculty </option>
                                            <option value="127" > H/W Installation / Maintenance Engg </option>
                                            <option value="128" > Hardware Design Technical Leader </option>
                                            <option value="129" > Instructional Designer </option>
                                            <option value="130" > Network Administrator </option>
                                            <option value="131" > Network Designer </option>
                                            <option value="132" > Other </option>
                                            <option value="133" > System Analyst </option>
                                            <option value="134" > Technical Leader </option>
                                            <option value="135" > Technical Support Engineer </option>
                                            <option value="136" > Architects </option>
                                            <option value="137" > Carpenter </option>
                                            <option value="138" > Construction Manager </option>
                                            <option value="139" > Controller </option>
                                            <option value="140" > Crane Operator </option>
                                            <option value="141" > Electrician </option>
                                            <option value="143" > Equipment Operator </option>
                                            <option value="144" > Heavy Equipment Operator </option>
                                            <option value="146" > Laborer </option>
                                            <option value="148" > Mining </option>
                                            <option value="149" > Painter </option>
                                            <option value="150" > Plumber </option>
                                            <option value="151" > Roofing </option>
                                            <option value="153" > Welder </option>
                                            <option value="154" > Administration </option>
                                            <option value="155" > Councellor </option>
                                            <option value="156" > Librarian </option>
                                            <option value="157" > Teaching/Professor/Lecturer </option>
                                            <option value="159" > Autocad Draughtman/Designer </option>
                                            <option value="160" > Chief Engineer </option>
                                            <option value="161" > Civil Engineer </option>
                                            <option value="162" > Customer Service/Tech. Support </option>
                                            <option value="163" > Electrical Engineer </option>
                                            <option value="164" > Engineer </option>
                                            <option value="165" > Foreman </option>
                                            <option value="166" > Interior Designer </option>
                                            <option value="167" > Mechanical Engineer </option>
                                            <option value="169" > Project Manager </option>
                                            <option value="170" > Safety Officer </option>
                                            <option value="171" > Store Keeper </option>
                                            <option value="172" > Surveyor </option>
                                            <option value="173" > Technician </option>
                                            <option value="174" > Workman / Foreman / Technician </option>
                                            <option value="176" > Apparel / Garment Designer </option>
                                            <option value="177" > Jewellery Designer </option>
                                            <option value="179" > Merchandiser </option>
                                            <option value="180" > Stiching/Tailor </option>
                                            <option value="181" > Supervisor/Officer </option>
                                            <option value="182" > Textile Designer </option>
                                            <option value="183" > Anaesthetist </option>
                                            <option value="184" > Beautician </option>
                                            <option value="185" > Bio-Technology Research </option>
                                            <option value="186" > Chemical Research Scientist </option>
                                            <option value="187" > Chemist </option>
                                            <option value="188" > Dentist </option>
                                            <option value="189" > Dietician </option>
                                            <option value="190" > Doctor </option>
                                            <option value="191" > ECG/CGA Technician </option>
                                            <option value="193" > House Keeping </option>
                                            <option value="194" > Lab Technician </option>
                                            <option value="195" > Medical Assistant </option>
                                            <option value="196" > Medical Representative </option>
                                            <option value="197" > Medical Writer </option>
                                            <option value="198" > Microbiologist </option>
                                            <option value="199" > Nurse </option>
                                            <option value="200" > Nutritionist </option>
                                            <option value="201" > Opthamologist </option>
                                            <option value="203" > Pharmaceutical Research </option>
                                            <option value="204" > Pharmacist </option>
                                            <option value="205" > Physician </option>
                                            <option value="206" > Physiotherapist </option>
                                            <option value="207" > Public Health Administration </option>
                                            <option value="208" > Radiographer </option>
                                            <option value="209" > Scientist </option>
                                            <option value="210" > Veterinary </option>
                                            <option value="211" > Banquet Manager </option>
                                            <option value="212" > Chief Chef </option>
                                            <option value="213" > F & B Manager </option>
                                            <option value="214" > Front Office Executive </option>
                                            <option value="215" > Hostess </option>
                                            <option value="216" > House Keeping Executive </option>
                                            <option value="217" > Kitchen Manager </option>
                                            <option value="219" > Reservation Manager </option>
                                            <option value="220" > Restaurant Manager </option>
                                            <option value="221" > Security Manager </option>
                                            <option value="222" > Steward/Waiter </option>
                                            <option value="223" > Data Entry/Computer Operator </option>
                                            <option value="225" > HR Executive / Recruiter </option>
                                            <option value="226" > HR Manager </option>
                                            <option value="228" > Manager/Co-ordinator </option>
                                            <option value="229" > Office Secretary/AdminOfficer </option>
                                            <option value="231" > Public Relation Officer </option>
                                            <option value="232" > Receptionist/Front Office Executive </option>
                                            <option value="233" > Travel/Immigration Coordinator </option>
                                            <option value="234" > Typist </option>
                                            <option value="235" > Machine Operator </option>
                                            <option value="236" > Machinist </option>
                                            <option value="237" > Maintenance Supervisor </option>
                                            <option value="238" > Mechanical Technician </option>
                                            <option value="239" > Repairman </option>
                                            <option value="240" > Security Installation </option>
                                            <option value="241" > Accounts Manager </option>
                                            <option value="243" > Security Guard </option>
                                            <option value="245" > Site Manager </option>
                                            <option value="246" > Training Officer </option>
                                            <option value="247" > Company Secretary </option>
                                            <option value="248" > Law Officer </option>
                                            <option value="249" > Lawyer </option>
                                            <option value="250" > Legal Adviser </option>
                                            <option value="251" > Legal Assistant </option>
                                            <option value="252" > Legal Consultant </option>
                                            <option value="253" > Legal Editor </option>
                                            <option value="254" > Legal Services - Manager </option>
                                            <option value="256" > Patent </option>
                                            <option value="257" > Proof Reader (Law) </option>
                                            <option value="258" > Asst. Sales Manager </option>
                                            <option value="259" > Branch Manager </option>
                                            <option value="260" > Business Analyst </option>
                                            <option value="261" > Business Development Executives </option>
                                            <option value="262" > Customer Relationship Officer </option>
                                            <option value="263" > GM- Marketing </option>
                                            <option value="264" > Marketing Executives </option>
                                            <option value="265" > Marketing Manager </option>
                                            <option value="268" > Sales Executives </option>
                                            <option value="269" > Sales Manager </option>
                                            <option value="271" > Tele Marketing Executives </option>
                                            <option value="272" > Art Director </option>
                                            <option value="273" > Cameraman </option>
                                            <option value="274" > Content Developer </option>
                                            <option value="275" > Correspondent/Reporter </option>
                                            <option value="278" > News Editor </option>
                                            <option value="279" > News Reador </option>
                                            <option value="281" > Production Manager </option>
                                            <option value="282" > Proof Reader </option>
                                            <option value="283" > Sub Editor </option>
                                            <option value="284" > Translator </option>
                                            <option value="285" > Video Editor </option>
                                            <option value="286" > Building Inspection </option>
                                            <option value="287" > Officer </option>
                                            <option value="288" > Process Engineer </option>
                                            <option value="289" > Production Quality Assurance </option>
                                            <option value="290" > Quality Assurance Engineer </option>
                                            <option value="291" > Quality Assurance Manager </option>
                                            <option value="292" > Quality Control Inspector </option>
                                            <option value="293" > Computer Operator/Data Entry </option>
                                            <option value="294" > Graphic Designer /Animator </option>
                                            <option value="295" > Network Engineer </option>
                                            <option value="296" > Oracle Developer </option>
                                            <option value="297" > DBA </option>
                                            <option value="298" > Database Programmer </option>
                                            <option value="300" > Photoshop </option>
                                            <option value="301" > Programmer </option>
                                            <option value="303" > System Programmer </option>
                                            <option value="304" > Software Application Developer </option>
                                            <option value="305" > Software Engineer </option>
                                            <option value="306" > System Administrator </option>
                                            <option value="308" selected> Technical Architect </option>
                                            <option value="309" > Technical Writer </option>
                                            <option value="311" > Testing Engineer </option>
                                            <option value="312" > QA </option>
                                            <option value="313" > Trainer </option>
                                            <option value="314" > Web Designer </option>
                                            <option value="315" > Web Developer </option>
                                            <option value="316" > Air Hostess/Steward/Cabin Crew </option>
                                            <option value="317" > Branch Head </option>
                                            <option value="318" > Documentation and Visa </option>
                                            <option value="319" > Domestic Travel </option>
                                            <option value="320" > Ground Staff </option>
                                            <option value="321" > Management Trainee </option>
                                            <option value="322" > Manager </option>
                                            <option value="323" > Office Assistant </option>
                                            <option value="325" > Reservation and Ticketing </option>
                                            <option value="326" > Tour Operator </option>
                                            <option value="327" > Cargo </option>
                                            <option value="328" > Courier/Delivery </option>
                                            <option value="329" > Dockworker </option>
                                            <option value="330" > Forklift Operator </option>
                                            <option value="331" > Logistics Manager </option>
                                            <option value="332" > Operations Management </option>
                                            <option value="333" > Shipping And Receiving </option>
                                            <option value="335" > Train Operator </option>
                                            <option value="336" > Transportation Supervisor </option>
                                            <option value="337" > Truck Driver </option>
                                            <option value="338" > Warehouse Worker </option>
                                            <option value="339" > AD </option>
                                            <option value="340" > Accessory Designer </option>
                                            <option value="341" > chennai </option>
                                            <option value="343" > it software- application programming / maintenance </option>
                                            <option value="345" > gdfgdf </option>
                                            <option value="346" > IT-ERP- Business Analyst </option>
                                            <option value="347" > having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option>
                                            <option value="348" > having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option>
                                            <option value="349" > 0 - 044 - </option>
                                            <option value="350" > Construction </option>
                                        </select>
                                        <span id="functionalInfo"></span>
                                    </div>
                                </div><!--form-group-->

                                <!-- <div class="form-group">
                                  <label  class="col-sm-4 pedit"><span class="red-star">*</span>Role: </label>
                                  <div class="col-sm-8">
                                    <select class="form-control">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                    </select>
                                  </div>
                                </div><!--form-group-->

                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>Date of birth:</label>



                                    <div class="col-sm-2 padrig">
                                        <select name="dob_day" id="dob_day" class="form-control">
                                            <option value="01" selected>01</option>
                                            <option value="02" >02</option>
                                            <option value="03" >03</option>
                                            <option value="04" >04</option>
                                            <option value="05" >05</option>
                                            <option value="06" >06</option>
                                            <option value="07" >07</option>
                                            <option value="08" >08</option>
                                            <option value="09" >09</option>
                                            <option value="10" >10</option>
                                            <option value="11" >11</option>
                                            <option value="12" >12</option>
                                            <option value="13" >13</option>
                                            <option value="14" >14</option>
                                            <option value="15" >15</option>
                                            <option value="16" >16</option>
                                            <option value="17" >17</option>
                                            <option value="18" >18</option>
                                            <option value="19" >19</option>
                                            <option value="20" >20</option>
                                            <option value="21" >21</option>
                                            <option value="22" >22</option>
                                            <option value="23" >23</option>
                                            <option value="24" >24</option>
                                            <option value="25" >25</option>
                                            <option value="26" >26</option>
                                            <option value="27" >27</option>
                                            <option value="28" >28</option>
                                            <option value="29" >29</option>
                                            <option value="30" >30</option>
                                            <option value="31" >31</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select name="dob_month" id="dob_month" class="form-control">
                                            <option value="01" selected>Jan</option>
                                            <option value="02" >Feb</option>
                                            <option value="03" >Mar</option>
                                            <option value="04" >Apr</option>
                                            <option value="05" >May</option>
                                            <option value="06" >Jun</option>
                                            <option value="07" >Jul</option>
                                            <option value="08" >Aug</option>
                                            <option value="09" >Sep</option>
                                            <option value="10" >Oct</option>
                                            <option value="11" >Nov</option>
                                            <option value="12" >Dec</option>
                                        </select>

                                    </div>
                                    <div class="col-sm-3">
                                        <select name="dob_year" id="dob_year" class="form-control">
                                            <option value="2002" selected>2002</option>
                                            <option value="2001" >2001</option>
                                            <option value="2000" >2000</option>
                                            <option value="1999" >1999</option>
                                            <option value="1998" >1998</option>
                                            <option value="1997" >1997</option>
                                            <option value="1996" >1996</option>
                                            <option value="1995" >1995</option>
                                            <option value="1994" >1994</option>
                                            <option value="1993" >1993</option>
                                            <option value="1992" >1992</option>
                                            <option value="1991" >1991</option>
                                            <option value="1990" >1990</option>
                                            <option value="1989" >1989</option>
                                            <option value="1988" >1988</option>
                                            <option value="1987" >1987</option>
                                            <option value="1986" >1986</option>
                                            <option value="1985" >1985</option>
                                            <option value="1984" >1984</option>
                                            <option value="1983" >1983</option>
                                            <option value="1982" >1982</option>
                                            <option value="1981" >1981</option>
                                            <option value="1980" >1980</option>
                                            <option value="1979" >1979</option>
                                            <option value="1978" >1978</option>
                                            <option value="1977" >1977</option>
                                            <option value="1976" >1976</option>
                                            <option value="1975" >1975</option>
                                            <option value="1974" >1974</option>
                                            <option value="1973" >1973</option>
                                            <option value="1972" >1972</option>
                                            <option value="1971" >1971</option>
                                            <option value="1970" >1970</option>
                                            <option value="1969" >1969</option>
                                            <option value="1968" >1968</option>
                                            <option value="1967" >1967</option>
                                            <option value="1966" >1966</option>
                                            <option value="1965" >1965</option>
                                            <option value="1964" >1964</option>
                                            <option value="1963" >1963</option>
                                            <option value="1962" >1962</option>
                                            <option value="1961" >1961</option>
                                            <option value="1960" >1960</option>
                                            <option value="1959" >1959</option>
                                            <option value="1958" >1958</option>
                                            <option value="1957" >1957</option>
                                            <option value="1956" >1956</option>
                                            <option value="1955" >1955</option>
                                            <option value="1954" >1954</option>
                                            <option value="1953" >1953</option>
                                            <option value="1952" >1952</option>
                                            <option value="1951" >1951</option>
                                            <option value="1950" >1950</option>
                                            <option value="1949" >1949</option>
                                            <option value="1948" >1948</option>
                                            <option value="1947" >1947</option>
                                            <option value="1946" >1946</option>
                                            <option value="1945" >1945</option>
                                            <option value="1944" >1944</option>
                                            <option value="1943" >1943</option>
                                            <option value="1942" >1942</option>
                                            <option value="1941" >1941</option>
                                            <option value="1940" >1940</option>
                                            <option value="1939" >1939</option>
                                        </select>

                                    </div>
                                    <div>
                                        <span id="dobInfo"></span>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group">
                                    <label class="col-sm-4 pedit"><span class="red-star">*</span> Gender:</label>
                                    <div class="col-sm-8">
                                        <select name="gender" id="gender" class="form-control">
                                            <option value="m" >Male</option>
                                            <option value="f" >Female</option>
                                        </select>
                                        <span id="genderInfo"></span>
                                    </div>
                                </div><!--form-group-->

                                <div class="form-group">
                                    <label class="col-sm-4 pedit"><span class="red-star">*</span>Key Skills:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control"  name="keyskills" id="keyskills"placeholder="Photoshop,Flash," value="">
                                        <span id="keyInfo"></span>
                                    </div>
                                </div><!--form-group-->

                            </div><!--col-md-6-->
                            <div class="col-sm-6">
                                <!--<div class="form-group">
                                  <label  class="col-sm-4 pedit"><span class="red-star">*</span>Availability: </label>
                                  <div class="col-sm-8">
                                    <select class="form-control">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                    </select>
                                  </div>
                                </div><!--form-group-->
                                <div class="form-group">
                                    <label class="col-sm-4 pedit"><span class="red-star">*</span>Total Experience: </label>

                                    <div class="col-sm-4 padno">
                                        <div class="col-sm-12">
                                            <select name="year" id="year" class="form-control" onChange="expedet(this.value)">
                                                <option value="">Years</option>
                                                <option value='0' selected>0Years</option>
                                                <option value='1' >1Years</option>
                                                <option value='2' >2Years</option>
                                                <option value='3' >3Years</option>
                                                <option value='4' >4Years</option>
                                                <option value='5' >5Years</option>
                                                <option value='6' >6Years</option>
                                                <option value='7' >7Years</option>
                                                <option value='8' >8Years</option>
                                                <option value='9' >9Years</option>
                                                <option value='10' >10Years</option>
                                                <option value='11' >11Years</option>
                                                <option value='12' >12Years</option>
                                                <option value='13' >13Years</option>
                                                <option value='14' >14Years</option>
                                                <option value='15' >15Years</option>
                                                <option value='16' >16Years</option>
                                                <option value='17' >17Years</option>
                                                <option value='18' >18Years</option>
                                                <option value='19' >19Years</option>
                                                <option value='20' >20Years</option>
                                            </select>
                                        </div>

                                    </div><!--col-sm-6-->
                                    <div class="col-sm-4 padno">
                                        <div class="col-sm-12">
                                            <select name="month" id="month" class="form-control" onChange="expedet(this.value)">
                                                <option value="">Months</option>
                                                <option value='0Months' selected>0Months</option>
                                                <option value='1Months' >1Months</option>
                                                <option value='2Months' >2Months</option>
                                                <option value='3Months' >3Months</option>
                                                <option value='4Months' >4Months</option>
                                                <option value='5Months' >5Months</option>
                                                <option value='6Months' >6Months</option>
                                                <option value='7Months' >7Months</option>
                                                <option value='8Months' >8Months</option>
                                                <option value='9Months' >9Months</option>
                                                <option value='10Months' >10Months</option>
                                                <option value='11Months' >11Months</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div style="padding-left:160px">
                                        <span id="expInfo"></span>
                                    </div>
                                </div><!--form-group-->
                                <!-- <div class="form-group">
                                  <label class="col-sm-4 pedit"><span class="red-star">*</span>Total Experience: </label>
                                  <div class="col-sm-8">
                                    <select class="form-control">
                                      <option>10</option>
                                      <option>11</option>
                                      <option>12</option>
                                    </select>
                                  </div>
                                </div><!--form-group-->
                                <div class="form-group">
                                    <label class="col-sm-4 pedit"><span class="red-star">*</span>Annual Salary:</label>

                                    <div class="col-sm-4 padno">
                                        <div class="col-sm-12">
                                            <select name="annulsal" id="annulsal" class="form-control">
                                                <option value="">Lakhs</option>
                                                <option value='1' >1Lakhs</option>
                                                <option value='2' >2Lakhs</option>
                                                <option value='3' >3Lakhs</option>
                                                <option value='4' >4Lakhs</option>
                                                <option value='5' >5Lakhs</option>
                                                <option value='6' >6Lakhs</option>
                                                <option value='7' >7Lakhs</option>
                                                <option value='8' >8Lakhs</option>
                                                <option value='9' >9Lakhs</option>
                                                <option value='10' >10Lakhs</option>
                                                <option value='11' >11Lakhs</option>
                                                <option value='12' >12Lakhs</option>
                                                <option value='13' >13Lakhs</option>
                                                <option value='14' >14Lakhs</option>
                                                <option value='15' >15Lakhs</option>
                                                <option value='16' >16Lakhs</option>
                                                <option value='17' >17Lakhs</option>
                                                <option value='18' >18Lakhs</option>
                                                <option value='19' >19Lakhs</option>
                                                <option value='20' selected>20Lakhs</option>
                                            </select>



                                        </div>


                                    </div><!--col-sm-6-->
                                    <div class="col-sm-4 padno">
                                        <div class="col-sm-12">
                                            <select name="annulsa" id="annulsa" class="form-control">
                                                <option value="">Thous</option>
                                                <option value='5' >5Thousands</option>
                                                <option value='10' >10Thousands</option>
                                                <option value='15' >15Thousands</option>
                                                <option value='20' >20Thousands</option>
                                                <option value='25' >25Thousands</option>
                                                <option value='30' >30Thousands</option>
                                                <option value='35' >35Thousands</option>
                                                <option value='40' >40Thousands</option>
                                                <option value='45' >45Thousands</option>
                                                <option value='50' >50Thousands</option>
                                                <option value='55' >55Thousands</option>
                                                <option value='60' >60Thousands</option>
                                                <option value='65' >65Thousands</option>
                                                <option value='70' >70Thousands</option>
                                                <option value='75' >75Thousands</option>
                                                <option value='80' >80Thousands</option>
                                                <option value='85' >85Thousands</option>
                                                <option value='90' >90Thousands</option>
                                                <option value='95' selected>95Thousands</option>
                                            </select>
                                        </div>


                                    </div>
                                    <div style="padding-left:160px">
                                        <span id="salInfo"></span>
                                    </div>

                                </div><!--form-group-->
                                <!-- <div class="form-group">
                                  <label  class="col-sm-4 pedit"><span class="red-star">*</span>Annual Salary:  </label>
                                      <div class="col-sm-3">
                                        <select class="form-control">
                                          <option>100000</option>
                                          <option>200000</option>
                                          <option>300000</option>
                                        </select>
                                       </div>
                                       <div class="col-sm-1"><i class="fa fa-jpy"></i></div>
                                       <div class="col-sm-3">
                                        <select class="form-control">
                                          <option>300000</option>
                                          <option>200000</option>
                                          <option>100000</option>
                                        </select>
                                       </div>
                                       <div class="col-sm-1"><i class="fa fa-jpy"></i></div>

                                </div><!--form-group-->
                                <div class="form-group">
                                    <label class="col-sm-4 pedit"><span class="red-star">*</span>Mobile:</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="mobile_number" id="mobile_number" class="form-control" placeholder="0000000000" onKeyPress="return checkIt(event);" value="9841300660">
                                        <span id="mobileInfo"></span>
                                    </div>
                                </div><!--form-group-->
                                <div class="form-group">
                                    <label class="col-sm-4 pedit">Landline:</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="land_countrycode" id="land_countrycode" class="form-control" onKeyPress="return checkIt(event);" placeholder="+91" value="0">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" name="land_areacode" id="land_areacode"  onKeyPress="return checkIt(event);" placeholder="044" value="">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="landline_number" id="landline_number" onKeyPress="return checkIt(event);" placeholder="123456" value="">
                                    </div>
                                    <span id="landInfo"></span>
                                </div><!--form-group-->
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>Email:</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control"  name="email" id="email" value="Varsha@gmail.com">
                                        <span id="emailInfo"></span>
                                    </div>
                                    <!-- <div class="col-sm-4">
                                     <div class="inboxa"> <a data-toggle="collapse"  href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" > Change Email ID </a></div>
                                  </div>-->
                                    <!-- <div class="collapse col-sm-12" id="collapseExample">
                                       <div class="col-sm-1"></div>
                                       <div class="col-sm-8" ><input type="email" class="form-control"  placeholder="youremail@gmail.com"></div><div class="col-sm-3"><input class="btn-blue btn" value="Save " type="button"></div>
                                  </div>-->
                                </div><!--form-group-->
                                <div class="form-group">
                                    <label  class="col-sm-4 pedit"><span class="red-star">*</span>Permanent Address:</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" name="address" id="address" rows="4" ></textarea>
                                        <span id="addressInfo"></span>
                                    </div>
                                </div><!--form-group-->
                                <!-- <div class="form-group">
                                  <label  class="col-sm-4 pedit"><span class="red-star">*</span>Home Town/City:</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control"  placeholder="Chennai">
                                  </div>
                                </div><!--form-group-->
                                <!--  <div class="form-group">
                                  <label  class="col-sm-4 pedit"><span class="red-star">*</span>Pincode:</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control"  placeholder="600056">
                                  </div>
                                </div><!--form-group-->
                                <!-- <div class="form-group">
                                  <label class="col-sm-4 pedit"><span class="red-star">*</span>Marital Status:  </label>
                                  <div class="col-sm-8">
                                    <select class="form-control">
                                      <option>Married</option>
                                      <option>Unmarried</option>
                                    </select>
                                  </div>
                                </div><!--form-group-->
                            </div><!--col-md-6-->
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-3"><input class="btn-blue btn" value="Save " type="submit" name="submit" id="submit"onclick="return proval();"></div>
                                    <div class="col-sm-3"><div class="btn-blue btn"><a href="jobseeker-profile.php" style="color:#FFF"> Cancel </a></div></div>
                                </div> <!--col-md-6-->
                            </div><!--col-md-12-->
                        </div>
                    </form>
                </div><!--col-sm-9-->
            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
    <!--ADVANCED SEARCH POPUP-->

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header avd-serbg">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img src="images/close-icon.png"></span></button>
                    <h4 class="modal-title mode-tit" id="myModalLabel">Advanced Search</h4>
                </div>
                <div class="modal-body avdbg1a">
                    <div id="divsearch"></div>
                    <form class="form-horizontal m10" name="advancesearchform" id="advancesearchform" action="searchpage.php" >
                        <div class="form-group m20">
                            <label class="col-sm-4 pedit2 text-right mtop4">Keyskills: </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="ad-keyword" name="advkeyword" autocomplete="off" placeholder="Skills, Designation. Companies">
                            </div>
                        </div>
                        <div class="form-group m20">
                            <label class="col-sm-4 pedit2 text-right mtop4">Location: </label>
                            <div class="col-sm-5">
                                <input type="text" id="adv-location" autocomplete="off" name="location" class="form-control" placeholder="Enter the cities you want to work in">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4">Work Experience: </label>
                            <div class="col-sm-2 padno">
                                <div class="col-sm-9">
                                    <select name="advexperience" id="advexperience" class="form-control ">
                                        <option value="" selected="">Select</option>
                                        <!--  <option value="99">Fresher</option>-->
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="25">Above 25 Years</option>
                                        <!--<option value="0" label="0">0</option>
                                       <option value="1" label="1">1</option>
                                       <option value="2" label="2">2</option>
                                       <option value="3" label="3">3</option>
                                       <option value="4" label="4">4</option>-->
                                    </select>
                                </div>
                                <label>Years </label>
                            </div><!--col-sm-6-->
                            <div class="col-sm-3 padno">
                                <div class="col-sm-8">
                                    <select id="admonths" name="admonths" class="form-control">
                                        <option value="" selected="">Select</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="25">Above 25 Years</option>
                                    </select>
                                </div>
                                <label> Months </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4">Expected Salary: </label>
                            <div class="col-sm-2 padno">
                                <div class="col-sm-10">
                                    <select name="advsalary" class="form-control ">
                                        <option value="" selected="">Min</option>
                                        <option value="0">0 Lacks</option>
                                        <option value="1">1 Lacks</option>
                                        <option value="2">2 Lacks</option>
                                        <option value="3">3 Lacks</option>
                                        <option value="4">4 Lacks</option>
                                        <option value="5">5 Lacks</option>
                                        <option value="6">6 Lacks</option>
                                        <option value="7">7 Lacks</option>
                                        <option value="8">8 Lacks</option>
                                        <option value="9">9 Lacks</option>
                                        <option value="10">10 Lacks</option>
                                        <option value="11">11 Lacks</option>
                                        <option value="12">12 Lacks</option>
                                        <option value="13">13 Lacks</option>
                                        <option value="14">14 Lacks</option>
                                        <option value="15">15 Lacks</option>
                                        <option value="16">16 Lacks</option>
                                        <option value="17">17 Lacks</option>
                                        <option value="18">18 Lacks</option>
                                        <option value="19">19 Lacks</option>
                                        <option value="20">20 Lacks</option>
                                        <option value="21">21 Lacks</option>
                                        <option value="22">22 Lacks</option>
                                        <option value="23">23 Lacks</option>
                                        <option value="24">24 Lacks</option>
                                        <option value="25">25 Lacks</option>

                                        <option value="25">Above 25 Lacks</option>
                                        <!--<option value="99">100000</option>
                                       <option value="0" label="0">200000</option>-->

                                    </select>
                                </div>
                                <label><i class="fa fa-jpy"></i> </label>
                            </div><!--col-sm-6-->
                            <div class="col-sm-3 padno">
                                <div class="col-sm-10">
                                    <select name="adv_max" class="form-control">
                                        <option value="" selected="">Max</option>
                                        <option value="0">0 Lacks</option>
                                        <option value="1">1 Lacks</option>
                                        <option value="2">2 Lacks</option>
                                        <option value="3">3 Lacks</option>
                                        <option value="4">4 Lacks</option>
                                        <option value="5">5 Lacks</option>
                                        <option value="6">6 Lacks</option>
                                        <option value="7">7 Lacks</option>
                                        <option value="8">8 Lacks</option>
                                        <option value="9">9 Lacks</option>
                                        <option value="10">10 Lacks</option>
                                        <option value="11">11 Lacks</option>
                                        <option value="12">12 Lacks</option>
                                        <option value="13">13 Lacks</option>
                                        <option value="14">14 Lacks</option>
                                        <option value="15">15 Lacks</option>
                                        <option value="16">16 Lacks</option>
                                        <option value="17">17 Lacks</option>
                                        <option value="18">18 Lacks</option>
                                        <option value="19">19 Lacks</option>
                                        <option value="20">20 Lacks</option>
                                        <option value="21">21 Lacks</option>
                                        <option value="22">22 Lacks</option>
                                        <option value="23">23 Lacks</option>
                                        <option value="24">24 Lacks</option>
                                        <option value="25">25 Lacks</option>

                                        <option value="25">Above 25 Lacks</option>
                                    </select>
                                </div>
                                <label> <i class="fa fa-jpy"></i> </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  >Industry:</label>
                            <div class="col-sm-5">
                                <select name="advindustry" id="advindustry" class="form-control" placeholder="Select the industry where you want to work">
                                    <option value="">Select</option>

                                    <option value="56">Construction</option>
                                    <option value="53">IT - BPO</option>
                                    <option value="50">IT-ERP-Oracle</option>
                                    <option value="42">KPO/Technical Support</option>
                                    <option value="34">Law Enforcement/Security</option>
                                    <option value="35">Legal/Law</option>
                                    <option value="55">Management</option>
                                    <option value="36">Marketing/Sales</option>
                                    <option value="52">mech</option>
                                    <option value="51">Media </option>
                                    <option value="37">Media/Journalism</option>
                                    <option value="54">NGO/Social Services</option>
                                    <option value="45">Others</option>
                                    <option value="38">Production/Manufacturing/Maintenance</option>
                                    <option value="44">Strategy / Management Consulting Firms</option>
                                    <option value="46">test cate</option>
                                    <option value="40">Tours and Travel/Airline</option>
                                    <option value="41">Transportation/Logistics</option>
                                </select>
                                You can select at max 2 Industries
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  >Job Category:</label>
                            <div class="col-sm-5">
                                <select name="advfarea" id="advfarea" class="form-control" placeholder="Select the industry where you want to work">
                                    <option value="">Select</option>
                                    <option value="349">0 - 044 -</option>
                                    <option value="340">Accessory Designer</option>
                                    <option value="99">Accountant</option>
                                    <option value="73">Accounts Assistant</option>
                                    <option value="241">Accounts Manager</option>
                                    <option value="339">AD</option>
                                    <option value="154">Administration</option>
                                    <option value="316">Air Hostess/Steward/Cabin Crew</option>
                                    <option value="183">Anaesthetist</option>
                                    <option value="83">Animator</option>
                                    <option value="176">Apparel / Garment Designer</option>
                                    <option value="136">Architects</option>
                                    <option value="272">Art Director</option>
                                    <option value="258">Asst. Sales Manager</option>
                                    <option value="159">Autocad Draughtman/Designer</option>
                                    <option value="84">AV Executive</option>
                                    <option value="100">Bank Assurance</option>
                                    <option value="101">Banking - General</option>
                                    <option value="211">Banquet Manager</option>
                                    <option value="184">Beautician</option>
                                    <option value="185">Bio-Technology Research</option>
                                    <option value="317">Branch Head</option>
                                    <option value="259">Branch Manager</option>
                                    <option value="286">Building Inspection</option>
                                    <option value="260">Business Analyst</option>
                                    <option value="261">Business Development Executives</option>
                                    <option value="273">Cameraman</option>
                                    <option value="327">Cargo</option>
                                    <option value="137">Carpenter</option>
                                    <option value="74">Chartered Accountant</option>
                                    <option value="186">Chemical Research Scientist</option>
                                    <option value="187">Chemist</option>
                                    <option value="341">chennai</option>
                                    <option value="212">Chief Chef</option>
                                    <option value="160">Chief Engineer</option>
                                    <option value="161">Civil Engineer</option>
                                    <option value="102">Clerk/Office Boy</option>
                                    <option value="247">Company Secretary</option>
                                    <option value="293">Computer Operator/Data Entry</option>
                                    <option value="124">Configuration Manager</option>
                                    <option value="350">Construction</option>
                                    <option value="138">Construction Manager</option>
                                    <option value="274">Content Developer</option>
                                    <option value="139">Controller</option>
                                    <option value="275">Correspondent/Reporter</option>
                                    <option value="75">Cost Accountant</option>
                                    <option value="155">Councellor</option>
                                    <option value="328">Courier/Delivery</option>
                                    <option value="140">Crane Operator</option>
                                    <option value="262">Customer Relationship Officer</option>
                                    <option value="112">Customer Service Executive (Non Voice)</option>
                                    <option value="113">Customer Service Executive (Voice)</option>
                                    <option value="162">Customer Service/Tech. Support</option>
                                    <option value="223">Data Entry/Computer Operator</option>
                                    <option value="114">Data Processing Executive</option>
                                    <option value="125">Database Administrator</option>
                                    <option value="298">Database Programmer</option>
                                    <option value="297">DBA</option>
                                    <option value="188">Dentist</option>
                                    <option value="189">Dietician</option>
                                    <option value="329">Dockworker</option>
                                    <option value="190">Doctor</option>
                                    <option value="318">Documentation and Visa</option>
                                    <option value="319">Domestic Travel</option>
                                    <option value="191">ECG/CGA Technician</option>
                                    <option value="163">Electrical Engineer</option>
                                    <option value="141">Electrician</option>
                                    <option value="164">Engineer</option>
                                    <option value="143">Equipment Operator</option>
                                    <option value="103">Equity Analyst</option>
                                    <option value="85">Event Coordinator</option>
                                    <option value="86">Event/Promotios Manager</option>
                                    <option value="76">External Auditor</option>
                                    <option value="213">F & B Manager</option>
                                    <option value="126">Faculty</option>
                                    <option value="77">Finance Assistant</option>
                                    <option value="165">Foreman</option>
                                    <option value="330">Forklift Operator</option>
                                    <option value="214">Front Office Executive</option>
                                    <option value="345">gdfgdf</option>
                                    <option value="263">GM- Marketing</option>
                                    <option value="294">Graphic Designer /Animator</option>
                                    <option value="320">Ground Staff</option>
                                    <option value="127">H/W Installation / Maintenance Engg</option>
                                    <option value="128">Hardware Design Technical Leader</option>
                                    <option value="347">having 7 years exp. as a professional medical representative with flaring formulation, abbott health</option>
                                    <option value="348">having 7 years exp. as a professional medical representative with flaring formulation, abbott health</option>
                                    <option value="144">Heavy Equipment Operator</option>
                                    <option value="215">Hostess</option>
                                    <option value="193">House Keeping</option>
                                    <option value="216">House Keeping Executive</option>
                                    <option value="225">HR Executive / Recruiter</option>
                                    <option value="226">HR Manager</option>
                                    <option value="129">Instructional Designer</option>
                                    <option value="104">Insurance / Financial Advisor</option>
                                    <option value="105">Insurance Telesales</option>
                                    <option value="166">Interior Designer</option>
                                    <option value="78">Internal Auditor</option>
                                    <option value="343">it software- application programming / maintenance</option>
                                    <option value="346">IT-ERP- Business Analyst</option>
                                    <option value="177">Jewellery Designer</option>
                                    <option value="217">Kitchen Manager</option>
                                    <option value="194">Lab Technician</option>
                                    <option value="146">Laborer</option>
                                    <option value="248">Law Officer</option>
                                    <option value="249">Lawyer</option>
                                    <option value="250">Legal Adviser</option>
                                    <option value="251">Legal Assistant</option>
                                    <option value="252">Legal Consultant</option>
                                    <option value="253">Legal Editor</option>
                                    <option value="254">Legal Services - Manager</option>
                                    <option value="156">Librarian</option>
                                    <option value="331">Logistics Manager</option>
                                    <option value="235">Machine Operator</option>
                                    <option value="236">Machinist</option>
                                    <option value="237">Maintenance Supervisor</option>
                                    <option value="321">Management Trainee</option>
                                    <option value="322">Manager</option>
                                    <option value="79">Manager - Accounts</option>
                                    <option value="80">Manager- Finance Planning</option>
                                    <option value="228">Manager/Co-ordinator</option>
                                    <option value="264">Marketing Executives</option>
                                    <option value="265">Marketing Manager</option>
                                    <option value="167">Mechanical Engineer</option>
                                    <option value="238">Mechanical Technician</option>
                                    <option value="89">Media Planning - Manager / Executive</option>
                                    <option value="195">Medical Assistant</option>
                                    <option value="196">Medical Representative</option>
                                    <option value="115">Medical Transcriptionist</option>
                                    <option value="197">Medical Writer</option>
                                    <option value="179">Merchandiser</option>
                                    <option value="198">Microbiologist</option>
                                    <option value="148">Mining</option>
                                    <option value="107">Mutual Funds</option>
                                    <option value="130">Network Administrator</option>
                                    <option value="131">Network Designer</option>
                                    <option value="295">Network Engineer</option>
                                    <option value="278">News Editor</option>
                                    <option value="279">News Reador</option>
                                    <option value="199">Nurse</option>
                                    <option value="200">Nutritionist</option>
                                    <option value="323">Office Assistant</option>
                                    <option value="229">Office Secretary/AdminOfficer</option>
                                    <option value="287">Officer</option>
                                    <option value="108">Operations</option>
                                    <option value="332">Operations Management</option>
                                    <option value="201">Opthamologist</option>
                                    <option value="296">Oracle Developer</option>
                                    <option value="132">Other</option>
                                    <option value="149">Painter</option>
                                    <option value="256">Patent</option>
                                    <option value="203">Pharmaceutical Research</option>
                                    <option value="204">Pharmacist</option>
                                    <option value="300">Photoshop</option>
                                    <option value="205">Physician</option>
                                    <option value="206">Physiotherapist</option>
                                    <option value="150">Plumber</option>
                                    <option value="288">Process Engineer</option>
                                    <option value="122">Process Engineers</option>
                                    <option value="281">Production Manager</option>
                                    <option value="289">Production Quality Assurance</option>
                                    <option value="301">Programmer</option>
                                    <option value="169">Project Manager</option>
                                    <option value="282">Proof Reader</option>
                                    <option value="257">Proof Reader (Law)</option>
                                    <option value="207">Public Health Administration</option>
                                    <option value="231">Public Relation Officer</option>
                                    <option value="312">QA</option>
                                    <option value="290">Quality Assurance Engineer</option>
                                    <option value="291">Quality Assurance Manager</option>
                                    <option value="292">Quality Control Inspector</option>
                                    <option value="208">Radiographer</option>
                                    <option value="232">Receptionist/Front Office Executive</option>
                                    <option value="109">Relationship Manager</option>
                                    <option value="239">Repairman</option>
                                    <option value="325">Reservation and Ticketing</option>
                                    <option value="219">Reservation Manager</option>
                                    <option value="220">Restaurant Manager</option>
                                    <option value="151">Roofing</option>
                                    <option value="170">Safety Officer</option>
                                    <option value="268">Sales Executives</option>
                                    <option value="269">Sales Manager</option>
                                    <option value="97">Sales/Marketing Executive</option>
                                    <option value="209">Scientist</option>
                                    <option value="243">Security Guard</option>
                                    <option value="240">Security Installation</option>
                                    <option value="221">Security Manager</option>
                                    <option value="333">Shipping And Receiving</option>
                                    <option value="245">Site Manager</option>
                                    <option value="304">Software Application Developer</option>
                                    <option value="305">Software Engineer</option>
                                    <option value="222">Steward/Waiter</option>
                                    <option value="180">Stiching/Tailor</option>
                                    <option value="110">Stock Broking</option>
                                    <option value="171">Store Keeper</option>
                                    <option value="91">Studio Operation Manager</option>
                                    <option value="283">Sub Editor</option>
                                    <option value="95">Supervisor</option>
                                    <option value="181">Supervisor/Officer</option>
                                    <option value="172">Surveyor</option>
                                    <option value="306">System Administrator</option>
                                    <option value="133">System Analyst</option>
                                    <option value="303">System Programmer</option>
                                    <option value="81">Taxation - Manager</option>
                                    <option value="157">Teaching/Professor/Lecturer</option>
                                    <option value="117">Team Leader</option>
                                    <option value="308">Technical Architect</option>
                                    <option value="134">Technical Leader</option>
                                    <option value="135">Technical Support Engineer</option>
                                    <option value="118">Technical Support Executive (Voice)</option>
                                    <option value="309">Technical Writer</option>
                                    <option value="173">Technician</option>
                                    <option value="271">Tele Marketing Executives</option>
                                    <option value="119">Telemarketing Executive</option>
                                    <option value="311">Testing Engineer</option>
                                    <option value="182">Textile Designer</option>
                                    <option value="326">Tour Operator</option>
                                    <option value="335">Train Operator</option>
                                    <option value="120">Trainee/Management Trainee</option>
                                    <option value="313">Trainer</option>
                                    <option value="246">Training Officer</option>
                                    <option value="284">Translator</option>
                                    <option value="336">Transportation Supervisor</option>
                                    <option value="233">Travel/Immigration Coordinator</option>
                                    <option value="337">Truck Driver</option>
                                    <option value="234">Typist</option>
                                    <option value="210">Veterinary</option>
                                    <option value="285">Video Editor</option>
                                    <option value="92">Visualiser- Art Director</option>
                                    <option value="121">Voice & Accent Trainer</option>
                                    <option value="338">Warehouse Worker</option>
                                    <option value="314">Web Designer</option>
                                    <option value="315">Web Developer</option>
                                    <option value="153">Welder</option>
                                    <option value="174">Workman / Foreman / Technician</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  >Job Type:</label>
                            <div class="col-sm-5">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary2 active">
                                        <input type="radio" name="options" id="option1" autocomplete="off" checked value="">  All Jobs
                                    </label>
                                    <label class="btn btn-primary2">
                                        <input type="radio" name="options" id="option2" autocomplete="off" value="Company"> Company Jobs
                                    </label>
                                    <label class="btn btn-primary2">
                                        <input type="radio" name="options" id="option3" autocomplete="off" value="Consultant"> Consultant Jobs
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  > Sort By:</label>
                            <div class="col-sm-5">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary2 active">
                                        <input type="radio" name="options1" id="option1" autocomplete="off" checked> Relevance
                                    </label>
                                    <label class="btn btn-primary2">
                                        <input type="radio" name="options2" id="option2" value="date" autocomplete="off">  Date
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="hiddenval" value="valhid" />
                            <div class="col-sm-12 text-center"><input name="advancesearch" class="btn-blue btn bc3" onclick="advancedsearch()" value="Search" type="button"> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--ADVANCED SEARCH POPUP END-->

    <!--CREATE JOB ALERT POPUP-->

    <div class="modal fade bs-example-modal-lg2" id="createjob" tabindex="-1" role="dialog" aria-labelledby="search">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header avd-serbg">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img src="images/close-icon.png"></span></button>
                    <h4 class="modal-title mode-tit" id="myModalLabel">Tell us what kind of jobs you want</h4>
                </div>
                <div class="modal-body avdbg1a">
                    <form class="form-horizontal m10" name="myform1">
                        <div class="form-group m20">
                            <label class="col-sm-4 pedit2 text-right mtop4"><span class="redstar">*</span> Keyword:</label>
                            <div class="col-sm-5">
                                <input type="text" name="keywordalert" id="keywordalert" class="form-control" placeholder="Skills, Designation. Companies">
                            </div>
                            <div><span id="keywordinfo"></span></div>
                        </div>
                        <div class="form-group m20">
                            <label class="col-sm-4 pedit2 text-right mtop4"><span class="redstar">*</span> Location: </label>
                            <div class="col-sm-5">
                                <input type="text" name="locationalert" id="locationalert" class="form-control" placeholder="Enter the cities you want to work in">
                            </div>
                            <div><span id="locationinfo"></span></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"><span class="redstar">*</span> Work Experience: </label>
                            <div class="col-sm-2 padno">
                                <div class="col-sm-9">
                                    <select class="form-control " name="workexp" id="workexp">
                                        <option value="">Select</option>
                                        <option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option>                                    </select>
                                </div>

                                <label>Years </label>
                            </div><!--col-sm-6-->
                            <div class="col-sm-3 padno">
                                <div class="col-sm-8">
                                    <select class="form-control" name="workexpmon" id="workexpmon">
                                        <option value="">Select</option>

                                        <option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option>                                    </select>
                                </div>
                                <label> Months </label>
                            </div>
                            <div><span id="workinfo"></span></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4">Expected Salary: </label>
                            <div class="col-sm-2 padno">
                                <div class="col-sm-9">
                                    <select class="form-control " name="salmin" id="salmin">
                                        <option value="">Min</option>
                                        <option value="0.5">0.5</option>
                                        <option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option>                                    </select>
                                </div>

                            </div><!--col-sm-6-->
                            <div class="col-sm-3 padno">
                                <div class="col-sm-8">
                                    <select class="form-control" name="salmax" id="salmax">
                                        <option value="">Max</option>
                                        <option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option>                                    </select>
                                </div>
                                <label>In Ethiopias </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Industry:</label>
                            <div class="col-sm-5">
                                <select name="indus" id="indus" class="form-control " placeholder="Select the industry where you want to work">
                                    <option value=''>-&nbsp;Select&nbsp;-</option>

                                    <option value='Construction'>Construction</option><option value='IT - BPO'>IT - BPO</option><option value='IT-ERP-Oracle'>IT-ERP-Oracle</option><option value='KPO/Technical Support'>KPO/Technical Support</option><option value='Law Enforcement/Security'>Law Enforcement/Security</option><option value='Legal/Law'>Legal/Law</option><option value='Management'>Management</option><option value='Marketing/Sales'>Marketing/Sales</option><option value='mech'>mech</option><option value='Media '>Media </option><option value='Media/Journalism'>Media/Journalism</option><option value='NGO/Social Services'>NGO/Social Services</option><option value='Others'>Others</option><option value='Production/Manufacturing/Maintenance'>Production/Manufacturing/Maintenance</option><option value='Strategy / Management Consulting Firms'>Strategy / Management Consulting Firms</option><option value='test cate'>test cate</option><option value='Tours and Travel/Airline'>Tours and Travel/Airline</option><option value='Transportation/Logistics'>Transportation/Logistics</option>								</select>

                            </div>
                            <div><span id="industryinfo"></span></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Job Category:</label>
                            <div class="col-sm-5">
                                <select name="jobcat" id="jobcat" class="form-control " placeholder="Select the industry where you want to work" >

                                    <option value='' >--Select--</option>

                                    <option value='349'>0 - 044 - </option> <option value='340'>Accessory Designer </option> <option value='99'>Accountant </option> <option value='73'>Accounts Assistant </option> <option value='241'>Accounts Manager </option> <option value='339'>AD </option> <option value='154'>Administration </option> <option value='316'>Air Hostess/Steward/Cabin Crew </option> <option value='183'>Anaesthetist </option> <option value='83'>Animator </option> <option value='176'>Apparel / Garment Designer </option> <option value='136'>Architects </option> <option value='272'>Art Director </option> <option value='258'>Asst. Sales Manager </option> <option value='159'>Autocad Draughtman/Designer </option> <option value='84'>AV Executive </option> <option value='100'>Bank Assurance </option> <option value='101'>Banking - General </option> <option value='211'>Banquet Manager </option> <option value='184'>Beautician </option> <option value='185'>Bio-Technology Research </option> <option value='317'>Branch Head </option> <option value='259'>Branch Manager </option> <option value='286'>Building Inspection </option> <option value='260'>Business Analyst </option> <option value='261'>Business Development Executives </option> <option value='273'>Cameraman </option> <option value='327'>Cargo </option> <option value='137'>Carpenter </option> <option value='74'>Chartered Accountant </option> <option value='186'>Chemical Research Scientist </option> <option value='187'>Chemist </option> <option value='341'>chennai </option> <option value='212'>Chief Chef </option> <option value='160'>Chief Engineer </option> <option value='161'>Civil Engineer </option> <option value='102'>Clerk/Office Boy </option> <option value='247'>Company Secretary </option> <option value='293'>Computer Operator/Data Entry </option> <option value='124'>Configuration Manager </option> <option value='350'>Construction </option> <option value='138'>Construction Manager </option> <option value='274'>Content Developer </option> <option value='139'>Controller </option> <option value='275'>Correspondent/Reporter </option> <option value='75'>Cost Accountant </option> <option value='155'>Councellor </option> <option value='328'>Courier/Delivery </option> <option value='140'>Crane Operator </option> <option value='262'>Customer Relationship Officer </option> <option value='112'>Customer Service Executive (Non Voice) </option> <option value='113'>Customer Service Executive (Voice) </option> <option value='162'>Customer Service/Tech. Support </option> <option value='223'>Data Entry/Computer Operator </option> <option value='114'>Data Processing Executive </option> <option value='125'>Database Administrator </option> <option value='298'>Database Programmer </option> <option value='297'>DBA </option> <option value='188'>Dentist </option> <option value='189'>Dietician </option> <option value='329'>Dockworker </option> <option value='190'>Doctor </option> <option value='318'>Documentation and Visa </option> <option value='319'>Domestic Travel </option> <option value='191'>ECG/CGA Technician </option> <option value='163'>Electrical Engineer </option> <option value='141'>Electrician </option> <option value='164'>Engineer </option> <option value='143'>Equipment Operator </option> <option value='103'>Equity Analyst </option> <option value='85'>Event Coordinator </option> <option value='86'>Event/Promotios Manager </option> <option value='76'>External Auditor </option> <option value='213'>F & B Manager </option> <option value='126'>Faculty </option> <option value='77'>Finance Assistant </option> <option value='165'>Foreman </option> <option value='330'>Forklift Operator </option> <option value='214'>Front Office Executive </option> <option value='345'>gdfgdf </option> <option value='263'>GM- Marketing </option> <option value='294'>Graphic Designer /Animator </option> <option value='320'>Ground Staff </option> <option value='127'>H/W Installation / Maintenance Engg </option> <option value='128'>Hardware Design Technical Leader </option> <option value='347'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='348'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='144'>Heavy Equipment Operator </option> <option value='215'>Hostess </option> <option value='193'>House Keeping </option> <option value='216'>House Keeping Executive </option> <option value='225'>HR Executive / Recruiter </option> <option value='226'>HR Manager </option> <option value='129'>Instructional Designer </option> <option value='104'>Insurance / Financial Advisor </option> <option value='105'>Insurance Telesales </option> <option value='166'>Interior Designer </option> <option value='78'>Internal Auditor </option> <option value='343'>it software- application programming / maintenance </option> <option value='346'>IT-ERP- Business Analyst </option> <option value='177'>Jewellery Designer </option> <option value='217'>Kitchen Manager </option> <option value='194'>Lab Technician </option> <option value='146'>Laborer </option> <option value='248'>Law Officer </option> <option value='249'>Lawyer </option> <option value='250'>Legal Adviser </option> <option value='251'>Legal Assistant </option> <option value='252'>Legal Consultant </option> <option value='253'>Legal Editor </option> <option value='254'>Legal Services - Manager </option> <option value='156'>Librarian </option> <option value='331'>Logistics Manager </option> <option value='235'>Machine Operator </option> <option value='236'>Machinist </option> <option value='237'>Maintenance Supervisor </option> <option value='321'>Management Trainee </option> <option value='322'>Manager </option> <option value='79'>Manager - Accounts </option> <option value='80'>Manager- Finance Planning </option> <option value='228'>Manager/Co-ordinator </option> <option value='264'>Marketing Executives </option> <option value='265'>Marketing Manager </option> <option value='167'>Mechanical Engineer </option> <option value='238'>Mechanical Technician </option> <option value='89'>Media Planning - Manager / Executive </option> <option value='195'>Medical Assistant </option> <option value='196'>Medical Representative </option> <option value='115'>Medical Transcriptionist </option> <option value='197'>Medical Writer </option> <option value='179'>Merchandiser </option> <option value='198'>Microbiologist </option> <option value='148'>Mining </option> <option value='107'>Mutual Funds </option> <option value='130'>Network Administrator </option> <option value='131'>Network Designer </option> <option value='295'>Network Engineer </option> <option value='278'>News Editor </option> <option value='279'>News Reador </option> <option value='199'>Nurse </option> <option value='200'>Nutritionist </option> <option value='323'>Office Assistant </option> <option value='229'>Office Secretary/AdminOfficer </option> <option value='287'>Officer </option> <option value='108'>Operations </option> <option value='332'>Operations Management </option> <option value='201'>Opthamologist </option> <option value='296'>Oracle Developer </option> <option value='132'>Other </option> <option value='149'>Painter </option> <option value='256'>Patent </option> <option value='203'>Pharmaceutical Research </option> <option value='204'>Pharmacist </option> <option value='300'>Photoshop </option> <option value='205'>Physician </option> <option value='206'>Physiotherapist </option> <option value='150'>Plumber </option> <option value='288'>Process Engineer </option> <option value='122'>Process Engineers </option> <option value='281'>Production Manager </option> <option value='289'>Production Quality Assurance </option> <option value='301'>Programmer </option> <option value='169'>Project Manager </option> <option value='282'>Proof Reader </option> <option value='257'>Proof Reader (Law) </option> <option value='207'>Public Health Administration </option> <option value='231'>Public Relation Officer </option> <option value='312'>QA </option> <option value='290'>Quality Assurance Engineer </option> <option value='291'>Quality Assurance Manager </option> <option value='292'>Quality Control Inspector </option> <option value='208'>Radiographer </option> <option value='232'>Receptionist/Front Office Executive </option> <option value='109'>Relationship Manager </option> <option value='239'>Repairman </option> <option value='325'>Reservation and Ticketing </option> <option value='219'>Reservation Manager </option> <option value='220'>Restaurant Manager </option> <option value='151'>Roofing </option> <option value='170'>Safety Officer </option> <option value='268'>Sales Executives </option> <option value='269'>Sales Manager </option> <option value='97'>Sales/Marketing Executive </option> <option value='209'>Scientist </option> <option value='243'>Security Guard </option> <option value='240'>Security Installation </option> <option value='221'>Security Manager </option> <option value='333'>Shipping And Receiving </option> <option value='245'>Site Manager </option> <option value='304'>Software Application Developer </option> <option value='305'>Software Engineer </option> <option value='222'>Steward/Waiter </option> <option value='180'>Stiching/Tailor </option> <option value='110'>Stock Broking </option> <option value='171'>Store Keeper </option> <option value='91'>Studio Operation Manager </option> <option value='283'>Sub Editor </option> <option value='95'>Supervisor </option> <option value='181'>Supervisor/Officer </option> <option value='172'>Surveyor </option> <option value='306'>System Administrator </option> <option value='133'>System Analyst </option> <option value='303'>System Programmer </option> <option value='81'>Taxation - Manager </option> <option value='157'>Teaching/Professor/Lecturer </option> <option value='117'>Team Leader </option> <option value='308'>Technical Architect </option> <option value='134'>Technical Leader </option> <option value='135'>Technical Support Engineer </option> <option value='118'>Technical Support Executive (Voice) </option> <option value='309'>Technical Writer </option> <option value='173'>Technician </option> <option value='271'>Tele Marketing Executives </option> <option value='119'>Telemarketing Executive </option> <option value='311'>Testing Engineer </option> <option value='182'>Textile Designer </option> <option value='326'>Tour Operator </option> <option value='335'>Train Operator </option> <option value='120'>Trainee/Management Trainee </option> <option value='313'>Trainer </option> <option value='246'>Training Officer </option> <option value='284'>Translator </option> <option value='336'>Transportation Supervisor </option> <option value='233'>Travel/Immigration Coordinator </option> <option value='337'>Truck Driver </option> <option value='234'>Typist </option> <option value='210'>Veterinary </option> <option value='285'>Video Editor </option> <option value='92'>Visualiser- Art Director </option> <option value='121'>Voice & Accent Trainer </option> <option value='338'>Warehouse Worker </option> <option value='314'>Web Designer </option> <option value='315'>Web Developer </option> <option value='153'>Welder </option> <option value='174'>Workman / Foreman / Technician </option> 									</select>


                            </div>
                            <div><span id="categoryinfo"></span></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Role:</label>
                            <div class="col-sm-5">
                                <select name="jobrole" id="jobrole" class="form-control " placeholder="Select the role where you want to work" >

                                    <option value='' >--Select--</option>

                                    <option value='349'>0 - 044 - </option> <option value='340'>Accessory Designer </option> <option value='99'>Accountant </option> <option value='73'>Accounts Assistant </option> <option value='241'>Accounts Manager </option> <option value='339'>AD </option> <option value='154'>Administration </option> <option value='316'>Air Hostess/Steward/Cabin Crew </option> <option value='183'>Anaesthetist </option> <option value='83'>Animator </option> <option value='176'>Apparel / Garment Designer </option> <option value='136'>Architects </option> <option value='272'>Art Director </option> <option value='258'>Asst. Sales Manager </option> <option value='159'>Autocad Draughtman/Designer </option> <option value='84'>AV Executive </option> <option value='100'>Bank Assurance </option> <option value='101'>Banking - General </option> <option value='211'>Banquet Manager </option> <option value='184'>Beautician </option> <option value='185'>Bio-Technology Research </option> <option value='317'>Branch Head </option> <option value='259'>Branch Manager </option> <option value='286'>Building Inspection </option> <option value='260'>Business Analyst </option> <option value='261'>Business Development Executives </option> <option value='273'>Cameraman </option> <option value='327'>Cargo </option> <option value='137'>Carpenter </option> <option value='74'>Chartered Accountant </option> <option value='186'>Chemical Research Scientist </option> <option value='187'>Chemist </option> <option value='341'>chennai </option> <option value='212'>Chief Chef </option> <option value='160'>Chief Engineer </option> <option value='161'>Civil Engineer </option> <option value='102'>Clerk/Office Boy </option> <option value='247'>Company Secretary </option> <option value='293'>Computer Operator/Data Entry </option> <option value='124'>Configuration Manager </option> <option value='350'>Construction </option> <option value='138'>Construction Manager </option> <option value='274'>Content Developer </option> <option value='139'>Controller </option> <option value='275'>Correspondent/Reporter </option> <option value='75'>Cost Accountant </option> <option value='155'>Councellor </option> <option value='328'>Courier/Delivery </option> <option value='140'>Crane Operator </option> <option value='262'>Customer Relationship Officer </option> <option value='112'>Customer Service Executive (Non Voice) </option> <option value='113'>Customer Service Executive (Voice) </option> <option value='162'>Customer Service/Tech. Support </option> <option value='223'>Data Entry/Computer Operator </option> <option value='114'>Data Processing Executive </option> <option value='125'>Database Administrator </option> <option value='298'>Database Programmer </option> <option value='297'>DBA </option> <option value='188'>Dentist </option> <option value='189'>Dietician </option> <option value='329'>Dockworker </option> <option value='190'>Doctor </option> <option value='318'>Documentation and Visa </option> <option value='319'>Domestic Travel </option> <option value='191'>ECG/CGA Technician </option> <option value='163'>Electrical Engineer </option> <option value='141'>Electrician </option> <option value='164'>Engineer </option> <option value='143'>Equipment Operator </option> <option value='103'>Equity Analyst </option> <option value='85'>Event Coordinator </option> <option value='86'>Event/Promotios Manager </option> <option value='76'>External Auditor </option> <option value='213'>F & B Manager </option> <option value='126'>Faculty </option> <option value='77'>Finance Assistant </option> <option value='165'>Foreman </option> <option value='330'>Forklift Operator </option> <option value='214'>Front Office Executive </option> <option value='345'>gdfgdf </option> <option value='263'>GM- Marketing </option> <option value='294'>Graphic Designer /Animator </option> <option value='320'>Ground Staff </option> <option value='127'>H/W Installation / Maintenance Engg </option> <option value='128'>Hardware Design Technical Leader </option> <option value='347'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='348'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='144'>Heavy Equipment Operator </option> <option value='215'>Hostess </option> <option value='193'>House Keeping </option> <option value='216'>House Keeping Executive </option> <option value='225'>HR Executive / Recruiter </option> <option value='226'>HR Manager </option> <option value='129'>Instructional Designer </option> <option value='104'>Insurance / Financial Advisor </option> <option value='105'>Insurance Telesales </option> <option value='166'>Interior Designer </option> <option value='78'>Internal Auditor </option> <option value='343'>it software- application programming / maintenance </option> <option value='346'>IT-ERP- Business Analyst </option> <option value='177'>Jewellery Designer </option> <option value='217'>Kitchen Manager </option> <option value='194'>Lab Technician </option> <option value='146'>Laborer </option> <option value='248'>Law Officer </option> <option value='249'>Lawyer </option> <option value='250'>Legal Adviser </option> <option value='251'>Legal Assistant </option> <option value='252'>Legal Consultant </option> <option value='253'>Legal Editor </option> <option value='254'>Legal Services - Manager </option> <option value='156'>Librarian </option> <option value='331'>Logistics Manager </option> <option value='235'>Machine Operator </option> <option value='236'>Machinist </option> <option value='237'>Maintenance Supervisor </option> <option value='321'>Management Trainee </option> <option value='322'>Manager </option> <option value='79'>Manager - Accounts </option> <option value='80'>Manager- Finance Planning </option> <option value='228'>Manager/Co-ordinator </option> <option value='264'>Marketing Executives </option> <option value='265'>Marketing Manager </option> <option value='167'>Mechanical Engineer </option> <option value='238'>Mechanical Technician </option> <option value='89'>Media Planning - Manager / Executive </option> <option value='195'>Medical Assistant </option> <option value='196'>Medical Representative </option> <option value='115'>Medical Transcriptionist </option> <option value='197'>Medical Writer </option> <option value='179'>Merchandiser </option> <option value='198'>Microbiologist </option> <option value='148'>Mining </option> <option value='107'>Mutual Funds </option> <option value='130'>Network Administrator </option> <option value='131'>Network Designer </option> <option value='295'>Network Engineer </option> <option value='278'>News Editor </option> <option value='279'>News Reador </option> <option value='199'>Nurse </option> <option value='200'>Nutritionist </option> <option value='323'>Office Assistant </option> <option value='229'>Office Secretary/AdminOfficer </option> <option value='287'>Officer </option> <option value='108'>Operations </option> <option value='332'>Operations Management </option> <option value='201'>Opthamologist </option> <option value='296'>Oracle Developer </option> <option value='132'>Other </option> <option value='149'>Painter </option> <option value='256'>Patent </option> <option value='203'>Pharmaceutical Research </option> <option value='204'>Pharmacist </option> <option value='300'>Photoshop </option> <option value='205'>Physician </option> <option value='206'>Physiotherapist </option> <option value='150'>Plumber </option> <option value='288'>Process Engineer </option> <option value='122'>Process Engineers </option> <option value='281'>Production Manager </option> <option value='289'>Production Quality Assurance </option> <option value='301'>Programmer </option> <option value='169'>Project Manager </option> <option value='282'>Proof Reader </option> <option value='257'>Proof Reader (Law) </option> <option value='207'>Public Health Administration </option> <option value='231'>Public Relation Officer </option> <option value='312'>QA </option> <option value='290'>Quality Assurance Engineer </option> <option value='291'>Quality Assurance Manager </option> <option value='292'>Quality Control Inspector </option> <option value='208'>Radiographer </option> <option value='232'>Receptionist/Front Office Executive </option> <option value='109'>Relationship Manager </option> <option value='239'>Repairman </option> <option value='325'>Reservation and Ticketing </option> <option value='219'>Reservation Manager </option> <option value='220'>Restaurant Manager </option> <option value='151'>Roofing </option> <option value='170'>Safety Officer </option> <option value='268'>Sales Executives </option> <option value='269'>Sales Manager </option> <option value='97'>Sales/Marketing Executive </option> <option value='209'>Scientist </option> <option value='243'>Security Guard </option> <option value='240'>Security Installation </option> <option value='221'>Security Manager </option> <option value='333'>Shipping And Receiving </option> <option value='245'>Site Manager </option> <option value='304'>Software Application Developer </option> <option value='305'>Software Engineer </option> <option value='222'>Steward/Waiter </option> <option value='180'>Stiching/Tailor </option> <option value='110'>Stock Broking </option> <option value='171'>Store Keeper </option> <option value='91'>Studio Operation Manager </option> <option value='283'>Sub Editor </option> <option value='95'>Supervisor </option> <option value='181'>Supervisor/Officer </option> <option value='172'>Surveyor </option> <option value='306'>System Administrator </option> <option value='133'>System Analyst </option> <option value='303'>System Programmer </option> <option value='81'>Taxation - Manager </option> <option value='157'>Teaching/Professor/Lecturer </option> <option value='117'>Team Leader </option> <option value='308'>Technical Architect </option> <option value='134'>Technical Leader </option> <option value='135'>Technical Support Engineer </option> <option value='118'>Technical Support Executive (Voice) </option> <option value='309'>Technical Writer </option> <option value='173'>Technician </option> <option value='271'>Tele Marketing Executives </option> <option value='119'>Telemarketing Executive </option> <option value='311'>Testing Engineer </option> <option value='182'>Textile Designer </option> <option value='326'>Tour Operator </option> <option value='335'>Train Operator </option> <option value='120'>Trainee/Management Trainee </option> <option value='313'>Trainer </option> <option value='246'>Training Officer </option> <option value='284'>Translator </option> <option value='336'>Transportation Supervisor </option> <option value='233'>Travel/Immigration Coordinator </option> <option value='337'>Truck Driver </option> <option value='234'>Typist </option> <option value='210'>Veterinary </option> <option value='285'>Video Editor </option> <option value='92'>Visualiser- Art Director </option> <option value='121'>Voice & Accent Trainer </option> <option value='338'>Warehouse Worker </option> <option value='314'>Web Designer </option> <option value='315'>Web Developer </option> <option value='153'>Welder </option> <option value='174'>Workman / Foreman / Technician </option> 									</select>


                            </div>
                            <div><span id="roleinfo"></span></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Name Your Job Alert:</label>
                            <div class="col-sm-5">
                                <input type="text" name="namealert" id="namealert" class="form-control" placeholder="Enter a name that will help you reconize this job alert">

                            </div>
                            <div><span id="nameinfo"></span></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Email Id:</label>
                            <div class="col-sm-5">
                                <input type="email" name="emailalert" id="emailalert" class="form-control" placeholder="Enter a mail id">

                            </div>
                            <div><span id="emailinfo"></span></div>

                        </div>

                        <div class="form-group ">
                            <label class="col-sm-4 pedit2 text-right"></label>
                            <div class="col-sm-7">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="closejob" id="inlineCheckbox1" value="1"> <span class="redstar">*</span> Also send me job closely related to my search terms.
                                </label>
                            </div>

                        </div>

                        <div class="form-group ">
                            <label class="col-sm-4 pedit2 text-right"></label>
                            <div class="col-sm-7">
                                <div ><span id="termsinfo"></span></div>
                            </div>

                        </div>



                        <div class="form-group">
                            <div class="col-sm-12 text-center"><input class="btn-blue btn bc3" name="submitalert" onclick="return jobalertValidate();" value="Create Job Alert "> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--CREATE JOB ALERT END-->


    <!-- FOOTER -->
    <footer>

        <div id="footer">

            <div class="container">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">

                        <div class="widget widget-contact">
                            <h4 class="widget-title">Information</h4>
                            <ul>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/aboutus.html" > About Us </a> </li>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/terms.html" > Terms & Conditions </a></li>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/privacy-policy.html" > Privacy Policy </a></li>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/contactus.html" > Contact Us </a></li>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/faq.html" > Help / FAQ </a></li>

                            </ul>

                        </div><!-- widget-contact -->

                    </div><!-- col -->
                    <div class="col-sm-2">

                        <div class="widget widget-contact">
                            <h4 class="widget-title">Jobseekers </h4>
                            <ul>
                                <li><a href="jobsseeker-login.html" > Login/Register </a> </li>
                                <!--<li><a href="#" > Follow Top Recruiters </a></li>
                                    <li><a href="#" > Resume Free Quality Score </a></li>
                                    <li><a href="#" > Career Advice </a></li>
                                    <li><a href="#" > Security Advice </a></li>
                                    <li><a href="#" > Resume Samples </a> </li>
                                    <li><a href="#" > Report a Problem </a></li>-->
                            </ul>

                            <h4 class="widget-title"> Recruiters </h4>
                            <ul>
                                <li><a href="recruiter-listing.html" > Browse All Recruiters </a> </li>

                                <!--<li><a href="recruiter-listing.html" > Go to OwoRecruiters </a></li>-->
                                <!--<li><a href="#" > Report a Problem </a></li>-->
                            </ul>
                        </div><!-- widget-contact -->

                    </div><!-- col -->
                    <div class="col-sm-2">

                        <div class="widget widget-contact">

                            <h4 class="widget-title">Browse Jobs</h4>

                            <ul>
                                <li><a href="jobsearch_all.html" > Browse All Jobs </a> </li>
                                <!--<li><a href="#" > Premium MBA Jobs </a></li>
                                    <li><a href="#" > Premium Engineering Jobs </a></li>-->
                                <li><a href="jobsearch_all.html?sch=1" > Govt. Jobs </a></li>
                                <li><a href="jobsearch_all.html?sch=2" > International Jobs </a></li>
                                <li><a href="job_by_company.html" > Jobs by Company </a> </li>
                                <li><a href="job_by_category.html" > Jobs by Category </a></li>
                                <li><a href="job_by_area.html" > Jobs by Location </a></li>
                            </ul>

                        </div><!-- widget-contact -->

                    </div><!-- col -->
                    <div class="col-sm-2">

                        <div class="widget widget-contact">
                            <h4 class="widget-title">GOVT. JOBS</h4>
                            <ul>
                                <li><a href="job_by_location.html?loc=1" > Location </a></li>
                            </ul>

                            <h4 class="widget-title"> Oversea jobs</h4>
                            <ul>
                                <li><a href="job_by_location.html?loc=2" > All Countries </a> </li>
                            </ul>

                            <h4 class="widget-title"> Employers</h4>
                            <ul>
                                <li><a href="emp_postjob.html" > Post Jobs </a> </li>
                                <!--<li><a href="#" > Search Resumes</a> </li>-->
                            </ul>



                        </div><!-- widget-contact -->


                    </div><!-- col -->
                    <div class="col-sm-2">

                        <!--	<div class="widget widget-contact">
								<h4 class="widget-title">SERVICES</h4>

								<ul>
									<li><a href="#" > In-house Consultants </a> </li>
                                    <li><a href="#" > Resume Writing </a></li>
                                    <li><a href="#" > Featured Resume </a></li>
                                    <li><a href="#" > Priority Applicant </a></li>
                                    <li><a href="#" > Recruiters Connent </a></li>
								</ul>

							</div>--><!-- widget-contact -->

                        <div class="widget widget-social">
                            <h4 class="widget-title">FOLLOW US</h4>

                            <div class="social-media">

                                <a class="facebook" href="http://www.facebook.com" target="_blank"><i class="mt-icons-facebook"></i></a>
                                <a class="twitter" href="http://www.twitter.com" target="_blank"><i class="mt-icons-twitter"></i></a>
                                <a class="google" href="http://www.googleplus.com" target="_blank"><i class="mt-icons-google-plus"></i></a>
                                <a class="linkedin" href="http://www.linkedin.com" target="_blank"><i class="mt-icons-linkedin"></i></a>
                            </div><!-- social-media -->
                        </div><!-- widget-social -->
                    </div><!-- col -->
                    <div class="col-sm-1"> </div>
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- footer -->

        <div id="footer-bottom">

            <div class="container">
                <div class="row">

                    <div class="col-sm-12">

                        <div class="widget widget-text">

                            <div  class="copy-right"><p></p>
                                <!--<p>All rights reserved &copy; 2015 Lead Consulting Group. |  Website Designed by <a target="_blank" href="http://www.phpscriptsmall.com/">Php Scripts Mall Pvt Ltd</a></p>-->
                            </div>

                        </div><!-- widget-text -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- footer-bottom -->

    </footer>
    <!-- FOOTER -->

</div><!-- PAGE-WRAPPER -->


<!-- GO TOP -->
<a id="go-top"><i class="mt-icons-arrow-up2"></i></a>

<script >
    $('#myCarousel').carousel({
        interval: 40000
    });

    $('.carousel .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length>0) {

            next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');

        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));

        }
    });
</script>

<!--jQUERY-->
@include('temp.layouts.scripts')
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script type="text/javascript">
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail());
        var id = profile.getId();
        var name = profile.getName();
        var email = profile.getEmail();
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
            //alert("dfs");
            console.log('User signed out.');
            // window.location='logout.php';
        });
        // alert(id);
        // alert(name);
        // alert(email);

        $.ajax({
            type: "POST",
            url: "ajax_google.php",
            data: "id="+ id + "&name=" + name + "&email=" + email ,
            success: function(msg){
                // alert(msg);
                window.location='emp_welcome.php';
            }
        });
        //alert(profile.getId());
        // alert(profile.getName());
        // alert(profile.getImageUrl());
        // alert(profile.getEmail());

    }

</script>
<script>
    function signOut() {

        // alert("dfsd");
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
            //alert("dfs");
            console.log('User signed out.');
            window.location='logout_emp.php';
        });


    }
</script>
<script type="text/javascript">
    function advancedsearch()
    {
//alert('ghghghfg');
        var adkey = $("#ad-keyword").val();
        var location = $("#location").val();
        var advindustry = $("#advindustry").val();
        var advfarea = $("#advfarea").val();
        if(adkey != "" || location != "" || advindustry != ""  || advfarea != "")
        {
            $('#advancesearchform').submit();
            return true;
        }
        else
        {
            $('#divsearch').html("<div class='alert'>Please enter Keywords or Location or select Job Category or Industry to search</div>");
            return false;
        }
        /*
$.ajax({
	type: "POST",
    url: "http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//ajax_save_jobs.php",
	async:false,
	data: "id="+id+"&seeker_id="+seeker_id,
	success: function(msg){
		alert(msg);
	//window.location='http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/search.html';
}
});*/
    }
</script>
<!--Auto Complete End ------------------------------------------------------------------->
<script type="text/javascript">

    //<![CDATA[



    // check-out date >= check-in date

    function customRange(dates) {

        if (this.id == 'startdate') {

            $('#enddate').datepick('option', 'minDate', dates[0] || null);

        }

        else {

            $('#startdate').datepick('option', 'maxDate', dates[0] || null);

        }

        var edt = $('#ed_timestamp').val();

        var sdt = $('#sd_timestamp').val();

        if ((edt > 0) && (sdt > 0)) {

            $('span.nights').text((edt - sdt) / (3600*24) + ' night(s)');

        } else {

            $('span.nights').text('');

        }

    }



    $(document).ready(function(){




        $("#keyword").autocomplete("keyskillsearch.php", {

            width: 175,
            formatResult: function(data, value) {
                //alert(data);
                return value.split(",")[0];
            }
        });

        $("#ad-keyword").autocomplete("keyskillsearch.php", {
            //alert(data);
            width: 175,
            formatResult: function(data, value) {

                return value.split(",")[0];
            }
        });

        $("#location").autocomplete("ajax_joblocation.php", {

            width: 165,
            formatResult: function(data, value) {
                return value.split(",")[0];
            }
        });

        $("#adv-location").autocomplete("ajax_joblocation.php", {

            width: 165,
            formatResult: function(data, value) {
                return value.split(",")[0];
            }
        });
        // Datepick input fields

        /*	$('#startdate').datepick({

			onSelect: customRange,

			showTrigger: '#trigger',

			altField: '#sd_timestamp',

			//altFormat: $.datepick.TIMESTAMP

		});

		$('#enddate').datepick({

			onSelect: customRange,

			showTrigger: '#trigger',

			altField: '#ed_timestamp',

		//	altFormat: $.datepick.TIMESTAMP

		});
*/


        // Carousel slider

        /*$('.carousel ul').cycle({

			prev: '.previous',

			next: '.next',

			timeout: 6000,

			pause: 1

		});*/



        /* tabs */

        //var tabs = $("#tabs").tabs(function () {



        //$("#innerimages").css("display","none");

        //$("#innerimages_loader").css("display","none");

        //});



        // Template setup

        //	Site.setup();



        // Google map setup

        // centerX: 27.9944

        // centerY: -9.84375

        // zoom: 2

        // clustering: true

        // NOTE: hotel list is loaded on the bottom of this file

        //Site.gmapInit(27.9944, -9.84375, 2, true);



    });



    //]]>

</script>
<script type="text/javascript">
    function chkempty()
    {
        if(tinyMCE.get("job_desc").getContent())
        {

            var idddd = "job_desc";
            alert(job_desc);
            chkkabuse();


        }
    }


    function chkkabuse(txtid)
    {
        // alert(txtid);
        // exit;
        var idd = txtid;
        //alert(idd);
        var textval =document.getElementById(idd).value;
        //alert(textval);
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                //alert(xmlhttp.responseText);

                //alert(xmlhttp.responseText);
                if(xmlhttp.responseText==0)
                {
                    document.getElementById(txtid).focus();
                    document.getElementById(txtid).value="";
                    //document.getElementById("name1").innerHTML="<font color='red' style='font-size:12px;'>Don't use abuse words,  </font> ";
                    alert ("Don't use abuse words");


                }
                else
                {
                    //document.getElementById("name1").innerHTML="<font color='#009966' style='font-size:12px;'>good</font>";
                }
            }
        }
        xmlhttp.open("GET","chkabuse.php?q="+textval,true);
        xmlhttp.send();


    }
</script>
<script type="text/javascript">
    function jobalertValidate()
    {
        var keywordalert=$('#keywordalert').val();
        var locationalert=$('#locationalert').val();
        var workexp=$('#workexp').val();
        var indus=$('#indus').val();
        var jobcat=$('#jobcat').val();
        var jobrole=$('#jobrole').val();
        var namealert=$('#namealert').val();
        var emailalert=$('#emailalert').val();

        var clr=0;
        $('.error').hide();
        if(keywordalert=="")
        {
            $('#keywordinfo').html('<span class="error">Please enter keyword</span>');
            $('#keywordalert').focus();
            document.myform1.keywordalert.style.borderColor="red";
            clr=1;
        }
        if(locationalert=="")
        {
            $('#locationinfo').html('<span class="error">Please enter location</span>');
            $('#locationalert').focus();
            document.myform1.locationalert.style.borderColor="red";
            clr=1;
        }
        if(workexp=="")
        {
            $('#workinfo').html('<span class="error">Please enter Experience</span>');
            $('#workexp').focus();
            document.myform1.workexp.style.borderColor="red";
            clr=1;
        }
        if(indus=="")
        {
            $('#industryinfo').html('<span class="error">Please enter industry</span>');
            $('#indus').focus();
            document.myform1.indus.style.borderColor="red";
            clr=1;
        }
        if(jobcat=="")
        {
            $('#categoryinfo').html('<span class="error">Please enter job category</span>');
            $('#jobcat').focus();
            document.myform1.jobcat.style.borderColor="red";
            clr=1;
        }
        if(jobrole=="")
        {
            $('#roleinfo').html('<span class="error">Please enter job role</span>');
            $('#jobrole').focus();
            document.myform1.jobrole.style.borderColor="red";
            clr=1;
        }
        if(namealert=="")
        {
            $('#nameinfo').html('<span class="error">Please enter Name</span>');
            $('#namealert').focus();
            document.myform1.namealert.style.borderColor="red";
            clr=1;
        }
        if(emailalert=="")
        {
            $('#emailinfo').html('<span class="error">Please enter Email</span>');
            $('#emailalert').focus();
            document.myform1.emailalert.style.borderColor="red";
            clr=1;
        }
        // var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        if(document.getElementById("inlineCheckbox1").checked == false){
            $('#termsinfo').html('<span class="error">Please agree to the terms and conditions to continue.</span>');
            clr=1;
        }

        if(clr==0)
        {
            document.myform1.keywordalert.value=1;
            document.myform1.submit();
            return true;
        }

    }

</script>

<style>
    .error,.redstar{ color:#F00;   font-size: 12px;}
</style>
<style type="text/css">
    .error {
        color: #F00;
        font-size: 11px;

    }
</style>
<script type="text/javascript">


    function proval(){
        var nameReg = /^[A-Za-z]+$/;
        var numberReg =  /^[0-9]+$/;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var letterNumber =  /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d][A-Za-z\d!@#$%^&*()_+]{6,19}$/;
        var username = $('#editusername').val();
        var email = $('#email').val();
        var yourname = $('#name').val();
        var select_country = $('#country').val();
        var state = $('#state').val();
        var city = $('#city').val();
        var res_title = $('#res_title').val();
        var mobile_number = $('#mobile_number').val();
        var year = $('#year').val();
        var month = $('#month').val();
        var designation = $('#function_area').val();
        var keyskills = $('#keyskills').val();
        var address = $('#address').val();
        var annulsal = $('#annulsal').val();
        var annulsa = $('#annulsa').val();

        $('.error').hide();
        var clr=0;



        if(email == ""){
            $('#emailInfo').html('<span class="error">Email is Required</span>');
            $('#email').focus();
            clr=1;
        }
        else if(!emailReg.test(email)){
            $('#emailInfo').html('<span class="error">Valid Email is Required</span>');
            $('#email').focus();
            clr=1;
        }

        if(yourname == ""){

            $('#nameInfo').html('<span class="error">Your FullName Required</span>');
            $('#name').focus();
            clr=1;
        }

        if(res_title == ""){

            $('#resumeInfo').html('<span class="error">Resume Headline is Required</span>');
            $('#res_title').focus();
            clr=1;
        }
        if(select_country == ""){

            $('#countryInfo').html('<span class="error"> Country is Required</span>');
            $('#country').focus();
            clr=1;
        }
        if(state == ""){

            $('#stateInfo').html('<span class="error"> State is Required</span>');
            $('#state').focus();
            clr=1;
        }
        if(city == ""){


            $('#cityInfo').html('<span class="error">City is Required</span>');
            $('#city').focus(); clr=1;
        }

        if(mobile_number == ""){

            $('#mobileInfo').html('<span class="error">Mobile Number is Required</span>');
            $('#mobile_number').focus();clr=1;
        }

        if(year == "" && month== ""){

            $('#expInfo').html('<span class="error">Experience Year is Required</span>');$('#year').focus(); clr=1;
        }

        if(address == ""){

            $('#addressInfo').html('<span class="error">Address is Required</span>');
            $('#address').focus();clr=1;
        }
        if(keyskills == ""){

            $('#keyInfo').html('<span class="error">KeySkills is Required</span>');$('#keyskills').focus();clr=1;
        }
        if(annulsal == "" && annulsa == ""){

            $('#salInfo').html('<span class="error">Annual Salary is Required</span>');$('#annulsal').focus();clr=1;
        }



        if(clr==1)
        {

            return false;

        }
        if(clr==0)
        {


            document.register.frmsubval.value=1;


            document.register.submit();
            return true;

        }

    }
    //});
</script>