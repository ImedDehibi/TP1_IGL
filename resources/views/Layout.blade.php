<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <script>window.laravel={csrfToken:'{{csrf_token()}}'}</script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
body {
  font-family: "Lato", sans-serif;
  
   }
h1{
  color:white;
}
.sidebar {
  height: 100%;
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:#5d5650;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: lightgrey;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
  background-color:#178bdb;
}

.main {
  margin-top:70px;
  margin-left: 300px; /* Same as the width of the sidenav */
  padding: 0px 10px;
  

}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
    </head>
    <body> 
    <div class="sidebar">
    <h1>Scolarité</h1><br><br>
  <a href="#home"></span> Profil</a><hr>
  <a href="#services">Paramètres</a><hr>
  <a href="#clients">Description </a><hr>
  <a href="#contact">A propos</a><hr>
</div>

<div class="main">
<div id="app">
@yield('content')

</div>
<script src="{{ asset('js/app.js') }}"></script>
</div>

</body>
</html>