    <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger('merk_id');
            $table->foreign('merk_id')->references('id')->on('merks')->onDelete('cascade');
            
            $table->unsignedInteger('kategori_id');
            $table->foreign('kategori_id')->references('id')->on('kategori_barangs')->onDelete('cascade');
            
            $table->string('nama_barang');
            $table->string('harga_barang');
            $table->string('deskripsi');
            $table->integer('stock');
            $table->string('warna');
            $table->string('ukuran');
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
        Schema::dropIfExists('barangs');
    }
}
