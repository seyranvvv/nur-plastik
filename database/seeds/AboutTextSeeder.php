<?php

use Illuminate\Database\Seeder;

class AboutTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = array(
            ['Biziň kompaniýamyz täze we berk hyzmatdaşlyklar üçin öňdengörüjilikli maksatnamalary taýýarlaýar.','Наша компания разрабатывает инновационные программы для новых и крепких партнерских отношений.','
Наша компания разрабатывает инновационные программы для новых и крепких партнерских отношений.
Nasha kompaniya razrabatyvayet innovatsionnyye programmy dlya novykh i krepkikh partnerskikh otnosheniy.
Our company develops innovative programs for new and strong partnerships.',],
            ['Kompaniýamyzda alyjylar köpçüligini döretmek maksatly täzeçe çözgütler kabul edilýär.','Наша компания внедряет новые решения, направленные на создание клиентской базы.','
Our company introduces new solutions aimed at creating a client base.'],
            ['Geljekde kärhanamyzy dünýäde tanalýan abraýly kompaniýalaryň hatarynda görkezmek iň uly maksatnamamyzdyr.','В будущем наша компания станет одной из самых престижных компаний мира.','
In the future, our company will become one of the most prestigious companies in the world.']);
        foreach ($objects as $object) {
            $obj = new App\AboutText();
            $obj->title_tm = $object[0];
            $obj->title_ru = $object[1];
            $obj->title_en = $object[2];
            $obj->save();
        }
    }
}
