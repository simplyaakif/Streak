<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class AddTimeInBatchesTable extends Migration {

        public function up()
        {
            Schema::table('batches', function (Blueprint $table) {
                $table->string('time')->nullable();
            });
        }

        public function down()
        {
            Schema::table('batches', function (Blueprint $table) {
                //
            });
        }
    }
