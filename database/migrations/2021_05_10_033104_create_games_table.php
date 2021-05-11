<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->text('soal')->nullable();
            $table->string('image')->nullable();
            $table->text('jawaban');
            $table->text('pilihan1')->nullable();
            $table->text('pilihan2')->nullable();
            $table->text('pilihan3')->nullable();
            $table->string('kategori');
            $table->integer('no_soal');
            $table->integer('skor');
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
        Schema::dropIfExists('games');
    }
}
