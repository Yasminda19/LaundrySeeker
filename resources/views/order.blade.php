@extends('layouts.dashboard')

@section('content')
{{-- {{!! dd($orders); !!}} --}}
  @forelse ($orders as $order)
    <div class="pemisah"></div>
    <div class="card-article">
      <p>{{ $order->paket->name }} @ Rp{{ $order->paket->harga }}/kg [{{ $order->launderer->user->name }}] </p>
      <p>{{ $order->qty }} kg</p>
      <p>Rp{{ $order->harga }}</p>
    </div>
  @empty
    <div class="pemisah"></div>
    <div class="alert alert-warning" role="alert">
      what the fuck, get some order(s) man!
    </div>
  @endforelse
@endsection