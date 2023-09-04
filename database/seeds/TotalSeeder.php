<?php

use Illuminate\Database\Seeder;

class TotalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = array(
            ['16', '4', '12', '200']
        );
        foreach ($objects as $object) {
            $obj = new App\Total();
            $obj->cooperator = $object[0];
            $obj->where = $object[1];
            $obj->logistika = $object[2];
            $obj->ofis = $object[3];
            $obj->save();
        }
    }
}
