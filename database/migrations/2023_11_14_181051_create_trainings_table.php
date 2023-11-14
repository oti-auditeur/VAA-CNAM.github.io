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
        Schema::disableForeignKeyConstraints();

        Schema::create('trainings', function (Blueprint $table) {
            $table->index('trainings_id');
            $table->index('penalties_id');
            $table->integer('trainings_id')->primary();
            $table->integer('trainers_id')->nullable();
            $table->foreign('trainers_id')->references('trainers_id')->on('trainers');
            $table->foreign('penalties_id')->references('penalties_id')->on('penalties');
            $table->integer('free_places_id')->nullable();
            $table->foreign('free_places_id')->references('canoes_id')->on('canoes');
            $table->foreign('trainings_id')->references('trainings_id')->on('trainings_details');
            $table->dateTime('date_time')->nullable();
            $table->string('location', 255)->nullable();
            $table->string('goals', 255)->nullable();
            $table->string('exercises', 255)->nullable();
            $table->integer('difficult_level')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};
