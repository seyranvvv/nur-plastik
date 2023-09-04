<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = array(
            ['+99363413181', '','katherine.kalyagina@gmail.com', 'Türkmenistan, Lebap welaýaty, Türkmenabat şäheri.
 / Türkmenistan, Aşgabat şäheri
','Туркменистан, Лебапский велаят, город Туркменабат. Туркменистан, Ашхабад','Turkmenistan, Lebap velayat, city of Turkmenabat. Turkmenistan, Ashgabat']
        );
        foreach ($objects as $object) {
            $obj = new App\Contact();
            $obj->phone = $object[0];
            $obj->phone1 = $object[1];
            $obj->email = $object[2];
            $obj->adress_tm = $object[3];
            $obj->adress_ru = $object[4];
            $obj->adress_en = $object[5];
            $obj->save();
        }
    }
}
