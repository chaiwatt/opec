<?php

use Illuminate\Database\Seeder;

class ProvincialEducatioTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincial_educatio_types')->insert(
            [
                ['name' => 'ศึกษาธิการจังหวัด'],
                ['name' => 'สช.']
            ]);
    }
}
