<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:rgb(170, 149, 228)"">
    <!-- Brand Logo -->
    <a href=" /" class="brand-link">
    <img src="adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">Hotel Hebat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Username</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <a href="/dashboard" class="nav-link" style="background-color:darkviolet;color:white">
                    <i class="nav-iconfas fas fa-hotel"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
                <br>
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active" style="background-color:darkviolet;color:white">
                        <i class="nav-icon fas fa-bed"></i></i>
                        <p>
                            Kamar
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="background-color:mediumpurple;color:white">
                        <li class="nav-item">
                            <a href="/tipekamar" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tipe Kamar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/fasilkmr" class=" nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fasilitas Kamar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <br>
                <a href="/fasilitasadmin" class="nav-link" style="background-color:darkviolet;color:white">
                    <i class="nav-icon fas fa-swimming-pool"></i>
                    <p>
                        Fasilitas
                    </p>
                </a>
                <br>
                <a href="/datapesan" class="nav-link" style="background-color:darkviolet;color:white">
                    <i class="nav-icon fas fa-file"></i>
                    <p>
                        Pesan Kamar
                    </p>
                </a>
                <br>
                <a href="/pengguna" class="nav-link" style="background-color:darkviolet;color:white">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Pengguna
                    </p>
                </a>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>