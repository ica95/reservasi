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
        Schema::create('tb_laporan', function (Blueprint $table) {
            $table->id('id_laporan');

            $table->unsignedBigInteger('id_reservasi');

            $table->date('tanggal_laporan');
            $table->text('keterangan');

            $table->timestamps();

            $table->foreign('id_reservasi')
                ->references('id_reservasi')
                ->on('tb_reservasi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_laporan');
    }
};
