<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Post;
use App\Models\Education;
use App\Models\Experience;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch data from the database
        $skills = Skill::orderBy('order', 'asc')->get();
        $projects = Project::orderBy('order', 'asc')->get();
        $posts = Post::whereNotNull('published_at')->orderBy('published_at', 'desc')->take(3)->get();
        $educations = Education::orderBy('order', 'asc')->get();
        $experiences = Experience::orderBy('order', 'asc')->get();  


        return view('welcome', compact(
            'skills',
            'projects',
            'posts',
            'educations',
            'experiences'
        ));
    }

    /**
     * Display the ebook landing page.
     *
     * @return \Illuminate\View\View
     */
    public function ebook()
    {
        // You might fetch ebook-specific data here later if needed
        return view('ebook');
    }
}
