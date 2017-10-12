@extends('app.template')
 
@section('content')
 
<div class="col-md-6 col-md-offset-3">
     
 
<h1 class="page-header">Login The Hobi</h1>
 
 
 
<form method="post" action="{{action('coPengguna@cekLogin')}}">
 
        {{ csrf_field() }}
 
 
        @if (
         
            (count($errors) > 0 ) || (session('status') == 'salah')
         
        )
         
 
 
            Maaf Username atau Password anda salah!
         
 
         
        @endif
         
        <label>Username</label>
 
<div class="form-group">
            <input type="text" name="username" class="form-control">
        </div>
 
 
        <label>Password</label>
 
<div class="form-group">
            <input type="password" name="password" class="form-control">
        </div>
 
 
        <button type="submit" class="btn btn-block btn-primary">Login</button>
 
    </form>
 
</div>
 
@endsection