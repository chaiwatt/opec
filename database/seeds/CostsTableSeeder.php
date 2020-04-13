<?php

use Illuminate\Database\Seeder;

class CostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('costs')->insert(
        [
            [
                'school_id' => 1,
                'subsidy_sub_category_id' => 2,
                'cost_type_id' => 1,
                'student_id' => 1,
                'price' => '550',
                'note' => 'ค่าหนังสือเรียน'
            ],
            [
                'school_id' => 1,
                'subsidy_sub_category_id' => 3,
                'cost_type_id' => 1,
                'student_id' => 2,
                'price' => '630',
                'note' => 'ค่าหนังสือเรียน'
            ],
            [
                'school_id' => 1,
                'subsidy_sub_category_id' => 4,
                'cost_type_id' => 1,
                'student_id' => 3,
                'price' => '720',
                'note' => 'ค่าหนังสือเรียน'
            ],
            [
                'school_id' => 1,
                'subsidy_sub_category_id' => 2,
                'cost_type_id' => 1,
                'student_id' => 4,
                'price' => '550',
                'note' => 'ค่าหนังสือเรียน'
            ],
            [
                'school_id' => 1,
                'subsidy_sub_category_id' => 4,
                'cost_type_id' => 1,
                'student_id' => 5,
                'price' => '720',
                'note' => 'ค่าหนังสือเรียน'
            ],
            [
                'school_id' => 1,
                'subsidy_sub_category_id' => 2,
                'cost_type_id' => 1,
                'student_id' => 6,
                'price' => '550',
                'note' => 'ค่าหนังสือเรียน'
            ],
        ]);
    }
}

