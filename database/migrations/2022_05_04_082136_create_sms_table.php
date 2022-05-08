<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateSmsTable extends Migration {

        public function up()
        {
            Schema::create('sms', function (Blueprint $table) {
                $table->id();
                $table->string('send_to');
                $table->string('send_id');
                $table->text('message');
                $table->text('sms_type')->nullable();
                $table->morphs('smsable');
                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('sms');
        }
    }
