<?php

use Illuminate\Database\Seeder;

class ClassLevelFeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_level_fees')->insert(
        [
            [
                'school_id' => 1,
                'class_level_id' => 1,
                'fee' => '25000',
            ],
            [
                'school_id' => 1,
                'class_level_id' => 2,
                'fee' => '25000',
            ],
            [
                'school_id' => 1,
                'class_level_id' => 3,
                'fee' => '25000',
            ],
            [
                'school_id' => 1,
                'class_level_id' => 4,
                'fee' => '12000',
            ],
            [
                'school_id' => 1,
                'class_level_id' => 5,
                'fee' => '12000',
            ],
            [
                'school_id' => 1,
                'class_level_id' => 6,
                'fee' => '12000',
            ],
            [
                'school_id' => 1,
                'class_level_id' => 7,
                'fee' => '12000',
            ],
            [
                'school_id' => 1,
                'class_level_id' => 8,
                'fee' => '15000',
            ],
            [
                'school_id' => 1,
                'class_level_id' => 9,
                'fee' => '15000',
            ],
            [
                'school_id' => 1,
                'class_level_id' => 10,
                'fee' => '1500',
            ]
        ]);
    }
}


