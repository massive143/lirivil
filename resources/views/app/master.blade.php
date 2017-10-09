<!-- master.blade.php -->

<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD Operations</title>

        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header" >
          <a class="navbar-brand" href="#" >Pimkit Tangerang</a>
          <br>
        </div>
        
      </div>
    </nav>

        <h2 style="text-align:center"> INDEX @yield('index')</h2>

        <br><br>
        @yield('content')
    </body>
</html>