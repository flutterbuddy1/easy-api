<?php

use Illuminate\Support\Facades\Route;

Route::get('easy/{table}',[\Flutterbuddy1\EasyApi\Http\Controllers\ApiController::class,'index']);
    
Route::get('easy/{table}/{id}',[\Flutterbuddy1\EasyApi\Http\Controllers\ApiController::class,'get']);

Route::post('easy/{table}',[\Flutterbuddy1\EasyApi\Http\Controllers\ApiController::class,'post']);

Route::put('easy/update/{table}/{id}',[\Flutterbuddy1\EasyApi\Http\Controllers\ApiController::class,'update']);

Route::delete('easy/delete/{table}/{id}',[\Flutterbuddy1\EasyApi\Http\Controllers\ApiController::class,'delete']);