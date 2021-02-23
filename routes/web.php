<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/kk', function () {
    return 'Hello!';
});

Route::get('/ok', function () {
    return redirect('/kk');
});

Route::get('/post/{id}', function($id) {
return "id is: " . $id;
});

Route::get('/post/{id}/{fname}/{lname}', function($id, $fname, $lname) {
return $id . " " . $fname . " " . $lname;
}) -> where(['id'=>'[0-9]+', 'fname'=>'[a-zA-Z]+', 'lname'=>'[a-zA-Z]+']);

Route::get('/sname/{name}', 'App\Http\Controllers\StudentController@rname');

//lab 4

Route::get('/twonames/{fname}/{lname}', function($fname, $lname) { 
return $fname . " " . $lname;
}) -> where(['fname'=>'[a-zA-Z]+', 'lname'=>'[a-zA-Z]+']);

// lab 5
Route::get('/lab5/{name}', 'App\Http\Controllers\StudentController@lab5');
Route::get('/sdob/{dob}', 'App\Http\Controllers\StudentController@rdob');
Route::get('/sage/{age}', 'App\Http\Controllers\StudentController@rage');



