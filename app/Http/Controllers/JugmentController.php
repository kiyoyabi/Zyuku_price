<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JugmentController extends Controller
{

    // ビューページへの遷移
    public function syougaku()
    {
        return view('jugments.syougaku');
    }

    // ビューページへの遷移
    public function chugaku()
    {
        return view('jugments.chugaku');
    }

    // ビューページへの遷移
    public function koukou()
    {
        return view('jugments.koukou');
    }
}
