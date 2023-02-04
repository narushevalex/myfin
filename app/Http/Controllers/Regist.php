<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class Regist extends Controller
{
    public function show(){
        return view('admin.regist');
    }
    public function show_check(Request $request){
        $data = $request->validate([
            'name' => ['required'],
            'login' => ['required'],
            'start_work' => ['required', 'date'],
            'education' => ['required'],
            'cash' => ['required'],
            'qualification' => ['required'],
            'password_res' => ['required'],
            'password' => ['required'],
        ]);
        dd($data);
//        return view('admin.regist');
    }
    //
}
