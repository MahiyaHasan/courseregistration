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
Route::get('course_teacher','Users@index');

Route::get('show_course_admin','Courses@fetch');
Route::view ('add_course_admin','add_course_admin');
Route::post ('submit','Courses@save');
Route::view ('update_course_admin','courses');
Route::post ('submit','Courses@update');

