@extends('layouts.dashboard')

@section('content')
  @forelse ($pakets as $paket)
  <div class="pemisah"></div>
  <div class="card-article">
    <p>{{ $paket->name }}</p>
    <p>{{ $paket->harga }}</p>
    <p>{{ $paket->launderer->lokasi }}</p>
  </div>
  @empty
  <div class="pemisah"></div>
  <div class="card-article">
    <label for="">Tidak Ada Paket</label>
  </div>
  @endforelse
@endsection