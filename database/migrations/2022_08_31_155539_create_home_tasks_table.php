<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {

        public function up()
        {
            Schema::create('home_tasks', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('employee_id');
                $table->bigInteger('batch_id');
                $table->string('title');
                $table->text('homework');
                $table->dateTime('due_date_time')->nullable();

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('home_tasks');
        }
    };
