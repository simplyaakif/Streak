<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateGuardiansTable extends Migration {

        public function up()
        {
            Schema::create('guardians', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('mobile');
                $table->string('email');
                $table->string('relation');
                $table->string('profession')->nullable();
                $table->string('designation')->nullable();
                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('guardians');
        }
    }
