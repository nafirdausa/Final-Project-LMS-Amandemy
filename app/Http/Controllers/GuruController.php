<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    //
    public function dashboard(){
        return view('user_guru.home');
        // return view('layouts.test');
    }
    public function mapel(){
        return view('user_guru.mapel');
    }
    public function tugas(){
        return view('user_guru.tugas');
    }
    public function ujian(){
        return view('user_guru.ujian');
    }
    public function raport(){
        return view('user_guru.raport');
    }
}
