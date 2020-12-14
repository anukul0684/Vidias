<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class seed_images_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert(
            [
                'laptop_id' => 1,
                'Image_name' => 'Alienware-15-1.jpg',
                // 'Image_name' => 'laptop1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 1,
                'Image_name' => 'Alienware-15-2.jpg',
                // 'Image_name' => 'laptop1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 1,
                'Image_name' => 'Alienware-15-3.jpg',
                // 'Image_name' => 'laptop1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 2,
                'Image_name' => 'Alienware-m15-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 2,
                'Image_name' => 'Alienware-m15-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 2,
                'Image_name' => 'Alienware-m15-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 3,
                'Image_name' => 'Alienware-m15-r2-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 3,
                'Image_name' => 'Alienware-m15-r2-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 3,
                'Image_name' => 'Alienware-m15-r2-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );


        DB::table('images')->insert(
            [
                'laptop_id' => 4,
                'Image_name' => 'alienware-m17-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 4,
                'Image_name' => 'alienware-m17-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 4,
                'Image_name' => 'alienware-m17-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 5,
                'Image_name' => 'msi-gp65-leopard-15-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 5,
                'Image_name' => 'msi-gp65-leopard-15-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 5,
                'Image_name' => 'msi-gp65-leopard-15-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 6,
                'Image_name' => 'msi-gp65-leopard-17-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 6,
                'Image_name' => 'msi-gp65-leopard-17-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 6,
                'Image_name' => 'msi-gp65-leopard-17-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 7,
                'Image_name' => 'razer-blade-15-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 7,
                'Image_name' => 'razer-blade-15-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 7,
                'Image_name' => 'razer-blade-15-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 8,
                'Image_name' => 'asus-c523-15-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 8,
                'Image_name' => 'asus-c523-15-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 8,
                'Image_name' => 'asus-c523-15-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 9,
                'Image_name' => 'asus-c523na-15-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 9,
                'Image_name' => 'asus-c523na-15-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 9,
                'Image_name' => 'asus-c523na-15-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 10,
                'Image_name' => 'asus-rog-strix-g15-15-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 10,
                'Image_name' => 'asus-rog-strix-g15-15-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 10,
                'Image_name' => 'asus-rog-strix-g15-15-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 11,
                'Image_name' => 'asus-rog-strix-g17-17-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 11,
                'Image_name' => 'asus-rog-strix-g17-17-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 11,
                'Image_name' => 'asus-rog-strix-g17-17-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 12,
                'Image_name' => 'asus-rog-zephyrus-g14-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 12,
                'Image_name' => 'asus-rog-zephyrus-g14-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 12,
                'Image_name' => 'asus-rog-zephyrus-g14-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 13,
                'Image_name' => 'asus-vivobook-l203na-11-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 13,
                'Image_name' => 'asus-vivobook-l203na-11-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 13,
                'Image_name' => 'asus-vivobook-l203na-11-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 14,
                'Image_name' => 'dell-inspiron-15-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 14,
                'Image_name' => 'dell-inspiron-15-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 14,
                'Image_name' => 'dell-inspiron-15-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 15,
                'Image_name' => 'dell-inspiron.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 15,
                'Image_name' => 'dell-inspiron-15-4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 15,
                'Image_name' => 'dell-inspiron-15-5.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 15,
                'Image_name' => 'dell-inspiron-15-6.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 16,
                'Image_name' => 'dell-inspiron-15-7.jpg',
                // 'Image_name' => 'laptop1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 16,
                'Image_name' => 'dell-inspiron-15-8.jpg',
                // 'Image_name' => 'laptop1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 16,
                'Image_name' => 'dell-inspiron-15-9.jpg',
                // 'Image_name' => 'laptop1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 17,
                'Image_name' => 'LenovoIdeaPad1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 17,
                'Image_name' => 'LenovoIdeaPad2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 17,
                'Image_name' => 'LenovoIdeaPad3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 18,
                'Image_name' => 'LenovoIdeaPad4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 18,
                'Image_name' => 'LenovoIdeaPad1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 18,
                'Image_name' => 'LenovoIdeaPad3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 19,
                'Image_name' => 'LenovoIdeaPad3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 19,
                'Image_name' => 'LenovoIdeaPad4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 19,
                'Image_name' => 'LenovoIdeaPad1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 20,
                'Image_name' => 'hpchromebook1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 20,
                'Image_name' => 'hpchromebook2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 20,
                'Image_name' => 'hpchromebook3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 21,
                'Image_name' => 'hptouchscreen1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 21,
                'Image_name' => 'hptouchscreen2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 21,
                'Image_name' => 'hptouchscreen3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 21,
                'Image_name' => 'hptouchscreen4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 22,
                'Image_name' => 'hpchromebook4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 22,
                'Image_name' => 'hpchromebook2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 22,
                'Image_name' => 'hpchromebook1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 23,
                'Image_name' => 'hpenvy1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );
        
        DB::table('images')->insert(
            [
                'laptop_id' => 23,
                'Image_name' => 'hpenvy2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 23,
                'Image_name' => 'hpenvy3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 24,
                'Image_name' => 'hpomen1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 24,
                'Image_name' => 'hpomen2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 24,
                'Image_name' => 'hpomen3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 24,
                'Image_name' => 'hpomen4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 25,
                'Image_name' => 'samsungchromebook1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 25,
                'Image_name' => 'samsungchromebook2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 25,
                'Image_name' => 'samsungchromebook3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 25,
                'Image_name' => 'samsungchromebook4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 26,
                'Image_name' => 'samsunggalaxybook1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 26,
                'Image_name' => 'samsunggalaxybook2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 26,
                'Image_name' => 'samsunggalaxybook3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 26,
                'Image_name' => 'samsunggalaxybook4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 27,
                'Image_name' => 'toshibaprotege1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 27,
                'Image_name' => 'toshibaprotege2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 27,
                'Image_name' => 'toshibaprotege3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 27,
                'Image_name' => 'toshibaprotege4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 28,
                'Image_name' => 'toshibatecra1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 28,
                'Image_name' => 'toshibatecra2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 28,
                'Image_name' => 'toshibatecra3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 28,
                'Image_name' => 'toshibatecra4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 29,
                'Image_name' => 'macbookair1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 29,
                'Image_name' => 'macbookair2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 29,
                'Image_name' => 'macbookair3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 29,
                'Image_name' => 'macbookair4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 30,
                'Image_name' => 'macbookpro1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 30,
                'Image_name' => 'macbookpro2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 30,
                'Image_name' => 'macbookpro3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 30,
                'Image_name' => 'macbookpro4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 31,
                'Image_name' => 'Alienware-15-1.jpg',
                // 'Image_name' => 'laptop1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 31,
                'Image_name' => 'Alienware-15-2.jpg',
                // 'Image_name' => 'laptop1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 31,
                'Image_name' => 'Alienware-15-3.jpg',
                // 'Image_name' => 'laptop1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 32,
                'Image_name' => 'Alienware-m15-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 32,
                'Image_name' => 'Alienware-m15-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 32,
                'Image_name' => 'Alienware-m15-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 33,
                'Image_name' => 'Alienware-m15-r2-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 33,
                'Image_name' => 'Alienware-m15-r2-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 33,
                'Image_name' => 'Alienware-m15-r2-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );


        DB::table('images')->insert(
            [
                'laptop_id' => 34,
                'Image_name' => 'alienware-m17-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 34,
                'Image_name' => 'alienware-m17-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 34,
                'Image_name' => 'alienware-m17-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 35,
                'Image_name' => 'msi-gp65-leopard-15-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 35,
                'Image_name' => 'msi-gp65-leopard-15-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 35,
                'Image_name' => 'msi-gp65-leopard-15-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 36,
                'Image_name' => 'msi-gp65-leopard-17-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 36,
                'Image_name' => 'msi-gp65-leopard-17-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 36,
                'Image_name' => 'msi-gp65-leopard-17-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 37,
                'Image_name' => 'razer-blade-15-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 37,
                'Image_name' => 'razer-blade-15-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 37,
                'Image_name' => 'razer-blade-15-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 38,
                'Image_name' => 'asus-c523-15-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 38,
                'Image_name' => 'asus-c523-15-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 38,
                'Image_name' => 'asus-c523-15-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 39,
                'Image_name' => 'asus-c523na-15-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 39,
                'Image_name' => 'asus-c523na-15-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 39,
                'Image_name' => 'asus-c523na-15-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 40,
                'Image_name' => 'asus-rog-strix-g15-15-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 40,
                'Image_name' => 'asus-rog-strix-g15-15-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 40,
                'Image_name' => 'asus-rog-strix-g15-15-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 41,
                'Image_name' => 'asus-rog-strix-g17-17-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 41,
                'Image_name' => 'asus-rog-strix-g17-17-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 41,
                'Image_name' => 'asus-rog-strix-g17-17-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 42,
                'Image_name' => 'asus-rog-zephyrus-g14-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 42,
                'Image_name' => 'asus-rog-zephyrus-g14-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 42,
                'Image_name' => 'asus-rog-zephyrus-g14-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 43,
                'Image_name' => 'asus-vivobook-l203na-11-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 43,
                'Image_name' => 'asus-vivobook-l203na-11-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 43,
                'Image_name' => 'asus-vivobook-l203na-11-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 44,
                'Image_name' => 'dell-inspiron-15-1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 44,
                'Image_name' => 'dell-inspiron-15-2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 44,
                'Image_name' => 'dell-inspiron-15-3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 45,
                'Image_name' => 'dell-inspiron.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 45,
                'Image_name' => 'dell-inspiron-15-4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 45,
                'Image_name' => 'dell-inspiron-15-5.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 45,
                'Image_name' => 'dell-inspiron-15-6.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 46,
                'Image_name' => 'dell-inspiron-15-7.jpg',
                // 'Image_name' => 'laptop1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 46,
                'Image_name' => 'dell-inspiron-15-8.jpg',
                // 'Image_name' => 'laptop1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 46,
                'Image_name' => 'dell-inspiron-15-9.jpg',
                // 'Image_name' => 'laptop1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 47,
                'Image_name' => 'LenovoIdeaPad1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 47,
                'Image_name' => 'LenovoIdeaPad2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 47,
                'Image_name' => 'LenovoIdeaPad3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 48,
                'Image_name' => 'LenovoIdeaPad4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 48,
                'Image_name' => 'LenovoIdeaPad1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 48,
                'Image_name' => 'LenovoIdeaPad3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 49,
                'Image_name' => 'LenovoIdeaPad3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 49,
                'Image_name' => 'LenovoIdeaPad4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 49,
                'Image_name' => 'LenovoIdeaPad1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 50,
                'Image_name' => 'hpchromebook1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 50,
                'Image_name' => 'hpchromebook2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 50,
                'Image_name' => 'hpchromebook3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 51,
                'Image_name' => 'hptouchscreen1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 51,
                'Image_name' => 'hptouchscreen2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 51,
                'Image_name' => 'hptouchscreen3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 51,
                'Image_name' => 'hptouchscreen4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 52,
                'Image_name' => 'hpchromebook4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 52,
                'Image_name' => 'hpchromebook2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 52,
                'Image_name' => 'hpchromebook1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 53,
                'Image_name' => 'hpenvy1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );
        
        DB::table('images')->insert(
            [
                'laptop_id' => 53,
                'Image_name' => 'hpenvy2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 53,
                'Image_name' => 'hpenvy3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );        

        DB::table('images')->insert(
            [
                'laptop_id' => 54,
                'Image_name' => 'hpomen1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 54,
                'Image_name' => 'hpomen2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 54,
                'Image_name' => 'hpomen3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 54,
                'Image_name' => 'hpomen4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 55,
                'Image_name' => 'samsungchromebook1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 55,
                'Image_name' => 'samsungchromebook2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 55,
                'Image_name' => 'samsungchromebook3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 55,
                'Image_name' => 'samsungchromebook4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 56,
                'Image_name' => 'samsunggalaxybook1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 56,
                'Image_name' => 'samsunggalaxybook2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 56,
                'Image_name' => 'samsunggalaxybook3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 56,
                'Image_name' => 'samsunggalaxybook4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 57,
                'Image_name' => 'toshibaprotege1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 57,
                'Image_name' => 'toshibaprotege2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 57,
                'Image_name' => 'toshibaprotege3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 57,
                'Image_name' => 'toshibaprotege4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 58,
                'Image_name' => 'toshibatecra1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 58,
                'Image_name' => 'toshibatecra2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 58,
                'Image_name' => 'toshibatecra3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 58,
                'Image_name' => 'toshibatecra4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 59,
                'Image_name' => 'macbookair1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 59,
                'Image_name' => 'macbookair2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 59,
                'Image_name' => 'macbookair3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 59,
                'Image_name' => 'macbookair4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 60,
                'Image_name' => 'macbookpro1.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 60,
                'Image_name' => 'macbookpro2.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 60,
                'Image_name' => 'macbookpro3.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        DB::table('images')->insert(
            [
                'laptop_id' => 60,
                'Image_name' => 'macbookpro4.jpg',
                'active' => 'yes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        
    }
}
