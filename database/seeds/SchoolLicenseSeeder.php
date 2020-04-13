<?php

use Illuminate\Database\Seeder;

class SchoolLicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_licenses')->insert([
            [
                'school_id' => 1,
                'license' => '3625412',
                'start' => '1995-01-10',
                'active' => '1995-02-10',
                'student_age_range_id' => 1,
                'classrange' => 'ตอ-ป.6',
                'timerange' => '8.30-15.30',
            ]
        ]);
    }
}
