<div class="create-job">
    <div class="create-job-head">
        <h3> My Home</h3>
    </div>
    <div class="create-job-content">
        <div class="inbox-bg">Inbox</div>
        <div class="inboxa"><a href="jobseeker-profile-edit.html">Improve Your Profile</a></div>
        <!--<div class="inboxa"><a href="#">Recruiter Messages (4)</a></div>-->

        <div class="inbox-bg">Profile</div>
        <div class="inboxa"><a href="jobseeker-profile.blade.php">View Profile</a></div>
        <div class="panel-titlea">
            <a class="" role="button" data-toggle="collapse" href="#collapseListGroup1" aria-expanded="true" aria-controls="collapseListGroup1">
                Update Profile
            </a>
        </div>
        <div id="collapseListGroup1" class="panel-collapse collapse in" role="tabpanel"  aria-expanded="true">
            <ul class="togg">
                <li><a href="{{ route('edit_summary') }}">Summary Details</a></li>
                <!--<li><a href="edit_contact.html">Contact Details </a></li>-->
                <li><a href="{{ route('create_emp') }}">Employer/Designation</a></li>
                <li><a href="{{ route('edit_resume_det') }}">Update Resume</a></li>
                <li><a href="{{ route('itskills') }}">IT Skills</a></li>
                <li><a href="educationdetails.php">Education</a></li>
                <li><a href="moredetails.php">More Details</a></li>
            </ul>
        </div>
        <!--<div class="inboxa"><a href="#">Create/Manage Profiles</a></div>
        <div class="inboxa"><a href="#">Profile Performance</a></div>-->
        <!--<div class="inboxa"><a href="coverletter.php">Manage Cover Letters</a></div>-->
        <div class="inboxa"> <a href="jobseeker-profile.php?upl">Upload Photo</a></div>

        <div class="inboxa"><a href="job_agent_view.php">Manage Search Agents</a></div>
        <div class="inbox-bg">Jobs & Applications</div>
        <!--<div class="inboxa"><a href="save-jobs.php">Saved Jobs</a></div>-->
        <div class="inboxa"><a href="application-history.php">Application History</a></div>
        <div class="inbox-bg">Recruiters</div>
        <div class="inboxa"><a href="jobs-update.php?updates"> Jobs & Updates</a></div>
        <div class="inboxa"><a href="manage_follow.php">Manage Following</a></div>
        <div class="inboxa"><a href="follow.php">RecruiterConnection</a></div>
        <div class="inbox-bg">Settings</div>
        <div class="inboxa"><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg1">Visibility Settings</a></div>
        <!--<div class="inboxa"><a href="profile_visibility.php">Visibility Settings</a></div>-->
        <!-- <div class="inboxa"><a href="communication-settings.php">Communication Settings</a></div>-->
        <div class="inboxa"><a href="block-companies.php">Block Companies</a></div>
        <div class="inboxa"><a href="changepasswordseeker.html">Change Password</a></div>
    </div><!--create-job-content-->

</div>
