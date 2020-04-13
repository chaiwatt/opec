<?php

use Illuminate\Database\Seeder;

class BloodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bloods')->insert(
            [
                ['name' => 'A'],
                ['name' => 'B'],
                ['name' => 'O'],
                ['name' => 'AB'],
            ]);
    }
}
