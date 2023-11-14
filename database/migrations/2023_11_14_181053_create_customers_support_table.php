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

        Schema::create('customers_support', function (Blueprint $table) {
            $table->integer('customers_support_id')->primary();
            $table->integer('paddlers_id')->nullable();
            $table->foreign('paddlers_id')->references('paddlers_id')->on('paddlers');
            $table->string('type_of_request', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->string('request_description', 255)->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers_support');
    }
};
