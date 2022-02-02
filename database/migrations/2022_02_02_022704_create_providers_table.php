<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('nit');
            $table->string('cedula');
            $table->string('business_name');
            $table->string('property_name');
            $table->string('name');
            $table->string('lastname1');
            $table->string('lastname2');
            $table->string('address');
            $table->string('phone_number1');
            $table->string('phone_number2')->nullable();
            $table->string('fax');
            $table->string('email')->unique();
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
        Schema::dropIfExists('providers');
    }
}
