<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function heroPage()
    {
        return view('layouts.hero');
    }
}
