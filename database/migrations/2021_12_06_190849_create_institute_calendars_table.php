<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateInstituteCalendarsTable extends Migration {

        public function up()
        {
            Schema::create('institute_calendars', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('title');
                $table->string('short_description');
                $table->dateTime('event_date');
                $table->string('long_description');

                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('institute_calendars');
        }
    }
