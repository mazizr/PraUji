<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('judul');
            $table->Integer('noisbn');
            $table->String('penulis');
            $table->String('penerbit');
            $table->Integer('tahun');
            $table->Integer('stok');
            $table->float('harga_pokok');
            $table->float('harga_jual');
            $table->float('ppn');
            $table->float('diskon'); 
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
        Schema::dropIfExists('bukus');
    }
}
