<?php

use Illuminate\Database\Seeder;

class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = array(
         ['Amatly','Удобный','Comfortable','Bu ýerde siz özüňize gerek bolan hyzmatlardan iň amatly nyrhlar boýunça peýdalanyp bilersiňiz','Здесь вы можете воспользоваться нужными вам услугами по лучшим ценам','
Here you can use the services you need at the best prices.'],
            ['Ynamly we Çalt','Уверенно и быстро','Confident and fast','Ýükleriňizi ynamly we çalt ýollar arkaly dünýäniň islendik künjeginden getirmek ýa-da äkitmek hyzmatyny ýokary derejede ýerine ýetirýäris.','Мы предоставляем качественные услуги по доставке и обработке грузов из любой точки мира безопасным и быстрым способом.','We provide quality services for the delivery and handling of goods from anywhere in the world in a safe and fast way.'],
        );
        foreach ($objects as $object) {
            $obj = new App\Goal();
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
