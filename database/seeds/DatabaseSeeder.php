<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountriesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(MembershipPlansTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
