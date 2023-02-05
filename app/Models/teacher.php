<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    //задаем поля доступные для редактирования
    protected $fillable = [
        'name',
        'start_work',
        'education',
        'cash',
        'method_room',
        'notepad_015',
        'notepad_01',
        'classroom_teacher',
        'methodist',
        'qualification',
        'honored_teacher',
        'candidate_science',
        'state_award',
        'badge',
    ];

    use HasFactory;
}
