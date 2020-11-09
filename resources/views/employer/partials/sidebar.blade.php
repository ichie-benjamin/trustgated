<div class="col-md-3">
    <div class="create-job">
        <div class="create-job-head">
            <h3> My Home</h3>
        </div>
        <div class="create-job-content">
            <div class="inbox-bg" onclick="return menu_click1();">Administration</div>
            <!--<div class="inboxa"><a href="#">Product Settings</a></li> -->
            <div id="show1">
                <div class="inboxa"><a href="{{ route('employer.sub_users') }}">Manage Sub-Users</a></div>
                <!--<li><a href="emp_resume_pack.php?id=91">Set Access Time</a></li>-->
                <div class="inboxa"><a href="{{ route('employer.transactions') }}">Subscription Status</a></div>
                <div class="inboxa"><a href="{{ route('employer.resume_pack') }}">Product Settings<!--Resume Pack--></a></div>
                <div class="inboxa"><a href="{{ route('employer.profile') }}" style="color:#00CCFF"  >Company profile</a></div>
                <div class="inboxa"><a href="{{ route('employer.change_password') }}" >Change Password</a></div>
            </div>
            <div class="inbox-bg">Search Resumes</div>
            <div class="inboxa"><a href="{{ route('employer.featured_resumes') }}" >Featured Resumes</a></div>
            <div class="inbox-bg">Jobs & Responses</div>
            <div class="inboxa"><a href="#"  >Job Posted Responses</a></div>
            <div class="inboxa"><a href="{{ route('jobs.create') }}" >Post Jobs</a></div>
            <!--<li><a href="#" >Post Jobs to Campuses</a></li> -->
            <div class="inboxa"><a href="{{ route('jobs.index') }}" >Response Manager</a></div>

            <div class="inboxa"><a href="{{ route('bg_verification') }}" >Background Verification Request </a></div>

        </div><!--create-job-content-->

    </div><!--create-job-->
</div>
