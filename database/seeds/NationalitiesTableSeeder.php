<?php

use Illuminate\Database\Seeder;

class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nationalities')->insert([
            ['name' => 'ไทย'],
            ['name' => 'ญี่ปุ่น'],
            ['name' => 'จีน'],
            ['name' => 'ออสเตเรีย'],
            ['name' => 'ไร้สัญชาติ'],
            ['name' => 'อเมริกา']
        ]);
    }
}
