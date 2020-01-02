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
  background-color: #b9bcbe;
   }
h1{
  color:white;
}
img{
  margin-left:0px;
}
.sidebar {
  height: 100%;
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;

    background: -moz-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
    background: -webkit-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
    background: -webkit-gradient(linear, 45deg, from(rgba(42, 27, 161, 0.7)), to(rgba(29, 210, 177, 0.7)));
    background: -o-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
    background: linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);


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
  background-color:#6200ea;
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
    <div id="app">
    <div class="sidebar">
    
    <img src="../images/user-experiance-icon.png" alt="Smiley face" height="200" width="300" class="img-circle">
  <a href="#"></span> Profil</a><hr>
  <a href="Paramètres">Paramètres</a><hr>
  <a href="Description">Description </a><hr>
  <a href="a-propos">A propos</a><hr>
  <Deconnect></Deconnect>
</div>

<div class="main ">

@yield('content')

</div>


</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>