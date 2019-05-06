@extends('layouts.dashboard')

@section('content')
<div class="page-wrapper">
<div class="container-fluid">
  <div class="row page-titles">
      <div class="col-md-5 align-self-center">
          <H1><b>Manage Orders</b></H1>
      </div>
      <div class="col-md-7 align-self-center text-right">
          <div class="d-flex justify-content-end align-items-center">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item">Manage</li>
                  <li class="breadcrumb-item active">Order</li>
              </ol>
          </div>
      </div>
  </div>
  <div class="content-wrapper" style="margin:40px">
    <div class="apa-ini">
      @isset($orders)
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
              <tr>
                <th>User</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Status</th>
                <th style="text-align:center"><i class="fa fa-gear"></i> Sesuatu</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($orders as $order)
                <tr>
                  <td>{{ $order->user->name }} [{{ $order->user->nohp }}]</td>
                  <td>{{ $order->qty }}</td>
                  <td>{{ $order->harga }}</td>
                  @switch ( $order->status_code )
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
                  @endswitch
                  <td>
                    <form method="POST" action="/order/{{ $order->id }}">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                      <a href="/manage/order/{{ $order->id }}" class="btn btn-primary"><i class="fa fa-gear"></i> Update</a>
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

      @empty($orders)
      <div class="card">
        <div class="card-header">
          <h2>Update Status</h2>
        </div>
        <div class="card-body">
          <form class="form-horizontal form-material" action="/manage/order" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" value="{{ $order->id }}" name="id">
            <div class="row col-md-12">
              <div class="form-group col-md-3">
                <label>Order ID</label>
                <input type="text" value="{{$order->id}}" class="form-control form-control-line" disabled>
              </div>
              <div class="form-group col-md-3">
                <label>User</label>
                <input type="text" value="{{$order->user->name}} [{{$order->user->nohp}}]" class="form-control form-control-line" disabled>
              </div>
              <div class="form-group col-md-6">
                <label>Paket</label>
                <input type="text" value="{{$order->paket->name}}" class="form-control form-control-line" disabled>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Status</label>
              <select name="status" class="form-control" id="exampleFormControlSelect1">
                <option value="0">Pengambilan Cucian</option>
                <option value="1">Cuian Dalam Proses</option>
                <option value="2">Cucian Selesai</option>
                <option value="3">Tidak Jadi</option>
              </select>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-success">Update Status Order</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      @endempty
    </div>
  </div>
</div>
</div>
@endsection