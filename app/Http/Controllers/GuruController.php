<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Tugas;
use App\Models\Ujian;

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

    public function tugas(){
        return view('user_guru.tugas');
    }

    public function addTugas(){
        return view('user_guru.form_add_tugas');
    }

    public function submitTugas(Request $request)
    {
        // dd($request->all()); // Uncomment to debug

        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'deadline' => 'required|date',
            'time' => 'required|date_format:H:i', // Validasi waktu
            'file' => 'required|file|max:2048', // Maksimal 2MB
            'nilai' => 'required|numeric|min:0|max:100',
        ]);

        // Gabungkan tanggal dan waktu menjadi satu datetime
        $deadline = $request->deadline . ' ' . $request->time;

        // Simpan file tugas
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/tugas', $fileName);

        // Simpan data tugas ke database
        Tugas::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'deadline' => $request->deadline,
            'time' => $request->time,
            'file' => $fileName,
            'nilai' => $request->nilai,
            'komentar' => '',
            'guru_id' => Auth::user()->id,
        ]);

        return redirect()->back()->with('success', 'Tugas berhasil ditambahkan');
    }

    public function showPenilaianForm(Tugas $tugas)
    {
        return view('user_guru.penilaian', compact('tugas'));
    }

    public function penilaian(Request $request, Tugas $tugas)
    {
        // Validasi input
        $request->validate([
            'nilai' => 'required|integer|min:0|max:100',
            'komentar' => 'nullable|string|max:255',
        ]);

        // Simpan penilaian ke dalam database (contoh menggunakan update pada tabel Tugas)
        $tugas->update([
            'nilai' => $request->nilai,
            'komentar' => $request->komentar,
        ]);

        // Redirect atau response sesuai kebutuhan
        return redirect()->route('tugas.index')->with('success', 'Penilaian berhasil disimpan.');
    }
    
    public function ujian(){
        return view('user_guru.ujian');
    }
    
    public function addUjian(){
        return view('user_guru.form_add_ujian');
    }

    public function submitUjian(Request $request)
    {
        // dd($request->all()); // Uncomment to debug

        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'deadline' => 'required|date',
            'time' => 'required|date_format:H:i', // Validasi waktu
            'file' => 'required|file|max:2048', // Maksimal 2MB
            'nilai' => 'required|numeric|min:0|max:100',
        ]);

        // Gabungkan tanggal dan waktu menjadi satu datetime
        $deadline = $request->deadline . ' ' . $request->time;

        // Simpan file ujian
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/ujian', $fileName);

        // Simpan data ujian ke database
        Ujian::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'deadline' => $request->deadline,
            'time' => $request->time,
            'file' => $fileName,
            'nilai' => $request->nilai,
            'komentar' => '',
            'guru_id' => Auth::user()->id,
        ]);

        return redirect()->back()->with('success', 'Ujian berhasil ditambahkan');
    }

    public function showPenilaianUjian(Ujian $ujian)
    {
        return view('user_guru.penilaian_ujian', compact('ujian'));
    }

    public function penilaianUjian(Request $request, Ujian $ujian)
    {
        // Validasi input
        $request->validate([
            'nilai' => 'required|integer|min:0|max:100',
            'komentar' => 'nullable|string|max:255',
        ]);

        // Simpan penilaian ke dalam database (contoh menggunakan update pada tabel Ujian)
        $ujian->update([
            'nilai' => $request->nilai,
            'komentar' => $request->komentar,
        ]);

        // Redirect atau response sesuai kebutuhan
        return redirect()->route('ujian.index')->with('success', 'Penilaian berhasil disimpan.');
    }

    public function raport(){
        return view('user_guru.raport');
    }
    
    public function addRaport(){
        return view('user_guru.form_add_raport');
    }
    public function editTugasSiswa(){
        return view('user_guru.form_edit_tugas');
    }
    public function editUjianSiswa(){
        return view('user_guru.form_edit_ujian');
    }
}
