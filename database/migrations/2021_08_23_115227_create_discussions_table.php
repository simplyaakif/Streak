<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateDiscussionsTable extends Migration {

        public function up()
        {
            Schema::create('discussions', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->text('title');
                $table->longText('description');
                $table->integer('user_id');
                $table->integer('best_reply')->nullable();

                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('discussions');
        }
    }
