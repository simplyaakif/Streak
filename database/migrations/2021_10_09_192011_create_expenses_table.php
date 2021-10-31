<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateExpensesTable extends Migration {

        public function up()
        {
            Schema::create('expenses', function (Blueprint $table) {
                $table->bigIncrements('id');
                    $table->string('type');
                    $table->string('amount');
                    $table->boolean('is_paid');
                    $table->dateTime('paid_on');
                    $table->bigInteger('paid_by');
                    $table->string('paid_to');
                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('expenses');
        }
    }
