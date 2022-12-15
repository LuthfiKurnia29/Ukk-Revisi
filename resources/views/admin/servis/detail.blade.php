@extends('admin.layouts.index')
@section('container')
    <div class="container">
        <div class="card m-5">
          <div class="card-header text-center">Detail Servis</div>
          <div class="card-body">
           <form action="/servis-dashboard" method="post">
            @csrf
            <div class="row row-space">
              <div class="col-6">
                <label for="" class="form-label">Nama User</label>
                <input type="text" name="user_id" value="{{ @$detail->booking->user->name }}" id="">
              </div>
            </div>
           </form>
          </div>
        </div>
    </div>
@endsection