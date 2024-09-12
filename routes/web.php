<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
    /*return view('bonjour', ['username'=>$username,'password'=>$password]);*/
});

Route::get('/plus/{num1}/{num2}', function($num1, $num2)
{
    return view('plus', compact('num1','num2'));
}
);

Route::get('/bonjour/{username}', function ($username) {
    $password = "JAAJ";
    return view('bonjour',compact('username','password'));
    /*return view('bonjour', ['username'=>$username,'password'=>$password]);*/
});


