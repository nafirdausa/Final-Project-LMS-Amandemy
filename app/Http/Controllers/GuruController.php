<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class GuruController extends Controller
{
    //
    public function guruDashboard(){
        return view('user_guru.home');
    }
    public function kelas(){
        $clases = Kelas::all();
        return view('user_guru.kelas', compact('clases'));
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
    public function showFormKelas(){
        return view('user_guru.form_add_kelas');
    }
    
    public function addKelas(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_mapel' => 'required|string',
            'nama_kelas' => 'required|string',
            'tahun_ajaran' => 'required|string',
            'nama_pengajar' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('dashboard.guru.form_kelas')
                ->withErrors($validator)
                ->withInput();
        }

        Kelas::create([
            'user_id' => Auth::user()->id,
            'nama_mapel' => $request->nama_mapel,
            'nama_kelas' => $request->nama_kelas,
            'tahun_ajaran' => $request->tahun_ajaran,
            'nama_pengajar' => $request->nama_pengajar,
        ]);

        return redirect()->route('dashboard.guru.kelas')->with('success', 'Potofolio upload successfully');
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
    public function tugasSiswa(){
        return view('user_guru.tugas_siswa');
    }
    public function uasSiswa(){
        return view('user_guru.uas_siswa');
    }
    public function editTugasSiswa(){
        return view('user_guru.form_edit_tugas');
    }
    public function editUjianSiswa(){
        return view('user_guru.form_edit_ujian');
    }
}
