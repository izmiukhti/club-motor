<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('artikel_id'); // ID unik untuk setiap artikel
            $table->string('artikel_nama');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade'); // Foreign key yang merujuk ke tabel users
            
            $table->string('judul'); // Judul artikel
            $table->text('konten'); // Konten artikel
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
        Schema::dropIfExists('articles');
    }
}
