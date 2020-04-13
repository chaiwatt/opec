<?php

use Illuminate\Database\Seeder;

class YearBudgetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('year_budgets')->insert(
            [
                [
                    'status' => 0,
                    'name' => '2560'
                ],
                [
                    'status' => 1,
                    'name' => '2561'
                ]
            ]);
    }
}
