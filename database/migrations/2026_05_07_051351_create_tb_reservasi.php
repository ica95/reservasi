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
        Schema::create('tb_reservasi', function (Blueprint $table) {
            $table->id('id_reservasi');

            $table->unsignedBigInteger('id_pasien');
            $table->unsignedBigInteger('id_dokter');

            $table->date('tanggal_reservasi');
            $table->time('jam_reservasi');

            $table->text('keluhan');
            $table->string('status_reservasi', 50);

            $table->timestamps();

            $table->foreign('id_pasien')
                ->references('id_pasien')
                ->on('tb_pasien');

            $table->foreign('id_dokter')
                ->references('id_dokter')
                ->on('tb_dokter');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_reservasi');
    }
};
