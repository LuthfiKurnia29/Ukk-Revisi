<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm px-5 py-3 py-lg-0">
    <a href="index.html" class="navbar-brand p-0">
        <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-paint-roller text-secondary me-3"></i>Painter</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4 border-end border-5 border-primary">
            <a href="index.html" class="nav-item nav-link active">Home</a>
            <a href="about.html" class="nav-item nav-link">About</a>
            <a href="/servis" class="nav-item nav-link">Service</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="/list-servis" class="dropdown-item">Blog Grid</a>
                    <a href="detail.html" class="dropdown-item">Blog Detail</a>
                    <a href="team.html" class="dropdown-item">The Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>

        @guest
        <div class="d-lg-flex align-items-center ps-4">
            <a href="/sign-in" class="" type="button"><i class="bi bi-box-arrow-in-right"></i>Login</a>
        </div>
        @endguest

        @auth
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                {{-- <img class="rounded-circle me-lg-2" src={{ asset("admin/img/user.jpg") }} alt="" style="width: 40px; height: 40px;"> --}}
                <span class="d-none d-lg-inline-flex">{{ auth()->user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <a href="#" class="dropdown-item">My Profile</a>
                <a href="#" class="dropdown-item">Settings</a>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Keluar</button>
                </form>
            </div>
        </div>
        @endauth
    </div>
</nav>