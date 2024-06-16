<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    //
    public function guruDashboard(){
        return view('user_guru.home');
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
    public function addMapel(){
        return view('user_guru.form_add_mapel');
    }
    public function addRaport(){
        return view('user_guru.form_add_raport');
    }
    public function addTugas(){
        return view('user_guru.form_add_tugas');
    }
    public function addUjian(){
        return view('user_guru.form_add_ujian');
    }
}
