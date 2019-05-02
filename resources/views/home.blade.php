@extends('layouts.dashboard')

@section('content')
  @forelse ($launderers as $launderer)
    <a href="/paket/{{ $launderer->user_id }}">
      <div class="pemisah"></div>
      <div class="card-article">
        <p>{{ $launderer->user->name }}</p>
        <p>{{ $launderer->lokasi }}</p>
        <p>{{ $launderer->desc }}</p>
      </div>
    </a>
  @empty
    <div class="pemisah"></div>
    <div class="card-article">
      <p>No users</p>
    </div>
  @endforelse
@endsection