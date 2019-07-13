<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChugakuController extends Controller
{
    public function course1()
    {
        return view('chugaku.course1');
    }
}
