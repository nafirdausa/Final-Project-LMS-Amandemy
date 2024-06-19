<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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

    public function tugas(){
        $tugas = Tugas::where('guru_id', Auth::id())->get();
        return view('user_guru.tugas', compact('tugas'));
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
            'time' => 'required|date_format:H:i',
            'file' => 'required|file|max:2048',
            'subject' => 'required|string',
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
            'subject' => $request->subject,
            'nilai' => $request->nilai,
            'komentar' => '',
            'guru_id' => Auth::user()->id,
        ]);

        return redirect()->route('dashboard.guru.tugas')->with('success', 'Tugas berhasil ditambahkan');
    }

    public function showTugas($id) {
        $tugas = Tugas::findOrFail($id);
        return view('user_guru.read_tugas', compact('tugas'));
    }

    public function editTugas($id){
        $tugas = Tugas::findOrFail($id);
        return view('user_guru.edit_tugas', compact('tugas'));
    }

    public function updateTugas(Request $request, $id){
        $tugas = Tugas::findOrFail($id);

        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'deadline' => 'required|date',
            'time' => 'required|date_format:H:i',
            'file' => 'nullable|file|max:2048',
            'subject' => 'required|string',
            'nilai' => 'required|numeric',
        ]);

        $tugas->judul = $request->input('judul');
        $tugas->deskripsi = $request->input('deskripsi');
        $tugas->deadline = $request->input('deadline');
        $tugas->time = $request->input('time');
        $tugas->subject = $request->input('subject');
        $tugas->nilai = $request->input('nilai');

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
        $ujians = Ujian::where('guru_id', Auth::id())->get();
        return view('user_guru.ujian', compact('ujians'));
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
            'time' => 'required|date_format:H:i',
            'file' => 'required|file|max:2048',
            'subject' => 'required|string',
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
            'subject' => $request->subject,
            'nilai' => $request->nilai,
            'komentar' => '',
            'guru_id' => Auth::user()->id,
        ]);

        return redirect()->route('dashboard.guru.ujian')->with('success', 'Ujian berhasil ditambahkan');
    }

    public function showUjian($id) {
        $ujian = Ujian::findOrFail($id);
        return view('user_guru.show_ujian', compact('ujian'));
    }

    public function editUjian($id){
        $ujian = Ujian::findOrFail($id);
        return view('user_guru.edit_ujian', compact('ujian'));
    }

    public function updateUjian(Request $request, $id){
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'deadline' => 'required|date',
            'time' => 'required|date_format:H:i',
            'file' => 'nullable|file|max:2048',
            'subject' => 'required|string',
            'nilai' => 'required|numeric|min:0|max:100',
        ]);

        $ujian = Ujian::findOrFail($id);

        $deadline = $request->deadline . ' ' . $request->time;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/ujian', $fileName);
            $ujian->file = $fileName;
        }

        $ujian->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'deadline' => $deadline,
            'subject' => $request->subject,
            'nilai' => $request->nilai,
        ]);

        return redirect()->route('dashboard.guru.ujian')->with('success', 'Ujian updated successfully');
    }

    public function deleteUjian($id){
        $ujian = Ujian::findOrFail($id);
        $ujian->delete();
        return redirect()->route('dashboard.guru.ujian')->with('success', 'Ujian deleted successfully');
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
}
