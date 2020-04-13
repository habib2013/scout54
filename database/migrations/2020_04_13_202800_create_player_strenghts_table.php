<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerStrenghtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_strenghts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('player_id');
            $table->string('pace');
            $table->string('acceleration');
            $table->string('dribbling');
            $table->string('ball_control');
            $table->string('technique');
            $table->string('passing');
            $table->string('movement');
            $table->string('agility');
            $table->string('flair');
            $table->timestamps();

            $table->index('player_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_strenghts');
    }
}
