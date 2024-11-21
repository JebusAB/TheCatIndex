<?php

use App\Http\Controllers\Api\CatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('testapi',function()
{
    return 'testAPI';
});

Route::apiResource('/cats', CatController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
