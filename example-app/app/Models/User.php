<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Idea;

class User extends Authenticatable
{
    // 中略
    protected $fillable = ['user_first_name','user_later_name','age','work','university','speciality','email','password'];
    public function Ideas()
    {
        return $this->hasMany('App\Models\Idea');
    }
    const IS_JOBS = [
        1 => '学生',
        2  => 'デザイナー',
        3  => '建築関連',
        0  => 'その他',
    ];
    public function nices() {
        return $this->hasMany('App\Models\Nice');
    }

}
