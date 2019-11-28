
        <!-- partial:assets/partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close fa fa-times"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles primary"></div>
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>
        <!-- partial -->
        <!-- partial:assets/partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav nav-padding">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                        <div class="profile-image">
                            <img src="assets/images/faces/face5.jpg" alt="image"/>
                        </div>
                        <div class="profile-name">
                            <p class="name">
                                رحمان رضایی
                            </p>
                            <p class="designation">
                                {{ __("dashboard.admin") }}
                            </p>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:ajaxLoad('{{route('home')}}')">
                        <i class="icon-home menu-icon"></i>
                        <span class="menu-title">{{ __("dashboard.dashboard") }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                        <i class="icon-user menu-icon"></i>
                        <span class="menu-title">{{ __("dashboard.customer") }}</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="page-layouts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="javascript:ajaxLoad('{{route('customer.list')}}')">{{ __("dashboard.list") }}</a></li>
                            {{--<li class="nav-item"> <a class="nav-link" href="rtl-layout.html">گزارش مشتریان</a></li>--}}
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"  onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                        <i class="icon-home menu-icon"></i>
                        <span class="menu-title">{{ __("dashboard.logout") }}</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>