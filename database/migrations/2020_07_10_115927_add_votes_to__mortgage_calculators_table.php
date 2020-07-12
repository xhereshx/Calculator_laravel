<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVotesToMortgageCalculatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mortgage_calculators', function (Blueprint $table) {
            $table->integer('Max_mortgage');
            $table->integer('Lowest_payment_time');
            $table->integer('Max_mortgage_savings');
            $table->integer('Choosen_payment_amount');
            $table->integer('Choosent_payment_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mortgage_calculators', function (Blueprint $table) {
            $table->dropColumn('Max_mortgage');
            $table->dropColumn('Lowest_payment_time');
            $table->dropColumn('Max_mortgage_savings');
            $table->dropColumn('Choosen_payment_amount');
            $table->dropColumn('Choosent_payment_time');
        });
    }
}
