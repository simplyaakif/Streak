<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateCourseQueryTable extends Migration {

        public function up()
        {
            Schema::create('course_query', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('course_id');
                $table->bigInteger('course_variation_id')->nullable();
                $table->bigInteger('query_id');
                $table->string('learning_type')->nullable();
                $table->string('remarks')->nullable();
                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('course_query');
        }
    }
