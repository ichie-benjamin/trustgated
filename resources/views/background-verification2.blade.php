
<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/dashboard-post-a-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2019 23:08:27 GMT -->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/colors/blue.css') }}">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <header id="header-container" class="fullwidth dashboard-header not-sticky">

        <!-- Header -->
        <div id="header">
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>

                    <!-- Main Navigation -->
                    <nav id="navigation">
                        <ul id="responsive">

                            <li><a href="#">Home</a>
                                <ul class="dropdown-nav">
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Find Work</a>
                                <ul class="dropdown-nav">
                                    <li><a href="#">Browse Jobs</a>
                                        <ul class="dropdown-nav">
                                            <li><a href="jobs-list-layout-full-page-map.html">Full Page List + Map</a></li>
                                            <li><a href="jobs-grid-layout-full-page-map.html">Full Page Grid + Map</a></li>
                                            <li><a href="jobs-grid-layout-full-page.html">Full Page Grid</a></li>
                                            <li><a href="jobs-list-layout-1.html">List Layout 1</a></li>
                                            <li><a href="jobs-list-layout-2.html">List Layout 2</a></li>
                                            <li><a href="jobs-grid-layout.html">Grid Layout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Browse Tasks</a>
                                        <ul class="dropdown-nav">
                                            <li><a href="tasks-list-layout-1.html">List Layout 1</a></li>
                                            <li><a href="tasks-list-layout-2.html">List Layout 2</a></li>
                                            <li><a href="tasks-grid-layout.html">Grid Layout</a></li>
                                            <li><a href="tasks-grid-layout-full-page.html">Full Page Grid</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="browse-companies.html">Browse Companies</a></li>
                                    <li><a href="single-job-page.html">Job Page</a></li>
                                    <li><a href="single-task-page.html">Task Page</a></li>
                                    <li><a href="single-company-profile.html">Company Profile</a></li>
                                </ul>
                            </li>

                            <li><a href="#">For Employers</a>
                                <ul class="dropdown-nav">
                                    <li><a href="#">Find a Freelancer</a>
                                        <ul class="dropdown-nav">
                                            <li><a href="freelancers-grid-layout-full-page.html">Full Page Grid</a></li>
                                            <li><a href="freelancers-grid-layout.html">Grid Layout</a></li>
                                            <li><a href="freelancers-list-layout-1.html">List Layout 1</a></li>
                                            <li><a href="freelancers-list-layout-2.html">List Layout 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="single-freelancer-profile.html">Freelancer Profile</a></li>
                                    <li><a href="dashboard-post-a-job.html">Post a Job</a></li>
                                    <li><a href="dashboard-post-a-task.html">Post a Task</a></li>
                                </ul>
                            </li>

                            <li><a href="#" class="current">Dashboard</a>
                                <ul class="dropdown-nav">
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="dashboard-messages.html">Messages</a></li>
                                    <li><a href="dashboard-bookmarks.html">Bookmarks</a></li>
                                    <li><a href="dashboard-reviews.html">Reviews</a></li>
                                    <li><a href="dashboard-manage-jobs.html">Jobs</a>
                                        <ul class="dropdown-nav">
                                            <li><a href="dashboard-manage-jobs.html">Manage Jobs</a></li>
                                            <li><a href="dashboard-manage-candidates.html">Manage Candidates</a></li>
                                            <li><a href="dashboard-post-a-job.html">Post a Job</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="dashboard-manage-tasks.html">Tasks</a>
                                        <ul class="dropdown-nav">
                                            <li><a href="dashboard-manage-tasks.html">Manage Tasks</a></li>
                                            <li><a href="dashboard-manage-bidders.html">Manage Bidders</a></li>
                                            <li><a href="dashboard-my-active-bids.html">My Active Bids</a></li>
                                            <li><a href="dashboard-post-a-task.html">Post a Task</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="dashboard-settings.html">Settings</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Pages</a>
                                <ul class="dropdown-nav">
                                    <li><a href="pages-blog.html">Blog</a></li>
                                    <li><a href="pages-pricing-plans.html">Pricing Plans</a></li>
                                    <li><a href="pages-checkout-page.html">Checkout Page</a></li>
                                    <li><a href="pages-invoice-template.html">Invoice Template</a></li>
                                    <li><a href="pages-user-interface-elements.html">User Interface Elements</a></li>
                                    <li><a href="pages-icons-cheatsheet.html">Icons Cheatsheet</a></li>
                                    <li><a href="pages-login.html">Login & Register</a></li>
                                    <li><a href="pages-404.html">404 Page</a></li>
                                    <li><a href="pages-contact.html">Contact</a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                    <!-- Main Navigation / End -->

                </div>
                <!-- Left Side Content / End -->


                <!-- Right Side Content / End -->
                <div class="right-side">

                    <!--  User Notifications -->
                    <div class="header-widget hide-on-mobile">

                        <!-- Notifications -->


                        <!-- Messages -->
                        <div class="header-notifications">
                            <div class="header-notifications-trigger">
                                <a href="#"><i class="icon-feather-mail"></i><span>3</span></a>
                            </div>

                            <!-- Dropdown -->
                            <div class="header-notifications-dropdown">

                                <div class="header-notifications-headline">
                                    <h4>Messages</h4>
                                    <button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
                                        <i class="icon-feather-check-square"></i>
                                    </button>
                                </div>

                                <div class="header-notifications-content">
                                    <div class="header-notifications-scroll" data-simplebar>
                                        <ul>
                                            <!-- Notification -->
                                            <li class="notifications-not-read">
                                                <a href="#">
                                                    <span class="notification-avatar status-online"><img src="images/user-avatar-small-03.jpg" alt=""></span>
                                                    <div class="notification-text">
                                                        <strong>David Peterson</strong>
                                                        <p class="notification-msg-text">Thanks for reaching out. I'm quite busy right now on many...</p>
                                                        <span class="color">4 hours ago</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Notification -->
                                            <li class="notifications-not-read">
                                                <a href="#">
                                                    <span class="notification-avatar status-offline"><img src="images/user-avatar-small-02.jpg" alt=""></span>
                                                    <div class="notification-text">
                                                        <strong>Sindy Forest</strong>
                                                        <p class="notification-msg-text">Hi Tom! Hate to break it to you, but I'm actually on vacation until...</p>
                                                        <span class="color">Yesterday</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Notification -->
                                            <li class="notifications-not-read">
                                                <a href="dashboard-messages.html">
                                                    <span class="notification-avatar status-offline"><img src="images/user-avatar-small-02.jpg" alt=""></span>
                                                    <div class="notification-text">
                                                        <strong>Sindy Forest</strong>
                                                        <p class="notification-msg-text">Hi Tom! Hate to break it to you, but I'm actually on vacation until...</p>
                                                        <span class="color">Yesterday</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <a href="dashboard-messages.html" class="header-notifications-button ripple-effect button-sliding-icon">View All Messages<i class="icon-material-outline-arrow-right-alt"></i></a>
                            </div>
                        </div>

                    </div>
                    <!--  User Notifications / End -->

                    <!-- User Menu -->
                    <div class="header-widget">

                        <!-- Messages -->
                        <div class="header-notifications user-menu">
                            <div class="header-notifications-trigger">
                                <a href="#"><div class="user-avatar status-online"><img src="images/user-avatar-small-01.jpg" alt=""></div></a>
                            </div>

                            <!-- Dropdown -->
                            <div class="header-notifications-dropdown">

                                <!-- User Status -->
                                <div class="user-status">

                                    <!-- User Name / Avatar -->
                                    <div class="user-details">
                                        <div class="user-avatar status-online"><img src="images/user-avatar-small-01.jpg" alt=""></div>
                                        <div class="user-name">
                                            Tom Smith <span>Freelancer</span>
                                        </div>
                                    </div>

                                    <!-- User Status Switcher -->
                                    <div class="status-switch" id="snackbar-user-status">
                                        <label class="user-online current-status">Online</label>
                                        <label class="user-invisible">Invisible</label>
                                        <!-- Status Indicator -->
                                        <span class="status-indicator" aria-hidden="true"></span>
                                    </div>
                                </div>

                                <ul class="user-menu-small-nav">
                                    <li><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                                    <li><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i> Settings</a></li>
                                    <li><a href="index-logged-out.html"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                                </ul>

                            </div>
                        </div>

                    </div>
                    <!-- User Menu / End -->

                    <!-- Mobile Navigation Button -->
                    <span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

                </div>
                <!-- Right Side Content / End -->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->


    <!-- Dashboard Container -->
    <div class="dashboard-container">



        <!-- Dashboard Content
        ================================================== -->
        <div class="dashboard-content-container" data-simplebar>
            <div class="dashboard-content-inner" >

                <!-- Dashboard Headline -->
                <div class="dashboard-headline">
                    <h3 class="text text-center">Hire Ready Application Form (Package 2)</h3>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Dashboard</a></li>
                            <li>Post a Job</li>
                        </ul>
                    </nav>
                </div>

                <!-- Row -->
                <div class="row">

                    <!-- Dashboard Box -->
                    <div class="col-lg-8 offset-md-2">
                        <div class="dashboard-box margin-top-0">

                            <!-- Headline -->
                            <div class="headline">
                                <h3><i class="icon-feather-folder-plus"></i>Educational Institution Details - Step 2 of 3</h3>
                            </div>

                            <div class="content with-padding padding-bottom-10">
                                <div class="row">

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>First Name<span class="text text-danger">*</span></h5>
                                            <input type="text" name="first_name" class="with-border">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Middle Name<span class="text text-danger">*</span></h5>
                                            <input type="text" name="middle_name" class="with-border">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Last Name<span class="text text-danger">*</span></h5>
                                            <input type="text" name="last_name" class="with-border">
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Institution<span class="text text-danger">*</span></h5>
                                            <input type="text"   class="with-border">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Roll Number / Student Number<span class="text text-danger">*</span></h5>
                                            <input type="text"  class="with-border">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Institution Location</h5>
                                            <input type="text" class="with-border">
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Location</h5>
                                            <div class="input-with-icon">
                                                <div id="autocomplete-container">
                                                    <input id="autocomplete-input" class="with-border" type="text" placeholder="Type Address">
                                                </div>
                                                <i class="icon-material-outline-location-on"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Address 1</h5>
                                            <div class="input-with-icon">
                                                <div id="autocomplete-container">
                                                    <input id="autocomplete-input" class="with-border" type="text" placeholder="Type Address">
                                                </div>
                                                <i class="icon-material-outline-location-on"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Address 2</h5>
                                            <div class="input-with-icon">
                                                <div id="autocomplete-container">
                                                    <input id="autocomplete-input" class="with-border" type="text" placeholder="Type Address">
                                                </div>
                                                <i class="icon-material-outline-location-on"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>City</h5>
                                            <div class="input-with-icon">
                                                <div id="autocomplete-container">
                                                    <input id="autocomplete-input" class="with-border" type="text" placeholder="Type City">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>State</h5>
                                            <div class="input-with-icon">
                                                <div id="autocomplete-container">
                                                    <input id="autocomplete-input" class="with-border" type="text" placeholder="Type State">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <label for="country">Country</label>
                                            <span style="color: red !important; display: inline; float: none;">*</span>

                                            <select id="country" name="country" class="form-control">
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-leste">Timor-leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Year of Passing</h5>
                                            <div class="input-with-icon">
                                                <div id="autocomplete-container">
                                                    <input id="autocomplete-input" class="with-border" type="date" placeholder="Type Postal Code">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Degree to be Verified</h5>
                                            <div class="input-with-icon">
                                                <div id="autocomplete-container">
                                                    @include('admin.partials.image-uploader',['field' => 'logo'])                                                </div>
                                            </div>
                                        </div>
                                    </div>

{{--                                    <div class="col-xl-12">--}}
{{--                                        <div class="submit-field">--}}
{{--                                            <h5>Job Description</h5>--}}
{{--                                            <textarea cols="30" rows="5" class="with-border"></textarea>--}}
{{--                                            <div class="uploadButton margin-top-30">--}}
{{--                                                <input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>--}}
{{--                                                <label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>--}}
{{--                                                <span class="uploadButton-file-name">Images or documents that might be helpful in describing your job</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <a href="#" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Post a Job</a>
                        </div>
                    </div>


                </div>
                <!-- Row / End -->

                <!-- Footer -->
                <div class="dashboard-footer-spacer"></div>
                <div class="small-footer margin-top-15">
                    <div class="small-footer-copyrights">
                        © 2019 <strong>Hireo</strong>. All Rights Reserved.
                    </div>
                    <ul class="footer-social-links">
                        <li>
                            <a href="#" title="Facebook" data-tippy-placement="top">
                                <i class="icon-brand-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Twitter" data-tippy-placement="top">
                                <i class="icon-brand-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Google Plus" data-tippy-placement="top">
                                <i class="icon-brand-google-plus-g"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="LinkedIn" data-tippy-placement="top">
                                <i class="icon-brand-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- Footer / End -->

            </div>
        </div>
        <!-- Dashboard Content / End -->

    </div>
    <!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/tippy.all.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/snackbar.js"></script>
<script src="js/clipboard.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom.js"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
    // Snackbar for user status switcher
    $('#snackbar-user-status label').click(function() {
        Snackbar.show({
            text: 'Your status has been changed!',
            pos: 'bottom-center',
            showAction: false,
            actionText: "Dismiss",
            duration: 3000,
            textColor: '#fff',
            backgroundColor: '#383838'
        });
    });
</script>

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="js/chart.min.js"></script>
<script>
    Chart.defaults.global.defaultFontFamily = "Nunito";
    Chart.defaults.global.defaultFontColor = '#888';
    Chart.defaults.global.defaultFontSize = '14';

    var ctx = document.getElementById('chart').getContext('2d');

    var chart = new Chart(ctx, {
        type: 'line',

        // The data for our dataset
        data: {
            labels: ["January", "February", "March", "April", "May", "June"],
            // Information about the dataset
            datasets: [{
                label: "Views",
                backgroundColor: 'rgba(42,65,232,0.08)',
                borderColor: '#2a41e8',
                borderWidth: "3",
                data: [196,132,215,362,210,252],
                pointRadius: 5,
                pointHoverRadius:5,
                pointHitRadius: 10,
                pointBackgroundColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointBorderWidth: "2",
            }]
        },

        // Configuration options
        options: {

            layout: {
                padding: 10,
            },

            legend: { display: false },
            title:  { display: false },

            scales: {
                yAxes: [{
                    scaleLabel: {
                        display: false
                    },
                    gridLines: {
                        borderDash: [6, 10],
                        color: "#d8d8d8",
                        lineWidth: 1,
                    },
                }],
                xAxes: [{
                    scaleLabel: { display: false },
                    gridLines:  { display: false },
                }],
            },

            tooltips: {
                backgroundColor: '#333',
                titleFontSize: 13,
                titleFontColor: '#fff',
                bodyFontColor: '#fff',
                bodyFontSize: 13,
                displayColors: false,
                xPadding: 10,
                yPadding: 10,
                intersect: false
            }
        },


    });

</script>


<!-- Google Autocomplete -->
<script>
    function initAutocomplete() {
        var options = {
            types: ['(cities)'],
            // componentRestrictions: {country: "us"}
        };

        var input = document.getElementById('autocomplete-input');
        var autocomplete = new google.maps.places.Autocomplete(input, options);

        if ($('.submit-field')[0]) {
            setTimeout(function(){
                $(".pac-container").prependTo("#autocomplete-container");
            }, 300);
        }
    }
</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&amp;libraries=places&amp;callback=initAutocomplete"></script>


</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/dashboard-post-a-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2019 23:08:29 GMT -->
</html>
