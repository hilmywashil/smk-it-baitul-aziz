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
        Schema::create('profile_sekolahs', function (Blueprint $table) {
            $table->id();
            $table->text('prasarana')->nullable();
            $table->text('tujuan')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->text('identitas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_sekolahs');
    }
};
