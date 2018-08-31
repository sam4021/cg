<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_products', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->uuid('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->uuid('sale_id');
            $table->foreign('sale_id')->references('id')->on('sales');
            $table->string('price');
            $table->string('cost');
            $table->json('imei');
            $table->integer('quantity');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('sale_products', function($table) {
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_products');
    }
}
