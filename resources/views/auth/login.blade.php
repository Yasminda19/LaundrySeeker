@extends('layouts.base')

@section('content')
<div class="bgsign">
<div class="apaini">
    <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
        <h1 style="color: #464947; text-emphasis: bold;">SEKARANG TIDAK PERLU REPOT MEMBAWA LAUNDRY SENDIRI</h1>
        <div class="card" style="width: 20rem;">
            <span class="border">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Daftar</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Emailmu">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required id="exampleInputPassword1" placeholder="Masukkan Passwordmu">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Ingat saya') }}
                        </label>
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
