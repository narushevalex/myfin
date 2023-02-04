<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Input extends Controller
{

    public function show_form(){
        return view('start');
    }
    public function show(Request $request){
        $data = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);
        dd($data);
//        return view('start', ['exe' => $this->exe]);
    }
    //
}
