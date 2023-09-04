<?php

use Illuminate\Database\Seeder;

class ServiceBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = array(
            ['Hyzmatlar','','','-NnepjNsBJ2','-NnepjNsBJ2.png','1']
        );
        foreach ($objects as $object) {
            $obj = new App\ServiceBanner();
            $obj->title_tm = $object[0];
            $obj->title_ru = $object[1];
            $obj->title_en = $object[2];
            $obj->slug = $object[3];
            $obj->img = $object[4];
            $obj->active = $object[5];
            $obj->save();
        }
    }
}
