<?php
namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_first_name' => 'test',
            'user_later_name' => 'test',
            'email' => 'dummy@email.com',
            'work' => 1,
            'university' => '明治大学',
            'speciality' => '建築',
            'age' => '26',
            'password' => bcrypt('test1234'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
