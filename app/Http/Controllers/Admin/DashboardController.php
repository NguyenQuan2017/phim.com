<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller

{
	
    public function __construct(){

    	$this->middleware('web');

    }

    public function dashboard(){

    	return view('admin/dashboard');
    }
}
