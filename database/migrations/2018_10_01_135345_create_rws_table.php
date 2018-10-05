<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRwsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rws', function (Blueprint $table) {
            $table->increments('id');
            $table->String('rw_name',50);
            $table->String('rw_desc',255);
            $table->integer('kec_id')->unsigned();
            $table->integer('kab_id')->unsigned();
            $table->timestamps();

            $table->index('kec_id');
            $table->index('kab_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rws');
    }
}
