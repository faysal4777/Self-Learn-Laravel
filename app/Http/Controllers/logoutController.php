<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutController extends Controller
{
    public function index(Request $request)
    {
    	//Tasks 
    	$request->session()->flush();
    	return redirect()->route('login.index');
    }
}
