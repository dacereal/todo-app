<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todoscontroller;

Route::get('/', [Todoscontroller::class, 'welcome']);

Route::get('about', [Todoscontroller::class, 'about']);

Route::get('contact', [Todoscontroller::class, 'contact']);