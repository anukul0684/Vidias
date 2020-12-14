<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laptop;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(seed_graphicscards_table::class);
        $this->call(seed_laptops_table::class);
        $this->call(seed_processors_table::class);
        $this->call(seed_provinces_table::class);
        $this->call(seed_brands_table::class);
        $this->call(seed_images_table::class);
        $this->call(seed_addresses_table::class);
        $this->call(seed_rams_table::class);
        // factory(App\Laptop::class,100)->create();
        $this->call(UserSeeder::class);
        \App\Models\User::factory(10)->create();

    }
}
