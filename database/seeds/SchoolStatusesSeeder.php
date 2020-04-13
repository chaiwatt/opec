<?php

use Illuminate\Database\Seeder;

class SchoolStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_statuses')->insert(
            [
                ['name' => 'เปิดดำเนินการ'],
                ['name' => 'ปิดกิจการ']
            ]);
    }
}
