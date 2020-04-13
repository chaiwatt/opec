<?php

use Illuminate\Database\Seeder;

class SchoolSubsidyTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_subsidy_transactions')->insert(
        [
            [
                'project_id' => 1,
                'school_id' => 1,
                'school_subsidy_status_id' => 1,
            ]
        ]);
    }
}
