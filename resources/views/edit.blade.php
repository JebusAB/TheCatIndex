<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="/style.css">
    <title>index</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div align="center">
    <form method="POST" action="/cats">
        @csrf
        <h2>Nom</h2>
        <input name="name" type="text" value="{{old('name')}}">
        @error ('name')<p class="w-red500">{{$message}}</p> @enderror
        <h2>Description</h2>
        <input name="description" type="text" value="{{old('description')}}">
        @error ('description')<p class="w-red500">{{$message}}</p> @enderror
        <h2>Prix</h2>
        <input name="price" type="number" value="{{old('price')}}">
        @error ('price')<p class="w-red500">{{$message}}</p> @enderror
        <h2>Date de Naissance</h2>
        <input name="birthdate" type="date" value="{{old('birthdate')}}">
        @error ('birthdate')<p class="w-red500">{{$message}}</p> @enderror
        <h2>Lien de l'Image</h2>
        <input name="image" type="text" value="{{old('image')}}">
        @error ('image')<p class="w-red500">{{$message}}</p> @enderror
        <br>
        <br>
        <br>
        <input type="submit">
    </form>
    <br>
    <a href="/cats">retour</a>
</div>

</body>
</html>
