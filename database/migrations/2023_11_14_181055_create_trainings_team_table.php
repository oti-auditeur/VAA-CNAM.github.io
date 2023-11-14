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

        Schema::create('trainings_team', function (Blueprint $table) {
            $table->integer('team_id')->primary();
            $table->integer('trainings_id')->nullable();
            $table->foreign('trainings_id')->references('trainings_id')->on('trainings');
            $table->integer('paddlers_id')->nullable();
            $table->foreign('paddlers_id')->references('paddlers_id')->on('paddlers');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings_team');
    }
};
