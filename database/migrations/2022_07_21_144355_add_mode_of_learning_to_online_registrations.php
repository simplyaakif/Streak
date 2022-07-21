<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {

        public function up()
        {
            Schema::table('online_registrations', function (Blueprint $table) {
                $table->string('mode_of_learning');
            });
        }

        public function down()
        {
            Schema::table('online_registrations', function (Blueprint $table) {
                //
            });
        }
    };
