<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateBatchStudentTable extends Migration {

        public function up()
        {
            Schema::create('batch_student', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('batch_id');
                $table->bigInteger('student_id');
                $table->date('session_start_date');
                $table->date('session_end_date');
                $table->boolean('batch_status');
                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('batch_student');
        }
    }
