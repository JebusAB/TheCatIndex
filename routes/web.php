<?php

use App\Http\Controllers\CatController;
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
Route::get('/cats',[CatController::class,'index']);

//CREATE
Route::get('/cats/create',[CatController::class,'create'])->name('cats.create');

//STORE
Route::POST('/cats',[CatController::class,'store']);

//EDIT
Route::get('/cats/{id}/edit', [CatController::class,'edit']);

//UPDATE
Route::POST('/cats', [CatController::class,'update']);

//DESTROY
Route::POST('/cats', [CatController::class,'destroy']);

//SHOW
Route::get('/cats/{id}', [CatController::class,'show']);

