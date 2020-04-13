<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {     
        $this->call(ProvincesTableSeeder::class);
        $this->call(AmphursTableSeeder::class);
        $this->call(TambolsTableSeeder::class);
        $this->call(GeneralInfosTableSeeder::class);
        $this->call(YearBudgetsTableSeeder::class);
        $this->call(ProvincialEducatioTypesTableSeeder::class);
        $this->call(StudentAgeRangesSeeder::class);
        $this->call(ProvincialEducationTableSeeder::class);
        $this->call(ProvincialSubAreaEducationsTableSeeder::class);
        $this->call(CostTypesTableSeeder::class);
        $this->call(TeacherPositionsTableSeeder::class);
        $this->call(BloodsTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(ReligionsTableSeeder::class);
        $this->call(NationalitiesTableSeeder::class);
        $this->call(EthnicitiesTableSeeder::class);
        $this->call(UserTypesTableSeeder::class);
        $this->call(SubsidyCategoriesTableSeeder::class);
        $this->call(SubsidySubCategoriesTableSeeder::class);
        $this->call(PrefixesTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(ClassRoomsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(StudentFamiliesTableSeeder::class);
        $this->call(TeachersTableSeeder::class);
        $this->call(CostsTableSeeder::class);
        $this->call(SchoolBankAccountsSeeder::class);
        $this->call(SchoolLicenseSeeder::class);
        $this->call(ClassLevelFeeSeeder::class);
        $this->call(SchoolSubsidyTransactionSeeder::class);
        
    }
}
