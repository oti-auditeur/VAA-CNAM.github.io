<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('trainings', function (Blueprint $table) {
            $table->id();  // Utilisez "id" au lieu de "integer"
            $table->unsignedBigInteger('trainers_id')->index()->nullable();  // Utilisez "unsignedBigInteger" pour les clés étrangères
            $table->foreign('trainers_id')->references('id')->on('trainers');
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
        Schema::dropIfExists('trainings');
    }
};
