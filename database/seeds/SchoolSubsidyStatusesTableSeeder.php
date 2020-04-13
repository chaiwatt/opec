<?php

use Illuminate\Database\Seeder;

class SchoolSubsidyStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_subsidy_statuses')->insert(
            [
                ['name' => 'รับเงินอุดหนุน'],
                ['name' => 'ไม่รับเงินอุดหนุน']
            ]);
    }
}
