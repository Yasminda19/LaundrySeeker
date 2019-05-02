@extends('layouts.dashboard')

@section('content')
  @forelse ($pakets as $paket)
  <div class="pemisah"></div>
  <div class="card-article">
    <p>{{ $paket->name }}</p>
    <p>{{ $paket->harga }}</p>
    <p>{{ $paket->launderer->lokasi }}</p>
    <form method="POST" action="/setting/paket/{{ $paket->paket_id }}">
      @csrf
      @method('DELETE')
      <button type="submit">{{ __('Hapus') }}</button>
    </form>
  </div>
  @empty
  @endforelse

  <div class="pemisah"></div>
  <div class="card-article">
    <form method="POST" action="/setting/paket">
    @csrf
      <div class="form-group">
        <label for="name">Nama</label>
        <input type="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Deskripsi</label>
        <input type="text" name="desc" required>
      </div>
      <div class="form-group">
        <label for="harga">Harga</label>
        <input type="text" name="harga" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection