<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert(
        [
            [
                'school_id' => 1,  //id =1
                'gender_id' => 1,
                'prefix_id' => 4,
                'name' => 'ปรรณวีร์',
                'lastname' => 'ชิงชัย',
                'dob' => '2005-07-10',
                'class_level_id' => 10,
                'class_room_id' => 1,
                'address' => 1,
                'province_id' => 39,
                'amphur_id' => 595,
                'tambol_id' => 5360,
                'picture' => 'storage/uploads/school/student/1.jpg',
                'phone' => '0882514525',
            ],
            [
                'school_id' => 1,  //id =2
                'gender_id' => 1,
                'prefix_id' => 4,
                'name' => 'นันทวัฒน์',
                'lastname' => 'ภู่สมบุญ',
                'dob' => '2005-07-10',
                'class_level_id' => 10,
                'class_room_id' => 1,
                'address' => 1,
                'province_id' => 39,
                'amphur_id' => 595,
                'tambol_id' => 5360,
                'picture' => 'storage/uploads/school/student/1.jpg',
                'phone' => '0882514525',
            ],
            [
                'school_id' => 1,  //id =3
                'gender_id' => 1,
                'prefix_id' => 4,
                'name' => 'ธนเสฏฐ์',
                'lastname' => 'กิตติพิตรพิบูล',
                'dob' => '2005-07-10',
                'class_level_id' => 10,
                'class_room_id' => 1,
                'address' => 1,
                'province_id' => 39,
                'amphur_id' => 595,
                'tambol_id' => 5360,
                'picture' => 'storage/uploads/school/student/1.jpg',
                'phone' => '0882514525',
            ],
            [
                'school_id' => 1,  //id =4
                'gender_id' => 1,
                'prefix_id' => 4,
                'name' => 'ธนกฤต',
                'lastname' => 'พิทักษ์',
                'dob' => '2005-07-10',
                'class_level_id' => 10,
                'class_room_id' => 1,
                'address' => 1,
                'province_id' => 39,
                'amphur_id' => 595,
                'tambol_id' => 5360,
                'picture' => 'storage/uploads/school/student/1.jpg',
                'phone' => '0882514525',
            ],
            [
                'school_id' => 1,  //id =5
                'gender_id' => 1,
                'prefix_id' => 4,
                'name' => 'จิระวัฒน์',
                'lastname' => 'โตวัฒน์นิมิต',
                'dob' => '2005-07-10',
                'class_level_id' => 10,
                'class_room_id' => 1,
                'address' => 1,
                'province_id' => 39,
                'amphur_id' => 595,
                'tambol_id' => 5360,
                'picture' => 'storage/uploads/school/student/1.jpg',
                'phone' => '0882514525',
            ],
            [
                'school_id' => 1,  //id =6
                'gender_id' => 1,
                'prefix_id' => 4,
                'name' => 'ชินบัญชร',
                'lastname' => 'จักรอิศราพงศ์',
                'dob' => '2005-07-10',
                'class_level_id' => 10,
                'class_room_id' => 1,
                'address' => 1,
                'province_id' => 39,
                'amphur_id' => 595,
                'tambol_id' => 5360,
                'picture' => 'storage/uploads/school/student/1.jpg',
                'phone' => '0882514525',
            ],
            [
                'school_id' => 1,  //id =7
                'gender_id' => 1,
                'prefix_id' => 4,
                'name' => 'พีรัช',
                'lastname' => 'สมบูรณ์',
                'dob' => '2005-07-10',
                'class_level_id' => 10,
                'class_room_id' => 1,
                'address' => 1,
                'province_id' => 39,
                'amphur_id' => 595,
                'tambol_id' => 5360,
                'picture' => 'storage/uploads/school/student/1.jpg',
                'phone' => '0882514525',
            ],
            [
                'school_id' => 1,  //id =8
                'gender_id' => 1,
                'prefix_id' => 4,
                'name' => 'วรัต',
                'lastname' => 'เขมาลีลากุล',
                'dob' => '2005-07-10',
                'class_level_id' => 10,
                'class_room_id' => 1,
                'address' => 1,
                'province_id' => 39,
                'amphur_id' => 595,
                'tambol_id' => 5360,
                'picture' => 'storage/uploads/school/student/1.jpg',
                'phone' => '0882514525',
            ],
            [
                'school_id' => 1,  //id =9
                'gender_id' => 1,
                'prefix_id' => 4,
                'name' => 'ธนวิชญ์',
                'lastname' => 'เอื้อหยิ่งศักดิ์',
                'dob' => '2005-07-10',
                'class_level_id' => 10,
                'class_room_id' => 1,
                'address' => 1,
                'province_id' => 39,
                'amphur_id' => 595,
                'tambol_id' => 5360,
                'picture' => 'storage/uploads/school/student/1.jpg',
                'phone' => '0882514525',
            ],
            [
                'school_id' => 1,  //id =10
                'gender_id' => 1,
                'prefix_id' => 4,
                'name' => 'ปัณณพงศ์',
                'lastname' => 'สงขกุล',
                'dob' => '2005-07-10',
                'class_level_id' => 10,
                'class_room_id' => 1,
                'address' => 1,
                'province_id' => 39,
                'amphur_id' => 595,
                'tambol_id' => 5360,
                'picture' => 'storage/uploads/school/student/1.jpg',
                'phone' => '0882514525',
            ]
        ]);
    }
}
