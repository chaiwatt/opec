<?php

use Illuminate\Database\Seeder;

class GeneralInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_infos')->insert(
            [
                [
                    'company' => 'สำนักงานคณะกรรมการส่งเสริมการศึกษาเอกชน',
                    'phone' => '022821000',
                    'fax' => '022821000',
                    'email' => 'admin@opec.go.th',
                    'address' => 'กลุ่มงานทะเบียน สำนักงานคณะกรรมการส่งเสริมการศึกษาเอกชน กระทรวงศึกษาธิการ 319 วังจันทรเกษม ถนนราชดำเนินนอก แขวงดุสิต เขตดุสิต กทม',
                ],
            ]);
    }
}