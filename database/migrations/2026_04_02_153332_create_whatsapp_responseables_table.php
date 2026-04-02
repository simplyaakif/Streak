<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('whatsapp_responseables', function (Blueprint $table) {
            $table->unsignedBigInteger('whatsapp_response_id');
            $table->foreign('whatsapp_response_id')
                ->references('id')
                ->on('whatsapp_responses')
                ->onDelete('cascade');

            $table->string('responseable_type');
            $table->unsignedBigInteger('responseable_id');

            $table->index(['responseable_type', 'responseable_id'], 'responseable_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('whatsapp_responseables');
    }
};
