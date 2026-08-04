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
        Schema::table('pengaturan_website', function (Blueprint $table) {
            $table->string('website_description')->nullable()->after('village_name');
        });

        Schema::table('profil_desa', function (Blueprint $table) {
            $table->string('organizational_structure')->nullable()->after('general_information');
            $table->string('stat_penduduk')->nullable()->after('organizational_structure');
            $table->string('stat_kk')->nullable()->after('stat_penduduk');
            $table->string('stat_rt_rw')->nullable()->after('stat_kk');
            $table->string('stat_luas_wilayah')->nullable()->after('stat_rt_rw');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengaturan_website', function (Blueprint $table) {
            $table->dropColumn('website_description');
        });

        Schema::table('profil_desa', function (Blueprint $table) {
            $table->dropColumn([
                'organizational_structure',
                'stat_penduduk',
                'stat_kk',
                'stat_rt_rw',
                'stat_luas_wilayah'
            ]);
        });
    }
};
