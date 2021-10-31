<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateIncomesTable extends Migration {

        public function up()
        {
            Schema::create('incomes', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('type');
                $table->string('amount');
                $table->dateTime('paid_on')->nullable();
                $table->string('paid_by');
                $table->bigInteger('user_id');
                $table->text('remarks')->nullable();
                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('incomes');
        }
    }
