<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class seed_provinces_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert(
            [
                'province_name' => 'Alberta',
                'province_gst' => 5.00,
                'province_pst' => 0.00,
                'province_hst' => 0.00,
                'province_qst' => 0.00,
                'active' => 'yes',
                'created_at' => Carbon::now()
            ]
        );

        DB::table('provinces')->insert(
            [
                'province_name' => 'British Columbia',
                'province_gst' => 5.00,
                'province_pst' => 7.00,
                'province_hst' => 0.00,
                'province_qst' => 0.00,
                'active' => 'yes',
                'created_at' => Carbon::now()
            ]
        );

        DB::table('provinces')->insert(
            [
                'province_name' => 'Manitoba',
                'province_gst' => 5.00,
                'province_pst' => 7.00,
                'province_hst' => 0.00,
                'province_qst' => 0.00,
                'active' => 'yes',
                'created_at' => Carbon::now()
            ]
        );

        DB::table('provinces')->insert(
            [
                'province_name' => 'New Brunswick',
                'province_gst' => 0.00,
                'province_pst' => 0.00,
                'province_hst' => 15.00,
                'province_qst' => 0.00,
                'active' => 'yes',
                'created_at' => Carbon::now()
            ]
        );

        DB::table('provinces')->insert(
            [
                'province_name' => 'Newfoundland and Labrador',
                'province_gst' => 0.00,
                'province_pst' => 0.00,
                'province_hst' => 15.00,
                'province_qst' => 0.00,
                'active' => 'yes',
                'created_at' => Carbon::now()
            ]
        );

        DB::table('provinces')->insert(
            [
                'province_name' => 'Northwest Territories',
                'province_gst' => 5.00,
                'province_pst' => 0.00,
                'province_hst' => 0.00,
                'province_qst' => 0.00,
                'active' => 'yes',
                'created_at' => Carbon::now()
            ]
        );

        DB::table('provinces')->insert(
            [
                'province_name' => 'Nova Scotia',
                'province_gst' => 0.00,
                'province_pst' => 0.00,
                'province_hst' => 15.00,
                'province_qst' => 0.00,
                'active' => 'yes',
                'created_at' => Carbon::now()
            ]
        );

        DB::table('provinces')->insert(
            [
                'province_name' => 'Nunavut',
                'province_gst' => 5.00,
                'province_pst' => 0.00,
                'province_hst' => 0.00,
                'province_qst' => 0.00,
                'active' => 'yes',
                'created_at' => Carbon::now()
            ]
        );

        DB::table('provinces')->insert(
            [
                'province_name' => 'Ontario',
                'province_gst' => 0.00,
                'province_pst' => 0.00,
                'province_hst' => 13.00,
                'province_qst' => 0.00,
                'active' => 'yes',
                'created_at' => Carbon::now()
            ]
        );

        DB::table('provinces')->insert(
            [
                'province_name' => 'Prince Edward Island',
                'province_gst' => 0.00,
                'province_pst' => 0.00,
                'province_hst' => 15.00,
                'province_qst' => 0.00,
                'active' => 'yes',
                'created_at' => Carbon::now()
            ]
        );

        DB::table('provinces')->insert(
            [
                'province_name' => 'Quebec',
                'province_gst' => 5.00,
                'province_pst' => 0.00,
                'province_hst' => 0.00,
                'province_qst' => 9.975,
                'active' => 'yes',
                'created_at' => Carbon::now()
            ]
        );

        DB::table('provinces')->insert(
            [
                'province_name' => 'Saskatchewan',
                'province_gst' => 5.00,
                'province_pst' => 6.00,
                'province_hst' => 0.00,
                'province_qst' => 0.00,
                'active' => 'yes',
                'created_at' => Carbon::now()
            ]
        );

        DB::table('provinces')->insert(
            [
                'province_name' => 'Yukon',
                'province_gst' => 5.00,
                'province_pst' => 0.00,
                'province_hst' => 0.00,
                'province_qst' => 0.00,
                'active' => 'yes',
                'created_at' => Carbon::now()
            ]
        );
    }
}
