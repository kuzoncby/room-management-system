<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room')->unique();
            $table->decimal('current_power', 5, 2);
            $table->decimal('total_power', 5, 2);
            $table->decimal('current_quota', 5, 2);
            $table->decimal('total_quota', 5, 2);
            $table->boolean('cut_power')->default(false);
            $table->time('start_shift');
            $table->time('end_shift');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
