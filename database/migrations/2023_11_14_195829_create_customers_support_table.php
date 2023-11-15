<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('customers_support', function (Blueprint $table) {
            $table->id();  // Utilisez "id" au lieu de "integer"
            $table->unsignedBigInteger('paddlers_id')->index()->nullable();
            $table->foreign('paddlers_id')->references('id')->on('paddlers');
            $table->string('type_of_request', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->string('request_description', 255)->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('customers_support');
    }
};

