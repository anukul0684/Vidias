<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->dateTime('shipped_date');
            $table->text('order_billing_address');
            $table->text('order_shipping_address');
            $table->string('email', 255);
            $table->string('mobile_number',255);
            $table->double('subtotal',15,2);
            $table->text('gst');
            $table->text('pst');
            $table->text('hst');
            $table->text('qst');
            $table->double('total',15,2);
            $table->integer('card_number')->nullable();
            $table->enum('payment_status',array('complete','pending'))->default('pending');
            $table->foreignId('transaction_id')->nullable();            
            $table->enum('active',['yes','no'])->nullable();
            $table->enum('shipped',['yes','no'])->default('no');
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
        Schema::dropIfExists('orders');
    }
}
