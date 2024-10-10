<?php

use App\Http\Controllers\CatController;
use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;

//Base
Route::get('/', function () {
    return view('welcome');
});

use App\Models\Cat;             //permet de ce référer à Cat au lieu de App\Models\Cat à chaque fois

Route::ressource("hero",HeroController::class);
Route::ressource("cats",CatController::class);

//INDEX
Route::get('/cats',[CatController::class,'index']);

//CREATE
Route::get('/cats/create',[CatController::class,'create'])->name('cats.create');

//STORE
Route::POST('/cats',[CatController::class,'store']);

//EDIT
Route::get('/cats/{cat}/edit', [CatController::class,'edit']);

//UPDATE
Route::POST('/cats', [CatController::class,'update']);

//DESTROY
Route::POST('/cats', [CatController::class,'destroy']);

//SHOW
Route::get('/cats/{cat}', [CatController::class,'show']);

