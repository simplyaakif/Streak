<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('cnic_passport')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('guardian_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
