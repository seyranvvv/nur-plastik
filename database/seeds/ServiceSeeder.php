<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = array(
            ['Polietilen önümlerini öndürmek','Производство изделий из полиэтилена','','Kompaniýamyzda oturdylan dünýäniň öňdebaryjy tehnikalary arkaly bu ýerde polietilenden dürli maksatly ýokary hilli torbalar we haltalar öndürilýär. ','Наша компания производит высококачественные полиэтиленовые пакеты и мешки различного назначения на высокотехнологичном оборудовании мирового уровня, установленном на нашем предприятии. ','', 'sdfsf','','','1'],
            ['Polipropilen önümlerini öndürmek','Производство изделий из полипропилена','','Şeýle-de, hojalyk jemgyýetimizde polipropilenden köp görnüşli ýokary hilli rulonlaryň önümçiligi hem ýola goýuldy.','Наша компания осуществляет грузовые перевозки как внутри, так и за пределами Туркменистана и СНГ. Наша компания также предлагает Вам услугу перевозки','','dgdsg','','','1'],
            ['Plastmassa önümlerini öndürmek','Производство пластиковых изделий','','Biz ýük ugradyjynyň statusynyň belli ýa-da belli däl bolmagyna garamazdan onuň ýükleriniň üstünde işleýäris.
Şonuň üçin hem, biziň howa ulagy arkaly ýükleri daşamak hyzmatymyz her bir müşderimiziň işleriniň netijeliligini ýokarlandyrmaga mümkinçilik berer.
','Мы работаем над отправкой груза, независимо от того, известен статус отправления или нет. Поэтому наша служба авиаперевозок позволит повысить эффективность каждого нашего клиента. ','','dfgdgdgdg','','','1'],
            ['Daşary ýurt önümlerini getirip bermek ','Импорт иностранных товаров','','“Jadyly Ýaprak” hususy kärhanasy tarapyndan müşderilerimiz üçin edilýän hyzmatlaryň biri hem ýükleri demir ýollary arkaly daşamak hyzmaty bolup durýar. Demirýol ulag ulgamy arkaly ýük daşamaga isleg birdirýänleriň sanynyň gün-günden artýandygyny göz öňünde tutup, kärhanamyz bu hyzmatyň gerimini mundan beýläk-de giňeltmek we hilini has-da ýokarlandyrmak maksatly işleriň ýerine ýetirilmegini çaltlaşdyrýar.','Одной из услуг, предоставляемых нашим клиентам частным предприятием «Jadyly Ýaprak», является услуга по перевозке грузов железнодорожным транспортом. Учитывая растущее количество желающих осуществлять перевозки грузов железнодорожным транспортом, наша компания наращивает темпы работ по дальнейшему расширению сферы применения и дальнейшему повышению качества данной услуги.','','erwtertewt','','','1']
        );
        foreach ($objects as $object) {
            $obj = new App\Service();
            $obj->title_tm = $object[0];
            $obj->title_ru = $object[1];
            $obj->title_en = $object[2];
            $obj->name_tm = $object[3];
            $obj->name_ru = $object[4];
            $obj->name_en = $object[5];
            $obj->slug = $object[6];
            $obj->img = $object[7];
            $obj->image_index = $object[8];
            $obj->active = $object[9];
            $obj->save();
        }
    }
}
