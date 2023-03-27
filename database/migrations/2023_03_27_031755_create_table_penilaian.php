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
        Schema::create('table_penilaian', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->integer('nilai_quiz');
            $table->integer('nilai_tugas');
            $table->integer('nilai_absensi');
            $table->integer('nilai_praktek');
            $table->integer('nilai_uas');
            $table->integer('total');
            $table->string('grade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_penilaian');
    }
};
