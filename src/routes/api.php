<?php

use Illuminate\Support\Facades\Route;

Route::get('{table}',[\Flutterbuddy1\EasyApi\Http\Controllers\ApiController::class,'index']);
    
Route::get('{table}/{id}',[\Flutterbuddy1\EasyApi\Http\Controllers\ApiController::class,'get']);

Route::post('{table}',[\Flutterbuddy1\EasyApi\Http\Controllers\ApiController::class,'post']);

Route::put('update/{table}/{id}',[\Flutterbuddy1\EasyApi\Http\Controllers\ApiController::class,'update']);

Route::delete('delete/{table}/{id}',[\Flutterbuddy1\EasyApi\Http\Controllers\ApiController::class,'delete']);