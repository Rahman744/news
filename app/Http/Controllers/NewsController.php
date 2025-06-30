<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribes;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function home()
    {
        $news = News::latest()->take(6)->get();
        return view('home', compact('news'));
    }

    public function latest_stories() {
        $news = News::latest()->get();
        return view('latest_stories', compact('news'));
    }

    public function watch_now() {
        return view('watch_now');
    }

    public function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        if (Subscribes::where('email', $request->email)->exists()) {
            return redirect()->back()->with([
                'message' => 'You are already subscribed.',
                'message_type' => 'danger'
            ]);
        }

        $subscribe = new Subscribes();
        $subscribe->email = $request->email;
        $subscribe->save();

        return redirect()->back()->with([
            'message' => 'You have subscribed successfully.!',
            'message_type' => 'success'
        ]);
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'country' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'news_content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
        }

        $news = new News();
        $news->country = $request->country;
        $news->title = $request->title;
        $news->content = $request->input('news_content');
        $news->image = $path;
        $news->save();


        return redirect('/latest')->with([
            'message' => 'News added!',
            'message_type' => 'success'
        ]);
    }


    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }
}
