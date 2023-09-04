<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(AboutBannerSeeder::class);
        $this->call(ContactBannerSeeder::class);
        $this->call(PostBannerSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(ServiceBannerSeeder::class);
        $this->call(ServiceAboutSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(GoalSeeder::class);
        $this->call(TotalSeeder::class);
        $this->call(AboutOurSeeder::class);
        $this->call(AboutTextSeeder::class);
        $this->call(OurFeauterSeeder::class);
        $this->call(ProjectSeeder::class);
        $ratio = 100;
        if (true) {

            for ($i = 1; $i <= $ratio * 10; $i++) {
                $this->call(IpAddressSeeder::class);
            }
            echo ' 12 ok / ';

        }
        for ($i = 1; $i <= $ratio * 5; $i++) {
            $this->call(UserAgentSeeder::class);
        }
        echo ' 13 ok / ';
    }
}
