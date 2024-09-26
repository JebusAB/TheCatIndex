<?php

use Illuminate\Support\Facades\Route;

//Base
Route::get('/', function () {
    return view('welcome');
});

//TEST0
Route::get('/home', function () {
    return view('home');
    /*return view('bonjour', ['username'=>$username,'password'=>$password]);*/
});

//TEST1
Route::get('/plus/{num1}/{num2}', function($num1, $num2)
{
    return view('plus', compact('num1','num2'));
}
);

//TEST2
Route::get('/bonjour/{username}', function ($username) {
    $password = "JAAJ";
    return view('bonjour',compact('username','password'));
    /*return view('bonjour', ['username'=>$username,'password'=>$password]);*/
});

use App\Models\Cat;//permet de ce référer à Cat au lieu de App\Models\Cat à chaque fois

//INDEX
Route::get('/cats',function ()
{
    $cats = Cat::all();
    return view('index', compact('cats'));
});

//CREATE
Route::get('/cats/create',function ()
{
    return view('create');
})->name('cats.create');

//STORE
Route::POST('/cats',function()
{
    $validate = request()->validate([
        'name' => 'required',
        'price' => 'integer',
    ]);
    $c = new Cat;
    $c->name = request('name');
    $c->price = request('price');
    $c->description = request('description');
    $c->image = request('image');
    $c->birthdate = request('birthdate');
    $c->save();
    return redirect('/cats/'.$c->id);
});

//EDIT
Route::get('/cats/{id}/edit', function ($id)
{
    return view('edit');
});

//SHOW
Route::get('/cats/{id}',function ($id)
{
    $thatCat = Cat::findOrFail($id);
    return view('show', compact ('thatCat'));
});

