        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="../../../img/admin/Logo.png" alt="" width="50">
                </div>
                <div class="sidebar-brand-text mx-3" style="font-family: permanent marker; color: #915B3c;">WOODWASTE</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
                <a class="nav-link" href="/admin">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Nav Item - Charts -->
            <li class="nav-item {{ Request::is('admin/woodpedia*') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/woodpedia">
                    <i class="bi bi-journal-richtext"></i>
                    <span>Woodpedia</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Nav Item - Tables -->
            <li class="nav-item {{ Request::is('admin/pranala*') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/pranala">
                    <i class="bi bi-pencil-square"></i>
                    <span>Pranala</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item {{ Request::is('admin/wooddata*') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/wooddata">
                    <i class="bi bi-book"></i>
                    <span>Wood Data</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->