@extends('layouts.dashboard')

@section('content')
<div class="page-wrapper">
<div class="container-fluid">
  <div class="content-wrapper" style="margin:40px">
    <div class="apa-ini">
      @isset($orders)
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
              <tr>
                <th>Launderer</th>
                <th>Harga</th>
                <th>Status</th>
                <th><i class="fa fa-gear"></i> Sesuatu</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($orders as $order)
              <tr>
                <td>{{ $order->launderer->user->name }} [{{ $order->launderer->user->nohp }}]</td>
                <td>{{ $order->harga }}</td>
                @switch($order->status_code)
                    @case(0)
                      <td><span class="label label-warning">Pengambilan Cucian</span></td>
                      @break
                    @case(1)
                      <td><span class="label label-primary">Cucian Dalam Proses</span></td>
                      @break
                    @case(2)
                      <td><span class="label label-success">Cucian Selesai</span></td>
                      @break
                    @case(3)
                      <td><span class="label label-danger">Tidak Jadi</span></td>
                      @break
                    @default
                      <td><span class="label label-danger">Tidak Jadi</span></td>
                      @break
                  @endswitch
                  <td>
                    <form method="POST" action="/order/{{ $order->id }}">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      @endisset
    </div>
  </div>

  @empty($orders)
    <div class="pemisah"></div>
    <div class="card-article" style="min-height:100px">
    <div class="alert alert-warning" role="alert">
      what the fuck
    </div>
  </div>
  @endempty
</div>
</div>
@endsection