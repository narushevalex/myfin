<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authentication extends Model
{
    //задаем поля доступные для редактирования
    protected $fillable = [
        'name',
        'login',
        'password',
    ];
    use HasFactory;
}
