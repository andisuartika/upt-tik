<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggarans', function (Blueprint $table) {
            $table->string('nama_unit', 255);
            $table->string('kode_unit', 255);
            $table->string('kode_tahun', 255);
            $table->string('anggaran_tahun', 255);
            $table->string('kode_akun', 255);
            $table->string('jenis_uang', 255);
            $table->integer('total')->nullable();
            $table->string('ket', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggarans');
    }
}
