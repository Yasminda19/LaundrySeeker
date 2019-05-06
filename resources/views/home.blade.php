@extends('layouts.dashboard')

@section('content')
<div class="page-wrapper">
<div class="container-fluid">
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h4 class="text-themecolor">CARI LAUNDRY</h4>
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
  <div class="container">
    <h1><center>LAUNDRY DI SEKITAR {{ $loc }}</center></h1>
    @for ($i = 0; $i < count($launderers); $i += 3)
      <div class="pemisah"></div>
      <div class="row">
      @for ($j = $i; $j < count($launderers) && $j < $i + 3; $j++)
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{URL::asset('images/gambarlaundry/86487-5098f4378f9135337e98a752d18d109a.JPG')}}" alt="Card image cap">
            <div class="card-body" style="align-items:center;">
              <h5 class="card-title"><b>{{ $launderers[$j]->user->name }}</b></h5>
              <span class="label label-success">BUKA SEKARANG</span>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">{{ $launderers[$j]->desc }}</li>
              <li class="list-group-item">{{ $launderers[$j]->lokasi }}</li>
              <li class="list-group-item">{{ $launderers[$j]->user->nohp }}</li>
            </ul>
            <div class="card-body">
              <a href="/paket/{{ $launderers[$j]->user_id }}" class="card-link">Buka Laundry</a>
            </div>
          </div>
        </div>
      @endfor
      </div>
    @endfor
  </div>
</div>
</div>
@endsection