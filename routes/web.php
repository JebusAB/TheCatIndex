<?php

use App\Http\Controllers\CatController;
use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;

//Base


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $cat = Cat::find(12);
    dd($user->cats);
});
use App\Models\Cat;             //permet de ce référer à Cat au lieu de App\Models\Cat à chaque fois

Route::resource("hero",HeroController::class);
Route::resource("cats",CatController::class);


/*
Route::get('/cats',[CatController::class,'index']);
Route::get('/cats/create',[CatController::class,'create'])->name('cats.create');
Route::POST('/cats',[CatController::class,'store']);
Route::get('/cats/{cat}/edit', [CatController::class,'edit']);
Route::POST('/cats', [CatController::class,'update']);
Route::POST('/cats', [CatController::class,'destroy']);
Route::get('/cats/{cat}', [CatController::class,'show']);
*/
