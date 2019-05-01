@extends('layouts.dashboard')

@section('content')
  @forelse ($launderers as $launderer)
    <div class="pemisah"></div>
    <div class="card-article">
      <p>{{ $launderer->user->name }}</p>
      <p>{{ $launderer->lokasi }}</p>
    </div>
  @empty
    <div class="pemisah"></div>
    <div class="card-article">
      <p>No users</p>
    </div>
  @endforelse
@endsection