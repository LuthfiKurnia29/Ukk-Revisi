@extends('front.layouts.main')
@section('container')
    <div class="container p-5">
        <h2 class="text-center">Pilih Bank</h2>
        <p class="text-center">Silahkan Pilih Bank Untuk Melanjutkan Ke Pembayaran</p>
        <form action={{ url('/konfirmasi-bayar/' . $detail->id ) }} method="post">
          @csrf
        <ul class="list-group">
            @foreach ($banks as $bank)
            <li class="list-group-item">
              <input class="form-check-input me-1" type="radio" name="bank_id" value="{{ $bank->id }}" required>
              <label class="form-check-label" for="firstRadio"><img src="{{ asset('storage/'. $bank->logo) }}" style="margin-left:2em" width="100" alt=""></label>
            </li>
            @endforeach
            <button type="submit" class="btn btn-success">Lanjut</button>
          </ul>
        </form>
    </div>
@endsection