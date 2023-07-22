<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('classroom_user')->insert([
            [
                'user_id'=>1,
                'classroom_id'=>1
            ],
            [
                'user_id'=>1,
                'classroom_id'=>2
            ],
            [
                'user_id'=>1,
                'classroom_id'=>3
            ],
            [
                'user_id'=>1,
                'classroom_id'=>4
            ],
        ]);
    }
}
