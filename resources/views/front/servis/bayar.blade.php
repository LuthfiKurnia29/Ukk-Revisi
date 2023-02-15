@extends('front.layouts.main')
@section('container')
    <div class="container mt-5">
      <div class="d-flex justify-content-end mb-3">
        <a href="/cetak-invoice/{{ $bayar->id }}" type="button" class="btn btn-outline-danger">Download PDF</a>
      </div>
            <div class="card-body">
              <li class="d-flex justify-content-between" style="list-style: none">No. Invoice <span class="fw-bold">{{ $bayar->no_invoice }}</span></li>
              <p class="card-text"><small class="text-muted"></small></p>
            </div>
          </div>
    </div>
@endsection