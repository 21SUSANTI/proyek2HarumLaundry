@extends('layouts.backend')
@section('title','Profile')
@section('content')
@if($message = Session::get('success'))
  <div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
  </div>
@endif
<div class="row">
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <div class="col text-center">
                    <div class="m-t-30"> <img src="{{asset('backend/images/profile/profile.jpeg')}}" class="rounded" width="230" />
                        <h4 class="card-title m-t-10">{{$user->name}}
                        </h4>
                        <h6 class="card-subtitle">Karyawan</h6>
                    </div>
                </div>
            </div>
            <div>
              <hr>
            </div>

            <div class="card-body"> <small class="text-muted">Email address </small>
                <h6>{{$user->email}}</h6> <small class="text-muted p-t-30 db">Phone</small>
                <h6>{{$user->no_telp}}</h6> <small class="text-muted p-t-30 db">Address</small>
                <h6>{{$user->alamat}}</h6>
                <small class="text-muted p-t-30 db">Social Profile</small>
                <br/>
                <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>

                <div class="d-flex justify-content-between">
              <a href="{{url('profile-karyawan/edit', Auth::user()->id)}}" class="btn btn-primary mt-2">Edit</a>
              <a href="" data-toggle="modal" data-target="#change_password" class="btn btn-warning mt-2">Change Password</a>
            </div>
            </div>

        </div>
    </div>

    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Coming Soon</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Coming Soon</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Coming Soon</a> </li>
            </ul>

            <div class="card-body">
                <h3>Harum Laundry yang sudah berdiri sejak tahun 2011 dengan konsep Pelayanan Terbaik (Best Service) untuk memenuhi harapan dan kebutuhan pelanggan berupa laundry ber-GARANSI. <br>
                Adapun garansi yang kami berikan, antara lain: <br><br></h3>
                <h2>One customer one process<br>
                Penyelesaian sesuai jadwal yang ditentukan<br>
                Cuci setrika rapi <br>
                Penggantian bila ada barang hilang/rusak<br>
                Ambil – Antar GRATIS Kota Sidoarjo dengan syarat dan ketentuan berlaku. !!!</h2>
            </div>
        </div>
    </div>
</div>
@include('karyawan.profile.modal')
@endsection