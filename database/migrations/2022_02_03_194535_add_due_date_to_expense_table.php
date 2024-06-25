<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class AddDueDateToExpenseTable extends Migration {

        public function up()
        {
            Schema::table('expenses', function (Blueprint $table) {
                $table->bigInteger('vendor_id')->nullable();
                $table->date('due_date')->nullable();
            });
        }

        public function down()
        {
            Schema::table('expense', function (Blueprint $table) {
                //
            });
        }
    }
