<?php

namespace App\Http\Controllers;
use App\Http\Controllers\shopController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class shopController extends Controller
{
    public function index(){
        $shops = Shop::all();
        return view('pages.shop.shoplist', compact('shops')); 
    }


    public function create(){
        $shops = Shop::select('id', 'name')->get();
        return view('pages.shop.create', compact('shops'));
    }

    public function store(Request $request)
    {
        // Validate our data
        $request->validate(
            [
                'name' => 'required|string|max:255|min:2',
                'phoneno' => 'required|unique:shops|max:15|min:11',
                'email' => 'required|string|email|max:255|unique:shops',
                'category' => 'required|string|max:20',
                'location' => 'required|string|max:20',
                
                
            ],
            [
                'name.required' => 'Please, give your name !',
                'phoneno.required' => 'Please, give your phone no !',
                'email.required' => 'Please, give your email !',
                
                'category.required' => 'Please, give your category !',
                'location.required' => 'Please, give your location !',
                'email.unique' => 'Sorry, This email already exists. Please, give another email !',
                'name.unique' => 'Sorry, This name already exists. Please, give another name !',
                'phoneno.unique' => 'Sorry, This phone no already exists. Please, give another phone no !',
                
            ]
        );

        // If validated, insert data
        $shop = new Shop();
        $shop->name = $request->name;
        $shop->phoneno = $request->phoneno;
        $shop->email = $request->email;
        $shop->category = $request->category;
        $shop->location = $request->location;
        
        $shop->save();

        

        session()->flash('success', 'Shop has been created !');
        return redirect()->route('shop.index');
    }

    public function edit($id)
    {
        $shop = Shop::find($id);
        if (!is_null($shop)) {
            $shops = Shop::select('id', 'name')->get();
            return view('pages.shop.edit', compact('shops', 'shop'));
        }

        session()->flash('error', 'Sorry ! No User has been found !');
        return redirect()->route('shop.index');
    }


    public function shoplist(){
        $shops  = Shop::all();
        return view('Full.shoplist')->with('shops', $shops);
    }


    public function update(Request $request, $id)
    {
        $shop = Shop::find($id);

        if (!is_null($shop)) {

        // Validate our data
        $request->validate(
            [
                'name' => 'required|string|max:255|min:2',
                'phoneno' => 'required|unique:shops|max:15|min:11,'.$shop->id,
                'email' => 'required|string|email|max:255|unique:shops',
                'category' => 'required|string|max:20',
                'location' => 'required|string|max:20',
                
                
            ],
            [
                'name.required' => 'Please, give your name !',
                'phoneno.required' => 'Please, give your phone no !',
                'email.required' => 'Please, give your email !',
                'category.required' => 'Please, give your category !',
                'location.required' => 'Please, give your location !',
                
                
                'name.unique' => 'Sorry, This name already exists. Please, give another name !',
                'phoneno.unique' => 'Sorry, This phone no already exists. Please, give another phone no !',
                'email.unique' => 'Sorry, This email already exists. Please, give another email !',
                
            ]
        );

        // If validated, insert data
        
        $shop->name = $request->name;
        $shop->phoneno = $request->phoneno;
        $shop->email = $request->email;
        $shop->category = $request->category;
        $shop->location = $request->location;
        
        $shop->save();

        

        session()->flash('success', 'Shop has been updated !');
    }else{
        session()->flash('error', 'Sorry ! No User has been found !');
    }
        return redirect()->route('shop.index');
    }






    public function destroy($id)
    {
        $shop = Shop::find($id);
        if (!is_null($shop)) {
            // First Delete User Image & then Delete the user
            //UploadHelper::delete('images/users/'.$user->image);
            $shop->delete();
            session()->flash('Success', 'User has been deleted !');
        }else{
            session()->flash('Error', 'Sorry ! No User has been found !');
        }
        return redirect()->route('shop.index');
    }


    /*public function search(Request $request){
        $value=$request->input('value');
        $shops = Shop::where('name','like', '%' .$value. '%')
                ->orWhere('phoneno','=',$value)
                ->orWhere('email','=',$value)
                ->orWhere('category','=',$value)
                ->orWhere('location','=',$value);

                return view('pages.shop.shoplist', compact('shops')); 
    }*/

}
