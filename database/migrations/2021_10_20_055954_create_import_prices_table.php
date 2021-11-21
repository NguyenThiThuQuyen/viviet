<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportPricesTable extends Migration
{
    /***
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_prices', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedInteger('price');
            $table->date('apply');
            $table->foreignId('material_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('import_prices');
    }
}
