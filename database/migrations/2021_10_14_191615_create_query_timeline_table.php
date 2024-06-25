<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateQueryTimelineTable extends Migration {

        public function up()
        {
            Schema::create('query_timeline', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('query_id');
                $table->bigInteger('timeline_id');
                $table->string('remarks');
                $table->dateTime('fw_date_time')->nullable();

                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('query_timeline');
        }
    }
