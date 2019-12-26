
@extends('Layout')
@section('content')
<h1>mes clients</h1>
<ul> 
<?php /*foreach($data as $client):?>
<li><?= $client ?></li>
<?php endforeach;*/?>
@foreach($data as $client)
<li>{{$client->name}}</li>
@endforeach

</ul>
<hr>
<form action="client" method="POST">
@csrf
<div class="form-group">
<input type="text" class="form-control @error('pseudo') is-invalid @enderror"name="pseudo"> 
@error('pseudo')
<div class="invalid-feedback">
{{$errors->first('pseudo')}}
</div>
@enderror
</div>

<button type="submit" class="btn btn-primary">Ajouter Client </button>
</form>
@endsection