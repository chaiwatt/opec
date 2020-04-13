<?php

use Illuminate\Database\Seeder;

class SubsidySubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subsidy_sub_categories')->insert(
            [
                [
                    'subsidy_categorie_id' => 1,
                    'name' => 'เงินอุดหนุนรายบุคคล'
                ],
                [
                    'subsidy_categorie_id' => 2,
                    'name' => 'ค่าหนังสือเรียน'
                ],
                [
                    'subsidy_categorie_id' => 2,
                    'name' => 'อุปกรณ์การเรียน'
                ],
                [
                    'subsidy_categorie_id' => 2,
                    'name' => 'กิจกรรมพัฒนาคุณภาพผู้เรียน'
                ],
                [
                    'subsidy_categorie_id' => 3,
                    'name' => 'เงินอุดหนุนค่าอาหารเสิรม(นม)'
                ],
                [
                    'subsidy_categorie_id' => 4,
                    'name' => 'เงินอุดหนุนค่าอาหารกลางวัน'
                ],
                [
                    'subsidy_categorie_id' => 5,
                    'name' => 'เงินอุดหนุนสิ่งอำนวยความสะดวก สื่อ บริการ และความช่วยเหลืออื่นใดทางการศึกษา'
                ],
                [
                    'subsidy_categorie_id' => 6,
                    'name' => 'เงินอุดหนุนพัฒนาประสิทธิภาพการจัดการศึกษาของโรงเรียนเอกชนในพื้นที่จังหวัดชายแดนภาคใต้'
                ],
                [
                    'subsidy_categorie_id' => 7,
                    'name' => 'เงินอุดหนุนศูนย์การศึกษาอิสลามประจำมัสยิด (ตาดีกา)'
                ],
                [
                    'subsidy_categorie_id' => 8,
                    'name' => 'เงินอุดหนุนสถาบันปอเนาะ'
                ],
                [
                    'subsidy_categorie_id' => 9,
                    'name' => 'เงินอุดหนุนค่าตอบแทนครูสอนศาสนาในโรงเรียนเอกชนสอนศาสนาอิสลาม ๑๕ (๑) (๒) และการอุดหนุนเป็นค่าบริหารจัดการโรงเรียนเอกชนสอนศาสนาอิสลาม ๑๕ (๒)'
                ],
                [
                    'subsidy_categorie_id' => 10,
                    'name' => 'เงินอุดหนุนเงินเพิ่มการครองชีพชั่วคราวแก่ครูโรงเรียนเอกชน'
                ],
                [
                    'subsidy_categorie_id' => 11,
                    'name' => 'เงินอุดหนุนค่าตอบแทนพิเศษครูที่สอนนักเรียนพิการในโรงเรียนเอกชน'
                ],
                [
                    'subsidy_categorie_id' => 12,
                    'name' => 'เงินอุดหนุนพัฒนาคุณภาพการศึกษาในพื้นที่จังหวัดชายแดนภาคใต้สำหรับครูเอกชนในระบบ'
                ],
                [
                    'subsidy_categorie_id' => 13,
                    'name' => 'เงินอุดหนุนค่าก่อสร้างและปรับปรุงอาคารเรียนของโรงเรียนการกุศล'
                ]
            ]);
    }
}
