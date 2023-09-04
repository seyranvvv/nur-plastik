<?php

use Illuminate\Database\Seeder;

class ServiceAboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = array(
            ['Biziň hyzmatlarymyz:','Наши сервисы:','Our services','“Nur Plastik” Hojalyk jemgyýeti ýurdumyzda polipropilen, polietilen we plastmassa önümlerini öndüriji kärhana bolup, häzirki wagtda bu ýerde polipropilenden we polietilenden - sumkalar, ruçkalar, paletler we beýlekiler öndürilýär. Şeýle-de, Hojalyk Jemgyýetimiz käbir degişli önümleri sargytlar boýunça dünýäniň ösen döwletlerinden getirip berýär. Häzirki döwürde Hojalyk Jemgyýetimiz Russiýanyň, Gazagystanyň, Moldawiýanyň, Türkiýäniň, Ukrainanyň, Birleşen Arap Emirlikleriniň we Fransiýanyň öňdebaryjy kompaniýalary bilen hyzmatdaşlyk edýär. Bulardan başga-da, biziň hojalyk jemgyýetimizdäki önümçilik stanoklary Taýwan döwletinde öndürilen ýokary hilli “Lohia” tehnikalarydyr.', 'Частное предприятие “Jadyly Ýaprak” предлагает Вам следующие логистические услуги: Грузовые перевозки, Морские перевозки, Авиаперевозки и Железнодорожные перевозки. Перевозки специализированным наземным, воздушным, морским и железнодорожным транспортом; Перевозка тяжеловесных грузов и объемов; Аренда грузовых судов; Доставка курьером; Крупные погрузочно-разгрузочные работы; Складские услуги; Экспедиторские услуги; Миграционные услуги. Услуги долгосрочного складирования (включая таможенное складирование); Услуги по разгрузке и сортировке оборудования по товарным группам;
Услуги по учету отгрузок и подтверждению клиентов.
','']
        );
        foreach ($objects as $object) {
            $obj = new App\ServiceAbout();
            $obj->title_tm = $object[0];
            $obj->title_ru = $object[1];
            $obj->title_en = $object[2];
            $obj->name_tm = $object[3];
            $obj->name_ru = $object[4];
            $obj->name_en = $object[5];
            $obj->save();
        }
    }
}
