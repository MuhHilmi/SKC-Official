<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="overflow-y: auto;">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="profile" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
            <div class="sidebar-search-results">
                <div class="list-group"><a href="#" class="list-group-item">
                        <div class="search-title"><strong class="text-light"></strong>N<strong
                                class="text-light"></strong>o<strong class="text-light"></strong> <strong
                                class="text-light"></strong>e<strong class="text-light"></strong>l<strong
                                class="text-light"></strong>e<strong class="text-light"></strong>m<strong
                                class="text-light"></strong>e<strong class="text-light"></strong>n<strong
                                class="text-light"></strong>t<strong class="text-light"></strong> <strong
                                class="text-light"></strong>f<strong class="text-light"></strong>o<strong
                                class="text-light"></strong>u<strong class="text-light"></strong>n<strong
                                class="text-light"></strong>d<strong class="text-light"></strong>!<strong
                                class="text-light"></strong></div>
                        <div class="search-path"></div>
                    </a></div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/profile" class="nav-link">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/uploads" class="nav-link">
                        <i class="nav-icon fas fa-images"></i>
                        <p>
                            Galeri
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Data Siswa Baru
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <!-- LEVEL 1: Tahun Ajar -->
                    <ul class="nav nav-treeview">

                        <!-- Tahun Ajar 2024/2025 -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Tahun Ajar 2024/2025
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <!-- LEVEL 2: Gelombang -->
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/dashboard/2024/gelombang1" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Gelombang 1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/dashboard/2024/gelombang2" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Gelombang 2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Tahun Ajar 2025/2026 -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Tahun Ajar 2025/2026
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <!-- LEVEL 2: Gelombang -->
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/dashboard/2025/gelombangsatu" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Gelombang 1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/dashboard/2025/gelombangdua" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Gelombang 2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/dashboard/2025/gelombangtiga" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Gelombang 3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
