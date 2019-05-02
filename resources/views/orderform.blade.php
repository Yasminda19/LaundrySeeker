@extends('layouts.dashboard')

@section('content')
  <script>var harga = {{ $paket->harga }} ;</script>
  <div class="pemisah"></div>
  <div class="card-article">
    <form method="POST" action="/order">
    @csrf
      <input value="{{ $id }}" name="id" type="hidden">
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
@endsection