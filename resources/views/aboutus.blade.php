@extends('layout/main')
@section('title', 'About')
    
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3"> <?php echo $nama; ?> </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Hello, {{$nama}} </h1>
        </div>
    </div>
</div>
    
@endsection