<?php

use Illuminate\Support\Facades\Input;
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

Route::get('jsCoba', 'jsController@index');
Route::get('jsProc', function(){
    $client = Http::get('https::/api.kawalcorona.com/indonesia')->body();

    dd($client);
});
Route::get('training', 'TrainingController@index');
Route::post('training/import_excel', 'TrainingController@import_excel');