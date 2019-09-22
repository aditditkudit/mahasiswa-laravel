@extends('layout/main')
@section('title', 'Form Tambah Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="/students/create">                
                {{ csrf_field() }}
                <div class="form-group {{$errors->has('nama') ? 'has-error' : '' }}">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                    <span class="text-danger">{{$errors->first('nama')}}</span>
                    
                </div>
                <div class="form-group {{$errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukkan email" name="email">
                    <span class="text-danger">{{$errors->first('email')}}</span>
                </div>
                <div class="form-group {{$errors->has('nim') ? 'has-error' : '' }}">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim">
                    <span class="text-danger">{{$errors->first('nim')}}</span>
                </div>
                <div class="form-group {{$errors->has('jurusan') ? 'has-error' : '' }}">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan">
                    <span class="text-danger">{{$errors->first('jurusan')}}</span>
                </div>
                <button type="submit" class="btn btn-primary">Tambah data</button>
            </form>
        </div>
    </div>
</div>

@endsection