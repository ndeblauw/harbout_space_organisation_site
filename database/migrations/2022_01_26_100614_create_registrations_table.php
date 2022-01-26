<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id');
            $table->foreignId('activity_id');
            $table->index(['user_id', 'activity_id']);

            $table->enum('payment_status', ['open', 'paid'])->default('open');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}
