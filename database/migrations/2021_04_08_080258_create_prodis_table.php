<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodis', function (Blueprint $table) {
            $table->id();
            $table->integer('unitkerja_key')->nullable();
            $table->integer('source_key')->nullable();
            $table->string('kode_prodi', 255)->nullable();
            $table->string('nama', 255)->nullable();
            $table->timestamp('expiry_at')->nullable();
            $table->integer('u_parent_key')->nullable();
            $table->string('uk_program', 255)->nullable();
            $table->string('kode_jurusan', 255)->nullable();
            $table->string('nama_jurusan', 255)->nullable();
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
        Schema::dropIfExists('prodis');
    }
}
