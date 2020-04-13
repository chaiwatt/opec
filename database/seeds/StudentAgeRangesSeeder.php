<?php

use Illuminate\Database\Seeder;

class StudentAgeRangesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_age_ranges')->insert(
        [
            ['name' => '4-18 ปี'],
        ]);
    }
}
