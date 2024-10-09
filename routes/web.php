<?php

use App\Http\Controllers\Welcome as ControllersWelcome;
use Illuminate\Support\Facades\Route;

Route::get('/', ControllersWelcome::class);

Route::get('/outra', fn () => 'oi');