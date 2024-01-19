<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand gap-3">
            <div class="top-menu-left d-none d-lg-block">
                <div class="d-inline">
                    <a href="{{ route('page.start') }}"><img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon inline"
                            alt="logo Targowisko"></a>
                </div>
                <div class="d-inline logo-text">
                    <a href="{{ route('page.start') }}"><strong>Targowisko</strong></a>
                </div>
            </div>

            <div class="mobile-toggle-menu d-block d-lg-none" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar"><i class='bx bx-menu'></i></div>

            <div class="search-bar flex-grow-1">
                <div class="position-relative search-bar-box">
                    <input type="text" class="form-control search-control" placeholder="Type to search..."> <span
                        class="position-absolute top-50 search-show"><i
                            class='bx bx-search'></i></span>
                    <span class="position-absolute top-50 search-close "><i
                            class='bx bx-x'></i></span>
                </div>
            </div>




            @guest
            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center gap-1">

                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx-mail-send'></i>
                        </a>

                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link  position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx-comment'></i>
                        </a>
                    </li>
                </ul>

            </div>
                <div class="menu-box px-3">
                    <div class="ps-3">
                    <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-log-in-circle'></i></span>
                    </div>
                    <div class="ps-3">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('auth.Login') }}</a>
                    </div>
                    <i class='bx bx-registered' ></i>
                    <div class="ps-3">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('auth.Register') }}</a>
                    </div>
                </div>




            @else
                <div class="top-menu ms-auto">
                    <ul class="navbar-nav align-items-center gap-1">

                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span
                                    class="alert-count">7</span>
                                <i class='bx bx-bell'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">{{ __('notification.Notifications') }}</p>
                                        <p class="msg-header-clear ms-auto">{{ __('notification.Marks all as read') }}</p>
                                    </div>
                                </a>
                                <div class="header-notifications-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
                                                        ago</span></h6>
                                                <p class="msg-info">5 new user registered</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-warning text-warning"><i
                                                    class='bx bx-door-open'></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
                                                        ago</span></h6>
                                                <p class="msg-info">45% less alerts last 4 weeks</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">{{ __('notification.View All Notifications') }}
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span
                                    class="alert-count">8</span>
                                <i class='bx bx-comment'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">{{ __('messages.Messages') }}</p>
                                        <p class="msg-header-clear ms-auto">{{ __('messages.Marks all as read') }}</p>
                                    </div>
                                </a>
                                <div class="header-message-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="assets/images/avatars/avatar-1.png" class="msg-avatar"
                                                    alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
                                                        ago</span></h6>
                                                <p class="msg-info">The standard chunk of lorem</p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">{{ __('messages.View All Messages') }}</div>
                                </a>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="menu-box dropdown px-3">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
                        <div class="user-info ps-3">
                            <p class="user-name mb-0"> {{ Auth::user()->name }}</p>

                            <p class="designattion mb-0">{{ Auth::user()->roles }}</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="javascript:;"><i
                                    class='bx bx-home-circle'></i><span>{{ __('auth.your_ads') }}</span></a></li>
                        <li><a class="dropdown-item" href="javascript:;"><i
                                    class='bx bx-dollar-circle'></i><span>{{ __('auth.payments') }}</span></a></li>
                        <li><a class="dropdown-item" href="javascript:;"><i
                                    class="bx bx-user"></i><span>{{ __('auth.profile') }}</span></a></li>
                        <li><a class="dropdown-item" href="javascript:;"><i
                                    class="bx bx-cog"></i><span>{{ __('auth.settings') }}</span></a></li>
                        <li>
                            <div class="dropdown-divider mb-0"></div>
                        </li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class='bx bx-log-out-circle'></i>{{ __('auth.Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </div>
            @endguest
        </nav>
    </div>
</header>
<!--end header -->
