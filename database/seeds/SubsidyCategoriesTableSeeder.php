<?php

use Illuminate\Database\Seeder;

class SubsidyCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subsidy_categories')->insert(
            [
                ['name' => 'เงินอุดหนุนรายบุคคล'],
                ['name' => 'เงินอุดหนุนค่าหนังสือเรียน อุปกรณ์การเรียน เครื่องแบบนักเรียน และกิจกรรมพัฒนาคุณภาพผู้เรียน'],
                ['name' => 'เงินอุดหนุนค่าอาหารเสิรม(นม)'],
                ['name' => 'เงินอุดหนุนค่าอาหารกลางวัน'],
                ['name' => 'เงินอุดหนุนสิ่งอำนวยความสะดวก สื่อ บริการ และความช่วยเหลืออื่นใดทางการศึกษา'],
                ['name' => 'เงินอุดหนุนพัฒนาประสิทธิภาพการจัดการศึกษาของโรงเรียนเอกชนในพื้นที่จังหวัดชายแดนภาคใต้'],
                ['name' => 'เงินอุดหนุนศูนย์การศึกษาอิสลามประจำมัสยิด (ตาดีกา)'],
                ['name' => 'เงินอุดหนุนสถาบันปอเนาะ'],
                ['name' => 'เงินอุดหนุนค่าตอบแทนครูสอนศาสนาในโรงเรียนเอกชนสอนศาสนาอิสลาม ๑๕ (๑) (๒) และการอุดหนุนเป็นค่าบริหารจัดการโรงเรียนเอกชนสอนศาสนาอิสลาม ๑๕ (๒)'],
                ['name' => 'เงินอุดหนุนเงินเพิ่มการครองชีพชั่วคราวแก่ครูโรงเรียนเอกชน'],
                ['name' => 'เงินอุดหนุนค่าตอบแทนพิเศษครูที่สอนนักเรียนพิการในโรงเรียนเอกชน'],
                ['name' => 'เงินอุดหนุนพัฒนาคุณภาพการศึกษาในพื้นที่จังหวัดชายแดนภาคใต้สำหรับครูเอกชนในระบบ'],
                ['name' => 'เงินอุดหนุนค่าก่อสร้างและปรับปรุงอาคารเรียนของโรงเรียนการกุศล']
            ]);
    }
}
