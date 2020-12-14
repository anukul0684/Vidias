<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class seed_graphicscards_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('graphicscards')->insert(
        	[
			'graphicscard_name' => 'Nvidia Geforce',
            'slug' => Str::slug('Nvidia Geforce','-'),
			'graphicscard_price' => 679,
        	'active' => 'yes',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        ]
	    );
	    DB::table('graphicscards')->insert(
        	[
			'graphicscard_name' => 'AMD Radeon',
            'slug' => Str::slug('AMD Radeon','-'),
			'graphicscard_price' => 869,
        	'active' => 'yes',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        ]
	    );
    }
}
