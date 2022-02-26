<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('id_user');

            $table->integer('quantity');
            $table->double('price');
            $table->double('total');
            $table->double('discount');


            $table->foreign('id_product')->references('id')->on('products');
            $table->foreign('id_user')->references('id')->on('clients');

            


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
        Schema::dropIfExists('sales');
    }
}
