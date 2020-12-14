<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraphicscardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graphicscards', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 255);
            $table->string('graphicscard_name', 255);
            $table->double('graphicscard_price',10,2);
            $table->enum('active', ['yes', 'no']);
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
        Schema::dropIfExists('graphicscards');
    }
}
