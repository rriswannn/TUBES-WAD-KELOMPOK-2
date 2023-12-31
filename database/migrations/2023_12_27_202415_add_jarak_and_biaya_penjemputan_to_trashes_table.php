<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('trashes', function (Blueprint $table) {
            // Tambahkan kolom 'jarak' jika belum ada
            if (!Schema::hasColumn('trashes', 'jarak')) {
                $table->double('jarak')->nullable();
            }

            // Tambahkan kolom 'biaya_penjemputan' jika belum ada
            if (!Schema::hasColumn('trashes', 'biaya_penjemputan')) {
                $table->double('biaya_penjemputan')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Tidak ada operasi pembatalan (down) karena ini hanya menambahkan kolom
    }
};
