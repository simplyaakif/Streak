<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateCertificatesTable extends Migration {

        public function up()
        {
            Schema::create('certificates', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('batch_student_id');
                $table->bigInteger('student_id');
                $table->bigInteger('batch_id');
                $table->date('published_at');
                $table->string('certificate_number')->nullable();
                $table->string('registration_number')->nullable();
                $table->string('grade');
                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('certificates');
        }
    }
