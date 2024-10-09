<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Welcome as ControllersWelcome;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProjectController::class, 'index']) -> name('projects.index');

Route::get('/project/{project}',  [ProjectController::class, 'show']) -> name ('projects.show');