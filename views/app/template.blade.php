<!DOCTYPE html>
<html>
    <head>
        <title>The Hobi</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Demo project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url('public/css')}}/css/bootstrap.min.css">
    </head>
    <body>
 
 
<div class="container">
 
<nav class="navbar navbar-default">
 
<div class="container-fluid">
 
<div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{url('/')}}">The Hobi</a>
            </div>
 
             
 
<ul class="nav navbar-nav navbar-right">
 
                @if ( Request::session()->has('username') )
               
 
<li><a href="{{url('dashboard')}}">Dashboard</a></li>
 
 
<li><a href="{{url('produk')}}">Produk</a></li>
 
 
<li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{session('username')}} <span class="caret"></span></a>
 
 
<ul class="dropdown-menu">
 
<li><a href="{{url('logout')}}">Logout</a></li>
 
                      </ul>
 
                    </li>
 
 
                @else
 
 
<li><a href="{{url('login')}}">Login</a></li>
 
                 
                @endif
 
              </ul>
 
            </div>
 
          </div>
 
        </nav>
 
</div>
 
 
<div class="container">
    @yield('content')
</div>
 
 
     
    </body>
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20type%3D%22text%2Fjavascript%22%20src%3D%22%7B%7Burl('public')%7D%7D%2Fjs%2Fjquery.min.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="&lt;script&gt;" title="&lt;script&gt;" />
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20type%3D%22text%2Fjavascript%22%20src%3D%22%7B%7Burl('public')%7D%7D%2Fjs%2Fbootstrap.min.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="&lt;script&gt;" title="&lt;script&gt;" />
</html>