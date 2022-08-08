<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use App\Imports\TrainingImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\PagesController;

class TrainingController extends Controller
{
    public function index()
	{
		return view('training.index');
	}

    public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
        echo "hai";
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_training',$nama_file);
 
		// import data
		Excel::import(new TrainingImport, public_path('/file_training/'.$nama_file));
 
		// notifikasi dengan session
		//Session::flash('sukses','Data Siswa Berhasil Diimport!');
 
		// alihkan halaman kembali
		//return redirect('/training/index');
	}
}
