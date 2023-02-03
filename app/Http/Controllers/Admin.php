<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;

class Admin extends Controller
{
    /*
     * Функция отображения представления панели администратора
     * Получает все данные из модели teacher и передает их в пердстванение
    */
    public function show(){
        $teacher = teacher::all();

        foreach ($teacher as $n => $t){
            if ($t['method_room'] == 0) {
                $t['method_room'] = 'Нет';
            }else{
                $t['method_room'] = 'Да';
            }
            if ($t['notepad_015'] == 0) {
                $t['notepad_015'] = 'Нет';
            }else{
                $t['notepad_015'] = 'Да';
            }
            if ($t['notepad_01'] == 0) {
                $t['notepad_01'] = 'Нет';
            }else{
                $t['notepad_01'] = 'Да';
            }
            if ($t['classroom_teacher'] == 0) {
                $t['classroom_teacher'] = 'Нет';
            }else{
                $t['classroom_teacher'] = 'Да';
            }
            if ($t['methodist'] == 0) {
                $t['methodist'] = 'Нет';
            }else{
                $t['methodist'] = 'Да';
            }
            if ($t['qualification'] == 0) {
                $t['qualification'] = 'Нет';
            } elseif ($t['qualification'] == 1){
                $t['qualification'] = 'Высшая';
            } elseif ($t['qualification'] == 2){
                $t['qualification'] = 'Первая';
            }elseif ($t['qualification'] == 3){
                $t['qualification'] = 'Вторая';
            }

        }
        return view('admin.admin', ['teachers' => $teacher]);
    }
}
