<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Tugas;
use App\Models\Ujian;
use App\Models\Portofolio;
use App\Models\JawabanTugas;
use App\Models\jawabanUjian;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    public function showHeroPage(User $user){
        $user = User::all();
        return view('user_siswa.hero',['user'=>$user]);
    }

    public function siswaDashboard()
    {
        $clases = Kelas::all();
        return view('user_siswa.home', compact('clases'));
    }

    public function showCourcePage()
    {
        $clases = Kelas::all();
        return view('user_siswa.course', compact('clases'));
    }

    public function showDetailCourcePage()
    {
        $tugas = Tugas::all(); // Ambil semua data tugas
        $ujian = Ujian::all(); // Ambil semua data ujian
        return view('user_siswa.detail_course', compact('tugas', 'ujian'));
    }

    public function showForumPage()
    {
        return view('user_siswa.forum');
    }

    public function showReportPage()
    {
        return view('user_siswa.report');
    }

    public function showPortofolioPage()
    {
        $portofolios = Portofolio::all();
        return view('user_siswa.portofolio', compact('portofolios'));
    }

    public function uploadPortofolio(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'judul' => 'required|string',
            'deskripsi' => 'required|string|max:2000',
            'link_project' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('dashboard.siswa.portofolio')
                ->withErrors($validator)
                ->withInput();
        }

        $file = $request->file('gambar');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move('storage/portofolio', $fileName);

        Portofolio::create([
            'user_id' => Auth::user()->id,
            'gambar' => '/storage/portofolio/' . $fileName,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link_project' => $request->link_project,
        ]);

        return redirect()->route('dashboard.siswa.portofolio')->with('success', 'Potofolio upload successfully');
    }

    public function showQuizPage()
    {
        $tugas = Tugas::all();
        return view('user_siswa.quiz', compact('tugas'));
    }

    public function showAddQuizPage()
    {
        return view('user_siswa.quiz-add');
    }
    
    public function showUjianPage()
    {
        $ujian = Ujian::all(); // Ambil semua data ujian
        return view('user_siswa.ujian', compact('ujian'));
    }

    public function showAddUjianPage()
    {
        return view('user_siswa.ujian-add');
    }

    public function submitJawabanTugas(Request $request, $tugas_id)
    {
        $request->validate([
            'jawaban' => 'required|file|max:2048', // Maksimal 2MB
        ]);

        // Simpan file jawaban
        $jawabanFile = $request->file('jawaban');
        $fileName = time() . '_' . $jawabanFile->getClientOriginalName();
        $jawabanFile->storeAs('public/jawaban', $fileName);

        // Simpan data jawaban ke database
        JawabanTugas::create([
            'tugas_id' => $tugas_id,
            'siswa_id' => Auth::user()->id, // Asumsi id siswa diambil dari user yang sedang login
            'file_jawaban' => $fileName,
        ]);

        return redirect()->route('dashboard.siswa.quiz-add')->with('success', 'Jawaban tugas berhasil dikirim');
    }
    
    public function submitJawabanUjian(Request $request, $ujian_id)
    {
        $request->validate([
            'jawaban' => 'required|file|max:2048', // Maksimal 2MB
        ]);

        // Simpan file jawaban
        $jawabanFile = $request->file('jawaban');
        $fileName = time() . '_' . $jawabanFile->getClientOriginalName();
        $jawabanFile->storeAs('public/jawabanUjian', $fileName);

        // Simpan data jawaban ke database
        JawabanUjian::create([
            'ujian_id' => $ujian_id,
            'siswa_id' => Auth::user()->id, // Asumsi id siswa diambil dari user yang sedang login
            'file_jawaban' => $fileName,
        ]);

        return redirect()->route('dashboard.siswa.ujian-add')->with('success', 'Jawaban ujian berhasil dikirim');
    }
}