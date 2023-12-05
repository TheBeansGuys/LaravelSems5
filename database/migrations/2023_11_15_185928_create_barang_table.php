<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('barangs', function (Blueprint $table) {
        $table->id();
        $table->string('kode_barang');
        $table->string('nama_barang');
        $table->string('jenis_varian');
        $table->integer('qty');
        $table->decimal('harga_jual', 10, 2);
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
        Schema::dropIfExists('barang');
    }
}
