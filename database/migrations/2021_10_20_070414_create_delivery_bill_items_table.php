<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryBillItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_bill_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('delivery_id');
            $table->foreignId('unit_id');
            $table->unsignedInteger('quatity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery_bill_items');
    }
}
