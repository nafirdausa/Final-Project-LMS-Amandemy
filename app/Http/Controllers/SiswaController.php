<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Portofolio;

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
        return view('user_siswa.home');
    }
    
    public function showCourcePage() 
    {
        return view('user_siswa.course');
    }
    
    public function showDetailCourcePage() 
    {
        return view('user_siswa.detail_course');
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
        return view('user_siswa.quiz');
    }
    
    public function showAddQuizPage() 
    {
        return view('user_siswa.quiz-add');
    }
}
