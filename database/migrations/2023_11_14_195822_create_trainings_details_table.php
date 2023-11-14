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

        Schema::create('trainings_details', function (Blueprint $table) {
            $table->integer('trainings_details_id')->primary();
            $table->integer('trainings_id')->index()->nullable();
            $table->foreign('trainings_id')->references('trainings_id')->on('trainings');
            $table->integer('team_id')->index()->nullable();
            $table->foreign('team_id')->references('team_id')->on('trainings__team');
            $table->integer('canoes_id')->index()->nullable();
            $table->foreign('canoes_id')->references('canoes_id')->on('canoes');
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
        Schema::dropIfExists('trainings_details');
    }
};
