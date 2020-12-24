<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view ('form');
    }

    public function form(request $request){
        $first = $request->first_name;
        $last = $request->last_name;
        //dd($first, $last);
        
        return view ('welcome', compact('first', 'last'));
    }
}
