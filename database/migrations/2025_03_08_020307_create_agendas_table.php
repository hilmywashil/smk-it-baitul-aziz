<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable(); 
            $table->string('title'); 
            $table->text('description')->nullable(); 
            $table->string('tanggal')->nullable();
            $table->string('start_time');
            $table->string('end_time')->nullable(); 
            $table->string('location')->nullable();
            $table->string('status')->default('upcoming'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
