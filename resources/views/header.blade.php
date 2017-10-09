     <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="header.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  
      <link rel="stylesheet" href="materialize.css">
      <link rel="stylesheet" href="materialize.min.css">
      <link rel="stylesheet" href="font-awesome-animation.min.css">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

      <!-- Compiled and minified JavaScript -->

      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<nav class="nav-extended blue-grey darken-2" >
    <div class="nav-wrapper">
      <a href="#" class="brand-logo" ; style="text-decoration: none">  @yield('title')</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <div class="topright :hover white">
        <ul class="right hide-on-med-and-down">
          <li><a href="sass.html"; style="text-decoration: none">Sass</a></li>
          <li><a href="badges.html"; style="text-decoration: none">Components</a></li>
          <li><a href="collapsible.html"; style="text-decoration: none">JavaScript</a></li>
        </ul>
      </div>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html"; style="text-decoration:none";>Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul  class="tabs tabs-transparent ">
      	<li class="tab"><a href="#test1" ; class="action"; >Test 1</a></li>
        <li class="tab"><a class="active" href="#test2">Test 2</a></li>
       
        <li class="tab"><a href="#test4">Test 4</a></li>
    
         </ul>
    </div>
  </nav>
  
<!--
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
 
 <br><br>
<h1 style="text-align: center">P I M K I T </h1>


<br><br><br><br>          
<div class="container">
  <div class="row">
      <div id="custom-search-input">
          <div class="input-group col-md-8 col-md-offset-2">
              <input type="text" class="form-control input-lg" placeholder="Search" />
              <span class="input-group-btn">

          
                  <button id="scale-demo" class="btn-floating btn-large scale-transition" type="button">
                      <i class="glyphicon glyphicon-search"></i>
                  </button>

                  <button id="scale-demo" class="btn-floating btn-large scale-transition scale-out" type="button">
                      <i class="glyphicon glyphicon-search"></i>
                  </button>
              </span>
            </div>
        </div>
  </div>
</div>
      

<br><br><br><br><br>
 <table class="responsive-table centered highlight">
        <thead>
          <tr>
              <th>Name</th>
              <th>Item Name</th>
              <th>Item Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>

           <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
<br><br><br><br><br>


<!--Pagination -->

   <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>

<!--/Pagination -->
    <footer class="page-footer blue-grey darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright blue-grey darken-4">
            <div class="container ">
            © 2017 Copyright
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
