<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class AddContactTypeToQueries extends Migration {

        public function up()
        {
            Schema::table('queries', function (Blueprint $table) {
                $table->integer('contact_type')->nullable();
                //
            });
        }

        public function down()
        {
            Schema::table('queries', function (Blueprint $table) {
                //
            });
        }
    }
