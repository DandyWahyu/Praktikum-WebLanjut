@extends('mahasiswas.layout')
@section('content')
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Detail Mahasiswa
</div>
<div class="card-body">
    <div>
        @if($Mahasiswa->image_profile)
        <img src="{{ asset('storage/images/'.$Mahasiswa->image_profile) }}" width="150px" height="150px" alt="">
        @else
        <img src="{{ asset('images/default.png') }}" width="150px" height="150px" alt="">
        @endif
    </div>
    <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Nim: </b>{{$Mahasiswa->id}}</li>
    <li class="list-group-item"><b>Nama: </b>{{$Mahasiswa->Nama}}</li>
    <li class="list-group-item"><b>Kelas: </b>{{$Mahasiswa->kelas->nama_kelas}}</li>
    <li class="list-group-item"><b>Jurusan: </b>{{$Mahasiswa->Jurusan}}</li>
    <li class="list-group-item"><b>No_Handphone: </b>{{$Mahasiswa->No_Handphone}}</li>
    </ul>
    </div>
    <a class="btn btn-success mt-3" href="{{ route('mahasiswas.index') }}">Kembali</a>
    </div>
    </div>
    </div>
    @endsection