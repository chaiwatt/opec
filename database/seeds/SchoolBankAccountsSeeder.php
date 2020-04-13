<?php

use App\Model\School;
use Illuminate\Database\Seeder;

class SchoolBankAccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_bank_accounts')->insert([
            [
                'school_id' => 1,
                'bank_id' => 1,
                'accountnumber' => '121332124',
                'subsidy_categorie_id' => 1,
                'accountname' => School::find(1)->name,
                'branchname' => 'ลำพูน',
            ],
            [
                'school_id' => 1,
                'bank_id' => 1,
                'accountnumber' => '22154122',
                'subsidy_categorie_id' => 2,
                'accountname' => School::find(1)->name,
                'branchname' => 'ลำพูน',
            ],
        ]);
    }
}
