<?php

use Illuminate\Database\Seeder;

class PrefixesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prefixes')->insert(
            [
                ['name' => 'นาย'],
                ['name' => 'นาง'],
                ['name' => 'นางสาว'],
                ['name' => 'เด็กชาย'],
                ['name' => 'เด็กหญิง']
            ]);
    }
}
