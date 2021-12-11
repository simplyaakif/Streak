<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateOnlineSessionsTable extends Migration {

        public function up()
        {
            Schema::create('online_sessions', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('batch_id');
                $table->boolean('is_finished');
                $table->date('session_date');
                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('online_sessions');
        }
    }
