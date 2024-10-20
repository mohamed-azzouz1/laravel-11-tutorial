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

//index
Route::get('/jobs', function ()  {
    $jobs = job::with('employer')->latest()->simplePaginate(3);
    
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

//create
route::get('/jobs/create', function(){
    return view('jobs.create');
});

//show
Route::get('/jobs/{id}', function ($id)  {        
    $job = job::find($id);
    
    return view('jobs.show', ['job' => $job]);
});

//store
route::post('/jobs', function(){
    request()->validate([
        'title' =>['required', 'min:3'],
        'salary'=>['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1

    ]);

    return redirect('/jobs');
});

//edit
Route::get('/jobs/{id}/edit', function ($id)  {        
    $job = job::find($id);
    
    return view('jobs.edit', ['job' => $job]);
});

//update
Route::patch('/jobs/{id}', function ($id)  {        
    
    request()->validate([
        'title' =>['required', 'min:3'],
        'salary'=>['required']
    ]);
    //authorize

    $job = job::findorfail($id);

    // $job->title =request('title');
    // $job->salary =request('salary');
    // $job->save();

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/' . $job->id );

});

//destroy
Route::delete('/jobs/{id}', function ($id)  {        
    
    $job = Job::findorfail($id)->delete();

    return redirect('/jobs');
});



Route::get('/contact', function () {
    return view('contact');
});
