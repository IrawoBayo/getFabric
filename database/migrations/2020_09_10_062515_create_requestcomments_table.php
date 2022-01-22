<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestcommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestcomments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('comment');
            $table->boolean('approved');
            $table->integer('request_id')->unsigned();
            $table->timestamps();


        });

            Schema::table('requestcomments', function($table){
            $table->foreign('request_id')->references('id')->on('reqs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign(['requests_id']);
        Schema::dropIfExists('requestcomments');

    }
}
