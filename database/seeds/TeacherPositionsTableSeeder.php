<?php

use Illuminate\Database\Seeder;

class TeacherPositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teacher_positions')->insert(
            [
                ['name' => 'ครูผู้สอน'],
                ['name' => 'ผู้จัดการ'],
                ['name' => 'ผู้อำนวยการ']
            ]);
    }
}
