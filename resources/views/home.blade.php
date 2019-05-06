@extends('layouts.dashboard')

@section('content')
  @forelse ($launderers as $launderer)
      <div class="pemisah"></div>
      <div class="card-article">
        <div class="form-group">
          <label>Nama Toko</label>
          <input value="{{ $launderer->user->name }}" class="form-control" disabled>
        </div>
        <div class="form-group">
          <label>Nomor HP</label>
          <input value="{{ $launderer->user->nohp }}" class="form-control" disabled>
        </div>
        <div class="form-group">
          <label>Lokasi</label>
          <input value="{{ $launderer->lokasi }}" class="form-control" disabled>
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea class="form-control" disabled>{{ $launderer->desc }}</textarea>
        </div>
        <a href="/paket/{{ $launderer->user_id }}" class="btn btn-primary">View</a>
      </div>
  @empty
    <div class="pemisah"></div>
    <div class="card-article">
      <p>No users</p>
    </div>
  @endforelse
@endsection