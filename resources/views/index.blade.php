<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="/style.css">
    <title>index</title>
</head>
<body>
<a href="/cats/create">Ajouter un Chat</a>
<h1>Tous les chats ici</h1>
<table>
    <tr bgcolor="#778899">
        <th>id</th>
        <th>name</th>
        <th>desc</th>
        <th>price</th>
        <th>birthdate</th>
    </tr>
    @foreach($cats as $cat)
        <tr bgcolor="#f0f8ff">
            <td>{{$cat->id}}</td>
            <td><a href="/cats/{{$cat->id}}">{{$cat->name}}</a></td>
            <td>{{$cat->description}}</td>
            <td>{{$cat->price}}</td>
            <td>{{$cat->birthdate}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
