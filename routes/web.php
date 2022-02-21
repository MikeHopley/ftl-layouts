<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShipController;
use App\Http\Controllers\ShipGroupController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/auto', [ShipGroupController::class, 'auto']);
Route::get('/crystal', [ShipGroupController::class, 'crystal']);
Route::get('/engi', [ShipGroupController::class, 'engi']);
Route::get('/federation', [ShipGroupController::class, 'federation']);
Route::get('/lanius', [ShipGroupController::class, 'lanius']);
Route::get('/mantis', [ShipGroupController::class, 'mantis']);
Route::get('/rebel', [ShipGroupController::class, 'rebel']);
Route::get('/rock', [ShipGroupController::class, 'rock']);
Route::get('/slug', [ShipGroupController::class, 'slug']);
Route::get('/zoltan', [ShipGroupController::class, 'zoltan']);

Route::get('/search', [SearchController::class, 'show']);

Route::get('/{ship}', [ShipController::class, 'show']);
