<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateExpensesTable extends Migration {

        public function up()
        {
            Schema::create('expenses', function (Blueprint $table) {
                $table->bigIncrements('id');
                    $table->string('type')->nullable();
                    $table->string('amount')->nullable();
                    $table->boolean('is_paid')->nullable();
                    $table->dateTime('paid_on')->nullable();
                    $table->bigInteger('paid_by')->nullable();
                    $table->string('paid_to')->nullable();
                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('expenses');
        }
    }
