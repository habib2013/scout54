<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('player_id');
             $table->string('passport');
             $table->string('description');
             $table->string('style_of_play');
             $table->string('place_of_birth');
             $table->string('currnt_tournamnt');
             $table->string('height');
             $table->string('current_club');
             $table->string('squad_number');
             $table->string('position');
             $table->string('prefered_foot');
             $table->string('market_value');
             $table->string('players_agent');
             
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
        Schema::dropIfExists('player_profiles');
    }
}
