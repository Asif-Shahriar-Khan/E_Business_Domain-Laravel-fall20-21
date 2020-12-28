<?php

namespace App\Http\Controllers;
use App\Http\Controllers\salogoutController;

use Illuminate\Http\Request;

class salogoutController extends Controller
{
    public function index(Request $req){

    	$req->session()->flush();
    	return redirect()->route('superadminlogin.index');
    }
}