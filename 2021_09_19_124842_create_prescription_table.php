<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescription', function (Blueprint $table) {
            $table->id('Serial_No');
            $table->timestamps();

            $table->integer('P_id')->constrained();
            $table->integer('Drug_Trade_Name')->constrained();
            $table->date('P_Date');
            $table->integer('Quantity');
            $table->string('DR_Name');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescription');
    }
}
