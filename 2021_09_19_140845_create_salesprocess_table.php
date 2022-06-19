<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesprocessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesprocess', function (Blueprint $table) {
            $table->id('D_parcode');
            $table->string('Drug_Trade_Name');
            $table->integer('ph_id');
            $table->string('quantity');
            $table->string('type_of_sale');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salesprocess');
    }
}
