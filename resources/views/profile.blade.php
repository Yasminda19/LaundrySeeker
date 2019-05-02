@extends('layouts.dashboard')

@section('content')
    <div class="pemisah">
        <div class="card-article">
            <form method="POST" action="/manage/profile">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ Auth::user()->name }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email }}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="nohp">No. HP</label>
                    <input type="text" class="form-control{{ $errors->has('nohp') ? ' is-invalid' : '' }}" name="nohp" value="{{ Auth::user()->nohp }}" required>
                    @if ($errors->has('nohp'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nohp') }}</strong>
                        </span>
                    @endif
                </div>
                    @if (Auth::user()->type === "launderer")
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" class="form-control" name="lokasi" value="{{ Auth::user()->launderer->lokasi }}" required>
                    </div>
                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea class="form-control" name="desc" required>{{ Auth::user()->launderer->desc }}</textarea>
                    </div>
                    @endif
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection