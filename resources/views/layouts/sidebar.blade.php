        <nav id="sidebar">
        <!-- Sidebar Content -->
            <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow px-15">
                <!-- Mini Mode -->
                <div class="content-header-section sidebar-mini-visible-b">
                <!-- Logo -->
                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                    <span class="text-dual-primary-dark">c</span><span class="text-primary"></span>
                </span>
                <!-- END Logo -->
                </div>
                <!-- END Mini Mode -->
                <!-- Normal Mode -->
                <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Sidebar -->
                <!-- Logo -->
                <div class="content-header-item">
                    <a class="link-effect font-w100" href="{{route('dashboard')}}">
                    <i class="si si-fire text-primary"></i>
                    <span class="font-size-xl text-dual-primary-dark">MPP </span><span class="font-size-m text-primary">Kota Bengkulu</span>
                    </a>
                </div>
                <!-- END Logo -->
                </div>
                <!-- END Normal Mode -->
            </div>
            <!-- END Side Header -->
            <!-- Sidebar Scrolling -->
            <div class="js-sidebar-scroll">
                <!-- Side User -->
                <div class="content-side content-side-full content-side-user px-10 align-parent">
                <!-- Visible only in mini mode -->
                <div class="sidebar-mini-visible-b align-v animated fadeIn">
                    <img class="img-avatar img-avatar32" src="{{asset('assets/media/avatars/avatar15.jpg')}}" alt="">
                </div>
                <!-- END Visible only in mini mode -->
                <!-- Visible only in normal mode -->
                <div class="sidebar-mini-hidden-b text-center">
                    <a class="img-link" href="be_pages_generic_profile.html">
                    <img class="img-avatar" src="{{asset('assets/media/avatars/avatar15.jpg')}}" alt="">
                    </a>
                    <ul class="list-inline mt-10">
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase" href="be_pages_generic_profile.html">{{Auth::user()->username}}</a>
                    </li>
                    <li class="list-inline-item">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                        <i class="si si-drop"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark" href="/logout" method='POST'>@csrf
                        <i class="si si-logout"></i>
                        </a>
                    </li>
                    </ul>
                </div>
                <!-- END Visible only in normal mode -->
                </div>
                <!-- END Side User -->
                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li>
                    <a href="{{route('dashboard')}}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                    </li>
                    {{-- @if (auth()->user()->level == 1) --}}
                    <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">User Interface</span></li>
                    <li>
                    @if (auth()->user()->level == 1)
                    <a href="{{route('pegawai.index')}}"><i class="si si-users"></i><span class="sidebar-mini-hide">Pegawai</span></a>
                    </li>
                    <li>
                    <a href="{{route('instansi.index')}}"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Instansi</span></a>
                    </li>
                    @elseif(auth()->user()->level == 2)
                    <a href="/dashboard/pegawaiIndex"><i class="si si-users"></i><span class="sidebar-mini-hide">Pegawai</span></a>
                    <a href="/dashboard/instansiIndex"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Instansi</span></a>
                    </li>
                    @endif
                </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- END Sidebar Scrolling -->
            </div>
        <!-- Sidebar Content -->
        </nav>
