<div class="left-side-menu">

    <div class="h-100" data-simplebar>
        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ route('dashboard') }}">
                        {{-- <span class="badge bg-success float-end">7</span> --}}
                        <i class="fe-airplay"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Apps</li>
                @if (Auth::user()->role_id == 1)
                    <li>
                        <a href="{{ route('product') }}">
                            <i class="fe-shopping-cart"></i>
                            <span> Product </span>
                        </a>
                    </li>
                @endif

                {{-- <li>
                    <a href="#sidebarEmail" data-bs-toggle="collapse">
                        <i class="fe-mail"></i>
                        <span> Email </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmail">
                        <ul class="nav-second-level">
                            <li>
                                <a href="email-inbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="email-read.html">Read Email</a>
                            </li>
                            <li>
                                <a href="email-compose.html">Compose Email</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}


                <li class="menu-title mt-2">Web Apps</li>
                <li>
                    <a href="#webconfig" data-bs-toggle="collapse">
                        <i class="fe-settings"></i>
                        <span> Website Setting </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="webconfig">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('web.config') }}">Config</a>
                            </li>
                            <li>
                                <a href="{{ route('web.logo') }}">Logo</a>
                            </li>
                        </ul>
                    </div>
                </li>

                
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
