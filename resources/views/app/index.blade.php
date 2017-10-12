<!-- index.blade.php -->



@extends('app.master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Post</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tables as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['nama']}}</td>
        <td>{{$post['password']}}</td>
         <td><a href="{{action('myController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>

         <td>
             <form action="{{action('myController@destroy', $post['id'])}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
             </form>
        </td>
      </tr>

      @endforeach

       <td><a href="{{action('myController@create', $post['id'])}}" class="btn btn-warning">Create</a></td>

    </tbody>
  </table>
  </div>
@endsection

