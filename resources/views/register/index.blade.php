<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Title Page-->
    <title>Registrasi Duluu | 2-Cool</title>

    <!-- Icons font CSS-->
    <link href={{ asset("register/vendor/mdi-font/css/material-design-iconic-font.min.css") }} rel="stylesheet" media="all">
    <link href={{ asset("register/vendor/font-awesome-4.7/css/font-awesome.min.css") }} rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href={{ asset("register/vendor/select2/select2.min.css") }} rel="stylesheet" media="all">
    <link href={{ asset("register/vendor/datepicker/daterangepicker.css") }} rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href={{ asset("register/css/main.css") }} rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Form Registrasi</h2>
                    <form method="POST" action="/sign-up">
                        @csrf
                        {{-- <div class="row row-space"> --}}
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label">Nama Lengkap</label>
                                    <input class="input--style-4" type="text" name="name">
                                </div>
                            </div>
                            {{-- <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div> --}}
                        {{-- </div> --}}
                        {{-- <div class="row row-space"> --}}
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label">Alamat</label>
                                    <input class="input--style-4" type="text" name="alamat">
                                    {{-- <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div> --}}
                                </div>
                            </div>
                            {{-- <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div> --}}
                        {{-- </div> --}}
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="no_telepon">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Password</label>
                            <input class="input--style-4" type="password" name="password">
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src={{ asset("register/vendor/jquery/jquery.min.js") }}></script>
    <!-- Vendor JS-->
    <script src={{ asset("register/vendor/select2/select2.min.js") }}></script>
    <script src={{ asset("register/vendor/datepicker/moment.min.js") }}></script>
    <script src={{ asset("register/vendor/datepicker/daterangepicker.js") }}></script>

    <!-- Main JS-->
    <script src={{ asset("register/js/global.js") }}></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->