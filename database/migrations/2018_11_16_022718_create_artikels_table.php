<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('kategori_id');
            $table->foreign('kategori_id')->references('id')->on('kategori_artikels')->onDelete('cascade');

            $table->string('judul');
            $table->string('cover');
            $table->string('isi');
            $table->string('penulis');
            $table->date('tanggal');
            $table->string('slug');
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
        Schema::dropIfExists('artikels');
    }
}
