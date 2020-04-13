<?php

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_levels')->insert(
            [
                [
                    'school_id' => '1',
                    'name' => 'ตอ',
                ],
                [
                    'school_id' => '1',
                    'name' => 'อ.1',
                ],
                [
                    'school_id' => '1',
                    'name' => 'อ.2',
                ],
                [
                    'school_id' => '1',
                    'name' => 'อ.3',
                ],
                [
                    'school_id' => '1',
                    'name' => 'ป.1',
                ],
                [
                    'school_id' => '1',
                    'name' => 'ป.2',
                ],
                [
                    'school_id' => '1',
                    'name' => 'ป.3',
                ],
                [
                    'school_id' => '1',
                    'name' => 'ป.4',
                ],
                [
                    'school_id' => '1',
                    'name' => 'ป.5',
                ],
                [
                    'school_id' => '1',
                    'name' => 'ป.6',
                ]
            ]);
    }
}
