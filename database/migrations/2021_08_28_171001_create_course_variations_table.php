<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateCourseVariationsTable extends Migration {

        public function up()
        {
            Schema::create('course_variations', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('course_id');
                $table->text('duration');
                $table->text('price');
                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('course_variations');
        }
    }
