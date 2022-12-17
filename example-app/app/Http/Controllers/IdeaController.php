<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateIdea;
use App\Http\Requests\EditTask;
use App\Models\Idea;
use App\Models\Nice;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IdeaController extends Controller
{

    public function index()
    {
        return "Hello world";
    }

    public function list(int $id)
    {
        $user = User::find($id);
        $userIdeas = Idea::where('user_id', $user->id)->get();

        return view('admin/list', [
            'user' => $user,
            'userIdeas' => $userIdeas,
        ]);
    }


    public function create1()
    {
        $folders = Folder::all();

        return view('admin/new', [
            'folders' => $folders,
        ]);
    }

    public function create(int $userId, CreateIdea $request)
    {
        // フォルダモデルのインスタンスを作成する
        $idea = new Idea();
        // タイトルに入力値を代入する
        $idea->idea_name = $request->idea_name;
        $idea->idea_url = $request->idea_url;
        $idea->category = $request->category;
        $idea->file_type = $request->file_type;
        $idea->explain = $request->explain;
        //画像保存
        if (request('idea_picture_1')) {
            $filename = request()->file('idea_picture_1')->getClientOriginalName();
            $idea->idea_picture_1 = request('idea_picture_1')->storeAs('public/images', $filename);
        }
        if (request('idea_picture_2')) {
            $filename = request()->file('idea_picture_2')->getClientOriginalName();
            $idea->idea_picture_2 = request('idea_picture_2')->storeAs('public/images', $filename);
        }
        if (request('idea_picture_3')) {
            $filename = request()->file('idea_picture_3')->getClientOriginalName();
            $idea->idea_picture_3 = request('idea_picture_3')->storeAs('public/images', $filename);
        }
        // ★ ユーザーに紐づけて保存
        Auth::user()->ideas()->save($idea);

        return redirect()->route('ideas.list', [
            'id' => $userId,
        ]);
    }

    public function showCreateForm(int $userId)
    {
        return view('admin/create', [
            'user_id' => $userId
        ]);
    }

    public function showEditIdea( int $idea_id)
    {
        $idea = Idea::find($idea_id);
        try {
            // 値のバリデーション…

            $userId=Auth::id();

            if($idea->user_id == $userId){}
            else{
                throw new Exception("作成したユーザーでログインしてません");
            }
        } catch (Exception $e) {
            // 例外が発生した場合に行う処理
            return $e->getMessage(); // error messageを取得 (echoで出力)
        }
        return view('admin/edit', [
            'idea' => $idea,
        ]);
    }
    public function detail(int $id)
    {
        $idea = DB::table('ideas')->find($id);
        try {
        // 値のバリデーション…

            $userId=Auth::id();

            if($idea->user_id == $userId){}
            else{
                throw new Exception("作成したユーザーでログインしてません");
            }
    } catch (Exception $e) {
        // 例外が発生した場合に行う処理
        return $e->getMessage(); // error messageを取得 (echoで出力)
    }
        $nice=Nice::where('idea_id', $id)->where('user_id', auth()->user()->id)->first();
        $count=Nice::where('idea_id', $id)->count();
        return view('admin/detailIdea', [
            'idea' => $idea,
            'current_idea_id' => $id,
            'nice'=>$nice,
            'count'=>$count
        ]);
    }

    public function edit(int $idea_id, EditTask $request)
    {
        // フォルダモデルのインスタンスを作成する
        $idea = Idea::find($idea_id);
        // タイトルに入力値を代入する
        $idea->idea_name = $request->idea_name;
        $idea->idea_url = $request->idea_url;
        $idea->category = $request->category;
        $idea->file_type = $request->file_type;
        $idea->explain = $request->explain;
        //画像保存
        if (request('idea_picture_1')) {
            $filename = request()->file('idea_picture_1')->getClientOriginalName();
            $idea->idea_picture_1 = request('idea_picture_1')->storeAs('public/images', $filename);
        }
        if (request('idea_picture_2')) {
            $filename = request()->file('idea_picture_2')->getClientOriginalName();
            $idea->idea_picture_2 = request('idea_picture_2')->storeAs('public/images', $filename);
        }
        if (request('idea_picture_3')) {
            $filename = request()->file('idea_picture_3')->getClientOriginalName();
            $idea->idea_picture_3 = request('idea_picture_3')->storeAs('public/images', $filename);
        }
        // ★ ユーザーに紐づけて保存
        Auth::user()->ideas()->save($idea);


        // 3
        return redirect()->route('webSiteView.detail', [
            'id' => $idea_id,
        ]);
    }

    public function delete(Request $request) {
        Idea::find($request->idea_id)->delete();
        return redirect()->route('ideas.list', [
            'id' => $request->userId,
        ]);
    }

}
