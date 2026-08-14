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
        Schema::table('profil_desa', function (Blueprint $table) {
            $table->text('selayang_pandang')->nullable()->after('history');
            $table->json('geografi_json')->nullable()->after('geography');
            $table->json('statistik_json')->nullable()->after('stat_luas_wilayah');
            $table->json('daftar_rt_rw')->nullable()->after('statistik_json');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profil_desa', function (Blueprint $table) {
            $table->dropColumn(['selayang_pandang', 'geografi_json', 'statistik_json', 'daftar_rt_rw']);
        });
    }
};
