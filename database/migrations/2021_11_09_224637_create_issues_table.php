<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateIssuesTable extends Migration {

        public function up()
        {
            Schema::create('issues', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('title');
                $table->string('type');
                $table->bigInteger('student_id');
                $table->integer('status');

                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('issues');
        }
    }
