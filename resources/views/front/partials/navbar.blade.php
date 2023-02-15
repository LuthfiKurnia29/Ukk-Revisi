<nav class="navbar navbar-expand-lg navbar-dark shadow-sm px-5 py-3 py-lg-0" style="background-color: rgba(23, 23, 202, 0.849)">
    <a href="/" class="navbar-brand p-0">
        <img src="{{ asset('front/img/logo.png') }}" height="75" class="text-center" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Beranda</a>
            {{-- <a href="#about" class="nav-item nav-link {{ Request::is('#about') ? 'active' : '' }}">Tentang Kami</a> --}}
            <a href="/servis" class="nav-item nav-link {{ Request::is('servis') ? 'active' : '' }}">Pesan</a>
            @auth
            <a href="/list-servis" class="nav-item nav-link {{ Request::is('list-servis') ? 'active' : '' }}">List Servis</a>
            <a href="/riwayat-servis" class="nav-item nav-link  {{ Request::is('riwayat-servis') ? 'active' : '' }}">Riwayat Servis</a>
        </div>

        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color: aqua">
                {{-- <img class="rounded-circle me-lg-2" src={{ asset("admin/img/user.jpg") }} alt="" style="width: 40px; height: 40px;"> --}}
                <span class="d-none d-lg-inline-flex">{{ auth()->user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0" style="background-color: rgb(248, 252, 252)">
                <div class="text-center">
                    @if (isset(auth()->user()->avatar))
                    <img src="{{ asset('storage/' . auth()->user()->avatar) }}" class="rounded-circle w-50" alt="">
                    @else
                    
                    @endif
                </div>
                <a href="/profil-user" class="dropdown-item">My Profile</a>
                <a href="#" class="dropdown-item">Settings</a>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Keluar</button>
                </form>
            </div>
        </div>
        @endauth
        @guest
        <div class="d-lg-flex align-items-center ps-4">
            <a href="/sign-in" class="text-info" type="button"><i class="bi bi-box-arrow-in-right"></i>Login</a>
        </div>
        @endguest

    </div>
</nav>