<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {

        public function up()
        {
            Schema::create('course_online_registration', function (Blueprint $table) {
                $table->id();
                $table->integer('course_id');
                $table->integer('online_registration_id');
                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('course_onlineregistration');
        }
    };
