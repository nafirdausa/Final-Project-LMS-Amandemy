<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Materi;
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

class GuruController extends Controller
{
    public function guruDashboard(){
        $jumlahSiswa = User::where('role', 'siswa')->count();
        $jumlahGuru = User::where('role', 'guru')->count();
        $user = User::all();
        $jumlahKelas = Kelas::count();
        $jumlahPortofolio = Portofolio::count();
        $portofolios = Portofolio::all();

        return view('user_guru.home', compact('jumlahSiswa', 'jumlahGuru', 'user', 'jumlahKelas', 'jumlahPortofolio', 'portofolios'));
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

    public function showKelas($id)
    {
        $class = Kelas::findOrFail($id);
        return view('user_guru.show_kelas', compact('class'));
    }

    // Edit (Show Edit Form)
    public function editKelas($id)
    {
        $class = Kelas::findOrFail($id);
        return view('user_guru.edit_kelas', compact('class'));
    }

    // Update (Save Edit Form)
    public function updateKelas(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_mapel' => 'required|string',
            'nama_kelas' => 'required|string',
            'tahun_ajaran' => 'required|string',
            'nama_pengajar' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('dashboard.guru.edit_kelas', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $class = Kelas::findOrFail($id);
        $class->update([
            'nama_mapel' => $request->nama_mapel,
            'nama_kelas' => $request->nama_kelas,
            'tahun_ajaran' => $request->tahun_ajaran,
            'nama_pengajar' => $request->nama_pengajar,
        ]);

        return redirect()->route('dashboard.guru.kelas')->with('success', 'Kelas berhasil diperbarui');
    }

    // Delete (Delete Kelas)
    public function deleteKelas($id)
    {
        $class = Kelas::findOrFail($id);
        $class->delete();
        return redirect()->route('dashboard.guru.kelas')->with('success', 'Kelas berhasil dihapus');
    }

    public function materi()
    {
        $materi = Materi::where('guru_id', Auth::id())->get();
        $guru_id = Auth::id();
        $kelas = Kelas::where('user_id', $guru_id)->get();
        return view('user_guru.materi', compact('materi', 'kelas'));
    }

    public function addMateri()
    {
        $guru_id = Auth::id();
        $kelas = Kelas::where('user_id', $guru_id)->get();
        return view('user_guru.form_add_materi', compact('kelas'));
    }

    public function submitMateri(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'file' => 'required|file|mimes:pdf,doc,docx,zip,jpg,png,jpeg,mp3,mp4|max:2048',
            'subject' => 'required|exists:kelas,id'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Simpan file materi
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/materi', $fileName);

        // Simpan data materi ke database
        Materi::create([
            'guru_id' => Auth::id(),
            'kelas_id' => $request->subject,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file' => $fileName
        ]);

        return redirect()->route('dashboard.guru.materi')->with('success', 'Materi berhasil ditambahkan');
    }

    // Fungsi untuk menampilkan detail materi
    public function showMateri($id)
    {
        $materi = Materi::findOrFail($id);
        $guru_id = Auth::id();
        $kelas = Kelas::where('user_id', $guru_id)->get();
        return view('user_guru.read_materi', compact('materi', 'kelas'));
    }

    // Fungsi untuk menampilkan form edit materi
    public function editMateri($id)
    {
        $materi = Materi::findOrFail($id);
        $kelas = Kelas::all();
        return view('user_guru.edit_materi', compact('materi', 'kelas'));
    }

    // Fungsi untuk mengupdate materi
    public function updateMateri(Request $request, $id)
    {
        $materi = Materi::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'file' => 'file|mimes:pdf,doc,docx,zip|max:2048',
            'subject' => 'required|exists:kelas,id'
        ]);

        $materi->judul = $request->input('judul');
        $materi->deskripsi = $request->input('deskripsi');
        $materi->kelas_id = $request->input('subject');

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/materi', $filename);
            $materi->file = $filename;
        }

        $materi->save();

        return redirect()->route('dashboard.guru.materi')->with('success', 'Materi berhasil diupdate.');
    }

    // Fungsi untuk menghapus materi
    public function deleteMateri($id)
    {
        $materi = Materi::findOrFail($id);
        $materi->delete();
        return redirect()->route('dashboard.guru.materi')->with('success', 'Materi berhasil dihapus');
    }

    public function tugas(){
        $tugas = Tugas::where('guru_id', Auth::id())->get();

        $guru_id = Auth::id();
        $kelas = Kelas::where('user_id', $guru_id)->get();
        return view('user_guru.tugas', compact('tugas', 'kelas'));
    }

    public function addTugas()
    {
        $guru_id = Auth::id();
        $kelas = Kelas::where('user_id', $guru_id)->get();

        return view('user_guru.form_add_tugas', compact('kelas'));
    }

    public function submitTugas(Request $request)
    {
        // dd($request->all()); // Uncomment to debug

        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'deadline' => 'required|date',
            'time' => 'required|date_format:H:i',
            'file' => 'required|file|mimes:pdf,doc,docx,zip|max:2048',
            'subject' => 'required|exists:kelas,id'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Gabungkan tanggal dan waktu menjadi satu datetime
        $deadline = $request->deadline . ' ' . $request->time;

        // Simpan file tugas
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/tugas', $fileName);

        // Simpan data tugas ke database
        Tugas::create([
            'guru_id' => Auth::id(),
            'kelas_id' => $request->subject,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'deadline' => $request->deadline,
            'time' => $request->time,
            'file' => $fileName
        ]);

        return redirect()->route('dashboard.guru.tugas')->with('success', 'Tugas berhasil ditambahkan');
    }

    public function showTugas($id) {
        $tugas = Tugas::findOrFail($id);

        $guru_id = Auth::id();
        $kelas = Kelas::where('user_id', $guru_id)->get();
        return view('user_guru.read_tugas', compact('tugas', 'kelas'));
    }

    public function editTugas($id){
        $tugas = Tugas::findOrFail($id);
        $kelas = Kelas::all();
        return view('user_guru.edit_tugas', compact('tugas', 'kelas'));
    }

    public function updateTugas(Request $request, $id){
        $tugas = Tugas::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'deadline' => 'required|date',
            'time' => 'required|date_format:H:i',
            'file' => 'required|file|mimes:pdf,doc,docx,zip|max:2048',
            'subject' => 'required|exists:kelas,id'
        ]);

        $tugas->judul = $request->input('judul');
        $tugas->deskripsi = $request->input('deskripsi');
        $tugas->deadline = $request->input('deadline');
        $tugas->time = $request->input('time');
        $tugas->subject = $request->input('subject');

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/tugas', $filename);
            $tugas->file = $filename;
        }

        $tugas->save();

        return redirect()->route('dashboard.guru.tugas')->with('success', 'Tugas berhasil diupdate.');
    }

    public function deleteTugas($id){
        $tugas = Tugas::findOrFail($id);
        $tugas->delete();
        return redirect()->route('dashboard.guru.tugas')->with('success', 'Tugas berhasil dihapus');
    }

    public function showPenilaianForm()
    {
        $tugas = Tugas::all();
        return view('user_guru.penilaian', compact('tugas'));
    }

    public function nilaiTugasSiswa(Request $request, $tugasSiswaId)
    {
        // Validasi input
        $request->validate([
            'nilai' => 'required|integer|min:0|max:100',
            'komentar' => 'nullable|string'
        ]);

        // Simpan penilaian ke dalam database (contoh menggunakan update pada tabel Tugas)
        $tugasSiswa = TugasSiswa::findOrFail($tugasSiswaId);
        $tugasSiswa->update([
            'nilai' => $request->nilai,
            'komentar' => $request->komentar
        ]);

        // Redirect atau response sesuai kebutuhan
        return redirect()->back()->with('success', 'Nilai dan komentar berhasil disimpan');
    }
    
    public function ujian(){
        $ujians = Ujian::where('guru_id', Auth::id())->get();

        $guru_id = Auth::id();
        $kelas = Kelas::where('user_id', $guru_id)->get();
        return view('user_guru.ujian', compact('ujians', 'kelas'));
    }
    
    public function addUjian(){
        $guru_id = Auth::id();
        $kelas = Kelas::where('user_id', $guru_id)->get();
        return view('user_guru.form_add_ujian', compact('kelas'));
    }

    public function submitUjian(Request $request)
    {
        // dd($request->all()); // Uncomment to debug

        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'deadline' => 'required|date',
            'time' => 'required|date_format:H:i',
            'file' => 'required|file|mimes:pdf,doc,docx,zip|max:2048',
            'subject' => 'required|exists:kelas,id'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Gabungkan tanggal dan waktu menjadi satu datetime
        $deadline = $request->deadline . ' ' . $request->time;

        // Simpan file ujian
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/ujian', $fileName);

        // Simpan data ujian ke database
        Ujian::create([
            'guru_id' => Auth::id(),
            'kelas_id' => $request->subject,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'deadline' => $request->deadline,
            'time' => $request->time,
            'file' => $fileName
        ]);

        return redirect()->route('dashboard.guru.ujian')->with('success', 'Ujian berhasil ditambahkan');
    }

    public function showUjian($id) {
        $ujian = Ujian::findOrFail($id);

        $guru_id = Auth::id();
        $kelas = Kelas::where('user_id', $guru_id)->get();
        return view('user_guru.show_ujian', compact('ujian', 'kelas'));
    }

    public function editUjian($id){
        $ujian = Ujian::findOrFail($id);

        $guru_id = Auth::id();
        $kelas = Kelas::where('user_id', $guru_id)->get();
        return view('user_guru.edit_ujian', compact('ujian', 'kelas'));
    }

    public function updateUjian(Request $request, $id){
        $ujian = Ujian::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'deadline' => 'required|date',
            'time' => 'required|date_format:H:i',
            'file' => 'required|file|mimes:pdf,doc,docx,zip|max:2048',
            'subject' => 'required|exists:kelas,id'
        ]);

        $ujian->judul = $request->input('judul');
        $ujian->deskripsi = $request->input('deskripsi');
        $ujian->deadline = $request->input('deadline');
        $ujian->time = $request->input('time');
        $ujian->subject = $request->input('subject');

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/ujian', $filename);
            $ujian->file = $filename;
        }

        $ujian->save();

        return redirect()->route('dashboard.guru.ujian')->with('success', 'Ujian berhasil diupdate.');
    }

    public function deleteUjian($id){
        $ujian = Ujian::findOrFail($id);
        $ujian->delete();
        return redirect()->route('dashboard.guru.ujian')->with('success', 'Ujian deleted successfully');
    }

    public function showPenilaianUjian()
    {
        $ujian = Ujian::all();
        return view('user_guru.penilaian_ujian', compact('ujian'));
    }

    public function nilaiUjianSiswa(Request $request, $ujianSiswaId)
    {
        // Validasi input
        $request->validate([
            'nilai' => 'required|integer|min:0|max:100',
            'komentar' => 'nullable|string'
        ]);

        // Simpan penilaian ke dalam database (contoh menggunakan update pada tabel Tugas)
        $ujianSiswa = UjianSiswa::findOrFail($ujianSiswaId);
        $ujianSiswa->update([
            'nilai' => $request->nilai,
            'komentar' => $request->komentar
        ]);

        // Redirect atau response sesuai kebutuhan
        return redirect()->back()->with('success', 'Nilai dan komentar berhasil disimpan');
    }

    public function raport(){
        $raports = Raport::with(['user', 'kelas', 'mapel'])->get();
        return view('user_guru.raport', compact('raports'));
    }
    
    public function addRaport() {
        $kelas = Kelas::all();
        $siswa = User::where('role', 'siswa')->get();
        return view('user_guru.form_add_raport', compact('kelas', 'siswa'));
    }

    public function storeRaport(Request $request)
    {
        $request->validate([
            'tahun_ajaran' => 'required|string',
            'kelas_id' => 'required|exists:kelas,id',
            'user_id' => 'required|exists:users,id',
            'mapel_id' => 'required|exists:kelas,id',
            'nilai' => 'required|integer|min:0|max:100'
        ]);

        Raport::create($request->all());
        return redirect()->route('dashboard.guru.raport')->with('success', 'Raport berhasil ditambahkan.');
    }

    public function showRaport($id)
    {
        $raport = Raport::with(['user', 'kelas', 'mapel'])->findOrFail($id);
        return view('user_guru.read_raport', compact('raport'));
    }

    public function editRaport($id)
    {
        $raport = Raport::find($id);
        $kelas = Kelas::all();
        $siswa = User::where('role', 'siswa')->get();
        return view('user_guru.edit_raport', compact('raport', 'kelas', 'siswa'));
    }

    public function updateRaport(Request $request, $id)
    {
        $request->validate([
            'tahun_ajaran' => 'required|string',
            'kelas_id' => 'required|exists:kelas,id',
            'user_id' => 'required|exists:users,id',
            'mapel_id' => 'required|exists:kelas,id',
            'nilai' => 'required|integer|min:0|max:100'
        ]);

        $raport = Raport::find($id);
        $raport->update($request->all());
        return redirect()->route('dashboard.guru.raport')->with('success', 'Raport berhasil diperbarui.');
    }

    public function deleteRaport($id)
    {
        $raport = Raport::find($id);
        $raport->delete();
        return redirect()->route('dashboard.guru.raport')->with('success', 'Raport berhasil dihapus.');
    }

    public function editTugasSiswa(){
        return view('user_guru.form_edit_tugas');
    }
    public function editUjianSiswa(){
        return view('user_guru.form_edit_ujian');
    }
}
