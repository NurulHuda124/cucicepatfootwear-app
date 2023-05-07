<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="/img/logo2.png" alt="AdminLTE Logo" class="brand-image" style="opacity: 1" sizes="80x90">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            @guest

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"><button class="btn btn-outline-dark"
                                type="submit">
                                {{ __('Register') }}</button></a>
                    </li>
                @endif

                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-dark" type="submit">
                                {{ __('Login') }}</button>
                        </a>
                    </li>
                @endif
            @endguest
            <div class="info">
                <a href="/dashboard" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-header">RINGKASAN</li>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Halaman Utama
                        </p>
                    </a>
                </li>
                <li class="nav-header">MENU UTAMA</li>
                <li class="nav-item">
                    <a href="/dashboard/packets"
                        class="nav-link {{ Request::is('dashboard/packets*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cubes"></i>
                        <p>
                            Paket
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/orders" class="nav-link {{ Request::is('dashboard/orders*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Pesanan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/assets" class="nav-link {{ Request::is('dashboard/assets*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cube"></i>
                        <p>
                            Assets
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/spendings"
                        class="nav-link {{ Request::is('dashboard/spendings*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-money-bill"></i>
                        <p>
                            Pengeluaran
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/reports"
                        class="nav-link {{ Request::is('dashboard/reports*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Laporan
                        </p>
                    </a>
                </li>
                <li class="nav-header">MENU SISTEM</li>
                <li class="nav-item">
                    <a href="/dashboard/profile"
                        class="nav-link {{ Request::is('dashboard/profile*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profil
                        </p>
                    </a>
                </li>
                <li class="nav-item @cannot('admin') d-none @endcannot">
                    <a href="/dashboard/users" class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Pengguna
                        </p>
                    </a>
                </li>
                <li class="nav-item @cannot('admin') d-none @endcannot ">
                    <a href="/dashboard/setting"
                        class="nav-link {{ Request::is('dashboard/setting*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Pengaturan
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
