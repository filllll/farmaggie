<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FarmsController extends Controller
{
    public function register()
    {

    	

    }

    public function login()
    {

    	return view('farmaggie.login');

    }

    public function dashboard()
    {

    	return view('farmaggie.dashboard');

    }

    public function viewfarm()
    {

    	return view('farmaggie.viewfarm');

    }

    public function addfarm()
    {

    	return view('farmaggie.addfarm');

    }
}
