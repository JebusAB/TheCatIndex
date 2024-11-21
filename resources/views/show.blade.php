@extends ('layout')

@section('Title', 'Show')

@section('Content')
<div>
    <img src="{{$cat->image}}">
    <h2>Identifiant</h2>
    {{$cat->id}}
    <h2>Nom</h2>
    {{$cat->name}}
    <h2>Description</h2>
    {{$cat->description}}
    <h2>Prix</h2>
    {{$cat->price}}
    <h2>Date de Naissance</h2>
    {{$cat->birthdate}}
    <br>
    <br>
    <a href="/cats">retour</a>
</div>
@endsection
