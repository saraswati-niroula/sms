<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded  q  by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/students',function(){
//     return view('student.index');
// });
// Route::get('student_create',function(){
//     return view('student.create');
// });
// Route::get('student/create','StudentController@create')->name('student.create');
Route::resource('students','StudentController');

