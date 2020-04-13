<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert(
            [
                [
                    'code' => '0000000001',
                    'provincial_sub_area_education_id' => '1',
                    'school_type_id' => '1',
                    'name' => 'โรงเรียนใบบุณลำพูน',
                    'school_director_id' => '7',
                    'moo' => '127',
                    'soi' => '1',
                    'road' => '1',
                    'address' => 'ถนนลำพูน-ดอยติ',
                    'province_id' => '39',
                    'amphur_id' => '595',
                    'tambol_id' => '5360',
                    'potalcode' => '51000',
                    'school_status_id' => '1',
                    'email' => 'contact@baiboon.ac.th',
                    'phone' => '053-512274, 082-3841119',
                    'website' => 'http://www.baiboon.ac.th',
                    'picture' => 'storage/uploads/school/info/1.jpg',
                    'school_license_id' => 1,                    
                    'picture' => '',
                    'fax' => '053-512273'
                ],
                [
                    'code' => '0000000001',
                    'provincial_sub_area_education_id' => '1',
                    'school_type_id' => '1',
                    'name' => 'โรงเรียนอรพินพิทยา',
                    'school_director_id' => '8',
                    'moo' => '129',
                    'soi' => '1',
                    'road' => '1',
                    'address' => 'ถนนสนามกีฬา',
                    'province_id' => '39',
                    'amphur_id' => '595',
                    'tambol_id' => '5356',
                    'potalcode' => '51000',
                    'school_status_id' => '1',
                    'email' => 'orapin_school129@hotmail.com',
                    'phone' => '053-534835',
                    'website' => 'http://www.orapin.ac.th',
                    'picture' => 'storage/uploads/school/info/2.jpg',
                    'school_license_id' => 1,  
                    'picture' => '',
                    'fax' => '053-534835'
                ],
            ]);
    }
}

