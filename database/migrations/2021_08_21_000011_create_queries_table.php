<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueriesTable extends Migration
{
    public function up()
    {
        Schema::create('queries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('mobile');
            $table->string('email')->nullable();
            $table->longText('address')->nullable();

            $table->bigInteger('staff_user_id')->nullable();
            $table->text('remarks')->nullable();

            $table->string('telephone')->nullable();
            $table->string('p_timings')->nullable();
            $table->string('reference')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }
}
