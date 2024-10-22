<?php
 
use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\DepanController;
 
Route::get('/', function () {
    return  "hallo word";
});

Route::get('/depan', [DepanController::class, 'index']);