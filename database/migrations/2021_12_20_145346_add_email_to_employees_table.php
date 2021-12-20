<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class AddEmailToEmployeesTable extends Migration {

        public function up()
        {
            Schema::table('employees', function (Blueprint $table) {
                $table->string('email')->nullable();
            });
        }

        public function down()
        {
            Schema::table('employees', function (Blueprint $table) {
                //
            });
        }
    }
