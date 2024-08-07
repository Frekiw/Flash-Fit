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
        Schema::create('trainerpresences', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('location')->nullable();
            $table->bigInteger('trainer_id')->nullable();
            $table->bigInteger('remains')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainerpresences');
    }
};
