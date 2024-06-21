<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ujians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guru_id');
            $table->unsignedBigInteger('kelas_id');
            $table->string('judul');
            $table->text('deskripsi');
            $table->dateTime('deadline');
            $table->time('time');
            $table->text('file');
            $table->string('subject')->nullable();
            $table->integer('nilai')->nullable();
            $table->text('komentar')->nullable();
            $table->timestamps();

            $table->foreign('guru_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ujians');
    }
};
