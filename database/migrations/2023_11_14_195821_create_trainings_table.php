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
            $table->integer('trainings_id')->primary();
            $table->integer('trainer_id')->index()->nullable();
            $table->foreign('trainer_id')->references('trainers_id')->on('trainers');
            $table->integer('free_places_id')->index()->nullable();
            $table->foreign('free_places_id')->references('canoes_id')->on('canoes');
            $table->dateTime('date_time')->nullable();
            $table->string('location', 255)->nullable();
            $table->string('goals', 255)->nullable();
            $table->string('exercises', 255)->nullable();
            $table->integer('difficult_level')->nullable();
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
