<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateIssueRepliesTable extends Migration {

        public function up()
        {
            Schema::create('issue_replies', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('issue_id');
                $table->bigInteger('user_id');
                $table->string('message');

                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('issue_replies');
        }
    }
