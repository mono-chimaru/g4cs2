<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    function __construct(){

    }

    public function index(){
    	return view('backend.index');
    }
}
