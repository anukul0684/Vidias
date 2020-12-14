<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class seed_rams_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rams')->insert(
        	[
			'ram_size' => '2 GB',
            'slug' => Str::slug('2 GB','-'),
			'ram_price' => 15.23,
        	'active' => 'yes',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        ]
        );
        
	    DB::table('rams')->insert(
        	[
			'ram_size' => '4 GB',
            'slug' => Str::slug('4 GB','-'),
			'ram_price' => 25.63,
        	'active' => 'yes',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        ]
        );
        
	    DB::table('rams')->insert(
        	[
			'ram_size' => '8 GB',
            'slug' => Str::slug('8 GB','-'),
			'ram_price' => 32.99,
        	'active' => 'yes',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        ]
        );
        
	    DB::table('rams')->insert(
        	[
			'ram_size' => '12 GB',
            'slug' => Str::slug('12 GB','-'),
			'ram_price' => 35.99,
        	'active' => 'yes',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        ]
        );

        DB::table('rams')->insert(
        	[
			'ram_size' => '16 GB',
            'slug' => Str::slug('16 GB','-'),
			'ram_price' => 45.99,
        	'active' => 'yes',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        ]
	    );
    }
}
