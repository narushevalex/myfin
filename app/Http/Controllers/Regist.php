<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class Regist extends Controller
{
    private array $data = [
        'name' => '',
        'login' => '',
        'start_work' => '',
        'education' => '',
        'cash' => '',
        'method_room' => '',
        'notepad_015' => '',
        'notepad_01' => '',
        'classroom_teacher' => '',
        'methodist' => '',
        'qualification' => '',
        'honored_teacher' => '',
        'candidate_science' => '',
        'state_award' => '',
        'badge' => '',
        'password_res' => '',
        'password' => '',
    ];

    private function bool($array){
        foreach ($array as $k => $n){
            if ($n == 'on'){
                $array[$k] = true;
            }
        }
        return $array;
    }
    public function show(){
        return view('admin.regist');
    }
    public function show_check(Request $request){
        $data_check = $request->validate([
            'name' => ['required'],
            'login' => ['required'],
            'start_work' => ['required', 'date'],
            'education' => ['required'],
            'cash' => ['required'],
            'qualification' => ['required'],
            'password_res' => ['required'],
            'password' => ['required'],
        ]);
        $this->data = array_merge($this->data ,$data_check, $request->input());
        $data_for_send = $this->bool($this->data);
        dd($data_for_send);
//        return view('admin.regist');
    }
    //
}
