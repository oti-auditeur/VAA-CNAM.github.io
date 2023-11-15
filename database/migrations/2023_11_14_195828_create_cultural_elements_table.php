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

        if (!Schema::hasTable('cultural_elements')) {
            Schema::create('cultural_elements', function (Blueprint $table) {
                $table->id();  // Utilisez "id" au lieu de "integer"
                $table->unsignedBigInteger('paddlers_id')->index()->nullable();
                $table->foreign('paddlers_id')->references('id')->on('paddlers');
                $table->string('title', 255)->nullable();
                $table->string('description', 255)->nullable();
                $table->string('type_video_article_event', 255)->nullable();
            });
        }

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cultural_elements');
    }
};