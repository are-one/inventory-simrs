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
        Schema::table('hasil_baca_audiometris', function (Blueprint $table) {
            $table->text('telinga_kanan')->nullable()->after('hasil');
            $table->text('telinga_kiri')->nullable()->after('telinga_kanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hasil_baca_audiometris', function (Blueprint $table) {
            $table->dropColumn(['telinga_kanan', 'telinga_kiri']);
        });
    }
};
