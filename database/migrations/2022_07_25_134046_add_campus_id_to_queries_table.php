<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {

        public function up()
        {
            Schema::table('queries', function (Blueprint $table) {
                $table->bigInteger('campus_id')->nullable();
            });
        }

        public function down()
        {
            Schema::table('queries', function (Blueprint $table) {
                //
            });
        }
    };
