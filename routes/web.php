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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function() {
//     $nama = 'Kudit Ganteng';
//     return view('aboutus', ['nama' => $nama] );
// });

// Route::get('/mahasiswa', function() {
//     return view('mahasiswa');
// });


Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

// Menampilkan data mahasiswa (index)
Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/formsederhana', 'MahasiswaController@formsederhana');
Route::post('/mahasiswa/formsederhana', 'MahasiswaController@postformsederhana');

Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/{student}', 'StudentsController@show');
Route::post('/students/create', 'StudentsController@store');