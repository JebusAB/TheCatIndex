<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="/style.css">
    <title>Cat {{$thatCat->id}}</title>
</head>
<body>
<div>
    <img src="{{$thatCat->image}}">
    <h2>Identifiant</h2>
    {{$thatCat->id}}
    <h2>Nom</h2>
    {{$thatCat->name}}
    <h2>Description</h2>
    {{$thatCat->description}}
    <h2>Prix</h2>
    {{$thatCat->price}}
    <h2>Date de Naissance</h2>
    {{$thatCat->birthdate}}
    <br>
    <br>
    <a href="/cats">retour</a>
</div>

</body>
</html>
