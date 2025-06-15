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
        Schema::create('AnakKost', function (Blueprint $table) {
            $table->string('id', 16)->primary();
            $table->string('namalengkap', 30)->nullable();
            $table->string('namaortu', 30)->nullable();
            $table->string('asal', 20)->nullable();
            $table->string('no_tlp', 15)->nullable();
            $table->string('no_ortu', 15)->nullable();
            $table->char('jenis_kelamin', 1)->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->integer('durasi_kost')->nullable();
            $table->string('id_kmr', 7)->index('fki_id_kmr');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('AnakKost');
    }
};
