<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <script>window.laravel={csrfToken:'{{csrf_token()}}'}</script>
        <title>Supprimer utilisateur</title>
    </head>
    <body>
        <div id="app">
            <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark secondary-color">

<!-- Navbar brand -->
<a class="navbar-brand" href="#">Scolarité</a>

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#">Profil
        <span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Paramètres</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Description</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">A propos</a>
    </li>

    <!-- Dropdown 
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Dropdown</a>
      <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </li>-->
  </ul>
  <!-- Links -->

  <form class="form-inline">
    <div class="md-form my-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Recherche" aria-label="Search">
    </div>
  </form>
</div>
<!-- Collapsible content -->

</nav>
<!--/.Navbar-->
            <div>
       <Table></Table>
         </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        
    </body>
   
</html>