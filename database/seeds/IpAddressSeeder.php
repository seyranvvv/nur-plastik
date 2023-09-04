<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use GeoIp2\Database\Reader;
use GeoIp2\Exception\AddressNotFoundException;

class IpAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $ip = $faker->ipv4;
        $reader = new Reader(dirname(__FILE__) . '/../GeoLite2-City.mmdb');

        try {
            $record = $reader->city($ip);
            App\IpAddress::firstOrCreate([
                'ip_address' => $ip,
                'country_code' => $record->country->isoCode == null ? null : utf8_encode($record->country->isoCode),
                'country_name' => $record->country->name == null ? null : utf8_encode($record->country->name),
                'city_name' => $record->city->name == null ? null : utf8_encode($record->city->name),
            ]);
        } catch (AddressNotFoundException $ex) {
            App\IpAddress::firstOrCreate([
                'ip_address' => $ip,
            ]);
        }
    }
}
