<?php

namespace App\Http\Controllers;

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}


use App\Http\Controllers\saloginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class saloginController extends Controller
{
    public function index(){
    	return view('pages.salogin.index');
    }

    public function verify(Request $req){
    	
    	//$req->session()->put('name', $req->username);
    	//$req->session()->put('password', $req->password);
		//$data = $req->session()->get('name');
		//$req->session()->has('name');
    	//$req->session()->forget('name');
		//$req->session()->flush();
		//$req->session()->flash('msg', 'invalid username/password');
		//$req->session()->flash('error', 'DB error');
		//$req->session()->keep('msg');
		//$req->session()->reflash();
		//$data =$req->session()->pull('name');

         $user = DB::table('users')
                    ->where('name', $req->name)
                    ->where('password', $req->password)
                    ->first();

                    return redirect()->route('superadmin.index');

        /*$user = User::where('username', $req->username)
                    ->where('password', $req->password)
                    ->first();*/

    	if(count($user) > 0){
    		$req->session()->put('name', $req->name);
            $req->session()->put('type', $req->name);
            
    		return redirect()->route('superadmin.index');
    	}else{
    		$req->session()->flash('msg', 'invalid username/password');
    		return redirect('/login');
    		//return view('login.index');
    	}
    }
}

