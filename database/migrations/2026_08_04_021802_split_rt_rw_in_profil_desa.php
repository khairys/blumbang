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
            $table->dropColumn('stat_rt_rw');
            $table->string('stat_rt')->nullable()->after('stat_kk');
            $table->string('stat_rw')->nullable()->after('stat_rt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profil_desa', function (Blueprint $table) {
            $table->string('stat_rt_rw')->nullable();
            $table->dropColumn(['stat_rt', 'stat_rw']);
        });
    }
};
