<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KursusController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(KursusController::class)->group(function(){
    Route::get('senarai-kursus', 'senarai_kursus')->name('senarai-kursus');
});
