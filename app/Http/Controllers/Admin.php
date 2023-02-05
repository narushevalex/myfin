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

        //Преобразовать во внешнюю функцию!!!

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
            if ($t['honored_teacher'] == 0) {
                $t['honored_teacher'] = 'Нет';
            }else{
                $t['honored_teacher'] = 'Да';
            }
            if ($t['candidate_science'] == 0) {
                $t['candidate_science'] = 'Нет';
            }else{
                $t['candidate_science'] = 'Да';
            }
            if ($t['state_award'] == 0) {
                $t['state_award'] = 'Нет';
            }else{
                $t['state_award'] = 'Да';
            }
            if ($t['badge'] == 0) {
                $t['badge'] = 'Нет';
            }else{
                $t['badge'] = 'Да';
            }
            if ($t['education'] == 0) {
                $t['education'] = 'Высшее';
            } elseif ($t['education'] == 1){
                $t['education'] = 'Бакалавриат';
            }elseif ($t['education'] == 2){
                $t['education'] = 'Среднее проф.';
            }elseif ($t['education'] == 3){
                $t['education'] = 'Начальное проф.';
            }elseif ($t['education'] == 4){
                $t['education'] = 'Среднее';
            }elseif ($t['education'] == 5){
                $t['education'] = 'Основное';
            }
        }
        return view('admin.admin', ['teachers' => $teacher]);
    }
}
