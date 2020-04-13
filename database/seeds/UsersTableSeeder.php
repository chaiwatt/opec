<?php

use App\Model\Prefix;
use App\Model\UserType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'user_type_id' => UserType::find(1)->id,
                    'name' => 'สำนักงานคณะกรรมการส่งเสริมการศึกษาเอกชน',
                    'email' => 'superadmin@opec.com',   
                    'provincial_education_id' => '0', 
                    'provincial_sub_area_education_id' => '0',  
                    'school_id' => '0',             
                    'password' => Hash::make('11111111')
                ],
                [
                    'user_type_id' => UserType::find(2)->id,
                    'name' => 'ศึกษาธิการจังหวัดลำพูน',
                    'email' => 'lpnadmin@opec.com',   
                    'provincial_education_id' => '39', 
                    'provincial_sub_area_education_id' => '0',  
                    'school_id' => '0',        
                    'password' => Hash::make('11111111')
                ],
                [
                    'user_type_id' => UserType::find(3)->id,
                    'name' => 'พื้นที่การศึกษาลำพูน เขต1',
                    'email' => 'lpnadminarea1@opec.com',     
                    'provincial_education_id' => '39',    
                    'provincial_sub_area_education_id' => '1',  
                    'school_id' => '0',     
                    'password' => Hash::make('11111111')
                ],
                [
                    'user_type_id' => UserType::find(3)->id,
                    'name' => 'พื้นที่การศึกษาลำพูน เขต2',
                    'email' => 'lpnadminarea2@opec.com',  
                    'provincial_education_id' => '39',  
                    'provincial_sub_area_education_id' => '2',  
                    'school_id' => '0',         
                    'password' => Hash::make('11111111')
                ],
                [
                    'user_type_id' => UserType::find(4)->id,
                    'name' => 'โรงเรียนใบบุญลำพูน',
                    'email' => 'baiboon@opec.com',
                    'provincial_education_id' => '39',   
                    'provincial_sub_area_education_id' => '1',  
                    'school_id' => '1',          
                    'password' => Hash::make('11111111')
                ],
                [
                    'user_type_id' => UserType::find(5)->id,
                    'name' => 'โรงเรียนอรพินพิทยา',
                    'email' => 'orapin@opec.com', 
                    'provincial_education_id' => '39', 
                    'provincial_sub_area_education_id' => '2',  
                    'school_id' => '2',           
                    'password' => Hash::make('11111111')
                ],
                [
                    'user_type_id' => UserType::find(4)->id,
                    'name' => 'วันวิสาข์',
                    'email' => 'wanwisa@opec.com',
                    'provincial_education_id' => '39',   
                    'provincial_sub_area_education_id' => '1',  
                    'school_id' => '1',          
                    'password' => Hash::make('11111111')
                ],
                [
                    'user_type_id' => UserType::find(4)->id,
                    'name' => 'อรพิน',
                    'email' => 'oripin@opec.com',
                    'provincial_education_id' => '39',   
                    'provincial_sub_area_education_id' => '1',  
                    'school_id' => '2',          
                    'password' => Hash::make('11111111')
                ],
                [
                    'user_type_id' => UserType::find(4)->id,
                    'name' => 'ครูบอย',
                    'email' => 'kruboyd@opec.com',
                    'provincial_education_id' => '39',   
                    'provincial_sub_area_education_id' => '1',  
                    'school_id' => '1',          
                    'password' => Hash::make('11111111')
                ],
                [
                    'user_type_id' => UserType::find(4)->id,
                    'name' => 'ครูเจน',
                    'email' => 'krujane@opec.com',
                    'provincial_education_id' => '39',   
                    'provincial_sub_area_education_id' => '1',  
                    'school_id' => '1',          
                    'password' => Hash::make('11111111')
                ],
            ]);
    }
}
