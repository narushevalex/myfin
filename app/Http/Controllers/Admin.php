<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;

class Admin extends Controller
{
    public function show(){
        $techer = teacher::all();

        return view('admin.admin', ['techers' => $techer]);
    }
}
