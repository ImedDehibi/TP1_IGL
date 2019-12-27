<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <script>window.laravel={csrfToken:'{{csrf_token()}}'}</script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Login</title>
    </head>
    <body>
        <div id="app">
        <div class="container-fluid">
        <div class="row">

    <div class="col-4">
    
    </div>
    <div class="col-8">
    <formulaire></formulaire>
    </div>
  </div>
       
         </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        
    </body>
   
</html>
<style>
    body{
        padding-bottom: 70px;
    background-color: #202428;
    background-image: url(../Images/Capture.png);
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image*/
    background-size: cover; /* Resize the background image to cover the entire container */
    }
    </style>