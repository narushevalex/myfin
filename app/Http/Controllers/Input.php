<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Input extends Controller
{
    private array $exe = ['name_exe' => '', 'password_exe' => ''];

    private function exept($arrey){
        if ($arrey['name'] == ''){
            $this->exe['name_exe'] = 'Введите имя';
        }
        if ($arrey['password'] == ''){
            $this->exe['password_exe'] = 'Ведите пароль';
        }
    }

    public function show_form(){
        return view('start', ['exe' => $this->exe]);
    }
    public function show(Request $request){
        $name = $request->input('name', '');
        $password = $request->input('password', '');
        $exept = ['name' => $name, 'password' => $password];
        $this->exept($exept);
        return view('start', ['exe' => $this->exe]);
    }
    //
}
