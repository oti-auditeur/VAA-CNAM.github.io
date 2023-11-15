<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('attendances', function (Blueprint $table) {
            $table->id();  // Utilisez "id" au lieu de "integer"
            $table->unsignedBigInteger('trainings_id')->index()->nullable();
            $table->foreign('trainings_id')->references('id')->on('trainings');
            $table->unsignedBigInteger('team_id')->index()->nullable();
            $table->foreign('team_id')->references('id')->on('trainings_team');
            $table->unsignedBigInteger('paddlers_id')->index()->nullable();
            $table->foreign('paddlers_id')->references('id')->on('paddlers');
        });

        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};

