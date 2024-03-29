<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateTimelinesTable extends Migration {

        public function up()
        {
            Schema::create('timelines', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('title');
                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('timelines');
        }
    }
