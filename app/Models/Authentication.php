<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Authentication extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    //задаем поля доступные для редактирования
    protected $fillable = [
        'name',
        'login',
        'password',
    ];
    use HasFactory;
}
