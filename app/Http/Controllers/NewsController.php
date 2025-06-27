<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function home() {
        return view('home');
    }

    public function latest_stories() {
        return view('latest_stories');
    }

    public function watch_now() {
        return view('watch_now');
    }
}
