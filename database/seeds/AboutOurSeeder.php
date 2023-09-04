<?php

use Illuminate\Database\Seeder;

class AboutOurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = array(
            ['Siz hem bizi saýlaň!','Выберите нас!','Выберите нас!','Biziň ösüş meýilnamalarymyz',
                'Наши планы развития','Our development plans']
        );
        foreach ($objects as $object) {
            $obj = new App\AboutOur();
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
