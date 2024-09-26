<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id'); // ID unik untuk setiap event
            $table->string('event_nama');
            $table->string('judul'); // Judul event
            $table->text('deskripsi')->nullable(); // Deskripsi event, bisa null
            $table->dateTime('waktu'); // Tanggal dan waktu event
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
        Schema::dropIfExists('events');
    }
}
