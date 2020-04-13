<?php

use Illuminate\Database\Seeder;

class EthnicitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ethnicities')->insert([
            ['name' => 'ไทย'],
            ['name' => 'ญี่ปุ่น'],
            ['name' => 'จีน'],
            ['name' => 'ออสเตเรีย'],
            ['name' => 'ไร้สัญชาติ'],
            ['name' => 'อเมริกา']
        ]);
    }
}
