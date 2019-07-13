<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KoukouController extends Controller
{
    public function course1()
    {
        return view('koukou.course1');
    }
}
