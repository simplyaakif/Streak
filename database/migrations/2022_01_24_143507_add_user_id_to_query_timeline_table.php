<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class AddUserIdToQueryTimelineTable extends Migration {

        public function up()
        {
            Schema::table('query_timeline', function (Blueprint $table) {
                $table->bigInteger('user_id')->nullable();
            });
        }

        public function down()
        {
            Schema::table('query_timeline', function (Blueprint $table) {
                //
            });
        }
    }
