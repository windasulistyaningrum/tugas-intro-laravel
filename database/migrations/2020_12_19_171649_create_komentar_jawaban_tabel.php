<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarJawabanTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_jawaban_tabel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $tbale->longText('isi');
            $table->unsignedBigInteger('jawaban_id');
            $table->foreign('jawaban_id')->reference('id')->on('jawaban');
            $table->unsignedBigInteger('profil_id');
            $table->foreign('profil_id')->references('id')->on('profil');
        
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
        Schema::dropIfExists('komentar_jawaban_tabel');
    }
}
