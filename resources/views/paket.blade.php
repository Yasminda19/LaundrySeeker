@extends('layouts.dashboard')

@section('content')
  @forelse ($pakets as $paket)
  <div class="pemisah"></div>
  <div class="card-article">
    <p>Nama: {{ $paket->name }}</p>
    <p>Harga: {{ $paket->harga }}</p>
    <p>Deskripsi: {{ $paket->desc }}</p>
    <p>Lokasi: {{ $paket->launderer->lokasi }}</p>
    <a href="/order/new/{{ $paket->paket_id }}" class="btn btn-primary"><i class="fa fa-plus"></i> Buat pesanan</a>
  </div>
  @empty
  <div class="pemisah"></div>
  <div class="card-article">
    <label for="">Tidak Ada Paket</label>
  </div>
  @endforelse
@endsection