<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    return view('task');
});

Route::post('/saveTask', [TaskController::class, 'store']);
