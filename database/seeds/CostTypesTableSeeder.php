<?php

use Illuminate\Database\Seeder;

class CostTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cost_types')->insert([
            ['name' => 'ค่าอุดหนุนนักเรียน'],
            ['name' => 'ค่าอุดหนุนครู'],
            ['name' => 'ค่าอุดหนุนโรงเรียน'],
            ['name' => 'จัดซื้อจัดจ้าง']
        ]);
    }
}
