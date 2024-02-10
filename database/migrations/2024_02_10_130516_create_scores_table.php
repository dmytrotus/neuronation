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
        Schema::create('scores', function (Blueprint $table) {
            $table->id('score_id');
            $table->unsignedBigInteger('sid');
            $table->foreign('sid')->references('session_id')->on('sessions');
            $table->unsignedBigInteger('uid');
            $table->foreign('uid')->references('user_id')->on('users');
            $table->integer('score')->nullable();
            $table->integer('score_normalized')->nullable();
            $table->integer('start_difficulty')->nullable();
            $table->integer('end_difficulty')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scores');
    }
};
