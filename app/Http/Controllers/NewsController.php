<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribes;

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

    public function check(Request $request) {
        $review = new Subscribes(); // Указываем правильную модель
        $review->email = $request->input('email');
        $review->save();

        return redirect()->back()->with('success', 'Вы успешно подписались!');
    }
}
