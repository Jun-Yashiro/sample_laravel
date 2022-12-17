<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditTask;
use App\Models\Idea;
use App\Models\Nice;
use App\Services\WebSiteViewService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WebSiteViewController extends Controller
{
    public function list()
    {
        $ideas = Idea::all();

        return view('public/listIdeas', [
            'ideas' => $ideas,
        ]);
    }

    public function sneakersList()
    {

        $webSiteViewService = new WebSiteViewService();
        $ideas = $webSiteViewService->getList();
        return view('Sneakers', [
            'ideas' => $ideas,
        ]);
    }

    public function sneakersIndex(Request $request)
    {
        $webSiteViewService = new WebSiteViewService();
        $ideas = $webSiteViewService->getList($request);

        return view('Sneakers', [
            'ideas' => $ideas,
        ]);
    }


    public function detail(int $id)
    {
        $idea = DB::table('ideas')->find($id);
        $userId=null;
        $userId=optional(auth()->user())->id;
        $nice=null;
if(!empty($userId)){
    $nice=Nice::where('idea_id', $id)->where('user_id', $userId)->first();
}
        $count=Nice::where('idea_id', $id)->count();
        return view('public/detailIdea', [
            'idea' => $idea,
            'current_idea_id' => $id,
            'nice'=>$nice,
            'count'=>$count
        ]);
    }

}
