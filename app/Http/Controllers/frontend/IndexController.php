<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Experience;
use App\Models\Header;
use App\Models\Project;
use App\Models\Skill;

class IndexController extends Controller
{
    public function index()
    {
        $header = Header::find(1);
        $about = About::find(1);
        $skill = Skill::latest()->get();
        $experience = Experience::latest()->get();
        $project = Project::latest()->get();
        return view('frontend.index', compact('header', 'about', 'skill', 'experience', 'project'));
    }
}
