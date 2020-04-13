<?php

use Illuminate\Database\Seeder;

class PovincialEdcationPositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('povincial_edcation_positions')->insert(
            [
                ['name' => 'ผู้อำนวยการกลุ่มส่งเสริมศึกษาเอกชน'],
                ['name' => 'ผู้อำนวยการสำนักงานการศึกษาเอกชนจังหวัด'],
                ['name' => 'ผู้อำนวยการสำนักงานการศึกษาเอกชนอำเภอ'],
                ['name' => 'นักวิชาการศึกษาชำนาญการ'],
                ['name' => 'นักวิชาการศึกษาปฏิบัติการ'],
                ['name' => 'เจ้าหน้าที่สำนักงาน'],
                ['name' => 'เจ้าพนักงานธุรการ'],
                ['name' => 'นักวิชาการศึกษาชำนาญการพิเศษ'],
                ['name' => 'นักวิเคราะห์นโยบายและแผน']
            ]);
    }
}
