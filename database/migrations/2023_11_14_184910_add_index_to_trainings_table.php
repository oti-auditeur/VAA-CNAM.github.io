<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexToTrainingsTable extends Migration
{
    public function up()
    {
        Schema::table('trainings', function (Blueprint $table) {
            $table->index('trainings_id');
        });
    }

    public function down()
    {
        Schema::table('trainings', function (Blueprint $table) {
            $table->dropIndex(['trainings_id']);
        });
    }
}
