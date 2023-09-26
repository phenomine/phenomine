<?php

/*
| The Phenomine Framework
| Copyright (c) 2023 Muhammad Fahli Saputra
| https://github.com/phenomine/phenomine
|
*/

use App\Controllers\WelcomeController;
use Phenomine\Support\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
// Route::get('/test/{info?}', [WelcomeController::class, 'test'])->name('test');
Route::post('/test/{nama}/{usia}', [WelcomeController::class, 'test'])->name('test2');
