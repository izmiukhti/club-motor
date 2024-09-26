<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id('produk_id');  // ID unik untuk setiap produk
            $table->string('nama');  // Nama produk
            $table->text('deskripsi')->nullable();  // Deskripsi produk
            $table->decimal('harga', 10, 2);  // Harga produk
            $table->string('gambar')->nullable();  // Nama file gambar produk
            $table->enum('kategori', ['accessories', 'parts', 'services']);  // Kategori produk
            $table->timestamps();  // Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
