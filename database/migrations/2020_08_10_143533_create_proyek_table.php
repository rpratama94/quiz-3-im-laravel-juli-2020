<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek', function (Blueprint $table) {
            $table->increments('id'); 
            $table->char('nama_proyek', 255); 
            $table->longText('deskripsi_proyek'); 
            $table->timestamp('tgl_mulai', 0)->nullable();
            $table->timestamp('tgl_deadline', 0)->nullable(); 
            $table->boolean('status');
            $table->integer('manager_id')->unsigned();
            $table->foreign('manager_id')->references('id')->on('karyawan'); 
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
        Schema::dropIfExists('proyek');
    }
}
