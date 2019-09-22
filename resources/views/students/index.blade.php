@extends('layout/main')
@section('title', 'Students')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3"> Kuds Kuds </h1>
      <a href="/students/create" class="btn btn-primary my-3">Tambah Data</a>

      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif
    </div>
  </div>
  <div class="row">      
    <div class="col-6">
      <ul class="list-group">
        @foreach ($students as $item)
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{ $item->nama }}
          <a href="/students/{{$item->id}}" class="badge badge-info">Detail</a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>

@endsection