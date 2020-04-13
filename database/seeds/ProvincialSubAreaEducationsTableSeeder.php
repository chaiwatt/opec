<?php

use Illuminate\Database\Seeder;

class ProvincialSubAreaEducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincial_sub_area_education')->insert(
        [
            [
                'provincial_education_id' => '39',
                'name' => 'พื้นที่การศึกษาลำพูน เขต1'
            ],
            [
                'provincial_education_id' => '39',
                'name' => 'พื้นที่การศึกษาลำพูน เขต2'
            ],
        ]);
    }
}
