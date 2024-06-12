<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function showHeroPage(User $user){
        $user = User::all();
        return view('user_siswa.hero',['user'=>$user]);
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
        return view('user_siswa.portofolio');
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
