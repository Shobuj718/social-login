<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LocalController extends Controller
{
    public function index($lang){
    	App::setlocale($lang);
    	return view('welcome');
    }
}
