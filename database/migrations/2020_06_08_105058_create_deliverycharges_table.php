<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliverychargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliverycharges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_code')->nullable();
            $table->string('country_name');
            $table->string('state');
            $table->string('city');
            $table->string('lga');
            $table->string('zipcode');
            $table->float('delivery_charge');
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
        Schema::dropIfExists('deliverycharges');
    }
}
