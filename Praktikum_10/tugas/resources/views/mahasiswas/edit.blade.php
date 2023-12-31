@extends('mahasiswas.layout')
@section('content')
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Edit Mahasiswa
</div>
<div class="card-body">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form method="post" action="{{ route('mahasiswas.update', $Mahasiswa->id) }}" id="myForm">
@csrf
@method('PUT')
{{-- <div class="form-group">
    <label for="Nim">Nim</label>
    <input type="text" name="Nim" class="form-control" id="Nim" value="{{ $Mahasiswa->id }}" ariadescribedby="Nim" >
    </div> --}}
    <div>
        @if($Mahasiswa->image_profile)
        <img src="{{ asset('storage/images/'.$Mahasiswa->image_profile) }}" width="150px" height="150px" alt="">
        @else
        <img src="{{ asset('images/default.png') }}" width="150px" height="150px" alt="">
        @endif
    </div>
    <div class="form-group">
    <label for="Nama">Nama</label>
    <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $Mahasiswa->Nama }}" ariadescribedby="Nama" >
    </div>
    <div class="form-group">
    <label for="Kelas">Kelas</label>
    <select  class="form-control" name="Kelas">
        <option value="">Pilih Kelas</option>
        @foreach ($kelas as $kls)
        <option value="{{ $kls->id }}" {{$Mahasiswa->kelas_id == $kls->id ? 'selected' : ''}}>{{ $kls->nama_kelas }}</option>
        @endforeach
    </select>
    </div>
    <div class="form-group">
    <label for="Jurusan">Jurusan</label>
    <input type="text" name="Jurusan" class="form-control" id="Jurusan" value="{{ $Mahasiswa->Jurusan }}" ariadescribedby="Jurusan" >
    </div>
    <div class="form-group">
    <label for="No_Handphone">No_Handphone</label>
    <input type="text" name="No_Handphone" class="form-control" id="No_Handphone" value="{{ $Mahasiswa->No_Handphone }}" ariadescribedby="No_Handphone" >
    </div>
    <div class="form-group">
    <label for="Email">Email</label>
    <input type="email" name="Email" class="form-control" id="Email" value="{{ $Mahasiswa->Email }}" ariadescribedby="Email" >
    </div>
    <div class="form-group">
    <label for="Tgl_Lahir">Tgl_Lahir</label>
    <input type="date" name="Tgl_lahir" class="form-control" id="Tgl_Lahir" value="{{ $Mahasiswa->Tgl_lahir }}" ariadescribedby="Tgl_Lahir" >
    </div>
    <div class="form-group">
        <label for="Foto">Foto Profil</label>
        <input type="file" name="Foto" class="form-control" id="Foto" aria-describedby="Foto" >
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    @endsection