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
        Schema::create('tb_rekammedis', function (Blueprint $table) {
            $table->id('id_rekammedis');

            $table->unsignedBigInteger('id_pasien');

            $table->text('diagnosa');
            $table->text('tindakan');
            $table->date('tanggal_pemeriksaan');

            $table->timestamps();

            $table->foreign('id_pasien')
                ->references('id_pasien')
                ->on('tb_pasien');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_rekammedis');
    }
};
