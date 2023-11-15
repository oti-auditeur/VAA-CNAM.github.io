<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('trainings_details', function (Blueprint $table) {
            $table->id();  // Utilisez "id" au lieu de "integer"
            $table->unsignedBigInteger('trainings_id')->index()->nullable();
            $table->foreign('trainings_id')->references('id')->on('trainings');
            $table->unsignedBigInteger('team_id')->index()->nullable();
            $table->foreign('team_id')->references('id')->on('trainings_team');
            $table->unsignedBigInteger('canoes_id')->index()->nullable();
            $table->foreign('canoes_id')->references('id')->on('canoes');
            $table->dateTime('date_time')->nullable();
            $table->string('location', 255)->nullable();
            $table->string('goals', 255)->nullable();
            $table->string('exercises', 255)->nullable();
            $table->integer('difficult_level')->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('trainings_details');
    }
};
