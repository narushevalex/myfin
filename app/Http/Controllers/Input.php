<?php

namespace App\Http\Controllers;

use App\Models\Authentication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Input extends Controller
{

    public function show_form(){
        return view('start');
    }
    public function show(Request $request){
        $data = $request->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);

        $db = Authentication::all()->where('login', $data['login']);
        $name = $db[1]['name'];
        if (Auth::attempt($data)){
            $request->session()->regenerate();
            session(['name' => $name]);
            return redirect('admin');
        }
        $request->session()->regenerate();
        return back()->withErrors([
            'email' => 'Неверное имя пользователя или пароль',
        ]);
    }
    //
}
