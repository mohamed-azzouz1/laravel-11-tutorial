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
    $jobs = job::with('employer')->latest()->simplePaginate(3);
    
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});


route::get('/jobs/create', function(){
    return view('jobs.create');
});


Route::get('/jobs/{id}', function ($id)  {        
    $job = job::find($id);
    
    return view('jobs.show', ['job' => $job]);
});


route::post('/jobs', function(){
    //validation

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1

    ]);

    return redirect('/jobs');
});




Route::get('/contact', function () {
    return view('contact');
});
