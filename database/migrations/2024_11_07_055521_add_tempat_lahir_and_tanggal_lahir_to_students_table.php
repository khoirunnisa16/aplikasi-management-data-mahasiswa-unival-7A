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
         Schema::table('students', function (Blueprint $table) {
            $table->string('tempat_lahir')->nullable()->after('nama'); // Tambahkan nama kolom setelah kolom terakhir
            $table->date('tanggal_lahir')->nullable()->after('tempat_lahir');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn(['tempat_lahir', 'tanggal_lahir']);
        });
    }
};
