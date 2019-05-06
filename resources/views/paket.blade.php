@extends('layouts.dashboard')

@section('content')
<div class="page-wrapper">
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
              <H1><b>{{$launderer->user->name}}</b></H1>
              <a class="btn waves-effect waves-light btn-success hidden-md-down" style="color:#fff">{{$launderer->desc}}</a>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Cari Laundry</li>
                </ol>
            </div>
          </div>
        </div>
    </div>
    <div class="content-wrapper" style="margin:40px">
        <div class="apa-ini">
          <div class="card" style="width: 70%"> <span class="border">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Paket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Item</a>
                </li>
                </ul>
            </div>
            <div class="card">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Nama Paket</th>
                    <th>Harga</th>
                    <th>Waktu Pengerjaan</th>
                  </tr>
                  </thead>
                  <tbody>
                  @forelse ($pakets as $paket)
                    <tr>
                      <td>{{ $paket->name }}</td>
                      <td>{{ $paket->harga }}/kg</td>
                      <td><span class="label label-success">{{ $paket->desc }}</span></td>
                      <td><a href="/order/new/{{ $paket->paket_id }}" class="btn btn-primary"><i class="fa fa-plus"></i> Buat pesanan</a></td>
                    </tr>
                    @empty
                  @endforelse
                  </tbody>
                </table>
              </div>
            </div>
            </div>
          </div>
    </div>
</div>
@endsection