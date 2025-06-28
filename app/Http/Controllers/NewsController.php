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

    public function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        if (\App\Models\Subscribes::where('email', $request->email)->exists()) {
            return redirect()->back()->with([
                'message' => 'Вы уже подписаны.',
                'message_type' => 'danger'
            ]);
        }

        $subscribe = new \App\Models\Subscribes();
        $subscribe->email = $request->email;
        $subscribe->save();

        return redirect()->back()->with([
            'message' => 'Вы подписались успешно!',
            'message_type' => 'success'
        ]);
    }

}
