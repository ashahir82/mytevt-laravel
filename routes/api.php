<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\InstitusiController;
use App\Http\Controllers\API\KawalanController;

Route::controller(KawalanController::class)->group(function(){
    Route::post('login', 'login')->name('login');
    Route::post('logout', 'logout')->name('logout');
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(KursusController::class)->group(function(){
    Route::get('senarai-kursus', 'senarai_kursus')->name('senarai-kursus');
});

Route::controller(InstitusiController::class)->group(function(){
    Route::post('senarai-institusi', 'senarai_institusi')->name('senarai-institusi')->middleware('auth:sanctum');
    Route::post('pusat-institusi', 'pusat_institusi')->name('pusat-institusi');
});
