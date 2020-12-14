<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class seed_laptops_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('laptops')->insert([
            'laptop_name' => 'Alienware m17 17.3" Gaming Laptop',
            'laptop_description' => 'Immerse yourself in the world of gaming with the Alienware m17 gaming laptop. The 10th-generation hexa-core Intel Core i7 processor combines with 16GB of RAM to support multitasking, smooth gameplay, and seamless image editing. The NVIDIA GeForce RTX 2070 SUPER graphics card renders life-like images, while the 1TB solid state drive ensures fast boot times.',
            'brand_id' => '1',
            'processor_id' => '4',
            'graphicscard_id' => '1',
            'ram_id'=>'5',
            'touch_screen' => 'yes',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '17',
            'price' => '3299.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('laptops')->insert([
            'laptop_name' => 'Alienware m15 15.6" Gaming Laptop',
            'laptop_description' => 'Enjoy stunning visuals for all your games with the Alienware m15 gaming laptop. Powered by a 10th-generation Intel Core i7 processor and 16GB of RAM, the GeForce RTX 2060 graphics card and a 144Hz refresh rate deliver detailed graphics and smooth frame transitions. It\'s equipped with a 512GB solid state drive to ensure fast boot times.',
            'brand_id' => '1',
            'processor_id' => '4',
            'graphicscard_id' => '1',
            'ram_id'=>'5',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '2599.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Alienware 15.6" Gaming Laptop',
            'laptop_description' => 'When precision, speed, and performance are critical, this Alienware laptop has everything you need to take out the competition. This machine boasts an NVIDIA GeForce GTX 1060 graphics card for stunning graphics and features a 2.2GHz Intel six-core processor, 16GB of RAM, a 1TB hard drive, and a 256GB solid state drive to give you maximum video-gaming power.',
            'brand_id' => '1',
            'processor_id' => '4',
            'graphicscard_id' => '1',
            'ram_id'=>'5',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '1699.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Alienware M15 R2 15" FHD Gaming Laptop',
            'laptop_description' => 'Refurbished A-Grade Condition 9/10. 1 Year Warranty (Labour/Parts). DCR prides itself with the commitment of providing all customers the highest quality with the best value. We are R2 Certified Refurbisher and ISO 9001:2015 certified member. The majority of our devices are obtained from cancelled orders, thus the items tend to have original packaging unless the original box is damaged, we provide generic box. Customers’ main feedback to DCR, “Best value for quality products”',
            'brand_id' => '1',
            'processor_id' => '4',
            'graphicscard_id' => '1',
            'ram_id'=>'5',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '1999.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'MSI GP65 Leopard 15.6" Gaming Laptop',
            'laptop_description' => 'Boost your gaming experience with this MSI GP65 Leopard laptop. Featuring an Intel Core i7-10750H processor, 16GB of DDR4 RAM, and an NVIDIA GeForce GTX 1660 Ti graphics card, this laptop gives you a highly smooth gaming performance. The 15.6" IPS display with Full HD resolution and a 144Hz refresh rate offers incredible visuals with great clarity.',
            'brand_id' => '2',
            'processor_id' => '4',
            'graphicscard_id' => '1',
            'ram_id'=>'4',
            'touch_screen' => 'yes',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '1699.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'MSI GP75 Leopard 17.3" Gaming Laptop',
            'laptop_description' => 'Packed with high-end hardware, the MSI GP75 Leopard gaming laptop is certain to delight hardcore gamers. Flaunting an Intel Core i7 processor with 16GB of RAM and a powerful NVIDIA GeForce RTX 2060 graphics card, it has the might to take on the latest AAA games. The 17.3" Full HD display produces amazing visuals with rich detail and vibrant colours.',
            'brand_id' => '2',
            'processor_id' => '4',
            'graphicscard_id' => '1',
            'ram_id'=>'5',
            'touch_screen' => 'yes',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '17',
            'price' => '1849.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Razer Blade 15 Gaming Laptop',
            'laptop_description' => 'The Razer Blade 15 has the smallest footprint of any 15.6" gaming laptop while also being one of the thinnest in its class. Other similarly configured laptops are double the volume and over an inch bigger in both with and depth. The Razer Blade is free of bloatware, so you get a clean install with only critical software for maximum resources and storage space right out of the box.',
            'brand_id' => '3',
            'processor_id' => '2',
            'graphicscard_id' => '1',
            'ram_id'=>'5',
            'touch_screen' => 'yes',
            'screen_resolution' => '1366 x 768',
            'screen_size' => '15',
            'price' => '1399.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'ASUS VivoBook L203NA 11.6" Laptop',
            'laptop_description' => 'Stay productive and entertained with the ASUS VivoBook 11.6" L203NA laptop. Featuring the powerful Intel Celeron N3350 processor and 4GB LPDDR3 RAM, this laptop allows you to work on multiple apps or softwares simultaneously without any lag. Its 64GB eMMC let you store your valuable project files and other important data.',
            'brand_id' => '4',
            'processor_id' => '1',
            'graphicscard_id' => '2',
            'ram_id'=>'1',
            'touch_screen' => 'no',
            'screen_resolution' => '1366 x 768',
            'screen_size' => '12',
            'price' => '299.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'ASUS C523NA 15.6" Touchscreen Chromebook',
            'laptop_description' => 'Take on your daily computing tasks with the versatile functionality of the ASUS C523NA 15.6" touchscreen Chromebook. It delivers a quick, reliable performance powered by an Intel Celeron N4200 processor with 4GB of RAM. Store your files easily on the 64GB eMMC and integrated Wi-Fi and Bluetooth keeps you wirelessly connected.',
            'brand_id' => '4',
            'processor_id' => '1',
            'graphicscard_id' => '2',
            'ram_id'=>'2',
            'touch_screen' => 'yes',
            'screen_resolution' => '1366 x 768',
            'screen_size' => '15',
            'price' => '499.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'ASUS C523 15.6" Chromebook',
            'laptop_description' => 'The ASUS C523 Chromebook is a high-performance system built for enhanced productivity. Running on Google\'s Chrome OS, this Chromebook is powered by a dual-core Celeron processor along with 4GB system memory and 64GB eMMC storage for impressively fast performance. You also get additional 100GB of Google Drive space to backup your files automatically.',
            'brand_id' => '4',
            'processor_id' => '1',
            'graphicscard_id' => '2',
            'ram_id'=>'2',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '399.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'ASUS ROG Strix G15 15.6" Gaming Laptop',
            'laptop_description' => 'Built for intense gaming, the ASUS ROG Strix G15 is rigged with a powerful Intel Core i5 processor, 8GB of RAM, and a powerful GTX 1650 Ti GPU. It features a 15.6" Full HD display equipped with anti-glare and a 144Hz refresh rate for smooth and fluid motion visuals. The laptop also comes with a 512GB solid state drive and an Aura RGB backlit keyboard.',
            'brand_id' => '5',
            'processor_id' => '2',
            'graphicscard_id' => '1',
            'ram_id'=>'3',
            'touch_screen' => 'no',
            'screen_resolution' => '2560 x 1600',
            'screen_size' => '15',
            'price' => '999.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'ASUS ROG Strix G17 17.3" Gaming Laptop',
            'laptop_description' => 'Play any game in an ultra-high setting with the ASUS ROG Strix G17 gaming laptop. Wielding an Intel Core i7 processor with 16GB of RAM and a 6GB NVIDIA GeForce RTX 2060 GPU, it meets the requirements of heavy-duty games with its raw power. It also boasts a 17.3" Full HD screen with a 120Hz refresh rate that produces stunning visuals and vivid colours.',
            'brand_id' => '5',
            'processor_id' => '3',
            'graphicscard_id' => '1',
            'ram_id'=>'5',
            'touch_screen' => 'no',
            'screen_resolution' => '2560 x 1600',
            'screen_size' => '17',
            'price' => '1799.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'ASUS ROG Zephyrus G14 14" Gaming Laptop',
            'laptop_description' => 'Enhance your gaming experience with this ASUS ROG Zephyrus G14 gaming laptop. Powered by an NVIDIA GeForce GTX 1660Ti dedicated graphics card along with AMD Ryzen 7 4800HS processor and 16GB DDR4 RAM, this laptop delivers optimum performance for your games and multi-tasking. It\'s light and easily portable, too, so you can take it anywhere.',
            'brand_id' => '5',
            'processor_id' => '3',
            'graphicscard_id' => '2',
            'ram_id'=>'5',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '14',
            'price' => '1699.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Dell Inspiron 15.6" Touchscreen Laptop',
            'laptop_description' => 'Whether you\'re working, browsing the internet, or keeping up with friends and family, this Dell Inspiron touchscreen laptop makes it possible. Equipped with a 15.6" touchscreen display and stero speakers with surround sound, it delivers an immersive viewing experience. It features a quad-core processor and 12GB of RAM for plenty of power',
            'brand_id' => '6',
            'processor_id' => '1',
            'graphicscard_id' => '1',
            'ram_id'=>'4',
            'touch_screen' => 'yes',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '14',
            'price' => '899.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Dell Inspiron 15.6" Touchscreen Laptop',
            'laptop_description' => 'Whether you\'re working, browsing the internet, or keeping up with friends and family, this Dell Inspiron touchscreen laptop makes it possible. Equipped with a 15.6" touchscreen display and stero speakers with surround sound, it delivers an immersive viewing experience. It features a quad-core processor and 12GB of RAM for plenty of power',
            'brand_id' => '6',
            'processor_id' => '1',
            'graphicscard_id' => '1',
            'ram_id'=>'4',
            'touch_screen' => 'yes',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '14',
            'price' => '899.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


    DB::table('laptops')->insert([
            'laptop_name' => 'Dell G5 15.6" Gaming Laptop',
            'laptop_description' => 'Take your gaming to a level beyond your expectations with the 15.6" Dell G5 laptop. Equipped with the AMD Ryzen 5 4600H processor and 8GB of RAM, it can handle heavy workloads to keep your games running smoothly. Its SmartShift technology allows the power to shift dynamically between the CPU and GPU for optimal performance.
',
            'brand_id' => '6',
            'processor_id' => '4',
            'graphicscard_id' => '2',
            'ram_id'=>'3',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '1199.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('laptops')->insert([
            'laptop_name' => 'Lenovo IdeaPad 3 15.6" Laptop',
            'laptop_description' => 'Designed to meet your everyday computing needs, this Lenovo IdeaPad 3 laptop comes with an AMD Athlon Silver 3050U processor and 4GB RAM to deliver reliable, lag-free performance. With a narrow bezel design on the sides of the screen and a Dolby Audio sound system, this IdeaPad keeps you engaged, whether it\'s for work or entertainment.',
            'brand_id' => '7',
            'processor_id' => '1',
            'graphicscard_id' => '2',
            'ram_id'=>'2',
            'touch_screen' => 'no',
            'screen_resolution' => '1200 x 1920',
            'screen_size' => '15',
            'price' => '349.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Lenovo IdeaPad 3 15.6" Touchscreen Laptop',
            'laptop_description' => 'When precision, speed, and performance are critical, this Alienware laptop has everything you need to take out the competition. This machine boasts an NVIDIA GeForce GTX 1060 graphics card for stunning graphics and features a 2.2GHz Intel six-core processor, 16GB of RAM, a 1TB hard drive, and a 256GB solid state drive to give you maximum video-gaming power.',
            'brand_id' => '7',
            'processor_id' => '4',
            'graphicscard_id' => '1',
            'ram_id'=>'4',
            'touch_screen' => 'yes',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '849.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Lenovo IdeaPad 3 15.6" Touchscreen Laptop',
            'laptop_description' => 'Enjoy powerful performance and sleek entertainment with the Lenovo IdeaPad 3. Powered by an Intel Core i5 processor with 12GB of RAM, it can easily handle multi-tasking, CPU-intensive applications, and just about everything else. Its 15" HD touchscreen and Dolby Audio offer amazing visuals and top-notch sound quality.',
            'brand_id' => '7',
            'processor_id' => '2',
            'graphicscard_id' => '1',
            'ram_id'=>'4',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '849.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'HP 14" Chromebook',
            'laptop_description' => 'Whether it\'s for work or entertainment, this HP 14" Chromebook delivers everything you need. It\'s powered by an Intel Celeron N4000 processor and 4GB of RAM to run your applications and software without slowing down. Running on Chrome OS, it offers access to a huge collection of Google apps that can perform a variety of tasks.',
            'brand_id' => '8',
            'processor_id' => '1',
            'graphicscard_id' => '2',
            'ram_id'=>'2',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '14',
            'price' => '399.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'HP 15.6" Touchscreen Laptop',
            'laptop_description' => 'Stay productive or entertained on the go with the HP touchscreen laptop. Powered by an AMD Ryzen 5 3450U quad-core processor and 8GB RAM, this laptop ensures outstanding performance. Boasting a 15.6" touchscreen with 1366 x 768 resolution, enjoy your movies with detailed images and vivid colours everytime, everywhere.',
            'brand_id' => '8',
            'processor_id' => '3',
            'graphicscard_id' => '1',
            'ram_id'=>'3',
            'touch_screen' => 'yes',
            'screen_resolution' => '1366 x 768',
            'screen_size' => '15',
            'price' => '599.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'HP 15.6" Laptop',
            'laptop_description' => 'Cover all your daily computing needs with this 15.6" HP laptop. It features an AMD Ryzen 5 3500U processor and 8GB of SDRAM for advanced capability in handling multiple apps without slowing down. The HP Fast Charge battery offers sufficient runtime so that you can cruise through all your work or school tasks with ease.',
            'brand_id' => '8',
            'processor_id' => '3',
            'graphicscard_id' => '2',
            'ram_id'=>'3',
            'touch_screen' => 'no',
            'screen_resolution' => '1366 x 768',
            'screen_size' => '15',
            'price' => '699.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'HP ENVY x360 15.6" Touchscreen 2-in-1 Laptop',
            'laptop_description' => 'Play, work, and draw on the go with this HP ENVY x360 15.6" touchscreen 2-in-1 laptop. Its convertible design lets you use it like a tablet by flipping the 360-degree hinged display. The powerful Intel Core i5-1035G1 processor, 8GB of RAM, and a 1TB solid state drive provide high-speed performance and lots of storage space.',
            'brand_id' => '8',
            'processor_id' => '2',
            'graphicscard_id' => '1',
            'ram_id'=>'3',
            'touch_screen' => 'yes',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '1199.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'HP OMEN 15.6" Gaming Laptop',
            'laptop_description' => 'Get ready for a powerful and seamless gaming experience with this HP OMEN gaming laptop. Boasting a 15.6" Full HD IPS display, this laptop gives you an authentic feel of gameplay with high-quality image details. It\'s powered by a 10th-gen Intel Core i7-10750H processor and 16GB of RAM to make your games and multi-tasking smooth and reliable.',
            'brand_id' => '8',
            'processor_id' => '4',
            'graphicscard_id' => '1',
            'ram_id'=>'5',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '1998.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Samsung 11.6" Chromebook 4',
            'laptop_description' => 'Google Classroom Compatible! The quality of Samsung meets the accessibility of Chrome OS. Its all-new light and compact design lets you stream, work, create, and play on a fast, secure device designed to take everywhere. This item was manufactured in 2020. Compact, light design with ultra-fast connectivity of Gigabit WiFi. Extremely well 12.5" hours of battery life. Latest Model.',
            'brand_id' => '9',
            'processor_id' => '1',
            'graphicscard_id' => '2',
            'ram_id'=>'1',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '12',
            'price' => '349.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Samsung Galaxy Book S 13.3" Touchscreen Laptop',
            'laptop_description' => 'Enjoy great performance and an ultra light design with the Samsung Galaxy Book S laptop. Powered by an Intel Core i5-L16G7 processor and 8GB LPDDR4x RAM, it is a great choice for both work and play. Its 13.3" LED touchscreen delivers full HD visuals while ensuring easy navigation.',
            'brand_id' => '9',
            'processor_id' => '2',
            'graphicscard_id' => '1',
            'ram_id'=>'3',
            'touch_screen' => 'yes',
            'screen_resolution' => '2560 x 1600',
            'screen_size' => '13',
            'price' => '1299.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Toshiba Portege Z30-A 13.3" Ultrabook',
            'laptop_description' => 'Off-lease in good condition, normal signs of wear-off from day-to-day use. Get uncompromising performance in a thin, light and portable package with these fast, powerful and secure business machines. The magnesium alloy body provides durability making the Portege Z30 Ultra-Thin ideal for busy professional travels and schools.',
            'brand_id' => '10',
            'processor_id' => '1',
            'graphicscard_id' => '1',
            'ram_id'=>'2',
            'touch_screen' => 'no',
            'screen_resolution' => '2560 x 1600',
            'screen_size' => '13',
            'price' => '480.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Toshiba Tecra 15.6" Screen Laptop',
            'laptop_description' => 'Off-lease in good condition, normal signs of wear-off from day-to-day use. Get uncompromising performance in a thin, light and portable package with these fast, powerful and secure business machines. The magnesium alloy body provides durability making the Tecra Ultra-Thin ideal for busy professional travels and schools.',
            'brand_id' => '10',
            'processor_id' => '2',
            'graphicscard_id' => '1',
            'ram_id'=>'3',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '1043.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Apple MacBook Air 13.3"',
            'laptop_description' => 'The incredibly thin, light MacBook Air is now more powerful than ever. It features a Retina display, a new Magic Keyboard, Touch ID, processors with up to 2x performance, faster graphics, and double the storage. The wedge-shaped design is created from 100% recycled aluminum, and with all-day battery life, it\'s your perfectly portable, do-it-all notebook.',
            'brand_id' => '11',
            'processor_id' => '1',
            'graphicscard_id' => '1',
            'ram_id'=>'3',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '13',
            'price' => '1209.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Apple MacBook Pro 13.3"',
            'laptop_description' => 'The Apple M1 chip redefines the 13" MacBook Pro. Featuring an 8-core CPU that flies through complex workflows. Incredible 8-core GPU that crushes graphics-intensive tasks and enables super-smooth gaming. An advanced 16-core Neural Engine for more machine learning power. Super-fast unified memory for fluid performance. And the longest-ever battery life in a Mac at up to 20 hours.',
            'brand_id' => '11',
            'processor_id' => '1',
            'graphicscard_id' => '1',
            'ram_id'=>'3',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '13',
            'price' => '1699.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);



    DB::table('laptops')->insert([
            'laptop_name' => 'Alienware m17 17.3" Gaming Laptop',
            'laptop_description' => 'Immerse yourself in the world of gaming with the Alienware m17 gaming laptop. The 10th-generation hexa-core Intel Core i7 processor combines with 16GB of RAM to support multitasking, smooth gameplay, and seamless image editing. The NVIDIA GeForce RTX 2070 SUPER graphics card renders life-like images, while the 1TB solid state drive ensures fast boot times.',
            'brand_id' => '1',
            'processor_id' => '4',
            'graphicscard_id' => '1',
            'ram_id'=>'5',
            'touch_screen' => 'yes',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '17',
            'price' => '3299.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('laptops')->insert([
            'laptop_name' => 'Alienware m15 15.6" Gaming Laptop',
            'laptop_description' => 'Enjoy stunning visuals for all your games with the Alienware m15 gaming laptop. Powered by a 10th-generation Intel Core i7 processor and 16GB of RAM, the GeForce RTX 2060 graphics card and a 144Hz refresh rate deliver detailed graphics and smooth frame transitions. It\'s equipped with a 512GB solid state drive to ensure fast boot times.',
            'brand_id' => '1',
            'processor_id' => '4',
            'graphicscard_id' => '1',
            'ram_id'=>'5',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '2599.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Alienware 15.6" Gaming Laptop',
            'laptop_description' => 'When precision, speed, and performance are critical, this Alienware laptop has everything you need to take out the competition. This machine boasts an NVIDIA GeForce GTX 1060 graphics card for stunning graphics and features a 2.2GHz Intel six-core processor, 16GB of RAM, a 1TB hard drive, and a 256GB solid state drive to give you maximum video-gaming power.',
            'brand_id' => '1',
            'processor_id' => '4',
            'graphicscard_id' => '1',
            'ram_id'=>'5',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '1699.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Alienware M15 R2 15" FHD Gaming Laptop',
            'laptop_description' => 'Refurbished A-Grade Condition 9/10. 1 Year Warranty (Labour/Parts). DCR prides itself with the commitment of providing all customers the highest quality with the best value. We are R2 Certified Refurbisher and ISO 9001:2015 certified member. The majority of our devices are obtained from cancelled orders, thus the items tend to have original packaging unless the original box is damaged, we provide generic box. Customers’ main feedback to DCR, “Best value for quality products”',
            'brand_id' => '1',
            'processor_id' => '4',
            'graphicscard_id' => '1',
            'ram_id'=>'5',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '1999.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'MSI GP65 Leopard 15.6" Gaming Laptop',
            'laptop_description' => 'Boost your gaming experience with this MSI GP65 Leopard laptop. Featuring an Intel Core i7-10750H processor, 16GB of DDR4 RAM, and an NVIDIA GeForce GTX 1660 Ti graphics card, this laptop gives you a highly smooth gaming performance. The 15.6" IPS display with Full HD resolution and a 144Hz refresh rate offers incredible visuals with great clarity.',
            'brand_id' => '2',
            'processor_id' => '4',
            'graphicscard_id' => '1',
            'ram_id'=>'4',
            'touch_screen' => 'yes',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '1699.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'MSI GP75 Leopard 17.3" Gaming Laptop',
            'laptop_description' => 'Packed with high-end hardware, the MSI GP75 Leopard gaming laptop is certain to delight hardcore gamers. Flaunting an Intel Core i7 processor with 16GB of RAM and a powerful NVIDIA GeForce RTX 2060 graphics card, it has the might to take on the latest AAA games. The 17.3" Full HD display produces amazing visuals with rich detail and vibrant colours.',
            'brand_id' => '2',
            'processor_id' => '4',
            'graphicscard_id' => '1',
            'ram_id'=>'5',
            'touch_screen' => 'yes',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '17',
            'price' => '1849.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Razer Blade 15 Gaming Laptop',
            'laptop_description' => 'The Razer Blade 15 has the smallest footprint of any 15.6" gaming laptop while also being one of the thinnest in its class. Other similarly configured laptops are double the volume and over an inch bigger in both with and depth. The Razer Blade is free of bloatware, so you get a clean install with only critical software for maximum resources and storage space right out of the box.',
            'brand_id' => '3',
            'processor_id' => '2',
            'graphicscard_id' => '1',
            'ram_id'=>'5',
            'touch_screen' => 'yes',
            'screen_resolution' => '1366 x 768',
            'screen_size' => '15',
            'price' => '1399.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'ASUS VivoBook L203NA 11.6" Laptop',
            'laptop_description' => 'Stay productive and entertained with the ASUS VivoBook 11.6" L203NA laptop. Featuring the powerful Intel Celeron N3350 processor and 4GB LPDDR3 RAM, this laptop allows you to work on multiple apps or softwares simultaneously without any lag. Its 64GB eMMC let you store your valuable project files and other important data.',
            'brand_id' => '4',
            'processor_id' => '1',
            'graphicscard_id' => '2',
            'ram_id'=>'1',
            'touch_screen' => 'no',
            'screen_resolution' => '1366 x 768',
            'screen_size' => '12',
            'price' => '299.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'ASUS C523NA 15.6" Touchscreen Chromebook',
            'laptop_description' => 'Take on your daily computing tasks with the versatile functionality of the ASUS C523NA 15.6" touchscreen Chromebook. It delivers a quick, reliable performance powered by an Intel Celeron N4200 processor with 4GB of RAM. Store your files easily on the 64GB eMMC and integrated Wi-Fi and Bluetooth keeps you wirelessly connected.',
            'brand_id' => '4',
            'processor_id' => '1',
            'graphicscard_id' => '2',
            'ram_id'=>'2',
            'touch_screen' => 'yes',
            'screen_resolution' => '1366 x 768',
            'screen_size' => '15',
            'price' => '499.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'ASUS C523 15.6" Chromebook',
            'laptop_description' => 'The ASUS C523 Chromebook is a high-performance system built for enhanced productivity. Running on Google\'s Chrome OS, this Chromebook is powered by a dual-core Celeron processor along with 4GB system memory and 64GB eMMC storage for impressively fast performance. You also get additional 100GB of Google Drive space to backup your files automatically.',
            'brand_id' => '4',
            'processor_id' => '1',
            'graphicscard_id' => '2',
            'ram_id'=>'2',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '399.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'ASUS ROG Strix G15 15.6" Gaming Laptop',
            'laptop_description' => 'Built for intense gaming, the ASUS ROG Strix G15 is rigged with a powerful Intel Core i5 processor, 8GB of RAM, and a powerful GTX 1650 Ti GPU. It features a 15.6" Full HD display equipped with anti-glare and a 144Hz refresh rate for smooth and fluid motion visuals. The laptop also comes with a 512GB solid state drive and an Aura RGB backlit keyboard.',
            'brand_id' => '5',
            'processor_id' => '2',
            'graphicscard_id' => '1',
            'ram_id'=>'3',
            'touch_screen' => 'no',
            'screen_resolution' => '2560 x 1600',
            'screen_size' => '15',
            'price' => '999.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'ASUS ROG Strix G17 17.3" Gaming Laptop',
            'laptop_description' => 'Play any game in an ultra-high setting with the ASUS ROG Strix G17 gaming laptop. Wielding an Intel Core i7 processor with 16GB of RAM and a 6GB NVIDIA GeForce RTX 2060 GPU, it meets the requirements of heavy-duty games with its raw power. It also boasts a 17.3" Full HD screen with a 120Hz refresh rate that produces stunning visuals and vivid colours.',
            'brand_id' => '5',
            'processor_id' => '3',
            'graphicscard_id' => '1',
            'ram_id'=>'5',
            'touch_screen' => 'no',
            'screen_resolution' => '2560 x 1600',
            'screen_size' => '17',
            'price' => '1799.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'ASUS ROG Zephyrus G14 14" Gaming Laptop',
            'laptop_description' => 'Enhance your gaming experience with this ASUS ROG Zephyrus G14 gaming laptop. Powered by an NVIDIA GeForce GTX 1660Ti dedicated graphics card along with AMD Ryzen 7 4800HS processor and 16GB DDR4 RAM, this laptop delivers optimum performance for your games and multi-tasking. It\'s light and easily portable, too, so you can take it anywhere.',
            'brand_id' => '5',
            'processor_id' => '3',
            'graphicscard_id' => '2',
            'ram_id'=>'5',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '14',
            'price' => '1699.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Dell Inspiron 15.6" Touchscreen Laptop',
            'laptop_description' => 'Whether you\'re working, browsing the internet, or keeping up with friends and family, this Dell Inspiron touchscreen laptop makes it possible. Equipped with a 15.6" touchscreen display and stero speakers with surround sound, it delivers an immersive viewing experience. It features a quad-core processor and 12GB of RAM for plenty of power',
            'brand_id' => '6',
            'processor_id' => '1',
            'graphicscard_id' => '1',
            'ram_id'=>'4',
            'touch_screen' => 'yes',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '14',
            'price' => '899.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Dell Inspiron 15.6" Touchscreen Laptop',
            'laptop_description' => 'Whether you\'re working, browsing the internet, or keeping up with friends and family, this Dell Inspiron touchscreen laptop makes it possible. Equipped with a 15.6" touchscreen display and stero speakers with surround sound, it delivers an immersive viewing experience. It features a quad-core processor and 12GB of RAM for plenty of power',
            'brand_id' => '6',
            'processor_id' => '1',
            'graphicscard_id' => '1',
            'ram_id'=>'4',
            'touch_screen' => 'yes',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '14',
            'price' => '899.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


    DB::table('laptops')->insert([
            'laptop_name' => 'Dell G5 15.6" Gaming Laptop',
            'laptop_description' => 'Take your gaming to a level beyond your expectations with the 15.6" Dell G5 laptop. Equipped with the AMD Ryzen 5 4600H processor and 8GB of RAM, it can handle heavy workloads to keep your games running smoothly. Its SmartShift technology allows the power to shift dynamically between the CPU and GPU for optimal performance.
',
            'brand_id' => '6',
            'processor_id' => '4',
            'graphicscard_id' => '2',
            'ram_id'=>'3',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '1199.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('laptops')->insert([
            'laptop_name' => 'Lenovo IdeaPad 3 15.6" Laptop',
            'laptop_description' => 'Designed to meet your everyday computing needs, this Lenovo IdeaPad 3 laptop comes with an AMD Athlon Silver 3050U processor and 4GB RAM to deliver reliable, lag-free performance. With a narrow bezel design on the sides of the screen and a Dolby Audio sound system, this IdeaPad keeps you engaged, whether it\'s for work or entertainment.',
            'brand_id' => '7',
            'processor_id' => '1',
            'graphicscard_id' => '2',
            'ram_id'=>'2',
            'touch_screen' => 'no',
            'screen_resolution' => '1200 x 1920',
            'screen_size' => '15',
            'price' => '349.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Lenovo IdeaPad 3 15.6" Touchscreen Laptop',
            'laptop_description' => 'When precision, speed, and performance are critical, this Alienware laptop has everything you need to take out the competition. This machine boasts an NVIDIA GeForce GTX 1060 graphics card for stunning graphics and features a 2.2GHz Intel six-core processor, 16GB of RAM, a 1TB hard drive, and a 256GB solid state drive to give you maximum video-gaming power.',
            'brand_id' => '7',
            'processor_id' => '4',
            'graphicscard_id' => '1',
            'ram_id'=>'4',
            'touch_screen' => 'yes',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '849.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Lenovo IdeaPad 3 15.6" Touchscreen Laptop',
            'laptop_description' => 'Enjoy powerful performance and sleek entertainment with the Lenovo IdeaPad 3. Powered by an Intel Core i5 processor with 12GB of RAM, it can easily handle multi-tasking, CPU-intensive applications, and just about everything else. Its 15" HD touchscreen and Dolby Audio offer amazing visuals and top-notch sound quality.',
            'brand_id' => '7',
            'processor_id' => '2',
            'graphicscard_id' => '1',
            'ram_id'=>'4',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '849.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'HP 14" Chromebook',
            'laptop_description' => 'Whether it\'s for work or entertainment, this HP 14" Chromebook delivers everything you need. It\'s powered by an Intel Celeron N4000 processor and 4GB of RAM to run your applications and software without slowing down. Running on Chrome OS, it offers access to a huge collection of Google apps that can perform a variety of tasks.',
            'brand_id' => '8',
            'processor_id' => '1',
            'graphicscard_id' => '2',
            'ram_id'=>'2',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '14',
            'price' => '399.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'HP 15.6" Touchscreen Laptop',
            'laptop_description' => 'Stay productive or entertained on the go with the HP touchscreen laptop. Powered by an AMD Ryzen 5 3450U quad-core processor and 8GB RAM, this laptop ensures outstanding performance. Boasting a 15.6" touchscreen with 1366 x 768 resolution, enjoy your movies with detailed images and vivid colours everytime, everywhere.',
            'brand_id' => '8',
            'processor_id' => '3',
            'graphicscard_id' => '1',
            'ram_id'=>'3',
            'touch_screen' => 'yes',
            'screen_resolution' => '1366 x 768',
            'screen_size' => '15',
            'price' => '599.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'HP 15.6" Laptop',
            'laptop_description' => 'Cover all your daily computing needs with this 15.6" HP laptop. It features an AMD Ryzen 5 3500U processor and 8GB of SDRAM for advanced capability in handling multiple apps without slowing down. The HP Fast Charge battery offers sufficient runtime so that you can cruise through all your work or school tasks with ease.',
            'brand_id' => '8',
            'processor_id' => '3',
            'graphicscard_id' => '2',
            'ram_id'=>'3',
            'touch_screen' => 'no',
            'screen_resolution' => '1366 x 768',
            'screen_size' => '15',
            'price' => '699.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'HP ENVY x360 15.6" Touchscreen 2-in-1 Laptop',
            'laptop_description' => 'Play, work, and draw on the go with this HP ENVY x360 15.6" touchscreen 2-in-1 laptop. Its convertible design lets you use it like a tablet by flipping the 360-degree hinged display. The powerful Intel Core i5-1035G1 processor, 8GB of RAM, and a 1TB solid state drive provide high-speed performance and lots of storage space.',
            'brand_id' => '8',
            'processor_id' => '2',
            'graphicscard_id' => '1',
            'ram_id'=>'3',
            'touch_screen' => 'yes',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '1199.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'HP OMEN 15.6" Gaming Laptop',
            'laptop_description' => 'Get ready for a powerful and seamless gaming experience with this HP OMEN gaming laptop. Boasting a 15.6" Full HD IPS display, this laptop gives you an authentic feel of gameplay with high-quality image details. It\'s powered by a 10th-gen Intel Core i7-10750H processor and 16GB of RAM to make your games and multi-tasking smooth and reliable.',
            'brand_id' => '8',
            'processor_id' => '4',
            'graphicscard_id' => '1',
            'ram_id'=>'5',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '1998.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Samsung 11.6" Chromebook 4',
            'laptop_description' => 'Google Classroom Compatible! The quality of Samsung meets the accessibility of Chrome OS. Its all-new light and compact design lets you stream, work, create, and play on a fast, secure device designed to take everywhere. This item was manufactured in 2020. Compact, light design with ultra-fast connectivity of Gigabit WiFi. Extremely well 12.5" hours of battery life. Latest Model.',
            'brand_id' => '9',
            'processor_id' => '1',
            'graphicscard_id' => '2',
            'ram_id'=>'1',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '12',
            'price' => '349.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Samsung Galaxy Book S 13.3" Touchscreen Laptop',
            'laptop_description' => 'Enjoy great performance and an ultra light design with the Samsung Galaxy Book S laptop. Powered by an Intel Core i5-L16G7 processor and 8GB LPDDR4x RAM, it is a great choice for both work and play. Its 13.3" LED touchscreen delivers full HD visuals while ensuring easy navigation.',
            'brand_id' => '9',
            'processor_id' => '2',
            'graphicscard_id' => '1',
            'ram_id'=>'3',
            'touch_screen' => 'yes',
            'screen_resolution' => '2560 x 1600',
            'screen_size' => '13',
            'price' => '1299.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Toshiba Portege Z30-A 13.3" Ultrabook',
            'laptop_description' => 'Off-lease in good condition, normal signs of wear-off from day-to-day use. Get uncompromising performance in a thin, light and portable package with these fast, powerful and secure business machines. The magnesium alloy body provides durability making the Portege Z30 Ultra-Thin ideal for busy professional travels and schools.',
            'brand_id' => '10',
            'processor_id' => '1',
            'graphicscard_id' => '1',
            'ram_id'=>'2',
            'touch_screen' => 'no',
            'screen_resolution' => '2560 x 1600',
            'screen_size' => '13',
            'price' => '480.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Toshiba Tecra 15.6" Screen Laptop',
            'laptop_description' => 'Off-lease in good condition, normal signs of wear-off from day-to-day use. Get uncompromising performance in a thin, light and portable package with these fast, powerful and secure business machines. The magnesium alloy body provides durability making the Tecra Ultra-Thin ideal for busy professional travels and schools.',
            'brand_id' => '10',
            'processor_id' => '2',
            'graphicscard_id' => '1',
            'ram_id'=>'3',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '15',
            'price' => '1043.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Apple MacBook Air 13.3"',
            'laptop_description' => 'The incredibly thin, light MacBook Air is now more powerful than ever. It features a Retina display, a new Magic Keyboard, Touch ID, processors with up to 2x performance, faster graphics, and double the storage. The wedge-shaped design is created from 100% recycled aluminum, and with all-day battery life, it\'s your perfectly portable, do-it-all notebook.',
            'brand_id' => '11',
            'processor_id' => '1',
            'graphicscard_id' => '1',
            'ram_id'=>'3',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '13',
            'price' => '1209.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    DB::table('laptops')->insert([
            'laptop_name' => 'Apple MacBook Pro 13.3"',
            'laptop_description' => 'The Apple M1 chip redefines the 13" MacBook Pro. Featuring an 8-core CPU that flies through complex workflows. Incredible 8-core GPU that crushes graphics-intensive tasks and enables super-smooth gaming. An advanced 16-core Neural Engine for more machine learning power. Super-fast unified memory for fluid performance. And the longest-ever battery life in a Mac at up to 20 hours.',
            'brand_id' => '11',
            'processor_id' => '1',
            'graphicscard_id' => '1',
            'ram_id'=>'3',
            'touch_screen' => 'no',
            'screen_resolution' => '1920 x 1080',
            'screen_size' => '13',
            'price' => '1699.99',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
