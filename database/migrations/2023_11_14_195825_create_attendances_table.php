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

        Schema::create('attendances', function (Blueprint $table) {
            $table->integer('attendances_id')->primary();
            $table->integer('trainings_id')->index()->nullable();
            $table->foreign('trainings_id')->references('trainings_id')->on('trainings');
            $table->integer('team_id')->index()->nullable();
            $table->foreign('team_id')->references('team_id')->on('trainings__team');
            $table->integer('paddlers_id')->index()->nullable();
            $table->foreign('paddlers_id')->references('paddlers_id')->on('paddlers');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
