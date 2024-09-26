<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id('profile_id'); // ID unik untuk setiap profil
            $table->string('profile_nama');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade'); // Foreign key yang merujuk ke tabel users
            
            $table->text('bio')->nullable(); // Kolom bio
            $table->string('photo')->nullable(); // Nama file foto (opsional)
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
        Schema::dropIfExists('profiles');
    }
}
