<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary text-center" style="font-size: 20px"><i class="fa fa-user-edit me-2"></i>2-Cool | Admin</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src={{ asset("admin/img/user.jpg") }} alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/dashboard" class="nav-item nav-link {{ Request::is('dashboard') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::is('teknisi')  ? 'active' : '' }} dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Master Data</a>

                <div class="dropdown-menu bg-transparent border-0 {{ Request::is('teknisi')  ? 'show' : '' }}">
                    <a href="/teknisi" class="dropdown-item  {{ Request::is('teknisi') ? 'active' : '' }}">Data Teknisi</a>
                    <a href="/data-bank" class="dropdown-item ">Data Bank</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Servis</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/servis-dashboard" class="dropdown-item">Servis Masuk</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div>
        </div>
    </nav>
</div>