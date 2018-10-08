<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik',20);
            $table->string('nkk',20);
            $table->string('nama',100);
            $table->string('tempat_lahir',50);
            $table->date('tanggal_lahir');
            $table->enum('jenkel',['l','p']);
            $table->boolean('is_kepalakeluarga');
            $table->integer('rt_id')->unsigned();
            $table->timestamps();

            $table->index('rt_id');
            $table->foreign('rt_id')->references('id')->on('rts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wargas');
    }
}
