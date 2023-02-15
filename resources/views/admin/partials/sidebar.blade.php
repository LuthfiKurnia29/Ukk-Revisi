<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
       <img src="{{ asset('front/img/logo.png') }}" class="text-center w-150 h-100"  alt="">
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('dashboard') ? 'active bg-gradient-primary' : '' }} " href="/dashboard">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('teknisi') ? 'active bg-gradient-primary' : '' }}" href="/teknisi">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              Data Teknisi
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('data-bank') ? 'active bg-gradient-primary' : '' }}" href="/data-bank">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              Data Bank
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('data-wilayah') ? 'active bg-gradient-primary' : '' }}" href="/data-wilayah">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              Data Wilayah
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('servis-dashboard') ? 'active bg-gradient-primary' : '' }}" href="/servis-dashboard">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              Servis Masuk
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('servis-dikerjakan') ? 'active bg-gradient-primary' : '' }}" href="/servis-dikerjakan">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            Servis Dikerjakan
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('servis-menunggubayar') ? 'active bg-gradient-primary' : '' }}" href="/servis-menunggubayar">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              Servis Menunggu Pembayaran
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('tampil-selesai') ? 'active bg-gradient-primary' : '' }}" href="/tampil-selesai">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              Servis Selesai
            </div>
          </a>
        </li>
        {{-- <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/profile.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/sign-in.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/sign-up.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li> --}}
      </ul>
    </div>
  </aside>