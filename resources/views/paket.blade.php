@extends('layouts.dashboard')

@section('content')
  @forelse ($pakets as $paket)
  <div class="pemisah"></div>
  <div class="card-article">
    <p>{{ $paket->name }}</p>
    <p>{{ $paket->harga }}</p>
    <p>{{ $paket->desc }}</p>
    <p>{{ $paket->launderer->lokasi }}</p>
    <a href="/order/new/{{ $paket->paket_id }}"><i class="fa fa-plus"></i>Buat pesanan</a>
  </div>
  @empty
  <div class="pemisah"></div>
  <div class="card-article">
    <label for="">Tidak Ada Paket</label>
  </div>
  @endforelse
@endsection