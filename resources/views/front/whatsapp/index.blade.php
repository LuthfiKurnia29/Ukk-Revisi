@extends('front.layouts.main')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <form action="{{ url('form-send') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="\">No WA</label>
                    <input type="text" name="no_wa" class="form-control" id="" placeholder="No WA">
                </div>
                <div class="form-group">
                    <label for="\">Pesan</label>
                    <textarea name="pesan" class="form-control" cols="30" rows="5" placeholder="Pesan"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection