<?php

/*
| The Phenomine Framework
| Copyright (c) 2023 Muhammad Fahli Saputra
| https://github.com/phenomine/phenomine
|
*/

use App\Controllers\WelcomeController;
use Phenomine\Support\Route;

Route::get('/', function () {
    echo 'Halo Bang';
});

Route::get('/print/{name}', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/index2', 'WelcomeController@index2');