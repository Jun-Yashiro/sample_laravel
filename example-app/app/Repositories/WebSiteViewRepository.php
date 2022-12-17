<?php
namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Idea;

class WebSiteViewRepository{
    public function getList($request=NULL)
    {
        $idea = new Idea();
        $results = $idea->select([
             'ideas.id as id',
        "idea_name",
        "idea_url",
        "idea_picture_1",
        "idea_picture_2",
        "idea_picture_3",
        "good_count",
        "category" ,
        "file_type",
        "explain",
        "ideas.created_at",
        "ideas.updated_at",
        "ideas.delete_flg",
        "ideas.deleted_at",
        "user_id",
        "user_first_name" ,
        "user_later_name",
        "email" ,
        "email_verified_at" ,
        "age" ,
        "work" ,
        "university" ,
        "speciality" ,
        "remember_token",
        "password" ,
        ])
            ->leftjoin('users', 'ideas.user_id', 'users.id')
            ->get()
        ;
        if (!is_null($request)) {
            $results = $idea->select([
                '*',
            ])
                ->where('users.university', 'like', '%' . $request['university'] . '%')
                ->leftjoin('users', 'ideas.user_id', 'users.id')
                ->get()
            ;}
        return $results;
    }
}
