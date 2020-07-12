<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMortgageCalculatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MortgageCalculators', function (Blueprint $table) {
            $table->id();
            $table->integer('savings');
            $table->integer('income');
            $table->integer('age');
            $table->integer('liabilities');
            $table->integer('loan');
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
        Schema::dropIfExists('MortgageCalculators');
    }
}
