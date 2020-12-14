<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rams', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 255);
            $table->string('ram_size', 10);
            $table->double('ram_price',10,2);
            $table->enum('active', ['yes', 'no'])->default('yes');
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
        Schema::dropIfExists('rams');
    }
}
