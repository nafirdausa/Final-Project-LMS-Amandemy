<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Materi;
use App\Models\Kelas;
use App\Models\Tugas;
use App\Models\Ujian;
use App\Models\Raport;
use App\Models\Portofolio;
use App\Models\TugasSiswa;
use App\Models\UjianSiswa;

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
        $user = Auth::user();
        $clases = Kelas::all();
        $lastAccessedCourse = null;

        if ($user->last_accessed_course_id) {
            $lastAccessedCourse = Kelas::find($user->last_accessed_course_id);
        }

        return view('user_siswa.home', compact('clases', 'lastAccessedCourse'));
    }

    public function showCourcePage()
    {
        $clases = Kelas::all();
        return view('user_siswa.course', compact('clases'));
    }

    public function showDetailCourcePage($id)
    {
        $user = Auth::user();
        $user->last_accessed_course_id = $id;
        $user->save();

        $kelas = Kelas::all(); // Ambil semua data kelas
        $materi = Materi::all(); // Ambil semua data materi
        $tugas = Tugas::all(); // Ambil semua data tugas
        $ujian = Ujian::all(); // Ambil semua data ujian
        return view('user_siswa.detail_course', compact('id', 'kelas', 'materi', 'tugas', 'ujian'));
    }

    public function showForumPage()
    {
        $discussions = Discussion::with('user', 'replies.user')->get();
        return view('forum', compact('discussions'));
    }

    public function showReportPage()
    {
        $user = auth()->user();
        $raports = Raport::where('user_id', $user->id)->with(['user', 'kelas', 'mapel'])->get();
        return view('user_siswa.report', compact('raports'));
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

    public function showQuizPage($tugas_id)
    {
        $kelas = Kelas::all();
        $tugas = Tugas::find($tugas_id); // Ambil detail tugas berdasarkan tugas_id

        return view('user_siswa.quiz', compact('kelas', 'tugas'));
    }

    public function showAddQuizPage()
    {
        $kelas = Kelas::all();
        return view('user_siswa.quiz-add', compact('kelas'));
    }
    
    public function showUjianPage($ujian_id)
    {
        $kelas = Kelas::all();
        $ujian = Ujian::find($ujian_id); // Ambil detail ujian berdasarkan ujian_id

        return view('user_siswa.quiz', compact('kelas', 'ujian'));
    }

    public function showAddUjianPage()
    {
        return view('user_siswa.ujian-add');
    }

    public function submitTugasSiswa(Request $request, $tugasId)
    {
        $request->validate([
            'file' => 'required|file|max:2048'
        ]);

        // Simpan file jawaban
        $jawabanFile = $request->file('file');
        $fileName = time() . '_' . $jawabanFile->getClientOriginalName();
        $jawabanFile->storeAs('public/tugas_siswa_files', $fileName);

        // Simpan data jawaban ke database
        TugasSiswa::create([
            'tugas_id' => $tugasId,
            'siswa_id' => Auth::id(),
            'file' => $fileName
        ]);

        return redirect()->route('dashboard.siswa.quiz-add')->with('success', 'Jawaban tugas berhasil dikirim');
    }
    
    public function submitUjianSiswa(Request $request, $ujianId)
    {
        $request->validate([
            'file' => 'required|file|max:2048', // Maksimal 2MB
        ]);

        // Simpan file jawaban
        $jawabanFile = $request->file('file');
        $fileName = time() . '_' . $jawabanFile->getClientOriginalName();
        $jawabanFile->storeAs('public/ujian_siswa_files', $fileName);

        // Simpan data jawaban ke database
        UjianSiswa::create([
            'ujian_id' => $ujianId,
            'siswa_id' => Auth::user()->id, // Asumsi id siswa diambil dari user yang sedang login
            'file' => $fileName,
        ]);

        return redirect()->route('dashboard.siswa.ujian-add')->with('success', 'Jawaban ujian berhasil dikirim');
    }
}