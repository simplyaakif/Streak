<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {

        public function up()
        {
            Schema::table('batch_student', function (Blueprint $table) {
                $table->text('status_comments')->nullable();
            });
        }

        public function down()
        {
            Schema::table('batch_student', function (Blueprint $table) {
                $table->dropColumn('status_comments');
            });
        }
    };
