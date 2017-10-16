<!-- index.blade.php -->



@extends('app.master')
@section('content')

<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="true"></div>
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


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
