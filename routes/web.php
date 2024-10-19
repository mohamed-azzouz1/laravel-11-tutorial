<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\job;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
Route::get('/', function () {

    return view('home');
});

Route::get('/jobs', function ()  {
    return view('jobs', [
        'jobs' => job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id)  {        
    $job = job::find($id);
    
    return view('job', ['job' => $job]);
});



Route::get('/contact', function () {
    return view('contact');
});
