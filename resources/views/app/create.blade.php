<!-- create.blade.php -->

@extends('app.master')
@section('content')
<div class="container">
  <form method="post" action="{{url('app')}}">
    <div class="form-group row">
      {{csrf_field()}}
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="nama" placeholder="masukkan nama" name="nama">
      </div>
    </div>
    <div class="form-group row">
       <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control form-control-lg" id="password" placeholder="masukkan password" name="password">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary" action="{{url('app')}}"> 
      
    </div>

  </form>
</div>
@endsection
