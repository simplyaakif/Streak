<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateAccountsTable extends Migration {

        public function up()
        {
            Schema::create('accounts', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('title');
                $table->string('account_number');
                $table->string('amount');
                $table->string('oversee_by_id');
                $table->string('type');
                $table->boolean('is_active')->default(1);
                $table->longText('icon')->nullable();
                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('accounts');
        }
    }
