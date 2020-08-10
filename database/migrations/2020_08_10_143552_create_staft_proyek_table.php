<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaftProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staft_proyek', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('proyek_id')->unsigned();
            $table->integer('staft_id')->unsigned();
            $table->foreign('proyek_id')->references('id')->on('proyek');
            $table->foreign('staft_id')->references('id')->on('karyawan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('staft_proyek');
    }
}
