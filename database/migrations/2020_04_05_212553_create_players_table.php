<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('username')->unique();
            $table->text('fullname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_player')->default(false);

            $table->string('avatar')->default(config('chatify.user_avatar.default'));
            $table->string('messenger_color')->default('#2180f3');
            $table->boolean('dark_mode')->default(0);
            $table->boolean('active_status')->default(0);
            
            $table->string('status');
            $table->string('birthday');
            $table->string('nationality');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('verified')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
