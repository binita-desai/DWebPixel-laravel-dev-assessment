<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;
use Inertia\Inertia;

class JobPostController extends Controller
{
    public function index()
    {
        $jobs = JobPost::with('skills')->get();
        return Inertia::render('Dashboard', ['jobs' => $jobs]);
    }
}
