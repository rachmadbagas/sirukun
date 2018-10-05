<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rw_id')->unsigned();
            $table->string('rt_name',50);
            $table->string('rt_desc',255);
            $table->timestamps();

            $table->index('rw_id');
            $table->foreign('rw_id')->references('id')->on('rws');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rts');
    }
}
