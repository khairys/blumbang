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
            $table->text('operating_hours')->nullable()->after('maps_embed');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengaturan_website', function (Blueprint $table) {
            $table->dropColumn('operating_hours');
        });
    }
};
