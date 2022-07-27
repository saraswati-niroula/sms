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
// Route::post('students','StudentController@store')->name('student.store');
Route::resource('students','StudentController');
Route::resource('eduinfos','EducationalInfoController');
Route::get('student/{student_id}/edu-info/create','EducationalInfoController@createEducationInfo')
    ->name('student-eduinfo.create');
Route::resource('faculties','FacultyController');
Route::resource('batches','BatchController');
Route::resource('semesters','SemesterController');
Route::resource('collegeinfos','CollegeInfoController');
Route::get('student/{student_id}/family-info/create','FamilyInfoController@createFamilyInfo')
->name('student-familyinfo.create');
Route::get('student/{student_id}/college-info/create','CollegeInfoController@createCollegeInfo')
->name('student-collegeinfo.create');





