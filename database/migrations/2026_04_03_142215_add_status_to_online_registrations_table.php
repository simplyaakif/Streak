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
        Schema::table('online_registrations', function (Blueprint $table) {
            $table->json('status')->nullable()->after('ace_reference');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('online_registrations', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
