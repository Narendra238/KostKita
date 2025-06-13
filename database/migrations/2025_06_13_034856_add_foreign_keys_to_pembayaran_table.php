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
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->foreign(['id'], 'id')->references(['id'])->on('AnakKost')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_kmr'], 'id_kmr')->references(['id_kmr'])->on('kamar')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->dropForeign('id');
            $table->dropForeign('id_kmr');
        });
    }
};
