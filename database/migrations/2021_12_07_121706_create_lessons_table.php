<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateLessonsTable extends Migration {

        public function up()
        {
            Schema::create('lessons', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('title');
                $table->text('short_description');
                $table->longText('long_description');
                $table->date('date');
                $table->bigInteger('user_id');
                $table->bigInteger('batch_id');
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('lessons');
        }
    }
