<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateStudentAttendancesTable extends Migration {

        public function up()
        {
            Schema::create('student_attendances', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('student_id');
                $table->string('attendance_status');
                $table->bigInteger('batch_id');
                $table->dateTime('datetime');
                $table->bigInteger('employee_id');
                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('student_attendances');
        }
    }
