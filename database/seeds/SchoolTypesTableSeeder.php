<?php

use Illuminate\Database\Seeder;

class SchoolTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_types')->insert(
            [
                ['name' => 'ในระบบประเภทสามัญศึกษา (ทั่วไป)'],
                ['name' => 'ในระบบประเภทสามัญศึกษา (การกุศลของวัด)'],
                ['name' => 'ในระบบประเภทสามัญศึกษา (การศึกษาพิเศษ)'],
                ['name' => 'ในระบบประเภทสามัญศึกษา (การศึกษาสงเคราะห์)'],
                ['name' => 'ในระบบประเภทสามัญศึกษา (ในพระราชนูประถัมภ์)'],
                ['name' => 'ในระบบประเภทสามัญศึกษา (อิสลามควบคุ๋สามัญ)'],
                ['name' => 'ในระบบประเภทสามัญศึกษา (การศึกษาพิเศษ)'],
                ['name' => 'ในระบบประเภทสามัญศึกษา (การกุศล)'],
                ['name' => 'ในระบบประเภทอาชีวศึกษา (ทั่วไป)']
            ]);
    }
}
