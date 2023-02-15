@extends('front.layouts.main')
@section('container')
    <!--================Checkout Area =================-->

    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap mt-5">
        <div class="container">
            <div class="profile">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h3 class="text-center">Profile Saya</h3>
                        <form action="{{ url('/profil-user') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 text-center">
                                    <label for="avatar" class="mb-4" style="cursor: pointer; position: relative">
                                        <input type="file" accept="image/*" class="d-none" id="avatar" name="avatar"
                                            accept=".png, .jpg, .jpeg" onchange="previewImage()">
                                        <span class="btn bg-white rounded-circle shadow"
                                            style="position: absolute; top: -10px; right: -10px">
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                        @if (isset($profil->avatar))
                                        <img src="{{ asset('storage/' . $profil->avatar) }}" width="100px" alt="">
                                        @else
                                        
                                        @endif
                                    {{-- <img width="100px"
                                        src="{{ isset(@$user->avatar) ? asset('avatar/' . @$user->avatar) : asset('/assets/media/svg/avatars/blank.svg') }}"
                                        class="rounded" id="avatar-preview" alt="image"> --}}
                                    </label>
                                </div>


                                <div class="row mb-6">
                                    <label class="col-lg-4 required form-label">Nama :</label>
                                    <div class="col-lg-8">
                                        <input type="text" placeholder="Name" name="name"
                                            class="form-control mb-2" value="{{ $profil->name }}">
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label class="col-lg-4 required form-label">Email :</label>
                                    <div class="col-lg-8">
                                        <input type="text" placeholder="Email" name="email"
                                            class="form-control mb-2" value="{{ $profil->email }}">
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label class="col-lg-4 required form-label">Nomer Telepon :</label>
                                    <div class="col-lg-8">
                                        <input type="text" placeholder="No Telp" name="no_telepon"
                                            class="form-control mb-2" value="{{ $profil->no_telepon }}">
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label class="col-lg-4 required form-label">Alamat :</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="alamat"
                                            class="form-control mb-2" value="{{ @$profil->alamat }}">
                                    </div>
                                </div>

                            </div>
                            <div class="form-action ">
                                <button type="submit" class="btn btn-primary btn-large mb-2 me-2">SAVE</button>
                                <a href="/" type="button" class="btn btn-danger btn-large mb-2 me-2">
                                    </i> CANCEL
                                </a>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

    </section>


    <!--================End Checkout Area =================-->
    <!--================End Checkout Area =================-->
@endsection