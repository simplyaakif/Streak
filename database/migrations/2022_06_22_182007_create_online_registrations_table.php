<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {

        public function up()
        {
            Schema::create('online_registrations', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('father_name');
                $table->string('pakistan_mobile')->nullable();
                $table->string('whatsapp_mobile')->nullable();
                $table->string('email')->nullable();
                $table->string('address')->nullable();
                $table->string('pak_cnic')->nullable();
                $table->string('passport_number')->nullable();
                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('online_registrations');
        }
    };
