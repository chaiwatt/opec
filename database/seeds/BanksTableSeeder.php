<?php

use Illuminate\Database\Seeder;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert(
            [
                ['name' => 'ธนาคารกรุงไทย'],
                ['name' => 'ธนาคารออมสิน']
            ]);
    }
}
