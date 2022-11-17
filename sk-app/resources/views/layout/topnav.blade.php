<nav class="techics-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center techics-navbar-brand-wrapper d-flex align-items-center">
                <a class="techics-navbar-brand brand-logo" href="{{url('/')}}"><img src="{{asset('images/techics-logo.png')}}"
                        alt="logo" /></a>
                <a class="techics-navbar-brand brand-logo-mini" href="{{url('/')}}"><img src="{{asset('images/favicon.ico')}}"
                        alt="logo" /></a>
            </div>
            <div class="techics-navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="techics-navbar-toggler techics-navbar-toggler align-self-center" type="button"
                    data-toggle="minimize">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Search Box -->
                <ul class="techics-navbar-nav mr-lg-2">
                    <li class="techics-nav-item nav-search d-none d-lg-block">
                        <div class="techics-input-group">
                            <div class="techics-input-group-prepend">
                                <span class="techics-input-group-text" id="search">
                                    <i class="fas fa-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search for anything..."
                                aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="techics-navbar-nav techics-navbar-nav-right">
                    <li class="techics-nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                            id="messageDropdown" href="#" data-toggle="dropdown">
                            <i class="fas fa-envelope mx-0"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right techics-navbar-dropdown preview-list"
                            aria-labelledby="messageDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                            <a class="techics-dropdown-item preview-item">
                                <div class="techics-preview-thumbnail">
                                    <img src="{{asset('images/face.jpg')}}" alt="image" class="techics-profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-normal">David Grey</h6>
                                    <p class="font-weight-light small-text techics-text-muted mb-0">
                                        The meeting is cancelled
                                    </p>
                                </div>
                            </a>
                            <a class="techics-dropdown-item preview-item">
                                <div class="techics-preview-thumbnail">
                                    <img src="{{asset('images/face.jpg')}}" alt="image" class="techics-profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook</h6>
                                    <p class="font-weight-light small-text techics-text-muted mb-0">
                                        New product launch
                                    </p>
                                </div>
                            </a>
                            <a class="techics-dropdown-item preview-item">
                                <div class="techics-preview-thumbnail">
                                    <img src="{{asset('images/face.jpg')}}" alt="image" class="techics-profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-normal"> Johnson </h6>
                                    <p class="font-weight-light small-text techics-text-muted mb-0">
                                        Upcoming board meeting
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="techics-nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                            id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="fas fa-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right techics-navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="techics-dropdown-item preview-item">
                                <div class="techics-preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="fas fa-info-circle mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0 techics-text-muted">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class="techics-dropdown-item preview-item">
                                <div class="techics-preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="fas fa-cog mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0 techics-text-muted">
                                        Private message
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="techics-nav-item nav-profile dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{asset('images/face.jpg')}}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right techics-navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="techics-dropdown-item">
                                <i class="fas fa-cog"></i>
                                Settings
                            </a>
                            <a href="{{url('logout')}}" class="techics-dropdown-item">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                    <li class="techics-nav-item nav-settings d-none d-lg-flex">
                        <a class="nav-link" href="#">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                    </li>
                </ul>
                <button class="techics-navbar-toggler techics-navbar-toggler-right d-lg-none align-self-center"
                    type="button" data-toggle="offcanvas">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>