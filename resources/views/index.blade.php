@extends ('layout')

@section('Title', 'Index') {{// Donne comme titre 'Index'}}

@section('Content') {{// ce qui est écrit jusqu'a @endsection}}
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
            <td>
                <form method="post" action="/cats/{{$cat->id}}">
                    @csrf
                    @method ('delete')
                    <button>delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
