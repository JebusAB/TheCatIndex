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
    <tr>
        <th>id</th>
        <th>name</th>
        <th>desc</th>
        <th>price</th>
        <th>cat birthdate</th>
        <th>edit cat</th>
        <th>delete cat</th>
    </tr>
    @foreach($cats as $cat)
        <tr>
            <td>{{$cat->id}}</td>
            <td><a href="/cats/{{$cat->id}}">{{$cat->name}}</a></td>
            <td>{{$cat->description}}</td>
            <td>{{$cat->price}}</td>
            <td>{{$cat->birthdate}}</td>
            <td><a href="/cats/{{$cat->id}}/edit">edit</a></td>
            <td>delete</td>
        </tr>
    @endforeach
</table>
</body>
</html>
