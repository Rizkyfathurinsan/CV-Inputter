<?php

namespace App\Http\Controllers;

use App\UserDetail;
use App\Education;
use App\Experience;
use App\Skill;

use Illuminate\Http\Request;

class ResumeController extends Controller
{

    public function index()
    {
        $details = UserDetail::latest()->get();
        $education = Education::latest()->get();
        $experience = Experience::latest()->get();
        $skill = Skill::latest()->get();

        // return view('resume_simple', compact('user'));
        return view('resume-ref', compact('details', 'education', 'experience', 'skill'));
        // return view('resume2', compact('user'));
    }

    public function download()
    {
        $details = UserDetail::latest()->get();
        $education = Education::latest()->get();
        $experience = Experience::latest()->get();
        $skill = Skill::latest()->get();

        $pdf = \PDF::loadView('resume-ref', compact('details', 'education', 'experience', 'skill'));
        return $pdf->download('resume.pdf');
    }
}
