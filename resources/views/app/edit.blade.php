<h2 style="text-align: center;">Edit</h2>
@extends('app.master')
@section('content')
<div class="container">
  <form method="post" action="{{action('myController@update', $id)}}">
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Nama" name="nama" value="{{$tables->nama}}">
      </div>
    </div>


    <div class="form-group row">
 
       
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="password" name="password" value="{{$tables->password}}">
      </div>
    </div>
    


    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
@endsection