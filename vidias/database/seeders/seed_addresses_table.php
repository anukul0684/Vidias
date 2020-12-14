<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class seed_addresses_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'user_id' => '1',
            'street_name' => '515 Portage Ave',
            'city' => 'Winnipeg',
            'province_id' => '3',
            'country' => 'Canada',
            'postal_code' => 'R3B 2E9',
            'active' => 'yes',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('addresses')->insert([
            'user_id' => '3',
            'street_name' => '505 Camden Place',
            'city' => 'Winnipeg',
            'province_id' => '3',
            'country' => 'Canada',
            'postal_code' => 'R3G 2V8',
            'active' => 'yes',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('addresses')->insert([
            'user_id' => '3',
            'street_name' => 'Mcfeetors Hall',
            'city' => 'Winnipeg',
            'province_id' => '3',
            'country' => 'Canada',
            'postal_code' => 'R3B 2T4',
            'active' => 'yes',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}