<?php

namespace App\Http\Controllers;

use App\Http\Controllers\sadashcontroller;
use Illuminate\Http\Request;

class sadashcontroller extends Controller
{
    public function index(){

        return view('pages.sadashboard.index');

    }
    
}
