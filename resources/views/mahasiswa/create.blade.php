@extends('layout/main')
@section('title', 'Add Mahasiswa')


@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Tambah Mahasiswa</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-10 mt-3">
                {!! Form::open('array'('url' => 'formsederhana' )) !!}
                <div class="form-group">
                    {!! Form::label('nama', 'Nama') !!}
                    {!! Form::text('nama', 'null', array('class' => 'form-control', 'placeholder'=>'Masukkan Nama')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('jeniskelamin', 'Jenis Kelamin') !!}
                    {!! Form::select('jeniskelamin', array('L' => 'Laki-Laki', 'P' => 'Perempuan'), 'null', array('class' => 'form-control', 'placeholder' => 'Pilih Jenis Kelamin' )) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('alamat', 'Alamat') !!}
                    {!! Form::textarea('alamat', 'null', array('class' => 'form-control', 'placeholder' => 'Masukkan Alamat' )) !!}
                </div>
                {!! Form::submit('Kirim', array('class' =>  'form-control')) !!}
            </div>
        </div>
    </div>
    
@endsection