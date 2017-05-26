<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bu_name');
            $table->string('bu_price');
            $table->integer('bu_rent');
            $table->integer('bu_rooms');
            $table->string('bu_square');
            $table->integer('bu_type');
            $table->string('bu_small_dis',160);
            $table->string('bu_meta',200);
            $table->string('bu_langtuide');
            $table->string('bu_place',50);
            $table->longtext('bu_large_dis');
            $table->integer('bu_status');
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
        Schema::dropIfExists('bus');
    }
}
