<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {

        public function up()
        {
            Schema::table('employees', function (Blueprint $table) {
                $table->boolean('is_active')->default(1);
                $table->boolean('is_teacher')->default(0);
            });
        }

        public function down()
        {
            Schema::table('employees', function (Blueprint $table) {

            });
        }
    };
