<?php

use Illuminate\Database\Seeder;

class StudentFamiliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_families')->insert(
            [
                [
                    'student_id' => 1,  //id =1
                    'father_prefix_id' => 1,
                    'father_name' => 'ณชพล',
                    'father_lastname' => 'พิศไหว',
                    'father_career' => 'ครู',
                    'father_phone' => '0882451475',
                    'father_email' => 'father@mymail.com',
                    'mother_prefix_id' => 2,
                    'mother_name' => 'วิไล',
                    'mother_lastname' => 'พิศไหว',
                    'mother_career' => 'ครู',
                    'parent_prefix_id' => 1,
                    'parent_name' => 'ณชพล',
                    'parent_lastname' => 'พิศไหว',
                    'parent_career' => 'ครู',
                    'parent_phone' => '0882451475',
                    'parent_email' => 'father@mymail.com',
                ]
            ]);
    }
}
