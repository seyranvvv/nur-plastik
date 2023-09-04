<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = array(
            ['Ýöriteleşdirilen gury ýer, howa, deňiz we demir ýollary arkaly daşamak; Agramy we göwrümi uly ýükleri daşamak; Ýük daşamak üçin gämileri kireýine almak;','специализированные наземные, воздушные, морские и железнодорожные перевозки;
перевозка тяжеловесных и негабаритных грузов;
фрахтование судов;
','specialized land, air, sea and rail transportation;
transportation of heavy and oversized cargo;
chartering of ships;'],
            ['Kurýer üsti bilen eltip bermeklik; Göwrümi uly ýükleri ýüklemek / düşürmek boýunça işler;
Ammar hyzmatlary; Ekspeditor hyzmatlary; Göçmeklik bilen bagly hyzmatlar 
','ручная перевозка курьером;
операции по погрузке / разгрузке негабаритных грузов;
складские услуги;
экспедиторские услуги;
','manual transportation by courier;
operations for loading / unloading oversized cargo;
warehouse services;
forwarding services;'],
            ['Uzak möhletleýin ammar hyzmatlary (şol sanda gümrük ammarlaryny kireýine almaklyk);
Enjamlary düşürmek we harytlary haryt toparlary boýunça sortlamak hyzmatlary;
Ugradyşlaryň buhgalteriýasy we müşderi tassyklamalary boýunça hyzmatlar
','Долгосрочное складское обслуживание (также таможенное складирование)
Разгрузка агрегатов и сортировка товаров по товарным группам
Бухгалтерия отправлений и подтверждения клиентов.
','
Long-term warehousing service (also customs warehousing)
Unloading aggregates and sorting goods into product groups
Accounting for shipments and customer confirmations.'],
        );
        foreach ($objects as $object) {
            $obj = new App\Project();
            $obj->name_tm = $object[0];
            $obj->name_ru = $object[1];
            $obj->name_en = $object[2];
            $obj->save();
        }
    }
}
