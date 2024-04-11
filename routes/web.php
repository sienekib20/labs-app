<?php

use App\Http\Controllers\app;
use Sienekib\Mehael\Router\Anotation\Route;


Route::get('/', [app::class, 'index']);
