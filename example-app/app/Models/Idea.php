<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Idea extends Model
{
    use HasFactory;
    use SoftDeletes;

    const IS_CATEGORIES = [
        1 => '図面',
        2  => '線画パース',
        0  => 'その他',
    ];
    const FILE_TYPE = [
        1 => '.psd',
        2 => '.ai',
        3 => '.indd',
        4 => '.dwg',
        5 => '.dxf',
        0 => 'その他',
    ];
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function nices() {
        return $this->hasMany('App\Models\Nice');
    }
}
