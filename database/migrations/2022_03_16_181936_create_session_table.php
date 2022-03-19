<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('time');
            $table->unsignedBigInteger('coach_id');
            $table->foreign('coach_id')->references('id')->on('coach');
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('room');
            $table->unsignedBigInteger('activity_id');
            $table->foreign('activity_id')->references('id')->on('activity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('session');
    }
};
