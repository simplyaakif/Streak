<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateTransactionsTable extends Migration {

        public function up()
        {
            Schema::create('transactions', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('transactionable_id');
                $table->string('transactionable_type');
                $table->string('amount');
                $table->boolean('is_expense')->default(0);
                $table->boolean('is_paid')->default(0);
                $table->dateTime('paid_on')->nullable();
                $table->bigInteger('account_id');

                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('transactions');
        }
    }
