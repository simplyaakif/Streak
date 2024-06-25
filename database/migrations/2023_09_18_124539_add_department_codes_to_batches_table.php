<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {

        public function up(): void
        {
            Schema::table('batches', function (Blueprint $table) {
                $table->integer('department_codes')->default(0);
            });
        }

        public function down(): void
        {
            Schema::table('batches', function (Blueprint $table) {
                $table->dropColumn('department_codes');
                //
            });
        }
    };
