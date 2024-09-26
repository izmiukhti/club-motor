<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalerisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeris', function (Blueprint $table) {
            $table->id('galeri_id'); // ID unik untuk setiap galeri
            $table->string('galeri_nama');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade'); // Foreign key yang merujuk ke tabel users

            $table->string('foto'); // Kolom untuk menyimpan URL atau path foto
            $table->text('deskripsi')->nullable(); // Deskripsi foto, bisa null
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeris');
    }
}
