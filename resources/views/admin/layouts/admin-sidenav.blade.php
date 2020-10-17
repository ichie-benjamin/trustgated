
<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href="{{ url('/') }}" target="_blank"><span>[</span>{{ setting('site_name') }}<span>]</span></a></div>
<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">
        <a href="{{ route('admin.dashboard') }}" class="br-menu-link {{ active('admin.dashboard') }}">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <label style="font-size: 14px" class="sidebar-label pd-x-15 mg-t-25 mg-b-10 tx-info op-9">Manage Site</label>
        <div class="progress ht-5 mg-b-10">
            <div class="progress-bar bg-danger wd-100p" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <a href="{{ route('admin.user.admins') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-users-cog tx-22"></i>
                <span class="menu-item-label">Administrator</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="{{{ route('admin.user.sub_admins') }}}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-user-cog tx-22"></i>
                <span class="menu-item-label">Sub Admin</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="{{ route('admin.industry-type.index') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-industry tx-22"></i>
                <span class="menu-item-label">Industry Type</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="{{ route('admin.functional-area.index') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-atom tx-22"></i>
                <span class="menu-item-label">Functional Area</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="{{ route('admin.countries.index') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-compass tx-22"></i>
                <span class="menu-item-label"> Location Management</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-location-arrow tx-22"></i>
                <span class="menu-item-label"> Job Location</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="{{ route('admin.educational-details.index') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-graduation-cap tx-22"></i>
                <span class="menu-item-label"> Education Details</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="{{ route('admin.ads.index') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-ad tx-22"></i>
                <span class="menu-item-label"> Homepage Ads</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="{{ route('admin.pages.index') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-archive tx-22"></i>
                <span class="menu-item-label"> C M S Content</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="{{ route('admin.pages.index') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-list tx-22"></i>
                <span class="menu-item-label"> C M S List Content</span>
            </div><!-- menu-item -->
{{--        </a><!-- br-menu-link -->--}}
{{--        <a href="#" class="br-menu-link">--}}
{{--            <div class="br-menu-item">--}}
{{--                <i class="menu-item-fa fa fa-file-upload tx-22"></i>--}}
{{--                <span class="menu-item-label"> ##C M S Uploads</span>--}}
{{--            </div><!-- menu-item -->--}}
{{--        </a><!-- br-menu-link -->--}}
        </a>
        <a href="{{ route('admin.banners.index') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-tasks tx-22"></i>
                <span class="menu-item-label"> Banner Manage</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="{{ route('admin.settings.index') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-cogs tx-22"></i>
                <span class="menu-item-label"> General Setting</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

{{--        <a href="#" class="br-menu-link">--}}
{{--            <div class="br-menu-item">--}}
{{--                <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>--}}
{{--                <span class="menu-item-label">Settings</span>--}}
{{--                <i class="menu-item-arrow fa fa-angle-down"></i>--}}
{{--            </div><!-- menu-item -->--}}
{{--        </a><!-- br-menu-link -->--}}
{{--        <ul class="br-menu-sub nav flex-column">--}}
{{--            <li class="nav-item"><a href="{{ route('admin.countries.index') }}" class="nav-link">Country</a></li>--}}
{{--            <li class="nav-item"><a href="{{ route('admin.states.index') }}" class="nav-link">State</a></li>--}}
{{--            <li class="nav-item"><a href="{{ route('admin.lgas.index') }}" class="nav-link">Lga</a></li>--}}
{{--            <li class="nav-item"><a href="{{ route('admin.cities.index') }}" class="nav-link">Cities</a></li>--}}
{{--        </ul>--}}

        <label style="font-size: 14px" class="sidebar-label pd-x-15 mg-t-25 mg-b-10 tx-info op-9">Manage Seekers</label>
        <div class="progress ht-5 mg-b-10">
            <div class="progress-bar bg-success wd-100p" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <a href="{{ route('admin.user.jobseekers') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-id-card tx-22"></i>
                <span class="menu-item-label"> Seeker's Profile</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-file-import tx-22"></i>
                <span class="menu-item-label"> Import Data's</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-universal-access tx-24"></i>
                <span class="menu-item-label">Resume Access</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="#" class="nav-link">Resume Access</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Inactive Resume Users</a></li>

        </ul>
        <label style="font-size: 14px" class="sidebar-label pd-x-15 mg-t-25 mg-b-10 tx-info op-9"> Manage Employers</label>
        <div class="progress ht-5 mg-b-10">
            <div class="progress-bar bg-warning wd-100p" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-id-card-alt tx-24"></i>
                <span class="menu-item-label"> Employers</span>
                <i class="menu-item-arrow fa fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.user.employers') }}" class="nav-link"> Employer's Profile</a></li>
            <li class="nav-item"><a href="{{ route('admin.jobs.index') }}" class="nav-link">Employer's Posted Jobs</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-registered tx-22"></i>
                <span class="menu-item-label"> Unregistered Company Job</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-paper-plane tx-22"></i>
                <span class="menu-item-label"> Send Job Request</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <label style="font-size: 14px" class="sidebar-label pd-x-15 mg-t-25 mg-b-10 tx-info op-9"> Newsletters</label>
        <div class="progress ht-5 mg-b-10">
            <div class="progress-bar bg-primary wd-100p" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-chalkboard-teacher tx-22"></i>
                <span class="menu-item-label"> Job Seekers</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-user-tie tx-22"></i>
                <span class="menu-item-label"> Recruiters</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-university tx-22"></i>
                <span class="menu-item-label"> Institute</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <label style="font-size: 14px" class="sidebar-label pd-x-15 mg-t-25 mg-b-10 tx-info op-9"> Price Settings</label>
        <div class="progress ht-5 mg-b-10">
            <div class="progress-bar bg-purple wd-100p" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-money-check-alt tx-22"></i>
                <span class="menu-item-label"> Database Access Price</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="{{ route('admin.products.index') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-upload tx-24"></i>
                <span class="menu-item-label"> Job Posting Type</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
{{--        <ul class="br-menu-sub nav flex-column">--}}
{{--            <li class="nav-item"><a href="{{ route('admin.products.index') }}" class="nav-link">Job Posting</a></li>--}}
{{--            <li class="nav-item"><a href="#" class="nav-link"> Job Posting Type</a></li>--}}
{{--        </ul>--}}
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-university tx-22"></i>
                <span class="menu-item-label"> Training Institute Plan</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <label style="font-size: 14px" class="sidebar-label pd-x-15 mg-t-25 mg-b-10 tx-info op-9"> Key Skill</label>
        <div class="progress ht-5 mg-b-10">
            <div class="progress-bar bg-primary wd-100p" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <a href="{{ route('admin.skills.index') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-hockey-puck tx-22"></i>
                <span class="menu-item-label"> Key Skills</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <label style="font-size: 14px" class="sidebar-label pd-x-15 mg-t-25 mg-b-10 tx-info op-9"> Employers Order Mgt</label>
        <div class="progress ht-5 mg-b-10">
            <div class="progress-bar bg-danger wd-100p" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-database tx-22"></i>
                <span class="menu-item-label"> Database Access</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-user-md tx-22"></i>
                <span class="menu-item-label"> Job Posting Access</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <label style="font-size: 14px" class="sidebar-label pd-x-15 mg-t-25 mg-b-10 tx-info op-9"> Featured Services</label>
        <div class="progress ht-5 mg-b-10">
            <div class="progress-bar bg-warning wd-100p" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <a href="{{ route('admin.packages.index') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-box tx-22"></i>
                <span class="menu-item-label"> Packages</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-fa fa fa-cubes tx-22"></i>
                <span class="menu-item-label"> Package Purchased</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->





        <br>
        <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-power tx-24"></i>
                <span class="menu-item-label">Logout</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
    </div><!-- br-sideleft-menu -->





    <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<div class="br-header">
    <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
            <input id="searchbox" type="text" class="form-control" placeholder="Search">
            <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
          </span>
        </div><!-- input-group -->
    </div><!-- br-header-left -->
    <div class="br-header-right">
        <nav class="nav">
            @section('hide')
            <div class="dropdown">
                <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                    <i class="icon ion-ios-email-outline tx-24"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
                    <!-- end: if statement -->
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
                    <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                        <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Messages</label>
                        <a href="#" class="tx-11">+ Add New Message</a>
                    </div><!-- d-flex -->

                    <div class="media-list">
                        <!-- loop starts here -->
                        <a href="#" class="media-list-link">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="http://localhost/afiaanyi-logistics/img/img3.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Donna Seay</p>
                                        <span class="tx-11 tx-gray-500">2 minutes ago</span>
                                    </div><!-- d-flex -->
                                    <p class="tx-12 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <!-- loop ends here -->
                        <a href="#" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="http://localhost/afiaanyi-logistics/img/img4.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Samantha Francis</p>
                                        <span class="tx-11 tx-gray-500">3 hours ago</span>
                                    </div><!-- d-flex -->
                                    <p class="tx-12 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="#" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="http://localhost/afiaanyi-logistics/img/img7.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Robert Walker</p>
                                        <span class="tx-11 tx-gray-500">5 hours ago</span>
                                    </div><!-- d-flex -->
                                    <p class="tx-12 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="#" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="http://localhost/afiaanyi-logistics/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Larry Smith</p>
                                        <span class="tx-11 tx-gray-500">Yesterday</span>
                                    </div><!-- d-flex -->
                                    <p class="tx-12 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <div class="pd-y-10 tx-center bd-t">
                            <a href="#" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Messages</a>
                        </div>
                    </div><!-- media-list -->
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <div class="dropdown">
                <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                    <i class="icon ion-ios-bell-outline tx-24"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
                    <!-- end: if statement -->
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
                    <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                        <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Notifications</label>
                        <a href="#" class="tx-11">Mark All as Read</a>
                    </div><!-- d-flex -->

                    <div class="media-list">
                        <!-- loop starts here -->
                        <a href="#" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="http://localhost/afiaanyi-logistics/img/img8.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                                    <span class="tx-12">October 03, 2017 8:45am</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <!-- loop ends here -->
                        <a href="#" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="http://localhost/afiaanyi-logistics/img/img9.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                                    <span class="tx-12">October 02, 2017 12:44am</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="#" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="http://localhost/afiaanyi-logistics/img/img10.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                                    <span class="tx-12">October 01, 2017 10:20pm</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="#" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="http://localhost/afiaanyi-logistics/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                                    <span class="tx-12">October 01, 2017 6:08pm</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <div class="pd-y-10 tx-center bd-t">
                            <a href="#" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
                        </div>
                    </div><!-- media-list -->
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            @endsection
            <div class="dropdown">
                <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name hidden-md-down">{{ auth()->user()->username }}</span>
                    <img src="{{ asset(auth()->user()->avatar) }}) }}" class="wd-32 rounded-circle" alt="">
                    <span class="square-10 bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href="#"><i class="icon ion-ios-person"></i> Change Password</a></li>
                        <li><a href="{{ route('admin.settings.index') }}"><i class="icon ion-ios-gear"></i> Settings</a></li>
{{--                        <li><a href="#"><i class="icon ion-ios-download"></i> Downloads</a></li>--}}
{{--                        <li><a href="#"><i class="icon ion-ios-star"></i> Favorites</a></li>--}}
{{--                        <li><a href="#"><i class="icon ion-ios-folder"></i> Collections</a></li>--}}
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon ion-power"></i> Sign Out</a></li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
    </div><!-- br-header-right -->
</div><!-- br-header -->
<!-- ########## END: HEAD PANEL ########## -->

<!-- ########## START: RIGHT PANEL ########## -->
<div class="br-sideright">


    <!-- Tab panes -->

</div><!-- br-sideright -->
<!-- ########## END: RIGHT PANEL ########## --->
