<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_payments', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('company_id');
            $table->uuid('user_id');
            $table->uuid('sale_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('sale_id')->references('id')->on('sales');
            $table->integer('amount');
            $table->string('mode_of_pay');
            $table->string('transaction_id');
            $table->softDeletes();
            $table->timestamps();
        });

        // Schema::table('sale_payments', function($table) {
            
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_payments');
    }
}
