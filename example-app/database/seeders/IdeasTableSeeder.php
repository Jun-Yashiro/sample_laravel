<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdeasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->first(); // ★
        DB::table('ideas')->insert([
            'idea_name' => '平面図',
            'idea_url' => 'https://www.hypertextcandy.com/laravel-tutorial-authentication', // ★
            'idea_picture_1' => 'https://www.hypertextcandy.com/laravel-tutorial-authentication',
            'idea_picture_2' => 'https://www.hypertextcandy.com/laravel-tutorial-authentication',
            'idea_picture_3' => 'https://www.hypertextcandy.com/laravel-tutorial-authentication',
            'good_count' => '3',
            'category' => '図面',
            'file_type' => '1',
            'explain' => '図面です',
            'user_id' => $user->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
