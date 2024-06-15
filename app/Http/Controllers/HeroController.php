<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function heroPage()
    {
        $portofolios = Portofolio::all();
        return view('layouts.hero', compact('portofolios'));
    }
}
