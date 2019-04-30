@extends('layouts.dashboard')

@section('content')
  @forelse ($users as $user)
    <div class="pemisah"></div>
    <div class="card-article">
      <p>{{ $user->name }}</p>
      <p>{{ $user->launderer->lokasi }}</p>
    </div>
  @empty
    <div class="pemisah"></div>
    <div class="card-article">
      <p>No users</p>
    </div>
  @endforelse
@endsection