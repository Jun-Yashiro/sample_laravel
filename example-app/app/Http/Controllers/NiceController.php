<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use宣言追加
use App\Models\Idea;
use App\Models\Nice;
use Illuminate\Support\Facades\Auth;

class NiceController extends Controller
{
    public function nice(int $idea_id, Request $request)
    {
        $nice = new Nice();
        $nice->idea_id = $idea_id;
        $nice->user_id = Auth::user()->id;
        $nice->save();
        $count=Nice::where('idea_id', $idea_id)->count();
        Idea::where('id', $idea_id)->update(['good_count' => $count]);
        return back();
    }

    public function unnice(int $idea_id, Request $request)
    {
        $user = Auth::user()->id;
        $nice = Nice::where('idea_id', $idea_id)
            ->where('user_id', $user)
            ->first();
        $nice->delete();
        $count=Nice::where('idea_id', $idea_id)->count();
        Idea::where('id', $idea_id)->update(['good_count' => $count]);
        return back();
    }

}
