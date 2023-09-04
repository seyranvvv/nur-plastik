<?php

use Illuminate\Database\Seeder;

class OurFeauterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = array(
            ['Ýokary tejribeli hünärmenler','Специалисты с большим опытом','
Experts with extensive experience',],
            ['Uzak aralyklara ýükleriň çalt eltilmegi','Быстрая доставка грузов на большие расстояния','
Fast delivery of goods over long distances'],
            ['Ähli ýük ugurlary  boýunça köpýyllyk tejribe','Многолетний опыт работы во всех сферах грузоперевозок','
Many years of experience in all areas of cargo transportation'],
            ['Ygtybarly hyzmatdaşlyk','Надежное сотрудничество','Reliable cooperation']);
        foreach ($objects as $object) {
            $obj = new App\OurFeauter();
            $obj->title_tm = $object[0];
            $obj->title_ru = $object[1];
            $obj->title_en = $object[2];
            $obj->save();
        }
    }
}
