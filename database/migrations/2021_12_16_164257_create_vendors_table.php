<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateVendorsTable extends Migration {

        public function up()
        {
            Schema::create('vendors', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('mobile');
                $table->string('address');
                $table->string('type');

                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('vendors');
        }
    }
