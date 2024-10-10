@extends ('layout')

@section('Title', 'Show') {{// Donne comme titre 'Index'}}

@section('Content') {{// ce qui est écrit jusqu'a @endsection}}
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
@endsection
