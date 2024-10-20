<?php

use App\Http\Controllers\Jobcontroller;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');


Route::resource('jobs', Jobcontroller::class);


