@extends('layouts.dashboard')

@section('content')
<div class="page-wrapper">
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <H1><b>PROFIL</b></H1>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="Container">
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30"> <img src='{{URL::asset("/images/".Auth::user()->image_path)}}' class="img-circle" width="150" />
                        <h4 class="card-title m-t-10">{{ Auth::user()->name }}</h4>
                        <h6 class="card-subtitle">
                            @if (Auth::user()->type === "launderer")
                                Yang Nge-Laundry
                            @else
                                Pengguna Laundry
                            @endif
                        </h6>
                        <div class="row text-center justify-content-md-center"></div>
                    </center>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="/manage/profile/image" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image">Upload Picture</label>
                            <input type="file" name="image" class="form-control form-control-file">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <!-- Tab panes -->
                <div class="card-body">
                    <form class="form-horizontal form-material" action="/manage/profile" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="col-md-12">Full Name</label>
                            <div class="col-md-12">
                                <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control form-control-line" name="example-email" id="example-email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Phone No</label>
                            <div class="col-md-12">
                                <input type="text" name="nohp" value="{{Auth::user()->nohp}}" class="form-control form-control-line">
                            </div>
                        </div>
                        @if (Auth::user()->type === "launderer")
                            <div class="form-group">
                                <label class="col-md-12">Lokasi</label>
                                <div class="col-md-12">
                                    <input type="text" name="lokasi" class="form-control form-control-line" value="{{Auth::user()->launderer->lokasi}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Message</label>
                                <div class="col-md-12">
                                    <textarea name="desc" rows="5" class="form-control form-control-line">{{Auth::user()->launderer->desc}}</textarea>
                                </div>
                            </div>
                        @endif
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="pemisah"></div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
@endsection