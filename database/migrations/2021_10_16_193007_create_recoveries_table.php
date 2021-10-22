<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateRecoveriesTable extends Migration {

        public function up()
        {
            Schema::create('recoveries', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('batch_student_id');
                $table->bigInteger('batch_id');
                $table->bigInteger('student_id');
                $table->bigInteger('amount');
                $table->date('due_date');
                $table->boolean('is_paid')->default(0);
                $table->date('paid_on')->nullable();
                $table->bigInteger('account_id')->nullable();
                $table->bigInteger('course_id');

                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('recoveries');
        }
    }
