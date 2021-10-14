<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateCourseQuery extends Migration {

        public function up()
        {
            Schema::create('course_query', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('course_id');
                $table->bigInteger('course_variation_id');
                $table->bigInteger('query_id');
                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('course_query');
        }
    }
