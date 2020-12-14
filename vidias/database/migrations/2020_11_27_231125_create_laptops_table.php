<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->text('laptop_name');
            $table->longText('laptop_description');
            $table->foreignId('brand_id');
            $table->foreignId('processor_id');
            $table->foreignId('graphicscard_id');
            $table->foreignId('ram_id');
            $table->enum('touch_screen',array('yes','no'))->default('no');
            $table->enum('screen_resolution',array('1200 x 1920', 
                                                    '1366 x 768', 
                                                    '1920 x 1080', 
                                                    '2560 x 1440', 
                                                    '2560 x 1600', 
                                                    '3840 x 2160'))->default('1200 x 1920');
            $table->enum('screen_size',array('12', '13', '14', '15', '16', '17'))->default('12');
            $table->enum('usb_type',array('2.0', '3.0'))->default('2.0');
            $table->enum('active',array('yes','no'))->default('yes');
            $table->double('price',15,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laptops');
    }
}
