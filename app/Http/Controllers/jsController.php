<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class jsController extends Controller
{
    public function index()
	{

		$url = urlencode ("http://desktop-qo1l6ph:8080/api/rest/process/procTrain?nim=1011381419228");

        $json = json_decode(file_get_contents($url), true);

        dd($json);
	}
}
