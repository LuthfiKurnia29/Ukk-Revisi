@extends('front.layouts.main')
@section('container')
      <!-- Hero Start -->
      {{-- <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-dark">Rawat dan Jaga AC Rumahmu Bersama Kami</h1>
                    <p class="fs-4 text-dark mb-4"></p>
                    <div class="pt-2">
                        <a href="https://wa.me/6288217318512" class="btn btn-outline-success rounded-pill py-md-3 px-md-5 mx-2" target="blank"><i class="fab fa-fw fa-whatsapp"></i>Kontak Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Hero End -->

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
                <div class="row d-flex" style="background-image: url({{ asset('front/img/carousel.jpg') }}); background-size:cover;" >
                        <div class="col-lg-8 justify-content-center text-center" style="margin-top: 3em; margin-bottom:3em">
                            <h5 class="display-1 text-dark">2-Cool Servis AC</h5>
                            <p class="fs-4 text-dark mb-4">Menerima servis AC rumah tangga maupun kantor/perusahaan</p>
                            <div class="pt-2">
                                <a href="https://wa.me/6288217318512" class="btn btn-outline-success rounded-pill py-md-3 px-md-5 mx-2" target="blank"><i class="fab fa-fw fa-whatsapp"></i>Kontak Kami</a>
                            </div>
                        </div>
                </div>
          </div>
          <div class="carousel-item" data-bs-interval="10000">
                <div class="row d-flex" style="background-image: url({{ asset('front/img/bg.jpg') }}); background-size:cover;">
                    <div class="col-lg-8 text-center" style="margin-top: 3em; margin-bottom:3em">
                        <h3 class="display-1 text-dark">Berkualitas & Bergaransi</h3>
                        <p class="fs-4 text-dark mb-4">Hanya kami yang menyediakan garansi 100% jika barang rusak setelah diservis</p>
                        <div class="pt-2">
                            <a href="https://wa.me/6288217318512" class="btn btn-outline-success rounded-pill py-md-3 px-md-5 mx-2" target="blank"><i class="fab fa-fw fa-whatsapp"></i>Kontak Kami</a>
                        </div>
                    </div>
                </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container py-5">
            {{-- <div class="row gx-0 mb-3 mb-lg-0">
                <div class="col-lg-6 my-lg-5 py-lg-5">
                    <div class="about-start bg-primary p-5">
                        <h1 class="display-5 mb-4">Selamat Datang</h1>
                        <p>Tempor erat elitr at rebum at at clita. Diam dolor diam ipsum et, tempor sit sit diam amet et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor magna dolore erat amet </p>
                    </div>
                </div>
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src={{ asset("front/img/service-3.jpg") }} style="object-fit: cover;">
                    </div>
                </div>
            </div> --}}
            <div class="row gx-0 mt-3">
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src={{ asset("front/img/feature.jpg") }} style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 my-lg-5 py-lg-5 text-center">
                    <div class="p-5">
                        <h1 class="display-5 mb-4">Mengapa Harus Kami?</h1>
                        <p>Kami memberikan pelayanan 100% ramah kepada pelanggan. Pelayanan terbaik untuk semua pelanggan 2-Cool Servis AC.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

    <!-- Services Start -->
    {{-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-5">Professional Painting Services</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
            </div>
            <div class="row gy-4 gx-3">
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-paint-brush"></i></div>
                        </div>
                        <h3 class="mt-5">Servis AC</h3>
                        <a class="btn shadow-none text-secondary" href="">View Detail<i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-paint-roller"></i></div>
                        </div>
                        <h3 class="mt-5">Perawatan AC</h3>
                        <a class="btn shadow-none text-secondary" href="">View Detail<i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-brush"></i></div>
                        </div>
                        <h3 class="mt-5">Floor Coating</h3>
                        <a class="btn shadow-none text-secondary" href="">View Detail<i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-eraser"></i></div>
                        </div>
                        <h3 class="mt-5">Graffiti Removal</h3>
                        <a class="btn shadow-none text-secondary" href="">View Detail<i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-spray-can"></i></div>
                        </div>
                        <h3 class="mt-5">Mildew Removal</h3>
                        <a class="btn shadow-none text-secondary" href="">View Detail<i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-city"></i></div>
                        </div>
                        <h3 class="mt-5">Window Washing</h3>
                        <a class="btn shadow-none text-secondary" href="">View Detail<i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Services End -->


    <!-- Quote Start -->
    <div class="container-fluid bg-quote py-5" id="quote" style="background-image:url({{ asset('front/img/bg.jpg') }})">
        <div class="container py-5">
            <div class="row g-0 justify-content-start">
                <div class="col-lg-6">
                    <div class="bg-white text-center p-5">
                        <h1 class="mb-4">Berikan Komentarmu</h1>
                        <form action="/komentar" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0 py-3" rows="2" name="komentar" placeholder="Tulis Komentarmu Disini"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-info w-100 py-3" type="submit">Kirim Komentar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

    {{-- Komentar --}}
    {{-- <div class="container-fluid">
        <h4 class="text-center">Komentar Terbaru</h4>
        <div class="container py-5">
            @foreach ($komentars as $komentar)
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $komentar->user->name }}</h5>
                  <p class="card-text">{{ $komentar->komentar }}</p>
                </div>
                <div class="text-end">
                {{ Carbon\Carbon::parse($komentar->created_at)->format('H:i, d-m-Y') }}
                </div>
              </div>
            @endforeach
        </div>
    </div> --}}
    {{-- End Komentar --}}


    <!-- Team Start -->
    {{-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-5">Dedicated Team Members</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
            </div>
            <div class="row g-3">
                @foreach ($teknisis as $teknisi)
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <img class="img-fluid w-100" src={{ asset('storage/' . $teknisi->foto) }} alt="">
                        <div class="team-text">
                            <div class="team-social">
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="mt-auto mb-3">
                                <h4 class="mb-1 text-center">{{ $teknisi->nama_teknisi }}</h4>
                                <span class="text-uppercase">Designation</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial py-5">
        <div class="container py-5">
            <div class="row g-0 justify-content-end">
                <div class="col-lg-6" style="background-image: url({{ asset('front/img/komentar.png') }})">
                
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 mb-4 text-center">Komentar Para Klien</h1>
                    <div class="owl-carousel testimonial-carousel">
                        @foreach ($komentars as $komentar) 
                        <div class="card">
                            <div class="card-body">
                              <blockquote class="blockquote mb-0">
                                <p class="fw-bold">{{ $komentar->komentar }}</p>
                                <footer class="blockquote-footer">{{ $komentar->user->name }}</footer>
                              </blockquote>
                              @isset($komentar->balaskomen->balas_komentar)
                              <blockquote class="blockquote mb-0 text-end">
                                <p class="fw-bold">{{ @$komentar->balaskomen->balas_komentar }}</p>
                                <footer class="blockquote-footer">Balasan Admin</footer>
                              </blockquote>
                              @endisset
                            </div>
                          </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    {{-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-5">Latest Articles From Painting Blog</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
            </div>
            <div class="row g-3">
                <div class="col-xl-4 col-lg-6">
                    <div class="blog-item bg-primary">
                        <img class="img-fluid w-100" src={{ asset("front/img/blog-1.jpg") }} alt="">
                        <div class="d-flex align-items-center">
                            <div class="bg-secondary mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4" style="width: 60px; height: 100px;">
                                <i class="fa fa-calendar-alt text-primary mb-2"></i>
                                <p class="m-0 text-white">Jan 01</p>
                                <small class="text-white">2045</small>
                            </div>
                            <a class="h4 m-0 text-truncate me-4" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                        </div>
                        <div class="d-flex justify-content-between border-top border-secondary p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src={{ asset("front/img/user.jpg") }} width="30" height="30" alt="">
                                <small class="text-uppercase">John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="fa fa-eye text-secondary me-2"></i>12345</small>
                                <small class="ms-3"><i class="fa fa-comment text-secondary me-2"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="blog-item bg-primary">
                        <img class="img-fluid w-100" src={{ asset("front/img/blog-2.jpg") }} alt="">
                        <div class="d-flex align-items-center">
                            <div class="bg-secondary mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4" style="width: 60px; height: 100px;">
                                <i class="fa fa-calendar-alt text-primary mb-2"></i>
                                <p class="m-0 text-white">Jan 01</p>
                                <small class="text-white">2045</small>
                            </div>
                            <a class="h4 m-0 text-truncate me-4" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                        </div>
                        <div class="d-flex justify-content-between border-top border-secondary p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src={{ asset("front/img/user.jpg") }} width="30" height="30" alt="">
                                <small class="text-uppercase">John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="fa fa-eye text-secondary me-2"></i>12345</small>
                                <small class="ms-3"><i class="fa fa-comment text-secondary me-2"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="blog-item bg-primary">
                        <img class="img-fluid w-100" src={{ asset("front/img/blog-3.jpg") }} alt="">
                        <div class="d-flex align-items-center">
                            <div class="bg-secondary mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4" style="width: 60px; height: 100px;">
                                <i class="fa fa-calendar-alt text-primary mb-2"></i>
                                <p class="m-0 text-white">Jan 01</p>
                                <small class="text-white">2045</small>
                            </div>
                            <a class="h4 m-0 text-truncate me-4" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                        </div>
                        <div class="d-flex justify-content-between border-top border-secondary p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src={{ asset("front/img/user.jpg") }} width="30" height="30" alt="">
                                <small class="text-uppercase">John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="fa fa-eye text-secondary me-2"></i>12345</small>
                                <small class="ms-3"><i class="fa fa-comment text-secondary me-2"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Blog End -->


    <!-- Call To Action Start -->
    {{-- <div class="container-fluid bg-primary bg-call-to-action py-5" style="margin-top: 90px;">
        <div class="container py-5">
            <div class="row g-0 justify-content-start">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-4">Do You Have Any Project?</h1>
                    <p class="fs-4 fw-normal">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                    <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Contact Us</a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Call To Action Start -->
@endsection