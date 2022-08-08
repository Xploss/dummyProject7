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
Route::get('jsOn', 'jsOn@index');
Route::get('jsProc', function(){
    $client = Http::withBasicAuth('admin','94k0z4007')->get('http://desktop-qo1l6ph:8080/api/rest/process/procTrain?nim=09031281823049')->json();

    //$en = json_encode($client, true);

    /*$change = array(
        'nama' => 'nama',
        'nim' => 'nim',
        'ipk' => 'ipk',
        'masaStudiBulan' => 'masaStudiBulan',
        'masaStudiTahun' => 'masaStudiTahun',
        'fakultas' => 'fakultas',
        'kemampuanBIng' => 'kemampuanBIng',
        'pengalamanMagang' => 'pengalamanMagang',
        'jenisPekerjaanPertama' => 'jenisPekerjaanPertama',
        'hubStudidgnPekerjaan' => 'hubStudidgnPekerjaan',
        'ikutOrganisasi' => 'ikutOrganisasi',
        'prediction(diterimaBulanStlhLulus)' => 'pred'
        );

        $newArr = array();
        foreach($client as $key => $client) {
        $newArr[ $change[0][ $key ] ] = $client;
        }*/

    return  $client[0]['prediction(diterimaBulanStlhLulus)'];
});

Route::resource('mahasiswa', 'MahasiswaController');