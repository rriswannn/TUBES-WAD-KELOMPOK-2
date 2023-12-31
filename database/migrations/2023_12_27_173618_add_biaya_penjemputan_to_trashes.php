<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBiayaPenjemputanToTrashes extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('trashes', function (Blueprint $table) {
            $table->decimal('biaya_penjemputan', 10, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trashes', function (Blueprint $table) {
            $table->dropColumn('biaya_penjemputan');
        });
    }
}
