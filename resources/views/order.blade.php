@extends('layouts.dashboard')

@section('content')
    <div class="pemisah"></div>
    @forelse ($orders as $order)
    <div class="pemisah"></div>
    <div class="card-article">
      <p>{{ $order->paket->name }} @ Rp{{ $order->paket->harga }}/kg [{{ $order->launderer->user->name }}] </p>
      <p>{{ $order->launderer->user->nohp }}</p>
      <p>{{ $order->qty }} kg</p>
      <p>Rp{{ $order->harga }}</p>
      <form method="POST" action="/order/{{ $order->id }}">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    </div>
  @empty
    <div class="pemisah"></div>
    <div class="card-article" style="min-height:100px">
    <div class="alert alert-warning" role="alert">
      what the fuck, get some order(s) man!
    </div>
  </div>
  @endforelse
@endsection