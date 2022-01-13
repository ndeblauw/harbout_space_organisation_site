<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();

            $table->string('title', 255);
            $table->string('subtitle', 255)->nullable();
            $table->text('description')->nullable();
            $table->dateTime('begin_date');
            $table->dateTime('end_date');
            $table->boolean('visible')->default(false);
            $table->foreignId('location_id');
            $table->string('external_url')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
