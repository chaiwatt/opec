<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert(
            [
                [
                    'school_id' => 1,
                    'user_id' => 7,
                    'teacher_position_id' => 3,
                ],
                [
                    'school_id' => 1,
                    'user_id' => 9,
                    'teacher_position_id' => 1,
                ],
                [
                    'school_id' => 1,
                    'user_id' => 10,
                    'teacher_position_id' => 1,
                ]
            ]);
    }
}

