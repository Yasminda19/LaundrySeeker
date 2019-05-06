@extends('layouts.dashboard')

@section('content')
<div class="page-wrapper">
<div class="container-fluid">
    <div class="card">
      <div class="table-responsive">
        <table class="table no-margin">
          <thead>
          <tr>
            <th>Nama Paket</th>
            <th>Harga</th>
            <th>Waktu Pengerjaan</th>
            <th><i class="fa fa-gear"></i> Sesuatu</th>
          </tr>
          </thead>
          <tbody>
          @forelse ($pakets as $paket)
            <tr>
              <td>{{ $paket->name }}</td>
              <td>{{ $paket->harga }}/kg</td>
              <td><span class="label label-success">{{ $paket->desc }}</span></td>
              <td>
                <form method="POST" action="/manage/paket/{{ $paket->paket_id }}">@csrf @method('DELETE')
                  <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> {{ __('Hapus') }}</button>
                </form>
                <a href="#/manage/paket/{{ $paket->paket_id }}" class="btn btn-primary"><i class="fa fa-gear"></i> Ubah</a>
              </td>
            </tr>
            @empty
          @endforelse
          </tbody>
        </table>
      </div>
    </div>
  <div class="pemisah"></div>
  <div class="card-article">
    <h1>Tambah Paketan</h1>
    <form method="POST" action="/manage/paket">
    @csrf
      <div class="form-group">
        <label for="name">Nama</label>
        <input class="form-control" type="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Deskripsi</label>
        <input class="form-control" type="text" name="desc" required>
      </div>
      <div class="form-group">
        <label for="harga">Harga</label>
        <input class="form-control" type="text" name="harga" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <div class="pemisah"></div>
</div>
</div>
@endsection