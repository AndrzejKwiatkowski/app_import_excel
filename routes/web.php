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

Route::get('/', 'ImportExcelController@index');
Route::post('/import', 'ImportExcelController@import');
Route::get('/edit/{id}', 'ImportExcelController@edit');
Route::put('/update/{id}', 'ImportExcelController@update')->name('import_excel.update');
