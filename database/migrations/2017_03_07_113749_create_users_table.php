<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email', 64)->unique();
            $table->string('username', 32)->unique();
            $table->string('password');
            $table->char('type', 1);
            $table->integer('room_id')->index('room_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();

            //Foreign Keys
            $table->foreign('room_id', 'fk_users_room')
                ->references('id')
                ->on('rooms')
                ->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
