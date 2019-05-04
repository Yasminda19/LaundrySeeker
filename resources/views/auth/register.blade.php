@extends('layouts.base')

@section('content')
<script>
var newDiv;
function appendNewDiv(){
  newDiv = '<div class="form-group" id="lokasi">';
  newDiv += '<label for="lokasi">Lokasi</label>';
  newDiv += '<input type="text" name="lokasi" class="form-control" required placeholder="Kamu dimana?">';
  newDiv += '</div>';
  
  if ($('.lokasi').children().length == 0) $('.lokasi').append(newDiv);
}
</script>
<div class="bg">
    <div class="apaini">
    <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
        <h1 style="color: #464947; text-emphasis: bold;">SEKARANG TIDAK PERLU REPOT MEMBAWA LAUNDRY SENDIRI</h1>
        <div class="card" style="width: 20rem;">
            <span class="border">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Daftar</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="nohp">{{ __('No. HP') }}</label>
                        <input type="text" class="form-control" name="nohp" value="{{ old('nohp') }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                        @if ($errors->has('nohp'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nohp') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Masukkan Emailmu">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required id="exampleInputPassword1" placeholder="Masukkan Passwordmu">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    </div>
                    <div class="form-group">
                            <label for="exampleInputPassword2">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2" required placeholder="Masukkan Passwordmu Kembali">
                    </div>
                    <div class="lokasi">
                        <div class="form-group" id="lokasi">
                            <label for="lokasi">Lokasi</label>
                            <input type="password" name="lokasi" class="form-control" required placeholder="Kamu dimana?">
                        </div>
                    </div>
                    <div class="text">
                        <h6>Siapakah Anda?</h6>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" value="launderer" class="custom-control-input" id="defaultInline1" name="type" onclick="appendNewDiv()">
                        <label class="custom-control-label" for="defaultInline1">Launderer</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" value="user" class="custom-control-input" id="defaultInline2" name="type" onclick="$('#lokasi').remove()">
                        <label class="custom-control-label" for="defaultInline2">Pengguna</label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            </span>
            </div>
        </div>
    </div>
</div>
@endsection
