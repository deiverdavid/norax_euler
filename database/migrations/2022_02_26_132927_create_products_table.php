<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('description');
            $table->string('unit_measurement');
            $table->double('unit_measur_value');
            $table->unsignedBigInteger('id_category');
            $table->string('trademark');
            $table->boolean('iva');
            $table->double('value_iva');
            $table->double('last_price');
            $table->double('utility');
            $table->double('final_price');



            $table->foreign('id_category')->references('id')->on('categories');

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
        Schema::dropIfExists('products');
    }
}
