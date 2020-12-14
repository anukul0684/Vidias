<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class seed_processors_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('processors')->insert(
        	[
			'processor_name' => 'Intel Core I3',
            'slug' => Str::slug('Intel Core I3','-'),
			'processor_price' => 564.23,
        	'active' => 'yes',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        ]
	    );
	    DB::table('processors')->insert(
        	[
			'processor_name' => 'Intel Core I5',
            'slug' => Str::slug('Intel Core I5','-'),
			'processor_price' => 636.63,
        	'active' => 'yes',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        ]
	    );
	    DB::table('processors')->insert(
        	[
			'processor_name' => 'Intel Core I7',
            'slug' => Str::slug('Intel Core I7','-'),
			'processor_price' => 760.99,
        	'active' => 'yes',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        ]
	    );
	    DB::table('processors')->insert(
        	[
			'processor_name' => 'Intel Core I9',
            'slug' => Str::slug('Intel Core I9','-'),
			'processor_price' => 999.99,
        	'active' => 'yes',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        ]
	    );

    }
}
