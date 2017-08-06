<?php

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

Route::get('program/{id}','ProgramController@showProgram');
Route::get('programs','ProgramController@showPrograms');

Route::get('college/{id}','CollegeController@showCollegeInfo');

Route::get('students','StudentController@showStudents');
Route::get('student/{id}','StudentController@showStudent');
Route::get('students/insert','StudentController@addStudent');
Route::post('students/insert','StudentController@saveStudent');


Route::post('students/check','AjaxController@searchIfAvailable');
Route::post('programslist','AjaxController@getPrograms');