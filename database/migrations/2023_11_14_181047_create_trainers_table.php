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

        Schema::create('trainers', function (Blueprint $table) {
            $table->integer('trainers_id')->primary();
            $table->string('name', 255)->nullable();
            $table->string('first_name', 255)->nullable();
            $table->date('birthday')->nullable();
            $table->string('mail_address', 255)->nullable();
            $table->string('password', 255)->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainers');
    }
};
