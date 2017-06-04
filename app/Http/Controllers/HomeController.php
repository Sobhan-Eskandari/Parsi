<?php

namespace App\Http\Controllers;

use App\Crew;
use App\Lecturer;
use App\Post;
use App\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Setting::findOrFail(1);
        $lecturers = Lecturer::all();
        $crews = Crew::all();
        $posts = Post::orderByRaw('created_at desc')->take(4)->get();
        return view('pages.homePage', compact('info', 'lecturers', 'crews', 'posts'));
    }

    public function about_us()
    {
        $info = Setting::findOrFail(1);
        return view('pages.aboutUs', compact('info'));
    }

    public function allPosts()
    {
        $info = Setting::findOrFail(1);
        $posts = Post::orderByRaw('created_at desc')->paginate(12);
        return view('pages.blogPng', compact('posts', 'info'));
    }

    public function showPost(Post $post)
    {
        $info = Setting::findOrFail(1);
        return view('pages.openPost', compact('post', 'info'));
    }
}
