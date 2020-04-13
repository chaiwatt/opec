<?php

use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert(
            [
                ['name' => 'ผู้บริหารโครงการ'],
                ['name' => 'ศึกษาธิการจังหวัด'],
                ['name' => 'เขตพื้นที่การศึกษา'],
                ['name' => 'โรงเรียน'],
                ['name' => 'ครู']
            ]);
    }
}
