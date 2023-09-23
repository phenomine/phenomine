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
Route::get('/404', function () {
    return view('errors.404');
})->name('404');