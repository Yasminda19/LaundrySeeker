@extends('layouts.dashboard')

@section('content')
<div class="page-wrapper">
<div class="container-fluid">
  <script>var harga = {{ $paket->harga }} ;</script>
  <div class="pemisah"></div>
  <div class="card-article">
    <form method="POST" action="/order/new/{{ $paket->paket_id }}">
    @csrf
      <input value="{{ $paket->paket_id }}" name="paket_id" type="hidden">
      <div class="form-group">
        <label for="name">Type</label>
        <input class="form-control" type="text" value="{{ $paket->name }} @ Rp{{ $paket->harga}}/kg [{{ $paket->launderer->user->name }}]" disabled>
      </div>
      <div class="form-group">
        <label for="name">Quantity</label>
        <input class="form-control" type="text" name="qty">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>
@endsection