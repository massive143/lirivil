<!-- index.blade.php -->



@extends('app.master')
@section('content')





 <div class="flex-center position-ref full-height">
          @if (Route::has('login'))
              <div class="top-right links">
                  @if (Auth::check())
                      <a href="{{ url('/home') }}">Home</a>
                  @else
                      <a href="{{ url('/login') }}">Login</a>
                      <a href="{{ url('/register') }}">Register</a>
                  @endif
              </div>
            @endif
</div>





<div class="g-signin2" data-onsuccess="onSignIn"></div>
<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="true"></div>
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      <body>

         


      @foreach($tables as $post)
   
      <tr>
        
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
</body>
    </tbody>
  </table>
  </div>
  {!! $tables->links() !!}

@endsection


<div id="fb-root"></div>
<script>
  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<div id="fb-root"></div>

<script>
  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<script>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
</script>