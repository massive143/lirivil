@extends('app.template')
@section('content')
 
 
<h1 class="page-header">Dashboard</h1>
 
 
 
 
This page of Dashboard
 
 
@endsection
 
Masih tetap bikin file view lagi, untuk kali ini buat dengan nama file produk.blade.php :
 
@extends('app.template')
@section('content')
 
 
<h1 class="page-header">Produk</h1>
 
 
<a href="#" class="btn btn-lg btn-success">Tambah</a>
 
 
<table class="table">
 
<thead>
 
<tr>
 
<th>Produk Name</th>
 
  
 
<th>Harga</th>
 
  
 
<th>Stok</th>
 
  
            @if(session('level') == 'admin')
 
<th>#</th>
 
            @endif
 
        </tr>
 
    </thead>
 
 
<tbody>
 
<tr>
 
<td>Adidas Predator</td>
 
 
<td>Rp 2.750.000</td>
 
 
<td>3</td>
 
            @if(session('level') == 'admin')
 
<td>
                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                <a href="#" class="btn btn-sm btn-danger">Hapus</a>
            </td>
 
            @endif
        </tr>
 
    </tbody>
 
</table>
 
 
@endsection