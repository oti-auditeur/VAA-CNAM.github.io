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

        Schema::create('paddlers', function (Blueprint $table) {
            $table->increments('paddlers_id'); // Utilisez increments pour déclarer une clé primaire auto-incrémentée
            $table->string('name', 255)->nullable();
            $table->string('first_name', 255)->nullable();
            $table->date('birthday')->nullable();
            $table->string('mail_address', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->integer('experience_level')->nullable();
        });

        Schema::create('cultural_elements', function (Blueprint $table) {
            $table->increments('cultural_elements_id');
            $table->unsignedInteger('paddlers_id')->index()->nullable();
            $table->foreign('paddlers_id')->references('paddlers_id')->on('paddlers');
            $table->string('title', 255)->nullable();
            $table->string('description', 255)->nullable();
            $table->string('type_video_article_event', 255)->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cultural_elements');
        Schema::dropIfExists('paddlers');
    }
};

