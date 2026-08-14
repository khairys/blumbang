<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pengumuman', function (Blueprint $table) {
            $table->date('event_date')->nullable()->after('expired_at');
            $table->string('event_time')->nullable()->after('event_date');
            $table->string('location')->nullable()->after('event_time');
            $table->string('contact')->nullable()->after('location');
            $table->string('activity_status')->default('aktif')->after('contact');
        });
    }

    public function down(): void
    {
        Schema::table('pengumuman', function (Blueprint $table) {
            $table->dropColumn(['event_date', 'event_time', 'location', 'contact', 'activity_status']);
        });
    }
};
