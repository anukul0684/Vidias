<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class seed_brands_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert(
            [
                'brand_name'=>'Alienware',
                'slug' => Str::slug('Alienware','-'),
                'active'=>'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        DB::table('brands')->insert(
            [
                'brand_name'=>'MSI',
                'slug' => Str::slug('MSI','-'),
                'active'=>'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        DB::table('brands')->insert(
            [
                'brand_name'=>'Razer',
                'slug' => Str::slug('Razer','-'),
                'active'=>'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        DB::table('brands')->insert(
            [
                'brand_name'=>'ASUS',
                'slug' => Str::slug('ASUS','-'),
                'active'=>'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        DB::table('brands')->insert(
            [
                'brand_name'=>'ROG',
                'slug' => Str::slug('ROG','-'),
                'active'=>'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        DB::table('brands')->insert(
            [
                'brand_name'=>'Dell',
                'slug' => Str::slug('Dell','-'),
                'active'=>'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        DB::table('brands')->insert(
            [
                'brand_name'=>'Lenovo',
                'slug' => Str::slug('Lenovo','-'),
                'active'=>'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        DB::table('brands')->insert(
            [
                'brand_name'=>'HP',
                'slug' => Str::slug('HP','-'),
                'active'=>'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        DB::table('brands')->insert(
            [
                'brand_name'=>'Samsung',
                'slug' => Str::slug('Samsung','-'),
                'active'=>'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        DB::table('brands')->insert(
            [
                'brand_name'=>'Toshiba',
                'slug' => Str::slug('Toshiba','-'),
                'active'=>'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        DB::table('brands')->insert(
            [
                'brand_name'=>'Apple',
                'slug' => Str::slug('Apple','-'),
                'active'=>'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );
    }
}
