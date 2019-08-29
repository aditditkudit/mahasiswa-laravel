@extends('layout/main')
@section('title', 'About')
    
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3"> Kuds Kuds </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Hello, Kudsssss </h1>
        </div>
    </div>
      
    <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>
                <a href="#" class="badge badge-success">Edit</a>
                <a href="#" class="badge badge-danger">Delete</a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@fat</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>@twitter</td>
            <td>@twitter</td>
          </tr>
        </tbody>
    </table> 
</div>
    
@endsection