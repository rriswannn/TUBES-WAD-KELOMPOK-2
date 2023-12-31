<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToTrashesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('trashes', function (Blueprint $table) {
            $table->string('status')->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('trashes', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
