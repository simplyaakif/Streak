<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateEmployeesTable extends Migration {

        public function up()
        {
            Schema::create('employees', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('father_name');
                $table->string('gender');
                $table->date('date_of_birth');
                $table->string('mobile');
                $table->string('telephone')->nullable() ;
                $table->string('designation');
                $table->string('earning_type')->nullable();
                $table->string('salary_amount')->nullable();
                $table->string('salary_commission')->nullable();
                $table->text('address')->nullable();
                $table->bigInteger('user_id')->nullable();
                //

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('employees');
        }
    }
