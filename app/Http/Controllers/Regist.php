<?php

namespace App\Http\Controllers;

use App\Models\Authentication;
use App\Models\teacher;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class Regist extends Controller
{
    //Задаем начальный массив для дальнейшей работы
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
        'password' => '',
    ];

    //Функция переписывает on в 1

    private function bool($array){
        foreach ($array as $k => $n){
            if ($n == 'on'){
                $array[$k] = 1;
            }elseif ($n == ''){
                $array[$k] = 0;
            }
        }
        return $array;
    }

    private function hash_teacher($array){
        //Создаем массив для модели Учителя
        unset($array['password_confirmation']);
        unset($array['_token']);
        unset($array['login']);
        unset($array['password']);
        return $array;
    }
    public function show(){
        //Отображает форму регистрации
        return view('admin.regist');
    }
    public function show_check(Request $request){
        //проверяем входящие значения
        $data_check = $request->validate([
            'name' => ['required'],
            'login' => ['required'],
            'start_work' => ['required', 'date'],
            'education' => ['required'],
            'cash' => ['required'],
            'qualification' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);
        //обрабатываем массив для записи БД
        $this->data = array_merge($this->data ,$data_check, $request->input());
        $data_for_send = $this->bool($this->data);
        $data_teacher = $this->hash_teacher($data_for_send);
        dd(bcrypt($data_for_send['password']));
        //Записываем в БД
        $teacher = teacher::create($data_teacher);
        $login = Authentication::create([
            'login' => $data_for_send['login'],
            'password' => bcrypt($data_for_send['password']),
            'name' => $data_for_send['name']
        ]);
        //переходим на страницу администратора
        return redirect(route('admin'));
    }
    //
}
