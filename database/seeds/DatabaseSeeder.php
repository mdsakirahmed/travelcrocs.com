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
         $this->call(UserSeeder::class);
         $this->call(LanguageSeeder::class);
         $this->call(RoleSeeder::class);
         $this->call(PermissionSeeder::class);
         $this->call(StaticOptionSeeder::class);
         $this->call(CurrencySeeder::class);
    }
}
